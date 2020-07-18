<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function(){
    Route::prefix('user')->group(function(){

        Route::get('/dashboard', 'UserDashboardController@index')->name('user.dashboard');
        Route::get('/profile', 'UserDashboardController@userProfileData')->name('user.profile');
        Route::post('/profile/update', 'UserDashboardController@update')->name('user.profile.update');
        Route::get('/password-reset', 'UserDashboardController@passwordReset')->name('user.password-reset');
        Route::post('/password-update', 'UserDashboardController@passwordUpdate')->name('user.password-update');



        // Account Routes

        Route::get('/account','Frontend\User\UserAccountController@index')->name('user.account');


    });
});
