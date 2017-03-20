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
    Route::get('/dosen/pengabdianmasyarakat', function () {
    return view('dosen.pengabdianmasyarakat');
    });
    Route::get('/dosen/pengmas/pengmas', function () {
    return view('dosen.pengmas.pengmas');
});

    Route::get('/dosen/pengmas/edit', function () {
    return view('dosen.pengmas.edit');
});
    Route::get('/dosen/pengmas/create', function () {
    return view('dosen.pengmas.create');
});

});
