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
// Menampilkan tabel
        Route::get('surat-masuk','karyawan\Surat_MasukController@index');           

    // Menampilkan form tambah biodata
        Route::get('surat-masuk/create','karyawan\Surat_MasukController@create');

    // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('surat-masuk/create','karyawan\Surat_MasukController@createAction');

    // Menghapus biodata sesuai id yang dipilih
        Route::get('surat-masuk/{id}/delete','karyawan\Surat_MasukController@delete');

    // Menampilkan form edit biodata dari id yg dipilih
        Route::get('surat-masuk/{id}/edit','karyawan\Surat_MasukController@edit');

    // Mengupdate biodata dengan isi dari form
        Route::post('surat-masuk/{id}/edit','karyawan\Surat_MasukController@editAction');



});
