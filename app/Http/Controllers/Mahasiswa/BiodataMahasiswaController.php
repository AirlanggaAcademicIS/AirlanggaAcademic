<?php 

namespace App\Http\Controllers\Mahasiswa;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
use Auth;
// Tambahkan model yang ingin dipakai
use App\BiodataMahasiswa;


class BiodataMahasiswaController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        // $tahun = BiodataMahasiswa::where('nim_id',Auth::user()->username)->first();
        // $tahun = $tahun->angkatan;
        $nim = Auth::user()->username;
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'biodatamahasiswa',
            // Memanggil semua isi dari tabel biodata
            // 'biodatamahasiswa' => BiodataMahasiswa::where('nim_id', '=', $nim)->first()
            'biodatamahasiswa' => BiodataMahasiswa::all()
           
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('mahasiswa.biodata-mahasiswa.index',$data);
        // $username = Auth::user()->username;
        // dd($username);
    }

    // public function create()
    // {
    //     $data = [
    //         // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
    //         'page' => 'biodatamahasiswa',
    //     ];

    //     // Memanggil tampilan form create
    // 	return view('mahasiswa.biodata-mahasiswa.create',$data);
    // }

    // public function createAction(Request $request)
    // {
    //     // Menginsertkan apa yang ada di form ke dalam tabel biodata
    //    $bio=$request->input();
    //    $bio['nim_id'] = Auth::user()->username;

    //      // dd(Auth::user()->username() ;

    //     // Menampilkan notifikasi pesan sukses
    //     Session::put('alert-success', 'Biodata Mahasiswa berhasil diinputkan');

    //     // Kembali ke halaman mahasiswa/biodata
    //     return Redirect::to('mahasiswa/biodata-mahasiswa');
    // }

   public function edit($id_bio)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'biodatamahasiswa',
            // Mencari biodata berdasarkan id
            'biodatamahasiswa' => BiodataMahasiswa::find($id_bio)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('mahasiswa.biodata-mahasiswa.edit',$data);
    }

    public function editAction($id_bio, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
       $biodata_mhs = BiodataMahasiswa::find($id_bio);
       $biodata_mhs2 = BiodataMahasiswa::where('nim_id',$id_bio)->first();
      // dd($biodata_mhs3);
           # code...
       //dd($biodata_mhs2->nama_mhs);
       
        if ($biodata_mhs2->email_mhs!=$request->input("email_mhs")
            || $biodata_mhs2->jenis_kelamin != $request->input("jenis_kelamin") 
            || $biodata_mhs2->negara_asal!= $request->input("negara_asal")  
            || $biodata_mhs2->provinsi_asal != $request->input("provinsi_asal") 
            || $biodata_mhs2->kota_tinggal != $request->input('kota_tinggal')  
            || $biodata_mhs2->alamat_tinggal != $request->input('alamat_tinggal')  
            || $biodata_mhs2->kota_lahir != $request->input('kota_lahir')  
            || $biodata_mhs2->tanggal_lahir != $request->input('tanggal_lahir')  
            || $biodata_mhs2->no_hp != $request->input('no_hp')   
            || $biodata_mhs2->agama != $request->input('agama')  
            || $biodata_mhs2->kebangsaan != $request->input('kebangsaan')  
            || $biodata_mhs2->nama_ayah != $request->input('nama_ayah')  
            || $biodata_mhs2->nama_ibu != $request->input('nama_ibu')  
            || $biodata_mhs2->deskripsi_diri != $request->input('deskripsi_diri')  
            || $biodata_mhs2->motto != $request->input('motto'))
        {
           
          // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $biodata_mhs->nim_id = Auth::user()->username;
        $biodata_mhs->email_mhs = $request->input('email_mhs');
        $biodata_mhs->jenis_kelamin = $request->input('jenis_kelamin');
        $biodata_mhs->negara_asal = $request->input('negara_asal');
        $biodata_mhs->provinsi_asal = $request->input('provinsi_asal');
        $biodata_mhs->kota_asal = $request->input('kota_asal');
        $biodata_mhs->kota_tinggal = $request->input('kota_tinggal');
        $biodata_mhs->alamat_tinggal = $request->input('alamat_tinggal');
        $biodata_mhs->kota_lahir = $request->input('kota_lahir');  
        $biodata_mhs->tanggal_lahir = $request->input('tanggal_lahir');  
        $biodata_mhs->no_hp = $request->input('no_hp');
        $biodata_mhs->agama = $request->input('agama');
        $biodata_mhs->kebangsaan = $request->input('kebangsaan');
        $biodata_mhs->sma_asal = $request->input('sma_asal');
        $biodata_mhs->nama_ayah = $request->input('nama_ayah');
        $biodata_mhs->nama_ibu = $request->input('nama_ibu');
        $biodata_mhs->deskripsi_diri = $request->input('deskripsi_diri');
        $biodata_mhs->motto = $request->input('motto');
        $biodata_mhs->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Biodata Mahasiswa berhasil diinputkan');
    
        }       
        else
        {
             Session::put('alert-warning', 'Tidak ada perubahan Biodata Mahasiswa');
            
        }
        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('mahasiswa/biodata-mahasiswa');
    
}
}
