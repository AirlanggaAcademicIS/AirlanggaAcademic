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
Route::group(['prefix' => 'inventaris'], function() {


    
    // Menampilkan tabel
    Route::get('asset','Karyawan\AssetController@index');


    
        // Menampilkan tabel
        Route::get('asset','Karyawan\AssetController@index');
        
        // Menampilkan form tambah asset
        Route::get('asset/create','Karyawan\AssetController@create');
        
        // Menambahkan form yg di isi tadi ke tabel asset
        Route::post('asset/create','Karyawan\AssetController@createAction');
        
        // Menghapus asset sesuai id yang dipilih
        Route::get('asset/{id}/delete','Karyawan\AssetController@delete');

        // Menampilkan form edit asset dari id yg dipilih
        Route::get('asset/{id}/edit','Karyawan\AssetController@edit');

        // Mengupdate asset dengan isi dari form
        Route::post('asset/{id}/edit','Karyawan\AssetController@editAction');

        //


    	Route::get('add-asset', 'DashboardController@input');
    	Route::get('/view-asset', 'Inventaris\DashboardController@index');
    
         
        Route::get('add-asset', 'HomeController@input');
        Route::get('view-asset', 'HomeController@index');

    });
  
        
});

