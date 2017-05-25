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
use App\NotulensiDosen;

use Illuminate\Support\Facades\DB;


class NotulensiController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'notulensi',
            // Memanggil semua isi dari tabel biodata
            'notulensi' => DB::table('notulen_rapat')
            // ->join('permohonan_ruang', 'permohonan_ruang.id_permohonan_ruang', '=', 'ruang.id_ruang')
            // ->join('ruang', 'ruang.id_ruang', '=', 'notulen_rapat.permohonan_ruang_id')
            ->join('petugas_tu', 'petugas_tu.nip_petugas', '=', 'notulen_rapat.nip_petugas_id')
            ->join('biodata_dosen', 'biodata_dosen.nip', '=', 'notulen_rapat.nip_id')
            ->select('*')
            ->get()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.notulensi.notulensi.DaftarHasilRapat',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'notulensi',
        ];

        // Memanggil tampilan form create
    	return view('notulensi.notulensi.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        Notulensi::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Notulensi berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('notulensi/notulensi');
    }

    public function delete($id_notulen)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $notulensi = Notulensi::find($id_notulen);

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
            // Mencari biodata berdasarkan id
            'notulensi' => Notulensi::find($id_notulen)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('dosen.notulensi.notulensi.LihatHasilRapat',$data);
    }

    public function editAction($id_notulen, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $notulen = Notulensi::find($id_notulen);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $notulen->id_permohonan_ruang = $request->input('id_permohonan_ruang');
        $notulen->nip_petugas = $request->input('nip_petugas');
        $notulen->nip = $request->input('nip');
        $notulen->nama_rapat = $request->input('nama_rapat');
        $notulen->agenda_rapat = $request->input('agenda_rapat');
        $notulen->waktu_pelaksanaan = $request->input('waktu_pelaksanaan');
        $notulen->id_verifikasi = $request->input('id_verifikasi');
        $notulen->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Notulensi berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('notulensi/notulensi');
    }

}