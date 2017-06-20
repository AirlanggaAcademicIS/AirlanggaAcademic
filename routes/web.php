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

        Route::group(['prefix' => 'dosen'], function() {
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
            //fitur capaian pembelejaran (modul kurikulum)
            Route::group(['prefix' => 'capaian-pembelajaran'], function() {
                Route::get('/','Dosen\Kurikulum\CapaianPembelajaranController@index');
                Route::get('create','Dosen\Kurikulum\CapaianPembelajaranController@create');
                Route::post('create','Dosen\Kurikulum\CapaianPembelajaranController@createAction');
                Route::get('/{id_cpem}/delete','Dosen\Kurikulum\CapaianPembelajaranController@delete');
                Route::get('/{id_cpem}/edit','Dosen\Kurikulum\CapaianPembelajaranController@edit');
                Route::post('/{id_cpem}/edit','Dosen\Kurikulum\CapaianPembelajaranController@editAction');
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
            //fitur kategori cp pembelajaran (modul kurikulum)
            Route::group(['prefix' => 'kodecppem'], function() {
                Route::get('/','Dosen\Kurikulum\KategoriCpPemController@index');
                Route::post('create','Dosen\Kurikulum\KategoriCpPemController@createAction');
                Route::get('/delete/{id}','Dosen\Kurikulum\KategoriCpPemController@delete');
                Route::get('/edit/{id}','Dosen\Kurikulum\KategoriCpPemController@edit');
                Route::post('/edit/{id}','Dosen\Kurikulum\KategoriCpPemController@editAction');
            });
            //fitur e-learning (modul kurikulum)
            Route::group(['prefix' => 'elearning'], function() {
                Route::get('/','Dosen\Kurikulum\ElearningController@index');
                Route::get('create','Dosen\Kurikulum\ElearningController@create');
                Route::post('create','Dosen\Kurikulum\ElearningController@createAction');
            }); 
        });
        });

        Route::group(['prefix' => 'karyawan'], function() {
        Route::group(['prefix' => 'kurikulum'], function() {
            //fitur mata kuliah (modul kurikulum)
            Route::group(['prefix' => 'inputmatkul'], function() {
                Route::get('/','Karyawan\Kurikulum\InputMatkulController@index');
                Route::get('create','Karyawan\Kurikulum\InputMatkulController@create');
                Route::post('create','Karyawan\Kurikulum\InputMatkulController@createAction');
                Route::get('delete/{id}','Karyawan\Kurikulum\InputMatkulController@delete');
                Route::get('edit/{id}','Karyawan\Kurikulum\InputMatkulController@edit');
                Route::post('edit/{id}','Karyawan\Kurikulum\InputMatkulController@editAction');
            });
            //fitur mata kuliah (modul kurikulum)
            Route::group(['prefix' => 'mk-prodi'], function() {
                Route::get('/','Karyawan\Kurikulum\MkProdiController@index');
                Route::get('pilih/{id}','Karyawan\Kurikulum\MkProdiController@pilihAction');
                Route::get('delete/{id}','Karyawan\Kurikulum\MkProdiController@delete');       
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
        //ftiur rps (modul kurikulum)
            Route::group(['prefix' => 'rps'], function() {
                Route::get('/','Karyawan\Kurikulum\RPSController@index');
                Route::get('detail/{id}','Karyawan\Kurikulum\RPSController@detail');
                Route::get('pdf/{id}','Karyawan\Kurikulum\RPSController@pdf');  
            });
        });
        });

        Route::group(['prefix' => 'mahasiswa'], function() {    
        Route::group(['prefix' => 'kurikulum'], function() {   
            //fitur silabus     
            Route::group(['prefix' => 'silabus'], function(){
                Route::get('/','Mahasiswa\Kurikulum\SilabusController@index');
                Route::get('edit/{id}','Mahasiswa\Kurikulum\SilabusController@edit');
                Route::get('pdf/{id}','Mahasiswa\Kurikulum\SilabusController@pdf');                    
            });
            //fitur rps
            Route::group(['prefix' => 'rps'], function() {
                Route::get('/','Mahasiswa\Kurikulum\RPSController@index');
                Route::get('detail/{id}','Mahasiswa\Kurikulum\RPSController@detail');
                Route::get('print/{id}','Mahasiswa\Kurikulum\MataKuliahController@toPdf');
                Route::get('pdf/{id}','Mahasiswa\Kurikulum\RPSController@pdf');                    
            });
            //fitur cp program
            Route::group(['prefix' => 'cp_program'], function() {
                Route::get('/','Mahasiswa\Kurikulum\CapaianProgramController@index');
            });
            //fitur cp pembelajaran
            Route::group(['prefix' => 'capaian-pembelajaran'], function() {
                Route::get('/','Mahasiswa\Kurikulum\CapaianPembelajaranController@index');
            });
            //fitur elearning
            Route::group(['prefix' => 'elearning'], function() {
                Route::get('/','Mahasiswa\Kurikulum\elearningMahasiswaController@index');
                Route::get('/{nama_file}/download','Mahasiswa\Kurikulum\elearningMahasiswaController@download');
            });
        });              
        });
    });         