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
   Route::group(['prefix' => 'mahasiswa'], function() {
//Fitur Biodata Mahasiswa
        // Menampilkan tabel
        Route::get('biodata-mahasiswa','Mahasiswa\BiodataMahasiswaController@index');

        // Menampilkan form tambah biodata
        Route::get('biodata-mahasiswa/create','Mahasiswa\BiodataMahasiswaController@create');

        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('biodata-mahasiswa/create','Mahasiswa\BiodataMahasiswaController@createAction');

        // Menghapus biodata sesuai id yang dipilih
        Route::get('biodata-mahasiswa/{id_bio}/delete','Mahasiswa\BiodataMahasiswaController@delete');

        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('biodata-mahasiswa/{id_bio}/edit','Mahasiswa\BiodataMahasiswaController@edit');

        // Mengupdate biodata dengan isi dari form
        Route::post('biodata-mahasiswa/{id_bio}/edit','Mahasiswa\BiodataMahasiswaController@editAction');
    });
Route::group(['prefix' => 'mahasiswa'], function() {
		//Penelitian Mahasiswa
        // Menampilkan tabel
        Route::get('penelitian','Mahasiswa\PenelitianController@index');
        // Menampilkan form tambah penelitian
        Route::get('penelitian/create','Mahasiswa\PenelitianController@create');
        // Menambahkan form yg di isi tadi ke tabel penelitian
        Route::post('penelitian/create','Mahasiswa\PenelitianController@createAction');
        // Menghapus penelitian sesuai id yang dipilih
        Route::get('penelitian/{kode_penelitian}/delete','Mahasiswa\PenelitianController@delete');
        // Menampilkan form edit penelitian dari id yg dipilih
        Route::get('penelitian/{kode_penelitian}/edit','Mahasiswa\PenelitianController@edit');
        // Mengupdate biodata dengan isi dari form
        Route::post('penelitian/{kode_penelitian}/edit','Mahasiswa\PenelitianController@editAction');
});

// Menampilkan tabel
        Route::get('mahasiswa/monitoring-skripsi/konsultasi','mahasiswa\monitoringskripsi\KonsultasiController@index');

        // Menampilkan form tambah biodata
        Route::get('mahasiswa/monitoring-skripsi/konsultasi/create','mahasiswa\monitoringskripsi\KonsultasiController@create');


        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('mahasiswa/monitoring-skripsi/konsultasi/create','mahasiswa\monitoringskripsi\KonsultasiController@createAction');

Route::group(['prefix' => 'mahasiswa'], function() {
// prestasi
     // Menampilkan tabel
        Route::get('prestasi','Mahasiswa\PrestasiController@index');

        // Menampilkan form tambah biodata
        Route::get('prestasi/create','Mahasiswa\PrestasiController@create');

        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('prestasi/create','Mahasiswa\PrestasiController@createAction');

        // Menghapus biodata sesuai id yang dipilih
        Route::get('prestasi/{id_prestasi}/delete','Mahasiswa\PrestasiController@delete');

        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('prestasi/{id_prestasi}/edit','Mahasiswa\PrestasiController@edit');

        // Mengupdate biodata dengan isi dari form
        Route::post('prestasi/{id_prestasi}/edit','Mahasiswa\PrestasiController@editAction');

    });
        // Menghapus biodata sesuai id yang dipilih
        Route::get('mahasiswa/monitoring-skripsi/konsultasi/{id}/delete','mahasiswa\monitoringskripsi\KonsultasiController@delete');

        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('mahasiswa/monitoring-skripsi/konsultasi/{id}/edit','mahasiswa\monitoringskripsi\KonsultasiController@edit');

        // Mengupdate biodata dengan isi dari form
        Route::post('mahasiswa/monitoring-skripsi/konsultasi/{id}/edit','mahasiswa\monitoringskripsi\KonsultasiController@editAction'); 

Route::get('mahasiswa/monitoring-skripsi/skripsi','Mahasiswa\monitoringskripsi\SkripsiController@index');
Route::group(['prefix' => 'inventaris'], function() {
    Route::get('view-asset', 'HomeController@index');
});

/*
==========================================
Route buat dosen ditaruh dibawah sini
=========================================
*/
  // Modul Dosen
    Route::group(['prefix' => 'dosen'], function() {

            // Menampilkan tabel
        
       
       Route::get('jurnal','Dosen\JurnalController@index');

        // Menampilkan form tambah biodata
        Route::get('jurnal/create','Dosen\JurnalController@create');

        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('jurnal/create','Dosen\JurnalController@createAction');

        // Menghapus biodata sesuai id yang dipilih
        Route::get('jurnal/{id}/delete','Dosen\JurnalController@delete');

        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('jurnal/{id}/edit','Dosen\JurnalController@edit');

        // Mengupdate biodata dengan isi dari form
        Route::post('jurnal/{id}/edit','Dosen\JurnalController@editAction');     
    
            

      
   });

//Route buat dosen ditaruh dibawah sini
Route::get('kalender','Dosen\NotulensiKalenderController@index');


Route::get('dosen/monitoring-skripsi/skripsi','Dosen\monitoringskripsi\SkripsiController@index');
Route::group(['prefix' => 'inventaris'], function() {
    Route::get('view-asset', 'HomeController@index');
});


/*
==========================================
Route buat karyawan ditaruh dibawah sini
=========================================
*/
// Menampilkan tabel
        Route::get('surat-masuk','karyawan\Surat_MasukController@index');           

    // Menampilkan form tambah biodata
        Route::get('surat-masuk/create','karyawan\Surat_MasukController@create');

    // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('surat-masuk/create','karyawan\Surat_MasukController@createAction');

    // Menghapus biodata sesuai id yang dipilih
        Route::get('surat-masuk/{id}/delete','karyawan\Surat_MasukController@delete');

    // Menampilkan form edit biodata dari id yg dipilih
        Route::get('surat-masuk/{id}/edit','karyawan\Surat_MasukController@edit');

    // Mengupdate biodata dengan isi dari form
        Route::post('surat-masuk/{id}/edit','karyawan\Surat_MasukController@editAction');

    // Form memmohon ruangan
        Route::get('memohon-ruangan','Karyawan\MohonRuanganController@create');

        Route::get('memohon-ruangan','Karyawan\MohonRuanganController@createAction');

    Route::group( ['prefix'=>'karyawan'], function(){
	    Route::group( ['prefix'=>'kurikulum'], function(){
	
		    Route::group( ['prefix'=>'mata-kuliah'], function(){
		        Route::get('/',['as'=>'karyawan.kurikulum.mata-kuliah.index', 'uses'=>'Karyawan\Kurikulum\MataKuliahController@index']);
		        Route::get('/print/{id}',['as'=>'karyawan.kurikulum.mata-kuliah.index', 'uses'=>'Karyawan\Kurikulum\MataKuliahController@toPdf']);		        
		        Route::get('/create',['as'=>'karyawan.kurikulum.mata-kuliah.index', 'uses'=>'Karyawan\Kurikulum\MataKuliahController@create']);		        
		        Route::post('/create',['as'=>'karyawan.kurikulum.mata-kuliah.index', 'uses'=>'Karyawan\Kurikulum\MataKuliahController@createAction']);
		        Route::get('/edit/{id}',['as'=>'karyawan.kurikulum.mata-kuliah.index', 'uses'=>'Karyawan\Kurikulum\MataKuliahController@edit']);		        
		        Route::post('/edit/{id}',['as'=>'karyawan.kurikulum.mata-kuliah.index', 'uses'=>'Karyawan\Kurikulum\MataKuliahController@editAction']);
		        Route::get('/delete{id}',['as'=>'karyawan.kurikulum.mata-kuliah.index', 'uses'=>'Karyawan\Kurikulum\MataKuliahController@delete']);		        		        		        
		    });

	    });
    });
		Route::get('karyawan/monitoring-skripsi/status','karyawan\monitoringskripsi\StatusController@index');
 // Menampilkan form tambah biodata
        Route::get('karyawan/monitoring-skripsi/status/create','karyawan\monitoringskripsi\StatusController@create');

        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('karyawan/monitoring-skripsi/status/create','karyawan\monitoringskripsi\StatusController@createAction');

        // Menghapus biodata sesuai id yang dipilih
        Route::get('karyawan/monitoring-skripsi/status/{id_kbk}/delete','karyawan\monitoringskripsi\StatusController@delete');

        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('karyawan/monitoring-skripsi/status/{id_kbk}/edit','karyawan\monitoringskripsi\StatusController@edit');

        // Mengupdate biodata dengan isi dari form
        Route::post('karyawan/monitoring-skripsi/status/{id_kbk}/edit','karyawan\monitoringskripsi\StatusController@editAction');

		Route::get('karyawan/monitoring-skripsi/KBK','karyawan\monitoringskripsi\KBKController@index');

        // Menampilkan form tambah biodata
        Route::get('karyawan/monitoring-skripsi/KBK/create','karyawan\monitoringskripsi\KBKController@create');

        // Menambahkan form yg di isi tadi ke tabel biodata	
        Route::post('karyawan/monitoring-skripsi/KBK/create','karyawan\monitoringskripsi\KBKController@createAction');

        // Menghapus biodata sesuai id yang dipilih
        Route::get('karyawan/monitoring-skripsi/KBK/{id_kbk}/delete','karyawan\monitoringskripsi\KBKController@delete');

        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('karyawan/monitoring-skripsi/KBK/{id_kbk}/edit','karyawan\monitoringskripsi\KBKController@edit');

        // Mengupdate biodata dengan isi dari form
        Route::post('karyawan/monitoring-skripsi/KBK/{id_kbk}/edit','karyawan\monitoringskripsi\KBKController@editAction');
// Menampilkan tabel
        Route::get('karyawan/monitoring-skripsi/skripsi','Karyawan\monitoringskripsi\SkripsiController@index');

        // Menampilkan form tambah 
        Route::get('karyawan/monitoring-skripsi/skripsi/create','Karyawan\monitoringskripsi\SkripsiController@create');

        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('karyawan/monitoring-skripsi/skripsi/create','Karyawan\monitoringskripsi\SkripsiController@createAction');

        // Menghapus  sesuai id yang dipilih
        Route::get('karyawan/monitoring-skripsi/skripsi/{id_skripsi}/delete','Karyawan\monitoringskripsi\SkripsiController@delete');

        // Menampilkan form edit dari id yg dipilih
        Route::get('karyawan/monitoring-skripsi/skripsi/{id_skripsi}/edit','Karyawan\monitoringskripsi\SkripsiController@edit');

        // Mengupdate  dengan isi dari form
        Route::post('karyawan/monitoring-skripsi/skripsi/{id_skripsi}/edit','Karyawan\monitoringskripsi\SkripsiController@editAction');
// Modul Inventaris
Route::group(['prefix' => 'inventaris'], function() {
    Route::get('input-maintenance', 'MaintenanceController@inputMaintenance');
    Route::get('index-maintenance', 'MaintenanceController@index');
    Route::get('view-maintenance', 'MaintenanceController@viewDetail');

    Route::get('input-peminjaman', 'Karyawan\PeminjamanController@inputPeminjaman');
    Route::post('post-input-peminjaman', 'Karyawan\PeminjamanController@postInputPeminjaman');
    Route::post('/{id}/post-edit-peminjaman', 'Karyawan\PeminjamanController@postEditPeminjaman');
    Route::get('index-peminjaman', 'Karyawan\PeminjamanController@index');
    Route::get('/{id}/view-peminjaman', 'Karyawan\PeminjamanController@viewDetail');
    Route::get('/{id}/edit-peminjaman', 'Karyawan\PeminjamanController@edit');
    Route::get('/{id}/delete', 'Karyawan\PeminjamanController@delete');

    Route::get('add-asset', 'HomeController@input');
    Route::get('view-asset', 'HomeController@index');
});

});