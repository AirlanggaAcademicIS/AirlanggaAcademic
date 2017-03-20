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

Route::get('/mahasiswa/prestasi', function () {
    return view('mahasiswa.tabel');
});
Route::get('/mahasiswa/input_prestasi', function () {
    return view('mahasiswa.input_prestasi');
});
Route::get('/mahasiswa/edit_prestasi', function () {
    return view('mahasiswa.edit_prestasi');
});
Route::get('/mahasiswa/tabel_berhasil', function () {
    return view('mahasiswa.tabel_berhasil');
});
    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});