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
Route::get('','Dosen\NotulensiController@index');
// Menampilkan form edit notulensi rapat dari id yg dipilih
Route::get('notulensi/{id_notulen}/LihatHasilRapat','Dosen\NotulensiController@edit');
// Mengupdate notulensi rapat dengan isi dari form
Route::post('notulensi/{id_notulen}/LihatHasilRapat','Dosen\NotulensiController@editAction');






//Route buat karyawan ditaruh dibawah sini
Route::group(['prefix' => 'notulensi'], function() {
//Lihat daftar hasil rapat
Route::get('','Karyawan\NotulensiController@index');



});
});
});

