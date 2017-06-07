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
use App\Konferensi;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Konferensi_Dsn;


class KonferensiController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {   $dosen = Auth::user()->username;
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'konferensi',
            // Memanggil semua isi dari tabel biodata
            'konferensi' => DB::table('konferensi_dosen')
            ->where('konferensi_dosen.nip','=',$dosen)
            ->join('konferensi', 'konferensi_dosen.konferensi_id', '=', 'konferensi.konferensi_id')
            ->select('*')
            ->get()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.konferensi.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'konferensi',
        ];

        // Memanggil tampilan form create
    	return view('dosen.konferensi.create',$data);
    }

    public function createAction(Request $request)
    {   $user = Auth::user()->username;
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        $dosen = $request->input();
        $dosen['status_konferensi'] = 0 ;
        $dosen['file_konferensi'] = time() .'.'.$request->file('file_konferensi')->getClientOriginalExtension();
        Konferensi::create($dosen);
        $file = $request->file('file_konferensi')->move("img/dosen/",$dosen['file_konferensi']);
        $id = Konferensi::where('nama_konferensi', $request->input('nama_konferensi'))->first();
        Konferensi_Dsn::create(['nip' => $user,'konferensi_id'  => $id->konferensi_id]);
        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Konferensi berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('dosen/konferensi');
    }

    public function delete($konferensi_id)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata

        $konferensi = Konferensi::find($konferensi_id);

        // Menghapus biodata yang dicari tadi
        $konferensi->delete();

        // Menampilkan notifikasi pesan sukses
    	Session::put('alert-success', 'Konferensi berhasil dihapus');

        // Kembali ke halaman sebelumnya
      	return Redirect::back();	 
    }

   public function edit($konferensi_id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'konferensi',
            // Mencari biodata berdasarkan id
            'konferensi' => Konferensi::find($konferensi_id)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('dosen.konferensi.edit',$data);
    }

    public function editAction($konferensi_id, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $konferensi = Konferensi::find($konferensi_id);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $konferensi->nama_konferensi = $request->input('nama_konferensi');
        $konferensi->pemapar_konferensi = $request->input('pemapar_konferensi');
        $konferensi->tempat_konferensi = $request->input('tempat_konferensi');
        $konferensi->tanggal_konferensi = $request->input('tanggal_konferensi');
        $konferensi->materi_konferensi = $request->input('materi_konferensi');
        $konferensi->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Konferensi berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('dosen/konferensi');
    }

}