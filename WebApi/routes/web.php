<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

//frontent view controller
Route::get('/', [FrontendController ::class, 'index']);
Route::get('/informasi', [FrontendController ::class, 'informasi']);
Route::get('/dokumentasi', [FrontendController ::class, 'dokumentasi']);
Route::get('/produk', [FrontendController ::class, 'produk']);
Route::get('/contact', [FrontendController ::class, 'contact']);
Route::get('/detail_informasi', [FrontendController ::class, 'detail_informasi']);




Route::get('/sadmin', function () {
    return view('backend/dashboard');
});

Route::get('/login', function () {
    return view('backend/auth/login');
});

Route::get('/datapengguna', function () {
    return view('backend/layouts/datapengguna');
});

Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');