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
use App\SuratTugasDosen;
use Illuminate\Support\Facades\DB;
use Auth;
use App\SuratTugas_Dsn;


class SuratTugasController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {   $dosen = Auth::user()->username;
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'surattugas',
            // Memanggil semua isi dari tabel biodata
            'surattugas' => DB::table('surat_tugas_dosen')
            ->where('surat_tugas_dosen.nip','=',$dosen)
            ->join('surat_tugas', 'surat_tugas_dosen.surat_id', '=', 'surat_tugas.surat_id')
            ->select('*')
            ->get()
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
    {   $user = Auth::user()->username;
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
         $dosen = $request->input();
        
        $dosen['file_sk'] = time() .'.'.$request->file('file_sk')->getClientOriginalExtension();
        SuratTugasDosen::create($dosen);
        $file = $request->file('file_sk')->move("img/dosen/",$dosen['file_sk']);
        $id = SuratTugasDosen::where('no_surat', $request->input('no_surat'))->first();
        SuratTugas_Dsn::create(['nip' => $user,'surat_id'  => $id->surat_id]);
        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Surat Tugas berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('dosen/surat-tugas');
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
            'surattug' => SuratTugasDosen::find($surat_id)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('dosen.dosen.surat-tugas.edit',$data);    
    }

    public function editAction($surat_id, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $surattug = SuratTugasDosen::find($surat_id);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $surattug->no_surat = $request->input('no_surat');
        $surattug->tanggal_surat = $request->input('tanggal_surat');
        $surattug->keterangan_sk = $request->input('keterangan_sk');
        $surattug->save();

        // Notifikasi sukses
        Session::put('alert-success', 'surat tugas berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('dosen/surat-tugas');
    }

}