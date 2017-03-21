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
    Route::get('/kurikulum/kode', function () {
    return view('kurikulum.kode.index');
});
    Route::get('/karyawan/regis', function () {
    return view('mahasiswa.registrasi_akun');
});
    Route::get('/mahasiswa/ubah-pass', function () {
    return view('mahasiswa.ubah_pass_mhs');
});
    Route::get('/kurikulum/kode/cpmatkul', function () {
    return view('/kurikulum/kode/index-cpmatkul');
});
    Route::get('/kurikulum/kode/cplprodi', function () {
    return view('/kurikulum/kode/index-cplprodi');
});
    
    });