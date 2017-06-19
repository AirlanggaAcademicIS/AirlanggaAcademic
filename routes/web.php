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

 Route::group(['prefix' => 'mahasiswa'], function() {

        Route::get('surat-masuk','mahasiswa\PLA\Surat_MasukController@index');
    });

/*
==========================================
Route buat dosen ditaruh dibawah sini
=========================================
*/

Route::group(['prefix' => 'dosen'], function() {

        Route::get('surat-masuk','dosen\PLA\Surat_MasukController@index');
    });

/*
==========================================
Route buat karyawan ditaruh dibawah sini
=========================================
*/

Route::group(['prefix' => 'karyawan'], function() {

        Route::get('surat-masuk','karyawan\PLA\Surat_MasukController@index');           

        Route::get('surat-masuk/create','karyawan\PLA\Surat_MasukController@create');

        Route::post('surat-masuk/create','karyawan\PLA\Surat_MasukController@createAction');

        Route::get('surat-masuk/{id}/delete','karyawan\PLA\Surat_MasukController@delete');

        Route::get('surat-masuk/{id}/edit','karyawan\PLA\Surat_MasukController@edit');

        Route::post('surat-masuk/{id}/edit','karyawan\PLA\Surat_MasukController@editAction');

        Route::get('surat-masuk/{id}/terambil','karyawan\PLA\Surat_MasukController@terambil');
    });

});
