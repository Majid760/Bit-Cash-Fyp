<?php

// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;


require_once 'bit-cash/frontend.php';
require_once 'bit-cash/auth.php';
require_once 'bit-cash/user.php';
require_once 'bit-cash/product.php';
require_once 'bit-cash/admin.php';
require_once 'bit-cash/ordertracking.php';



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

Route::Auth();

Route::get('store','StoreController@index')->name('store');


// Route::get('/home', 'HomeController@index')->name('home');
//  Route::get('/track-product/{id}'.function(){
//      return redirect()->away('https://www.google.com/')->send();

//  })->name('product.track-product');


