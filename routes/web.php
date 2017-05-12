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
        // Menampilkan tabel
        Route::get('mahasiswa/monitoring-skripsi/konsultasi','mahasiswa\monitoringskripsi\KonsultasiController@index');

        // Mengupdate biodata dengan isi dari form
        Route::post('biodata-mahasiswa/{id_bio}/edit','Mahasiswa\BiodataMahasiswaController@editAction');
    });

   Route::group(['prefix' => 'kegiatan'], function() {
        // Menampilkan tabel
        Route::get('dokumentasi','Mahasiswa\DokumentasiController@index');

        // Menampilkan form tambah biodata
        Route::get('dokumentasi/create','Mahasiswa\DokumentasiController@create');

        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('dokumentasi/create','Mahasiswa\DokumentasiController@createAction');

        // Menghapus biodata sesuai id yang dipilih
        Route::get('dokumentasi/{id}/delete','Mahasiswa\DokumentasiController@delete');

        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('dokumentasi/{id}/edit','Mahasiswa\DokumentasiController@edit');

        // Mengupdate biodata dengan isi dari form
        Route::post('dokumentasi/{id}/edit','Mahasiswa\DokumentasiController@editAction');
        });

Route::group(['prefix' => 'mahasiswa'], function() {
		//Penelitian Mahasiswa
        // Menampilkan tabel
        Route::get('mahasiswa/pengelolaan-kegiatan/dokumentasi','mahasiswa\pengelolaankegiatan\DokumentasiController@index');

        // Menampilkan form tambah biodata
        Route::get('mahasiswa/monitoring-skripsi/konsultasi/create','mahasiswa\monitoringskripsi\KonsultasiController@create');


        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('mahasiswa/monitoring-skripsi/konsultasi/create','mahasiswa\monitoringskripsi\KonsultasiController@createAction');

        // Menghapus biodata sesuai id yang dipilih
        Route::get('mahasiswa/monitoring-skripsi/konsultasi/{id}/delete','mahasiswa\monitoringskripsi\KonsultasiController@delete');



//Route buat dosen ditaruh dibawah sini
Route::group(['prefix' => 'notulensi'], function() {

//Lihat daftar hasil rapat
Route::get('','Dosen\NotulensiController@index');
// Menampilkan form edit notulensi rapat dari id yg dipilih
Route::get('notulensi/{id_notulen}/LihatHasilRapat','Dosen\NotulensiController@edit');
// Mengupdate notulensi rapat dengan isi dari form
Route::post('notulensi/{id_notulen}/LihatHasilRapat','Dosen\NotulensiController@editAction');



        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('mahasiswa/monitoring-skripsi/konsultasi/{id}/edit','mahasiswa\monitoringskripsi\KonsultasiController@edit');

    //Lihat daftar hasil rapat
    Route::get('','Dosen\NotulensiController@index');
    // Menampilkan form edit notulensi rapat dari id yg dipilih
    Route::get('notulensi/{id_notulen}/LihatHasilRapat','Dosen\NotulensiController@edit');
    // Mengupdate notulensi rapat dengan isi dari form
    Route::post('notulensi/{id_notulen}/LihatHasilRapat','Dosen\NotulensiController@editAction');
});


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
<<<<<<< HEAD
*/
*/Route::group(['prefix' => '/notulensi'], function() {
		// Menampilkan tabel notulensi
        Route::get('','Karyawan\NotulensiKaryawanController@index');
                // Menampilkan form tambah biodata
        Route::get('notulensi/create','Karyawan\NotulensiKaryawanController@create');
                // Menambahkan form yg di isi tadi ke tabel notulensi
        Route::post('notulensi/create','Karyawan\NotulensiKaryawanController@createAction');
   
	Route::get('notulensi/{id_notulen}/delete','Karyawan\NotulensiKaryawanController@delete');

         Route::get('notulensi/{id_notulen}/edit','Karyawan\NotulensiKaryawanController@edit');

        Route::post('notulensi/{id_notulen}/edit','Karyawan\NotulensiKaryawanController@editAction');




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



//Route buat karyawan ditaruh dibawah sini
Route::group(['prefix' => 'notulensi'], function() {
//Lihat daftar hasil rapat
Route::get('','Karyawan\NotulensiController@index');
        // Menampilkan tabel
        Route::get('dosen/pengelolaan-kegiatan/dokumentasi','dosen\pengelolaankegiatan\DokumentasiController@index');


Route::get('dosen/monitoring-skripsi/skripsi','Dosen\monitoringskripsi\SkripsiController@index');
Route::group(['prefix' => 'inventaris'], function() {
    Route::get('view-asset', 'HomeController@index');
});
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


Route::group(['prefix' => 'dosen'], function() {
Route::group(['prefix' => 'kurikulum'], function() {
Route::group(['prefix' => 'cp_pembelajaran'], function() {

        // Menampilkan tabel
        Route::get('/','Dosen\Kurikulum\CapaianPembelajaranController@index');

        // Menampilkan form tambah biodata
        Route::get('create','dosen\Kurikulum\CapaianPembelajaranController@create');

        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('create','Dosen\Kurikulum\CapaianPembelajaranController@createAction');



//Index
Route::get('undangan','Dosen\notulensi\DosenRapatController@index');

// Menampilkan form tambah dosen rapat
Route::get('undangan/create','Dosen\notulensi\DosenRapatController@create');

// Menambahkan form yg di isi tadi ke tabel dosen rapat
Route::post('undangan/create','Dosen\notulensi\DosenRapatController@createAction');

// Menghapus dosen rapat sesuai id yang dipilih
Route::get('undangan/{nip}/delete','Dosen\notulensi\DosenRapatController@delete');

// Menampilkan form edit dosen rapat dari id yg dipilih
Route::get('undangan/{nip}/edit','Dosen\notulensi\DosenRapatController@edit');

// Mengupdate dosen rapat dengan isi dari form
Route::post('undangan/{nip}/edit','Dosen\notulensi\DosenRapatController@editAction');


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
Route buat karyawan ditaruh dibawah sini
*/
Route::group(['prefix' => 'Karyawan'], function() {

 
           Route::get('manage-jadwal-sidang-proposal','Karyawan\SkripsiController@view_manage_jadwal_sidang_proposal');


           Route::post('create-jadwal-sidang-proposal','Karyawan\SkripsiController@create_jadwal_sidang_proposal');

});

 Route::group(['prefix' => 'krs-khs'], function() {
        Route::get('mk_ditawarkan', 'Karyawan\KrsKhs\MKDitawarkanController@index');
    });		
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
        });
Route::group(['prefix' => 'karyawan'], function() {
//menampilkan tabel
	Route::get('PermohonanRuang','karyawan\PermohonanRuangController@index');
// Menampilkan form tambah 
	Route::get('PermohonanRuang/create','karyawan\PermohonanRuangController@create');
// Menambahkan form yg di isi tadi ke tabel 
	Route::post('PermohonanRuang/create','karyawan\PermohonanRuangController@createAction');
// Menghapus  sesuai id yang dipilih
	Route::get('PermohonanRuang/{id}/delete','karyawan\PermohonanRuangController@delete'); 
// Menampilkan form edit dari id yg dipilih
	Route::get('PermohonanRuang/{id}/edit','karyawan\PermohonanRuangController@edit');
// Mengupdate  dengan isi dari form
	Route::post('PermohonanRuang/{id}/edit','karyawan\PermohonanRuangController@editAction');



Route::group(['prefix' => 'inventaris'], function() {

 
           Route::get('manage-hasil-sidang-proposal','Karyawan\SkripsiController@view_manage_hasil_sidang_proposal');
           Route::get('view-tambah-hasil-sidang-proposal','Karyawan\SkripsiController@view_tambah_hasil_sidang_proposal');

});


});
});
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

    Route::get('karyawan/pengelolaan-kegiatan/pengajuan-kegiatan','Karyawan\pengelolaankegiatan\PengajuanKegiatanController@index');

    Route::get('karyawan/pengelolaan-kegiatan/dokumentasi','karyawan\pengelolaankegiatan\DokumentasiController@index');

        // Menampilkan form tambah biodata
        Route::get('karyawan/pengelolaan-kegiatan/dokumentasi/create','karyawan\pengelolaankegiatan\DokumentasiController@create');

        // Menambahkan form yg di isi tadi ke tabel biodata 
        Route::post('karyawan/pengelolaan-kegiatan/dokumentasi/create','karyawan\pengelolaankegiatan\DokumentasiController@createAction');

        // Menghapus biodata sesuai id yang dipilih
        Route::get('karyawan/pengelolaan-kegiatan/dokumentasi/{id_dokumentasi}/delete','karyawan\pengelolaankegiatan\DokumentasiController@delete');
        Route::get('karyawan/monitoring-skripsi/status/{id_kbk}/delete','karyawan\monitoringskripsi\StatusController@delete');


        Route::get('verifikasi/{id}/penelitian','Karyawan\VerifikasiController@editPenelitian');


        Route::post('verifikasi/{id}/penelitian','Karyawan\VerifikasiController@editPenelitianAction');

        Route::get('verifikasi/{id}/prestasi','Karyawan\VerifikasiController@editPrestasi');
        Route::post('verifikasi/{id}/prestasi','Karyawan\VerifikasiController@editPrestasiAction');


        Route::get('verifikasi/download/{id}','Karyawan\VerifikasiController@download');

        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('karyawan/pengelolaan-kegiatan/dokumentasi/{id_dokumentasi}/edit','karyawan\pengelolaankegiatan\DokumentasiController@edit');

        // Mengupdate biodata dengan isi dari form
        Route::post('karyawan/pengelolaan-kegiatan/dokumentasi/{id_dokumentasi}/edit','karyawan\pengelolaankegiatan\DokumentasiController@editAction');
        // Menampilkan tabel
        Route::get('karyawan/pengelolaan-kegiatan/dokumentasi','Karyawan\pengelolaankegiatan\DokumentasiController@index');


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

});



