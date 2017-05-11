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

Route::get('mahasiswa/monitoring-skripsi/skripsi','Mahasiswa\monitoringskripsi\SkripsiController@index');
Route::group(['prefix' => 'inventaris'], function() {
    Route::get('view-asset', 'HomeController@index');
});


/*
==========================================
Route buat dosen ditaruh dibawah sini
=========================================
*/

Route::get('dosen/monitoring-skripsi/skripsi','Dosen\monitoringskripsi\SkripsiController@index');
Route::group(['prefix' => 'inventaris'], function() {
    Route::get('view-asset', 'HomeController@index');
});

Route::group(['prefix' => 'dosen'], function() {
Route::group(['prefix' => 'kurikulum'], function() {
Route::group(['prefix' => 'cp_pembelajaran'], function() {

        // Menampilkan tabel
        Route::get('/','Dosen\Kurikulum\CapaianPembelajaranController@index');

        // Menampilkan form tambah biodata
        Route::get('create','dosen\Kurikulum\CapaianPembelajaranController@create');

        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('create','Dosen\Kurikulum\CapaianPembelajaranController@createAction');

        // Menghapus biodata sesuai id yang dipilih
        Route::get('cp_pembelajaran/{id_cpem}/delete','dosen\Kurikulum\CapaianPembelajaranController@delete');

        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('cp_pembelajaran/{id_cpem}/edit','dosen\Kurikulum\CapaianPembelajaranController@edit');

        // Mengupdate biodata dengan isi dari form
        Route::post('cp_pembelajaran/{id_cpem}/edit','dosen\Kurikulum\CapaianPembelajaranController@editAction');
});
});
});
      

/*
==========================================
Route buat karyawan ditaruh dibawah sini
=========================================
*/
// Menampilkan tabel
        Route::get('karyawan/monitoring-skripsi/skripsi','Karyawan\monitoringskripsi\SkripsiController@index');

        // Menampilkan form tambah 
        Route::get('karyawan/monitoring-skripsi/skripsi/create','Karyawan\monitoringskripsi\SkripsiController@create');

        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('karyawan/monitoring-skripsi/skripsi/create','Karyawan\monitoringskripsi\SkripsiController@createAction');

        // Menghapus  sesuai id yang dipilih
        Route::get('karyawan/monitoring-skripsi/skripsi/{id_skripsi}/delete','Karyawan\monitoringskripsi\SkripsiController@delete');

        // Menampilkan form edit dari id yg dipilih
        Route::get('karyawan/monitoring-skripsi/skripsi/{id_skripsi}/edit','Karyawan\monitoringskripsi\SkripsiController@edit');

        // Mengupdate  dengan isi dari form
        Route::post('karyawan/monitoring-skripsi/skripsi/{id_skripsi}/edit','Karyawan\monitoringskripsi\SkripsiController@editAction');
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
