<?php 

namespace App\Http\Controllers\Dosen\KrsKhs;
use Illuminate\Support\Facades\DB;
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
use App\Models\KrsKhs\Mahasiswa;
use App\BiodataMahasiswa;
use App\Models\KrsKhs\MKDiambil;
use App\Models\KrsKhs\TahunAkademik;
use App\Models\KrsKhs\MKDitawarkan;


class MahasiswaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    // Function untuk menampilkan tabel
    public function index()
    {
        $dosen_id  = Auth::user()->username;
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'mahasiswa',
            // Memanggil semua isi dari tabel biodata
            'mahasiswa' => Mahasiswa::where('nip_id',$dosen_id)->get(),
            ];
        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.krs-khs.approve.index',$data);
    }

    public function create($mhs_id)
    {
        $tahun = TahunAkademik::count();
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'mahasiswa',
            // Memanggil semua isi dari tabel biodata
            'mahasiswa' => Mahasiswa::where('nim',$mhs_id)->first(),
            'matkul' => DB::table('mk_diambil')
                        ->join('mk_ditawarkan','mk_ditawarkan.id_mk_ditawarkan','mk_diambil.mk_ditawarkan_id')
                        ->join('mata_kuliah','mata_kuliah.id_mk','mk_ditawarkan.matakuliah_id')
                        ->where('mk_ditawarkan.thn_akademik_id',$tahun)
                        ->where('mhs_id',$mhs_id)->get()
        ];
        // Memanggil tampilan form create
        return view('dosen.krs-khs.approve.create',$data);
    }

    public function approveAction($mhs_id, $id_mk, Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata

        $approve = MKDiambil::where('mk_ditawarkan_id',$id_mk)
                ->where('mhs_id',$mhs_id)->update([
                    'is_approve' => '1'
                    ]);
             // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Approved');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::back();
    }

    public function unapproveAction($mhs_id, $id_mk, Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata

        $approve = MKDiambil::where('mk_ditawarkan_id',$id_mk)
                ->where('mhs_id',$mhs_id)->update([
                    'is_approve' => '0'
                    ]);
             // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Unapproved');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::back();
    
    }    
}