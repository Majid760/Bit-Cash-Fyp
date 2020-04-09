<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login', 'api\authapi\UserAuthApiController@login');
Route::post('register', 'api\authapi\UserAuthApiController@register');

Route::group(['middileware' => 'Auth::api'], function (){

    Route::post('detail', 'api\authapi\UserAuthApiController@getDetails');
    Route::post('logout', 'api\authapi\UserAuthApiController@logout');


});

