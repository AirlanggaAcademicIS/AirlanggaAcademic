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
        $tahun = BiodataMahasiswa::where('nim_id',Auth::user()->username)->first();
        $tahun = $tahun->angkatan;
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'biodatamahasiswa',
            // Memanggil semua isi dari tabel biodata
            'biodatamahasiswa' => BiodataMahasiswa::where('angkatan',$tahun)->get()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('mahasiswa.biodata-mahasiswa.index',$data);
        // $username = Auth::user()->username;
        // dd($username);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'biodatamahasiswa',
        ];

        // Memanggil tampilan form create
    	return view('mahasiswa.biodata-mahasiswa.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
       $bio=$request->input();
       $bio['nim_id'] = Auth::user()->username;

         // dd(Auth::user()->username() ;

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Biodata Mahasiswa berhasil diinputkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('mahasiswa/biodata-mahasiswa');
    }

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
        $getBiodataMhs = BiodataMahasiswa::find($id_bio);

       if ($getBiodataMhs->nama_mhs == $request->input('nama_mhs')||$getBiodataMhs->email_mhs == $request->input('email_mhs')||$getBiodataMhs->jenis_kelamin == $request->input("jenis_kelamin")||$getBiodataMhs->negara_asal == $request->input("negara_asal")||$getBiodataMhs->provinsi_asal == $request->input("provinsi_asal")||$getBiodataMhs->provinsi_asal == $request->input("provinsi_asal")||$getBiodataMhs->kota_asal == $request->input('kota_asal')||$getBiodataMhs->kota_tinggal == $request->input('kota_tinggal')||$getBiodataMhs->alamat_tinggal == $request->input('alamat_tinggal')||$getBiodataMhs->ttl == $request->input('ttl')||$getBiodataMhs->angkatan == $request->input('angkatan')||$getBiodataMhs->agama == $request->input('agama')||$getBiodataMhs->kebangsaan == $request->input('kebangsaan')||$getBiodataMhs->sma_asal == $request->input('sma_asal')||$getBiodataMhs->nama_ayah == $request->input('nama_ayah')||$getBiodataMhs->nama_ibu == $request->input('nama_ibu')||$getBiodataMhs->deskripsi_diri == $request->input('deskripsi_diri')||$getBiodataMhs->motto == $request->input('motto')){

         Session::put('alert-warning', 'Tidak ada perubahan');
           }
        else
        {
        // Mengupdate $biodata tadi dengan isi dari form edit tadi

        $biodata_mhs->nim_id = Auth::user()->username;
        $biodata_mhs->nama_mhs = $request->input('nama_mhs');
        $biodata_mhs->email_mhs = $request->input('email_mhs');
        $biodata_mhs->jenis_kelamin = $request->input('jenis_kelamin');
        $biodata_mhs->negara_asal = $request->input('negara_asal');
        $biodata_mhs->provinsi_asal = $request->input('provinsi_asal');
        $biodata_mhs->kota_asal = $request->input('kota_asal');
        $biodata_mhs->kota_tinggal = $request->input('kota_tinggal');
        $biodata_mhs->alamat_tinggal = $request->input('alamat_tinggal');
        $biodata_mhs->ttl = $request->input('ttl');
        $biodata_mhs->angkatan = $request->input('angkatan');
        $biodata_mhs->agama = $request->input('agama');
        $biodata_mhs->kebangsaan = $request->input('kebangsaan');
        $biodata_mhs->sma_asal = $request->input('sma_asal');
        $biodata_mhs->nama_ayah = $request->input('nama_ayah');
        $biodata_mhs->nama_ibu = $request->input('nama_ibu');
        $biodata_mhs->deskripsi_diri = $request->input('deskripsi_diri');
        $biodata_mhs->motto = $request->input('motto');
        $biodata_mhs->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Biodata Mahasiswa berhasil diinputkan');{

        // Kembali ke halaman mahasiswa/biodata
    }
    }      
  return Redirect::to('mahasiswa/biodata-mahasiswa');

}}