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

	Route::get('/mahasiswa/penelitian/', function () {
    return view('mahasiswa.penelitian');
});
	Route::get('/mahasiswa/input_penelitian/', function () {
    return view('mahasiswa.input_penelitian');
});
	Route::get('/mahasiswa/edit_penelitian/', function () {
    return view('mahasiswa.edit_penelitian');
});


    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});