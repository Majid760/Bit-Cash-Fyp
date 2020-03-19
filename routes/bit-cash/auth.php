<?php

use Illuminate\Support\Facades\Route;


Route::prefix('user')->group(function(){

    Route::get('/login', 'Auth\UserLoginController@showLoginForm')->name('user.login');
    Route::get('/register', 'Auth\UserRegisterController@showRegistrationForm')->name('user.register');
    Route::post('/register', 'Auth\UserRegisterController@register')->name('user.register');
    Route::post('/login', 'Auth\UserLoginController@login')->name('user.login');
    Route::get('/logout','Auth\UserLoginController@logout')->name('user.logout');

    //user forgot password

    Route::get('/forgot', 'Auth\UserForgotPasswordController@showLinkRequestForm')->name('user.forgot');
    Route::post('/password/email', 'Auth\UserForgotPasswordController@sendResetLinkEmail')->name('user.password.email');
    Route::get('/password/reset/{token}', 'Auth\UserResetPasswordController@showResetForm')->name('user.password.reset');
    Route::post('/password/update', 'Auth\UserResetPasswordController@reset')->name('user.password.update');


});
