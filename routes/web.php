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


    });

/*
=========================================
Route nya Kurikulum
=========================================
*/
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
    //KARYAWAN  
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
});
