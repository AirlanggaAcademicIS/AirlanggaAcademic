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

Route::group(['prefix' => 'dosen'], function() {

            // Menampilkan tabel
        Route::get('konferensi','Dosen\KonferensiController@index');

        // Menampilkan form tambah biodata
        Route::get('konferensi/create','Dosen\KonferensiController@create');

        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('konferensi/create','Dosen\KonferensiController@createAction');

        // Menghapus biodata sesuai id yang dipilih
        Route::get('konferensi/{id}/delete','Dosen\KonferensiController@delete');

        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('konferensi/{id}/edit','Dosen\KonferensiController@edit');

        // Mengupdate biodata dengan isi dari form
        Route::post('konferensi/{id}/edit','Dosen\KonferensiController@editAction');

             
   });

/*
==========================================
Route buat karyawan ditaruh dibawah sini
=========================================
*/




 });