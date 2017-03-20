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
Route::get('/karyawan', function () {
    return view('mahasiswa.karyawan');
});

Route::get('/karyawan/ver-bio', function () {
    return view('mahasiswa.ver_bio');
});

Route::get('/karyawan/ver-pres', function () {
    return view('mahasiswa.ver_pres');
});

Route::get('/karyawan/ver-pen', function () {
    return view('mahasiswa.ver_pen');
});

Route::get('/karyawan/ver-pres-more', function () {
    return view('mahasiswa.ver_pres_more');
});

Route::get('/karyawan/ver-bio-more', function () {
    return view('mahasiswa.ver_bio_more');
});

Route::get('/karyawan/ver-pen-more', function () {
    return view('mahasiswa.ver_pen_more');
});


});
