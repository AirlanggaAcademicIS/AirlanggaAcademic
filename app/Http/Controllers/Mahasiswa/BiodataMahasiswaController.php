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
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'biodatamahasiswa',
            // Memanggil semua isi dari tabel biodata
            'biodatamahasiswa' => BiodataMahasiswa::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('mahasiswa.biodata-mahasiswa.index',$data);
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
        $bio['nim_id']=Auth::user()->username;
        BiodataMahasiswa::create($bio);

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Biodata berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('mahasiswa/biodata-mahasiswa');
    }

    public function delete($id_bio)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $biodata_mhs = BiodataMahasiswa::find($id_bio);

        // Menghapus biodata yang dicari tadi
        $biodata_mhs->delete();

        // Menampilkan notifikasi pesan sukses
    	Session::put('alert-success', 'Biodata berhasil dihapus');

        // Kembali ke halaman sebelumnya
      	return Redirect::back();	 
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

        // Mengupdate $biodata tadi dengan isi dari form edit tadi

        $biodata_mhs->nim_id = $request->input('nim_id');
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
        Session::put('alert-success', 'Biodata berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('mahasiswa/biodata-mahasiswa');
    }

}