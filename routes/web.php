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

Route::group(['middleware' => ['auth']], function () {

    Route::get('biodata','Mahasiswa\BiodataController@index');
    Route::get('jurnal','Dosen\JurnalController@index');
    // Modul Mahasiswa
    Route::group(['prefix' => 'mahasiswa'], function() {
    // Url nya taruh disini
        

    });

    // Modul KRS & KHS
    Route::group(['prefix' => 'krs-khs'], function() {
        

    });

        // Modul Kurikulum
        Route::group(['prefix' => 'kurikulum'], function() {

            


        });

        // Modul Dosen
        Route::group(['prefix' => 'dosen'], function() {
            
        });

        // Modul Kegiatan
        Route::group(['prefix' => 'kegiatan'], function() {

            

        });

        // Modul PLA
        Route::group(['prefix' => 'pla'], function() {
        
            

        });

        // Modul Notulensi
        Route::group(['prefix' => 'notulensi'], function() {

            
        });


        // Modul Monitoring Skripsi
        Route::group(['prefix' => 'monsi'], function() {

          

        });

        // Modul Inventaris
        Route::group(['prefix' => 'inventaris'], function() {

            
        });
        
    });