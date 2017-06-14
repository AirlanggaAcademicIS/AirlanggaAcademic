<?php 

namespace App\Http\Controllers\Mahasiswa\PLA;

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
use App\JadwalKuliah;
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
            ->orderBy('tgl_pinjam', 'desc')
            ->select('*')
            ->get(),
        ];  
        
        // Memanggil tampilan form create
        return view('mahasiswa.pla.memohon-ruangan.index',$data);
    }

    public function createAction(Request $request)
    {
        $sks = $request->input('sks');
        // Cek jam tersedia
        $cekjam = $request->input('jam_id');
        $cekruang = $request->input('ruang_id');
        if(($cekjam == '12' && $sks>1)||($cekjam == '11' && $sks>2)||($cekjam == '10' && $sks=4)){
                # code...
                Session::put('alert-danger', 'SKS tidak sesuai, SKS melebihi batas jam yang tesedia');
                return Redirect::back();
            }
        $date = explode(', ', $request->input('tgl_pinjam'));
        if ($date[0] == 'Monday') $hari = 1;
        if ($date[0] == 'Tuesday') $hari = 2;
        if ($date[0] == 'Wednesday') $hari = 3;
        if ($date[0] == 'Thursday') $hari = 4;
        if ($date[0] == 'Friday') $hari = 5;
        if ($date[0] == 'Saturday') $hari = 6;

        if(($cekjam == '12' && $sks>'1')||($cekjam == '11' && $sks>'2')||($cekjam == '10' && $sks='4')){
                # code...
                Session::put('alert-danger', 'SKS melebihi batas jam');
                return Redirect::back();
            }
        
        if ($date[0] == 'Saturday') $hari = 6;  
        $used = DB::table('jadwal_permohonan')
            ->join('permohonan_ruang', 'jadwal_permohonan.permohonan_ruang_id', '=', 'permohonan_ruang.id_permohonan_ruang')
            ->join('ruang', 'jadwal_permohonan.ruang_id', '=', 'ruang.id_ruang')
            ->join('hari', 'jadwal_permohonan.hari_id', '=', 'hari.id_hari')
            ->join('jam', 'jadwal_permohonan.jam_id', '=', 'jam.id_jam')
            ->select('*')
            ->get();
        $fixed = JadwalKuliah::all();

        foreach ($fixed as $jk) {
            if ($jk->ruang_id == $cekruang && $jk->hari_id == $hari && $jk->jam_id == $cekjam) {
                # code...
                Session::put('alert-danger', 'Ruangan telah terpakai');
                return Redirect::back();
            }
        }

        foreach ($used as $u) {
            if ($u->ruang_id == $cekruang && $u->tgl_pinjam == $date[1] && $u->jam_id == $cekjam && $u->atribut_verifikasi != '2') {
                # code...
                Session::put('alert-danger', 'Ruangan telah terpakai');
                return Redirect::back();
            }
        }

        // Menginsertkan apa yang ada di form ke dalam tabel jadwal permohonan dan permohonan ruang
        
        $permohonan = PermohonanRuang::create([
            'nama' => $request->input('nama'),
            'atribut_verifikasi' => '0',
            'nim_nip' => Auth::user()->username,
            'tgl_pinjam' => $date[1],
            ]);

        $j=0;
        for ($i=0; $i < $sks ; $i++) { 
        JadwalPermohonan::create([
            'permohonan_ruang_id' => $permohonan->id_permohonan_ruang,
            'ruang_id' => $request->input('ruang_id'),
            'hari_id' => $hari,
            'jam_id' => $request->input('jam_id')+$j,
            ]);
            $j++;
        }
        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Permohonan berhasil dikirim');

        // Kembali ke halaman
        return Redirect::to('/mahasiswa/memohon-ruangan');
    }


}