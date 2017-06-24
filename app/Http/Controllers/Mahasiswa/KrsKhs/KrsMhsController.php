<?php 
namespace App\Http\Controllers\Mahasiswa\KrsKhs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use PDF;
use Response;
use Auth;
use DB;
// Tambahkan model yang ingin dipakai
use App\Models\KrsKhs\MKDiambil;
use App\Models\KrsKhs\MK;
use App\Models\KrsKhs\MataKuliah;
use App\Models\KrsKhs\JenisMataKuliah;
use App\Models\KrsKhs\TahunAkademik;
use App\Models\KrsKhs\BiodataMahasiswa;

class KrsMhsController extends Controller
{
    // Function untuk menampilkan tabel
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function toPdf()
    {
        $tahun = TahunAkademik::count();
        $nim_id  = Auth::user()->username;
        $sum     = DB::table('mk_diambil')
            ->join('mk_ditawarkan','mk_ditawarkan.id_mk_ditawarkan','mk_diambil.mk_ditawarkan_id')
            ->join('mata_kuliah','mata_kuliah.id_mk','=','mk_ditawarkan.matakuliah_id')
            ->select('*')
            ->where('mhs_id',$nim_id)
            ->where('mk_ditawarkan.thn_akademik_id',$tahun)
            ->sum('mata_kuliah.sks');

        $data = [
        'page' => 'krs',
           'app'  => DB::table('mk_diambil')
            ->join('mk_ditawarkan','mk_ditawarkan.id_mk_ditawarkan','mk_diambil.mk_ditawarkan_id')
            ->join('mata_kuliah', 'mata_kuliah.id_mk', 'mk_ditawarkan.matakuliah_id')
            ->join('jadwal_kuliah', 'jadwal_kuliah.mk_ditawarkan_id', 'mk_ditawarkan.id_mk_ditawarkan')
            ->join('ruang', 'ruang.id_ruang', 'jadwal_kuliah.ruang_id')
            ->join('hari', 'hari.id_hari', 'jadwal_kuliah.hari_id')
            ->join('jam', 'jam.id_jam', 'jadwal_kuliah.jam_id')
            ->select('*')
            ->where('mhs_id','=',$nim_id)
            ->where('mk_ditawarkan.thn_akademik_id',$tahun)
            ->get(),

        'histori' => DB::table('mk_diambil')
                    ->join('mk_ditawarkan','mk_diambil.mk_ditawarkan_id','mk_ditawarkan.id_mk_ditawarkan')
                    ->join('mata_kuliah','mk_ditawarkan.matakuliah_id','mata_kuliah.id_mk')
                    ->where('mhs_id',$nim_id)->get(),
        'ips' => DB::table('mk_diambil')
                    ->join('mk_ditawarkan','mk_diambil.mk_ditawarkan_id','mk_ditawarkan.id_mk_ditawarkan')
                    ->join('mata_kuliah','mk_ditawarkan.matakuliah_id','mata_kuliah.id_mk')
                    ->where('mhs_id',$nim_id)
                    ->where('mk_ditawarkan.thn_akademik_id',$tahun-1)->get(),
        'matkul' => MataKuliah::all(),
        'jenis_matkul' =>JenisMataKuliah::all(),
        'biodata_mhs' => BiodataMahasiswa::where('nim_id','=',$nim_id)->first(),
        'sum'  => $sum,
        'doswal' => DB::table('mahasiswa')
                        ->join('biodata_dosen','mahasiswa.nip_id','biodata_dosen.nip')
                        ->where('nim',$nim_id)->first(),
        ];
        $pdf = PDF::loadView('mahasiswa.krs-khs.krs.cetak', $data);
        return $pdf->inline('KRS_akademik.pdf');
    }
    public function create()
    {
        $tahun = TahunAkademik::count();
        $nim_id  = Auth::user()->username;
        $angg       = DB::table('mk_diambil')
            ->select('*')
            ->where('mhs_id',$nim_id)
            ->first();

        $sum     = DB::table('mk_diambil')
            ->join('mk_ditawarkan','mk_ditawarkan.id_mk_ditawarkan','mk_diambil.mk_ditawarkan_id')
            ->join('mata_kuliah','mata_kuliah.id_mk','=','mk_ditawarkan.matakuliah_id')
            ->select('*')
            ->where('mhs_id',$nim_id)
            //->where('thn_akademik_id', $tahun)
            ->sum('mata_kuliah.sks');

        $sks_diambil = DB::table('mk_diambil')
            ->join('mk_ditawarkan','mk_ditawarkan.id_mk_ditawarkan','mk_diambil.mk_ditawarkan_id')
            ->join('mata_kuliah','mata_kuliah.id_mk','=','mk_ditawarkan.matakuliah_id')
            ->select('*')
            ->where('mhs_id',$nim_id)
            ->where('mk_ditawarkan.thn_akademik_id', $tahun)
            ->sum('mata_kuliah.sks');    

        $nilai1  = DB::table('mk_diambil')
            ->join('mk_ditawarkan','mk_ditawarkan.id_mk_ditawarkan','=','mk_diambil.mk_ditawarkan_id')
            ->select('mk_diambil.nilai')
            ->where('mhs_id',$nim_id)
            ->where('mk_ditawarkan.thn_akademik_id',$tahun)->get(); 
        $nilai   = 0;
        $nilai_tmp = 0;
        foreach($nilai1 as $n){
            if ($n->nilai == "A")
                $nilai_tmp = $nilai_tmp + 4;                
            elseif ($n->nilai == "AB")
                $nilai_tmp = $nilai_tmp + 3.5;
            elseif ($n->nilai == "B")
                $nilai_tmp = $nilai_tmp + 3;
            elseif ($n->nilai == "BC")
                $nilai_tmp = $nilai_tmp + 2.5;
            elseif ($n->nilai == "C")
                $nilai_tmp = $nilai_tmp + 2;
            elseif ($n->nilai == "D")
                $nilai_tmp = $nilai_tmp + 1;
            elseif (($n->nilai == "E")||($n->nilai == "K"))
                $nilai_tmp = $nilai_tmp + 0;
            $nilai = $nilai_tmp;
            }
            $ips = $nilai;
            if ($sum != 0) {
                $ips = $nilai/$sum;
            }
            if (($ips >= 3) || (empty($angg)) || ($angg->nilai=="K"))
                $lmt = 24;                
            elseif (($ips <3) && ($ips >=2.75))
                $lmt = 23;
            elseif (($ips <2.75) && ($ips >=2.5))
                $lmt = 22;
            else
                $lmt = 21;
            $lmt_tersisa = $lmt - $sks_diambil;
        $data    = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'krs',
            'krs' => DB::table('mk_ditawarkan')
                        // ->join('mk_diambil','mk_diambil.mk_ditawarkan_id','mk_ditawarkan.id_mk_ditawarkan')
                        ->leftJoin('mata_kuliah','mata_kuliah.id_mk','mk_ditawarkan.matakuliah_id')
                        ->leftJoin('jenis_mk','jenis_mk.id','mata_kuliah.jenis_mk_id')
                        ->leftJoin('jadwal_kuliah','jadwal_kuliah.mk_ditawarkan_id','mk_ditawarkan.id_mk_ditawarkan')
                        ->leftJoin('jam','jam.id_jam','jadwal_kuliah.jam_id')
                        ->leftJoin('hari','hari.id_hari','jadwal_kuliah.hari_id')
                        ->leftJoin('mk_diambil','mk_diambil.mk_ditawarkan_id','mk_ditawarkan.id_mk_ditawarkan')
                        ->select('*')
                        ->where('mk_ditawarkan.thn_akademik_id',$tahun)
                        ->where('mk_diambil.mk_ditawarkan_id',null)
                        // ->where('mk_diambil.mhs_id',$nim_id)
                        ->get(),

            'app'  => DB::table('mk_diambil')
            ->leftJoin('mk_ditawarkan','mk_ditawarkan.id_mk_ditawarkan','mk_diambil.mk_ditawarkan_id')
            ->leftJoin('mata_kuliah', 'mata_kuliah.id_mk', 'mk_ditawarkan.matakuliah_id')
            ->select('*')
            ->where('mhs_id',$nim_id)
            ->where('mk_ditawarkan.thn_akademik_id',$tahun)
            ->where('nilai','K')
            ->get(),
            //'count'=> $count,
            'sum'  => $sum,
            'sks_diambil' => $sks_diambil,
            'limitSks' => $lmt,
            'limitSisa' => $lmt_tersisa,
            'tahun'=> $tahun,     
            'ips'  => 0,
            'lihat' => MKDiambil::all(),
        ];
        // Memanggil tampilan form create
        return view('mahasiswa.krs-khs.krs.create',$data);
    }
    public function createAction($id)
    {
        $tahun      = TahunAkademik::count();
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        $nim_id     = Auth::user()->username;
        $angg       = DB::table('mk_diambil')
            ->select('*')
            ->where('mhs_id',$nim_id)
            ->first();
        $sum        = DB::table('mk_diambil')
            ->join('mk_ditawarkan','mk_ditawarkan.id_mk_ditawarkan','mk_diambil.mk_ditawarkan_id')
            ->join('mata_kuliah','mata_kuliah.id_mk','=','mk_ditawarkan.matakuliah_id')
            ->select('*')
            ->where('mhs_id',$nim_id)
            //->where('thn_akademik_id', $tahun)
            ->sum('mata_kuliah.sks');

        $sks_diambil = DB::table('mk_diambil')
            ->join('mk_ditawarkan','mk_ditawarkan.id_mk_ditawarkan','mk_diambil.mk_ditawarkan_id')
            ->join('mata_kuliah','mata_kuliah.id_mk','=','mk_ditawarkan.matakuliah_id')
            ->select('*')
            ->where('mhs_id',$nim_id)
            ->where('mk_ditawarkan.thn_akademik_id', $tahun)
            ->sum('mata_kuliah.sks');

        $sks_ditawarkan = DB::table('mk_ditawarkan')
            ->join('mata_kuliah','mata_kuliah.id_mk','mk_ditawarkan.matakuliah_id')
            ->where('id_mk_ditawarkan',$id)
            ->first();

        $sum_total      = DB::table('mk_diambil')
            ->join('mk_ditawarkan','mk_ditawarkan.id_mk_ditawarkan','mk_diambil.mk_ditawarkan_id')
            ->join('mata_kuliah','mata_kuliah.id_mk','=','mk_ditawarkan.matakuliah_id')
            ->select('*')
            ->where('mhs_id',$nim_id)
            ->sum('mata_kuliah.sks');

        $sks_mk = DB::table('mata_kuliah')
            ->join('mk_ditawarkan','mk_ditawarkan.matakuliah_id','mata_kuliah.id_mk')
            ->where('mk_ditawarkan.id_mk_ditawarkan',$id)
            ->first();

        $nilai1         = DB::table('mk_diambil')
            ->join('mk_ditawarkan','mk_ditawarkan.id_mk_ditawarkan','=','mk_diambil.mk_ditawarkan_id')
            ->select('mk_diambil.nilai')
            ->where('mhs_id',$nim_id)
            ->where('mk_ditawarkan.thn_akademik_id',$tahun)->get();
             
        $nilai   = 0;
        $nilai_tmp = 0;
        foreach($nilai1 as $n){
            if ($n->nilai == "A")
                $nilai_tmp = $nilai_tmp + 4;                
            elseif ($n->nilai == "AB")
                $nilai_tmp = $nilai_tmp + 3.5;
            elseif ($n->nilai == "B")
                $nilai_tmp = $nilai_tmp + 3;
            elseif ($n->nilai == "BC")
                $nilai_tmp = $nilai_tmp + 2.5;
            elseif ($n->nilai == "C")
                $nilai_tmp = $nilai_tmp + 2;
            elseif ($n->nilai == "D")
                $nilai_tmp = $nilai_tmp + 1;
            elseif (($n->nilai == "E")||($n->nilai == "K"))
                $nilai_tmp = $nilai_tmp + 0;
            $nilai = $nilai_tmp;
            };
        $ips = $nilai;
            if ($sum != 0) {
                $ips = $nilai/$sum;
            }
            if (($ips >= 3) || (empty($angg)) || ($angg->nilai=="K"))
                $lmt = 24;                
            elseif (($ips <3) && ($ips >=2.75))
                $lmt = 23;
            elseif (($ips <2.75) && ($ips >=2.5))
                $lmt = 22;
            else
                $lmt = 21;
            $lmt_tersisa = $lmt - $sks_diambil;

        $syaratMK = DB::table('mk_diambil')
        ->join('mk_ditawarkan','mk_ditawarkan.id_mk_ditawarkan','mk_diambil.mk_ditawarkan_id')
        ->select('*')
        ->where('mhs_id',$nim_id)
        ->whereNotIn('nilai', ['K','D','E'])
        ->get();

        $cek_syarat = DB::table('mk_ditawarkan')
                        ->join('mk_prasyarat','mk_ditawarkan.matakuliah_id','mk_prasyarat.mk_id')
                        ->where('id_mk_ditawarkan',$id)
                        ->get();
        $count_syarat = DB::table('mk_ditawarkan')
                        ->join('mk_prasyarat','mk_ditawarkan.matakuliah_id','mk_prasyarat.mk_id')
                        ->where('id_mk_ditawarkan',$id)->count();

        $jadwal  = DB::table('mk_diambil')
        ->join('mk_ditawarkan','mk_ditawarkan.id_mk_ditawarkan','mk_diambil.mk_ditawarkan_id')
        ->join('jadwal_kuliah','jadwal_kuliah.mk_ditawarkan_id','mk_diambil.mk_ditawarkan_id')
        ->select('jadwal_kuliah.jam_id','jadwal_kuliah.hari_id')
        ->where('mhs_id',$nim_id)
        ->where('mk_ditawarkan.thn_akademik_id',$tahun)
        ->get();

        $MKditawarkan = DB::table('mk_ditawarkan')
                        ->join('jadwal_kuliah','jadwal_kuliah.mk_ditawarkan_id','mk_ditawarkan.id_mk_ditawarkan')
                        ->select('*')
                        ->where('id_mk_ditawarkan',$id)
                        ->get();

        // Syarat 1 : Jadwal
        if(!empty($jadwal)){
            foreach ($jadwal as $j) {
                foreach ($MKditawarkan as $jd) {
                    if (($j->jam_id == $jd->jam_id)&&($j->hari_id == $jd->hari_id)){
                        Session::put('alert-danger', 'Terjadi tabrakan jadwal !');
                        return Redirect::back();
                        }
                }
            }
        }
        //Syarat 2 : Limit Sks
        if ($lmt_tersisa  < $sks_ditawarkan->sks){
            Session::put('alert-danger', 'SKS tidak mencukupi !');
            return Redirect::back();
        }
        
        // // Syarat 3 : Syarat sks
        if ($sum_total < $sks_mk->syarat_sks){
            Session::put('alert-danger', 'Syarat sks belum terpenuhi !');
            return Redirect::back();
        }

        if(!empty($cek_syarat)){
            $i=0;
            foreach ($cek_syarat as $s) {
                foreach ($syaratMK as $c) {
                    if ($s->mk_syarat_id == $c->matakuliah_id){
                       $i=$i+1;
                        }
                }
            }
            if($count_syarat!=$i){
                Session::put('alert-danger', 'Prasyarat mata kuliah belum terpenuhi !');
                        return Redirect::back();
            }
        }
        // Syarat 4 : Syarat mk
        DB::table('mk_diambil')->insert(
            [
            'mk_ditawarkan_id' => $id,
            'mhs_id' => Auth::user()->username,
            'is_approve' => 0,
            'nilai' => "K"
            ]);
        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Mata kuliah berhasil ditambahkan');
        return Redirect::back();
    }

    public function delete($id)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        $nim_id = Auth::user()->username;
        MKDiambil::where('mhs_id',$nim_id)
            ->where('mk_ditawarkan_id',$id)->delete();
        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Mata kuliah berhasil dihapus');
        // Kembali ke halaman mahasiswa/create
        return Redirect::back();
    }
}