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


        // PLA
Route::group(['prefix' => 'mahasiswa'], function() {
        Route::group(['prefix' => 'pla'], function() {

        //kalender ruang mahasiswa
        Route::get('Kalender_Ruang','Mahasiswa\PLA\KalenderRuangController@index');
        Route::post('Kalender_Ruang/search','Mahasiswa\PLA\KalenderRuangController@index2');

        //download dokumen mhs

        Route::get('Download_Dokumen','Mahasiswa\PLA\DownloadDokumenController@index');
        Route::get('{id}/Download_Dokumen','Mahasiswa\PLA\DownloadDokumenController@download_doc');
});
});
Route::group(['prefix' => 'dosen'], function() {
        Route::group(['prefix' => 'pla'], function() {

        //kalender ruang mahasiswa dosen
        Route::get('Kalender_Ruang','Dosen\PLA\KalenderRuangController@index');
        Route::post('Kalender_Ruang/search','Dosen\PLA\KalenderRuangController@index2');

         //download dokumen dosen

        Route::get('Download_Dokumen','Dosen\PLA\DownloadDokumenController@index');
        Route::get('{id}/Download_Dokumen','Dosen\PLA\DownloadDokumenController@download_doc');
});
});
        // PLA
Route::group(['prefix' => 'karyawan'], function() {
        Route::group(['prefix' => 'pla'], function() {

        //Pengumpulan harcopy proposal dan skripsi
        Route::get('Pengumpulan Hardcopy','Karyawan\PLA\PengumpulanHardcopyController@index');
       Route::get('Pengumpulan Hardcopy/{id}/Proposal','Karyawan\PLA\PengumpulanHardcopyController@Kumpul_Proposal');
       Route::get('Pengumpulan Hardcopy/{id}/Skripsi','Karyawan\PLA\PengumpulanHardcopyController@Kumpul_Skripsi');
        Route::post('Pengumpulan Hardcopy/search','Karyawan\PLA\PengumpulanHardcopyController@index2');
});
}); 



});