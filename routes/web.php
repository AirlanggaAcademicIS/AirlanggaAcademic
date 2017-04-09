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
    // Modul Mahasiswa
    Route::group(['prefix' => 'mahasiswa'], function() {
    // Url CRUD

        // Menampilkan tabel
        Route::get('biodata','Mahasiswa\BiodataController@index');

        // Menampilkan form tambah biodata
        Route::get('biodata/create','Mahasiswa\BiodataController@create');

        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('biodata/create','Mahasiswa\BiodataController@createAction');

        // Menghapus biodata sesuai id yang dipilih
        Route::get('biodata/{id}/delete','Mahasiswa\BiodataController@delete');

        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('biodata/{id}/edit','Mahasiswa\BiodataController@edit');

        // Mengupdate biodata dengan isi dari form
        Route::post('biodata/{id}/edit','Mahasiswa\BiodataController@editAction');

    });

    // Modul KRS & KHS
    Route::group(['prefix' => 'krs-khs'], function() {
        

    });

    // Modul Kurikulum
    Route::group(['prefix' => 'kurikulum'], function() {
                // Menampilkan tabel
        Route::get('universitas','Kurikulum\UniversitasController@index');

        // Menampilkan form tambah biodata
        Route::get('universitas/create','Kurikulum\UniversitasController@create');

        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('universitas/create','Kurikulum\UniversitasController@createAction');

        // Menghapus biodata sesuai id yang dipilih
        Route::get('universitas/{id}/delete','Kurikulum\UniversitasController@delete');

        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('universitas/{id}/edit','Kurikulum\UniversitasController@edit');

        // Mengupdate biodata dengan isi dari form
        Route::post('universitas/{id}/edit','Kurikulum\UniversitasController@editAction');

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