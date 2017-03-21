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
    Route::get('/dosen/penelitian', function () {
    return view('dosen.penelitian.create');
    });

    Route::get('/kegiatan/viewlpj', function () {
    return view('kegiatan.viewlpj');
    });

    Route::get('/kegiatan/postpertama', function () {
    return view('kegiatan.postpertama');
    });

    Route::get('/kegiatan/adminview', function () {
    return view('kegiatan.adminview');
    });
});