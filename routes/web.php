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

//Index
Route::get('undangan','Dosen\notulensi\DosenRapatController@index');

// Menampilkan form tambah dosen rapat
Route::get('undangan/create','Dosen\notulensi\DosenRapatController@create');

// Menambahkan form yg di isi tadi ke tabel dosen rapat
Route::post('undangan/create','Dosen\notulensi\DosenRapatController@createAction');

// Menghapus dosen rapat sesuai id yang dipilih
Route::get('undangan/{nip}/delete','Dosen\notulensi\DosenRapatController@delete');

// Menampilkan form edit dosen rapat dari id yg dipilih
Route::get('undangan/{nip}/edit','Dosen\notulensi\DosenRapatController@edit');

// Mengupdate dosen rapat dengan isi dari form
Route::post('undangan/{nip}/edit','Dosen\notulensi\DosenRapatController@editAction');

/*
==========================================
Route buat karyawan ditaruh dibawah sini
=========================================
*/



});
