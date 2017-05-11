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

Route::get('/',['as'=>'admin.index', 'uses'=>'HomeController@index']);

Route::group(['middleware' => 'auth'], function () {
Route::get('/logout', 'Auth\LoginController@logout');

/*
==========================================
Route buat mahasiswa ditaruh dibawah sini
=========================================
*/



/*
==========================================
Route buat dosen ditaruh dibawah sini
=========================================
*/



/*
==========================================
Route buat karyawan ditaruh dibawah sini
=========================================
*/
Route::group(['prefix' => 'karyawan'], function() {
//menampilkan tabel
	Route::get('PermohonanRuang','karyawan\PermohonanRuangController@index');
// Menampilkan form tambah 
	Route::get('PermohonanRuang/create','karyawan\PermohonanRuangController@create');
// Menambahkan form yg di isi tadi ke tabel 
	Route::post('PermohonanRuang/create','karyawan\PermohonanRuangController@createAction');
// Menghapus  sesuai id yang dipilih
	Route::get('PermohonanRuang/{id}/delete','karyawan\PermohonanRuangController@delete'); 
// Menampilkan form edit dari id yg dipilih
	Route::get('PermohonanRuang/{id}/edit','karyawan\PermohonanRuangController@edit');
// Mengupdate  dengan isi dari form
	Route::post('PermohonanRuang/{id}/edit','karyawan\PermohonanRuangController@editAction');


});
});