<?php
Route::get('/',['as'=>'admin.index', 'uses'=>'HomeController@index']);

Route::group(['middleware' => 'auth'], function () {
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/dosen/laporan', 'Dosen\LaporanController@index');
Route::get('/dosen/laporan/pilih', 'Dosen\LaporanController@pilih');
Route::get('/dosen/laporan/cetak', 'Dosen\LaporanController@cetak');

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
        Route::get('create/{id}','Mahasiswa\KrsKhs\KrsMhsController@createSyarat');
        // Mengupdate biodata dengan isi dari form
        Route::get('editAction/{$id}','Mahasiswa\KrsKhs\KrsMhsController@editAction');
            });

        Route::group(['prefix' => 'histori'], function(){ // Histori Nilai
            Route::get('view','Mahasiswa\KrsKhs\HistoriController@index');
            Route::get('cetak','Mahasiswa\KrsKhs\HistoriController@toPdf');
            });   
        Route::group(['prefix' => 'khs'], function(){// KHS
            Route::get('view','Mahasiswa\KrsKhs\KHSController@index');
            Route::get('show','Mahasiswa\KrsKhs\KHSController@show');
            Route::get('cetak','Mahasiswa\KrsKhs\KHSController@toPdf');
            Route::get('{mk_ditawarkan_id}/{mhs_id}/detail','Mahasiswa\KrsKhs\KHSController@detail');
            });
    });
});
Route::group(['prefix' => 'mahasiswa'], function(){
    //Fitur Kra Mahasiswa
        Route::group(['prefix' => 'krskhs'], function(){
            //Untuk folder Krs
            Route::group(['prefix' => 'krs'], function(){

        // Menampilkan form tambah biodata
        Route::get('index','Mahasiswa\KrsKhs\KrsMhsController@create');

        // Menghapus biodata sesuai id yang dipilih
        Route::get('{id}/delete','Mahasiswa\KrsKhs\KrsMhsController@delete');

        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::get('create/{id}','Mahasiswa\KrsKhs\KrsMhsController@createAction');

        // Mengupdate biodata dengan isi dari form
        Route::get('editAction/{$id}','Mahasiswa\KrsKhs\KrsMhsController@editAction');
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
            Route::get('{mk_ditawarkan_id}/{hari_id}/{ruang_id}/delete', 'Karyawan\KrsKhs\JadwalKuliahController@delete');
            Route::get('{mk_ditawarkan_id}/{hari_id}/{ruang_id}/edit', 'Karyawan\KrsKhs\JadwalKuliahController@edit');
            Route::post('{mk_ditawarkan_id}/{hari_id}/{ruang_id}/edit', 'Karyawan\KrsKhs\JadwalKuliahController@editAction');
        });
        Route::group(['prefix' => 'input-dosen-mk'], function(){
            Route::get('view','Karyawan\KrsKhs\InputDosenMKController@index');
            Route::get('show','Karyawan\KrsKhs\InputDosenMKController@show');
            Route::get('create','Karyawan\KrsKhs\InputDosenMKController@create');
            Route::post('create','Karyawan\KrsKhs\InputDosenMKController@createAction');
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

});
?>