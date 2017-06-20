<?php 


namespace App\Http\Controllers\Dosen\pengelolaankegiatan;

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
use App\RincianDana;
use App\StrukturPanitiaDosen;
use Auth;
use Illuminate\Support\Facades\DB;
use PDF;

class DokumentasiController extends Controller
{
    // Function untuk menampilkan tabel
    public function index()
    {
        // $data = [
        //     // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
        //     'page' => 'dokumentasi',
        //     // Memanggil semua isi dari tabel biodata
        //     'dokumentasi' => Dokumentasi::all()
        //     'kegiatan' => PengajuanKegiatan::where('konfirmasi_proposal','1')->where('konfirmasi_lpj','0')->get()

        
        // ];
        $nip = Auth::user()->username;
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'Status',
            // Memanggil semua isi dari tabel biodata
            'Status' => DB::table('dosen_kegiatan')
            ->join('pengajuan_kegiatan','pengajuan_kegiatan.id_kegiatan' , '=', 'dosen_kegiatan.kegiatan_id') 
            ->join('biodata_dosen', 'biodata_dosen.nip', '=', 'dosen_kegiatan.nip_id')
            // ->join('dokumentasi', 'dokumentasi.kegiatan_id', '=', 'mhs_kegiatan.kegiatan_id') 
            ->select('*')
            ->where('dosen_kegiatan.nip_id', '=', $nip)
            ->where('pengajuan_kegiatan.konfirmasi_proposal','=','1')
            ->where('pengajuan_kegiatan.konfirmasi_lpj','=','0')
            ->whereNull('pengajuan_kegiatan.deleted_at')
            ->get(),

        ];
        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.pengelolaan-kegiatan.dokumentasi.index',$data);
    }

    public function create()
    {
       
       $nip = Auth::user()->username;
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'Status',
            // Memanggil semua isi dari tabel biodata
            'Status' => DB::table('dosen_kegiatan')
            ->join('pengajuan_kegiatan','pengajuan_kegiatan.id_kegiatan' , '=', 'dosen_kegiatan.kegiatan_id') 
            ->join('biodata_dosen', 'biodata_dosen.nip', '=', 'dosen_kegiatan.nip_id')
            // ->join('dokumentasi', 'dokumentasi.kegiatan_id', '=', 'mhs_kegiatan.kegiatan_id') 
            ->select('*')
            ->where('dosen_kegiatan.nip_id', '=', $nip)
            ->where('pengajuan_kegiatan.konfirmasi_proposal','=','1')
            ->where('pengajuan_kegiatan.konfirmasi_lpj','=','0')
            ->whereNull('pengajuan_kegiatan.deleted_at')
            ->get(),

        ];
        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.pengelolaan-kegiatan.dokumentasi.create',$data);
    }

    public function selected($id, Request $request)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar Biodata
            'page' => 'dokumentasi',
            'dokumentasi'=> array(),
            'kegiatan' => PengajuanKegiatan::find($id)
            ];

        // Memanggil tampilan form create
        return view('dosen.pengelolaan-kegiatan.dokumentasi.create',$data);
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
        return view('dosen.pengelolaan-kegiatan.dokumentasi.create',$data);
    }

    public function createAction(Request $request)
    {
       
        $dok = $request->input();
        $dok['url_foto']= time() .'.'.$request->file('url_foto')->getClientOriginalExtension();
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        Dokumentasi::create($dok);
            $gambar = $request->file('url_foto')->move("img/dokumentasi/",$dok['url_foto']);
        $id = $request->input('kegiatan_id');
        // Menampilkan notifikasi pesan sukses

        $kegiatan = PengajuanKegiatan::find($id);
        $kegiatan->konfirmasi_lpj = '1';
        $kegiatan->tglpelaksanaan = $request->input('tglpelaksanaan');
        $kegiatan->rpelaksanaan = $request->input('rpelaksanaan');
        $kegiatan->save();
        Session::put('alert-success', 'Dokumentasi berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('dosen/pengelolaan-kegiatan/rincian-rundown/'.$id.'/lpj');
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
        $nip = Auth::user()->username;
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'Status',
            // Memanggil semua isi dari tabel biodata
            'Status' => DB::table('dosen_kegiatan')
            ->join('pengajuan_kegiatan','pengajuan_kegiatan.id_kegiatan' , '=', 'dosen_kegiatan.kegiatan_id')
            ->join('dokumentasi', 'dokumentasi.kegiatan_id','=','dosen_kegiatan.kegiatan_id')
            ->select('*')
            ->where('dosen_kegiatan.nip_id', '=', $nip)
            ->where('dosen_kegiatan.kegiatan_id','=',$id)
            ->whereNull('pengajuan_kegiatan.deleted_at')
            ->first(),

            ];
            // dd($data);
        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('dosen.pengelolaan-kegiatan.dokumentasi.edit',$data);
    }

    public function editAction($id, Request $request)
    {

        $evaluasi = Dokumentasi::where('kegiatan_id',$id)->first();
         $dok = $request->input();
        $dok['url_foto']= time() .'.'.$request->file('url_foto')->getClientOriginalExtension();

        $evaluasi->lesson_learned = $request->input('lesson_learned');
        $evaluasi->url_foto = $dok['url_foto'];
        $evaluasi->save();

            $gambar = $request->file('url_foto')->move("img/dokumentasi/",$dok['url_foto']);
        $id = $request->input('kegiatan_id');
        // Menampilkan notifikasi pesan sukses

        $kegiatan = PengajuanKegiatan::find($id);
        $kegiatan->konfirmasi_lpj = '1';
        $kegiatan->tglpelaksanaan = $request->input('tglpelaksanaan');
        $kegiatan->rpelaksanaan = $request->input('rpelaksanaan');
        $kegiatan->save();
        Session::put('alert-success', 'Dokumentasi berhasil direvisi');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('dosen/pengelolaan-kegiatan/rincian-rundown/'.$id.'/editLPJ');
    }

    public function toPdf($id_kegiatan)
    {   
        $data = [
            'kegiatan' => PengajuanKegiatan::find($id_kegiatan),
            'struktur' => StrukturPanitiaDosen::where('kegiatan_id','=',$id_kegiatan
                )->get(),
            'dokumentasi' => Dokumentasi::where('kegiatan_id','=',$id_kegiatan)->get(),
            'danaProposal' => RincianDana::where('kegiatan_id','=',$id_kegiatan)->where('kategori_dana','=',0)->get(),
            'danaLPJ' => RincianDana::where('kegiatan_id','=',$id_kegiatan)->where('kategori_dana','=',1)->get(),
            'rundownProposal' => RincianRundown::where('kegiatan_id','=',$id_kegiatan)->where('kategori_rundown','=',0)->get(),
            'rundownLPJ' => RincianRundown::where('kegiatan_id','=',$id_kegiatan)->where('kategori_rundown','=',1)->get()
        ];
        $pdf = PDF::loadView('dosen.pengelolaan-kegiatan.detail-pengajuan.pdf', $data);
        return $pdf->download('pengelolaan-kegiatan.pdf');
    }


    public function toPdfLPJ($id_kegiatan)
    {   
        $data = [
            'kegiatan' => PengajuanKegiatan::find($id_kegiatan),
            'struktur' => StrukturPanitiaDosen::where('kegiatan_id','=',$id_kegiatan
                )->get(),
            'dokumentasi' => Dokumentasi::where('kegiatan_id','=',$id_kegiatan)->get(),
            'danaProposal' => RincianDana::where('kegiatan_id','=',$id_kegiatan)->where('kategori_dana','=',0)->get(),
            'danaLPJ' => RincianDana::where('kegiatan_id','=',$id_kegiatan)->where('kategori_dana','=',1)->get(),
            'rundownProposal' => RincianRundown::where('kegiatan_id','=',$id_kegiatan)->where('kategori_rundown','=',0)->get(),
            'rundownLPJ' => RincianRundown::where('kegiatan_id','=',$id_kegiatan)->where('kategori_rundown','=',1)->get()
        ];
        $pdf = PDF::loadView('dosen.pengelolaan-kegiatan.detail-pengajuan.pdfLPJ', $data);
        return $pdf->download('pengelolaan-kegiatan.pdf');
    }




}