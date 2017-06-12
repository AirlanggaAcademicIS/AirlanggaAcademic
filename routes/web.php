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

Route::get('/test', function () {
    return view('karyawan.inventaris.asset.qrcode');
});


Route::get('/',['as'=>'admin.index', 'uses'=>'HomeController@index']);  

Route::group(['middleware' => 'auth'], function () {  
Route::get('/logout', 'Auth\LoginController@logout');  

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