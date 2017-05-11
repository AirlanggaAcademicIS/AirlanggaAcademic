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
// Modul Kurikulum
Route::group(['prefix' => 'dosen'], function(){
	Route::group(['prefix' => 'kurikulum'], function(){
		Route::group(['prefix' => 'silabus'], function(){

			Route::get('/','Dosen\Kurikulum\SilabusController@index');
			Route::get('create','Dosen\Kurikulum\SilabusController@create');			
			Route::post('create','Dosen\Kurikulum\SilabusController@createAction');
			Route::get('kode/{id}/delete','Dosen\Kurikulum\SilabusController@delete');
			Route::get('kode/{id}/edit','Dosen\Kurikulum\SilabusController@edit');
			Route::get('kode/{id}/edit','Dosen\Kurikulum\SilabusController@editAction');
	});
	});
});


/*
==========================================
Route buat karyawan ditaruh dibawah sini
=========================================
*/



});
