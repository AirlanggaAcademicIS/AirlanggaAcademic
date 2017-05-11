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
	// Menampilkan tabel
        Route::get('verifikasi','Karyawan\VerifikasiController@index');
        Route::get('verifikasi/penelitian','Karyawan\VerifikasiController@createPenelitian');

        Route::get('verifikasi/prestasi','Karyawan\VerifikasiController@createPrestasi');


        Route::get('verifikasi/{id}/penelitian','Karyawan\VerifikasiController@editPenelitian');

        Route::post('verifikasi/{id}/penelitian','Karyawan\VerifikasiController@editPenelitianAction');

        Route::get('verifikasi/{id}/prestasi','Karyawan\VerifikasiController@editPrestasi');
        Route::post('verifikasi/{id}/prestasi','Karyawan\VerifikasiController@editPrestasiAction');


        Route::get('verifikasi/download/{id}','Karyawan\VerifikasiController@download');

	});
});
