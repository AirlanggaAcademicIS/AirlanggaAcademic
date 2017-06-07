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

Route::group(['middleware' => ['auth']], function () {
    // Route::get('/pengelolaan-kegiatan/viewlpj', function () {
    // return view('pengelolaan-kegiatan.viewlpj');
    // });
    //     Route::get('/pengelolaan-kegiatan/postpertama', function () {
    // return view('pengelolaan-kegiatan.postpertama');
    });



Route::group(['middleware' => ['auth']], function () {


    // Route::get('/pengelolaan-kegiatan/viewlpj', function () {
    // return view('pengelolaan-kegiatan.viewlpj');
    // });

    //     Route::get('/pengelolaan-kegiatan/postpertama', function () {
    // return view('pengelolaan-kegiatan.postpertama');
    Route::get('/dosen/laporan/cetak','Dosen\LaporanController@cetak');
    Route::get('/dosen/laporan/pilih','Dosen\LaporanController@pilih');
    Route::post('/dosen/laporan/pilih','Dosen\LaporanController@pilihAction');
    Route::get('/dosen/laporan','Dosen\LaporanController@index');
    Route::get('/logout','Auth\LoginController@logout');
    });



    
    // Modul Mahasiswa
