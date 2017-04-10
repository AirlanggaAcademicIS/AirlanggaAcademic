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


    // Route::get('/pengelolaan-kegiatan/viewlpj', function () {
    // return view('pengelolaan-kegiatan.viewlpj');
    // });

    //     Route::get('/pengelolaan-kegiatan/postpertama', function () {
    // return view('pengelolaan-kegiatan.postpertama');
    // });


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

        // Menampilkan tabel
        Route::get('detailanggota','Mahasiswa\DetailAnggotaController@index');

        // Menampilkan form tambah biodata
        Route::get('detailanggota/create','Mahasiswa\DetailAnggotaController@create');

        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('detailanggota/create','Mahasiswa\DetailAnggotaController@createAction');

        // Menghapus biodata sesuai id yang dipilih
        Route::get('detailanggota/{id}/delete','Mahasiswa\DetailAnggotaController@delete');

        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('detailanggota/{id}/edit','Mahasiswa\DetailAnggotaController@edit');

        // Mengupdate biodata dengan isi dari form
        Route::post('detailanggota/{id}/edit','Mahasiswa\DetailAnggotaController@editAction');

    //Detail Penelitian

         // Menampilkan tabel
        Route::get('detailpenelitian','Mahasiswa\DetailPenelitianController@index');

        // Menampilkan form tambah biodata
        Route::get('detailpenelitian/create','Mahasiswa\DetailPenelitianController@create');

        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('detailpenelitian/create','Mahasiswa\DetailPenelitianController@createAction');

        // Menghapus biodata sesuai id yang dipilih
        Route::get('detailpenelitian/{id}/delete','Mahasiswa\DetailPenelitianController@delete');

        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('detailpenelitian/{id}/edit','Mahasiswa\DetailPenelitianController@edit');

        // Mengupdate biodata dengan isi dari form
        Route::post('detailpenelitian/{id}/edit','Mahasiswa\DetailPenelitianController@editAction');

    //Fitur Biodata Mahasiswa
        // Menampilkan tabel
        Route::get('biodata-mahasiswa','Mahasiswa\BiodataMahasiswaController@index');

        // Menampilkan form tambah biodata
        Route::get('biodata-mahasiswa/create','Mahasiswa\BiodataMahasiswaController@create');

        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('biodata-mahasiswa/create','Mahasiswa\BiodataMahasiswaController@createAction');

        // Menghapus biodata sesuai id yang dipilih
        Route::get('biodata-mahasiswa/{id}/delete','Mahasiswa\BiodataMahasiswaController@delete');

        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('biodata-mahasiswa/{id}/edit','Mahasiswa\BiodataMahasiswaController@edit');

        // Mengupdate biodata dengan isi dari form
        Route::post('biodata-mahasiswa/{id}/edit','Mahasiswa\BiodataMahasiswaController@editAction');

        //Penelitian
        // Menampilkan tabel
        Route::get('penelitian','Mahasiswa\PenelitianController@index');

        // Menampilkan form tambah biodata
        Route::get('penelitian/create','Mahasiswa\PenelitianController@create');

        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('penelitian/create','Mahasiswa\PenelitianController@createAction');

        // Menghapus biodata sesuai id yang dipilih
        Route::get('penelitian/{kode_penelitian}/delete','Mahasiswa\PenelitianController@delete');

        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('penelitian/{kode_penelitian}/edit','Mahasiswa\PenelitianController@edit');

        // Mengupdate biodata dengan isi dari form
        Route::post('penelitian/{kode_penelitian}/edit','Mahasiswa\PenelitianController@editAction');


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
       
        // Menampilkan tabel
        Route::get('JenisPenilaian','KrsKhs\JenisPenilaianController@index');

        Route::get('TahunAkademik/','KrsKhs\TahunAkademikController@index');

        // Menampilkan form tambah biodata
        Route::get('TahunAkademik/create','KrsKhs\TahunAkademikController@create');

        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('TahunAkademik/create','KrsKhs\TahunAkademikController@createAction');

        // Menghapus biodata sesuai id yang dipilih
        Route::get('TahunAkademik/{id_tahun}/delete','KrsKhs\TahunAkademikController@delete');

        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('TahunAkademik/{id_tahun}/edit','KrsKhs\TahunAkademikController@edit');

        // Mengupdate biodata dengan isi dari form
        Route::post('TahunAkademik/{id_tahun}/edit','KrsKhs\TahunAkademikController@editAction');
    });
        
    // Modul Kurikulum
    Route::group(['prefix' => 'kurikulum'], function() {

        Route::group(['prefix' => 'kodecpmatkul'], function() {
            Route::get('/','Kurikulum\KodeController@index');
            Route::post('create','Kurikulum\KodeController@createAction');
            Route::get('kode/{id}/delete','Kurikulum\KodeController@delete');
            Route::get('kode/{id}/edit','Kurikulum\KodeController@edit');
            Route::post('kode/{id}/edit','Kurikulum\KodeController@editAction');
        });

        // Menampilkan tabel
        Route::get('sistem-pembelajaran','Kurikulum\SistemPembelajaranController@index');

        // Menampilkan form tambah biodata
        Route::get('sistem-pembelajaran/create','Kurikulum\SistemPembelajaranController@create');

        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('sistem-pembelajaran/create','Kurikulum\SistemPembelajaranController@createAction');

        // Menghapus biodata sesuai id yang dipilih
        Route::get('sistem-pembelajaran/{id}/delete','Kurikulum\SistemPembelajaranController@delete');

        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('sistem-pembelajaran/{id}/edit','Kurikulum\SistemPembelajaranController@edit');

        // Mengupdate biodata dengan isi dari form
        Route::post('sistem-pembelajaran/{id}/edit','Kurikulum\SistemPembelajaranController@editAction');

        
        Route::group(['prefix' => 'mata-kuliah'], function() {

            // Menampilkan tabel
            Route::get('/','Kurikulum\MataKuliahController@index');

            // Menampilkan form tambah biodata
            Route::get('create','Kurikulum\MataKuliahController@create');

            // Menambahkan form yg di isi tadi ke tabel biodata
            Route::post('create','Kurikulum\MataKuliahController@createAction');

            // Menghapus biodata sesuai id yang dipilih
            Route::get('/{id}/delete','Kurikulum\MataKuliahController@delete');

            // Menampilkan form edit biodata dari id yg dipilih
            Route::get('/{id}/edit','Kurikulum\MataKuliahController@edit');

            // Mengupdate biodata dengan isi dari form
            Route::post('/{id}/edit','Kurikulum\MataKuliahController@editAction');

        });

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

        // Menampilkan tabel
        Route::group(['prefix' => 'kategori-media-pembelajaran'], function() {
            Route::get('/','Kurikulum\KategoriMediaPembelajaranController@index');

            Route::get('create','Kurikulum\KategoriMediaPembelajaranController@create');

            Route::post('create','Kurikulum\KategoriMediaPembelajaranController@createAction');

            Route::get('{id}/delete','Kurikulum\KategoriMediaPembelajaranController@delete');

            Route::get('{id}/edit','Kurikulum\KategoriMediaPembelajaranController@edit');

        // Menampilkan tabel
            Route::get('prodi','Kurikulum\ProdiController@index');
        // Menampilkan form tambah biodata
            Route::get('prodi/create','Kurikulum\ProdiController@create'); 
        // Menambahkan form yg di isi tadi ke tabel biodata
            Route::post('prodi/create','Kurikulum\ProdiController@createAction'); 
        // Menghapus biodata sesuai id yang dipilih
            Route::get('prodi/{id_prodi}/delete','Kurikulum\ProdiController@delete');
        // Menampilkan form edit biodata dari id yg dipilih
            Route::get('prodi/{id_prodi}/edit','Kurikulum\ProdiController@edit');  
        // Mengupdate biodata dengan isi dari form
            Route::post('prodi/{id_prodi}/edit','Kurikulum\ProdiController@editAction');       

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


            Route::post('{id}/edit','Kurikulum\KategoriMediaPembelajaranController@editAction');
            

    });
        });

    // Modul Dosen
    Route::group(['prefix' => 'dosen'], function() {

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

// Menampilkan tabel
        Route::get('sktugas','Dosen\SktugasController@index');

        // Menampilkan form tambah biodata
        Route::get('sktugas/create','Dosen\SktugasController@create');

        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('sktugas/create','Dosen\SktugasController@createAction');

        // Menghapus biodata sesuai id yang dipilih
        Route::get('sktugas/{id}/delete','Dosen\SktugasController@delete');

        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('sktugas/{id}/edit','Dosen\SktugasController@edit');

        // Mengupdate biodata dengan isi dari form
        Route::post('sktugas/{id}/edit','Dosen\SktugasController@editAction');            

       
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

    // Modul Pengelolaan Kegiatan
    Route::group(['prefix' => 'pengelolaan-kegiatan'], function() {

        // Menampilkan tabel
        Route::get('rincian-dana','PengelolaanKegiatan\RincianDanaController@index');

        // Menampilkan form tambah biodata
        Route::get('rincian-dana/create','PengelolaanKegiatan\RincianDanaController@create');

        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('rincian-dana/create','PengelolaanKegiatan\RincianDanaController@createAction');

        // Menghapus biodata sesuai id yang dipilih
        Route::get('rincian-dana/{kode_rincian}/delete','PengelolaanKegiatan\RincianDanaController@delete');

        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('rincian-dana/{kode_rincian}/edit','PengelolaanKegiatan\RincianDanaController@edit');

        // Mengupdate biodata dengan isi dari form
        Route::post('rincian-dana/{kode_rincian}/edit','PengelolaanKegiatan\RincianDanaController@editAction');
            


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


    // Modul Kegiatan

    Route::group(['prefix' => 'kegiatan'], function() {
        // Menampilkan tabel
        Route::get('dokumentasi','PengelolaanKegiatan\DokumentasiController@index');

        // Menampilkan form tambah biodata
        Route::get('dokumentasi/create','PengelolaanKegiatan\DokumentasiController@create');

        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('dokumentasi/create','PengelolaanKegiatan\DokumentasiController@createAction');

        // Menghapus biodata sesuai id yang dipilih
        Route::get('dokumentasi/{id}/delete','PengelolaanKegiatan\DokumentasiController@delete');

        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('dokumentasi/{id}/edit','PengelolaanKegiatan\DokumentasiController@edit');

        // Mengupdate biodata dengan isi dari form
        Route::post('dokumentasi/{id}/edit','PengelolaanKegiatan\DokumentasiController@editAction');
        });

    Route::group(['prefix' => 'pengelolaan-kegiatan'], function() {

        // Menampilkan tabel
        Route::get('rundown','PengelolaanKegiatan\RundownController@index');
        // Menampilkan form tambah biodata
        Route::get('rundown/create','PengelolaanKegiatan\RundownController@create');
         // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('rundown/create','PengelolaanKegiatan\RundownController@createAction');
        // Menghapus biodata sesuai id yang dipilih
        Route::get('rundown/{kode_rundown}/delete','PengelolaanKegiatan\RundownController@delete');
        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('rundown/{kode_rundown}/edit','PengelolaanKegiatan\RundownController@edit');
        // Mengupdate biodata dengan isi dari form
        Route::post('rundown/{kode_rundown}/edit','PengelolaanKegiatan\RundownController@editAction');
            
             // Menampilkan tabel
        Route::get('pengajuan','PengelolaanKegiatan\PengajuanController@index');

        // Menampilkan form tambah biodata
        Route::get('pengajuan/create','PengelolaanKegiatan\PengajuanController@create');

        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('pengajuan/create','PengelolaanKegiatan\PengajuanController@createAction');

        // Menghapus biodata sesuai id yang dipilih
        Route::get('pengajuan/{id}/delete','PengelolaanKegiatan\PengajuanController@delete');

        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('pengajuan/{id}/edit','PengelolaanKegiatan\PengajuanController@edit');

        // Mengupdate biodata dengan isi dari form
        Route::post('pengajuan/{id}/edit','PengelolaanKegiatan\PengajuanController@editAction');


    });

    // Modul PLA
    Route::group(['prefix' => 'pla'], function() {
         // Menampilkan Permohonan Surat MHs
        Route::get('PermohonanSuratMhs','pla\PermohonanSuratController@showMhs');     
        // Menampilkan form tambah permohonan
        Route::get('TambahPermohonanSuratMhs','pla\PermohonanSuratController@create');

        // Menambahkan form yg di isi tadi ke tabel mhs_pemohon_surat
        Route::post('TambahPermohonanSuratMhs','pla\PermohonanSuratController@createAction');

        // Menghapus data sesuai id yang dipilih
        Route::get('/{id}/{id2}/deletePemohon','pla\PermohonanSuratController@delete');

        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('/{id}/{id2}/editPemohon','pla\PermohonanSuratController@edit');

        // Mengupdate biodata dengan isi dari form
        Route::post('/{id}/{id2}/edit','pla\PermohonanSuratController@editAction');   
    // Menampilkan tabel
        Route::get('/surat-masuk','pla\Surat_MasukController@index');           

    // Menampilkan form tambah biodata
        Route::get('surat-masuk/create','pla\Surat_MasukController@create');

    // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('surat-masuk/create','pla\Surat_MasukController@createAction');

    // Menghapus biodata sesuai id yang dipilih
        Route::get('surat-masuk/{id}/delete','pla\Surat_MasukController@delete');

    // Menampilkan form edit biodata dari id yg dipilih
        Route::get('surat-masuk/{id}/edit','pla\Surat_MasukController@edit');

    // Mengupdate biodata dengan isi dari form
        Route::post('surat-masuk/{id}/edit','pla\Surat_MasukController@editAction');

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

            //Menampilkan list dosen penguji dan form untuk menambahkan
             Route::get('index-dosen-penguji','MonitoringSkripsi\DosenPengujiController@index');

             //Action untuk menambahkan dosen penguji
             Route::post('tambah-dosen-penguji','MonitoringSkripsi\DosenPengujiController@store');

             //Action untuk menghapus dosen penguji

             Route::get('hapus-dosen-penguji/{id}','MonitoringSkripsi\DosenPengujiController@destroy');

             //Page untuk menampilkan edit form sesuai data yang dipilih
            Route::get('edit-dosen-penguji/{id}','MonitoringSkripsi\DosenPengujiController@edit_dosen_penguji');

              // Action untuk mengupdate dosbing    
            Route::post('manipulate-dosen-penguji','MonitoringSkripsi\DosenPengujiController@manipulate');

           
    });

    // Modul Inventaris


    Route::group(['prefix' => 'inventaris'], function() {


    
    // Menampilkan tabel
    Route::get('asset','Inventaris\AssetController@index');


    
        // Menampilkan tabel
        Route::get('asset','Inventaris\AssetController@index');
        
        // Menampilkan form tambah asset
        Route::get('asset/create','Inventaris\AssetController@create');
        
        // Menambahkan form yg di isi tadi ke tabel asset
        Route::post('asset/create','Inventaris\AssetController@createAction');
        
        // Menghapus asset sesuai id yang dipilih
        Route::get('asset/{id}/delete','Inventaris\AssetController@delete');

        // Menampilkan form edit asset dari id yg dipilih
        Route::get('asset/{id}/edit','Inventaris\AssetController@edit');

        // Mengupdate asset dengan isi dari form
        Route::post('asset/{id}/edit','Inventaris\AssetController@editAction');

        
       


    Route::get('input-maintenance', 'MaintenanceController@inputMaintenance');
    Route::get('index-maintenance', 'MaintenanceController@index');
    Route::get('view-maintenance', 'MaintenanceController@viewDetail');


    Route::get('input-peminjaman', 'PeminjamanController@inputPeminjaman');
    Route::get('index-peminjaman', 'PeminjamanController@index');
    Route::get('view-peminjaman', 'PeminjamanController@viewDetail');

    Route::get('add-asset', 'DashboardController@input');
    Route::get('/view-asset', 'Inventaris\DashboardController@index');
    //tugas fakultas
    Route::get('/tugas-fakultas', 'Inventaris\TugasFakultasController@index');
    Route::get('/tugas-create', 'Inventaris\TugasFakultasController@create');
    Route::post('/tugas-create', 'Inventaris\TugasFakultasController@createAction');
    Route::get('/tugas-fakultas/{id}/tugas-edit', 'Inventaris\TugasFakultasController@edit');
    Route::post('{id}/post-tugas-edit', 'Inventaris\TugasFakultasController@editAction');
    Route::get('/tugas-fakultas/{id}/delete','Inventaris\TugasFakultasController@delete');



        Route::get('input-peminjaman', 'PeminjamanController@inputPeminjaman');
        Route::get('index-peminjaman', 'PeminjamanController@index');
        Route::get('view-peminjaman', 'PeminjamanController@viewDetail');

        Route::get('add-asset', 'DashboardController@input');
        Route::get('/view-asset', 'Inventaris\DashboardController@index');
        //tugas fakultas
        Route::get('/tugas-fakultas', 'Inventaris\TugasFakultasController@index');
        Route::get('/tugas-create', 'Inventaris\TugasFakultasController@create');
        Route::post('/tugas-create', 'Inventaris\TugasFakultasController@createAction');
        Route::get('/tugas-fakultas/{id}/tugas-edit', 'Inventaris\TugasFakultasController@edit');
        Route::post('{id}/post-tugas-edit', 'Inventaris\TugasFakultasController@editAction');
        Route::get('/tugas-fakultas/{id}/delete','Inventaris\TugasFakultasController@delete');


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