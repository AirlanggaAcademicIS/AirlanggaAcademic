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
        // Menampilkan tabel
        Route::get('mahasiswa/monitoring-skripsi/konsultasi','mahasiswa\monitoringskripsi\KonsultasiController@index');

        // Menampilkan tabel
        Route::get('mahasiswa/pengelolaan-kegiatan/dokumentasi','mahasiswa\pengelolaankegiatan\DokumentasiController@index');

        // Menampilkan form tambah biodata
        Route::get('mahasiswa/monitoring-skripsi/konsultasi/create','mahasiswa\monitoringskripsi\KonsultasiController@create');


        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('mahasiswa/monitoring-skripsi/konsultasi/create','mahasiswa\monitoringskripsi\KonsultasiController@createAction');

        // Menghapus biodata sesuai id yang dipilih
        Route::get('mahasiswa/monitoring-skripsi/konsultasi/{id}/delete','mahasiswa\monitoringskripsi\KonsultasiController@delete');

        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('mahasiswa/monitoring-skripsi/konsultasi/{id}/edit','mahasiswa\monitoringskripsi\KonsultasiController@edit');

        // Mengupdate biodata dengan isi dari form
        Route::post('mahasiswa/monitoring-skripsi/konsultasi/{id}/edit','mahasiswa\monitoringskripsi\KonsultasiController@editAction'); 

Route::get('mahasiswa/monitoring-skripsi/skripsi','Mahasiswa\monitoringskripsi\SkripsiController@index');
Route::group(['prefix' => 'inventaris'], function() {
    Route::get('view-asset', 'HomeController@index');
});


/*
==========================================
Route buat dosen ditaruh dibawah sini
=========================================
*/
        // Menampilkan tabel
        Route::get('dosen/pengelolaan-kegiatan/dokumentasi','dosen\pengelolaankegiatan\DokumentasiController@index');


Route::get('dosen/monitoring-skripsi/skripsi','Dosen\monitoringskripsi\SkripsiController@index');
Route::group(['prefix' => 'inventaris'], function() {
    Route::get('view-asset', 'HomeController@index');
});


/*
==========================================
Route buat karyawan ditaruh dibawah sini
=========================================
*/

    Route::get('karyawan/pengelolaan-kegiatan/pengajuan-kegiatan','Karyawan\pengelolaankegiatan\PengajuanKegiatanController@index');

    Route::get('karyawan/pengelolaan-kegiatan/dokumentasi','karyawan\pengelolaankegiatan\DokumentasiController@index');

        // Menampilkan form tambah biodata
        Route::get('karyawan/pengelolaan-kegiatan/dokumentasi/create','karyawan\pengelolaankegiatan\DokumentasiController@create');

        // Menambahkan form yg di isi tadi ke tabel biodata 
        Route::post('karyawan/pengelolaan-kegiatan/dokumentasi/create','karyawan\pengelolaankegiatan\DokumentasiController@createAction');

        // Menghapus biodata sesuai id yang dipilih
        Route::get('karyawan/pengelolaan-kegiatan/dokumentasi/{id_dokumentasi}/delete','karyawan\pengelolaankegiatan\DokumentasiController@delete');

        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('karyawan/pengelolaan-kegiatan/dokumentasi/{id_dokumentasi}/edit','karyawan\pengelolaankegiatan\DokumentasiController@edit');

        // Mengupdate biodata dengan isi dari form
        Route::post('karyawan/pengelolaan-kegiatan/dokumentasi/{id_dokumentasi}/edit','karyawan\pengelolaankegiatan\DokumentasiController@editAction');
        // Menampilkan tabel
        Route::get('karyawan/pengelolaan-kegiatan/dokumentasi','Karyawan\pengelolaankegiatan\DokumentasiController@index');


        Route::get('karyawan/monitoring-skripsi/KBK','karyawan\monitoringskripsi\KBKController@index');

        // Menampilkan form tambah biodata
        Route::get('karyawan/monitoring-skripsi/KBK/create','karyawan\monitoringskripsi\KBKController@create');

        // Menambahkan form yg di isi tadi ke tabel biodata 
        Route::post('karyawan/monitoring-skripsi/KBK/create','karyawan\monitoringskripsi\KBKController@createAction');

        // Menghapus biodata sesuai id yang dipilih
        Route::get('karyawan/monitoring-skripsi/KBK/{id_kbk}/delete','karyawan\monitoringskripsi\KBKController@delete');

        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('karyawan/monitoring-skripsi/KBK/{id_kbk}/edit','karyawan\monitoringskripsi\KBKController@edit');

        // Mengupdate biodata dengan isi dari form
        Route::post('karyawan/monitoring-skripsi/KBK/{id_kbk}/edit','karyawan\monitoringskripsi\KBKController@editAction');
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