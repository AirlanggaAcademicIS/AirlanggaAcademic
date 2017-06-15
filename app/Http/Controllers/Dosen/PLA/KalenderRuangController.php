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
use Auth;
// Tambahkan model yang ingin dipakai
use Illuminate\Support\Facades\DB;

 
class KalenderRuangController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $jadwal=DB::table('jadwal_kuliah')
            ->join('hari', 'hari.id_hari', '=', 'jadwal_kuliah.hari_id')
            ->join('jam', 'jam.id_jam', '=', 'jadwal_kuliah.jam_id')
            ->join('mk_ditawarkan', 'mk_ditawarkan.id_mk_ditawarkan', '=', 'jadwal_kuliah.mk_ditawarkan_id')
            ->join('mata_kuliah', 'mata_kuliah.id_mk', '=', 'mk_ditawarkan.matakuliah_id')
            ->join('ruang', 'jadwal_kuliah.ruang_id', '=', 'ruang.id_ruang')
            ->select('*')
            ->get();
            $jadwal_pla=DB::table('jadwal_permohonan')
            ->join('hari', 'hari.id_hari', '=', 'jadwal_permohonan.hari_id')
            ->join('jam', 'jam.id_jam', '=', 'jadwal_permohonan.jam_id')
            ->join('permohonan_ruang', 'permohonan_ruang.id_permohonan_ruang', '=', 'jadwal_permohonan.permohonan_ruang_id')
            ->join('ruang', 'jadwal_permohonan.ruang_id', '=', 'ruang.id_ruang')
            ->select('*')
            ->where('permohonan_ruang.atribut_verifikasi','=',1)
            ->where('permohonan_ruang.tgl_pinjam','>=',date ('Y-m-d'))
            ->get();
            $j_array =array();
            $i=0;
            foreach($jadwal as $k){
                $j_array[$i]['title']=$k->nama_matkul;
                $waktu=explode(':',$k->waktu);
                $w=$waktu[0].":".$waktu[1];
                $times = array();
                $times[] = $w;
                $times[] = "0:50";
                $waktu_end=$this->AddPlayTime($times);
                $waktu_end=explode(':',$waktu_end);
                $j_array[$i]['hour']=$waktu[0];
                $j_array[$i]['minute']=$waktu[1];
                $j_array[$i]['h_end']=$waktu_end[0];
                $j_array[$i]['m_end']=$waktu_end[1];
                $j_array[$i]['ruang']=$k->nama_ruang;
                $j_array[$i]['hari']=$k->hari_id;
                $i++;
            }
             $j_array2 =array();
            $i=0;
            foreach($jadwal_pla as $k){
                $j_array2[$i]['title']=$k->nama;
                $waktu=explode(':',$k->waktu);
                $w=$waktu[0].":".$waktu[1];
                $times = array();
                $times[] = $w;
                $times[] = "0:50";
                $waktu_end=$this->AddPlayTime($times);
                $waktu_end=explode(':',$waktu_end);
                $j_array2[$i]['hour']=$waktu[0];
                $j_array2[$i]['minute']=$waktu[1];
                $j_array2[$i]['h_end']=$waktu_end[0];
                $j_array2[$i]['m_end']=$waktu_end[1];
                $j_array2[$i]['ruang']=$k->nama_ruang;
                $j_array2[$i]['hari']=$k->hari_id;
                $date=explode('-',$k->tgl_pinjam);
                $j_array2[$i]['thn']=$date[0];
                $j_array2[$i]['bln']=$date[1];
                $j_array2[$i]['tgl']=$date[2];
                $i++;
            }
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'kalender-ruang',
            'jadwal' => $j_array2,
            'array' => $j_array,
            'ruang' => DB:: table('ruang')->select('*')->get(),
            'd_r' => ''
            // Memanggil semua isi dari tabel biodata
        ];
        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.pla.calendar_ruang.index',$data);
    }
     public function index2(Request $id)
    {
        $id_ruang=$id->input('id_ruang');
        $jadwal=DB::table('jadwal_kuliah')
            ->join('hari', 'hari.id_hari', '=', 'jadwal_kuliah.hari_id')
            ->join('jam', 'jam.id_jam', '=', 'jadwal_kuliah.jam_id')
            ->join('mk_ditawarkan', 'mk_ditawarkan.id_mk_ditawarkan', '=', 'jadwal_kuliah.mk_ditawarkan_id')
            ->join('mata_kuliah', 'mata_kuliah.id_mk', '=', 'mk_ditawarkan.matakuliah_id')
            ->join('ruang', 'jadwal_kuliah.ruang_id', '=', 'ruang.id_ruang')
            ->select('*')
            ->where('ruang.id_ruang','=',$id_ruang)
            ->get();
            $jadwal_pla=DB::table('jadwal_permohonan')
            ->join('hari', 'hari.id_hari', '=', 'jadwal_permohonan.hari_id')
            ->join('jam', 'jam.id_jam', '=', 'jadwal_permohonan.jam_id')
            ->join('permohonan_ruang', 'permohonan_ruang.id_permohonan_ruang', '=', 'jadwal_permohonan.permohonan_ruang_id')
            ->join('ruang', 'jadwal_permohonan.ruang_id', '=', 'ruang.id_ruang')
            ->select('*')
            ->where('permohonan_ruang.atribut_verifikasi','=',1)
            ->where('permohonan_ruang.tgl_pinjam','>=',date ('Y-m-d'))
            ->where('ruang.id_ruang','=',$id_ruang)
            ->get();
            $j_array =array();
            $i=0;
            foreach($jadwal as $k){
                $j_array[$i]['title']=$k->nama_matkul;
                $waktu=explode(':',$k->waktu);
                $w=$waktu[0].":".$waktu[1];
                $times = array();
                $times[] = $w;
                $times[] = "0:50";
                $waktu_end=$this->AddPlayTime($times);
                $waktu_end=explode(':',$waktu_end);
                $j_array[$i]['hour']=$waktu[0];
                $j_array[$i]['minute']=$waktu[1];
                $j_array[$i]['h_end']=$waktu_end[0];
                $j_array[$i]['m_end']=$waktu_end[1];
                $j_array[$i]['ruang']=$k->nama_ruang;
                $j_array[$i]['hari']=$k->hari_id;
                $i++;
            }
             $j_array2 =array();
            $i=0;
            foreach($jadwal_pla as $k){
                $j_array2[$i]['title']=$k->nama;
                $waktu=explode(':',$k->waktu);
                $w=$waktu[0].":".$waktu[1];
                $times = array();
                $times[] = $w;
                $times[] = "0:50";
                $waktu_end=$this->AddPlayTime($times);
                $waktu_end=explode(':',$waktu_end);
                $j_array2[$i]['hour']=$waktu[0];
                $j_array2[$i]['minute']=$waktu[1];
                $j_array2[$i]['h_end']=$waktu_end[0];
                $j_array2[$i]['m_end']=$waktu_end[1];
                $j_array2[$i]['ruang']=$k->nama_ruang;
                $j_array2[$i]['hari']=$k->hari_id;
                $date=explode('-',$k->tgl_pinjam);
                $j_array2[$i]['thn']=$date[0];
                $j_array2[$i]['bln']=$date[1];
                $j_array2[$i]['tgl']=$date[2];
                $i++;
            }
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'biodatamahasiswa',
            'jadwal' => $j_array2,
            'array' => $j_array,
            'ruang' => DB:: table('ruang')->select('*')->get(),
            'd_r' => $id_ruang
            // Memanggil semua isi dari tabel biodata
        ];
        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.pla.calendar_ruang.index',$data);
    }
    public function AddPlayTime($times) {

    // loop throught all the times
        $minutes=0;
    foreach ($times as $time) {
        
        list($hour, $minute) = explode(':', $time);
        $minutes += $hour * 60;
        $minutes += $minute;
    }

    $hours = floor($minutes / 60);
    $minutes -= $hours * 60;

    // returns the time already formatted
    return sprintf('%02d:%02d', $hours, $minutes);
}

    

}