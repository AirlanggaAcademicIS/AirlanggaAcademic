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
    Route::get('kurikulum/silabus', function () {
    	return view('kurikulum.silabus.index');	
	});
	Route::get('kurikulum/detail-silabus', function () {
    	return view('kurikulum.silabus.index-silabus');	
	});

	Route::get('kurikulum/create-silabus', function () {
		return view('kurikulum.silabus.index-createsilabus');
	});

    Route::get('/dosen/penelitian', function () {
	    return view('dosen.penelitian.create');
	});
});
