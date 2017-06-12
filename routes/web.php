
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
});

Route::group(['prefix' => 'mahasiswa'], function() {
        Route::group(['prefix' => 'penelitian'], function() {
//Penelitian Mahasiswa
        // Menampilkan tabel
        Route::get('','Mahasiswa\PenelitianController@index');
        // Menampilkan form tambah biodata
        Route::get('create','Mahasiswa\PenelitianController@create');
        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('create','Mahasiswa\PenelitianController@createAction');
        // Menghapus biodata sesuai id yang dipilih
        Route::get('{kode_penelitian}/delete','Mahasiswa\PenelitianController@delete');
        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('{kode_penelitian}/edit','Mahasiswa\PenelitianController@edit');
        // Mengupdate biodata dengan isi dari form
        Route::post('{kode_penelitian}/edit','Mahasiswa\PenelitianController@editAction');

        });
        });