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
   // Menampilkan form tambah biodata
// Modul Kurikulum
Route::group(['prefix' => 'dosen'], function() {
	Route::group(['prefix' => 'kurikulum'], function() {
		Route::group(['prefix' => 'cp_program'], function() {

			Route::get('/','Dosen\Kurikulum\CapaianProgramController@index');

	        Route::get('create','Dosen\Kurikulum\CapaianProgramController@create');

	        // Menambahkan form yg di isi tadi ke tabel biodata
	        Route::post('create','Dosen\Kurikulum\CapaianProgramController@createAction');

	        // Menghapus biodata sesuai id yang dipilih
	        Route::get('{id}/delete','Dosen\Kurikulum\CapaianProgramController@delete');

	        // Menampilkan form edit biodata dari id yg dipilih
	        Route::get('{id}/edit','Dosen\Kurikulum\CapaianProgramController@edit');

	        // Mengupdate biodata dengan isi dari form
	        Route::post('{id}/edit','Dosen\Kurikulum\CapaianProgramController@editAction');

		});
	});
});
/*
==========================================
Route buat karyawan ditaruh dibawah sini
=========================================
*/



});
