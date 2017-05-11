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
// Modul Kurikulum
Route::group(['prefix' => 'dosen'], function() {

	Route::group(['prefix' => 'kurikulum'], function() {

		Route::group(['prefix' => 'kodecppem'], function() {

		    Route::get('/','Dosen\Kurikulum\KodeController@index');

		    Route::post('create','Dosen\Kurikulum\KodeController@createAction');

		    Route::get('/delete/{id}','Dosen\Kurikulum\KodeController@delete');

		    Route::get('/edit/{id}','Dosen\Kurikulum\KodeController@edit');

		    Route::post('/edit/{id}','Dosen\Kurikulum\KodeController@editAction');
		});

	});
        });

        /*
==========================================
Route buat karyawan ditaruh dibawah sini
=========================================
*/
//modul mahasiswa
Route::group(['prefix' => 'karyawan'], function() {


        // Menampilkan tabel
        Route::get('akun','Karyawan\AkunMahasiswaController@index');
        // Menampilkan form tambah biodata
        Route::get('akun/create','Karyawan\AkunMahasiswaController@create');
        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('akun/create','Karyawan\AkunMahasiswaController@createAction');
        // Menghapus biodata sesuai id yang dipilih
        Route::get('akun/{nim}/delete','Karyawan\AkunMahasiswaController@delete');
        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('akun/{nim}/edit','Karyawan\AkunMahasiswaController@edit');
        // Mengupdate biodata dengan isi dari form
        Route::post('akun/{nim}/edit','Karyawan\AkunMahasiswaController@editAction');
        });

});