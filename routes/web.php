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
    Route::get('/dosen/penelitian', function () {
    return view('dosen.penelitian.create');

});
   
     Route::get('/dosen/konferensi/konferensi', function () {
    return view('dosen.konferensi.konferensi');
}); 
     Route::get('/dosen/konferensi/create', function () {
    return view('dosen.konferensi.create');
}); 
	 Route::get('/dosen/konferensi/edit', function () {
    return view('dosen.konferensi.edit');
});

});
