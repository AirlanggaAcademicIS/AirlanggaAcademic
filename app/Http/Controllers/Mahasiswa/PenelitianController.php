<?php 

namespace App\Http\Controllers\Mahasiswa;

use Illuminate\Http\Request;

use Input;
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
use App\BiodataMahasiswa;

class PenelitianController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {   
        $nim = Auth::user()->username;
        $penelitian_mhs = PenelitianMhs::where('nim_id',$nim)->get();
        // $detail_anggota = DetailAnggota::where('kode_penelitian_id',$nim);
        // $detailpenelitian = DetailPenelitian::where('kode_penelitian_id',$nim);
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'penelitian_mhs',
            // Memanggil semua isi dari tabel biodata
            'penelitian_mhs' => $penelitian_mhs,
            
        ];

        return view('mahasiswa.penelitian.index',$data);
    }

    public function create()
    {
        $username = Auth::user()->username;
        $nama = BiodataMahasiswa::where('nim_id',$username)->first();
        $data = [

            // Buat di sidebar, biar ketika diklik yg aktif sidebar penelitian mahasiswa

            'page' => 'penelitian_mhs',
            'penelitian_mhs' => $nama,
        ];

        // Memanggil tampilan form create
    	return view('mahasiswa.penelitian.create',$data);
    }

    public function createAction(Request $request){
        // Menginsertkan apa yang ada di form ke dalam tabel penelitian_mhs
        $this->validate($request, [
            'file_pen' => 'required|mimes:pdf',
            ]);
        $penelitian = PenelitianMhs::create($request->input());
        $penelitian->nim_id = Auth::user()->username;
        $filename = basename($_FILES["file_pen"]["name"]);
        $request->file_pen->move(public_path('pdf'), $filename);
        $penelitian->file_pen = $filename;
        $penelitian->save();

        Session::put('alert-success', 'penelitian berhasil ditambahkan');

        // Kembali ke halaman index penelitian

        return Redirect::to('mahasiswa/penelitian');
            
        }

    public function delete($kode_penelitian)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $penelitian_mhs = PenelitianMhs::find($kode_penelitian);
        $a = $penelitian_mhs->file_pen;
        File::delete('pdf/'.$a);
        $penelitian_mhs->delete();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Penelitian berhasil dihapus');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }

        

   public function edit($kode_penelitian)
    {   
        $penelitian_mhs = PenelitianMhs::where('kode_penelitian',$kode_penelitian)->first();
        $data = [
            'page' => 'penelitian_mhs',
            'penelitian_mhs' => $penelitian_mhs,
        ];
        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('mahasiswa.penelitian.edit',$data);
    }

    public function editAction($kode_penelitian, Request $request)
    {   
        // Mencari penelitian_mhs yang akan di update dan menaruhnya di variabel $penelitian_mhs
        $penelitian_mhs = PenelitianMhs::find($kode_penelitian);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
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

        $penelitian_mhs->anggota = $request->input('anggota');
        $penelitian_mhs->abstract = $request->input('abstract');
        $penelitian_mhs->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Penelitian berhasil diedit');

        // Kembali ke halaman index penelitian
        return Redirect::to('mahasiswa/penelitian');
    }


    }