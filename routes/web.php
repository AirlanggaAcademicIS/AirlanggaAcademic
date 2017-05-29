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
Route modul pengelolaan kegiatan
*/
Route::get('mahasiswa/pengelolaan-kegiatan/input-struktur-panitia/view/','Mahasiswa\pengelolaankegiatan\StrukturPanitiaController@view');

Route::get('
/mahasiswa/pengelolaan-kegiatan/input-struktur-panitia/{kegiatan_id}','Mahasiswa\pengelolaankegiatan\StrukturPanitiaController@index');

Route::post('/mahasiswa/pengelolaan-kegiatan/input-struktur-panitia/{id_kegiatan}/tambahPanitia','Mahasiswa\pengelolaankegiatan\StrukturPanitiaController@createAction');
/*

==========================================
Route buat dosen ditaruh dibawah sini
=========================================
*/

/*
Route modul pengelolaan kegiatan
*/
Route::get('/dosen/pengelolaan-kegiatan/input-struktur-panitia/view','Dosen\pengelolaankegiatan\StrukturPanitiaDosenController@view');

Route::get('
/dosen/pengelolaan-kegiatan/input-struktur-panitia/{kegiatan_id}','Dosen\pengelolaankegiatan\StrukturPanitiaDosenController@index');

Route::post('/dosen/pengelolaan-kegiatan/input-struktur-panitia/{id_kegiatan}/tambahPanitia','Dosen\pengelolaankegiatan\StrukturPanitiaDosenController@createAction');

/*
==========================================
Route buat karyawan ditaruh dibawah sini
==========================================
*/

/*
Route modul pengelolaan kegiatan
*/

// Menampilkan data Konfirmasi Kegiatan dari Modul Pengelolaan Kegiatan
Route::get('karyawan/pengelolaan-kegiatan/konfirmasi-kegiatan','Karyawan\pengelolaankegiatan\KonfirmasiKegiatanController@index');

// Menampilkan data Konfirmasi Kegiatan dari Modul Pengelolaan Kegiatan
Route::get('karyawan/pengelolaan-kegiatan/konfirmasi-kegiatan/{id_kegiatan}/setujuiProposal','Karyawan\pengelolaankegiatan\KonfirmasiKegiatanController@setujuiActionProposal');

// Menampilkan data Konfirmasi Kegiatan dari Modul Pengelolaan Kegiatan
Route::post('karyawan/pengelolaan-kegiatan/konfirmasi-kegiatan/{id_kegiatan}/tolakProposal','Karyawan\pengelolaankegiatan\KonfirmasiKegiatanController@tolakActionProposal');

// Menampilkan data Konfirmasi Kegiatan dari Modul Pengelolaan Kegiatan
Route::get('karyawan/pengelolaan-kegiatan/konfirmasi-kegiatan/{id_kegiatan}/setujuiLPJ','Karyawan\pengelolaankegiatan\KonfirmasiKegiatanController@setujuiActionLPJ');

// Menampilkan data Konfirmasi Kegiatan dari Modul Pengelolaan Kegiatan
Route::post('karyawan/pengelolaan-kegiatan/konfirmasi-kegiatan/{id_kegiatan}/tolakLPJ','Karyawan\pengelolaankegiatan\KonfirmasiKegiatanController@tolakActionLPJ');

 // Menampilkan data Daftar Konfirmasi Kegiatan dari Modul Pengelolaan Kegiatan
Route::get('karyawan/pengelolaan-kegiatan/daftar-konfirmasi','Karyawan\pengelolaankegiatan\DaftarKonfirmasiController@index');
 
// Menampilkan detail pengajuan kegiatan dari Modul Pengelolaan Kegiatan
Route::get('/karyawan/pengelolaan-kegiatan/detail-pengajuan/{id_kegiatan}','Karyawan\pengelolaankegiatan\DetailPengajuanController@index');


/*
Akhir route pengelolaan kegiatan
*/


});
