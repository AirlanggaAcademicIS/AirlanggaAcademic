<?php 

namespace App\Http\Controllers\Dosen;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use Illuminate\Support\Facades\DB;
use App\BiodataDosen;
use App\Jurnal_Dsn,App\Penelitian_Dsn,App\Konferensi_Dsn,App\Pengmas_Dsn,App\SuratTugas_Dsn;
use App\Models\KrsKhs\TahunAkademik;
use App\Models\KrsKhs\KHS;
use PDF;
use Auth;


class LaporanController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $thn = \Request::get('tahun');
        $semester = \Request::get('semester');
        $dosen = Auth::user()->username;
        if ($semester=="Gasal") {
            # code...
            $jurnal = DB::table('jurnal')
            ->join('jurnal_dosen', 'jurnal_dosen.jurnal_id', '=', 'jurnal.jurnal_id')
            ->where('jurnal_dosen.nip','=',$dosen)
            ->whereDate('jurnal.tanggal_jurnal','<=',''.$thn.'-06-30')
            ->whereDate('jurnal.tanggal_jurnal','>=',''.$thn.'-01-01')
            ->select('*')
            ->get();

            $konferensi = DB::table('konferensi')
            ->join('konferensi_dosen', 'konferensi_dosen.konferensi_id', '=', 'konferensi.konferensi_id')
            ->where('konferensi_dosen.nip','=',$dosen)
            ->whereDate('konferensi.tanggal_konferensi','<=',''.$thn.'-06-30')
            ->whereDate('konferensi.tanggal_konferensi','>=',''.$thn.'-01-01')
            ->select('*')
            ->get();

            $penelitian = DB::table('penelitian_dosen')
            ->join('penelitian_milik_dosen', 'penelitian_milik_dosen.penelitian_id', '=', 'penelitian_dosen.penelitian_id')
            ->where('penelitian_milik_dosen.nip','=',$dosen)
            ->whereDate('penelitian_dosen.tanggal_penelitian','<=',''.$thn.'-06-30')
            ->whereDate('penelitian_dosen.tanggal_penelitian','>=',''.$thn.'-01-01')
            ->select('*')
            ->get();

            $pengmas = DB::table('pengabdian_masyarakat')
            ->join('pengmas_dosen', 'pengmas_dosen.kegiatan_id', '=', 'pengabdian_masyarakat.kegiatan_id')
            ->where('pengmas_dosen.nip','=',$dosen)
            ->whereDate('pengabdian_masyarakat.tanggal_kegiatan','<=',''.$thn.'-06-30')
            ->whereDate('pengabdian_masyarakat.tanggal_kegiatan','>=',''.$thn.'-01-01')
            ->select('*')
            ->get();

            $sktugas = DB::table('surat_tugas')
            ->join('surat_tugas_dosen', 'surat_tugas_dosen.surat_id', '=', 'surat_tugas.surat_id')
            ->where('surat_tugas_dosen.nip','=',$dosen)
            ->whereDate('surat_tugas.tanggal_surat','<=',''.$thn.'-06-30')
            ->whereDate('surat_tugas.tanggal_surat','>=',''.$thn.'-01-01')
            ->select('*')
            ->get();
        }
        else {

        $jurnal = DB::table('jurnal')
            ->join('jurnal_dosen', 'jurnal_dosen.jurnal_id', '=', 'jurnal.jurnal_id')
            ->where('jurnal_dosen.nip','=',$dosen)
            ->whereDate('jurnal.tanggal_jurnal','<=',''.$thn.'-12-31')
            ->whereDate('jurnal.tanggal_jurnal','>=',''.$thn.'-07-01')
            ->select('*')
            ->get();

            $konferensi = DB::table('konferensi')
            ->join('konferensi_dosen', 'konferensi_dosen.konferensi_id', '=', 'konferensi.konferensi_id')
            ->where('konferensi_dosen.nip','=',$dosen)
            ->whereDate('konferensi.tanggal_konferensi','<=',''.$thn.'-12-31')
            ->whereDate('konferensi.tanggal_konferensi','>=',''.$thn.'-07-01')
            ->select('*')
            ->get();

            $penelitian = DB::table('penelitian_dosen')
            ->join('penelitian_milik_dosen', 'penelitian_milik_dosen.penelitian_id', '=', 'penelitian_dosen.penelitian_id')
            ->where('penelitian_milik_dosen.nip','=',$dosen)
            ->whereDate('penelitian_dosen.tanggal_penelitian','<=',''.$thn.'-12-31')
            ->whereDate('penelitian_dosen.tanggal_penelitian','>=',''.$thn.'-07-01')
            ->select('*')
            ->get();

            $pengmas = DB::table('pengabdian_masyarakat')
            ->join('pengmas_dosen', 'pengmas_dosen.kegiatan_id', '=', 'pengabdian_masyarakat.kegiatan_id')
            ->where('pengmas_dosen.nip','=',$dosen)
            ->whereDate('pengabdian_masyarakat.tanggal_kegiatan','<=',''.$thn.'-12-31')
            ->whereDate('pengabdian_masyarakat.tanggal_kegiatan','>=',''.$thn.'-07-01')
            ->select('*')
            ->get();

            $sktugas = DB::table('surat_tugas')
            ->join('surat_tugas_dosen', 'surat_tugas_dosen.surat_id', '=', 'surat_tugas.surat_id')
            ->where('surat_tugas_dosen.nip','=',$dosen)
            ->whereDate('surat_tugas.tanggal_surat','<=',''.$thn.'-12-31')
            ->whereDate('surat_tugas.tanggal_surat','>=',''.$thn.'-07-01')
            ->select('*')
            ->get();  }  
        
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'laporan',
            // Memanggil semua isi dari tabel biodata
            'biodata' => BiodataDosen::where('nip',$dosen)->first(),
           
            'jurnal'=>$jurnal,
            'penelitian' => $penelitian,
            'konferensi' => $konferensi,
            'pengmas' => $pengmas,
            'stugas' => $sktugas,
            'thn'=>$thn,
            'semester'=>$semester,
        ];
        //dd($data);
        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.laporan.index',$data);
    }

    public function cetak()
    {
        $thn = \Request::get('tahun');
        $semester = \Request::get('semester');
        $dosen = Auth::user()->username;
        if ($semester=="Gasal") {
            # code...
            $jurnal = DB::table('jurnal')
            ->join('jurnal_dosen', 'jurnal_dosen.jurnal_id', '=', 'jurnal.jurnal_id')
            ->where('jurnal_dosen.nip','=',$dosen)
            ->whereDate('jurnal.tanggal_jurnal','<=',''.$thn.'-06-30')
            ->whereDate('jurnal.tanggal_jurnal','>=',''.$thn.'-01-01')
            ->select('*')
            ->get();

            $konferensi = DB::table('konferensi')
            ->join('konferensi_dosen', 'konferensi_dosen.konferensi_id', '=', 'konferensi.konferensi_id')
            ->where('konferensi_dosen.nip','=',$dosen)
            ->whereDate('konferensi.tanggal_konferensi','<=',''.$thn.'-06-30')
            ->whereDate('konferensi.tanggal_konferensi','>=',''.$thn.'-01-01')
            ->select('*')
            ->get();

            $penelitian = DB::table('penelitian_dosen')
            ->join('penelitian_milik_dosen', 'penelitian_milik_dosen.penelitian_id', '=', 'penelitian_dosen.penelitian_id')
            ->where('penelitian_milik_dosen.nip','=',$dosen)
            ->whereDate('penelitian_dosen.tanggal_penelitian','<=',''.$thn.'-06-30')
            ->whereDate('penelitian_dosen.tanggal_penelitian','>=',''.$thn.'-01-01')
            ->select('*')
            ->get();

            $pengmas = DB::table('pengabdian_masyarakat')
            ->join('pengmas_dosen', 'pengmas_dosen.kegiatan_id', '=', 'pengabdian_masyarakat.kegiatan_id')
            ->where('pengmas_dosen.nip','=',$dosen)
            ->whereDate('pengabdian_masyarakat.tanggal_kegiatan','<=',''.$thn.'-06-30')
            ->whereDate('pengabdian_masyarakat.tanggal_kegiatan','>=',''.$thn.'-01-01')
            ->select('*')
            ->get();

            $sktugas = DB::table('surat_tugas')
            ->join('surat_tugas_dosen', 'surat_tugas_dosen.surat_id', '=', 'surat_tugas.surat_id')
            ->where('surat_tugas_dosen.nip','=',$dosen)
            ->whereDate('surat_tugas.tanggal_surat','<=',''.$thn.'-06-30')
            ->whereDate('surat_tugas.tanggal_surat','>=',''.$thn.'-01-01')
            ->select('*')
            ->get();
        }
        else {

        $jurnal = DB::table('jurnal')
            ->join('jurnal_dosen', 'jurnal_dosen.jurnal_id', '=', 'jurnal.jurnal_id')
            ->where('jurnal_dosen.nip','=',$dosen)
            ->whereDate('jurnal.tanggal_jurnal','<=',''.$thn.'-12-31')
            ->whereDate('jurnal.tanggal_jurnal','>=',''.$thn.'-07-01')
            ->select('*')
            ->get();

            $konferensi = DB::table('konferensi')
            ->join('konferensi_dosen', 'konferensi_dosen.konferensi_id', '=', 'konferensi.konferensi_id')
            ->where('konferensi_dosen.nip','=',$dosen)
            ->whereDate('konferensi.tanggal_konferensi','<=',''.$thn.'-12-31')
            ->whereDate('konferensi.tanggal_konferensi','>=',''.$thn.'-07-01')
            ->select('*')
            ->get();

            $penelitian = DB::table('penelitian_dosen')
            ->join('penelitian_milik_dosen', 'penelitian_milik_dosen.penelitian_id', '=', 'penelitian_dosen.penelitian_id')
            ->where('penelitian_milik_dosen.nip','=',$dosen)
            ->whereDate('penelitian_dosen.tanggal_penelitian','<=',''.$thn.'-12-31')
            ->whereDate('penelitian_dosen.tanggal_penelitian','>=',''.$thn.'-07-01')
            ->select('*')
            ->get();

            $pengmas = DB::table('pengabdian_masyarakat')
            ->join('pengmas_dosen', 'pengmas_dosen.kegiatan_id', '=', 'pengabdian_masyarakat.kegiatan_id')
            ->where('pengmas_dosen.nip','=',$dosen)
            ->whereDate('pengabdian_masyarakat.tanggal_kegiatan','<=',''.$thn.'-12-31')
            ->whereDate('pengabdian_masyarakat.tanggal_kegiatan','>=',''.$thn.'-07-01')
            ->select('*')
            ->get();

            $sktugas = DB::table('surat_tugas')
            ->join('surat_tugas_dosen', 'surat_tugas_dosen.surat_id', '=', 'surat_tugas.surat_id')
            ->where('surat_tugas_dosen.nip','=',$dosen)
            ->whereDate('surat_tugas.tanggal_surat','<=',''.$thn.'-12-31')
            ->whereDate('surat_tugas.tanggal_surat','>=',''.$thn.'-07-01')
            ->select('*')
            ->get();  }  
        
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'laporan',
            // Memanggil semua isi dari tabel biodata
            'biodata' => BiodataDosen::where('nip',$dosen)->first(),
           
            'jurnal'=>$jurnal,
            'penelitian' => $penelitian,
            'konferensi' => $konferensi,
            'pengmas' => $pengmas,
            'stugas' => $sktugas,
            'thn'=>$thn,
            'semester'=>$semester,
        ];
        //$tahun = TahunAkademik::all()->first;
        //$khs = KHS::all();
        $pdf = PDF::loadView('dosen.laporan.cetak',  $data );
        return $pdf->inline('Laporan.pdf');


    }

    public function pilih()
    {
        $data = [
        'page' => 'laporan',
        //'tahun' => TahunAkademik::all()->first()
        ];
        return view('dosen.laporan.pilih',$data);
    }
    
}