<?php 

namespace App\Http\Controllers\Dosen\notulensi;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
use Auth;
// Tambahkan model yang ingin dipakai
use App\UndanganDosen;
use App\DosenRapat;


class UndanganDosenController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'undangan',
            // Memanggil semua isi dari tabel biodata
            'undangan' => DB::table('notulen_rapat')
            ->join('permohonan_ruang', 'permohonan_ruang.id_permohonan_ruang', '=', 'notulen_rapat.permohonan_ruang_id')
            ->join('jadwal_permohonan', 'jadwal_permohonan.permohonan_ruang_id', '=', 'permohonan_ruang.id_permohonan_ruang')
            ->join('ruang', 'ruang.id_ruang', '=', 'jadwal_permohonan.ruang_id')
            ->join('dosen_rapat', 'dosen_rapat.notulen_id', '=', 'notulen_rapat.id_notulen')
            ->select('*')
            ->where('dosen_rapat.nip','=', Auth::user()->username)
            ->get(),
            'status' => DB::table('notulen_rapat')
            ->join('dosen_rapat', 'dosen_rapat.nip', '=', 'notulen_rapat.nip_id')
            ->select('*')
            ->get()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.notulensi.undangan.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'undangan',
        ];

        // Memanggil tampilan form create
    	return view('dosen.notulensi.undangan.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        DosenRapat::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Dosen Rapat berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('dosen/notulensi/undangan');
    }

    public function konfirmasi($id_notulen)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
       

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        
        DB::table('dosen_rapat')
            ->where('notulen_id','=',$id_notulen) -> where('nip','=', Auth::user()->username)
            ->update(['status' => 1]);

        // Notifikasi sukses
        Session::put('alert-success', 'Berhasil Konfirmasi Rapat');

        // Kembali ke halaman notulensi/dosenrapat
        return Redirect::to('undangandosen');
    }

    public function editAction($nip, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $dosenrapat = DosenRapat::find($nip);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $dosenrapat->nip = $request->input('nip');
        $dosenrapat->notulen_id = $request->input('notulen_id');
        $dosenrapat->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Dosen Rapat berhasil diedit');

        // Kembali ke halaman notulensi/dosenrapat
        return Redirect::to('dosen/notulensi/undangan');
    }

    public function delete($nip)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $dosenrapat = DosenRapat::find($nip);

        // Menghapus biodata yang dicari tadi
        $dosenrapat->delete();

        // Menampilkan notifikasi pesan sukses
    	Session::put('alert-success', 'Dosen Rapat berhasil dihapus');

        // Kembali ke halaman sebelumnya
      	return Redirect::back();	 
    }

   public function edit($nip)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'UndanganDosen',
            // Mencari biodata berdasarkan id
            'undangandosen' => DosenRapat::find($nip)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('dosen.notulensi.undangan.edit',$data);
    }


}