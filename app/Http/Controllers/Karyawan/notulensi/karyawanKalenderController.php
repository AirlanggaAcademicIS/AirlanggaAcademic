<?php 

namespace App\Http\Controllers\Karyawan\notulensi;

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
use App\DosenRapat;


class karyawanKalenderController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
       
            $jadwal_pla=DB::table('jadwal_permohonan')
            ->join('hari', 'hari.id_hari', '=', 'jadwal_permohonan.hari_id')
            ->join('jam', 'jam.id_jam', '=', 'jadwal_permohonan.jam_id')
            ->join('permohonan_ruang', 'permohonan_ruang.id_permohonan_ruang', '=', 'jadwal_permohonan.permohonan_ruang_id')
            ->join('ruang', 'jadwal_permohonan.ruang_id', '=', 'ruang.id_ruang')
            ->join('notulen_rapat', 'permohonan_ruang.id_permohonan_ruang', '=', 'notulen_rapat.permohonan_ruang_id')
            ->select('*')
            ->where('permohonan_ruang.atribut_verifikasi','=',1)
            ->where('permohonan_ruang.tgl_pinjam','>=',date ('Y-m-d'))
            ->get();
           
             $j_array2 =array();
            $i=0;
            foreach($jadwal_pla as $k){
                $j_array2[$i]['title']=$k->nama_rapat;
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
            
            
            'd_r' => ''
            // Memanggil semua isi dari tabel biodata
        ];
        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('karyawan.notulensi.kalendar.index',$data);
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