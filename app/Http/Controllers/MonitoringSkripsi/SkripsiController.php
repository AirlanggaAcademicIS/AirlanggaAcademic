<?php 

namespace App\Http\Controllers\MonitoringSkripsi;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\Skripsi;


class SkripsiController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar skripsi
            'page' => 'skripsi',
            // Memanggil semua isi dari tabel skripsi
            'skripsi' => Skripsi::all()
        ];

        // Memanggil tampilan index di folder monitoring-skripsi/skripsi dan juga menambahkan $data tadi di view
        return view('monitoring-skripsi.skripsi.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar skripsi
            'page' => 'skripsi',
        ];

        // Memanggil tampilan form create
        return view('monitoring-skripsi.skripsi.create',$data);

    }

    public function createAction(Request $request)
    {
        //dd($request->input());
        // Menginsertkan apa yang ada di form ke dalam tabel skripsi
        Skripsi::create($request->input());


        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Data Skripsi berhasil ditambahkan');

        // Kembali ke halaman monitoring-skripsi/skripsi
        return Redirect::to('monitoring-skripsi/skripsi');
    }

    public function delete($id)
    {
        // Mencari skripsi berdasarkan id dan memasukkannya ke dalam variabel $skripsi
        $skripsi = Skripsi::find($id);

        // Menghapus skripsi yang dicari tadi
        $skripsi->delete();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Data Skripsi berhasil dihapus');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }

   public function edit($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar skripsi
            'page' => 'skripsi',
            // Mencari skripsi berdasarkan id
            'skripsi' => Skripsi::find($id)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('monitoring-skripsi.skripsi.edit',$data);
    }

    public function editAction($id, Request $request)
    {
        // Mencari skripsi yang akan di update dan menaruhnya di variabel $skripsi
        $skripsi = Skripsi::find($id);

        // Mengupdate $skripsi tadi dengan isi dari form edit tadi
        $skripsi->nim = $request->input('NIM');
        $skripsi->id_kbk = $request->input('id_kbk');
        $skripsi->Judul = $request->input('Judul');
        $skripsi->upload_berkas_proposal = $request->input('upload_berkas_proposal');
        $skripsi->tanggal_pengumpulan_proposal = $request->input('tanggal_pengumpulan_proposal');
        $skripsi->tgl_sidangpro = $request->input('tgl_sidangpro');
        $skripsi->waktu_sidangpro = $request->input('waktu_sidangpro');
        $skripsi->tempat_sidangpro = $request->input('tempat_sidangpro');
        $skripsi->id_statusprop = $request->input('id_statusprop');
        $skripsi->nilai_sidangpro = $request->input('nilai_sidangpro');
        $skripsi->upload_berkas_skripsi = $request->input('upload_berkas_skripsi');
        $skripsi->tanggal_pengumpulan_skripsi = $request->input('tanggal_pengumpulan_skripsi');
        $skripsi->tgl_sidangskrip = $request->input('tgl_sidangskrip');
        $skripsi->waktu_sidangskrip = $request->input('waktu_sidangskrip');
        $skripsi->tempat_sidangskrip = $request->input('tempat_sidangskrip');
        $skripsi->id_statusskrip = $request->input('id_statusskrip');
        $skripsi->nilai_sidangskrip = $request->input('nilai_sidangskrip');
        $skripsi->is_verified = $request->input('is_verified');
        $skripsi->nip_petugas = $request->input('nip_petugas');
        $skripsi->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Data Skripsi berhasil diedit');

        // Kembali ke halaman monitoring-skripsi/skripsi
        return Redirect::to('monitoring-skripsi/skripsi');
    }

}