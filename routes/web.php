<?php

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

Route::get('/', function () {
    return view("auth.login");
});



Route::group(['middleware' => ['isAdmin']], function() {

});

Route::group(['middleware' => ['isLogistik']], function() {

});

Route::group(['middleware' => ['isFakturis']], function() {

});

Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');

Route::get('barang','BarangController@index');
Route::get('/barang/add','BarangController@add');
Route::post('/barang/save','BarangController@save');
Route::get('/barang/edit/{id}','BarangController@edit');
Route::get('/barang/hapus/{id}','BarangController@hapus');
Route::post('/barang/update','BarangController@update');

Route::get('pembelian','PembelianController@index');
Route::get('/pembelian/add','PembelianController@add');
Route::post('/pembelian/save','PembelianController@save');
Route::get('/pembelian/edit/{id}','PembelianController@edit');
Route::get('/pembelian/hapus/{id}','PembelianController@hapus');
Route::post('/pembelian/update','PembelianController@update');


Route::get('user','UsersControl@index');
Route::get('user/add','UsersControl@add');
Route::get('user/edit/{id}','UsersControl@edit');
Route::get('user/hapus/{id}','UsersControl@delete');
Route::post('user/save','UsersControl@save');

Route::get('pembelian','PembelianController@index');