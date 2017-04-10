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
        Route::group(['prefix' => 'ruang'], function() {
    // Url CRUD

        // Menampilkan tabel
        Route::get('view','KrsKhs\RuangController@index');

        // Menampilkan form tambah biodata
        Route::get('create','KrsKhs\RuangController@create');

        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('create','KrsKhs\RuangController@createAction');

        // Menghapus biodata sesuai id yang dipilih
        Route::get('/{id}/delete','KrsKhs\RuangController@delete');

        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('/{id}/edit','KrsKhs\RuangController@edit');

        // Mengupdate biodata dengan isi dari form
        Route::post('/{id}/edit','KrsKhs\RuangController@editAction');

    });
        

    });

    // Modul Kurikulum
    Route::group(['prefix' => 'kurikulum'], function() {
         // Menampilkan tabel
        Route::get('capaian-program','Kurikulum\CapaianProgramController@index');

        // Menampilkan form tambah biodata
        Route::get('capaian-program/create','Kurikulum\CapaianProgramController@create');

        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('capaian-program/create','Kurikulum\CapaianProgramController@createAction');

        // Menghapus biodata sesuai id yang dipilih
        Route::get('capaian-program/{id}/delete','Kurikulum\CapaianProgramController@delete');

        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('capaian-program/{id}/edit','Kurikulum\CapaianProgramController@edit');

        // Mengupdate biodata dengan isi dari form
        Route::post('capaian-program/{id}/edit','Kurikulum\CapaianProgramController@editAction');
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
        Route::get('input-maintenance', 'MaintenanceController@inputMaintenance');
        Route::get('index-maintenance', 'MaintenanceController@index');
        Route::get('view-maintenance', 'MaintenanceController@viewDetail');

        Route::get('input-peminjaman', 'Inventaris\PeminjamanController@inputPeminjaman');
        Route::post('post-input-peminjaman', 'Inventaris\PeminjamanController@postInputPeminjaman');
        Route::post('/{id}/post-edit-peminjaman', 'Inventaris\PeminjamanController@postEditPeminjaman');
        Route::get('index-peminjaman', 'Inventaris\PeminjamanController@index');
        Route::get('/{id}/view-peminjaman', 'Inventaris\PeminjamanController@viewDetail');
        Route::get('/{id}/edit-peminjaman', 'Inventaris\PeminjamanController@edit');
        Route::get('/{id}/delete', 'Inventaris\PeminjamanController@delete');

        Route::get('add-asset', 'HomeController@input');
        Route::get('view-asset', 'HomeController@index');
    });
  
        
});