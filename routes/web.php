<?php

Route::get('/',['as'=>'admin.index', 'uses'=>'HomeController@index']);
Route::group(['middleware' => ['auth']], function () {

Route::get('/logout', 'Auth\LoginController@logout');

/*
=========================================
Route nya Dosen
=========================================
*/
    Route::get('/dosen/laporan/cetak','Dosen\LaporanController@cetak');
    Route::get('/dosen/laporan/pilih','Dosen\LaporanController@pilih');
    Route::post('/dosen/laporan/pilih','Dosen\LaporanController@pilihAction');
    Route::get('/dosen/laporan','Dosen\LaporanController@index');
    Route::get('/logout','Auth\LoginController@logout');
    

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

        Route::get('surat-tugas','Dosen\SuratTugasController@index');

        // Menampilkan form tambah biodata
        Route::get('surat-tugas/create','Dosen\SuratTugasController@create');

        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('surat-tugas/create','Dosen\SuratTugasController@createAction');

        // Menghapus biodata sesuai id yang dipilih
        Route::get('surat-tugas/{id}/delete','Dosen\SuratTugasController@delete');

        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('surat-tugas/{id}/edit','Dosen\SuratTugasController@edit');

        // Mengupdate biodata dengan isi dari form
        Route::post('surat-tugas/{id}/edit','Dosen\SuratTugasController@editAction');

    

    
       Route::get('biodata-dosen/','Dosen\BiodataDosenController@index');

        // Menampilkan form tambah biodata
        Route::get('biodata-dosen/create','Dosen\BiodataDosenController@create');

        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('biodata-dosen/create','Dosen\BiodataDosenController@createAction');

        // Menghapus biodata sesuai id yang dipilih
        Route::get('biodata-dosen/{id}/delete','Dosen\BiodataDosenController@delete');

        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('biodata-dosen/{id}/edit','Dosen\BiodataDosenController@edit');

        // Mengupdate biodata dengan isi dari form
        Route::post('biodata-dosen/{id}/edit','Dosen\BiodataDosenController@editAction');   
    

        Route::get('validasi/jurnal','Dosen\ValidasiController@index_jurnal');
        Route::get('validasi/penelitian','Dosen\ValidasiController@index_penelitian');
        Route::get('validasi/konferensi','Dosen\ValidasiController@index_konferensi');
        Route::get('validasi/pengmas','Dosen\ValidasiController@index_pengmas');

        Route::get('validasi/jurnal/{id}/terima','Dosen\ValidasiController@terima_jurnal');
        Route::get('validasi/penelitian/{id}/terima','Dosen\ValidasiController@terima_penelitian');
        Route::get('validasi/konferensi/{id}/terima','Dosen\ValidasiController@terima_konferensi');
        Route::get('validasi/pengmas/{id}/terima','Dosen\ValidasiController@terima_pengmas');

        Route::get('validasi/jurnal/{id}/tolak','Dosen\ValidasiController@tolak_jurnal');
        Route::get('validasi/penelitian/{id}/tolak','Dosen\ValidasiController@tolak_penelitian');
        Route::get('validasi/konferensi/{id}/tolak','Dosen\ValidasiController@tolak_konferensi');
        Route::get('validasi/pengmas/{id}/tolak','Dosen\ValidasiController@tolak_pengmas');

        Route::get('data-dosen/jurnal','Dosen\DataDosenController@index_jurnal');
        Route::get('data-dosen/penelitian','Dosen\DataDosenController@index_penelitian');
        Route::get('data-dosen/konferensi','Dosen\DataDosenController@index_konferensi');
        Route::get('data-dosen/pengmas','Dosen\DataDosenController@index_pengmas');
        Route::get('data-dosen/surat-tugas','Dosen\DataDosenController@index_sktugas');
});
        /*
==========================================
Route buat mahasiswa ditaruh dibawah sini
=========================================

*/

   Route::group(['prefix' => 'mahasiswa'], function() {

    // MODUL MHS-Biodata
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
        
    //MODUL MHS-Penelitian    
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

    // MODUL MHS-Prestasi
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

    // MODUL MHS-Ganti password
        Route::get('ganti-password','Mahasiswa\GantiPasswordController@index');

        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('ganti-password','Mahasiswa\GantiPasswordController@createAction');

        //Kalender
        Route::get('Kalender_Ruang','Mahasiswa\PLA\KalenderRuangController@index');
        Route::post('Kalender_Ruang/search','Mahasiswa\PLA\KalenderRuangController@index2');

        //Memohon Ruangan
        Route::get('memohon-ruangan','Mahasiswa\PLA\MohonRuanganController@create');
        Route::post('memohon-ruangan/create','Mahasiswa\PLA\MohonRuanganController@createAction');
        
        //Surat Keluar Mhs
        Route::get('surat-keluar-mhs','mahasiswa\PLA\Surat_Keluar_MhsController@index');           
        Route::get('surat-keluar-mhs/create','Mahasiswa\PLA\Surat_Keluar_MhsController@create');
        Route::post('surat-keluar-mhs/create','mahasiswa\PLA\Surat_Keluar_MhsController@createAction');
        Route::get('surat-keluar-mhs/{id}/delete','mahasiswa\PLA\Surat_Keluar_MhsController@delete');
        Route::get('surat-keluar-mhs/{id}/edit','mahasiswa\PLA\Surat_Keluar_MhsController@edit');
        Route::post('surat-keluar-mhs/{id}/edit','mahasiswa\PLA\Surat_Keluar_MhsController@editAction');

        //Surat Masuk Mhs
        Route::get('surat-masuk','mahasiswa\PLA\Surat_MasukController@index');

        //Download Dokumen
        Route::get('Download_Dokumen','Mahasiswa\PLA\DownloadDokumenController@index');
        Route::get('{id}/Download_Dokumen','Mahasiswa\PLA\DownloadDokumenController@download_doc');
});

/*
=========================================
Route nya PLA
=========================================
*/

/*
=========================================
Route buat dosen ditaruh dibawah sini
=========================================
*/
        
Route::group(['prefix' => 'dosen'], function() {

    //kalender
    Route::get('Kalender_Ruang','Dosen\PLA\KalenderRuangController@index');
    Route::post('Kalender_Ruang/search','Dosen\PLA\KalenderRuangController@index2');

    //Memohon Ruangan
    Route::get('memohon-ruangan','dosen\PLA\MohonRuanganController@create');
    Route::post('memohon-ruangan/create','dosen\PLA\MohonRuanganController@createAction');
    
    //Surat Keluar Dosen
        Route::get('surat-keluar-dosen','dosen\PLA\Surat_Keluar_DosenController@index');           
        Route::get('surat-keluar-dosen/create','dosen\PLA\Surat_Keluar_DosenController@create');
        Route::post('surat-keluar-dosen/create','dosen\PLA\Surat_Keluar_DosenController@createAction');
        Route::get('surat-keluar-dosen/{id}/delete','dosen\PLA\Surat_Keluar_DosenController@delete');
        Route::get('surat-keluar-dosen/{id}/edit','dosen\PLA\Surat_Keluar_DosenController@edit');
        Route::post('surat-keluar-dosen/{id}/edit','dosen\PLA\Surat_Keluar_DosenController@editAction');

    //Surat Masuk Dosen
    Route::get('surat-masuk','dosen\PLA\Surat_MasukController@index');

    //Download Dokumen
    Route::get('Download_Dokumen','Dosen\PLA\DownloadDokumenController@index');
    Route::get('{id}/Download_Dokumen','Dosen\PLA\DownloadDokumenController@download_doc');
    });

/*
==========================================
Route buat karyawan ditaruh dibawah sini
==========================================
*/
    
Route::group(['prefix' => 'karyawan'], function() {
            //Permohonan Ruang
        Route::group(['prefix' => 'PermohonanRuang'], function() {
            Route::get('History','Karyawan\PLA\PermohonanRuangController@index');
            Route::get('Konfirmasi','Karyawan\PLA\PermohonanRuangController@index2');
            Route::get('Konfirmasi/{id}/accept','Karyawan\PLA\PermohonanRuangController@accept'); 
            Route::get('Konfirmasi/{id}/decline','Karyawan\PLA\PermohonanRuangController@decline'); 
        });
        //Petugas TU
        Route::get('pla/karyawan','Karyawan\PLA\karyawan_Controller@index');
        Route::get('pla/karyawan/create','Karyawan\PLA\karyawan_Controller@create');
        Route::post('pla/karyawan/create','Karyawan\PLA\karyawan_Controller@createAction');
        Route::get('pla/karyawan/{nip_petugas}/delete','Karyawan\PLA\karyawan_Controller@delete');
        Route::get('pla/karyawan/{nip_petugas}/edit','Karyawan\PLA\karyawan_Controller@edit');
        Route::post('pla/karyawan/{nip_petugas}/edit','Karyawan\PLA\karyawan_Controller@editAction');

        //Surat Keluar Dosen
        Route::get('surat-keluar-dosen','karyawan\PLA\Surat_Keluar_DosenController@index');           
        Route::get('surat-keluar-dosen/create','karyawan\PLA\Surat_Keluar_DosenController@create');
        Route::post('surat-keluar-dosen/create','karyawan\PLA\Surat_Keluar_DosenController@createAction');
        Route::get('surat-keluar-dosen/{id}/delete','karyawan\PLA\Surat_Keluar_DosenController@delete');
        Route::get('surat-keluar-dosen/{id}/edit','karyawan\PLA\Surat_Keluar_DosenController@edit');
        Route::post('surat-keluar-dosen/{id}/edit','karyawan\PLA\Surat_Keluar_DosenController@editAction');
        Route::get('surat-keluar-dosen/{id}/agree','Karyawan\PLA\Surat_Keluar_DosenController@agree');
        Route::get('surat-keluar-dosen/{id}/disagree','Karyawan\PLA\Surat_Keluar_DosenController@disagree');

        //Surat Keluar Mhs
        Route::get('surat-keluar-mhs','karyawan\PLA\Surat_Keluar_MhsController@index');           
        Route::get('surat-keluar-mhs/create','karyawan\PLA\Surat_Keluar_MhsController@create');
        Route::post('surat-keluar-mhs/create','karyawan\PLA\Surat_Keluar_MhsController@createAction');
        Route::get('surat-keluar-mhs/{id}/delete','karyawan\PLA\Surat_Keluar_MhsController@delete');
        Route::get('surat-keluar-mhs/{id}/edit','karyawan\PLA\Surat_Keluar_MhsController@edit');
        Route::post('surat-keluar-mhs/{id}/edit','karyawan\PLA\Surat_Keluar_MhsController@editAction');
        Route::get('surat-keluar-mhs/{id}/agree','Karyawan\PLA\Surat_Keluar_MhsController@agree');
        Route::get('surat-keluar-mhs/{id}/disagree','Karyawan\PLA\Surat_Keluar_MhsController@disagree');

        //Surat Masuk
        Route::get('surat-masuk','karyawan\PLA\Surat_MasukController@index');           
        Route::get('surat-masuk/create','karyawan\PLA\Surat_MasukController@create');
        Route::post('surat-masuk/create','karyawan\PLA\Surat_MasukController@createAction');
        Route::get('surat-masuk/{id}/delete','karyawan\PLA\Surat_MasukController@delete');
        Route::get('surat-masuk/{id}/edit','karyawan\PLA\Surat_MasukController@edit');
        Route::post('surat-masuk/{id}/edit','karyawan\PLA\Surat_MasukController@editAction');
        Route::get('surat-masuk/{id}/terambil','karyawan\PLA\Surat_MasukController@terambil');

        //Pengumpulan harcopy proposal dan skripsi
        Route::get('Pengumpulan-Hardcopy','Karyawan\PLA\PengumpulanHardcopyController@index');
        Route::get('Pengumpulan-Hardcopy/{id}/Proposal','Karyawan\PLA\PengumpulanHardcopyController@Kumpul_Proposal');
        Route::get('Pengumpulan-Hardcopy/{id}/Skripsi','Karyawan\PLA\PengumpulanHardcopyController@Kumpul_Skripsi');
        Route::post('Pengumpulan-Hardcopy/search','Karyawan\PLA\PengumpulanHardcopyController@index2');

        //Upload Dokumen
        Route::get('upload-dokumen','Karyawan\PLA\UploadDokumenController@index');
        Route::post('upload-dokumen/upload','Karyawan\PLA\UploadDokumenController@upload_doc');
        Route::get('upload-dokumen/{id}/delete','Karyawan\PLA\UploadDokumenController@delete');
        
    // MODUL MHS-AKUN MHS
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

    // MODUL MHS-VERIFIKASI MHS
        Route::get('verifikasi','Karyawan\VerifikasiController@index');
        Route::get('verifikasi/penelitian','Karyawan\VerifikasiController@createPenelitian');

        Route::get('verifikasi/prestasi','Karyawan\VerifikasiController@createPrestasi');
        Route::get('verifikasi/{id}/penelitian','Karyawan\VerifikasiController@editPenelitian');


        Route::post('verifikasi/{id}/penelitian','Karyawan\VerifikasiController@editPenelitianAction');

        Route::get('verifikasi/{id}/prestasi','Karyawan\VerifikasiController@editPrestasi');
        Route::post('verifikasi/{id}/prestasi','Karyawan\VerifikasiController@editPrestasiAction');


        Route::get('verifikasi/downloadpresmhs/{id}','Karyawan\VerifikasiController@downloadPrestasi');
        Route::get('verifikasi/downloadpenmhs/{id}','Karyawan\VerifikasiController@downloadPenelitian');

    //KARYAWAN  
   });
// Modul Inventaris  
Route::group(['prefix' => 'inventaris'], function() {  
//FITUR PEMINJAMAN  
    Route::get('input-peminjaman/{id}', 'Karyawan\PeminjamanController@inputPeminjaman');  
    Route::post('post-input-peminjaman', 'Karyawan\PeminjamanController@postInputPeminjaman');  
    Route::post('/{id}/post-edit-peminjaman', 'Karyawan\PeminjamanController@postEditPeminjaman');  
    Route::get('index-peminjaman', 'Karyawan\PeminjamanController@index'); 
    Route::get('checkin/{id}', 'Karyawan\PeminjamanController@checkin');  
    Route::get('/{id}/view-peminjaman', 'Karyawan\PeminjamanController@viewDetail');  
    Route::get('/{id}/edit-peminjaman', 'Karyawan\PeminjamanController@edit');  
    Route::get('/{id}/delete', 'Karyawan\PeminjamanController@delete');  

//FITUR ASSET  
    Route::get('asset','Karyawan\inventaris\AssetController@index');          
    Route::get('asset/create','Karyawan\inventaris\AssetController@create');  
    Route::post('asset/create','Karyawan\inventaris\AssetController@createAction');  
    Route::get('asset/{id}/delete','Karyawan\inventaris\AssetController@delete');  
    Route::get('asset/{id}/edit','Karyawan\inventaris\AssetController@edit');  
    Route::post('asset/{id}/edit','Karyawan\inventaris\AssetController@editAction');  
    Route::get('asset/{id}/viewDetail', 'Karyawan\inventaris\AssetController@viewDetail');  
    Route::get('asset/location-report', 'Karyawan\inventaris\AssetController@locationReport');    
    Route::post('asset/print-location-report', 'Karyawan\inventaris\AssetController@printLocationReport');    
    Route::get('asset/barcode/{id}', 'Karyawan\inventaris\AssetController@printBarcode'); 
 //FITUR MAINTENANCE  
    Route::get('index-maintenance','Karyawan\Inventaris\MaintenanceController@index');  
    Route::get('maintenance/input-maintenance/{id}','Karyawan\Inventaris\MaintenanceController@create');  
    Route::post('maintenance/input-maintenance','Karyawan\Inventaris\MaintenanceController@createAction');  
    Route::get('maintenance/{id}/delete','Karyawan\Inventaris\MaintenanceController@delete');  
    Route::get('maintenance/{id}/edit-maintenance','Karyawan\Inventaris\MaintenanceController@edit');  
    Route::post('maintenance/{id}/edit-maintenance','Karyawan\Inventaris\MaintenanceController@editAction');  
    Route::get('maintenance/{id}/viewDetail', 'Karyawan\inventaris\MaintenanceController@viewDetail');    
});  

//DOSEN  
Route::group(['prefix' => 'inventaris'], function() {  
//FITUR ASSET  
    Route::get('/dosen/asset','Dosen\inventaris\AssetController@index'); 
    Route::get('/dosen/asset/{id}/viewDetail', 'Dosen\inventaris\AssetController@viewDetail');          
});  

//MAHASISWA  
Route::group(['prefix' => 'inventaris'], function() {  
//FITUR ASSET  
    Route::get('/mahasiswa/asset','Mahasiswa\inventaris\AssetController@index');          
});

// Notulensi
//route dosen
//ryan
Route::get('undangandosen','Dosen\notulensi\UndanganDosenController@index');
Route::get('undangandosen/{id_notulen}/konfirmasi','Dosen\notulensi\UndanganDosenController@konfirmasi');
//dita
Route::group(['prefix' => 'notulensi'], function() {
//Lihat daftar hasil rapat
Route::get('konfirmasi','Dosen\notulensi\NotulensiController@index');
// Menampilkan form lihat notulensi rapat dari id yg dipilih
Route::get('konfirmasi/{id_notulen}/lihat','Dosen\notulensi\NotulensiController@lihat');
Route::get('konfirmasi/{id_notulen}/konfirmasi','Dosen\notulensi\NotulensiController@konfirmasi');
Route::post('konfirmasi/{id_notulen}/konfirmasihasil','Dosen\notulensi\NotulensiController@konfirmasihasil');
Route::get('kirim/{id_notulen}/kirim','Dosen\notulensi\NotulensiController@kirimHasil');

Route::get('listhasil','Dosen\notulensi\NotulensiController@index2');
Route::get('listhasil/{id_notulen}/lihat2','Dosen\notulensi\NotulensiController@lihat2');
});
Route::group(['prefix' => 'dosen'], function() {
Route::group(['prefix' => 'notulensidosen'], function() {
        // Menampilkan tabel notulensi
        Route::get('kalenderRapat','Dosen\notulensi\DosenKalenderController@index');
                // Menampilkan form tambah biodata




});
});


//Route buat karyawan ditaruh dibawah sini
//Lihat daftar peserta rapat
Route::group(['prefix' => 'notulensi'], function() {
//web kehadiran rapat
Route::get('dosenrapat','Karyawan\notulensi\daftarDosenRapatController@index');
Route::get('cetakPDF/{id}','Karyawan\notulensi\daftarDosenRapatController@toPDF');

});
//ryan awal
Route::get('undangankaryawan','Karyawan\notulensi\UndanganKaryawanController@indexUndangan');
Route::get('formundangan/{id_notulen}/undang','Karyawan\notulensi\UndanganKaryawanController@undang');
Route::post('formundangan/{id_notulen}/undang','Karyawan\notulensi\UndanganKaryawanController@kirimUndangan');
Route::get('formundangan/{id_notulen}/delete','Karyawan\notulensi\UndanganKaryawanController@delete');
Route::get('tambahrapat','Karyawan\notulensi\UndanganKaryawanController@create');
Route::post('tambahrapat','Karyawan\notulensi\UndanganKaryawanController@createAction');
//ryan akhir

//web untuk notulensi karyawan
Route::group(['prefix' => '/notulensi'], function() {
        // Menampilkan tabel notulensi

        Route::get('','Karyawan\notulensi\NotulensiKaryawanController@index');

         Route::get('/{id_notulen}/create','Karyawan\notulensi\NotulensiKaryawanController@create');

        Route::post('/{id_notulen}/create','Karyawan\notulensi\NotulensiKaryawanController@createAction');
});
//dimas
Route::group(['prefix' => 'karyawan'], function() {
Route::group(['prefix' => 'notulensi'], function() {
        // Menampilkan tabel notulensi
        Route::get('kalenderRapat','Dosen\notulensi\DosenKalenderController@index');
                // Menampilkan form tambah biodata
        Route::get('kalenderRapat/create','Dosen\notulensi\DosenKalenderController@create');
                // Menambahkan form yg di isi tadi ke tabel notulensi
        Route::post('kalenderRapat/create','Dosen\notulensi\DosenKalenderController@createAction');
   
        Route::get('kalenderRapat/{id_notulen}/delete','Dosen\notulensi\DosenKalenderController@delete');

         Route::get('kalenderRapat/{id_notulen}/edit','Dosen\notulensi\DosenKalenderController@edit');

        Route::post('kalenderRapat/{id_notulen}/edit','Dosen\notulensi\DosenKalenderController@editAction');

});
});
//dimas
Route::get('/ajax',['as'=>'ajax', 'uses'=>'Karyawan\monitoringskripsi\SkripsiController@ajax']);


        /*MODUL MONITORING SKRIPSI USER MHS TARUH SINI YAAA*/
    Route::group(['prefix' => 'mahasiswa'], function() {
        Route::group(['prefix' => 'monitoring-skripsi'], function() {

            Route::get('konsultasi','mahasiswa\monitoringskripsi\KonsultasiController@index');

            Route::get('konsultasi/{id}/edit','mahasiswa\monitoringskripsi\KonsultasiController@edit');

            Route::post('konsultasi/{id}/edit','mahasiswa\monitoringskripsi\KonsultasiController@editAction'); 

            Route::get('konsultasi/create','mahasiswa\monitoringskripsi\KonsultasiController@create');

            Route::post('konsultasi/create','mahasiswa\monitoringskripsi\KonsultasiController@createAction');

            Route::get('konsultasi/{id}/delete','mahasiswa\monitoringskripsi\KonsultasiController@delete');

            Route::get('skripsi','Mahasiswa\monitoringskripsi\SkripsiController@index');

            Route::get('upload_berkas','Mahasiswa\monitoringskripsi\UploadBerkasController@index');

            Route::post('upload-proposal','Mahasiswa\monitoringskripsi\UploadBerkasController@uploadProposal');

            Route::post('upload-skripsi','Mahasiswa\monitoringskripsi\UploadBerkasController@uploadSkripsi');

            Route::get('form_usulan','Mahasiswa\monitoringskripsi\FormUsulanController@index');

            Route::post('form_usulan/download_form','Mahasiswa\monitoringskripsi\FormUsulanController@downloadForm');

            Route::post('form_usulan/upload_form','Mahasiswa\monitoringskripsi\FormUsulanController@uploadForm');

            Route::get('view-jadwal-sidang-proposal-mahasiswa','mahasiswa\monitoringskripsi\JadwalSidangController@view_jadwal_sidang_proposal_mahasiswa'); 
           
            Route::get('view-jadwal-sidang-skripsi-mahasiswa','mahasiswa\monitoringskripsi\JadwalSidangController@view_jadwal_sidang_skripsi_mahasiswa'); 


            Route::get('view-hasil-sidang-proposal-mahasiswa','Mahasiswa\monitoringskripsi\HasilSidangController@view_hasil_sidang_proposal_mahasiswa');

            Route::get('view-hasil-sidang-skripsi-mahasiswa','Mahasiswa\monitoringskripsi\HasilSidangController@view_hasil_sidang_skripsi_mahasiswa');

        });
    });
    /*AKHIR MODUL MONITORING SKRIPSI USER MHS*/


    /*MODUL MONITORING SKRIPSI USER DOSEN TARUH SINI YAAA*/
    Route::group(['prefix' => 'dosen'], function() {
        Route::group(['prefix' => 'monitoring-skripsi'], function() {
            Route::get('skripsi','Dosen\monitoringskripsi\SkripsiController@index');

            Route::get('skripsi/mhs','dosen\monitoringskripsi\SkripsiController@show');

            Route::get('konsultasi/','dosen\monitoringskripsi\KonsultasiController@index');

            Route::get('konsultasi/{id}/edit','dosen\monitoringskripsi\KonsultasiController@edit');

            Route::post('konsultasi/{id}/edit','dosen\monitoringskripsi\KonsultasiController@editAction'); 

            Route::get('konsultasi/mhs','dosen\monitoringskripsi\KonsultasiController@show');

            Route::get('berkas/','dosen\monitoringskripsi\DownloadController@index');

            Route::get('berkas/mhs','dosen\monitoringskripsi\DownloadController@show');

            Route::get('berkas/{nim}/download','dosen\monitoringskripsi\DownloadController@downloadProposal');

            Route::get('berkas/{nim}/download-skripsi','dosen\monitoringskripsi\DownloadController@downloadSkripsi');

            Route::get('view-jadwal-sidang-proposal-dosen','dosen\monitoringskripsi\JadwalSidangController@view_jadwal_sidang_proposal_dosen'); 
           
            Route::get('view-jadwal-sidang-skripsi-dosen','dosen\monitoringskripsi\JadwalSidangController@view_jadwal_sidang_skripsi_dosen');

            Route::get('view-hasil-sidang-proposal-dosen','Dosen\monitoringskripsi\HasilSidangController@view_hasil_sidang_proposal_dosen');

            Route::get('view-hasil-sidang-skripsi-dosen','Dosen\monitoringskripsi\HasilSidangController@view_hasil_sidang_skripsi_dosen');
        });
    });
    /*AKHIR MODUL MONITORING SKRIPSI USER DOSEN*/


    /*MODUL MONITORING SKRIPSI USER KARYAWAN TARUH SINI YAAA*/
    Route::group(['prefix' => 'karyawan'], function() {
        Route::group(['prefix' => 'monitoring-skripsi'], function() {

            Route::get('KBK','Karyawan\monitoringskripsi\KBKController@index');

            Route::get('KBK/create','Karyawan\monitoringskripsi\KBKController@create');

            Route::post('KBK/create','Karyawan\monitoringskripsi\KBKController@createAction');

            Route::get('KBK/{id_kbk}/delete','Karyawan\monitoringskripsi\KBKController@delete');

            Route::get('KBK/{id_kbk}/edit','Karyawan\monitoringskripsi\KBKController@edit');

            Route::post('KBK/{id_kbk}/edit','Karyawan\monitoringskripsi\KBKController@editAction');

            Route::get('skripsi','Karyawan\monitoringskripsi\SkripsiController@index');
             
            Route::get('skripsi/create','Karyawan\monitoringskripsi\SkripsiController@create');

            Route::post('skripsi/create','Karyawan\monitoringskripsi\SkripsiController@createAction');

            Route::get('skripsi/{id_skripsi}/delete','Karyawan\monitoringskripsi\SkripsiController@delete');

            Route::get('skripsi/{id_skripsi}/edit','Karyawan\monitoringskripsi\SkripsiController@edit');

            Route::post('skripsi/{id_skripsi}/edit','Karyawan\monitoringskripsi\SkripsiController@editAction');

            Route::get('manage-jadwal-sidang-proposal','Karyawan\monitoringskripsi\JadwalSidangController@view_manage_jadwal_sidang_proposal');

            Route::post('create-jadwal-sidang-proposal','Karyawan\SkripsiController@create_jadwal_sidang_proposal');

            Route::get('manage-hasil-sidang-proposal','Karyawan\monitoringskripsi\HasilSidangController@view_manage_hasil_sidang_proposal');

            Route::get('view-tambah-hasil-sidang-proposal','Karyawan\SkripsiController@view_tambah_hasil_sidang_proposal');

            Route::get('status','Karyawan\monitoringskripsi\StatusController@index');

            Route::get('status/create','Karyawan\monitoringskripsi\StatusController@create');

            Route::post('status/create','Karyawan\monitoringskripsi\StatusController@createAction');

            Route::get('status/{id_skripsi}/edit','Karyawan\monitoringskripsi\StatusController@edit');

            Route::post('status/{id_skripsi}/edit','Karyawan\monitoringskripsi\StatusController@editAction');

            Route::get('status/{id_kbk}/delete','karyawan\monitoringskripsi\StatusController@delete');

            Route::post('destroy-jadwal-sidang-proposal','Karyawan\SkripsiController@destroy_jadwal_sidang_proposal');

            Route::post('edit-jadwal-sidang-proposal','Karyawan\SkripsiController@edit_jadwal_sidang_proposal');

            Route::post('get-mahasiswa-data','Karyawan\SkripsiController@get_mahasiswa_data');

            Route::get('konsultasi','karyawan\monitoringskripsi\KonsultasiController@index');

            Route::get('konsultasi/{id}/edit','karyawan\monitoringskripsi\KonsultasiController@edit');

            Route::post('konsultasi/{id}/edit','karyawan\monitoringskripsi\KonsultasiController@editAction');

            Route::get('berkas/','Karyawan\monitoringskripsi\DownloadController@index');

            Route::get('berkas/mhs','Karyawan\monitoringskripsi\DownloadController@show');

            Route::get('form_usulan','karyawan\monitoringskripsi\FormUsulanController@index');

            Route::get('form_usulan/{nim}/download','karyawan\monitoringskripsi\FormUsulanController@downloadForm');

            Route::post('destroy-jadwal-sidang-proposal','Karyawan\monitoringskripsi\JadwalSidangController@destroy_jadwal_sidang_proposal');

            Route::post('edit-jadwal-sidang-proposal','Karyawan\monitoringskripsi\JadwalSidangController@edit_jadwal_sidang_proposal');

            Route::post('update-jadwal-sidang-skripsi','Karyawan\monitoringskripsi\JadwalSidangController@update_jadwal_sidang_skripsi');

            Route::post('update-jadwal-sidang-proposal','Karyawan\monitoringskripsi\JadwalSidangController@update_jadwal_sidang_proposal');

            Route::post('get-mahasiswa-data','Karyawan\SkripsiController@get_mahasiswa_data');
            
            Route::post('upload-nilai-sidang-skripsi','Karyawan\monitoringskripsi\HasilSidangController@upload_nilai_sidang_skripsi');

            Route::post('upload-nilai-sidang-proposal','Karyawan\monitoringskripsi\HasilSidangController@upload_nilai_sidang_proposal');

            Route::get('manage-jadwal-sidang-skripsi','Karyawan\monitoringskripsi\JadwalSidangController@view_manage_jadwal_sidang_skripsi');

            Route::post('create-jadwal-sidang-skripsi','Karyawan\SkripsiController@create_jadwal_sidang_skripsi');

            Route::get('manage-hasil-sidang-skripsi','Karyawan\monitoringskripsi\HasilSidangController@view_manage_hasil_sidang_skripsi');

            Route::get('view-tambah-hasil-sidang-skripsi','Karyawan\SkripsiController@view_tambah_hasil_sidang_skripsi');



        });
    });
    /*Akhiran dari modul monitoring skripsi*/
//MODUL KRS KHS
    Route::group(['prefix' => 'mahasiswa'], function(){
    //Fitur Kra Mahasiswa
    Route::group(['prefix' => 'krs-khs'], function(){
            //Untuk folder Krs
        Route::group(['prefix' => 'krs'], function(){

        // Menampilkan form tambah biodata
        Route::get('index','Mahasiswa\KrsKhs\KrsMhsController@create');

        // Menghapus biodata sesuai id yang dipilih
        Route::get('{id}/delete','Mahasiswa\KrsKhs\KrsMhsController@delete');

        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::get('create/{id}','Mahasiswa\KrsKhs\KrsMhsController@createAction');
        Route::get('cetak','Mahasiswa\KrsKhs\KrsMhsController@toPdf');
        });

        Route::group(['prefix' => 'histori'], function(){ // Histori Nilai
            Route::get('view','Mahasiswa\KrsKhs\HistoriController@index');
            Route::get('cetak','Mahasiswa\KrsKhs\HistoriController@toPdf');
            });   
        Route::group(['prefix' => 'khs'], function(){// KHS
            Route::get('view','Mahasiswa\KrsKhs\KHSController@index');
            Route::get('show','Mahasiswa\KrsKhs\KHSController@show');
            Route::get('{id_tahun}/cetak','Mahasiswa\KrsKhs\KHSController@toPdf');
            Route::get('{mk_ditawarkan_id}/{mhs_id}/detail','Mahasiswa\KrsKhs\KHSController@detail');
            });
    });
});

Route::group(['prefix' => 'karyawan'], function(){
    Route::group(['prefix' => 'krs-khs'], function(){
        Route::group(['prefix' => 'ruang'], function(){
            Route::get('create','Karyawan\KrsKhs\RuangController@index');
            Route::post('create','Karyawan\KrsKhs\RuangController@createAction');
            Route::get('{id_ruang}/edit','Karyawan\KrsKhs\RuangController@edit');
            Route::post('{id_ruang}/edit','Karyawan\KrsKhs\RuangController@editAction');
        });
        Route::group(['prefix' => 'mk-ditawarkan'], function(){
            Route::get('view', 'Karyawan\KrsKhs\MKDitawarkanController@index');
            Route::get('show', 'Karyawan\KrsKhs\MKDitawarkanController@show');
            Route::get('create', 'Karyawan\KrsKhs\MKDitawarkanController@create');
            Route::post('create', 'Karyawan\KrsKhs\MKDitawarkanController@createAction');
            Route::get('{id_mk_ditawarkan}/delete', 'Karyawan\KrsKhs\MKDitawarkanController@delete');
            Route::get('{thn_akademik_id}/edit', 'Karyawan\KrsKhs\MKDitawarkanController@edit');
            Route::post('{thn_akademik_id}/edit', 'Karyawan\KrsKhs\MKDitawarkanController@editAction');
        });
        Route::group(['prefix' => 'jadwal-kuliah'], function(){
            Route::get('index', 'Karyawan\KrsKhs\JadwalKuliahController@index');
            Route::get('create', 'Karyawan\KrsKhs\JadwalKuliahController@create');
            Route::post('create', 'Karyawan\KrsKhs\JadwalKuliahController@createAction');
            Route::get('{mk_ditawarkan_id}/{hari_id}/{ruang_id}/{jam_id}/delete', 'Karyawan\KrsKhs\JadwalKuliahController@delete');
            Route::get('{mk_ditawarkan_id}/{hari_id}/{ruang_id}/{jam_id}/edit', 'Karyawan\KrsKhs\JadwalKuliahController@edit');
            Route::post('{mk_ditawarkan_id}/{hari_id}/{ruang_id}/{jam_id}/edit', 'Karyawan\KrsKhs\JadwalKuliahController@editAction');
        });
        Route::group(['prefix' => 'input-dosen-mk'], function(){
            Route::get('view','Karyawan\KrsKhs\InputDosenMKController@index');
            Route::get('show','Karyawan\KrsKhs\InputDosenMKController@show');
            Route::get('create','Karyawan\KrsKhs\InputDosenMKController@create');
            Route::post('create','Karyawan\KrsKhs\InputDosenMKController@createAction');
            Route::get('{mk_ditawarkan_id}/edit', 'Karyawan\KrsKhs\InputDosenMKController@edit');
            Route::post('{mk_ditawarkan_id}/{dosenPJMK}/{dosenPendamping}/{status}/{status2}/edit', 'Karyawan\KrsKhs\InputDosenMKController@editAction');
        });

    });
});
Route::group(['prefix' => 'dosen'], function(){
    Route::group(['prefix' => 'krs-khs'], function(){
        Route::group(['prefix' => 'nilai'], function(){ 
            Route::get('{id_mk_ditawarkan}/upload', 'Dosen\KrsKhs\NilaiController@index');
            Route::post('{id_mk_ditawarkan}/upload', 'Dosen\KrsKhs\NilaiController@upload');
        });

            Route::get('mk_diajar','Dosen\KrsKhs\MKDiajarController@index');
            Route::get('mk_diajar/{id_mk_ditawarkan}/detail','Dosen\KrsKhs\MKDiajarController@detail');
        
            Route::get ('{mk_ditawarkan_id}/bobot_nilai','Dosen\KrsKhs\BobotNilaiController@index');
            Route::get ('bobot_nilai/{mk_ditawarkan_id}/create','Dosen\KrsKhs\BobotNilaiController@create');
            Route::post('bobot_nilai/{mk_ditawarkan_id}/create','Dosen\KrsKhs\BobotNilaiController@createAction');
            Route::get ('bobot_nilai/{mk_ditawarkan_id}/edit','Dosen\KrsKhs\BobotNilaiController@edit');
            Route::post('bobot_nilai/{mk_ditawarkan_id}/edit','Dosen\KrsKhs\BobotNilaiController@editAction');

        Route::group(['prefix' => 'approve'], function(){
            Route::get('view', 'Dosen\KrsKhs\MahasiswaController@index');
            Route::get('{mhs_id}/create', 'Dosen\KrsKhs\MahasiswaController@create');
            Route::post('{mhs_id}/{id_mk}/approve', 'Dosen\KrsKhs\MahasiswaController@approveAction');
            Route::post('{mhs_id}/{id_mk}/unapprove', 'Dosen\KrsKhs\MahasiswaController@unapproveAction');

        });
    });
});

Route::group(['prefix' => 'dosen'], function() {
        /*
            Awal Routing Modul Kurikulum Buat Dosen
        */

        Route::group(['prefix' => 'kurikulum'], function() {
            //fitur capaian program (modul kurikulum)
            Route::group(['prefix' => 'cp_program'], function() {
                Route::get('/','Dosen\Kurikulum\CapaianProgramController@index');
                Route::get('create','Dosen\Kurikulum\CapaianProgramController@create');
                Route::post('create','Dosen\Kurikulum\CapaianProgramController@createAction');
                Route::get('{id}/edit','Dosen\Kurikulum\CapaianProgramController@edit');
                Route::get('{id}/delete','Dosen\Kurikulum\CapaianProgramController@delete');
                Route::post('{id}/edit','Dosen\Kurikulum\CapaianProgramController@editAction');
            });
            //fitur silabus (modul kurikulum)
            Route::group(['prefix' => 'silabus'], function(){
                Route::get('/','Dosen\Kurikulum\SilabusController@index');
                Route::get('create','Dosen\Kurikulum\SilabusController@create');            
                Route::post('create','Dosen\Kurikulum\SilabusController@createAction');
                Route::post('/autofill', 'Dosen\Kurikulum\SilabusController@autofill');
                Route::get('/delete/{id}','Dosen\Kurikulum\SilabusController@delete');
                Route::get('/edit/{id}','Dosen\Kurikulum\SilabusController@edit');
                Route::post('/edit/{id}','Dosen\Kurikulum\SilabusController@editAction');
                Route::get('pdf/{id}','Dosen\Kurikulum\SilabusController@pdf');                           
            });
            //fitr capaian pembelejaran (modul kurikulum)
            Route::group(['prefix' => 'cp_pembelajaran'], function() {
                Route::get('/','Dosen\Kurikulum\CapaianPembelajaranController@index');
                Route::get('create','dosen\Kurikulum\CapaianPembelajaranController@create');
                Route::post('create','Dosen\Kurikulum\CapaianPembelajaranController@createAction');
                Route::get('cp_pembelajaran/{id_cpem}/delete','dosen\Kurikulum\CapaianPembelajaranController@delete');
                Route::get('cp_pembelajaran/{id_cpem}/edit','dosen\Kurikulum\CapaianPembelajaranController@edit');
                Route::post('cp_pembelajaran/{id_cpem}/edit','dosen\Kurikulum\CapaianPembelajaranController@editAction');
            });
            //fitur rps (modul kurikulum)
            Route::group(['prefix' => 'rps'], function() 
            {
                Route::get('/','Dosen\Kurikulum\RPSController@index');
                Route::get('set-ujian','Dosen\Kurikulum\RPSController@ujian');
                Route::post('set-ujian','Dosen\Kurikulum\RPSController@setUjian');
                Route::get('delete-ujian/{id}','Dosen\Kurikulum\RPSController@deleteUjian'); 
                Route::get('create','Dosen\Kurikulum\RPSController@create');
                Route::post('create','Dosen\Kurikulum\RPSController@createAction');
                Route::get('/delete/{id}','Dosen\Kurikulum\RPSController@delete');
                Route::get('/edit/{id}','Dosen\Kurikulum\RPSController@edit');
                Route::post('/edit/{id}','Dosen\Kurikulum\RPSController@editAction');
                Route::get('pdf/{id}','Dosen\Kurikulum\RPSController@pdf');           
                Route::get('cp-mk','Dosen\Kurikulum\RPSController@cp_mk');
                Route::post('cp-mk','Dosen\Kurikulum\RPSController@cpmkAction');
                Route::post('cp-mk-id', 'Dosen\Kurikulum\RPSController@cp_mkGetId');                
                Route::get('cpmk/{id}','Dosen\Kurikulum\RPSController@cpmk');
                Route::post('cpmk/{id}','Dosen\Kurikulum\RPSController@cpmkAction');
                Route::get('delete-cpmk/{id}','Dosen\Kurikulum\RPSController@cpmkDelete'); 
                Route::get('lanjutan-rps/{id}', 'Dosen\Kurikulum\RPSController@lanjutanRPS');
                Route::post('lanjutan-rps/{id}', 'Dosen\Kurikulum\RPSController@lanjutanRPSAction');
                Route::get('pilih-mk', 'Dosen\Kurikulum\RPSController@pilih_mk');
                Route::post('pilih-mk', 'Dosen\Kurikulum\RPSController@pilihMk');
                Route::get('/edit-lanjutan-rps/{id}','Dosen\Kurikulum\RPSController@editLanjutanRPS');
                Route::post('/edit-lanjutan-rps/{id}','Dosen\Kurikulum\RPSController@editLanjutanRPSAction');
            });
            //fitur e-learning (modul kurikulum)
            Route::group(['prefix' => 'elearning'], function() {
                Route::get('/','Dosen\Kurikulum\ElearningController@index');
                Route::get('create','Dosen\Kurikulum\ElearningController@create');
                Route::post('create','Dosen\Kurikulum\ElearningController@createAction');
            });         
            //fitur kode cp pembelajaran (modul kurikulum)
            Route::group(['prefix' => 'kodecppem'], function() {
                Route::get('/','Dosen\Kurikulum\KodeController@index');
                Route::post('create','Dosen\Kurikulum\KodeController@createAction');
                Route::get('/delete/{id}','Dosen\Kurikulum\KodeController@delete');
                Route::get('/edit/{id}','Dosen\Kurikulum\KodeController@edit');
                Route::post('/edit/{id}','Dosen\Kurikulum\KodeController@editAction');
            });
        });
    });

    Route::group(['prefix' => 'karyawan'], function() {
        /*
            Awal Routing Modul Kurikulum Buat Dosen
        */
        Route::group(['prefix' => 'kurikulum'], function() {
            //fitur mata kuliah (modul kurikulum)
            Route::group(['prefix' => 'mata-kuliah'], function() {
                Route::get('/','Karyawan\Kurikulum\MataKuliahController@index');
                Route::get('create','Karyawan\Kurikulum\MataKuliahController@create');
                Route::post('create','Karyawan\Kurikulum\MataKuliahController@createAction');
                Route::get('delete/{id}','Karyawan\Kurikulum\MataKuliahController@delete');
                Route::get('edit/{id}','Karyawan\Kurikulum\MataKuliahController@edit');
                Route::post('edit/{id}','Karyawan\Kurikulum\MataKuliahController@editAction');
                Route::get('print/{id}','Karyawan\Kurikulum\MataKuliahController@toPdf');           
            });
            //fitur silabus
            Route::group(['prefix' => 'silabus'], function() {
                Route::get('/','Karyawan\Kurikulum\SilabusController@index');
                Route::get('create','Karyawan\Kurikulum\SilabusController@create');            
                Route::post('create','Karyawan\Kurikulum\SilabusController@createAction');
                Route::get('edit/{id}','Karyawan\Kurikulum\SilabusController@edit');
                Route::post('edit/{id}','Karyawan\Kurikulum\SilabusController@editAction');
                Route::get('delete/{id}','Karyawan\Kurikulum\SilabusController@delete');
                Route::get('pdf/{id}','Karyawan\Kurikulum\SilabusController@pdf');                           
            });        
            //fitur rps (modul kurikulum)
            Route::group(['prefix' => 'rps'], function() {
                Route::get('/','Karyawan\Kurikulum\RPSController@index');
                Route::get('detail/{id}','Karyawan\Kurikulum\RPSController@detail');
                Route::get('pdf/{id}','Karyawan\Kurikulum\RPSController@pdf');                           
            });
        });
        /*
            Akhir Routing Moduk Kurikulum Buat Karyawan
        */
    });
    Route::group(['prefix' => 'mahasiswa'], function() {
        /*
            Awal Routing Modul Kurikulum Buat Mahasiswa
        */        
        Route::group(['prefix' => 'kurikulum'], function() {   
            //fitur silabus     
            Route::group(['prefix' => 'silabus'], function(){
                Route::get('/','Mahasiswa\Kurikulum\SilabusController@index');
                Route::get('create','Mahasiswa\Kurikulum\SilabusController@create');            
                Route::post('create','Mahasiswa\Kurikulum\SilabusController@createAction');
                Route::get('edit/{id}','Mahasiswa\Kurikulum\SilabusController@edit');
                Route::post('edit/{id}','Mahasiswa\Kurikulum\SilabusController@editAction');
                Route::get('delete/{id}','Mahasiswa\Kurikulum\SilabusController@delete');
            });
            //fitur rps
        });
        /*
            Akhir Routing Modul Kurikulum Buat Mahasiswa
        */                
    });

});