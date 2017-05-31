<<<<<<< HEAD
=======
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

Route::get('dosen/monitoring-skripsi/skripsi','Dosen\monitoringskripsi\SkripsiController@index');


Route::get('dosen/monitoring-skripsi/skripsi/mhs','Dosen\monitoringskripsi\SkripsiController@show');


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

});

/*
=========================================
Route buat dosen ditaruh dibawah sini
=========================================
*/
        


/*
==========================================
Route buat karyawan ditaruh dibawah sini
==========================================
*/
	
Route::group(['prefix' => 'karyawan'], function() {
		
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


});
>>>>>>> e0176de769951ffba73e6bb47bfda76f26da12ec
