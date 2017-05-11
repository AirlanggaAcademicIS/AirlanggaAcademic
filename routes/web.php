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



//INVENTARIS
/*
==========================================
Route buat mahasiswa ditaruh dibawah sini
=========================================
*/
Route::group(['prefix' => 'inventaris'], function() {
    Route::get('view-asset', 'HomeController@index');
});


/*
==========================================
Route buat dosen ditaruh dibawah sini
=========================================
*/
Route::group(['prefix' => 'inventaris'], function() {
    Route::get('view-asset', 'HomeController@index');
});


/*
==========================================
Route buat karyawan ditaruh dibawah sini
=========================================
*/
// Modul Inventaris
Route::group(['prefix' => 'inventaris'], function() {
    Route::get('input-maintenance', 'MaintenanceController@inputMaintenance');
    Route::get('index-maintenance', 'MaintenanceController@index');
    Route::get('view-maintenance', 'MaintenanceController@viewDetail');

    Route::get('input-peminjaman', 'Karyawan\PeminjamanController@inputPeminjaman');
    Route::post('post-input-peminjaman', 'Karyawan\PeminjamanController@postInputPeminjaman');
    Route::post('/{id}/post-edit-peminjaman', 'Karyawan\PeminjamanController@postEditPeminjaman');
    Route::get('index-peminjaman', 'Karyawan\PeminjamanController@index');
    Route::get('/{id}/view-peminjaman', 'Karyawan\PeminjamanController@viewDetail');
    Route::get('/{id}/edit-peminjaman', 'Karyawan\PeminjamanController@edit');
    Route::get('/{id}/delete', 'Karyawan\PeminjamanController@delete');

    Route::get('add-asset', 'HomeController@input');
    Route::get('view-asset', 'HomeController@index');
});


});
