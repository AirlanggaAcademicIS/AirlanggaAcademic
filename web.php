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
Route::group(['prefix' => 'dosen'], function() {
Route::group(['prefix' => 'notulensi'], function() {
		// Menampilkan tabel notulensi
        Route::get('kalenderRapat','Dosen\notulensi\DosenKalenderController@index');
                // Menampilkan form tambah biodata
        Route::get('kalenderRapat/create','Dosen\notulensi\DosenKalenderController@create');
                // Menambahkan form yg di isi tadi ke tabel notulensi
        Route::post('kalenderRapat/create','Dosen\notulensi\DosenKalenderController@createAction');
   
		Route::get('kalenderRapat/{id_notulen}/delete','Dosen\notulensi\DosenKalenderController@delete');

         Route::get('kalenderRapat/{id_notulen}/edit','Dosen\notulensi\DosenKalenderController@edit');

        Route::post('kalenderRapat/{id_notulen}/edit','Dosen\notulensi\DosenKalenderController@editAction');




});
});
});
