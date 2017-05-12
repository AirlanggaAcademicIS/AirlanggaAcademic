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
Route::group(['prefix' => 'Karyawan'], function() {

 
           Route::get('manage-hasil-sidang-proposal','Karyawan\SkripsiController@view_manage_hasil_sidang_proposal');
           Route::get('view-tambah-hasil-sidang-proposal','Karyawan\SkripsiController@view_tambah_hasil_sidang_proposal');

});


});
