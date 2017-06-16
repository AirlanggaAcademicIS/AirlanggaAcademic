<?php 

namespace App\Http\Controllers\Karyawan\PLA;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\Surat_Masuk;
use App\Petugas_Tu;
use App\MahasiswaPengajuan;
use App\DosenPengajuan;

class Surat_MasukController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar surat masuk
            'page' => 'surat-masuk',
            // Memanggil semua isi dari tabel surat masuk
            'surat_masuk' => Surat_Masuk::all()
        ];

        // Memanggil tampilan index di folder karyawan dan juga menambahkan $data tadi di view
        return view('karyawan.pla.surat-masuk.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar surat masuk
            'page' => 'surat-masuk',

            'petugas' => Petugas_Tu::all()
        ];

        // Memanggil tampilan form create
        return view('karyawan.pla.surat-masuk.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel surat masuk
        $terdaftarm = MahasiswaPengajuan::pluck('nim')->toArray();
        $terdaftard = DosenPengajuan::pluck('nip')->toArray();
        $nim_nip = $request->input('nim_nip');
        $terdaftar = array_merge($terdaftarm,$terdaftard);
        if(!in_array($nim_nip,$terdaftar)){
        Session::put('alert-danger', 'NIM atau NIP tidak terdaftar');
        return Redirect::back();
        }
        
        $surat_masuk=$request->input();
        $surat_masuk['status'] = '0';
        $surat_masuk['nip_petugas_id'] = Auth::user()->username;
        Surat_Masuk::create($surat_masuk);

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Surat berhasil ditambahkan');

        // Kembali ke halaman karyawan/surat masuk
        return Redirect::to('karyawan/surat-masuk');
    }

    public function delete($id)
    {
        // Mencari surat masuk berdasarkan id dan memasukkannya ke dalam variabel $surat_masuk
        $surat_masuk = Surat_Masuk::find($id);

        // Menghapus surat masuk yang dicari tadi
        $surat_masuk->delete();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Surat berhasil dihapus');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }

   public function edit($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar surat masuk
            'page' => 'surat-masuk',
            // Mencari surat masuk berdasarkan id
            'surat_masuk' => Surat_Masuk::find($id)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('karyawan.pla.surat-masuk.edit',$data);
    }

    public function editAction($id, Request $request)
    {
        // Mencari surat masuk yang akan di update dan menaruhnya di variabel $surat_masuk
        $surat_masuk = Surat_Masuk::find($id);

        // Mengupdate $surat masuk tadi dengan isi dari form edit tadi
        $surat_masuk->no_surat_masuk = $request->input('no_surat_masuk');
        $request->input('nip_petugas_id');
        $surat_masuk->nama_lembaga = $request->input('nama_lembaga');
        $surat_masuk->judul_surat_masuk = $request->input('judul_surat_masuk');
        $surat_masuk->nim_nip = $request->input('nim_nip');
        $surat_masuk->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Surat berhasil diedit');

        // Kembali ke halaman karyawan/surat masuk
        return Redirect::to('karyawan/surat-masuk');
    }

    public function terambil($id)
    {
        $surat_masuk = Surat_Masuk::find($id);
        $surat_masuk->status = '1';
        $surat_masuk->save();

        Session::put('alert-success', 'Status surat telah berubah menjadi Sudah Diambil');
        // kembali ke halaman awal
        return Redirect::back();
    }


}