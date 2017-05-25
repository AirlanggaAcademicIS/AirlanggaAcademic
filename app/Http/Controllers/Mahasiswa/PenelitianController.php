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
use App\PenelitianMhs;
use App\DetailAnggota;
use App\DetailPenelitian;
use Illuminate\Support\Facades\Input;

class PenelitianController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {   
        $nim = Auth::user()->username;
        $penelitian_mhs = PenelitianMhs::where('nim_id',$nim)->get();
        $detail_anggota = DetailAnggota::where('kode_penelitian_id',$nim);
        $detailpenelitian = DetailPenelitian::where('kode_penelitian_id',$nim);
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'penelitian_mhs',
            // Memanggil semua isi dari tabel biodata
            'penelitian_mhs' => $penelitian_mhs,
            
        ];


        // Memanggil tampilan index di folder mahasiswa/penelitian dan juga menambahkan $data tadi di view
        return view('mahasiswa.penelitian.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar penelitian mahasiswa
            'page' => 'penelitian_mhs',
        ];

        // Memanggil tampilan form create
    	return view('mahasiswa.penelitian.create',$data);
    }

    public function createAction(Request $request){
        // Menginsertkan apa yang ada di form ke dalam tabel penelitian_mhs
        $penelitian = PenelitianMhs::create($request->input());
        $penelitian->nim_id = Auth::user()->username;
        $this->validate($request, [
            'file_pen' => 'required|mimes:pdf',
            ]);
        $filename = basename($_FILES["file_pen"]["name"]);
        $request->file_pen->move(public_path('pdf'), $filename);
        $penelitian->file_pen = $filename;
        $penelitian->save();
        $kode_penelitian = $penelitian->kode_penelitian;

        $detail_anggota = DetailAnggota::create($request->input());
        $detail_anggota->kode_penelitian_id = $kode_penelitian;
        $detail_anggota->save();

        $detailpenelitian = DetailPenelitian::create($request->input());
        $detailpenelitian->kode_penelitian_id = $kode_penelitian;
        $detailpenelitian->save();

        Session::put('alert-success', 'penelitian berhasil ditambahkan');

        // Kembali ke halaman index penelitian
        return Redirect::to('mahasiswa/penelitian');
            
        }

    public function delete($kode_penelitian)
    {
        // Mencari penelitian berdasarkan kode_penelitian dan memasukkannya ke dalam variabel $penelitian_mhs
        $penelitian_mhs = PenelitianMhs::find($kode_penelitian);

        // Menghapus penelitian yang dicari tadi
        $penelitian_mhs->delete();

        // Menampilkan notifikasi pesan sukses
    	Session::put('alert-success', 'Penelitian berhasil dihapus');

        // Kembali ke halaman sebelumnya
      	return Redirect::back();	 
    }

   public function edit($kode_penelitian)
    {   
        $penelitian_mhs = PenelitianMhs::where('kode_penelitian',$kode_penelitian)->first();
        $detail_anggota = DetailAnggota::where('kode_penelitian_id',$kode_penelitian)->first();
        $detailpenelitian = DetailPenelitian::where('kode_penelitian_id',$kode_penelitian)->first();
        $data = [

            'page' => 'penelitian_mhs',
            'penelitian_mhs' => $penelitian_mhs,
            'detail_anggota' => $detail_anggota,
            'detailpenelitian' => $detailpenelitian
        ];

        return view('mahasiswa.penelitian.edit',$data);
    }

    public function editAction($kode_penelitian, Request $request)
    {   
        // Mencari penelitian_mhs yang akan di update dan menaruhnya di variabel $penelitian_mhs
        $penelitian_mhs = PenelitianMhs::find($kode_penelitian);

        // Mengupdate $penelitian_mhs tadi dengan isi dari form edit tadi
        $penelitian_mhs->judul = $request->input('judul');
        $penelitian_mhs->peneliti = $request->input('peneliti');
        $penelitian_mhs->fakultas = $request->input('fakultas');
        $penelitian_mhs->tahun = $request->input('tahun');
        $penelitian_mhs->halaman_naskah = $request->input('halaman_naskah');
        $penelitian_mhs->sumber_dana = $request->input('sumber_dana');
        $penelitian_mhs->besar_dana = $request->input('besar_dana');
        $penelitian_mhs->sk = $request->input('sk');
        $penelitian_mhs->publikasi = $request->input('publikasi');
        $penelitian_mhs->kategori_penelitian = $request->input('kategori_penelitian');

        $this->validate($request, [  
            'file_pen' => 'required|mimes:pdf',
            ]); 
        $filename = basename($_FILES["file_pen"]["name"]);
        $request->file_pen->move(public_path('pdf'), $filename);
        $penelitian_mhs->file_pen = $filename;
        $penelitian_mhs->save();

        $detail_anggota = PenelitianMhs::find($kode_penelitian)->anggota;
        // Mengupdate $detail_anggota tadi dengan isi dari form edit tadi
        $detail_anggota->anggota = $request->input('anggota');      
        $detail_anggota->save();

        $detailPenelitian = PenelitianMhs::find($kode_penelitian)->detail;
        // Mengupdate $detailPenelitian tadi dengan isi dari form edit tadi
        $detailPenelitian->abstract = $request->input('abstract');
        $detailPenelitian->background = $request->input('background');
        $detailPenelitian->objective = $request->input('objective');
        $detailPenelitian->methods = $request->input('methods');
        $detailPenelitian->results = $request->input('results');
        $detailPenelitian->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Penelitian berhasil diedit');

        // Kembali ke halaman index penelitian
        return Redirect::to('mahasiswa/penelitian');
    }


    }