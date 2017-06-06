<?php 
namespace App\Http\Controllers\Dosen\Kurikulum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\CapaianPembelajaran;
use App\Prodi;
use App\KategoriCapaianPembelajaran;

class CapaianPembelajaranController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'capaian-pembelajaran',

            // Memanggil semua isi dari tabel biodata
            'capaianpembelajaran' => CapaianPembelajaran::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.kurikulum.cp_pembelajaran.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'capaian-pembelajaran',
            'prodis' => Prodi::all(),
            'categories' => KategoriCapaianPembelajaran::all()
        ];

        // Memanggil tampilan form create
    	return view('dosen.kurikulum.cp_pembelajaran.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        CapaianPembelajaran::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('dosen/kurikulum/capaian-pembelajaran');
    }

    public function delete($id_cpem)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $capaian_pembelajaran = CapaianPembelajaran::find($id_cpem);

        // Menghapus biodata yang dicari tadi
        $capaian_pembelajaran->delete();

        // Menampilkan notifikasi pesan sukses
    	Session::put('alert-success', 'Berhasil dihapus');

        // Kembali ke halaman sebelumnya
      	return Redirect::back();	 
    }

   public function edit($id_cpem)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'cp_pembelajaran',
            'prodis' => Prodi::all(),
            'categories' => KategoriCapaianPembelajaran::all(),
            
            // Mencari biodata berdasarkan id
            'cp_pembelajaran' => CapaianPembelajaran::find($id_cpem)
        ];
        
        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('dosen.kurikulum.cp_pembelajaran.edit',$data);
    }

    public function editAction($id_cpem, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $capaian_pembelajaran = CapaianPembelajaran::find($id_cpem);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $capaian_pembelajaran->prodi_id = $request->input('prodi_id');
        $capaian_pembelajaran->kategori_cpem_id = $request->input('kategori_cpem_id');
        $capaian_pembelajaran->kode_cpem = $request->input('kode_cpem');
        $capaian_pembelajaran->deskripsi_cpem = $request->input('deskripsi_cpem');
        $capaian_pembelajaran->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('dosen/kurikulum/capaian-pembelajaran');
    }

}