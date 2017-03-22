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
        Route::get('/kurikulum/contoh', function () {
    return view('kurikulum.contoh');
});      

        Route::get('/kurikulum/editcpbelajar', function () {
            return view('kurikulum.cpbelajar.index-editcpbelajar');
        });

    Route::get('/monsi/tabel-mhs', function () {
    return view('monsi.tabel-mhs');


});
     Route::get('/monsi/form-editskripsi', function () {
    return view('monsi.form-editskripsi');

    
});
     Route::get('/monsi/form-viewskripsi', function () {
    return view('monsi.form-viewskripsi');

    
});
     Route::get('/monsi/form-viewskripsi', function () {
    return view('monsi.form-viewskripsi');

    });

    Route::get('/dosen/penelitian', function () {
    return view('dosen.penelitian.create');
});
    Route::get('/monsi/form_uploadproposal', function () {
    return view('monsi.form_uploadproposal');
});
    Route::get('/kurikulum/cpbelajar/', function () {
    return view('kurikulum.cpbelajar.index');
});
    Route::get('/kurikulum/cpbelajar/tambah', function () {
    return view('kurikulum.cpbelajar.tambahcpbelajar');
    });

});