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
    Route::get('/kurikulum/cpprogram/', function () {
    	return view('kurikulum.cpprogram.index');
	});
    Route::get('/kurikulum/cpprogram/cupdate/', function () {
    	return view('kurikulum.cpprogram.update');
	});
	Route::get('/kurikulum/cpprogram/create/', function () {
    	return view('kurikulum.cpprogram.create');
	});
	Route::get('/kurikulum/editcpprogram/', function () {
    	return view('kurikulum.cpprogram.edit');
	});
	Route::get('/kurikulum/view', function () {
    return view('kurikulum.cpprogram.view');
});

});