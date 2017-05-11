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
		Route::get('karyawan/monitoring-skripsi/status','karyawan\monitoringskripsi\StatusController@index');
 // Menampilkan form tambah biodata
        Route::get('karyawan/monitoring-skripsi/status/create','karyawan\monitoringskripsi\StatusController@create');

        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('karyawan/monitoring-skripsi/status/create','karyawan\monitoringskripsi\StatusController@createAction');

        // Menghapus biodata sesuai id yang dipilih
        Route::get('karyawan/monitoring-skripsi/status/{id_kbk}/delete','karyawan\monitoringskripsi\StatusController@delete');

        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('karyawan/monitoring-skripsi/status/{id_kbk}/edit','karyawan\monitoringskripsi\StatusController@edit');

        // Mengupdate biodata dengan isi dari form
        Route::post('karyawan/monitoring-skripsi/status/{id_kbk}/edit','karyawan\monitoringskripsi\StatusController@editAction');


});
