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
use App\RincianDana;
use App\PengajuanKegiatan;
use App\KategoriDana;

class RincianDanaController extends Controller
{

    // Function untuk menampilkan tabel
    public function index($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'rinciandana',
            // Memanggil semua isi dari tabel biodata
            'rinciandana' => RincianDana::where('kegiatan_id',$id)->where('kategori_dana',0)->get(),
            'kegiatan' => PengajuanKegiatan::where('id_kegiatan',$id)->get(),
            'sumber' => KategoriDana::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.pengelolaan-kegiatan.rincian-dana.index',$data);
    }
  

    public function indexLPJ($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'rinciandana',
            // Memanggil semua isi dari tabel biodata
            'rinciandana' => RincianDana::where('kegiatan_id',$id)->where('kategori_dana','1')->get(),
            'kegiatan' => PengajuanKegiatan::where('id_kegiatan',$id)->get(),
            'sumber' => KategoriDana::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.pengelolaan-kegiatan.rincian-dana.indexLPJ',$data);
    }

    public function createAction($id_kegiatan, Request $request)
    {
        # code...
                $rinciandana = new RincianDana;
                $rinciandana->kegiatan_id = $id_kegiatan;
                $rinciandana->nama = $request->input('nama');
                $rinciandana->kuantitas = $request->input('jumlah');
                $rinciandana->harga = $request->input('harga');
                $rinciandana->sumber_id = $request->input('sumberDana');
                $rinciandana->kategori_dana = '0';
                $rinciandana->save();

                Session::put('alert-success', 'Dana Berhasil Ditambahkan');

        return Redirect::to('dosen/pengelolaan-kegiatan/rincian-dana/'.$id_kegiatan.'');
    }

 
    public function createActionLPJ($id_kegiatan, Request $request)
    {
        # code...
                $rinciandana = new RincianDana;
                $rinciandana->kegiatan_id = $id_kegiatan;
                $rinciandana->nama = $request->input('nama');
                $rinciandana->kuantitas = $request->input('jumlah');
                $rinciandana->harga = $request->input('harga');
                $rinciandana->sumber_id = $request->input('sumberDana');
                $rinciandana->kategori_dana = '1';
                $rinciandana->save();

                Session::put('alert-success', 'Dana Berhasil Ditambahkan');

        return Redirect::to('dosen/pengelolaan-kegiatan/rincian-dana/'.$id_kegiatan.'/lpj');
    }
   public function edit($id)
        {
        # code...
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'rinciandana',
            // Memanggil semua isi dari tabel biodata

            'rinciandana' => RincianDana::where('kegiatan_id',$id)->where('kategori_dana',0)->get(),
            'kegiatan' => PengajuanKegiatan::where('id_kegiatan',$id)->first(),
            'sumber' => KategoriDana::all()


        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.pengelolaan-kegiatan.rincian-dana.edit',$data);
    
    }
public function createEditAction($id_kegiatan, Request $request)
    {
        # code...
                $rinciandana = new RincianDana;
                $rinciandana->kegiatan_id = $id_kegiatan;
                $rinciandana->nama = $request->input('nama');
                $rinciandana->kuantitas = $request->input('jumlah');
                $rinciandana->harga = $request->input('harga');
                $rinciandana->sumber_id = $request->input('sumberDana');
                $rinciandana->kategori_dana = '0';
                $rinciandana->save();

                Session::put('alert-success', 'Dana Berhasil Ditambahkan');

        return Redirect::to('dosen/pengelolaan-kegiatan/rincian-dana/'.$id_kegiatan.'/edit');
    }

     public function editTambahAction($id_rdana, Request $request)
    {
        # code...
       

        $kegiatan_id = $request->input('kegiatan');
       
        RincianDana::where('kegiatan_id', $kegiatan_id)->where('id_rdana',$id_rdana)->whereNull('deleted_at')->update(array(
            'nama'    =>  $request->input('nama'), 'kuantitas'    =>  $request->input('jumlah'),'harga'    =>  $request->input('harga'),'sumber_id'    =>  $request->input('sumberDana'),'kategori_dana'    =>  0
        ));

        Session::put('alert-success', 'Panitia Berhasil Direvisi');
        
            
        
        return Redirect::to('dosen/pengelolaan-kegiatan/rincian-dana/'.$kegiatan_id.'/edit');
   
    }

    //revisi lpj
     public function editLPJ($id)
        {
        # code...
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'rinciandana',
            // Memanggil semua isi dari tabel biodata

            'rinciandana' => RincianDana::where('kegiatan_id',$id)->where('kategori_dana',1)->get(),
            'kegiatan' => PengajuanKegiatan::where('id_kegiatan',$id)->first(),
            'sumber' => KategoriDana::all()


        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.pengelolaan-kegiatan.rincian-dana.edit',$data);
    
    }
public function createEditActionLPJ($id_kegiatan, Request $request)
    {
        # code...
                $rinciandana = new RincianDana;
                $rinciandana->kegiatan_id = $id_kegiatan;
                $rinciandana->nama = $request->input('nama');
                $rinciandana->kuantitas = $request->input('jumlah');
                $rinciandana->harga = $request->input('harga');
                $rinciandana->sumber_id = $request->input('sumberDana');
                $rinciandana->kategori_dana = '1';
                $rinciandana->save();

                Session::put('alert-success', 'Dana Berhasil Ditambahkan');

        return Redirect::to('dosen/pengelolaan-kegiatan/rincian-dana/'.$id_kegiatan.'/edit');
    }

     public function editTambahActionLPJ($id_rdana, Request $request)
    {
        # code...
       

        $kegiatan_id = $request->input('kegiatan');
       
        RincianDana::where('kegiatan_id', $kegiatan_id)->where('id_rdana',$id_rdana)->whereNull('deleted_at')->update(array(
            'nama'    =>  $request->input('nama'), 'kuantitas'    =>  $request->input('jumlah'),'harga'    =>  $request->input('harga'),'sumber_id'    =>  $request->input('sumberDana'),'kategori_dana'    =>  1
        ));

        Session::put('alert-success', 'Panitia Berhasil Direvisi');
        
            
        
        return Redirect::to('dosen/pengelolaan-kegiatan/rincian-dana/'.$kegiatan_id.'/edit');
   
    }
    public function editTambahActionLPJ1($id_rdana, Request $request)
    {
        # code...
       

        $kegiatan_id = $request->input('kegiatan');
       
        RincianDana::where('kegiatan_id', $kegiatan_id)->where('id_rdana',$id_rdana)->whereNull('deleted_at')->update(array(
            'nama'    =>  $request->input('nama'), 'kuantitas'    =>  $request->input('jumlah'),'harga'    =>  $request->input('harga'),'sumber_id'    =>  $request->input('sumberDana'),'kategori_dana'    =>  '1'
        ));

        Session::put('alert-success', 'Panitia Berhasil Direvisi');
        
            
        
        return Redirect::to('dosen/pengelolaan-kegiatan/rincian-dana/'.$kegiatan_id.'/lpj');
   
    }
}