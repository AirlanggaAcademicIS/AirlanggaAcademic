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




//Route buat dosen ditaruh dibawah sini
Route::group(['prefix' => 'notulensi'], function() {
//Lihat daftar hasil rapat
Route::get('konfirmasi','Dosen\NotulensiController@index');
// Menampilkan form lihat notulensi rapat dari id yg dipilih
Route::get('konfirmasi/{id_notulen}/lihat','Dosen\NotulensiController@lihat');
Route::get('konfirmasi/{id_notulen}/konfirmasi','Dosen\NotulensiController@konfirmasi');
Route::post('konfirmasi/{id_notulen}/konfirmasihasil','Dosen\NotulensiController@konfirmasihasil');

Route::get('listhasil','Dosen\NotulensiController@index2');
Route::get('listhasil/{id_notulen}/lihat2','Dosen\NotulensiController@lihat2');





//Route buat karyawan ditaruh dibawah sini





});
});


