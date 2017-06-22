<?php
Route::get('/',['as'=>'admin.index', 'uses'=>'HomeController@index']);

Route::group(['middleware' => 'auth'], function () {
Route::get('/logout', 'Auth\LoginController@logout');


        /*
        Route buat mahasiswa ditaruh dibawah sini
        */

        /*
        Detail Pengajuan
        */
        Route::get('mahasiswa/pengelolaan-kegiatan/detail-pengajuan/{id_kegiatan}','Mahasiswa\pengelolaankegiatan\DetailPengajuanController@index');

        Route::get('mahasiswa/pengelolaan-kegiatan/detail-pengajuan/{id_kegiatan}/lpj','Mahasiswa\pengelolaankegiatan\DetailPengajuanController@indexLPJ');


        Route::get('mahasiswa/pengelolaan-kegiatan/detail-pengajuan/{id_kegiatan}/revisi','Mahasiswa\pengelolaankegiatan\DetailPengajuanController@index');

        Route::get('mahasiswa/pengelolaan-kegiatan/detail-pengajuan/{id_kegiatan}/lpjRevisi','Mahasiswa\pengelolaankegiatan\DetailPengajuanController@indexLPJ');

         Route::get('mahasiswa/pengelolaan-kegiatan/dokumentasi/download/{id_kegiatan}','Mahasiswa\pengelolaankegiatan\DokumentasiController@toPdf');

         Route::get('mahasiswa/pengelolaan-kegiatan/dokumentasi/download/{id_kegiatan}/lpj','Mahasiswa\pengelolaankegiatan\DokumentasiController@toPdfLPJ');


        /*Proses Bisnis Pengajuan Proposal Kegiatan*/
        // 1. View Input Pengajuan Proposal
        Route::get('mahasiswa/pengelolaan-kegiatan/pengajuan','Mahasiswa\pengelolaankegiatan\PengajuanController@create');

        // 2. Insert Proposal
        Route::post('mahasiswa/pengelolaan-kegiatan/pengajuan/create','Mahasiswa\pengelolaankegiatan\PengajuanController@createAction');

        // 3. View Input Struktur Panitia
        Route::get('mahasiswa/pengelolaan-kegiatan/input-struktur-panitia/{id}','Mahasiswa\pengelolaankegiatan\StrukturPanitiaController@index');

        // 4. Insert Struktur Panitia
        Route::post('mahasiswa/pengelolaan-kegiatan/input-struktur-panitia/{id}/tambahPanitia','Mahasiswa\pengelolaankegiatan\StrukturPanitiaController@createAction');

        // 4. Insert Struktur Panitia
        Route::post('mahasiswa/pengelolaan-kegiatan/input-struktur-panitia/{id}/tambahPanitia1','Mahasiswa\pengelolaankegiatan\StrukturPanitiaController@TambahAction');
        // 5. View Tabel Rincian Rundown
        Route::get('mahasiswa/pengelolaan-kegiatan/rincian-rundown/{id_kegiatan}','Mahasiswa\pengelolaankegiatan\RincianRundownController@indexProposal');

        // 5. View Input Rincian Rundown
        Route::get('mahasiswa/pengelolaan-kegiatan/rincian-rundown/{id_kegiatan}/create','Mahasiswa\pengelolaankegiatan\RincianRundownController@create');

        // 6. Insert Rincian Rundown
        Route::post('mahasiswa/pengelolaan-kegiatan/rincian-rundown/{id_kegiatan}/createActionProposal','Mahasiswa\pengelolaankegiatan\RincianRundownController@createActionProposal');

        // 6. Insert Rincian Rundown
        Route::get('mahasiswa/pengelolaan-kegiatan/rincian-rundown/{id_kegiatan}/viewEditProposal','Mahasiswa\pengelolaankegiatan\RincianRundownController@editProposal');

        // 6. Insert Rincian Rundown
        Route::post('mahasiswa/pengelolaan-kegiatan/rincian-rundown/{id}/editActionProposal1','Mahasiswa\pengelolaankegiatan\RincianRundownController@editActionProposal1');


        // 7. View Input Rincian Dana
        Route::get('mahasiswa/pengelolaan-kegiatan/rincian-dana/{id_kegiatan}','Mahasiswa\pengelolaankegiatan\RincianDanaController@index');

        // 8. Insert Rincian Dana
        Route::post('mahasiswa/pengelolaan-kegiatan/rincian-dana/{id_kegiatan}/tambahDana','Mahasiswa\pengelolaankegiatan\RincianDanaController@createAction');

        // 8. Insert Rincian Dana
        Route::post('mahasiswa/pengelolaan-kegiatan/rincian-dana/{id_rdana}/tambahDanaEdit1','Mahasiswa\pengelolaankegiatan\RincianDanaController@editTambahAction1');

        Route::get('mahasiswa/pengelolaan-kegiatan/dokumentasi/download/{id_kegiatan}','Mahasiswa\pengelolaankegiatan\DokumentasiController@toPdf');


        /*Proses Bisnis Pengajuan Laporan Pertanggung Jawaban Kegiatan*/

        // 1. View Input LPJ
        Route::get('mahasiswa/pengelolaan-kegiatan/dokumentasi/create','Mahasiswa\pengelolaankegiatan\DokumentasiController@create');

        // 2. Insert LPJ
        Route::post('mahasiswa/pengelolaan-kegiatan/dokumentasi/createAction','Mahasiswa\pengelolaankegiatan\DokumentasiController@createAction');

        // 3. View Tabel Rincian Rundown LPJ
        Route::get('mahasiswa/pengelolaan-kegiatan/rincian-rundown/{id_kegiatan}/lpj','Mahasiswa\pengelolaankegiatan\RincianRundownController@indexLPJ');

        // 4. View Input Rincian Rundown LPJ
        Route::get('mahasiswa/pengelolaan-kegiatan/rincian-rundown/{id_kegiatan}/createLPJ','Mahasiswa\pengelolaankegiatan\RincianRundownController@createLPJ');

        // 5. Insert Rincian Rundown LPJ
        Route::post('mahasiswa/pengelolaan-kegiatan/rincian-rundown/{id_kegiatan}/createActionLPJ','Mahasiswa\pengelolaankegiatan\RincianRundownController@createActionLPJ');

         // 6. Insert Rincian Rundown
        Route::get('mahasiswa/pengelolaan-kegiatan/rincian-rundown/{id_kegiatan}/viewEditLPJ1','Mahasiswa\pengelolaankegiatan\RincianRundownController@editLPJ1');

        // 6. Insert Rincian Rundown
        Route::post('mahasiswa/pengelolaan-kegiatan/rincian-rundown/{id}/editActionLPJ1','Mahasiswa\pengelolaankegiatan\RincianRundownController@editActionLPJ1');


        // 6. View Input Rincian Dana
        Route::get('mahasiswa/pengelolaan-kegiatan/rincian-dana/{id_kegiatan}/lpj','Mahasiswa\pengelolaankegiatan\RincianDanaController@indexLPJ');

        // 7. Insert Rincian Dana
        Route::post('mahasiswa/pengelolaan-kegiatan/rincian-dana/{id_kegiatan}/tambahDanaLPJ','Mahasiswa\pengelolaankegiatan\RincianDanaController@createActionLPJ');

        // 8. Insert Rincian Dana
        Route::post('mahasiswa/pengelolaan-kegiatan/rincian-dana/{id_rdana}/tambahDanaEditLPJ1','Mahasiswa\pengelolaankegiatan\RincianDanaController@editTambahActionLPJ1');


        /*Proses Bisnis Daftar Kegiatan Akademik*/

       
        // 2. Daftar Pengajuan Dikonfirmasi
        Route::get('mahasiswa/pengelolaan-kegiatan/daftarPengajuanKonfirmasiProposal','Mahasiswa\pengelolaankegiatan\PengajuanController@dikonfirmasiProposal');
        
        // 3. Daftar LPJ Dikonfirmasi
        Route::get('mahasiswa/pengelolaan-kegiatan/daftarPengajuanKonfirmasiLPJ','Mahasiswa\pengelolaankegiatan\PengajuanController@dikonfirmasiLPJ');

        // 4. Daftar Pengajuan Ditolak
        Route::get('mahasiswa/pengelolaan-kegiatan/daftarPengajuanDitolak','Mahasiswa\pengelolaankegiatan\PengajuanController@ditolak');
        
        // 4. Daftar Pengajuan Ditolak LPJ
        Route::get('mahasiswa/pengelolaan-kegiatan/daftarPengajuanDitolakLPJ','Mahasiswa\pengelolaankegiatan\PengajuanController@ditolakLPJ');

        /*Proses Bisnis Revisi LPJ*/

        // 1. View Input Revisi LPJ
        Route::get('mahasiswa/pengelolaan-kegiatan/dokumentasi/{id}/revisiLPJ','Mahasiswa\pengelolaankegiatan\DokumentasiController@edit');

        // 1. View Input Revisi LPJ
        Route::post('mahasiswa/pengelolaan-kegiatan/dokumentasi/{id}/editAction','Mahasiswa\pengelolaankegiatan\DokumentasiController@editAction');

        
        // 5. View Tabel Rincian Rundown
        Route::get('mahasiswa/pengelolaan-kegiatan/rincian-rundown/{id_kegiatan}/editLPJ','Mahasiswa\pengelolaankegiatan\RincianRundownController@indexEditLPJ');

        // 5. View Tabel Rincian Rundown
        Route::get('mahasiswa/pengelolaan-kegiatan/rincian-rundown/{id_kegiatan}/createEditLPJ','Mahasiswa\pengelolaankegiatan\RincianRundownController@createEditLPJ');

        // 5. View Tabel Rincian Rundown
        Route::post('mahasiswa/pengelolaan-kegiatan/rincian-rundown/{id_kegiatan}/createActionEditLPJ','Mahasiswa\pengelolaankegiatan\RincianRundownController@createActionEditLPJ');

        // 6. Insert Rincian Rundown
        Route::get('mahasiswa/pengelolaan-kegiatan/rincian-rundown/{id_kegiatan}/viewEditLPJ','Mahasiswa\pengelolaankegiatan\RincianRundownController@editLPJ');

        // 6. Insert Rincian Rundown
        Route::post('mahasiswa/pengelolaan-kegiatan/rincian-rundown/{id}/editActionLPJ','Mahasiswa\pengelolaankegiatan\RincianRundownController@editActionLPJ');

        // 7. View Input Rincian Dana
        Route::get('mahasiswa/pengelolaan-kegiatan/rincian-dana/{id_kegiatan}/editLPJ','Mahasiswa\pengelolaankegiatan\RincianDanaController@editLPJ');

        // 8. Insert Rincian Dana
        Route::post('mahasiswa/pengelolaan-kegiatan/rincian-dana/{id_kegiatan}/tambahDanaEditLPJ','Mahasiswa\pengelolaankegiatan\RincianDanaController@createEditActionLPJ');


        // 8. Insert Rincian Dana
        Route::post('mahasiswa/pengelolaan-kegiatan/rincian-dana/{id_rdana}/tambahDanaEditLPJ2','Mahasiswa\pengelolaankegiatan\RincianDanaController@editTambahActionLPJ');

        /*Proses Bisnis Revisi Pengajuan*/

        // 1. View Input Revisi Pengajuan
        Route::get('mahasiswa/pengelolaan-kegiatan/pengajuan/{id}/revisi','Mahasiswa\pengelolaankegiatan\PengajuanController@edit');

        // 2. Revisi Pengajuan
        Route::post('mahasiswa/pengelolaan-kegiatan/pengajuan/{id}/revisiAction','Mahasiswa\pengelolaankegiatan\PengajuanController@editAction');
        
        // 3. View Input Struktur Panitia
        Route::get('mahasiswa/pengelolaan-kegiatan/input-struktur-panitia/{id}/edit','Mahasiswa\pengelolaankegiatan\StrukturPanitiaController@edit');

        // 4. Insert Struktur Panitia
        Route::post('mahasiswa/pengelolaan-kegiatan/input-struktur-panitia/{id}/editAction','Mahasiswa\pengelolaankegiatan\StrukturPanitiaController@editAction');

        // 4.5 Insert Struktur Panitia
        Route::post('mahasiswa/pengelolaan-kegiatan/input-struktur-panitia/{id}/tambahPanitiaEdit','Mahasiswa\pengelolaankegiatan\StrukturPanitiaController@editTambahAction');

        // 5. View Tabel Rincian Rundown
        Route::get('mahasiswa/pengelolaan-kegiatan/rincian-rundown/{id_kegiatan}/edit','Mahasiswa\pengelolaankegiatan\RincianRundownController@indexEdit');

        // 5. View Tabel Rincian Rundown
        Route::get('mahasiswa/pengelolaan-kegiatan/rincian-rundown/{id_kegiatan}/createEdit','Mahasiswa\pengelolaankegiatan\RincianRundownController@createEdit');

        // 5. View Tabel Rincian Rundown
        Route::post('mahasiswa/pengelolaan-kegiatan/rincian-rundown/{id_kegiatan}/createActionEditProposal','Mahasiswa\pengelolaankegiatan\RincianRundownController@createActionEditProposal');

        // 6. Insert Rincian Rundown
        Route::get('mahasiswa/pengelolaan-kegiatan/rincian-rundown/{id_kegiatan}/viewEdit','Mahasiswa\pengelolaankegiatan\RincianRundownController@edit');

        // 6. Insert Rincian Rundown
        Route::post('mahasiswa/pengelolaan-kegiatan/rincian-rundown/{id}/editActionProposal','Mahasiswa\pengelolaankegiatan\RincianRundownController@editActionProposal');

        // 7. View Input Rincian Dana
        Route::get('mahasiswa/pengelolaan-kegiatan/rincian-dana/{id_kegiatan}/edit','Mahasiswa\pengelolaankegiatan\RincianDanaController@edit');

        // 8. Insert Rincian Dana
        Route::post('mahasiswa/pengelolaan-kegiatan/rincian-dana/{id_kegiatan}/tambahDanaEdit','Mahasiswa\pengelolaankegiatan\RincianDanaController@createEditAction');

        // 8. Insert Rincian Dana
        Route::post('mahasiswa/pengelolaan-kegiatan/rincian-dana/{id_rdana}/tambahDanaEdit2','Mahasiswa\pengelolaankegiatan\RincianDanaController@editTambahAction');

         /*
        Route buat dosen ditaruh dibawah sini
        */

 /*
        Detail Pengajuan
        */
        Route::get('dosen/pengelolaan-kegiatan/detail-pengajuan/{id_kegiatan}','Dosen\pengelolaankegiatan\DetailPengajuanController@index');

        Route::get('dosen/pengelolaan-kegiatan/detail-pengajuan/{id_kegiatan}/lpj','Dosen\pengelolaankegiatan\DetailPengajuanController@indexLPJ');


        Route::get('dosen/pengelolaan-kegiatan/detail-pengajuan/{id_kegiatan}/revisi','Dosen\pengelolaankegiatan\DetailPengajuanController@index');

        Route::get('dosen/pengelolaan-kegiatan/detail-pengajuan/{id_kegiatan}/lpjRevisi','Dosen\pengelolaankegiatan\DetailPengajuanController@indexLPJ');

         Route::get('dosen/pengelolaan-kegiatan/dokumentasi/download/{id_kegiatan}','Dosen\pengelolaankegiatan\DokumentasiController@toPdf');

         Route::get('dosen/pengelolaan-kegiatan/dokumentasi/download/{id_kegiatan}/lpj','Dosen\pengelolaankegiatan\DokumentasiController@toPdfLPJ');


        /*Proses Bisnis Pengajuan Proposal Kegiatan*/
        // 1. View Input Pengajuan Proposal
        Route::get('dosen/pengelolaan-kegiatan/pengajuan','Dosen\pengelolaankegiatan\PengajuanController@create');

        // 2. Insert Proposal
        Route::post('dosen/pengelolaan-kegiatan/pengajuan/create','Dosen\pengelolaankegiatan\PengajuanController@createAction');

        // 3. View Input Struktur Panitia
        Route::get('dosen/pengelolaan-kegiatan/input-struktur-panitia/{id}','Dosen\pengelolaankegiatan\StrukturPanitiaController@index');

        // 4. Insert Struktur Panitia
        Route::post('dosen/pengelolaan-kegiatan/input-struktur-panitia/{id}/tambahPanitia','Dosen\pengelolaankegiatan\StrukturPanitiaController@createAction');

        // 4. Insert Struktur Panitia
        Route::post('dosen/pengelolaan-kegiatan/input-struktur-panitia/{id}/tambahPanitia1','Dosen\pengelolaankegiatan\StrukturPanitiaController@TambahAction');
        // 5. View Tabel Rincian Rundown
        Route::get('dosen/pengelolaan-kegiatan/rincian-rundown/{id_kegiatan}','Dosen\pengelolaankegiatan\RincianRundownController@indexProposal');

        // 5. View Input Rincian Rundown
        Route::get('dosen/pengelolaan-kegiatan/rincian-rundown/{id_kegiatan}/create','Dosen\pengelolaankegiatan\RincianRundownController@create');

        // 6. Insert Rincian Rundown
        Route::post('dosen/pengelolaan-kegiatan/rincian-rundown/{id_kegiatan}/createActionProposal','Dosen\pengelolaankegiatan\RincianRundownController@createActionProposal');

        // 6. Insert Rincian Rundown
        Route::get('dosen/pengelolaan-kegiatan/rincian-rundown/{id_kegiatan}/viewEditProposal','Dosen\pengelolaankegiatan\RincianRundownController@editProposal');

        // 6. Insert Rincian Rundown
        Route::post('dosen/pengelolaan-kegiatan/rincian-rundown/{id}/editActionProposal1','Dosen\pengelolaankegiatan\RincianRundownController@editActionProposal1');


        // 7. View Input Rincian Dana
        Route::get('dosen/pengelolaan-kegiatan/rincian-dana/{id_kegiatan}','Dosen\pengelolaankegiatan\RincianDanaController@index');

        // 8. Insert Rincian Dana
        Route::post('dosen/pengelolaan-kegiatan/rincian-dana/{id_kegiatan}/tambahDana','Dosen\pengelolaankegiatan\RincianDanaController@createAction');

        // 8. Insert Rincian Dana
        Route::post('dosen/pengelolaan-kegiatan/rincian-dana/{id_rdana}/tambahDanaEdit1','Dosen\pengelolaankegiatan\RincianDanaController@editTambahAction1');

        Route::get('dosen/pengelolaan-kegiatan/dokumentasi/download/{id_kegiatan}','Dosen\pengelolaankegiatan\DokumentasiController@toPdf');


        /*Proses Bisnis Pengajuan Laporan Pertanggung Jawaban Kegiatan*/

        // 1. View Input LPJ
        Route::get('dosen/pengelolaan-kegiatan/dokumentasi/create','Dosen\pengelolaankegiatan\DokumentasiController@create');

        // 2. Insert LPJ
        Route::post('dosen/pengelolaan-kegiatan/dokumentasi/createAction','Dosen\pengelolaankegiatan\DokumentasiController@createAction');

        // 3. View Tabel Rincian Rundown LPJ
        Route::get('dosen/pengelolaan-kegiatan/rincian-rundown/{id_kegiatan}/lpj','Dosen\pengelolaankegiatan\RincianRundownController@indexLPJ');

        // 4. View Input Rincian Rundown LPJ
        Route::get('dosen/pengelolaan-kegiatan/rincian-rundown/{id_kegiatan}/createLPJ','Dosen\pengelolaankegiatan\RincianRundownController@createLPJ');

        // 5. Insert Rincian Rundown LPJ
        Route::post('dosen/pengelolaan-kegiatan/rincian-rundown/{id_kegiatan}/createActionLPJ','Dosen\pengelolaankegiatan\RincianRundownController@createActionLPJ');

         // 6. Insert Rincian Rundown
        Route::get('dosen/pengelolaan-kegiatan/rincian-rundown/{id_kegiatan}/viewEditLPJ1','Dosen\pengelolaankegiatan\RincianRundownController@editLPJ1');

        // 6. Insert Rincian Rundown
        Route::post('dosen/pengelolaan-kegiatan/rincian-rundown/{id}/editActionLPJ1','Dosen\pengelolaankegiatan\RincianRundownController@editActionLPJ1');


        // 6. View Input Rincian Dana
        Route::get('dosen/pengelolaan-kegiatan/rincian-dana/{id_kegiatan}/lpj','Dosen\pengelolaankegiatan\RincianDanaController@indexLPJ');

        // 7. Insert Rincian Dana
        Route::post('dosen/pengelolaan-kegiatan/rincian-dana/{id_kegiatan}/tambahDanaLPJ','Dosen\pengelolaankegiatan\RincianDanaController@createActionLPJ');

        // 8. Insert Rincian Dana
        Route::post('dosen/pengelolaan-kegiatan/rincian-dana/{id_rdana}/tambahDanaEditLPJ1','Dosen\pengelolaankegiatan\RincianDanaController@editTambahActionLPJ1');


        /*Proses Bisnis Daftar Kegiatan Akademik*/

       
        // 2. Daftar Pengajuan Dikonfirmasi
        Route::get('dosen/pengelolaan-kegiatan/daftarPengajuanKonfirmasiProposal','Dosen\pengelolaankegiatan\PengajuanController@dikonfirmasiProposal');
        
        // 3. Daftar LPJ Dikonfirmasi
        Route::get('dosen/pengelolaan-kegiatan/daftarPengajuanKonfirmasiLPJ','Dosen\pengelolaankegiatan\PengajuanController@dikonfirmasiLPJ');

        // 4. Daftar Pengajuan Ditolak
        Route::get('dosen/pengelolaan-kegiatan/daftarPengajuanDitolak','Dosen\pengelolaankegiatan\PengajuanController@ditolak');
        
        // 4. Daftar Pengajuan Ditolak LPJ
        Route::get('dosen/pengelolaan-kegiatan/daftarPengajuanDitolakLPJ','Dosen\pengelolaankegiatan\PengajuanController@ditolakLPJ');

        /*Proses Bisnis Revisi LPJ*/

        // 1. View Input Revisi LPJ
        Route::get('dosen/pengelolaan-kegiatan/dokumentasi/{id}/revisiLPJ','Dosen\pengelolaankegiatan\DokumentasiController@edit');

        // 1. View Input Revisi LPJ
        Route::post('dosen/pengelolaan-kegiatan/dokumentasi/{id}/editAction','Dosen\pengelolaankegiatan\DokumentasiController@editAction');

        
        // 5. View Tabel Rincian Rundown
        Route::get('dosen/pengelolaan-kegiatan/rincian-rundown/{id_kegiatan}/editLPJ','Dosen\pengelolaankegiatan\RincianRundownController@indexEditLPJ');

        // 5. View Tabel Rincian Rundown
        Route::get('dosen/pengelolaan-kegiatan/rincian-rundown/{id_kegiatan}/createEditLPJ','Dosen\pengelolaankegiatan\RincianRundownController@createEditLPJ');

        // 5. View Tabel Rincian Rundown
        Route::post('dosen/pengelolaan-kegiatan/rincian-rundown/{id_kegiatan}/createActionEditLPJ','Dosen\pengelolaankegiatan\RincianRundownController@createActionEditLPJ');

        // 6. Insert Rincian Rundown
        Route::get('dosen/pengelolaan-kegiatan/rincian-rundown/{id_kegiatan}/viewEditLPJ','Dosen\pengelolaankegiatan\RincianRundownController@editLPJ');

        // 6. Insert Rincian Rundown
        Route::post('dosen/pengelolaan-kegiatan/rincian-rundown/{id}/editActionLPJ','Dosen\pengelolaankegiatan\RincianRundownController@editActionLPJ');

        // 7. View Input Rincian Dana
        Route::get('dosen/pengelolaan-kegiatan/rincian-dana/{id_kegiatan}/editLPJ','Dosen\pengelolaankegiatan\RincianDanaController@editLPJ');

        // 8. Insert Rincian Dana
        Route::post('dosen/pengelolaan-kegiatan/rincian-dana/{id_kegiatan}/tambahDanaEditLPJ','Dosen\pengelolaankegiatan\RincianDanaController@createEditActionLPJ');


        // 8. Insert Rincian Dana
        Route::post('dosen/pengelolaan-kegiatan/rincian-dana/{id_rdana}/tambahDanaEditLPJ2','Dosen\pengelolaankegiatan\RincianDanaController@editTambahActionLPJ');

        /*Proses Bisnis Revisi Pengajuan*/

        // 1. View Input Revisi Pengajuan
        Route::get('dosen/pengelolaan-kegiatan/pengajuan/{id}/revisi','Dosen\pengelolaankegiatan\PengajuanController@edit');

        // 2. Revisi Pengajuan
        Route::post('dosen/pengelolaan-kegiatan/pengajuan/{id}/revisiAction','Dosen\pengelolaankegiatan\PengajuanController@editAction');
        
        // 3. View Input Struktur Panitia
        Route::get('dosen/pengelolaan-kegiatan/input-struktur-panitia/{id}/edit','Dosen\pengelolaankegiatan\StrukturPanitiaController@edit');

        // 4. Insert Struktur Panitia
        Route::post('dosen/pengelolaan-kegiatan/input-struktur-panitia/{id}/editAction','Dosen\pengelolaankegiatan\StrukturPanitiaController@editAction');

        // 4.5 Insert Struktur Panitia
        Route::post('dosen/pengelolaan-kegiatan/input-struktur-panitia/{id}/tambahPanitiaEdit','Dosen\pengelolaankegiatan\StrukturPanitiaController@editTambahAction');

        // 5. View Tabel Rincian Rundown
        Route::get('dosen/pengelolaan-kegiatan/rincian-rundown/{id_kegiatan}/edit','Dosen\pengelolaankegiatan\RincianRundownController@indexEdit');

        // 5. View Tabel Rincian Rundown
        Route::get('dosen/pengelolaan-kegiatan/rincian-rundown/{id_kegiatan}/createEdit','Dosen\pengelolaankegiatan\RincianRundownController@createEdit');

        // 5. View Tabel Rincian Rundown
        Route::post('dosen/pengelolaan-kegiatan/rincian-rundown/{id_kegiatan}/createActionEditProposal','Dosen\pengelolaankegiatan\RincianRundownController@createActionEditProposal');

        // 6. Insert Rincian Rundown
        Route::get('dosen/pengelolaan-kegiatan/rincian-rundown/{id_kegiatan}/viewEdit','Dosen\pengelolaankegiatan\RincianRundownController@edit');

        // 6. Insert Rincian Rundown
        Route::post('dosen/pengelolaan-kegiatan/rincian-rundown/{id}/editActionProposal','Dosen\pengelolaankegiatan\RincianRundownController@editActionProposal');

        // 7. View Input Rincian Dana
        Route::get('dosen/pengelolaan-kegiatan/rincian-dana/{id_kegiatan}/edit','Dosen\pengelolaankegiatan\RincianDanaController@edit');

        // 8. Insert Rincian Dana
        Route::post('dosen/pengelolaan-kegiatan/rincian-dana/{id_kegiatan}/tambahDanaEdit','Dosen\pengelolaankegiatan\RincianDanaController@createEditAction');

        // 8. Insert Rincian Dana
        Route::post('dosen/pengelolaan-kegiatan/rincian-dana/{id_rdana}/tambahDanaEdit2','Dosen\pengelolaankegiatan\RincianDanaController@editTambahAction');

        /*
        Route buat karyawan ditaruh dibawah sini
        */
        Route::get('karyawan/pengelolaan-kegiatan/konfirmasi-kegiatan/proposal','Karyawan\pengelolaankegiatan\KonfirmasiKegiatanController@index');

        Route::get('karyawan/pengelolaan-kegiatan/konfirmasi-kegiatan/lpj','Karyawan\pengelolaankegiatan\KonfirmasiKegiatanController@indexLPJ');

        Route::get('karyawan/pengelolaan-kegiatan/konfirmasi-kegiatan/{id_kegiatan}/setujuiProposal','Karyawan\pengelolaankegiatan\KonfirmasiKegiatanController@setujuiActionProposal');

        Route::post('karyawan/pengelolaan-kegiatan/konfirmasi-kegiatan/{id_kegiatan}/tolakProposal','Karyawan\pengelolaankegiatan\KonfirmasiKegiatanController@tolakActionProposal');

        Route::get('karyawan/pengelolaan-kegiatan/daftar-konfirmasi/proposal','Karyawan\pengelolaankegiatan\DaftarKonfirmasiController@index');

        Route::get('karyawan/pengelolaan-kegiatan/daftar-konfirmasi/lpj','Karyawan\pengelolaankegiatan\DaftarKonfirmasiController@indexLPJ');

        Route::get('karyawan/pengelolaan-kegiatan/konfirmasi-kegiatan/{id_kegiatan}/setujuiLPJ','Karyawan\pengelolaankegiatan\KonfirmasiKegiatanController@setujuiActionLPJ');

        Route::post('karyawan/pengelolaan-kegiatan/konfirmasi-kegiatan/{id_kegiatan}/tolakLPJ','Karyawan\pengelolaankegiatan\KonfirmasiKegiatanController@tolakActionLPJ');

        Route::get('karyawan/pengelolaan-kegiatan/detail-pengajuan/{id_kegiatan}/daftar-konfirmasi/proposal','Karyawan\pengelolaankegiatan\DetailPengajuanController@indexKonfirmasi');

        Route::get('karyawan/pengelolaan-kegiatan/detail-pengajuan/{id_kegiatan}/daftar-konfirmasi/lpj','Karyawan\pengelolaankegiatan\DetailPengajuanController@indexLPJKonfirmasi');


        Route::get('karyawan/pengelolaan-kegiatan/detail-pengajuan/{id_kegiatan}/konfirmasi-kegiatan/proposal','Karyawan\pengelolaankegiatan\DetailPengajuanController@index');


        Route::get('karyawan/pengelolaan-kegiatan/detail-pengajuan/{id_kegiatan}/konfirmasi-kegiatan/lpj','Karyawan\pengelolaankegiatan\DetailPengajuanController@indexLPJ');


         Route::get('karyawan/pengelolaan-kegiatan/dokumentasi/download/{id_kegiatan}','karyawan\pengelolaankegiatan\DokumentasiController@toPdf');

         Route::get('karyawan/pengelolaan-kegiatan/dokumentasi/download/{id_kegiatan}/lpj','karyawan\pengelolaankegiatan\DokumentasiController@toPdfLPJ');

         Route::get('karyawan/pengelolaan-kegiatan/dokumentasi/download/{id_kegiatan}/dosen','karyawan\pengelolaankegiatan\DokumentasiController@toPdfDosen');

         Route::get('karyawan/pengelolaan-kegiatan/dokumentasi/download/{id_kegiatan}/lpjDosen','karyawan\pengelolaankegiatan\DokumentasiController@toPdfLPJDosen');
});

