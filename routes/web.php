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
// Form memmohon ruangan
        Route::get('memohon-ruangan','Mahasiswa\MohonRuanganController@create');

        Route::get('memohon-ruangan','Mahasiswa\MohonRuanganController@createAction');
/*
==========================================
Route buat dosen ditaruh dibawah sini
=========================================
*/

// Modul Kurikulum
Route::group(['prefix' => 'dosen'], function() {
	Route::group(['prefix' => 'kurikulum'], function() {
		Route::group(['prefix' => 'cp_program'], function() {

			Route::get('/','Dosen\Kurikulum\CapaianProgramController@index');
	        Route::get('create','Dosen\Kurikulum\CapaianProgramController@create');
	        // Menambahkan form yg di isi tadi ke tabel biodata
	        Route::post('create','Dosen\Kurikulum\CapaianProgramController@createAction');

	        // Menghapus biodata sesuai id yang dipilih
	        Route::get('{id}/delete','Dosen\Kurikulum\CapaianProgramController@delete');

	        // Menampilkan form edit biodata dari id yg dipilih
	        Route::get('{id}/edit','Dosen\Kurikulum\CapaianProgramController@edit');

	        // Mengupdate biodata dengan isi dari form
	        Route::post('{id}/edit','Dosen\Kurikulum\CapaianProgramController@editAction');
	});
});
});
Route::group(['prefix' => 'dosen'], function() {
	
	Route::get('pengmas/','Dosen\PengmasController@index');

        // Menampilkan form tambah biodata
        Route::get('pengmas/create','Dosen\PengmasController@create');

        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('pengmas/create','Dosen\PengmasController@createAction');

        // Menghapus biodata sesuai id yang dipilih
        Route::get('pengmas/{id}/delete','Dosen\PengmasController@delete');

        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('pengmas/{id}/edit','Dosen\PengmasController@edit');

        // Mengupdate biodata dengan isi dari form
        Route::post('pengmas/{id}/edit','Dosen\PengmasController@editAction');     
   });

// Modul Kurikulum
Route::group(['prefix' => 'dosen'], function(){
    Route::group(['prefix' => 'kurikulum'], function(){
        Route::group(['prefix' => 'silabus'], function(){

            Route::get('/','Dosen\Kurikulum\SilabusController@index');
            Route::get('create','Dosen\Kurikulum\SilabusController@create');            
            Route::post('create','Dosen\Kurikulum\SilabusController@createAction');
            Route::get('kode/{id}/delete','Dosen\Kurikulum\SilabusController@delete');
            Route::get('kode/{id}/edit','Dosen\Kurikulum\SilabusController@edit');
            Route::get('kode/{id}/edit','Dosen\Kurikulum\SilabusController@editAction');
    });
    });
    });
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
Route::get('dosen/monitoring-skripsi/skripsi','Dosen\monitoringskripsi\SkripsiController@index');
Route::group(['prefix' => 'dosen'], function() {
      
        Route::group(['prefix' => 'kurikulum'], function() {

		Route::group(['prefix' => 'kodecppem'], function() {

		    Route::get('/','Dosen\Kurikulum\KodeController@index');

		    Route::post('create','Dosen\Kurikulum\KodeController@createAction');

		    Route::get('/delete/{id}','Dosen\Kurikulum\KodeController@delete');

		    Route::get('/edit/{id}','Dosen\Kurikulum\KodeController@edit');

		    Route::post('/edit/{id}','Dosen\Kurikulum\KodeController@editAction');
		});

	});
});
//Route buat dosen ditaruh dibawah sini
Route::get('kalender','Dosen\NotulensiKalenderController@index');

Route::get('dosen/monitoring-skripsi/skripsi','Dosen\monitoringskripsi\SkripsiController@index');
Route::group(['prefix' => 'inventaris'], function() {
    Route::get('view-asset', 'HomeController@index');

});


Route::group(['prefix' => 'dosen'], function() {
Route::group(['prefix' => 'kurikulum'], function() {
Route::group(['prefix' => 'cp_pembelajaran'], function() {

        // Menampilkan tabel
        Route::get('/','Dosen\Kurikulum\CapaianPembelajaranController@index');

        // Menampilkan form tambah biodata
        Route::get('create','dosen\Kurikulum\CapaianPembelajaranController@create');

        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('create','Dosen\Kurikulum\CapaianPembelajaranController@createAction');

        // Menghapus biodata sesuai id yang dipilih
        Route::get('cp_pembelajaran/{id_cpem}/delete','dosen\Kurikulum\CapaianPembelajaranController@delete');

        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('cp_pembelajaran/{id_cpem}/edit','dosen\Kurikulum\CapaianPembelajaranController@edit');

        // Mengupdate biodata dengan isi dari form
        Route::post('cp_pembelajaran/{id_cpem}/edit','dosen\Kurikulum\CapaianPembelajaranController@editAction');
});
});
});
      Route::group(['prefix' => 'dosen'], function() {
		Route::group(['prefix' => 'rps'], function() {
	        Route::get('/','Dosen\Kurikulum\RPSController@index');
	        Route::get('create','Dosen\Kurikulum\RPSController@create');
	        Route::post('create','Dosen\Kurikulum\RPSController@createAction');
	        Route::get('/{id}/delete','Dosen\Kurikulum\RPSController@delete');
	        Route::get('/{id}/edit','Dosen\Kurikulum\RPSController@edit');
	        Route::post('/{id}/edit','Dosen\Kurikulum\RPSController@editAction');
    });

            // Menampilkan tabel
        Route::get('konferensi','Dosen\KonferensiController@index');

        // Menampilkan form tambah biodata
        Route::get('konferensi/create','Dosen\KonferensiController@create');

        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('konferensi/create','Dosen\KonferensiController@createAction');

        // Menghapus biodata sesuai id yang dipilih
        Route::get('konferensi/{id}/delete','Dosen\KonferensiController@delete');

        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('konferensi/{id}/edit','Dosen\KonferensiController@edit');

        // Mengupdate biodata dengan isi dari form
        Route::post('konferensi/{id}/edit','Dosen\KonferensiController@editAction');

             
   });
/*

==========================================
Route buat karyawan ditaruh dibawah sini
=========================================
*/
Route::get('karyawan/krs-khs/input_dosen_mk','Karyawan\krs_khs\InputDosenMKController@index');
		
		Route::group(['prefix' => 'karyawan'], function() {
		
		// Menampilkan tabel
        Route::get('akun','Karyawan\AkunMahasiswaController@index');
        // Menampilkan form tambah biodata
        Route::get('akun/create','Karyawan\AkunMahasiswaController@create');
        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('akun/create','Karyawan\AkunMahasiswaController@createAction');
        // Menghapus biodata sesuai id yang dipilih
        Route::get('akun/{nim}/delete','Karyawan\AkunMahasiswaController@delete');
        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('akun/{nim}/edit','Karyawan\AkunMahasiswaController@edit');
        // Mengupdate biodata dengan isi dari form
        Route::post('akun/{nim}/edit','Karyawan\AkunMahasiswaController@editAction');
        });
Route::get('dosenrapat','Karyawan\notulensi\daftarDosenRapatController@index');

 // Modul PLA
    Route::group(['prefix' => 'karyawan'], function() {
        Route::group(['prefix' => 'pla'], function() {

        // Menampilkan tabel
        Route::get('petugas_tu','Karyawan\PLA\Petugas_TU_Controller@index');
         // Menampilkan form tambah biodata
        Route::get('petugas_tu/create','Karyawan\PLA\Petugas_TU_Controller@create');
        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('petugas_tu/create','Karyawan\PLA\Petugas_TU_Controller@createAction');
         // Menghapus biodata sesuai id yang dipilih
        Route::get('petugas_tu/{nip_petugas}/delete','Karyawan\PLA\Petugas_TU_Controller@delete');
        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('petugas_tu/{nip_petugas}/edit','Karyawan\PLA\Petugas_TU_Controller@edit');
        // Mengupdate biodata dengan isi dari form
        Route::post('petugas_tu/{nip_petugas}/edit','Karyawan\PLA\Petugas_TU_Controller@editAction');
});
});

Route::group(['prefix' => 'karyawan'], function() {
	// Menampilkan tabel
        Route::get('verifikasi','Karyawan\VerifikasiController@index');
        Route::get('verifikasi/penelitian','Karyawan\VerifikasiController@createPenelitian');

        Route::get('verifikasi/prestasi','Karyawan\VerifikasiController@createPrestasi');

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

    });

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


        Route::get('verifikasi/{id}/penelitian','Karyawan\VerifikasiController@editPenelitian');

        Route::post('verifikasi/{id}/penelitian','Karyawan\VerifikasiController@editPenelitianAction');

        Route::get('verifikasi/{id}/prestasi','Karyawan\VerifikasiController@editPrestasi');
        Route::post('verifikasi/{id}/prestasi','Karyawan\VerifikasiController@editPrestasiAction');


        Route::get('verifikasi/download/{id}','Karyawan\VerifikasiController@download');

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

    
    // Menampilkan tabel
    Route::get('asset','Karyawan\AssetController@index');

    Route::get('add-asset', 'HomeController@input');
    Route::get('view-asset', 'HomeController@index');


    
        // Menampilkan tabel
        Route::get('asset','Karyawan\AssetController@index');
        
        // Menampilkan form tambah asset
        Route::get('asset/create','Karyawan\AssetController@create');
        
        // Menambahkan form yg di isi tadi ke tabel asset
        Route::post('asset/create','Karyawan\AssetController@createAction');
        
        // Menghapus asset sesuai id yang dipilih
        Route::get('asset/{id}/delete','Karyawan\AssetController@delete');

        // Menampilkan form edit asset dari id yg dipilih
        Route::get('asset/{id}/edit','Karyawan\AssetController@edit');

        // Mengupdate asset dengan isi dari form
        Route::post('asset/{id}/edit','Karyawan\AssetController@editAction');

        //


    	Route::get('add-asset', 'DashboardController@input');
    	Route::get('/view-asset', 'Inventaris\DashboardController@index');
    
         
        Route::get('add-asset', 'HomeController@input');
        Route::get('view-asset', 'HomeController@index');

    });

});