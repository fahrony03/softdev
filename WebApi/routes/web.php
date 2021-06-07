<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenggunaController;

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

//backend admin view controller
Route::get('/sadmin', [BackendController ::class, 'home']);
Route::get('/user', [BackendController ::class, 'user']);

//akses admin
Route::get('/sadmin', function () {
    return view('backend/home');
});

//akses login
Route::get('/login', function () {
    return view('backend/auth/login');
});

//Controller pengguna/user
Route::resource('penggunas', PenggunaController::class);