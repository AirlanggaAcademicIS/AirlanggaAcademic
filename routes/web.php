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
//Penelitian Mahasiswa
        // Menampilkan tabel
        Route::get('penelitian','Mahasiswa\PenelitianController@index');
        // Menampilkan form tambah biodata
        Route::get('penelitian/create','Mahasiswa\PenelitianController@create');
        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('penelitian/create','Mahasiswa\PenelitianController@createAction');
        // Menghapus biodata sesuai id yang dipilih
        Route::get('penelitian/{kode_penelitian}/delete','Mahasiswa\PenelitianController@delete');
        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('penelitian/{kode_penelitian}/edit','Mahasiswa\PenelitianController@edit');
        // Mengupdate biodata dengan isi dari form
        Route::post('penelitian/{kode_penelitian}/edit','Mahasiswa\PenelitianController@editAction');
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
