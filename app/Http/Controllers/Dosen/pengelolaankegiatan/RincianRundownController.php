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
use App\RincianRundown;
use App\PengajuanKegiatan;

class RincianRundownController extends Controller
{

    // Function untuk menampilkan tabel
    public function indexProposal($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'rincianrundown',
            // Memanggil semua isi dari tabel biodata
            'rincianrundown' => RincianRundown::where('kegiatan_id',$id)->where('kategori_rundown',0)->get(),
            'kegiatan' => PengajuanKegiatan::where('id_kegiatan',$id)->get()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.pengelolaan-kegiatan.rincian-rundown.index',$data);
    }

 public function indexLPJ($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'rincianrundown',
            // Memanggil semua isi dari tabel biodata
            'rincianrundown' => RincianRundown::where('kegiatan_id',$id)->where('kategori_rundown',1)->get(),
            'kegiatan' => PengajuanKegiatan::where('id_kegiatan',$id)->get()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.pengelolaan-kegiatan.rincian-rundown.indexLPJ',$data);
    }


    public function delete($id_rundown)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $rincianrundown = RincianRundown::find($id_rundown);

        // Menghapus biodata yang dicari tadi
        $rincianrundown->delete();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Rincian Rundown berhasil dihapus');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }

    public function create($id_kegiatan)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar Biodata
            'page' => 'rincianrundown',
            'kegiatan' => PengajuanKegiatan::where('id_kegiatan',$id_kegiatan)->get()
        ];
        // Memanggil tampilan form create
        return view('dosen.pengelolaan-kegiatan.rincian-rundown.create',$data);
    }

    public function createLPJ($id_kegiatan)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar Biodata
            'page' => 'rincianrundown',
            'kegiatan' => PengajuanKegiatan::where('id_kegiatan',$id_kegiatan)->get()
        ];
        // Memanggil tampilan form create
        return view('dosen.pengelolaan-kegiatan.rincian-rundown.createLPJ',$data);
    }

    public function createActionProposal($id_kegiatan, Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
       
               // user doesn't exist
                $rincianRundown = new RincianRundown;
                $rincianRundown->kegiatan_id = $id_kegiatan;
                $rincianRundown->waktu = $request->input('waktu');
                $rincianRundown->nama = $request->input('nama');
                $rincianRundown->kategori_rundown = '0';
                $rincianRundown->save();

                Session::put('alert-success', 'Panitia Berhasil Ditambahkan');
        
        
        return Redirect::to('dosen/pengelolaan-kegiatan/rincian-rundown/'.$id_kegiatan.'');

    }

    public function createActionLPJ($id_kegiatan, Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
       
               // user doesn't exist
                $rincianRundown = new RincianRundown;
                $rincianRundown->kegiatan_id = $id_kegiatan;
                $rincianRundown->waktu = $request->input('waktu');
                $rincianRundown->nama = $request->input('nama');
                $rincianRundown->kategori_rundown = '1';
                $rincianRundown->save();

                Session::put('alert-success', 'Panitia Berhasil Ditambahkan');
        
        
        return Redirect::to('dosen/pengelolaan-kegiatan/rincian-rundown/'.$id_kegiatan.'/lpj');

    }

 public function indexEdit($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'rincianrundown',
            // Memanggil semua isi dari tabel biodata
            'rincianrundown' => RincianRundown::where('kegiatan_id',$id)->where('kategori_rundown',0)->get(),
            'kegiatan' => PengajuanKegiatan::where('id_kegiatan',$id)->get()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.pengelolaan-kegiatan.rincian-rundown.indexEdit',$data);
    }


 public function createEdit($id_kegiatan)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar Biodata
            'page' => 'rincianrundown',
            'kegiatan' => PengajuanKegiatan::where('id_kegiatan',$id_kegiatan)->get()
        ];
        // Memanggil tampilan form create
        return view('dosen.pengelolaan-kegiatan.rincian-rundown.createEdit',$data);
    }


    public function createActionEditProposal($id_kegiatan, Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
       
               // user doesn't exist
                $rincianRundown = new RincianRundown;
                $rincianRundown->kegiatan_id = $id_kegiatan;
                $rincianRundown->waktu = $request->input('waktu');
                $rincianRundown->nama = $request->input('nama');
                $rincianRundown->kategori_rundown = '0';
                $rincianRundown->save();

                Session::put('alert-success', 'Panitia Berhasil Ditambahkan');
        
        
        return Redirect::to('dosen/pengelolaan-kegiatan/rincian-rundown/'.$id_kegiatan.'/edit');

    }
   public function edit($id_rundown)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'rincianrundown',
            // Mencari biodata berdasarkan id
            'rincianrundown' => RincianRundown::where('id_rundown',$id_rundown)->first()
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('dosen.pengelolaan-kegiatan.rincian-rundown.edit',$data);
    }

  


    public function editActionProposal($id_rundown, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $rincianrundown = RincianRundown::find($id_rundown);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $rincianrundown->kegiatan_id = $request->input('kegiatan_id');
        $rincianrundown->nama = $request->input('nama');
        $rincianrundown->waktu = $request->input('waktu');
        $rincianrundown->kategori_rundown = '0';
        $rincianrundown->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Rincian Rundown berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('dosen/pengelolaan-kegiatan/rincian-rundown/'.$rincianrundown->kegiatan_id.'/edit');
    }


// revisi lpj
     public function indexEditLPJ($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'rincianrundown',
            // Memanggil semua isi dari tabel biodata
            'rincianrundown' => RincianRundown::where('kegiatan_id',$id)->where('kategori_rundown',1)->get(),
            'kegiatan' => PengajuanKegiatan::where('id_kegiatan',$id)->get()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.pengelolaan-kegiatan.rincian-rundown.indexEditLPJ',$data);
    }


 public function createEditLPJ($id_kegiatan)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar Biodata
            'page' => 'rincianrundown',
            'kegiatan' => PengajuanKegiatan::where('id_kegiatan',$id_kegiatan)->get()
        ];
        // Memanggil tampilan form create
        return view('dosen.pengelolaan-kegiatan.rincian-rundown.createEditLPJ',$data);
    }


    public function createActionEditLPJ($id_kegiatan, Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
       
               // user doesn't exist
                $rincianRundown = new RincianRundown;
                $rincianRundown->kegiatan_id = $id_kegiatan;
                $rincianRundown->waktu = $request->input('waktu');
                $rincianRundown->nama = $request->input('nama');
                $rincianRundown->kategori_rundown = '1';
                $rincianRundown->save();

                Session::put('alert-success', 'Panitia Berhasil Ditambahkan');
        
        
        return Redirect::to('dosen/pengelolaan-kegiatan/rincian-rundown/'.$id_kegiatan.'/editLPJ');

    }
   public function editLPJ($id_rundown)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'rincianrundown',
            // Mencari biodata berdasarkan id
            'rincianrundown' => RincianRundown::where('id_rundown',$id_rundown)->first()
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('dosen.pengelolaan-kegiatan.rincian-rundown.editLPJ',$data);
    }

  


    public function editActionLPJ($id_rundown, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $rincianrundown = RincianRundown::find($id_rundown);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $rincianrundown->kegiatan_id = $request->input('kegiatan_id');
        $rincianrundown->nama = $request->input('nama');
        $rincianrundown->waktu = $request->input('waktu');
        $rincianrundown->kategori_rundown = '1';
        $rincianrundown->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Rincian Rundown berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('dosen/pengelolaan-kegiatan/rincian-rundown/'.$rincianrundown->kegiatan_id.'/editLPJ');
    }

    public function editProposal($id_rundown)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'rincianrundown',
            // Mencari biodata berdasarkan id
            'rincianrundown' => RincianRundown::where('id_rundown',$id_rundown)->first()
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('dosen.pengelolaan-kegiatan.rincian-rundown.tambahEdit',$data);
    }

  


    public function editActionProposal1($id_rundown, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $rincianrundown = RincianRundown::find($id_rundown);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $rincianrundown->kegiatan_id = $request->input('kegiatan_id');
        $rincianrundown->nama = $request->input('nama');
        $rincianrundown->waktu = $request->input('waktu');
        $rincianrundown->kategori_rundown = '0';
        $rincianrundown->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Rincian Rundown berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('dosen/pengelolaan-kegiatan/rincian-rundown/'.$rincianrundown->kegiatan_id);
    }
 public function editLPJ1($id_rundown)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'rincianrundown',
            // Mencari biodata berdasarkan id
            'rincianrundown' => RincianRundown::where('id_rundown',$id_rundown)->first()
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('dosen.pengelolaan-kegiatan.rincian-rundown.tambahEditLPJ',$data);
    }

  


    public function editActionLPJ1($id_rundown, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $rincianrundown = RincianRundown::find($id_rundown);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $rincianrundown->kegiatan_id = $request->input('kegiatan_id');
        $rincianrundown->nama = $request->input('nama');
        $rincianrundown->waktu = $request->input('waktu');
        $rincianrundown->kategori_rundown = '1';
        $rincianrundown->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Rincian Rundown berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('dosen/pengelolaan-kegiatan/rincian-rundown/'.$rincianrundown->kegiatan_id.'/lpj');
    }
}