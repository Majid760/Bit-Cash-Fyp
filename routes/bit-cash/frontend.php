<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'FrontendController@index')->name('home');
Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

Route::get('/contact','ContactUsController@index')->name('contact');
Route::post('/contactus/emil','ContactUsController@sendingEmail')->name('contactus');

Route::get('/blog', function () {
    return view('frontend.blog');
})->name('blog');
