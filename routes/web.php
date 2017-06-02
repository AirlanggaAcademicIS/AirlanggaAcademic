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

Route::group(['prefix' => 'karyawan'], function() {
    //Permohonan Ruang
    Route::group(['prefix' => 'PermohonanRuang'], function() {
        Route::get('History','Karyawan\PLA\PermohonanRuangController@index');
        Route::get('Konfirmasi','Karyawan\PLA\PermohonanRuangController@index2');
        Route::get('Konfirmasi/{id}/accept','Karyawan\PLA\PermohonanRuangController@accept'); 
        Route::get('Konfirmasi/{id}/decline','Karyawan\PLA\PermohonanRuangController@decline'); 
    });
    //Petugas TU
    Route::get('pla/karyawan','Karyawan\PLA\karyawan_Controller@index');
    Route::get('pla/karyawan/create','Karyawan\PLA\karyawan_Controller@create');
    Route::post('pla/karyawan/create','Karyawan\PLA\karyawan_Controller@createAction');
    Route::get('pla/karyawan/{nip_petugas}/delete','Karyawan\PLA\karyawan_Controller@delete');
    Route::get('pla/karyawan/{nip_petugas}/edit','Karyawan\PLA\karyawan_Controller@edit');
    Route::post('pla/karyawan/{nip_petugas}/edit','Karyawan\PLA\karyawan_Controller@editAction');

    //Surat Keluar Dosen
    Route::get('surat-keluar-dosen','karyawan\PLA\Surat_Keluar_DosenController@index');           
    Route::get('surat-keluar-dosen/create','karyawan\PLA\Surat_Keluar_DosenController@create');
    Route::post('surat-keluar-dosen/create','karyawan\PLA\Surat_Keluar_DosenController@createAction');
    Route::get('surat-keluar-dosen/{id}/delete','karyawan\PLA\Surat_Keluar_DosenController@delete');
    Route::get('surat-keluar-dosen/{id}/edit','karyawan\PLA\Surat_Keluar_DosenController@edit');
    Route::post('surat-keluar-dosen/{id}/edit','karyawan\PLA\Surat_Keluar_DosenController@editAction');
    Route::get('surat-keluar-dosen/{id}/agree','Karyawan\PLA\Surat_Keluar_DosenController@agree');
    Route::get('surat-keluar-dosen/{id}/disagree','Karyawan\PLA\Surat_Keluar_DosenController@disagree');

    //Surat Keluar Mhs
    Route::get('surat-keluar-mhs','karyawan\PLA\Surat_Keluar_MhsController@index');           
    Route::get('surat-keluar-mhs/create','karyawan\PLA\Surat_Keluar_MhsController@create');
    Route::post('surat-keluar-mhs/create','karyawan\PLA\Surat_Keluar_MhsController@createAction');
    Route::get('surat-keluar-mhs/{id}/delete','karyawan\PLA\Surat_Keluar_MhsController@delete');
    Route::get('surat-keluar-mhs/{id}/edit','karyawan\PLA\Surat_Keluar_MhsController@edit');
    Route::post('surat-keluar-mhs/{id}/edit','karyawan\PLA\Surat_Keluar_MhsController@editAction');
    Route::get('surat-keluar-mhs/{id}/agree','Karyawan\PLA\Surat_Keluar_MhsController@agree');
    Route::get('surat-keluar-mhs/{id}/disagree','Karyawan\PLA\Surat_Keluar_MhsController@disagree');

    //Surat Masuk
    Route::get('surat-masuk','karyawan\PLA\Surat_MasukController@index');           
    Route::get('surat-masuk/create','karyawan\PLA\Surat_MasukController@create');
    Route::post('surat-masuk/create','karyawan\PLA\Surat_MasukController@createAction');
    Route::get('surat-masuk/{id}/delete','karyawan\PLA\Surat_MasukController@delete');
    Route::get('surat-masuk/{id}/edit','karyawan\PLA\Surat_MasukController@edit');
    Route::post('surat-masuk/{id}/edit','karyawan\PLA\Surat_MasukController@editAction');

    //Pengumpulan harcopy proposal dan skripsi
    Route::get('Pengumpulan Hardcopy','Karyawan\PLA\PengumpulanHardcopyController@index');
    Route::get('Pengumpulan Hardcopy/{id}/Proposal','Karyawan\PLA\PengumpulanHardcopyController@Kumpul_Proposal');
    Route::get('Pengumpulan Hardcopy/{id}/Skripsi','Karyawan\PLA\PengumpulanHardcopyController@Kumpul_Skripsi');
    Route::post('Pengumpulan Hardcopy/search','Karyawan\PLA\PengumpulanHardcopyController@index2');
});

Route::group(['prefix' => 'dosen'], function() {

    //kalender
    Route::get('Kalender_Ruang','Dosen\PLA\KalenderRuangController@index');
    Route::post('Kalender_Ruang/search','Dosen\PLA\KalenderRuangController@index2');

    //Memohon Ruangan
    Route::get('memohon-ruangan','dosen\PLA\MohonRuanganController@create');
    Route::post('memohon-ruangan/create','dosen\PLA\MohonRuanganController@createAction');
    
    //Surat Keluar Dosen
        Route::get('surat-keluar-dosen','dosen\PLA\Surat_Keluar_DosenController@index');           
        Route::get('surat-keluar-dosen/create','dosen\PLA\Surat_Keluar_DosenController@create');
        Route::post('surat-keluar-dosen/create','dosen\PLA\Surat_Keluar_DosenController@createAction');
        Route::get('surat-keluar-dosen/{id}/delete','dosen\PLA\Surat_Keluar_DosenController@delete');
        Route::get('surat-keluar-dosen/{id}/edit','dosen\PLA\Surat_Keluar_DosenController@edit');
        Route::post('surat-keluar-dosen/{id}/edit','dosen\PLA\Surat_Keluar_DosenController@editAction');

    //Surat Masuk Dosen
    Route::get('surat-masuk','dosen\PLA\Surat_MasukController@index');
    });

Route::group(['prefix' => 'mahasiswa'], function() {

    //Kalender
    Route::get('Kalender_Ruang','Mahasiswa\PLA\KalenderRuangController@index');
    Route::post('Kalender_Ruang/search','Mahasiswa\PLA\KalenderRuangController@index2');

    //Memohon Ruangan
    Route::get('memohon-ruangan','Mahasiswa\PLA\MohonRuanganController@create');
    Route::post('memohon-ruangan/create','Mahasiswa\PLA\MohonRuanganController@createAction');
    
    //Surat Keluar Mhs
        Route::get('surat-keluar-mhs','mahasiswa\PLA\Surat_Keluar_MhsController@index');           
        Route::get('surat-keluar-mhs/create','Mahasiswa\PLA\Surat_Keluar_MhsController@create');
        Route::post('surat-keluar-mhs/create','mahasiswa\PLA\Surat_Keluar_MhsController@createAction');
        Route::get('surat-keluar-mhs/{id}/delete','mahasiswa\PLA\Surat_Keluar_MhsController@delete');
        Route::get('surat-keluar-mhs/{id}/edit','mahasiswa\PLA\Surat_Keluar_MhsController@edit');
        Route::post('surat-keluar-mhs/{id}/edit','mahasiswa\PLA\Surat_Keluar_MhsController@editAction');

    //Surat Masuk Mhs
    Route::get('surat-masuk','mahasiswa\PLA\Surat_MasukController@index');
    });
}); 