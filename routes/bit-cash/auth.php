<?php

use Illuminate\Support\Facades\Route;


Route::prefix('user')->group(function(){

    Route::get('/login', 'Auth\UserLoginController@showLoginForm')->name('user.login');
    Route::get('/register', 'Auth\UserRegisterController@showRegistrationForm')->name('user.register');

    Route::post('/register', 'Auth\UserRegisterController@register')->name('user.register');



    // Route::get('/login', function(){
    //     return 'kdkdkkdkdk';
    // })->name('user.login');

});
