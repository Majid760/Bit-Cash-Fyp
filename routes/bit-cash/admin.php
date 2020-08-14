<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;





Route::prefix('admin')->group(function(){

    Route::get('/register', 'Admin\Auth\AdminRegisterController@showRegistrationForm')->name('admin.register');
    Route::post('/register-signup', 'Admin\Auth\AdminRegisterController@register')->name('admin.register-signup');
    Route::get('/login', 'Admin\Auth\AdminLoginControllerr@showLoginForm')->name('admin.login');
    Route::get('/admin-login', 'Admin\Auth\AdminLoginControllerr@login')->name('admin.admin-login');
    Route::get('/admin-logout', 'Admin\Auth\AdminLoginControllerr@logout')->name('admin.admin-logout');


    /* Forgot Password Controller */
    Route::get('/forgot', 'Admin\Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.forgot');
    Route::post('/forgot-post', 'Admin\Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.forgot.post');
    Route::get('/password/reset/{token}', 'Admin\Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('/password/update', 'Admin\Auth\AdminResetPasswordController@reset')->name('admin.password.update');

});

Route::middleware(['auth:admin'])->prefix('admin')->group(function () {

    Route::get('/dashboard','Admin\AdminController@index')->name('admin.dashboard');

    //product import and export routes
    Route::get('/import-products/view','Admin\ExportImportController@index')->name('admin.product-imports-view');
    Route::get('/export-products', 'Admin\ExportImportController@product_export')->name('admin.export-product');
    Route::post('/import-products', 'Admin\ExportImportController@product_import')->name('admin.import-product');

    Route::get('/import-promoted-products/view','Admin\ExportImportController@showPromotedView')->name('admin.promoted-product-imports-view');
    Route::post('/import-promoted-products','Admin\ExportImportController@promoted_product_import')->name('admin.import-promoted-product');

    // user setting routes
    Route::get('/user-list','Admin\AdminUserController@index')->name('admin.all-user');
    Route::get('/user-edit/{id}','Admin\AdminUserController@edit')->name('admin.user-edit');
    Route::post('/send-email','Admin\AdminUserController@sendEmailToUser')->name('admin.send-email-touser');
    Route::get('/user-status/{id}','Admin\AdminUserController@changeUserStatus')->name('admin.user-status');

});
