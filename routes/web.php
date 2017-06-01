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

Route::group(['prefix' => 'mahasiswa'], function(){
    //Fitur Kra Mahasiswa
        Route::group(['prefix' => 'krskhs'], function(){
            //Untuk folder Krs
            Route::group(['prefix' => 'krs'], function(){

        // Menampilkan form tambah biodata
        Route::get('index','Mahasiswa\KrsKhs\KrsMhsController@create');

        // Menghapus biodata sesuai id yang dipilih
        Route::get('{id}/delete','Mahasiswa\KrsKhs\KrsMhsController@delete');

        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::get('create/{id}','Mahasiswa\KrsKhs\KrsMhsController@createSyarat');

        // Mengupdate biodata dengan isi dari form
        Route::get('editAction/{$id}','Mahasiswa\KrsKhs\KrsMhsController@editAction');
            });
        });
    });
});
?>
