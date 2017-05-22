<?php 

namespace App\Http\Controllers\Dosen\Dosen;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\SuratTugasDosen;


class SuratTugasController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'surattugas',
            // Memanggil semua isi dari tabel biodata
            'surattugas' => SuratTugasDosen::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.dosen.surat-tugas.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'surattugas',
        ];

        // Memanggil tampilan form create
        return view('dosen.dosen.surat-tugas.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
         $dosen = $request->input();
        
        $dosen['file_sk'] = time() .'.'.$request->file('file_sk')->getClientOriginalExtension();
        SuratTugasDosen::create($dosen);
        $file = $request->file('file_sk')->move("img/dosen/",$dosen['file_sk']);

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Surat Tugas berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('dosen/dosen/surat-tugas');
    }

    public function delete($surat_id)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $surattug = SuratTugasDosen::find($surat_id);

        // Menghapus biodata yang dicari tadi
        $surattug->delete();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Surat Tugas berhasil dihapus');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }

   public function edit($surat_id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'surattugas',
            // Mencari biodata berdasarkan id
            'surattugas' => SuratTugasDosen::find($surat_id)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('dosen.dosen.surat-tugas.edit',$data);    
    }

    public function editAction($surat_id, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $surattug = SuratTugasDosen::find($surat_id);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $surat_tugas_dosen->no_surat = $request->input('no_surat');
        $surat_tugas_dosen->tanggal_surat = $request->input('tanggal surat');
        $surat_tugas_dosen->keterangan_sk = $request->input('keterangan_sk');
        $pengmas_dosen->save();

        // Notifikasi sukses
        Session::put('alert-success', 'surat tugas berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('dosen/dosen/surat-tugas');
    }

}