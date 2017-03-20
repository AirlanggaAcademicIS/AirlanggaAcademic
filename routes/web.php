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

	Route::get('/krs-khs/mk', function () {
    return view('krs-khs/mk');
});

	Route::get('/contoh', function () {
    return view('mahasiswa/contoh');
});

	Route::get('/krs-khs/mk/bobot', function () {
    return view('krs-khs/bobot');
});

    Route::get('/krs-khs/mk/input_nilai', function () {
    return view('krs-khs/input_nilai');
});

    Route::get('/krs-khs/dosen_mk', function () {
    return view('krs-khs/input_dosen_mk');
});

    Route::get('/genjeh', function () {
    return view('monsi/genjeh');
});
    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
