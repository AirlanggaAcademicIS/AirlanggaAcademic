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
use Illuminate\Support\Facades\DB;

// Tambahkan model yang ingin dipakai
use App\PengajuanKegiatan;


class PengajuanController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'pengajuan',
            // Memanggil semua isi dari tabel biodata
            'pengajuan' => PengajuanKegiatan::where('konfirmasi_proposal','0') -> where('konfirmasi_lpj','0')-> get()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('mahasiswa.pengelolaan-kegiatan.pengajuan.index',$data);
    }

    // Function untuk menampilkan tabel
    public function sedangDiproses()
    {
        $nim = Auth::user()->username;
        $nama ="Sedang Di Proses";
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'Status',
            'nama_pengajuan' => $nama,
            // Memanggil semua isi dari tabel biodata
            'Status' => DB::table('mhs_kegiatan')
            ->join('pengajuan_kegiatan','pengajuan_kegiatan.id_kegiatan' , '=', 'mhs_kegiatan.kegiatan_id') 
            ->join('biodata_mhs', 'biodata_mhs.nim_id', '=', 'mhs_kegiatan.nim_id') 
            ->select('*')
            ->where('biodata_mhs.nim_id', '=', $nim)
            ->where('pengajuan_kegiatan.konfirmasi_proposal','=','0')
            ->where('pengajuan_kegiatan.konfirmasi_lpj','=','0')
            ->whereNull('pengajuan_kegiatan.deleted_at')
            ->get(),

             'StatusLPJ' => DB::table('mhs_kegiatan')
            ->join('pengajuan_kegiatan','pengajuan_kegiatan.id_kegiatan' , '=', 'mhs_kegiatan.kegiatan_id') 
            ->join('biodata_mhs', 'biodata_mhs.nim_id', '=', 'mhs_kegiatan.nim_id') 
            ->select('*')
            ->where('biodata_mhs.nim_id', '=', $nim)
            ->where('pengajuan_kegiatan.konfirmasi_proposal','=','1')
            ->where('pengajuan_kegiatan.konfirmasi_lpj','=','1')
            ->whereNull('pengajuan_kegiatan.deleted_at')
            ->get(),
        ];
        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('mahasiswa.pengelolaan-kegiatan.status.index',$data);
    }

     public function dikonfirmasiProposal()
    {
        $nim = Auth::user()->username;
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'DiterimaProposal',
            // Memanggil semua isi dari tabel biodata
            'Status' => DB::table('mhs_kegiatan')
            ->join('pengajuan_kegiatan','pengajuan_kegiatan.id_kegiatan' , '=', 'mhs_kegiatan.kegiatan_id') 
            ->join('biodata_mhs', 'biodata_mhs.nim_id', '=', 'mhs_kegiatan.nim_id') 
            ->select('*')
            ->where('biodata_mhs.nim_id', '=', $nim)
            ->where('pengajuan_kegiatan.konfirmasi_proposal','=','1')
            ->where('pengajuan_kegiatan.konfirmasi_lpj','=','0')
            ->whereNull('pengajuan_kegiatan.deleted_at')
            ->get(),

        ];
        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('mahasiswa.pengelolaan-kegiatan.status.dikonfirmasi',$data);
    }

     public function dikonfirmasiLPJ()
    {
        $nim = Auth::user()->username;
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'DiterimaLPJ',
            // Memanggil semua isi dari tabel biodata
            'Status' => DB::table('mhs_kegiatan')
            ->join('pengajuan_kegiatan','pengajuan_kegiatan.id_kegiatan' , '=', 'mhs_kegiatan.kegiatan_id') 
            ->join('biodata_mhs', 'biodata_mhs.nim_id', '=', 'mhs_kegiatan.nim_id') 
            ->select('*')
            ->where('biodata_mhs.nim_id', '=', $nim)
            ->where('pengajuan_kegiatan.konfirmasi_proposal','=','1')
            ->where('pengajuan_kegiatan.konfirmasi_lpj','=','2')
            ->whereNull('pengajuan_kegiatan.deleted_at')
            ->get(),

        ];
        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('mahasiswa.pengelolaan-kegiatan.status.dikonfirmasi',$data);
    }
     public function ditolak()
    {
        $nim = Auth::user()->username;
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'Ditolak',
            // Memanggil semua isi dari tabel biodata
            'Status' => DB::table('mhs_kegiatan')
            ->join('pengajuan_kegiatan','pengajuan_kegiatan.id_kegiatan' , '=', 'mhs_kegiatan.kegiatan_id') 
            ->join('biodata_mhs', 'biodata_mhs.nim_id', '=', 'mhs_kegiatan.nim_id') 
            ->join('dokumentasi','dokumentasi.kegiatan_id','=','mhs_kegiatan.kegiatan_id')
            ->select('*')
            ->where('biodata_mhs.nim_id', '=', $nim)
            ->where('pengajuan_kegiatan.konfirmasi_proposal','=','2')
            ->where('pengajuan_kegiatan.konfirmasi_lpj','=','0')
            ->whereNull('pengajuan_kegiatan.deleted_at')
            ->get(),

             'StatusLPJ' => DB::table('mhs_kegiatan')
            ->join('pengajuan_kegiatan','pengajuan_kegiatan.id_kegiatan' , '=', 'mhs_kegiatan.kegiatan_id') 
            ->join('biodata_mhs', 'biodata_mhs.nim_id', '=', 'mhs_kegiatan.nim_id') 
            ->join('dokumentasi','dokumentasi.kegiatan_id','=','mhs_kegiatan.kegiatan_id')
            ->select('*')
            ->where('biodata_mhs.nim_id', '=', $nim)
            ->where('pengajuan_kegiatan.konfirmasi_proposal','=','1')
            ->where('pengajuan_kegiatan.konfirmasi_lpj','=','3')
            ->whereNull('pengajuan_kegiatan.deleted_at')
            ->get(),
        ];
        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('mahasiswa.pengelolaan-kegiatan.status.ditolak',$data);
    }
    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'pengajuan',
        ];

        // Memanggil tampilan form create
        return view('mahasiswa/pengelolaan-kegiatan.pengajuan.create',$data);
    }

    public function createAction(Request $request)
    {

        
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        // PengajuanKegiatan::create($request->input());
        $pen = $request->input();
        $pen['url_poster']= time() .'.'.$request->file('url_poster')->getClientOriginalExtension();
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        // PengajuanKegiatan::create($pen);
            $gambar = $request->file('url_poster')->move("img/pengajuan/",$pen['url_poster']);
        
        $id = DB::table('pengajuan_kegiatan')->insertGetId(
        ['nama' => $request->input('nama'), 'konfirmasi_proposal' => 0, 'konfirmasi_lpj' => 0,
        'history'=> $request->input('history'), 'tujuan'=>$request->input('tujuan'), 
        'mekanisme'=>$request->input('mekanisme'), 'tglpengajuan'=>$request->input('tglpengajuan'),
        'rpengajuan'=>$request->input('rpengajuan'), 'url_poster'=>$pen['url_poster']],'id_kegiatan'
        );

        Session::put('alert-success', 'Pengajuan Kegiatan berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('mahasiswa/pengelolaan-kegiatan/input-struktur-panitia/'.$id.'');
    }
    // public function delete($id)
    // {
    //     // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
    //     $pengajuan = Pengajuan::find($id);

    //     // Menghapus biodata yang dicari tadi
    //     $pengajuan -> delete();

    //     // Menampilkan notifikasi pesan sukses
    //     Session::put('alert-success', 'Pengajuan Kegiatan berhasil dihapus');

    //     // Kembali ke halaman sebelumnya
    //     return Redirect::back();     
    // }

   public function edit($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'pengajuan',
            // Mencari biodata berdasarkan id
            'pengajuan' => PengajuanKegiatan::find($id)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('mahasiswa.pengelolaan-kegiatan.pengajuan.edit',$data);
    }

    public function editAction($id, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $pengajuan = PengajuanKegiatan::find($id);
        $pen = $request->input();
        $pen['url_poster']= time() .'.'.$request->file('url_poster')->getClientOriginalExtension();
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        // PengajuanKegiatan::create($pen);
            $gambar = $request->file('url_poster')->move("img/pengajuan/",$pen['url_poster']);
        
        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $pengajuan->nama = $request->input('nama');
        $pengajuan->konfirmasi_proposal = "0";
        $pengajuan->konfirmasi_lpj = "0";
        $pengajuan->history = $request->input('history');
        $pengajuan->tujuan = $request->input('tujuan');
        $pengajuan->mekanisme = $request->input('mekanisme');
        $pengajuan->tglpengajuan = $request->input('tglpengajuan');
        $pengajuan->rpengajuan = $request->input('rpengajuan');
        $pengajuan->url_poster = $pen['url_poster'];
        $pengajuan->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Pengajuan Kegiatan berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('mahasiswa/pengelolaan-kegiatan/input-struktur-panitia/'.$id.'/edit');
    }

}

   


