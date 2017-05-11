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
*/Route::group(['prefix' => '/notulensi'], function() {
		// Menampilkan tabel notulensi
        Route::get('','Karyawan\NotulensiKaryawanController@index');
                // Menampilkan form tambah biodata
        Route::get('notulensi/create','Karyawan\NotulensiKaryawanController@create');
                // Menambahkan form yg di isi tadi ke tabel notulensi
        Route::post('notulensi/create','Karyawan\NotulensiKaryawanController@createAction');
   
	Route::get('notulensi/{id_notulen}/delete','Karyawan\NotulensiKaryawanController@delete');

         Route::get('notulensi/{id_notulen}/edit','Karyawan\NotulensiKaryawanController@edit');

        Route::post('notulensi/{id_notulen}/edit','Karyawan\NotulensiKaryawanController@editAction');



/*
==========================================
Route buat karyawan ditaruh dibawah sini
=========================================
*/



});
});
