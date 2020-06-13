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



});
