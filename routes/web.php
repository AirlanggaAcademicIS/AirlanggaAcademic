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

/*MODUL MONITORING SKRIPSI USER MHS TARUH SINI YAAA*/
Route::group(['prefix' => 'mahasiswa'], function() {
    Route::group(['prefix' => 'monitoring-skripsi'], function() {

        Route::get('konsultasi','mahasiswa\monitoringskripsi\KonsultasiController@index');

        Route::get('konsultasi/{id}/edit','mahasiswa\monitoringskripsi\KonsultasiController@edit');

        Route::get('konsultasi/{id}/edit','mahasiswa\monitoringskripsi\KonsultasiController@edit');

        Route::post('konsultasi/{id}/edit','mahasiswa\monitoringskripsi\KonsultasiController@editAction'); 

        Route::get('konsultasi/create','mahasiswa\monitoringskripsi\KonsultasiController@create');

        Route::post('konsultasi/create','mahasiswa\monitoringskripsi\KonsultasiController@createAction');

        Route::get('konsultasi/{id}/delete','mahasiswa\monitoringskripsi\KonsultasiController@delete');

        Route::get('skripsi','Mahasiswa\monitoringskripsi\SkripsiController@index');

        Route::get('upload_berkas','Mahasiswa\monitoringskripsi\UploadBerkasController@index');

        Route::post('upload-proposal','Mahasiswa\monitoringskripsi\UploadBerkasController@uploadProposal');

        Route::post('upload-skripsi','Mahasiswa\monitoringskripsi\UploadBerkasController@uploadSkripsi');

    });
});

/*AKHIR MODUL MONITORING SKRIPSI USER MHS*/


/*MODUL MONITORING SKRIPSI USER DOSEN TARUH SINI YAAA*/
Route::group(['prefix' => 'dosen'], function() {
    Route::group(['prefix' => 'monitoring-skripsi'], function() {
        Route::get('skripsi','Dosen\monitoringskripsi\SkripsiController@index');

        Route::get('konsultasi/','dosen\monitoringskripsi\KonsultasiController@index');

        Route::get('konsultasi/{id}/edit','dosen\monitoringskripsi\KonsultasiController@edit');

        Route::get('konsultasi/{id}/edit','dosen\monitoringskripsi\KonsultasiController@editAction');

        Route::get('konsultasi/mhs','dosen\monitoringskripsi\KonsultasiController@show');

        Route::get('berkas/','dosen\monitoringskripsi\DownloadController@index');

        Route::get('berkas/mhs','dosen\monitoringskripsi\DownloadController@show');

        Route::get('berkas/{nim}/download','dosen\monitoringskripsi\DownloadController@downloadProposal');

        Route::get('berkas/{nim}/download-skripsi','dosen\monitoringskripsi\DownloadController@downloadSkripsi');
    });
});
/*AKHIR MODUL MONITORING SKRIPSI USER DOSEN*/


/*MODUL MONITORING SKRIPSI USER KARYAWAN TARUH SINI YAAA*/
Route::group(['prefix' => 'karyawan'], function() {
    Route::group(['prefix' => 'monitoring-skripsi'], function() {

        Route::get('KBK','karyawan\monitoringskripsi\KBKController@index');

        Route::get('KBK/create','Karyawan\monitoringskripsi\KBKController@create');

        Route::post('KBK/create','Karyawan\monitoringskripsi\KBKController@createAction');

        Route::get('KBK/{id_kbk}/delete','Karyawan\monitoringskripsi\KBKController@delete');

        Route::get('KBK/{id_kbk}/edit','Karyawan\monitoringskripsi\KBKController@edit');

        Route::post('KBK/{id_kbk}/edit','Karyawan\monitoringskripsi\KBKController@editAction');

        Route::get('skripsi','Karyawan\monitoringskripsi\SkripsiController@index');
         
        Route::get('skripsi/create','Karyawan\monitoringskripsi\SkripsiController@create');

        Route::post('skripsi/create','Karyawan\monitoringskripsi\SkripsiController@createAction');

        Route::get('skripsi/{id_skripsi}/delete','Karyawan\monitoringskripsi\SkripsiController@delete');

        Route::get('skripsi/{id_skripsi}/edit','Karyawan\monitoringskripsi\SkripsiController@edit');

        Route::post('skripsi/{id_skripsi}/edit','Karyawan\monitoringskripsi\SkripsiController@editAction');

        Route::get('manage-jadwal-sidang-proposal','Karyawan\JadwalSidangController@view_manage_jadwal_sidang_proposal');

        Route::get('view-jadwal-sidang-proposal-mahasiswa','Karyawan\JadwalSidangController@view_jadwal_sidang_proposal_mahasiswa'); 
                
        Route::get('view-jadwal-sidang-skripsi-mahasiswa','Karyawan\JadwalSidangController@view_jadwal_sidang_skripsi_mahasiswa');     

        Route::get('manage-jadwal-sidang-skripsi','Karyawan\JadwalSidangController@view_manage_jadwal_sidang_skripsi');

        Route::post('create-jadwal-sidang-proposal','Karyawan\JadwalSidangController@create_jadwal_sidang_proposal');

        Route::post('update-jadwal-sidang-proposal','Karyawan\JadwalSidangController@update_jadwal_sidang_proposal');

        Route::post('update-jadwal-sidang-skripsi','Karyawan\JadwalSidangController@update_jadwal_sidang_skripsi');

        Route::post('destroy-jadwal-sidang-proposal','Karyawan\JadwalSidangController@destroy_jadwal_sidang_proposal');

        Route::post('edit-jadwal-sidang-proposal','Karyawan\JadwalSidangController@edit_jadwal_sidang_proposal');

        Route::post('get-mahasiswa-data','Karyawan\JadwalSidangController@get_mahasiswa_data');

        Route::get('manage-hasil-sidang-proposal','Karyawan\SkripsiController@view_manage_hasil_sidang_proposal');

        Route::get('view-tambah-hasil-sidang-proposal','Karyawan\SkripsiController@view_tambah_hasil_sidang_proposal');

        Route::get('status','Karyawan\monitoringskripsi\StatusController@index');

        Route::get('status/create','Karyawan\monitoringskripsi\StatusController@create');

        Route::post('status/create','Karyawan\monitoringskripsi\StatusController@createAction');

        Route::get('status/{id_skripsi}/edit','Karyawan\monitoringskripsi\StatusController@edit');

        Route::post('status/{id_skripsi}/edit','Karyawan\monitoringskripsi\StatusController@editAction');

        Route::get('status/{id_kbk}/delete','karyawan\monitoringskripsi\StatusController@delete');

        Route::post('destroy-jadwal-sidang-proposal','Karyawan\SkripsiController@destroy_jadwal_sidang_proposal');

        Route::post('edit-jadwal-sidang-proposal','Karyawan\SkripsiController@edit_jadwal_sidang_proposal');

        Route::post('get-mahasiswa-data','Karyawan\SkripsiController@get_mahasiswa_data');

        Route::get('konsultasi','karyawan\monitoringskripsi\KonsultasiController@index');

        Route::get('konsultasi/create','Karyawan\monitoringskripsi\KonsultasiController@create');

        Route::post('konsultasi/create','Karyawan\monitoringskripsi\KonsultasiController@createAction');

        Route::get('konsultasi/{id}/delete','Karyawan\monitoringskripsi\KonsultasiController@delete');

        Route::get('konsultasi/{nim_id}/edit','Karyawan\monitoringskripsi\KonsultasiController@edit');

        Route::post('konsultasi/{id}/edit','Karyawan\monitoringskripsi\KonsultasiController@editAction');

        Route::get('berkas/','Karyawan\monitoringskripsi\DownloadController@index');

        Route::get('berkas/{nim}/download','Karyawan\monitoringskripsi\DownloadController@downloadProposal');

        Route::get('berkas/{nim}/download-skripsi','Karyawan\monitoringskripsi\DownloadController@downloadSkripsi');

    });
});
/*Akhiran dari modul monitoring skripsi*/



});   