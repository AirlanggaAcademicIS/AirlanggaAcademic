<?php 

namespace App\Http\Controllers\Karyawan;

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

        JadwalPermohonan::create($request->input());
        PermohonanRuang::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Permohonan berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('mahasiswa.memohon-ruangan.index');
    }


}