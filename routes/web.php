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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes

    Route::get('/krs-khs/form_khs', function () {
    return view('krs-khs.form_khs');
    });
    Route::get('/krs-khs/histori_nilai', function () {
    return view('krs-khs.histori_nilai');
    });
    Route::get('/krs-khs/detail_nilai_RPL', function () {
    return view('krs-khs.detail_nilai_RPL');
    });
    Route::get('/krs-khs/detail_nilai_BD', function () {
    return view('krs-khs.detail_nilai_BD');
    });
    Route::get('/krs-khs/krs', function () {
    return view('krs-khs/contoh');
    });
     Route::get('/monsi/form-dataskripsi', function () {
    return view('monsi.form-dataskripsi');
    });
    Route::get('/dosen/penelitian', function () {
    return view('dosen.penelitian.create');
    });
    Route::get('/monsi/tabel-mhs2', function () {
    return view('monsi.tabel-mhs2');
    });
});

