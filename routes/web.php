<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group whichRoute::get('/', function () {
    return view('welcome');
});
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', 'Auth\LoginController@logout');

Route::group(['prefix' => '/notulensi'], function() {
        // Menampilkan tabel notulensi
        Route::get('','Karyawan\notulensi\NotulensiKaryawanController@index');
                // Menampilkan form tambah biodata
        Route::get('/create','Karyawan\notulensi\NotulensiKaryawanController@create');
        Route::post('/create2','Karyawan\notulensi\NotulensiKaryawanController@create2');
                // Menambahkan form yg di isi tadi ke  tabel notulensi
        Route::post('/create','Karyawan\notulensi\NotulensiKaryawanController@createAction');
   
        Route::get('/{id_notulen}/delete','Karyawan\notulensi\NotulensiKaryawanController@delete');

         Route::get('/{id_notulen}/edit','Karyawan\notulensi\NotulensiKaryawanController@edit');

        Route::post('/{id_notulen}/edit','Karyawan\notulensi\NotulensiKaryawanController@editAction');



});
});


