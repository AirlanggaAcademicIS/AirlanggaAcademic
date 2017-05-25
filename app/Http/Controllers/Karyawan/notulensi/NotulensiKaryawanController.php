<?php 

namespace App\Http\Controllers\Karyawan\notulensi;
use Illuminate\Support\Facades\DB;
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
use App\NotulensiKaryawan;


class NotulensiKaryawanController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'notulensi',
            // Memanggil semua isi dari tabel biodata
            'notulensi' => DB::table('notulen_rapat')
            ->join('permohonan_ruang', 'permohonan_ruang.id_permohonan_ruang', '=', 'notulen_rapat.permohonan_ruang_id')
            ->join('jadwal_permohonan', 'jadwal_permohonan.permohonan_ruang_id', '=', 'permohonan_ruang.id_permohonan_ruang')
            ->join('ruang', 'ruang.id_ruang', '=', 'jadwal_permohonan.ruang_id')
            ->select('*')
            ->get()

        
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('karyawan.notulensi.notulensi.index',$data);
    }

    public function create()
    {  // Menginsertkan apa yang ada di form ke dalam tabel biodata
        $array[] =  array();
        $array[0]['id_notulen']= 0;
        
         $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'notulensi',
            'ruang' => DB::table('notulen_rapat')
            ->join('permohonan_ruang', 'permohonan_ruang.id_permohonan_ruang', '=', 'notulen_rapat.permohonan_ruang_id')
            ->join('jadwal_permohonan', 'jadwal_permohonan.permohonan_ruang_id', '=', 'permohonan_ruang.id_permohonan_ruang')
            ->join('ruang', 'ruang.id_ruang', '=', 'jadwal_permohonan.ruang_id')
            ->select('*')
            ->get(),
            'dosen' => DB::table('biodata_dosen')
            ->select('*')
            ->get(),
            'nama_rapat' => DB::table('notulen_rapat')
            ->select('*')
            ->get(),
            'rapat' => $array
        ];
       
        // Memanggil tampilan form create
        return view('karyawan.notulensi.notulensi.create',$data);
    }
 public function create2(Request $request)
    {  // Menginsertkan apa yang ada di form ke dalam tabel biodata
         $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'notulensi',
            'ruang' => DB::table('notulen_rapat')
            ->join('permohonan_ruang', 'permohonan_ruang.id_permohonan_ruang', '=', 'notulen_rapat.permohonan_ruang_id')
            ->join('jadwal_permohonan', 'jadwal_permohonan.permohonan_ruang_id', '=', 'permohonan_ruang.id_permohonan_ruang')
            ->join('ruang', 'ruang.id_ruang', '=', 'jadwal_permohonan.ruang_id')
            ->select('*')
            ->get(),
            'dosen' => DB::table('biodata_dosen')
            ->select('*')
            ->get(),
            'nama_rapat' => DB::table('notulen_rapat')
            ->select('*')
            ->get(),
            'rapat' => DB::table('notulen_rapat')
            ->join('permohonan_ruang', 'permohonan_ruang.id_permohonan_ruang', '=', 'notulen_rapat.permohonan_ruang_id')
            ->join('jadwal_permohonan', 'jadwal_permohonan.permohonan_ruang_id', '=', 'permohonan_ruang.id_permohonan_ruang')
            ->join('ruang', 'ruang.id_ruang', '=', 'jadwal_permohonan.ruang_id')
            ->select('*')
            ->where ('id_notulen','=', $request->input('id_notulen'))
            ->get()
        ];
    
        // Memanggil tampilan form create
        return view('karyawan.notulensi.notulensi.create2',$data);
    }
    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        $notulensi = NotulensiKaryawan::find($request->input('id_notulen'));
         //dd($notulensi);
         $notulensi->nip_id = $request->input('nip_id');
        $notulensi->hasil_pembahasan = $request->input('hasil_pembahasan');
        $notulensi->deskripsi_rapat = $request->input('deskripsi_rapat');
        //dd($notulensi);
         $notulensi->save();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Notulensi berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('notulensi');
    }

    public function delete($id_notulen)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $notulensi = NotulensiKaryawan::find($id_notulen);

        // Menghapus biodata yang dicari tadi
        $notulensi->delete();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Notulensi berhasil dihapus');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }
     public function edit($id_notulen)
    {
         $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'notulensi',
            // Memanggil semua isi dari tabel biodata
            'notulensi2' => DB::table('notulen_rapat')
            ->join('permohonan_ruang', 'permohonan_ruang.id_permohonan_ruang', '=', 'notulen_rapat.permohonan_ruang_id')
            ->join('jadwal_permohonan', 'jadwal_permohonan.permohonan_ruang_id', '=', 'permohonan_ruang.id_permohonan_ruang')
            ->join('ruang', 'ruang.id_ruang', '=', 'jadwal_permohonan.ruang_id')
            ->select('*')
            ->where('notulen_rapat.id_notulen','=',$id_notulen)
            ->get(),
            'dosen' => DB::table('biodata_dosen')
            ->select('*')
            ->get(),
        
            
            'notulensi' => NotulensiKaryawan::find($id_notulen)
        
        ];


        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('karyawan.notulensi.notulensi.edit',$data);
    }

    public function editAction($id_notulen, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $notulensi = NotulensiKaryawan::find($id_notulen);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
         $notulensi->nip_id = $request->input('nip_id');
        $notulensi->nama_rapat = $request->input('nama_rapat');
        $notulensi->agenda_rapat = $request->input('agenda_rapat');
        $notulensi->waktu_pelaksanaan = $request->input('waktu_pelaksanaan');
        $notulensi->hasil_pembahasan = $request->input('hasil_pembahasan');
        $notulensi->deskripsi_rapat = $request->input('deskripsi_rapat');
        $notulensi->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Notulensi berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('notulensi');
    }


   

}