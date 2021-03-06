<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function(){
    Route::prefix('user')->group(function(){

        Route::get('/dashboard', 'UserDashboardController@index')->name('user.dashboard')->middleware('pagespeed');
        Route::get('/profile', 'UserDashboardController@userProfileData')->name('user.profile');
        Route::post('/profile/update', 'UserDashboardController@update')->name('user.profile.update');
        Route::post('/password-update', 'UserDashboardController@passwordUpdate')->name('user.password-update');

        // Account Routes

        Route::get('/account','Frontend\User\UserAccountController@index')->name('user.account')->middleware('pagespeed');
        Route::get('/account-history','Frontend\User\UserAccountController@accountHistory')->name('user.account-activity');
        Route::post('/taransactiondata','Frontend\User\UserAccountController@transactionData')->name('user.taransactionData');


        // Payment Routes
        Route::get('/payment', 'Frontend\User\UserPaymentSettingController@index')->name('user.payment')->middleware('pagespeed');
        Route::post('/transaction', 'Frontend\User\UserPaymentSettingController@UseramountTransaction')->name('user.amount-transaction');



         // CustomerSupport Routes
        Route::get('/support', 'Frontend\User\CustomerSupportController@index')->name('customer.support');
        Route::post('/email', 'Frontend\User\CustomerSupportController@sendingEmail')->name('user.email');

        // tracking the user and its click products
        // Route::get('/track-product'.'Frontend\User\UserTrackController@addProduct')->name('user.product-click');
        // Route::get('/track-product'.function(){
        //     return view('index');
        // })->name('user.product-click');


    });
});
