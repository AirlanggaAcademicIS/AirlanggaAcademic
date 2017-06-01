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
// <li
// @if($page == 'mk_ditawarkan')
// {!! 'class="active"'!!}
// @endif>

// <a href="{{ url('krs-khs/mk_ditawarkan/create') }}"><i class='fa fa-book'></i><span>MK Ditawarkan</span></a>
// </li>
Route::group(['prefix' => 'mahasiswa'], function(){
Route::group(['prefix' => 'krs-khs'], function() {
        Route::get('mk_ditawarkan/create', 'Karyawan\KrsKhs\MKDitawarkanController@index');
        Route::post('mk_ditawarkan/create', 'Karyawan\KrsKhs\MKDitawarkanController@createAction');
        
        // Histori Nilai
        Route::group(['prefix' => 'histori'], function(){
            Route::get('view','Mahasiswa\KrsKhs\HistoriController@index');
            Route::get('cetak','Mahasiswa\KrsKhs\HistoriController@toPdf');
        });
        Route::group(['prefix' => 'khs'], function(){
            Route::get('view','Mahasiswa\KrsKhs\KHSController@index');
            Route::get('cetak','Mahasiswa\KrsKhs\KHSController@toPdf');
             });
        });
    }); 

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
        Route::get('create/{id}','Mahasiswa\KrsKhs\KrsMhsController@createAction');

        // Mengupdate biodata dengan isi dari form
        Route::get('editAction/{$id}','Mahasiswa\KrsKhs\KrsMhsController@editAction');
            });
        });
    });

/*

==========================================
Route buat karyawan ditaruh dibawah sini
=========================================
*/
    Route::group(['prefix' => 'karyawan'], function(){
        Route::group(['prefix' => 'krs-khs'], function(){
        // Input Ruang
            Route::group(['prefix' => 'ruang'], function(){
            Route::get('view','Karyawan\KrsKhs\RuangController@index');
            Route::get('{id_ruang}/edit','Karyawan\KrsKhs\RuangController@edit');
            Route::post('{id_ruang}/edit','Karyawan\KrsKhs\RuangController@editAction');
            Route::post('create','Karyawan\KrsKhs\RuangController@createAction');
            });
        });
    });
  
        



});