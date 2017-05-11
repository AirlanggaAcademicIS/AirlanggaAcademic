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
   Route::group(['prefix' => 'mahasiswa'], function() {
//Fitur Biodata Mahasiswa
        // Menampilkan tabel
        Route::get('biodata-mahasiswa','Mahasiswa\BiodataMahasiswaController@index');

        // Menampilkan form tambah biodata
        Route::get('biodata-mahasiswa/create','Mahasiswa\BiodataMahasiswaController@create');

        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('biodata-mahasiswa/create','Mahasiswa\BiodataMahasiswaController@createAction');

        // Menghapus biodata sesuai id yang dipilih
        Route::get('biodata-mahasiswa/{id_bio}/delete','Mahasiswa\BiodataMahasiswaController@delete');

        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('biodata-mahasiswa/{id_bio}/edit','Mahasiswa\BiodataMahasiswaController@edit');

        // Mengupdate biodata dengan isi dari form
        Route::post('biodata-mahasiswa/{id_bio}/edit','Mahasiswa\BiodataMahasiswaController@editAction');
    });

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



});
