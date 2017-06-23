<?php 

namespace App\Http\Controllers\karyawan\pengelolaankegiatan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
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
use App\StrukturPanitia;
use Auth;
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
        return view('karyawan.pengelolaan-kegiatan.dokumentasi.index',$data);
    }


    public function delete($id_dokumentasi)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $dokumentasi = Dokumentasi::find($id_dokumentasi);

        // Menghapus biodata yang dicari tadi
        $dokumentasi->delete();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Daftar Dokumentasi Kegiatan berhasil dihapus');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }

   public function edit($id_dokumentasi)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'dokumentasi',
            // Mencari biodata berdasarkan id
            'dokumentasi' => Dokumentasi::find($id_dokumentasi)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('karyawan.pengelolaan-kegiatan.dokumentasi.edit',$data);
    }

    public function editAction($id_dokumentasi, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $dokumentasi = Dokumentasi::find($id_dokumentasi);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $dokumentasi->id_dokumentasi = $request->input('id_dokumentasi');
        $dokumentasi->kegiatan_id = $request->input('kegiatan_id');
        $dokumentasi->lesson_learned = $request->input('lesson_learned');
        $dokumentasi->url_foto = $request->input('url_foto');
        $dokumentasi->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Dokumentasi berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('karyawan/pengelolaan-kegiatan/dokumentasi');
    }
     public function toPdf($id_kegiatan)
    {   
        $data = [
            'kegiatan' => PengajuanKegiatan::find($id_kegiatan),
            'struktur' => StrukturPanitia::where('kegiatan_id','=',$id_kegiatan
                )->get(),
            'dokumentasi' => Dokumentasi::where('kegiatan_id','=',$id_kegiatan)->get(),
            'danaProposal' => RincianDana::where('kegiatan_id','=',$id_kegiatan)->where('kategori_dana','=',0)->get(),
            'danaLPJ' => RincianDana::where('kegiatan_id','=',$id_kegiatan)->where('kategori_dana','=',1)->get(),
            'rundownProposal' => RincianRundown::where('kegiatan_id','=',$id_kegiatan)->where('kategori_rundown','=',0)->get(),
            'rundownLPJ' => RincianRundown::where('kegiatan_id','=',$id_kegiatan)->where('kategori_rundown','=',1)->get()
        ];
        $pdf = PDF::loadView('mahasiswa.pengelolaan-kegiatan.detail-pengajuan.pdf', $data);
        return $pdf->download('pengelolaan-kegiatan.pdf');
    }


    public function toPdfLPJ($id_kegiatan)
    {   
        $data = [
            'kegiatan' => PengajuanKegiatan::find($id_kegiatan),
            'struktur' => StrukturPanitia::where('kegiatan_id','=',$id_kegiatan
                )->get(),
            'dokumentasi' => Dokumentasi::where('kegiatan_id','=',$id_kegiatan)->get(),
            'danaProposal' => RincianDana::where('kegiatan_id','=',$id_kegiatan)->where('kategori_dana','=',0)->get(),
            'danaLPJ' => RincianDana::where('kegiatan_id','=',$id_kegiatan)->where('kategori_dana','=',1)->get(),
            'rundownProposal' => RincianRundown::where('kegiatan_id','=',$id_kegiatan)->where('kategori_rundown','=',0)->get(),
            'rundownLPJ' => RincianRundown::where('kegiatan_id','=',$id_kegiatan)->where('kategori_rundown','=',1)->get()
        ];
        $pdf = PDF::loadView('mahasiswa.pengelolaan-kegiatan.detail-pengajuan.pdfLPJ', $data);
        return $pdf->download('pengelolaan-kegiatan.pdf');
    }
 public function toPdfDosen($id_kegiatan)
    {   
        $data = [
            'kegiatan' => PengajuanKegiatan::find($id_kegiatan),
            'struktur' => StrukturPanitia::where('kegiatan_id','=',$id_kegiatan
                )->get(),
            'dokumentasi' => Dokumentasi::where('kegiatan_id','=',$id_kegiatan)->get(),
            'danaProposal' => RincianDana::where('kegiatan_id','=',$id_kegiatan)->where('kategori_dana','=',0)->get(),
            'danaLPJ' => RincianDana::where('kegiatan_id','=',$id_kegiatan)->where('kategori_dana','=',1)->get(),
            'rundownProposal' => RincianRundown::where('kegiatan_id','=',$id_kegiatan)->where('kategori_rundown','=',0)->get(),
            'rundownLPJ' => RincianRundown::where('kegiatan_id','=',$id_kegiatan)->where('kategori_rundown','=',1)->get()
        ];
        $pdf = PDF::loadView('karyawan.pengelolaan-kegiatan.detail-pengajuan.pdfDosen', $data);
        return $pdf->download('pengelolaan-kegiatan.pdf');
    }


    public function toPdfLPJDosen($id_kegiatan)
    {   
        $data = [
            'kegiatan' => PengajuanKegiatan::find($id_kegiatan),
            'struktur' => StrukturPanitia::where('kegiatan_id','=',$id_kegiatan
                )->get(),
            'dokumentasi' => Dokumentasi::where('kegiatan_id','=',$id_kegiatan)->get(),
            'danaProposal' => RincianDana::where('kegiatan_id','=',$id_kegiatan)->where('kategori_dana','=',0)->get(),
            'danaLPJ' => RincianDana::where('kegiatan_id','=',$id_kegiatan)->where('kategori_dana','=',1)->get(),
            'rundownProposal' => RincianRundown::where('kegiatan_id','=',$id_kegiatan)->where('kategori_rundown','=',0)->get(),
            'rundownLPJ' => RincianRundown::where('kegiatan_id','=',$id_kegiatan)->where('kategori_rundown','=',1)->get()
        ];
        $pdf = PDF::loadView('karyawan.pengelolaan-kegiatan.detail-pengajuan.pdfLPJDosen', $data);
        return $pdf->download('pengelolaan-kegiatan.pdf');
    }


}