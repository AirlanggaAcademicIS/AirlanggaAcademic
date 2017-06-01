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
// Tambahkan model yang ingin dipakai
use App\Dokumentasi;
use App\PengajuanKegiatan;
use App\RincianRundown;
use Illuminate\Support\Facades\DB;
use PDF;

class DokumentasiController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'dokumentasi',
            // Memanggil semua isi dari tabel biodata
            'dokumentasi' => Dokumentasi::all()

        
        ];
        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('mahasiswa.pengelolaan-kegiatan.dokumentasi.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar Biodata
            'page' => 'dokumentasi',
            'dokumentasi'=> array(),
            'kegiatan' => PengajuanKegiatan::all()
        ];

        // Memanggil tampilan form create
    	return view('mahasiswa.pengelolaan-kegiatan.dokumentasi.create',$data);
    }

    public function selected($id,Request $request)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar Biodata
            'page' => 'dokumentasi',
            'dokumentasi'=> array(),
            'kegiatan' => PengajuanKegiatan::find($id)
            ];

        // Memanggil tampilan form create
        return view('mahasiswa.pengelolaan-kegiatan.dokumentasi.create',$data);
    }

    public function create2($id_kegiatan)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar Biodata
            'page' => 'dokumentasi',
            'dokumentasi' => DB::table('dokumentasi')
            ->join('pengajuan_kegiatan', 'pengajuan_kegiatan.id_kegiatan', '=', 'dokumentasi.kegiatan_id')
            ->select('*')
            ->where('dokumentasi.kegiatan_id','=',$id_kegiatan)
            ->get(),
            'kegiatan' => PengajuanKegiatan::all()
        ];

        // Memanggil tampilan form create
        return view('mahasiswa.pengelolaan-kegiatan.dokumentasi.create',$data);
    }

    public function createAction(Request $request)
    {
       
        $dok = $request->input();
        $dok['url_foto']= time() .'.'.$request->file('url_foto')->getClientOriginalExtension();
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        Dokumentasi::create($dok);
            $gambar = $request->file('url_foto')->move("img/dokumentasi/",$dok['url_foto']);

        $pk = PengajuanKegiatan::find($request->input('kegiatan_id'));
        $pk->rpelaksanaan = $request->input('rpelaksanaan');
        $pk->konfirmasi_proposal = '1';
        $pk->konfirmasi_lpj = '1';
        $pk->save();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Dokumentasi berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('mahasiswa/dokumentasi');
    }

    public function delete($id_dokumentasi)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $dokumentasi = Dokumentasi::find($id_dokumentasi);

        // Menghapus biodata yang dicari tadi
        $dokumentasi->delete();

        // Menampilkan notifikasi pesan sukses
    	Session::put('alert-success', 'gambar berhasil dihapus');

        // Kembali ke halaman sebelumnya
      	return Redirect::back();	 
    }

   public function edit($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'dokumentasi',
            // Mencari biodata berdasarkan id
            'dokumentasi' => Dokumentasi::find($id),

            'kegiatan' => PengajuanKegiatan::find($id)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('mahasiswa.pengelolaan-kegiatan.dokumentasi.edit',$data);
    }

    public function editAction($id, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $dokumentasi = Dokumentasi::find($id);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        // $dokumentasi->nama_dokumentasi = $request->input('nama_dokumentasi');
        $dokumentasi->lesson_learned = $request->input('lesson_learned');
        // $dokumentasi->gambar = $request->input('url_foto');
        $dokumentasi->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Dokumentasi berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('mahasiswa/dokumentasi');
    }

    public function toPdf($id_kegiatan)
    {   
        $data = [
            'kegiatan' => PengajuanKegiatan::find($id_kegiatan),
            'dokumentasi' => Dokumentasi::all()
        ];

        $pdf = PDF::loadView('mahasiswa.pengelolaan-kegiatan.detail-pengajuan.pdf', $data);
        return $pdf->download('pengelolaan-kegiatan.pdf');
    }

}