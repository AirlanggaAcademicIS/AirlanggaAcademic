<?php 

namespace App\Http\Controllers\mahasiswa\monitoringskripsi;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\Konsultasi;
use App\Skripsi;
use Auth;
use Illuminate\Support\Facades\DB;

class KonsultasiController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $nim= Auth::user()->username;
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata

            'page' => 'konsultasi',
            // Memanggil semua isi dari tabel biodata
            'konsultasi' => DB::table('konsultasi')
            ->join('skripsi', 'skripsi.id_skripsi', '=', 'konsultasi.skripsi_id')
            ->join('biodata_mhs','biodata_mhs.nim_id','=','skripsi.NIM_id')
            ->select('*')
            ->where('skripsi.NIM_id','=',$nim)
            ->get()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('mahasiswa.monitoring-skripsi.konsultasi.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'konsultasi',
             'mhs' => Skripsi::where('NIM_id','=', Auth::user()->username)->get()
        ];
        // Memanggil tampilan form create
        return view('mahasiswa.monitoring-skripsi.konsultasi.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        Konsultasi::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Konsultasi berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('mahasiswa/monitoring-skripsi/konsultasi');
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

   public function edit($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'konsultasi',
            // Mencari biodata berdasarkan id
            'konsultasi' => Konsultasi::find($id)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('mahasiswa.monitoring-skripsi.konsultasi.edit',$data);
    }

    public function editAction($id, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $konsultasi = Konsultasi::find($id);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $konsultasi->skripsi_id = $request->input('skripsi_id');
        $konsultasi->tgl_konsul = $request->input('tgl_konsul');
        $konsultasi->catatan_konsul = $request->input('catatan_konsul');
        $konsultasi->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Konsultasi berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('mahasiswa/monitoring-skripsi/konsultasi');
    }
}