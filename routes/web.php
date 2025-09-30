<?php

use App\Models\Card;
use App\Models\Transaction;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/about-us', function () {
    return view('about');
})->name('about');

Route::get('/credit-rewards', function () {
    return view('credit-rewards');
})->name('credit-rewards');

Route::get('/careers', function () {
    return view('careers');
})->name('careers');

Route::get('/credit-cards', function () {
    return view('credit-cards');
})->name('cc');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/our-services', function () {
    return view('services');
})->name('services');

Route::get('/our-benefits', function () {
    return view('benefits');
})->name('benefits');

Route::get('/transfer', [App\Http\Controllers\TransactionController::class, 'tindex'])->name('transfer');

Route::post('/transfer', [App\Http\Controllers\TransactionController::class, 'store'])->name('transfer.send');

Auth::routes([
	'register' => false
]);

 Route::get('/cards', function () {

        $cards = Card::get();
        $debits = Transaction::where('type', 'income')->where('status', 'successful')->sum('amount');

        $credits = Transaction::where('type', 'expense')->where('status', 'successful')->sum('amount');
        
        return view('cards', compact('cards', 'debits', 'credits'));
        
    })->name('cards')->middleware('auth');

    Route::get('/transaction-history', [App\Http\Controllers\TransactionController::class, 'index'])->name('history');

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
    
   


});

