<?php 

namespace App\Http\Controllers\Dosen\PLA;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
use Illuminate\Support\Facades\DB;
// Tambahkan model yang ingin dipakai
use App\Surat_Keluar_Dosen;
use App\DosenPemohonSurat;
use App\DosenPengajuan;


class Surat_Keluar_DosenController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar 
            'page' => 'surat-keluar-dosen',
            // Memanggil semua isi dari tabel 
            'dosen_pemohon_surat' =>DosenPemohonSurat::all(),
            'surat_keluar_dosen' =>DB::table('surat_keluar_dosen')
            ->join('dosen_pemohon_surat', 'surat_keluar_dosen.id_surat_keluar', '=', 'dosen_pemohon_surat.surat_keluar_id')
            //->orderBy('create_at', 'desc')
            ->select('*')
            ->get(),
        ];

        // Memanggil tampilan index di folder mahasiswa/ dan juga menambahkan $data tadi di view
        return view('dosen.pla.surat-keluar-dosen.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar 
            'page' => 'surat-keluar-dosen',
        ];

        // Memanggil tampilan form create
        return view('dosen.pla.surat-keluar-dosen.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel 
  
        // $akun = Surat_Keluar_Mhs::create($request->input()); 
        // $akun->nip_petugas_id = $request->input('nip_petugas_id');
        // $akun->nama_lembaga = $request->input('nama_lembaga');
        // $akun->nama = $request->input('nama');
        // $akun->alamat = $request->input('alamat');
        // $akun->tgl_upload = $request->input('tgl_upload');
        // $akun->save();
        $terdaftar = DosenPengajuan::pluck('nip')->toArray();
        $nip = explode(',', $request->input('nip_id'));
        foreach ($nip as $p) {
            if(!in_array($p, $terdaftar)){
        Session::put('alert-danger', 'NIP tidak terdaftar');
        return Redirect::back();
    }
        }

        $surat = Surat_Keluar_Dosen::create([
            //'nip_petugas_id' => $request->input('nip_petugas_id'),
            'nama' => $request->input('nama'),
            'tgl_upload' => $request->input('tgl_upload'),
            'status' => 0
            ]);        
        
        foreach ($nip as $p) {
        $pemohon = DosenPemohonSurat::create([
            'nip_id'=> $p,
            'surat_keluar_id'=> $surat->id_surat_keluar
            ]);
        }

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Surat berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/
        return Redirect::to('dosen/surat-keluar-dosen');
    }

    public function delete($id_surat_keluar)
    {
        // Mencari  berdasarkan id dan memasukkannya ke dalam variabel $
        $surat_keluar_dosen = Surat_Keluar_Dosen::find($id_surat_keluar);

        // Menghapus  yang dicari tadi
        $surat_keluar_dosen->delete();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Surat berhasil dihapus');

    // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }

   public function edit($id_surat_keluar)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar 
            'page' => 'surat-keluar-dosen',
            // Mencari  berdasarkan id
            'surat_keluar_dosen' => Surat_Keluar_Dosen::find($id_surat_keluar)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('dosen.pla.surat-keluar-dosen.edit',$data);
    }

    public function editAction($id_surat_keluar_dosen, Request $request)
    {
        // Mencari  yang akan di update dan menaruhnya di variabel $
        $surat_keluar_dosen = Surat_Keluar_Dosen::find($id_surat_keluar_dosen);

        // Mengupdate $ tadi dengan isi dari form edit tadi
        
        //$surat_keluar_dosen->nip_petugas_id = $request->input('nip_petugas_id');
        $surat_keluar_dosen->nama = $request->input('nama');
        $surat_keluar_dosen->tgl_upload = $request->input('tgl_upload');
        $surat_keluar_dosen->status = '0';
        $surat_keluar_dosen->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Surat berhasil diedit');

        // Kembali ke halaman mahasiswa/
        return Redirect::to('dosen/surat-keluar-dosen');
    }

}