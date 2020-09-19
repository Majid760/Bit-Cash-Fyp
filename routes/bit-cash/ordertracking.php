<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;


Route::middleware(['auth:admin'])->prefix('admin')->group(function () {

    Route::get('/order-tracking','LiveOrderTrackingController@index')->name('admin.live-order-tracking');
    Route::post('/submit-order-track','LiveOrderTrackingController@store')->name('admin.order-tracking-post');

    // User-Clicks Tracking routes
    Route::get('/user-click','Admin\UserClicksController@index')->name('admin.user-clicks');

    //

});


// user clicks tracking button

Route::get('/track-product/{id}','Frontend\User\UserTrackController@addProduct')->name('product.track-product');





