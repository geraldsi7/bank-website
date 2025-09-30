<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Auth;
use Validator;
use Mail;
use Hash;

class TransactionController extends Controller
{
   public function __construct()
   {
    $this->middleware('auth');
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions = Transaction::latest()->get();
        return view('pages.history', compact('transactions'));
    }

    public function tindex()
    {
        return view('pages.transfer');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function username()
    {
        return 'accNum';
    }

    public function store(Request $request)
    {
        $request->validate([
            $this->username() => 'required|digits:16',
            'amount' => 'required|numeric',
            'ref' => 'nullable',
            'sPwd' => 'required',
        ]);

        $pswd = $request->input('sPwd');
        $fromAcc = Auth::user()->accNum;
        $toAcc = $request->input('accNum');
        $spwd = Auth::user()->password;
        if (Hash::check($pswd, $spwd) && $fromAcc != $toAcc){
            $amount = $request->input('amount');
            $ref = $request->input('ref');

            $tCode = time();
            $ubal = Auth::user()->bal;
            $curBal = $ubal - $amount;

        //insert $data
            $book = new Transaction();
            $book->tCode = $tCode;
            $book->amount =  $amount;
            $book->curBal =  $curBal;
            $book->toAcc =  $toAcc;
            $book->fromAcc =  $fromAcc;
            $book->ref =  $ref;
            $book->status =  'pend';
            Auth::user()->transaction()->save($book); 

            $id = Auth::user()->id;
            $user = User::find($id);
            $user->bal = $curBal;
            $user->save();

            return redirect()->route('history');
        }
        elseif (Hash::check($pswd, $spwd) && $fromAcc == $toAcc) {
           $this->validate($request, [
            $this->username() => 'required|digits:16|same:' . Auth::user()->accNum,
        ]);
       }
       elseif (!Hash::check($pswd, $spwd) && $fromAcc != $toAcc) {
           $this->validate($request, [
            'sPwd' => 'same:spswd'
        ]);
       } else{
        $this->validate($request, [
            $this->username() => 'required|digits:16|same:' . Auth::user()->accNum,
            'sPwd' => 'same:spswd',
        ]);
    }
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //629U7-XLT5H-6SCGJ-2CENZ
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
