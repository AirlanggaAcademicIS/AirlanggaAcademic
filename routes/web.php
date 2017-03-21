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
    Route::get('/notulensi/undangan/daftarRapat', function () {
    return view('notulensi.undangan.daftarRapat');
});
   Route::get('/notulensi/kalender/calendar', function () {
    return view('notulensi.kalender.calendar');
});
   Route::get('/notulensi/kehadiranRapat/kehadiran', function () {
    return view('notulensi.kehadiranRapat.kehadiran');
});
   Route::get('/notulensi/kehadiranRapat/jumlah', function () {
    return view('notulensi.kehadiranRapat.jumlah');
});
});
