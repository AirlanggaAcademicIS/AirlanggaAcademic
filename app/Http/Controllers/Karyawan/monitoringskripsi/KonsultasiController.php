<?php 

namespace App\Http\Controllers\karyawan\monitoringskripsi;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use DB;
use App\Konsultasi;
use App\Skripsi;
use Auth;

class KonsultasiController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'konsultasi',
            // Memanggil semua isi dari tabel biodata
            'dis' => DB::table('konsultasi')
            ->select('skripsi_id')
            ->groupBy('konsultasi.skripsi_id')
            ->get(),
            'konsultasi' =>DB::table('konsultasi')
            ->join('skripsi', 'skripsi.id_skripsi', '=', 'konsultasi.skripsi_id')
            ->join('biodata_mhs','biodata_mhs.nim_id','=','skripsi.NIM_id')
            ->select('konsultasi.*','biodata_mhs.*','skripsi.*')
            ->get(),
        ];
        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('karyawan.monitoring-skripsi.konsultasi.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'konsultasi',
           
        ];
        
        // Memanggil tampilan form create
        return view('karyawan.monitoring-skripsi.konsultasi.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        Konsultasi::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Konsultasi berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('karyawan/monitoring-skripsi/konsultasi');
    }

    public function delete($id)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $konsultasi = Konsultasi::find($id);

        // Menghapus biodata yang dicari tadi
        $konsultasi->delete();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Konsultasi berhasil dihapus');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }

   public function edit($nim_id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'konsultasi',
            // Mencari biodata berdasarkan id
            'konsultasi' => DB::table('konsultasi')
            ->join('skripsi', 'skripsi.id_skripsi', '=', 'konsultasi.skripsi_id')
            ->join('biodata_mhs','biodata_mhs.nim_id','=','skripsi.NIM_id')
            ->select('konsultasi.*','biodata_mhs.*')
            ->where('skripsi.NIM_id',$nim_id)
            ->get(),
            'mhs' => DB::table('konsultasi')
            ->join('skripsi', 'skripsi.id_skripsi', '=', 'konsultasi.skripsi_id')
            ->join('biodata_mhs','biodata_mhs.nim_id','=','skripsi.NIM_id')
            ->select('konsultasi.*','biodata_mhs.*','skripsi.*')
            ->where('skripsi.NIM_id',$nim_id)
            ->first(),
        ];
        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('karyawan.monitoring-skripsi.konsultasi.edit',$data);
    }

    public function editAction($id, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $konsultasi = Skripsi::find($id);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $konsultasi->is_verified = '2';
        $konsultasi->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Konsultasi berhasil diverifikasi');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('karyawan/monitoring-skripsi/konsultasi');
    }
}