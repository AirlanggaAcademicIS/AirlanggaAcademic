<?php 

namespace App\Http\Controllers\Karyawan\PLA;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
use Illuminate\Support\Facades\DB;
// Tambahkan model yang ingin dipakai
use App\Surat_Keluar_Mhs;
use App\MhsPemohonSurat;
use Auth;


class Surat_Keluar_MhsController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar 
            'page' => 'surat-keluar-mhs',
            // Memanggil semua isi dari tabel
            'mhs_pemohon_surat' =>MhsPemohonSurat::all(),
            'surat_keluar_mhs' =>DB::table('surat_keluar_mhs')
            ->join('mhs_pemohon_surat', 'surat_keluar_mhs.id_surat_keluar', '=', 'mhs_pemohon_surat.surat_keluar_id')
            ->orderBy('surat_keluar_mhs.created_at', 'desc')
            ->select('*')
            ->get()
        ];

        // Memanggil tampilan index di folder mahasiswa/ dan juga menambahkan $data tadi di view
        return view('karyawan.pla.surat-keluar-mhs.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar 
            'page' => 'surat-keluar-mhs',
        ];

        // Memanggil tampilan form create
        return view('karyawan.pla.surat-keluar-mhs.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel 

        Surat_Keluar_Mhs::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Surat berhasil ditambahkan');

        $dosen = $request->input();
        $dosen['status_jurnal'] = 0 ;
        $dosen['file_jurnal'] = time() .'.'.$request->file('file_jurnal')->getClientOriginalExtension();
        JurnalDosen::create($dosen);
        $file = $request->file('file_jurnal')->move("img/dosen/",$dosen['file_jurnal']);
        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Jurnal Berhasil Ditambahkan');


        // Kembali ke halaman mahasiswa/
        return Redirect::to('karyawan/surat-keluar-mhs');
    }

    public function delete($id_surat_keluar)
    {
        // Mencari  berdasarkan id dan memasukkannya ke dalam variabel $
        $surat_keluar_mhs = Surat_Keluar_Mhs::find($id_surat_keluar);

        // Menghapus  yang dicari tadi
        $surat_keluar_mhs->delete();

        // Menampilkan notifikasi pesan sukses

        Session::put('alert-success', 'Surat berhasil dihapus');

        Session::put('alert-success', 'Surat Berhasil Dihapus');


    // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }

   public function edit($id_surat_keluar)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar 
            'page' => 'surat-keluar-mhs',
            // Mencari  berdasarkan id
            'surat_keluar_mhs' => Surat_Keluar_Mhs::find($id_surat_keluar)
        ];

        // dd($data['surat_keluar_mhs']);

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('karyawan.pla.surat-keluar-mhs.edit',$data);
    }

    public function editAction($id_surat_keluar_mhs, Request $request)
    {

        // Mencari  yang akan di update dan menaruhnya di variabel $
        $surat_keluar_mhs = Surat_Keluar_Mhs::find($id_surat_keluar_mhs);

        // Mengupdate $ tadi dengan isi dari form edit tadi
        
        $surat_keluar_mhs->nip_petugas_id = Auth::user()->username;
        $surat_keluar_mhs->nama_lembaga = $request->input('nama_lembaga');
        $surat_keluar_mhs->nama = $request->input('nama');
        $surat_keluar_mhs->alamat = $request->input('alamat');
        $surat_keluar_mhs->tgl_upload = $request->input('tgl_upload');
        $surat_keluar_mhs->status = $request->input('status');
        $surat_keluar_mhs->save();

        // Notifikasi sukses

        Session::put('alert-success', 'Surat berhasil diverivikasi');


        // Kembali ke halaman mahasiswa/
        return Redirect::to('karyawan/surat-keluar-mhs');
    }

    public function agree($id_surat_keluar)
    {
        $surat_keluar_mhs = Surat_Keluar_Mhs::find($id_surat_keluar);
        $surat_keluar_mhs->nip_petugas_id = Auth::user()->username;
        $surat_keluar_mhs->status = '1';
        $surat_keluar_mhs->save();
        // dd($data['surat_keluar_mhs']);

        Session::put('alert-success', 'Surat keluar disetujui');
        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return Redirect::back();
    }

    public function disagree($id_surat_keluar)
    {   
             
        $surat_keluar = Surat_Keluar_Mhs::find($id_surat_keluar);
        $surat_keluar->nip_petugas_id = Auth::user()->username;
        $surat_keluar->status = '2';
        $surat_keluar->save();
        // dd($data['surat_keluar_mhs']);

        Session::put('alert-danger', 'Surat keluar tidak setujui');
        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return Redirect::back();
    }

}