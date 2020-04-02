<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'FrontendController@index')->name('home');
// Route::get('/', function(){
//     return 'kdkkdkd';
// })->name('home');




Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

Route::get('/blog', function () {
    return view('frontend.blog');
})->name('blog');
