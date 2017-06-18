<?php 

namespace App\Http\Controllers\Mahasiswa;

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
use App\Prestasi;


class PrestasiController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $nim = Auth::user()->username;
        $total_skor = Prestasi::where('nim_id', '=', $nim)->where('ps_is_verified','=','1')->sum('skor');
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'prestasi',
            // Memanggil semua isi dari tabel biodata
            'prestasi' => Prestasi::where('nim_id', '=', $nim)->where('ps_is_verified','!=','3')->get(),
            'total_skor' => $total_skor
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('mahasiswa.prestasi.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'prestasi',
        ];

        // Memanggil tampilan form create
    	return view('mahasiswa.prestasi.create',$data);
    }

    public function createAction(Request $request)
    {
        $mhs = $request->input();
        $mhs['nim_id'] = Auth::user()->username;
        $mhs['file_prestasi']= time() .'.'.$request->file('file_prestasi')->getClientOriginalExtension();
        //$this->validate($request, [
          //  'file_prestasi'=> 'required',]);
        //$filename = basename($_FILES["file_prestasi"]["name"]);
        //$request->file_prestasi->move(public_path('img'), $filename);
        //$mhs->file_prestasi = $filename;
        //$mhs->save();
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        Prestasi::create($mhs);
                $gambar = $request->file('file_prestasi')->move("img/prestasi/",$mhs['file_prestasi']);


        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Data Prestasi berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('mahasiswa/prestasi');
    }

    public function delete($id_presentasi)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $prestasi = Prestasi::find($id_presentasi);

        // Menghapus biodata yang dicari tadi
        $prestasi->delete();

        // Menampilkan notifikasi pesan sukses
    	Session::put('alert-success', 'Data Prestasi berhasil dihapus');

        // Kembali ke halaman sebelumnya
      	return Redirect::back();	 
    }

   public function edit($id_prestasi)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'prestasi',
            // Mencari biodata berdasarkan id
            'prestasi' => Prestasi::find($id_prestasi)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('mahasiswa.prestasi.edit',$data);
    }

    public function editAction($id_prestasi, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $prestasi = Prestasi::find($id_prestasi);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $prestasi->prestasi = $request->input('prestasi');
        $prestasi->tahun_kegiatan = $request->input('tahun_kegiatan');
        $prestasi->jenis_kegiatan = $request->input('jenis_kegiatan');
        $prestasi->kelompok_kegiatan = $request->input('kelompok_kegiatan');
        $prestasi->penyelenggara = $request->input('penyelenggara');
        $prestasi->tingkat = $request->input('tingkat');
        if ($request->file('file_prestasi') != "") {
        $prestasi->file_prestasi = time() .'.'.$request->file('file_prestasi')->getClientOriginalExtension();
         $gambar = $request->file('file_prestasi')->move("img/prestasi/",$prestasi->file_prestasi);
            # code...
        }
        $prestasi->save();
        

        // Notifikasi sukses
        Session::put('alert-success', 'Data prestasi berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('mahasiswa/prestasi');
    }

}