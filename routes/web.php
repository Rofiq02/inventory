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

Route::get('supplier','SupllierController@index');
Route::get('/supplier/add','SupllierController@add');
Route::post('/supplier/save','SupllierController@save');
Route::get('/supplier/edit/{id}','SupllierController@edit');
Route::get('/supplier/hapus/{id}','SupllierController@hapus');
Route::post('/supplier/update','SupllierController@update');

Route::get('pelanggan','PelangganController@index');
Route::get('/pelanggan/add','PelangganController@add');
Route::post('pelanggan/save','PelangganController@save');
Route::get('/pelanggan/edit/{id}','PelangganController@edit');
Route::get('/pelanggan/hapus/{id}','PelangganController@hapus');
Route::post('/pelanggan/update','PelangganController@update');

Route::get('user','UsersControl@index');
Route::get('user/add','UsersControl@add');
Route::get('user/edit/{id}','UsersControl@edit');
Route::get('user/hapus/{id}','UsersControl@delete');
Route::post('user/save','UsersControl@save');