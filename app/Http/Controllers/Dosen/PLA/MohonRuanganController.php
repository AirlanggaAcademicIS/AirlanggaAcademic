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
use App\JadwalPermohonan;
use App\PermohonanRuang;
use App\Models\KrsKhs\Ruang;
use App\Jam;
use App\Hari;
use Auth;

class MohonRuanganController extends Controller
{
   
    public function create(Request $request)
    {

        $data = [
            //sidebar memohon ruangan
            'page' => 'memohon-ruangan',
            'ruang' => Ruang::all(),
            'jam' => Jam::all(),
            'hari' => Hari::all(),
            'permohonan' => DB::table('jadwal_permohonan')
            ->join('permohonan_ruang', 'jadwal_permohonan.permohonan_ruang_id', '=', 'permohonan_ruang.id_permohonan_ruang')
            ->join('ruang', 'jadwal_permohonan.ruang_id', '=', 'ruang.id_ruang')
            ->join('hari', 'jadwal_permohonan.hari_id', '=', 'hari.id_hari')
            ->join('jam', 'jadwal_permohonan.jam_id', '=', 'jam.id_jam')
            ->select('*')
            ->get(),
        ];  
        
        // Memanggil tampilan form create
        return view('dosen.pla.memohon-ruangan.index',$data);
    }

    public function createAction(Request $request)
    {
        // Cek jam tersedia
        $cektanggal = $request->input('tgl_pinjam');

        $cekjam = $request->input('jam_id');
        $cekruang = $request->input('ruang_id');

        $used = DB::table('jadwal_permohonan')
            ->join('permohonan_ruang', 'jadwal_permohonan.permohonan_ruang_id', '=', 'permohonan_ruang.id_permohonan_ruang')
            ->join('ruang', 'jadwal_permohonan.ruang_id', '=', 'ruang.id_ruang')
            ->join('hari', 'jadwal_permohonan.hari_id', '=', 'hari.id_hari')
            ->join('jam', 'jadwal_permohonan.jam_id', '=', 'jam.id_jam')
            ->select('*')
            ->get();

        foreach ($used as $u) {
            if ($u->ruang_id == $cekruang && $u->tgl_pinjam == $cektanggal && $u->jam_id == $cekjam) {
                # code...
                Session::put('alert-danger', 'Ruangan telah terpakai');
                return Redirect::back();
            }
        }

        // Menginsertkan apa yang ada di form ke dalam tabel jadwal permohonan dan permohonan ruang

        $permohonan = PermohonanRuang::create([
            'nama' => Auth::user()->name,
            'atribut_verifikasi' => '0',
            'nim_nip' => Auth::user()->username,
            'tgl_pinjam' => $request->input('tgl_pinjam'),
            ]);

        $sks = $request->input('sks');
        $j=0;
        for ($i=0; $i < $sks ; $i++) { 
        JadwalPermohonan::create([
            'permohonan_ruang_id' => $permohonan->id_permohonan_ruang,
            'ruang_id' => $request->input('ruang_id'),
            'hari_id' => $request->input('hari_id'),
            'jam_id' => $request->input('jam_id')+$j,
            ]);
            $j++;
        }
        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Permohonan berhasil dikirim');

        // Kembali ke halaman
        return Redirect::to('/dosen/memohon-ruangan');
    }


}