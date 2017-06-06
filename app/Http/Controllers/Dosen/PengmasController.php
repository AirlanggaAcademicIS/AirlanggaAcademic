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
use App\PengmasDosen;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Pengmas_Dsn;
class PengmasController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {   $dosen = Auth::user()->username;
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'pengmas',
            // Memanggil semua isi dari tabel biodata
            'pengmas' => DB::table('pengmas_dosen')
            ->where('pengmas_dosen.nip','=',$dosen)
            ->join('pengabdian_masyarakat', 'pengmas_dosen.kegiatan_id', '=', 'pengabdian_masyarakat.kegiatan_id')
            ->select('*')
            ->get()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.pengmas.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'pengmas',
        ];

        // Memanggil tampilan form create
        return view('dosen.pengmas.create',$data);
    }

    public function createAction(Request $request)
    {   $user = Auth::user()->username;
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        $dosen = $request->input();
        $dosen['status_pengmas'] = 0 ;
        $dosen['file_pengmas'] = time() .'.'.$request->file('file_pengmas')->getClientOriginalExtension();
        PengmasDosen::create($dosen);
        $file = $request->file('file_pengmas')->move("img/dosen/",$dosen['file_pengmas']);
        $id = PengmasDosen::where('nama_kegiatan', $request->input('nama_kegiatan'))->first();
        Pengmas_Dsn::create(['nip' => $user,'kegiatan_id'  => $id->kegiatan_id]);
        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Pengmas berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('dosen/pengmas');
    }

    public function delete($kegiatan_id)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $pengmas = PengmasDosen::find($kegiatan_id);

        // Menghapus biodata yang dicari tadi
        $pengmas->delete();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'pengmas berhasil dihapus');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }

   public function edit($kegiatan_id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'pengmas',
            // Mencari biodata berdasarkan id
            'pengmas' => PengmasDosen::find($kegiatan_id)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('dosen.pengmas.edit',$data);    
    }

    public function editAction($kegiatan_id, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $pengmas = PengmasDosen::find($kegiatan_id);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $pengmas->nama_kegiatan = $request->input('nama_kegiatan');
        $pengmas->tempat_kegiatan = $request->input('tempat_kegiatan');
        $pengmas->tanggal_kegiatan = $request->input('tanggal_kegiatan');
        $pengmas->save();

        // Notifikasi sukses
        Session::put('alert-success', 'dosen berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('dosen/pengmas');
    }

}