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

Route::get('/',['as'=>'admin.index', 'uses'=>'HomeController@index']);

Route::group(['middleware' => 'auth'], function () {
Route::get('/logout', 'Auth\LoginController@logout');

/*
==========================================
Route buat mahasiswa ditaruh dibawah sini
=========================================
*/



/*
==========================================
Route buat dosen ditaruh dibawah sini
=========================================
*/
Route::group(['prefix' => 'dosen'], function() {

	Route::group(['prefix' => 'kurikulum'], function() {

		Route::group(['prefix' => 'rps'], function() {
	        Route::get('/','Dosen\Kurikulum\RPSController@index');
	        Route::get('create','Dosen\Kurikulum\RPSController@create');
	        Route::post('create','Dosen\Kurikulum\RPSController@createAction');
	        Route::get('/{id}/delete','Dosen\Kurikulum\RPSController@delete');
	        Route::get('/{id}/edit','Dosen\Kurikulum\RPSController@edit');
	        Route::post('/{id}/edit','Dosen\Kurikulum\RPSController@editAction');
    });

		});

	});

/*
==========================================
Route buat karyawan ditaruh dibawah sini
=========================================
*/



});
