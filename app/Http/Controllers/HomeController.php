<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Transaction;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        /*        
        $bal = 50402975.00;
        $dp = 0.001/100;
        $cb = 0;
        $db = 0;
        $cp = 5.8/100;

        for ($i=10; $i <= 22 ; $i++) {
          
    
        $c = round($cp * $bal, 2);
        $cb += $c; 
        $bal += $c;
        $ct = '20' . $i . '-12-28 ' . mt_rand(12, 15) . ':' . mt_rand(10, 59) . ':' . mt_rand(10, 59);

        $cr = new Transaction();
        $cr['t_code'] = mt_rand(10000000000,99999999999);
        $cr['type']  = 'income';
        $cr['amount'] = $c;
        $cr['ref']  = 'Interest Payment';
        $cr['status'] = 'successful';
        $cr['balance'] = $bal;
        $cr['created_at'] = $ct;
        $cr['updated_at'] = $ct;

        $cr->save();
        
        $d = round($dp * $bal, 2);
        $db += $d;
        $bal -= $d;
        $dt = '20' . $i . '-12-30 ' . mt_rand(12, 15) . ':' . mt_rand(10, 59) . ':' . mt_rand(10, 59);

        $dr = new Transaction();
        $dr['t_code'] = mt_rand(10000000000,99999999999);
        $dr['type']  = 'expense';
        $dr['amount'] = $d;
        $dr['ref']  = 'Account Maintenance';
        $dr['status'] = 'successful';
        $dr['balance'] = $bal;
        $dr['created_at'] = $dt;
        $dr['updated_at'] = $dt;

        $dr->save();  
    }

    */

        $cards = Card::get();
        $transactions = Transaction::latest()->take(6)->get();

        $debits = Transaction::where('type', 'income')->where('status', 'successful')->sum('amount');

        $credits = Transaction::where('type', 'expense')->where('status', 'successful')->sum('amount');

        $incomes = [];

        $expenses = [];

        for ($i = 10; $i <= 22; $i++) {
            $incomes[$i] = Transaction::whereYear('updated_at', '20' . $i)->where('type', 'income')->where('status', 'successful')->sum('amount');

            $expenses[$i] = Transaction::whereYear('updated_at', '20' . $i)->where('type', 'expense')->where('status', 'successful')->sum('amount');
        }

        return view('home', compact('cards', 'transactions', 'incomes', 'expenses', 'debits', 'credits'));

    }     
}
