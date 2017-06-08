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
use App\JurnalDosen;
use App\Jurnal_Dsn;
use Auth;
use Illuminate\Support\Facades\DB;


class JurnalController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {   $dosen = Auth::user()->username;
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'jurnal',
            // Memanggil semua isi dari tabel biodata
            'jurnal' => DB::table('jurnal_dosen')
            ->where('jurnal_dosen.nip','=',$dosen)
            ->join('jurnal','jurnal.jurnal_id','=','jurnal_dosen.jurnal_id')
            ->select('*')
            ->get()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.jurnal.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'jurnal',
        ];

        // Memanggil tampilan form create
        return view('dosen.jurnal.create',$data);
    }

    public function createAction(Request $request)
    {   $user = Auth::user()->username;
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        $dosen = $request->input();
        $dosen['status_jurnal'] = 0 ;
        $dosen['file_jurnal'] = time() .'.'.$request->file('file_jurnal')->getClientOriginalExtension();
        JurnalDosen::create($dosen);
        $file = $request->file('file_jurnal')->move("img/dosen/",$dosen['file_jurnal']);
        $id = JurnalDosen::where('nama_jurnal', $request->input('nama_jurnal'))->first();
        Jurnal_Dsn::create(['nip' => $user,'jurnal_id'  => $id->jurnal_id]);
        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Jurnal Berhasil Ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('dosen/jurnal');
    }

    public function delete($jurnal_id)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $jurnal = JurnalDosen::find($jurnal_id);

        // Menghapus biodata yang dicari tadi
        $jurnal->delete();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Jurnal Berhasil Dihapus');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }

   public function edit($jurnal_id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'jurnal',
            // Mencari biodata berdasarkan id
            'jurnal' => JurnalDosen::find($jurnal_id)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('dosen.jurnal.edit',$data);
    }

    public function editAction($jurnal_id, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $jurnal = JurnalDosen::find($jurnal_id);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $jurnal->nama_jurnal = $request->input('nama_jurnal');
        $jurnal->halaman_jurnal = $request->input('halaman_jurnal');
        $jurnal->bidang_jurnal = $request->input('bidang_jurnal');
        $jurnal->tanggal_jurnal = $request->input('tanggal_jurnal');        
        $jurnal->volume_jurnal = $request->input('volume_jurnal');
        $jurnal->penulis_ke = $request->input('penulis_ke');
        $jurnal->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Jurnal Berhasil Diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('dosen/jurnal');
    }

}