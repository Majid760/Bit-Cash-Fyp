<?php

use Illuminate\Support\Facades\Route;

Route::prefix('product')->group(function(){

    Route::get('/product-detail', 'ProductController@index')->name('product.product-detail');

});



