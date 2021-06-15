<?php

use App\Http\Controllers\UsersController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'Backend'], function(){
    Route::get('api_user', 'ApiUserController@getall');
    Route::get('api_user/{id}', 'ApiUserController@getus');
    Route::post('api_user', 'ApiUserController@createus');
    Route::put('api_user', 'ApiUserController@updateus');
    Route::delete('api_user', 'ApiUserController@deleteus');

});