<?php

use Illuminate\Support\Facades\Route;

Route::prefix('product')->group(function(){

    Route::get('/product-detail', 'ProductController@index')->name('product.product-detail');
    Route::get('/detail/{id}','ProductController@getDetail')->name('product.detail')->middleware('pagespeed');


    // getting different type of products according to category category

    Route::get('/category/{id}','ProductController@getProducts')->name('category')->middleware('pagespeed');
    Route::get('/search','SearchController@findProduct')->name('search.product');

});



