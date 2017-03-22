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






Route::group(['middleware' => 'auth'], function () {
    Route::get('notulensi/notulensi/ViewDaftarHasil', function () {
    return view('notulensi.notulensi.ViewDaftarHasil');
});
    Route::group(['middleware' => 'auth'], function () {
    Route::get('notulensi/notulensi/ViewEditNotulensi', function () {
    return view('notulensi.notulensi.ViewEditNotulensi');
});
    });

Route::group(['middleware' => 'auth'], function () {
 

    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });


	Route::get('/krs-khs/nilai', function () {
    return view('krs-khs/nilai');
});
	Route::get('/mahasiswa/penelitian/', function () {
    return view('mahasiswa.penelitian');
});
	Route::get('/mahasiswa/input_penelitian/', function () {
    return view('mahasiswa.input_penelitian');
});
	Route::get('/mahasiswa/edit_penelitian/', function () {
    return view('mahasiswa.edit_penelitian');
});



Route::get('/mahasiswa/prestasi', function () {
    return view('mahasiswa.tabel');
});
Route::get('/mahasiswa/input_prestasi', function () {
    return view('mahasiswa.input_prestasi');
});
Route::get('/mahasiswa/edit_prestasi', function () {
    return view('mahasiswa.edit_prestasi');
});
Route::get('/mahasiswa/tabel_berhasil', function () {
    return view('mahasiswa.tabel_berhasil');
});
 Route::get('/mahasiswa/lihat-jadwal-sidang-proposal', function () {
    return view('mahasiswa.lihat-jadwal-sidang-proposal');
});



	Route::get('/krs-khs/mk', function () {
    return view('krs-khs/mk');
});

	Route::get('/contoh', function () {
    return view('mahasiswa/contoh');
});

	Route::get('/krs-khs/mk/bobot', function () {
    return view('krs-khs/bobot');
});

    Route::get('/krs-khs/mk/input_nilai', function () {
    return view('krs-khs/input_nilai');
});

    Route::get('/krs-khs/dosen_mk', function () {
    return view('krs-khs/input_dosen_mk');
});
	Route::get('/approve', function () {
    return view('krs-khs/approve');
    });
	Route::get('/approve1', function () {
    return view('krs-khs/approve1');
    });
	Route::get('/buka', function () {
    return view('krs-khs/buka');
});

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes

        Route::get('/kurikulum/contoh', function () {
    return view('kurikulum.contoh');
});      

        Route::get('/kurikulum/editcpbelajar', function () {
            return view('kurikulum.cpbelajar.index-editcpbelajar');
        });

    Route::get('/monsi/tabel-mhs', function () {
    return view('monsi.tabel-mhs');


    Route::get('/kurikulum/cpprogram/', function () {
    	return view('kurikulum.cpprogram.index');
	});
    Route::get('/kurikulum/cpprogram/cupdate/', function () {
    	return view('kurikulum.cpprogram.update');
	});
	Route::get('/kurikulum/cpprogram/create/', function () {
    	return view('kurikulum.cpprogram.create');
	});
	Route::get('/kurikulum/editcpprogram/', function () {
    	return view('kurikulum.cpprogram.edit');
	});
	Route::get('/kurikulum/view', function () {
    return view('kurikulum.cpprogram.view');
});

    Route::get('/kurikulum/kode', function () {
    return view('kurikulum.kode.index');
});

    Route::get('kurikulum/rps/index', function () {
    return view('kurikulum.rps.index');
});
    Route::get('kurikulum/detail-rps', function () {
    return view('kurikulum.rps.index-rps');
});
    Route::get('/dosen/penelitian', function () {
    return view('dosen.penelitian.create');
});
    Route::get('/kegiatan/input_lpj', function () {
    return view('kegiatan.contoh');
});

    Route::get('/notulensi/daftarnotulensi', function () {
    return view('notulensi.daftarnotulensi');
});
    Route::get('/notulensi/formnotulensi', function () {
    return view('notulensi.formnotulensi');
});
    Route::get('/notulensi/kirimnotulensi', function () {
    return view('notulensi.kirimnotulensi');
});
    Route::get('/pla/konfirmasiproposal', function () {
    return view('pla.konfirmasiproposal');
});
    Route::get('/pla/konfirmasiskripsi', function () {
    return view('pla.konfirmasiskripsi');
});
    Route::get('/kegiatan/publikasi', function () {
    return view('kegiatan.publikasi');
});
    Route::get('/kegiatan/input', function () {
    return view('kegiatan.input');
});
    Route::get('/kegiatan/pengajuan_kegiatan', function(){
    	return view('kegiatan.pengajuan_kegiatan');
    });

      Route::get('/kegiatan/admin', function(){
    	return view('kegiatan.admin');
    });

	Route::get('/kegiatan/dokumentasi', function () {
    return view('kegiatan.dokumentasi');
});
	Route::get('/kegiatan/input', function () {
    return view('kegiatan.input');
});

Route::get('/karyawan', function () {
    return view('mahasiswa.karyawan');
});

Route::get('/karyawan/ver-bio', function () {
    return view('mahasiswa.ver_bio');
});

Route::get('/karyawan/ver-pres', function () {
    return view('mahasiswa.ver_pres');
});

Route::get('/karyawan/ver-pen', function () {
    return view('mahasiswa.ver_pen');
});

Route::get('/karyawan/ver-pres-more', function () {
    return view('mahasiswa.ver_pres_more');
});

Route::get('/karyawan/ver-bio-more', function () {
    return view('mahasiswa.ver_bio_more');
});

Route::get('/karyawan/ver-pen-more', function () {
    return view('mahasiswa.ver_pen_more');
});

   
    Route::get('/dosen/laporan/laporan', function () {
    return view('dosen.laporan.laporan');
});
    Route::get('/dosen/laporan/isilaporan', function () {
    return view('dosen.laporan.isilaporan');
     
});
    Route::get('/karyawan/regis', function () {
    return view('mahasiswa.registrasi_akun');
});
    Route::get('/mahasiswa/ubah-pass', function () {
    return view('mahasiswa.ubah_pass_mhs');
});
    Route::get('/kurikulum/kode/cpmatkul', function () {
    return view('/kurikulum/kode/index-cpmatkul');
});
    Route::get('/kurikulum/kode/cplprodi', function () {
    return view('/kurikulum/kode/index-cplprodi');
});
    Route::get('/pla/permohonansurat', function () {
    return view('pla.permohonansurat');
});
    Route::get('/krs-khs/input_ruang', function () {
    return view('krs-khs/input_ruang');

});

        Route::get('/krs-khs/input_jadwal', function () {
    return view('krs-khs/input_jadwal');
});
        

    Route::get('/dosen/pengabdianmasyarakat', function () {
    return view('dosen.pengabdianmasyarakat');
    });
    Route::get('/dosen/pengmas/pengmas', function () {
    return view('dosen.pengmas.pengmas');
});
    Route::get('kurikulum/rps/index', function () {
    return view('kurikulum.rps.index');
});
    Route::get('kurikulum/detail-rps', function () {
    return view('kurikulum.rps.index-rps');
});
    Route::get('kurikulum/tambah-rps', function () {
    return view('kurikulum.rps.index-add-rps');
});   


    Route::get('/pla/permohonan_ruangan_user', function () {
    return view('pla.permohonan_ruangan_user');
});



    Route::get('/dosen/penelitian/penelitian',function()
{ return view('dosen.penelitian.penelitian'); 
});

     Route::get('/monsi/form-editskripsi', function () {
    return view('monsi.form-editskripsi');
});
     Route::get('/monsi/form-viewskripsi', function () {
    return view('monsi.form-viewskripsi');
});
    
    Route::get('/dosen/jurnal/', function () {
    return view('dosen.jurnal.jurnal');
});
    Route::get('/dosen/jurnal/create', function () {
    return view('dosen.jurnal.create');
});
    Route::get('/dosen/jurnal/edit', function () {
    return view('dosen.jurnal.edit');
});
    
    

Route::get('/dosen/penelitian/create',function()
{ return view('dosen.penelitian.create'); 
});
Route::get('/dosen/penelitian/edit',function()
{ return view('dosen.penelitian.edit'); 
});

    Route::get('/krs-khs/form_khs', function () {
    return view('krs-khs.form_khs');
    });
    Route::get('/krs-khs/histori_nilai', function () {
    return view('krs-khs.histori_nilai');
    });
    Route::get('/krs-khs/detail_nilai_RPL', function () {
    return view('krs-khs.detail_nilai_RPL');
    });
    Route::get('/krs-khs/detail_nilai_BD', function () {
    return view('krs-khs.detail_nilai_BD');
    });
    Route::get('/krs-khs/krs', function () {
    return view('krs-khs/contoh');
    });
    Route::get('/monsi/form-dataskripsi', function () {
    return view('monsi.form-dataskripsi');
    });
    Route::get('/krs-khs/input_nilai', function () {
    return view('krs-khs.input_nilai');
    });
    Route::get('/monsi/form-dataskripsi', function () {
    return view('monsi.form-dataskripsi');
  	});
  	

    Route::get('add-asset', 'HomeController@input');
    Route::get('view-asset', 'HomeController@index');
    });
    Route::get('/krs-khs/krs', function () {
    return view('krs-khs/contoh');
    });
    Route::get('/monsi/form-dataskripsi', function () {
    return view('monsi.form-dataskripsi');
    });
    Route::get('/dosen/penelitian', function () {
    return view('dosen.penelitian.create');
    });
    Route::get('/dosen/konferensi/konferensi', function () {
    return view('dosen.konferensi.konferensi');
	}); 
     Route::get('/dosen/konferensi/create', function () {
    return view('dosen.konferensi.create');
	}); 
	Route::get('/dosen/konferensi/edit', function () {
    return view('dosen.konferensi.edit');
    });
    Route::get('/monsi/form_uploadproposal', function () {
    return view('monsi.form_uploadproposal');

});
    Route::get('/kurikulum/cpbelajar/', function () {
    return view('kurikulum.cpbelajar.index');
});
    Route::get('/kurikulum/cpbelajar/tambah', function () {
    return view('kurikulum.cpbelajar.tambahcpbelajar');

    });
    Route::get('/monsi/tabel_judul', function () {
    return view('monsi.tabel_judul');
    });
    Route::get('/monsi/download_file', function (){
    return view('monsi.download_file');
    });
    Route::get('/monsi/upload-bimbingan', function () {
    return view('monsi.upload-bimbingan');
    });
    Route::get('/monsi/view-bimbingan', function () {
    return view('monsi.view-bimbingan');
    });
    Route::get('/monsi/tabel-mhs2', function () {
    return view('monsi.tabel-mhs2');
    });
    Route::get('/monsi/tabel-mhs', function () {
    return view('monsi.tabel-mhs');
    });
    Route::get('input-maintenance', 'MaintenanceController@inputMaintenance');
    Route::get('index-maintenance', 'MaintenanceController@index');
    Route::get('view-maintenance', 'MaintenanceController@viewDetail');

    Route::get('input-peminjaman', 'PeminjamanController@inputPeminjaman');
    Route::get('index-peminjaman', 'PeminjamanController@index');
    Route::get('view-peminjaman', 'PeminjamanController@viewDetail');

    Route::get('add-asset', 'HomeController@input');
    Route::get('view-asset', 'HomeController@index');

    Route::get('input-peminjaman', 'PeminjamanController@inputPeminjaman');
    Route::get('index-peminjaman', 'PeminjamanController@index');
    Route::get('view-peminjaman', 'PeminjamanController@viewDetail');



     Route::get('/monsi/sidang_proposal', function () {
    return view('monsi.sidang-proposal');

    });

    Route::get('index-peminjaman', 'PeminjamanController@index');
    Route::get('index-maintenance', 'MaintenanceController@index');

    Route::get('input-maintenance', 'MaintenanceController@inputMaintenance');
    Route::get('index-maintenance', 'MaintenanceController@index');
    Route::get('view-maintenance', 'MaintenanceController@viewDetail');

    Route::get('input-peminjaman', 'PeminjamanController@inputPeminjaman');
    Route::get('index-peminjaman', 'PeminjamanController@index');
    Route::get('view-peminjaman', 'PeminjamanController@viewDetail');

    Route::get('add-asset', 'HomeController@input');
    Route::get('view-asset', 'HomeController@index');
    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
    Route::get('/pla/permohonan_ruangan_admin', function () {
    return view('pla.permohonan_ruangan_admin');

    });
     Route::get('/monsi/sidang_skripsi', function () {
    return view('monsi.sidang-skripsi');

    });

      Route::get('/monsi/jadwal_sidang_proposal_mhs', function () {
    return view('monsi.lihat-jadwal-sidang-proposal');

    });

       Route::get('/monsi/jadwal_sidang_proposal_dosen', function () {
    return view('monsi.lihat-jadwal-sidang-proposal-dosen');

    });

         Route::get('/monsi/jadwal_sidang_skripsi_mhs', function () {
    return view('monsi.lihat-jadwal-sidang-skripsi');


    });
Route::get('/kegiatan/kalender', function () {
    return view('kegiatan.kalender');
});
Route::get('/kegiatan/inputkalender', function () {
    return view('kegiatan.inputkalender');
    });
          Route::get('/monsi/jadwal_sidang_skripsi_dosen', function () {
    return view('monsi.lihat-jadwal-sidang-skripsi-dosen');

    });


    Route::get('/dosen/pengmas/edit', function () {
    return view('dosen.pengmas.edit');
});
    Route::get('/dosen/pengmas/create', function () {
    return view('dosen.pengmas.create');

});


});



    Route::get('/mahasiswa/lihat-jadwal-sidang-proposal', function () {
    return view('mahasiswa.lihat-jadwal-sidang-proposal');


});

    Route::get('/mahasiswa/input/', function () {
    return view('mahasiswa.input_biodata');
});
    Route::get('/mahasiswa/edit/', function () {
    return view('mahasiswa.edit_biodata');
});
   Route::get('/mahasiswa/view/', function () {
    return view('mahasiswa.view_biodata');
});
   });


Route::group(['middleware' => ['auth']], function () {

    // Modul Mahasiswa
    Route::group(['prefix' => 'mahasiswa'], function() {
    // Url nya taruh disini
        Route::get('penelitian', function () {
            return view('mahasiswa.penelitian');
        });

        Route::get('input_penelitian', function () {
            return view('mahasiswa.input_penelitian');
        });

        Route::get('edit_penelitian', function () {
            return view('mahasiswa.edit_penelitian');
        });

        Route::get('prestasi', function () {
            return view('mahasiswa.tabel');
        });

        Route::get('input_prestasi', function () {
            return view('mahasiswa.input_prestasi');
        });

        Route::get('edit_prestasi', function () {
            return view('mahasiswa.edit_prestasi');
        });

        Route::get('tabel_berhasil', function () {
            return view('mahasiswa.tabel_berhasil');
        });

        Route::get('ubah-pass', function () {
            return view('mahasiswa.ubah_pass_mhs');
        });

    });

    // Modul KRS & KHS
    Route::group(['prefix' => 'krs-khs'], function() {
        Route::get('mk', function () {
            return view('krs-khs.mk');
        });

        Route::get('mk/bobot', function () {
            return view('krs-khs.bobot');
        });

        Route::get('mk/input_nilai', function () {
            return view('krs-khs.input_nilai');
        });

        Route::get('dosen_mk', function () {
            return view('krs-khs.input_dosen_mk');
        });

        Route::get('approve', function () {
            return view('krs-khs.approve');
        });

        Route::get('approve1', function () {
            return view('krs-khs.approve1');
        });

        Route::get('buka', function () {
            return view('krs-khs.buka');
        });

        Route::get('form_khs', function () {
        return view('krs-khs.form_khs');
        });

        Route::get('histori_nilai', function () {
        return view('krs-khs.histori_nilai');
        });

        Route::get('detail_nilai_RPL', function () {
        return view('krs-khs.detail_nilai_RPL');
        });

        Route::get('detail_nilai_BD', function () {
        return view('krs-khs.detail_nilai_BD');
        });

        Route::get('krs', function () {
        return view('krs-khs.contoh');
        });

        Route::get('input_ruang', function () {
        return view('krs-khs/input_ruang');
        });

        Route::get('input_jadwal', function () {
        return view('krs-khs/input_jadwal');
        });

    });
    
    // Modul Kurikulum
    Route::group(['prefix' => 'kurikulum'], function() {

        Route::get('silabus', function () {
        return view('kurikulum.silabus.index'); 
        });

        Route::get('detail-silabus', function () {
            return view('kurikulum.silabus.index-silabus'); 
        });

        Route::get('create-silabus', function () {
            return view('kurikulum.silabus.index-createsilabus');
        });

        Route::get('kode', function () {
        return view('kurikulum.kode.index');
        });

        Route::get('rps', function () {
        return view('kurikulum.rps.index');
        });

        Route::get('detail-rps', function () {
        return view('kurikulum.rps.index-rps');
        });

        Route::get('kode/cplprodi', function () {
        return view('/kurikulum/kode/index-cplprodi');
        });

        Route::get('kurikulum/rps/', function () {
        return view('kurikulum.rps.index');
        });

        Route::get('kurikulum/detail-rps', function () {
        return view('kurikulum.rps.index-rps');
        });

        Route::get('kurikulum/tambah-rps', function () {
        return view('kurikulum.rps.index-add-rps');
        });

        Route::get('kode/cpmatkul', function () {
        return view('kurikulum.kode.index-cpmatkul');
        });
    });

    // Modul Dosen
    Route::group(['prefix' => 'dosen'], function() {
        Route::get('penelitian', function () {
            return view('dosen.penelitian.create');
        });

        Route::get('laporan/laporan', function () {
            return view('dosen.laporan.laporan');
        });

        Route::get('laporan/isilaporan', function () {
            return view('dosen.laporan.isilaporan'); 
        });
        Route::get('jurnal/', function () {
            return view('dosen.jurnal.jurnal');
        });
        Route::get('jurnal/create', function () {
            return view('dosen.jurnal.create');
        });
        Route::get('jurnal/edit', function () {
            return view('dosen.jurnal.edit');
        }); 

        Route::get('penelitian/create',function(){ 
            return view('dosen.penelitian.create'); 
        });

        Route::get('penelitian/edit',function(){ 
            return view('dosen.penelitian.edit'); 
        });

        Route::get('pengabdianmasyarakat', function () {
            return view('dosen.pengabdianmasyarakat');
        });
        
        Route::get('pengmas/pengmas', function () {
            return view('dosen.pengmas.pengmas');
        });

        Route::get('pengmas/edit', function () {
            return view('dosen.pengmas.edit');
        });

        Route::get('pengmas/create', function () {
            return view('dosen.pengmas.create');
        });

        Route::get('penelitian/penelitian',function(){ 
            return view('dosen.penelitian.penelitian'); 
        });

        Route::get('penelitian/create', function () {
            return view('dosen.penelitian.create');
        });

        Route::get('konferensi/konferensi', function () {
            return view('dosen.konferensi.konferensi');
        });

        Route::get('konferensi/create', function () {
            return view('dosen.konferensi.create');
        });

        Route::get('konferensi/edit', function () {
            return view('dosen.konferensi.edit');
        });

    });

    // Modul Kegiatan
    Route::group(['prefix' => 'kegiatan'], function() {

        Route::get('input_lpj', function () {
            return view('kegiatan.contoh');
        });

        Route::get('publikasi', function () {
            return view('kegiatan.publikasi');
        });

        Route::get('input', function () {
            return view('kegiatan.input');
        });

        Route::get('pengajuan_kegiatan', function(){
            return view('kegiatan.pengajuan_kegiatan');
        });

        Route::get('admin', function(){
            return view('kegiatan.admin');
        });

        Route::get('dokumentasi', function () {
            return view('kegiatan.dokumentasi');
        });

        Route::get('input', function () {
            return view('kegiatan.input');
        });

        Route::get('viewlpj', function () {
            return view('kegiatan.viewlpj');
        });

        Route::get('postpertama', function () {
            return view('kegiatan.postpertama');
        });

        Route::get('adminview', function () {
            return view('kegiatan.adminview');
        });
        
        Route::get('kalender', function () {
            return view('kegiatan.kalender');
        });

        Route::get('inputkalender', function () {
            return view('kegiatan.inputkalender');
        });

    });

    // Modul PLA
    Route::group(['prefix' => 'pla'], function() {
    
        Route::get('konfirmasiproposal', function () {
            return view('pla.konfirmasiproposal');
        });

        Route::get('konfirmasiskripsi', function () {
            return view('pla.konfirmasiskripsi');
        });

        Route::get('permohonansurat', function () {
            return view('pla.permohonansurat');
        });

        Route::get('permohonan_ruangan_user', function () {
            return view('pla.permohonan_ruangan_user');
        });

        Route::get('permohonan_ruangan_admin', function () {
            return view('pla.permohonan_ruangan_admin');
        });

    });

    // Modul Notulensi
    Route::group(['prefix' => 'notulensi'], function() {

        Route::get('daftarnotulensi', function () {
            return view('notulensi.daftarnotulensi');
        });

        Route::get('formnotulensi', function () {
            return view('notulensi.formnotulensi');
        });

        Route::get('kirimnotulensi', function () {
            return view('notulensi.kirimnotulensi');
        });

        Route::get('notulensi/ViewDaftarHasil', function () {
            return view('notulensi.notulensi.ViewDaftarHasil');
        });

        Route::get('notulensi/ViewEditNotulensi', function () {
            return view('notulensi.notulensi.ViewEditNotulensi');
        });

    });

    // Ini nanti aja ya
    Route::group(['prefix' => 'karyawan'], function() {

        Route::get('/', function () {
            return view('mahasiswa.karyawan');
        });

        Route::get('ver-bio', function () {
            return view('mahasiswa.ver_bio');
        });

        Route::get('ver-pres', function () {
            return view('mahasiswa.ver_pres');
        });

        Route::get('ver-pen', function () {
            return view('mahasiswa.ver_pen');
        });

        Route::get('ver-pres-more', function () {
            return view('mahasiswa.ver_pres_more');
        });

        Route::get('ver-bio-more', function () {
            return view('mahasiswa.ver_bio_more');
        });

        Route::get('ver-pen-more', function () {
            return view('mahasiswa.ver_pen_more');
        });

        Route::get('regis', function () {
            return view('mahasiswa.registrasi_akun');
        });

    });

    // Modul Monitoring Skripsi
    Route::group(['prefix' => 'monsi'], function() {

        Route::get('form-editskripsi', function () {
            return view('monsi.form-editskripsi');
        });

        Route::get('form-viewskripsi', function () {
            return view('monsi.form-viewskripsi');
        });
        
        Route::get('form-dataskripsi', function () {
            return view('monsi.form-dataskripsi');
        });
        
        Route::get('form-dataskripsi', function () {
            return view('monsi.form-dataskripsi');
        });

        Route::get('form-dataskripsi', function () {
            return view('monsi.form-dataskripsi');
        });

        Route::get('form_uploadproposal', function () {
            return view('monsi.form_uploadproposal');
        });

        Route::get('tabel_judul', function () {
            return view('monsi.tabel_judul');
        });

        Route::get('download_file', function (){
            return view('monsi.download_file');
        });

        Route::get('upload-bimbingan', function () {
            return view('monsi.upload-bimbingan');
        });

        Route::get('view-bimbingan', function () {
            return view('monsi.view-bimbingan');
        });

        Route::get('tabel-mhs2', function () {
            return view('monsi.tabel-mhs2');
        });

        Route::get('tabel-mhs', function () {
            return view('monsi.tabel-mhs');
        });

        Route::get('sidang_proposal', function () {
            return view('monsi.sidang-proposal');
        });

        Route::get('sidang_skripsi', function () {
            return view('monsi.sidang-skripsi');
        });

        Route::get('jadwal_sidang_proposal_mhs', function () {
            return view('monsi.lihat-jadwal-sidang-proposal');
        });

        Route::get('jadwal_sidang_proposal_dosen', function () {
            return view('monsi.lihat-jadwal-sidang-proposal-dosen');
        });

        Route::get('jadwal_sidang_skripsi_mhs', function () {
            return view('monsi.lihat-jadwal-sidang-skripsi');
        });

        Route::get('jadwal_sidang_skripsi_dosen', function () {
            return view('monsi.lihat-jadwal-sidang-skripsi-dosen');
        });

    });

    // Modul Inventaris
    Route::group(['prefix' => 'inventaris'], function() {

        Route::get('add-asset', 'HomeController@input');
        Route::get('view-asset', 'HomeController@index');
        Route::get('input-maintenance', 'MaintenanceController@inputMaintenance');
        Route::get('index-maintenance', 'MaintenanceController@index');
        Route::get('view-maintenance', 'MaintenanceController@viewDetail');

        Route::get('input-peminjaman', 'PeminjamanController@inputPeminjaman');
        Route::get('index-peminjaman', 'PeminjamanController@index');
        Route::get('view-peminjaman', 'PeminjamanController@viewDetail');

        Route::get('add-asset', 'HomeController@input');
        Route::get('view-asset', 'HomeController@index');

        Route::get('input-peminjaman', 'PeminjamanController@inputPeminjaman');
        Route::get('index-peminjaman', 'PeminjamanController@index');
        Route::get('view-peminjaman', 'PeminjamanController@viewDetail');

    });
    

}); 




