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

    Route::group(['prefix' => 'mahasiswa'], function() {

        Route::group(['prefix' => 'pla'], function() {

            Route::get('surat-keluar-mhs','mahasiswa\PLA\Surat_Keluar_MhsController@index');           
            Route::get('surat-keluar-mhs/create','Mahasiswa\PLA\Surat_Keluar_MhsController@create');
            Route::post('surat-keluar-mhs/create','mahasiswa\PLA\Surat_Keluar_MhsController@createAction');
            Route::get('surat-keluar-mhs/{id}/delete','mahasiswa\PLA\Surat_Keluar_MhsController@delete');
            Route::get('surat-keluar-mhs/{id}/edit','mahasiswa\PLA\Surat_Keluar_MhsController@edit');
            Route::post('surat-keluar-mhs/{id}/edit','mahasiswa\PLA\Surat_Keluar_MhsController@editAction');

        });
    });

    Route::group(['prefix' => 'karyawan'], function() {

        Route::group(['prefix' => 'pla'], function() {

                Route::get('surat-keluar-mhs','Karyawan\PLA\Surat_Keluar_MhsController@index');           
                Route::get('surat-keluar-mhs/create','Karyawan\PLA\Surat_Keluar_MhsController@create');
                Route::post('surat-keluar-mhs/create','Karyawan\PLA\Surat_Keluar_MhsController@createAction');
                Route::get('surat-keluar-mhs/{id}/delete','Karyawan\PLA\Surat_Keluar_MhsController@delete');
                Route::get('surat-keluar-mhs/{id}/edit','Karyawan\PLA\Surat_Keluar_MhsController@edit');
                Route::post('surat-keluar-mhs/{id}/edit','Karyawan\PLA\Surat_Keluar_MhsController@editAction');

                Route::get('surat-keluar-mhs/{id}/agree','Karyawan\PLA\Surat_Keluar_MhsController@agree');
                Route::get('surat-keluar-mhs/{id}/disagree','Karyawan\PLA\Surat_Keluar_MhsController@disagree');

                Route::get('surat-keluar-dosen','Karyawan\PLA\Surat_Keluar_DosenController@index');           
                Route::get('surat-keluar-dosen/create','Karyawan\PLA\Surat_Keluar_DosenController@create');
                Route::post('surat-keluar-dosen/create','Karyawan\PLA\Surat_Keluar_DosenController@createAction');
                Route::get('surat-keluar-dosen/{id}/delete','Karyawan\PLA\Surat_Keluar_DosenController@delete');
                Route::get('surat-keluar-dosen/{id}/edit','Karyawan\PLA\Surat_Keluar_DosenController@edit');
                Route::post('surat-keluar-dosen/{id}/edit','Karyawan\PLA\Surat_Keluar_DosenController@editAction');

                Route::get('surat-keluar-dosen/{id}/agree','Karyawan\PLA\Surat_Keluar_DosenController@agree');
                Route::get('surat-keluar-dosen/{id}/disagree','Karyawan\PLA\Surat_Keluar_DosenController@disagree');
        });
    });

    Route::group(['prefix' => 'dosen'], function() {

        Route::group(['prefix' => 'pla'], function() {

            Route::get('surat-keluar-dosen','dosen\PLA\Surat_Keluar_DosenController@index');           
            Route::get('surat-keluar-dosen/create','dosen\PLA\Surat_Keluar_DosenController@create');
            Route::post('surat-keluar-dosen/create','dosen\PLA\Surat_Keluar_DosenController@createAction');
            Route::get('surat-keluar-dosen/{id}/delete','dosen\PLA\Surat_Keluar_DosenController@delete');
            Route::get('surat-keluar-dosen/{id}/edit','dosen\PLA\Surat_Keluar_DosenController@edit');
            Route::post('surat-keluar-dosen/{id}/edit','dosen\PLA\Surat_Keluar_DosenController@editAction');

        });

    });


});