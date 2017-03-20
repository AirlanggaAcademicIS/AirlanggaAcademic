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

     Route::get('/monsi/sidang_proposal', function () {
    return view('monsi.sidang-proposal');

    });

     Route::get('/monsi/sidang_skripsi', function () {
    return view('monsi.sidang-skripsi');

    });

      Route::get('/monsi/jadwal_sidang_proposal_mhs', function () {
    return view('monsi.lihat-jadwal-sidang-proposal');

    });

       Route::get('/monsi/jadwal_sidang_proposal_dosen', function () {
    return view('monsi.lihat-jadwal-sidang-proposal-dosen');

    });

         Route::get('/monsi/jadwal_sidang_skripsi_mhs', function () {
    return view('monsi.lihat-jadwal-sidang-skripsi');

    });

          Route::get('/monsi/jadwal_sidang_skripsi_dosen', function () {
    return view('monsi.lihat-jadwal-sidang-skripsi-dosen');

    });

});
