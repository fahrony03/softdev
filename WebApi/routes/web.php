<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PegawaiController;

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

//frontend view controller
Route::get('/', 'FrontendController@index');

//backend admin view controller
Route::get('/sadmin', [BackendController ::class, 'home']);
Route::get('/user', [BackendController ::class, 'user']);
// Route::get('user', 'UsersController@index')->name('user');

//akses login
Route::get('/login', function () {
    return view('backend/auth/login');
});

Route::get('/data-pegawai', 'PegawaiController@index')->name('data-pegawai');

//login
Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');
Route::get('/registrasi', [LoginController ::class, 'registrasi']);
Route::post('/simpanregistrasi', 'LoginController@simpanregistrasi')->name('simpanregistrasi');

//auth
Route::group(['middleware' => ['auth', 'ceklevel:admin']], function(){
    //main
    Route::get('/sadmin', 'BackendController@index');

    //route user
    Route::get('/pengguna', 'PenggunaController@index')->name('pengguna');
    Route::get('/tambahpengguna', 'PenggunaController@create')->name('tambahpengguna');
    Route::post('/simpanpengguna', 'PenggunaController@store')->name('simpanpengguna');
    Route::get('/editpengguna/{id}', 'PenggunaController@edit')->name('editpengguna');
    Route::post('/updatepengguna/{id}', 'PenggunaController@update')->name('updatepengguna');
    Route::get('/hapuspengguna/{id}', 'PenggunaController@destroy')->name('hapuspengguna');

    //route dokumentasi
    Route::get('/dokumentasi', 'DokumentasiController@index')->name('dokumentasi');
    Route::get('/tambahdokumentasi', 'DokumentasiController@create')->name('tambahdokumentasi');
    Route::post('/simpandokumentasi', 'DokumentasiController@store')->name('simpandokumentasi');
    Route::get('/hapusdokumentasi/{id}', 'DokumentasiController@destroy')->name('hapusdokumentasi');
    Route::get('/editdokumentasi/{id}', 'DokumentasiController@edit')->name('editdokumentasi');
    Route::post('/updatedokumentasi/{id}', 'DokumentasiController@update')->name('updatedokumentasi');

    //route informasi
    Route::get('/informasis', 'InformasiController@index')->name('informasis');
    Route::get('/tambahinformasi', 'InformasiController@create')->name('tambahinformasi');
    Route::post('/simpaninformasi', 'InformasiController@store')->name('simpaninformasi');
    Route::get('/hapusinformasi/{id}', 'InformasiController@destroy')->name('hapusinformasi');
    Route::get('/editinformasi/{id}', 'InformasiController@edit')->name('editinformasi');
    Route::post('/updateinformasi/{id}', 'InformasiController@update')->name('updateinformasi');
});

Route::group(['middleware' => ['auth', 'ceklevel:user']], function(){
    //main
    Route::get('/homepage', [FrontendController ::class, 'homepage']);
    Route::get('/informasi', [FrontendController ::class, 'informasi']);
    Route::get('/produk', [FrontendController ::class, 'produk']);
    Route::get('/contact', [FrontendController ::class, 'contact']);
    Route::get('/detail_informasi', [FrontendController ::class, 'detail_informasi']);

    //frontend crud
    Route::get('/dokumentasis', 'DokumentasiController@artikeldokumentasi')->name('dokumentasis');

    
});