<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'FrontendController@index')->name('home')->middleware('pagespeed');
Route::get('/about', 'FrontendController@getAbout')->name('about')->middleware('pagespeed');
Route::get('/blog', 'FrontendController@getBlog')->name('blog')->middleware('pagespeed');
Route::get('/deals-coupons','FrontendController@getDealCoupons')->name('deals-coupons')->middleware('pagespeed');

//contactus page routes
Route::get('/contact','ContactUsController@index')->name('contact')->middleware('pagespeed');
Route::post('/contactus/emil','ContactUsController@sendingEmail')->name('contactus');
