<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group whichRoute::get('/', function () {
    return view('welcome');
});
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('/logout', 'Auth\LoginController@logout');

		/*MODUL MONITORING SKRIPSI USER MHS TARUH SINI YAAA*/
	Route::group(['prefix' => 'mahasiswa'], function() {
	    Route::group(['prefix' => 'monitoring-skripsi'], function() {

	        Route::get('konsultasi','mahasiswa\monitoringskripsi\KonsultasiController@index');

	        Route::get('konsultasi/{id}/edit','mahasiswa\monitoringskripsi\KonsultasiController@edit');

	        Route::post('konsultasi/{id}/edit','mahasiswa\monitoringskripsi\KonsultasiController@editAction'); 

	        Route::get('konsultasi/create','mahasiswa\monitoringskripsi\KonsultasiController@create');

	        Route::post('konsultasi/create','mahasiswa\monitoringskripsi\KonsultasiController@createAction');

	        Route::get('konsultasi/{id}/delete','mahasiswa\monitoringskripsi\KonsultasiController@delete');

	        Route::get('skripsi','Mahasiswa\monitoringskripsi\SkripsiController@index');

	        Route::get('upload_berkas','Mahasiswa\monitoringskripsi\UploadBerkasController@index');

	        Route::post('upload-proposal','Mahasiswa\monitoringskripsi\UploadBerkasController@uploadProposal');

	        Route::post('upload-skripsi','Mahasiswa\monitoringskripsi\UploadBerkasController@uploadSkripsi');

	        Route::get('view-jadwal-sidang-proposal-mahasiswa','Mahasiswa\monitoringskripsi\JadwalSidangController@view_jadwal_sidang_proposal_mahasiswa'); 
	        
	        Route::get('view-jadwal-sidang-skripsi-mahasiswa','Mahasiswa\monitoringskripsi\JadwalSidangController@view_jadwal_sidang_skripsi_mahasiswa');

	        Route::get('view-hasil-sidang-proposal-mahasiswa','Mahasiswa\monitoringskripsi\HasilSidangController@view_hasil_sidang_proposal_mahasiswa');

	        Route::get('view-hasil-sidang-skripsi-mahasiswa','Mahasiswa\monitoringskripsi\HasilSidangController@view_hasil_sidang_skripsi_mahasiswa');


	    });
	});
	/*AKHIR MODUL MONITORING SKRIPSI USER MHS*/


	/*MODUL MONITORING SKRIPSI USER DOSEN TARUH SINI YAAA*/
	Route::group(['prefix' => 'dosen'], function() {
	    Route::group(['prefix' => 'monitoring-skripsi'], function() {
	        Route::get('skripsi','Dosen\monitoringskripsi\SkripsiController@index');

	        Route::get('skripsi/mhs','dosen\monitoringskripsi\SkripsiController@show');

	        Route::get('konsultasi/','dosen\monitoringskripsi\KonsultasiController@index');

	        Route::get('konsultasi/{id}/edit','dosen\monitoringskripsi\KonsultasiController@edit');

	        Route::post('konsultasi/{id}/edit','dosen\monitoringskripsi\KonsultasiController@editAction'); 

	        Route::get('konsultasi/mhs','dosen\monitoringskripsi\KonsultasiController@show');

	        Route::get('berkas/','dosen\monitoringskripsi\DownloadController@index');

	        Route::get('berkas/mhs','dosen\monitoringskripsi\DownloadController@show');

	        Route::get('view-jadwal-sidang-proposal-dosen','Dosen\monitoringskripsi\JadwalSidangController@view_jadwal_sidang_proposal_dosen'); 
           
            Route::get('view-jadwal-sidang-skripsi-dosen','Dosen\monitoringskripsi\JadwalSidangController@view_jadwal_sidang_skripsi_dosen'); \

            Route::get('view-hasil-sidang-proposal-dosen','Dosen\monitoringskripsi\HasilSidangController@view_hasil_sidang_proposal_dosen');

            Route::get('view-hasil-sidang-skripsi-dosen','Dosen\monitoringskripsi\HasilSidangController@view_hasil_sidang_skripsi_dosen'); 
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

	        Route::get('status','Karyawan\monitoringskripsi\StatusController@index');

	        Route::get('status/create','Karyawan\monitoringskripsi\StatusController@create');

	        Route::post('status/create','Karyawan\monitoringskripsi\StatusController@createAction');

	        Route::get('status/{id_skripsi}/edit','Karyawan\monitoringskripsi\StatusController@edit');

	        Route::post('status/{id_skripsi}/edit','Karyawan\monitoringskripsi\StatusController@editAction');

	        Route::get('status/{id_kbk}/delete','karyawan\monitoringskripsi\StatusController@delete');

	        Route::get('konsultasi','karyawan\monitoringskripsi\KonsultasiController@index');

	        Route::get('konsultasi/{id}/edit','karyawan\monitoringskripsi\KonsultasiController@edit');

	        Route::post('konsultasi/{id}/edit','karyawan\monitoringskripsi\KonsultasiController@editAction');

	        Route::get('berkas/','Karyawan\monitoringskripsi\DownloadController@index');

	        Route::get('berkas/mhs','Karyawan\monitoringskripsi\DownloadController@show');

	        Route::get('manage-jadwal-sidang-proposal','Karyawan\monitoringskripsi\JadwalSidangController@view_manage_jadwal_sidang_proposal');

	        Route::get('manage-jadwal-sidang-skripsi','Karyawan\monitoringskripsi\JadwalSidangController@view_manage_jadwal_sidang_skripsi');

	        Route::post('create-jadwal-sidang-proposal','Karyawan\monitoringskripsi\JadwalSidangController@create_jadwal_sidang_proposal');

	        Route::post('update-jadwal-sidang-proposal','Karyawan\monitoringskripsi\JadwalSidangController@update_jadwal_sidang_proposal');

	        Route::post('update-jadwal-sidang-skripsi','Karyawan\monitoringskripsi\JadwalSidangController@update_jadwal_sidang_skripsi');

	        Route::post('destroy-jadwal-sidang-proposal','Karyawan\monitoringskripsi\JadwalSidangController@destroy_jadwal_sidang_proposal');

	        Route::post('edit-jadwal-sidang-proposal','Karyawan\monitoringskripsi\JadwalSidangController@edit_jadwal_sidang_proposal');

	        Route::post('get-mahasiswa-data','Karyawan\monitoringskripsi\JadwalSidangController@get_mahasiswa_data');

	        Route::get('manage-hasil-sidang-proposal','Karyawan\monitoringskripsi\HasilSidangController@view_manage_hasil_sidang_proposal');
	        
	        Route::get('view-hasil-sidang-proposal-mahasiswa','Karyawan\monitoringskripsi\HasilSidangController@view_hasil_sidang_proposal_mahasiswa');

	        Route::get('view-hasil-sidang-skripsi-mahasiswa','Karyawan\monitoringskripsi\HasilSidangController@view_hasil_sidang_skripsi_mahasiswa');

	        Route::get('view-tambah-hasil-sidang-proposal','Karyawan\monitoringskripsi\HasilSidangController@view_tambah_hasil_sidang_proposal');

	        Route::get('manage-hasil-sidang-skripsi','Karyawan\monitoringskripsi\HasilSidangController@view_manage_hasil_sidang_skripsi');
	        
	        Route::get('view-tambah-hasil-sidang-proposal','Karyawan\monitoringskripsi\HasilSidangController@view_tambah_hasil_sidang_skripsi');

	        Route::post('upload-nilai-sidang-skripsi','Karyawan\monitoringskripsi\HasilSidangController@upload_nilai_sidang_skripsi');

	        Route::post('upload-nilai-sidang-proposal','Karyawan\monitoringskripsi\HasilSidangController@upload_nilai_sidang_proposal');


	    });
	});
	/*Akhiran dari modul monitoring skripsi*/



	});