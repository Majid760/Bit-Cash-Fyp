<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

Route::Auth();
Route::prefix('user')->group(function(){

    Route::get('/login', 'Auth\UserLoginController@showLoginForm')->name('user.login')->middleware('pagespeed');
    Route::get('/register', 'Auth\UserRegisterController@showRegistrationForm')->name('user.register')->middleware('pagespeed');
    Route::post('/register', 'Auth\UserRegisterController@register')->name('user.register');
    Route::post('/login', 'Auth\UserLoginController@login')->name('user.login');
    // Route::post('/login', function(){
    //     return 'kdkkd';
    // })->name('user.login');

    Route::get('/logout','Auth\UserLoginController@logout')->name('user.logout')->middleware('pagespeed');

    //socilate routes
    // Route::get('/login/facebook', 'Auth\UserLoginController@redirectToFacebook');
    // Route::get('login/facebook/callback', 'Auth\UserLoginController@handleFacebookCallback');
    //user forgot password

    Route::get('/forgot', 'Auth\UserForgotPasswordController@showLinkRequestForm')->name('user.forgot')->middleware('pagespeed');
    Route::post('/password/email', 'Auth\UserForgotPasswordController@sendResetLinkEmail')->name('user.password.email');
    Route::get('/password/reset/{token}', 'Auth\UserResetPasswordController@showResetForm')->name('user.password.reset');
    Route::post('/password/update', 'Auth\UserResetPasswordController@reset')->name('user.password.update');


});
