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
  // Modul Dosen
    Route::group(['prefix' => 'dosen'], function() {

            // Menampilkan tabel
        
       
       Route::get('jurnal','Dosen\JurnalController@index');

        // Menampilkan form tambah biodata
        Route::get('jurnal/create','Dosen\JurnalController@create');

        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('jurnal/create','Dosen\JurnalController@createAction');

        // Menghapus biodata sesuai id yang dipilih
        Route::get('jurnal/{id}/delete','Dosen\JurnalController@delete');

        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('jurnal/{id}/edit','Dosen\JurnalController@edit');

        // Mengupdate biodata dengan isi dari form
        Route::post('jurnal/{id}/edit','Dosen\JurnalController@editAction');     
    
            

      
   });



/*
==========================================
Route buat karyawan ditaruh dibawah sini
=========================================
*/



});
