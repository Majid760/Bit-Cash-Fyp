<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function(){
    Route::prefix('user')->group(function(){

        Route::get('/dashboard', 'UserDashboardController@index')->name('user.dashboard');

    });
});
