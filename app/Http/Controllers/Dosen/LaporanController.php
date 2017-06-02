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
use App\Jurnal_Dsn,App\Penelitian_Dsn,App\Konferensi_Dsn,App\Pengmas_Dsn;
use App\Models\KrsKhs\TahunAkademik;
use PDF;
use Auth;


class LaporanController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $dosen = Auth::user()->username;
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'laporan',
            // Memanggil semua isi dari tabel biodata
            'biodata' => BiodataDosen::where('nip',$dosen)->first(),
            'jurnal' => Jurnal_Dsn::where('nip',$dosen)->get(),
            'penelitian' => Penelitian_Dsn::where('nip',$dosen)->get(),
            'konferensi' => Konferensi_Dsn::where('nip',$dosen)->get(),
            'pengmas' => Pengmas_Dsn::where('nip',$dosen)->get(),
            'tahun' => TahunAkademik::all()->first()
            //'sktugas' => Sktugas::where('nip',$dosen),
        ];
        //dd($data);
        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        
        return view('dosen.laporan.index',$data);
    }

    public function cetak()
    {
        $dosen = Auth::user()->username;
        $data = [
        'page' => 'cetak',
            // 'page' => 'mata-kuliah',
            // 'matkul' => MataKuliah::find($id),
            // 'jenis_matkul' =>JenisMataKuliah::all()
        'biodata' => BiodataDosen::where('nip',$dosen)->first(),
        'jurnal' => Jurnal_Dsn::where('nip',$dosen)->get(),
        'penelitian' => Penelitian_Dsn::where('nip',$dosen)->get(),
        'konferensi' => Konferensi_Dsn::where('nip',$dosen)->get(),
        'pengmas' => Pengmas_Dsn::where('nip',$dosen)->get(),
        'tahun' => TahunAkademik::all()->first(),
        'pdf' => PDF::loadView('dosen.laporan.cetak')
        ];
        return $pdf->stream('laporan.pdf');

    }

    public function pilih()
    {
        $data = [
        'page' => 'pilih',
        'tahun' => TahunAkademik::all()->first()
        ];
        return view('dosen.laporan.pilih',$data);
    }
}