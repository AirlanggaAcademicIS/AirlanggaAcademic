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
use Illuminate\Support\Facades\DB;
// Tambahkan model yang ingin dipakai
use App\JadwalPermohonan;
use App\PermohonanRuang;
use App\Ruang;
use Auth;

class MohonRuanganController extends Controller
{
   
    public function create()
    {
        $data = [
            //sidebar memohon ruangan
            'page' => 'memohon-ruangan',
            'ruang' => Ruang::all(),
        ];

        // Memanggil tampilan form create
        return view('mahasiswa.memohon-ruangan.index',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel jadwal permohonan dan permohonan ruang
        $permohonan = PermohonanRuang::create([
            'nama' => Auth::user()->name,
            'atribut_verifikasi' => '0',
            'nim_nip' => Auth::user()->username,
            ]);

        JadwalPermohonan::create([
            'permohonan_ruang_id' => $permohonan->id_permohonan_ruang,
            'ruang_id' => $request->input('ruang_id'),
            'hari_id' => $request->input('hari_id'),
            'jam_id' => $request->input('jam_id'),
            ]);
        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Permohonan berhasil ditambahkan');

        // Kembali ke halaman
        return Redirect::to('/memohon-ruangan');
    }


}