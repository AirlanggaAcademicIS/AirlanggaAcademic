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
    // Url CRUD

        // Menampilkan tabel
        Route::get('JenisPenilaian','KrsKhs\JenisPenilaianController@index');

        // Menampilkan form tambah biodata
        Route::get('JenisPenilaian/create','KrsKhs\JenisPenilaianController@create');

        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('JenisPenilaian/create','KrsKhs\JenisPenilaianController@createAction');

        // Menghapus biodata sesuai id yang dipilih
        Route::get('JenisPenilaian/{id}/delete','KrsKhs\JenisPenilaianController@delete');

        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('JenisPenilaian/{id}/edit','KrsKhs\JenisPenilaianController@edit');

        // Mengupdate biodata dengan isi dari form
        Route::post('JenisPenilaian/{id}/edit','KrsKhs\JenisPenilaianController@editAction');



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
         Route::get('penelitian','Dosen\PenelitianController@index');

        // Menampilkan form tambah biodata
        Route::get('penelitian/create','Dosen\PenelitianController@create');

        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('penelitian/create','Dosen\PenelitianController@createAction');

        // Menghapus biodata sesuai id yang dipilih
        Route::get('penelitian/{id}/delete','Dosen\PenelitianController@delete');

        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('penelitian/{id}/edit','Dosen\PenelitianController@edit');

        // Mengupdate biodata dengan isi dari form
        Route::post('penelitian/{id}/edit','Dosen\PenelitianController@editAction');
            

    });

    // Modul Kegiatan
    Route::group(['prefix' => 'kegiatan'], function() {

    });

    // Modul PLA
    Route::group(['prefix' => 'pla'], function() {
                

    });

    // Modul Notulensi

    Route::group(['prefix' => 'notulensi'], function() {

    Route::get('notulen','Notulensi\NotulensiController@index');

        // Menampilkan tabel
        Route::get('notulen','Notulensi\NotulensiController@index');

        // Menampilkan tabel
        Route::get('dosenrapat','Notulensi\DosenRapatController@index');

        // Menampilkan form tambah dosen rapat
        Route::get('dosenrapat/create','Notulensi\DosenRapatController@create');

        // Menambahkan form yg di isi tadi ke tabel dosen rapat
        Route::post('dosenrapat/create','Notulensi\DosenRapatController@createAction');

        // Menghapus dosen rapat sesuai id yang dipilih
        Route::get('dosenrapat/{id}/delete','Notulensi\DosenRapatController@delete');

        // Menampilkan form edit dosen rapat dari id yg dipilih
        Route::get('dosenrapat/{id}/edit','Notulensi\DosenRapatController@edit');

        // Mengupdate dosen rapat dengan isi dari form
        Route::post('dosenrapat/{id}/edit','Notulensi\DosenRapatController@editAction');

        // Menampilkan form tambah notulensi rapat
        Route::get('notulen/create','Notulensi\NotulensiController@create');

        // Menambahkan form yg di isi tadi ke tabel notulensi rapat
        Route::post('notulen/create','Notulensi\NotulensiController@createAction');

        // Menghapus notulensi rapat sesuai id yang dipilih
        Route::get('notulen/{id_notulen}/delete','Notulensi\NotulensiController@delete');

        // Menampilkan form edit notulensi rapat dari id yg dipilih
        Route::get('notulen/{id_notulen}/edit','Notulensi\NotulensiController@edit');

        // Mengupdate notulensi rapat dengan isi dari form
        Route::post('notulen/{id_notulen}/edit','Notulensi\NotulensiController@editAction');
            
    });

    // Modul Monitoring Skripsi
    Route::group(['prefix' => 'monitoring-skripsi'], function() {

        // Menampilkan tabel
        Route::get('skripsi','MonitoringSkripsi\SkripsiController@index');

        // Menampilkan form tambah 
        Route::get('skripsi/create','MonitoringSkripsi\SkripsiController@create');

        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('skripsi/create','MonitoringSkripsi\SkripsiController@createAction');

        // Menghapus  sesuai id yang dipilih
        Route::get('skripsi/{id_skripsi}/delete','MonitoringSkripsi\SkripsiController@delete');

        // Menampilkan form edit dari id yg dipilih
        Route::get('skripsi/{id_skripsi}/edit','MonitoringSkripsi\SkripsiController@edit');

        // Mengupdate  dengan isi dari form
        Route::post('skripsi/{id_skripsi}/edit','MonitoringSkripsi\SkripsiController@editAction');

        Route::get('KBK','MonitoringSkripsi\KBKController@index');

        // Menampilkan form tambah biodata
        Route::get('KBK/create','MonitoringSkripsi\KBKController@create');

        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('KBK/create','MonitoringSkripsi\KBKController@createAction');

        // Menghapus biodata sesuai id yang dipilih
        Route::get('KBK/{id_kbk}/delete','MonitoringSkripsi\KBKController@delete');

        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('KBK/{id_kbk}/edit','MonitoringSkripsi\KBKController@edit');

        // Mengupdate biodata dengan isi dari form
        Route::post('KBK/{id_kbk}/edit','MonitoringSkripsi\KBKController@editAction');

         // Menampilkan tabel
        Route::get('konsultasi','MonitoringSkripsi\KonsultasiController@index');

        // Menampilkan form tambah biodata
        Route::get('konsultasi/create','MonitoringSkripsi\KonsultasiController@create');


        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('konsultasi/create','MonitoringSkripsi\KonsultasiController@createAction');

        // Menghapus biodata sesuai id yang dipilih
        Route::get('konsultasi/{id}/delete','MonitoringSkripsi\KonsultasiController@delete');

        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('konsultasi/{id}/edit','MonitoringSkripsi\KonsultasiController@edit');

        // Mengupdate biodata dengan isi dari form
        Route::post('konsultasi/{id}/edit','MonitoringSkripsi\KonsultasiController@editAction'); 

        //Menampilkan list dosen pembimbing dan form untuk menambahkan
           Route::get('index-dosbing','MonitoringSkripsi\DosenPembimbingController@index');

         //Action untuk menambahkan dosbing  

            Route::post('tambah-dosbing','MonitoringSkripsi\DosenPembimbingController@store');

        //Action untuk menghapus dosbing
            Route::get('hapus-dosbing/{id}','MonitoringSkripsi\DosenPembimbingController@destroy');

        //Page untuk menampilkan edit form sesuai data yang dipilih
            Route::get('edit-dosbing/{id}','MonitoringSkripsi\DosenPembimbingController@edit_dosbing');
            
        // Action untuk mengupdate dosbing    
            Route::post('manipulate-dosbing','MonitoringSkripsi\DosenPembimbingController@manipulate');
           
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