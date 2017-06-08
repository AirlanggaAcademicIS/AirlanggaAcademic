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


    Route::group(['prefix' => 'mahasiswa'], function() {
        Route::group(['prefix' => 'Kurikulum'], function() {
            Route::group(['prefix' => 'elearning'], function() {
                Route::get('/','Mahasiswa\Kurikulum\elearningMahasiswaController@index');
                Route::get('/{nama_file}/download','Mahasiswa\Kurikulum\elearningMahasiswaController@download');
            });
        });
    });
    Route::group(['prefix' => 'dosen'], function() {
        Route::group(['prefix' => 'kurikulum'], function() {
            
            Route::group(['prefix' => 'elearning'], function() {
                
                Route::get('/','Dosen\Kurikulum\ElearningController@index');
                Route::get('/create','Dosen\Kurikulum\ElearningController@create');
                Route::post('/create','Dosen\Kurikulum\ElearningController@createAction');
                
            });

        });
    });
});
