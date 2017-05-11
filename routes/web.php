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



/*
==========================================
Route buat karyawan ditaruh dibawah sini
=========================================
*/
    Route::group( ['prefix'=>'karyawan'], function(){
	    Route::group( ['prefix'=>'kurikulum'], function(){
	
		    Route::group( ['prefix'=>'mata-kuliah'], function(){
		        Route::get('/',['as'=>'karyawan.kurikulum.mata-kuliah.index', 'uses'=>'Karyawan\Kurikulum\MataKuliahController@index']);
		        Route::get('/print/{id}',['as'=>'karyawan.kurikulum.mata-kuliah.index', 'uses'=>'Karyawan\Kurikulum\MataKuliahController@toPdf']);		        
		        Route::get('/create',['as'=>'karyawan.kurikulum.mata-kuliah.index', 'uses'=>'Karyawan\Kurikulum\MataKuliahController@create']);		        
		        Route::post('/create',['as'=>'karyawan.kurikulum.mata-kuliah.index', 'uses'=>'Karyawan\Kurikulum\MataKuliahController@createAction']);
		        Route::get('/edit/{id}',['as'=>'karyawan.kurikulum.mata-kuliah.index', 'uses'=>'Karyawan\Kurikulum\MataKuliahController@edit']);		        
		        Route::post('/edit/{id}',['as'=>'karyawan.kurikulum.mata-kuliah.index', 'uses'=>'Karyawan\Kurikulum\MataKuliahController@editAction']);
		        Route::get('/delete{id}',['as'=>'karyawan.kurikulum.mata-kuliah.index', 'uses'=>'Karyawan\Kurikulum\MataKuliahController@delete']);		        		        		        
		    });

	    });
    });

});
