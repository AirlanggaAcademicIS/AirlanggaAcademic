<?php 

namespace App\Http\Controllers\Karyawan\PLA;

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
use Auth;


class Surat_Keluar_DosenController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar 
            'page' => 'surat-keluar-dosen',
            // Memanggil semua isi dari tabel 
            'surat_keluar_dosen' =>DB::table('surat_keluar_dosen')
            ->join('dosen_pemohon_surat', 'surat_keluar_dosen.id_surat_keluar', '=', 'dosen_pemohon_surat.surat_keluar_id')
            //->orderBy('create_at', 'desc')
            ->select('*')
            ->orderBy('surat_keluar_dosen.created_at', 'desc')
            ->get()
        ];

        // Memanggil tampilan index di folder mahasiswa/ dan juga menambahkan $data tadi di view
        return view('karyawan.pla.surat-keluar-dosen.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar 
            'page' => 'surat-keluar-dosen',
        ];

        // Memanggil tampilan form create
        return view('karyawan.pla.surat-keluar-dosen.create',$data);
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
        $surat = Surat_Keluar_Dosen::create([
            'nip_petugas_id' =>Auth::user()->username,
            'nama' => $request->input('nama'),
            'tgl_upload' => $request->input('tgl_upload'),
            'status' => 0
            ]);        
        
        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Surat berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/
        return Redirect::to('karyawan/surat-keluar-dosen');
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
         return view('karyawan.pla.surat-keluar-dosen.edit',$data);
    }

    public function editAction($id_surat_keluar_dosen, Request $request)
    {
        // Mencari  yang akan di update dan menaruhnya di variabel $
        $surat_keluar_dosen = Surat_Keluar_Dosen::find($id_surat_keluar_dosen);

        // Mengupdate $ tadi dengan isi dari form edit tadi
        $surat_keluar_dosen->nip_petugas_id = Auth::user()->username;
        $surat_keluar_dosen->nama = $request->input('nama');
        $surat_keluar_dosen->tgl_upload = $request->input('tgl_upload');
        $surat_keluar_dosen->status = $request->input('status');
        $surat_keluar_dosen->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Surat berhasil diverifikasi');

        // Kembali ke halaman mahasiswa/
        return Redirect::to('karyawan/surat-keluar-dosen');
    }

    public function agree($id_surat_keluar)
    {
        $surat_keluar_dosen = Surat_Keluar_Dosen::find($id_surat_keluar);
        $surat_keluar_dosen->nip_petugas_id = Auth::user()->username;
        $surat_keluar_dosen->status = '1';
        $surat_keluar_dosen->save();
        // dd($data['surat_keluar_dosen']);
        Session::put('alert-success', 'Surat keluar disetujui');
        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return Redirect::back();
    }

    public function disagree($id_surat_keluar)
    {   
             
        $surat_keluar = Surat_Keluar_Dosen::find($id_surat_keluar);
        $surat_keluar->nip_petugas_id = Auth::user()->username;
        $surat_keluar->status = '2';
        $surat_keluar->save();
        // dd($data['surat_keluar_mhs']);

        Session::put('alert-danger', 'Surat keluar tidak setujui');
        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return Redirect::back();
    }

}