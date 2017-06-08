<?php 
namespace App\Http\Controllers\dosen\Kurikulum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\CapaianProgram;
use App\Prodi;


class CapaianProgramController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'capaian-program',
            // Memanggil semua isi dari tabel biodata
            'cp_program' => CapaianProgram::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.kurikulum.cp_program.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'capaian-program',
            'prodis' => Prodi::all()
        ];

        // Memanggil tampilan form create
    	return view('dosen.kurikulum.cp_program.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        CapaianProgram::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Capaian Program berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('dosen/kurikulum/cp_program');
    }

    public function delete($id)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $cp_program = CapaianProgram::find($id);

        // Menghapus biodata yang dicari tadi
        $cp_program->delete();

        // Menampilkan notifikasi pesan sukses
    	Session::put('alert-success', 'Capaian Program berhasil dihapus');

        // Kembali ke halaman sebelumnya
      	return Redirect::back();	 
    }

   public function edit($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'capaian-program',
            'prodis' => Prodi::all(),
            // Mencari biodata berdasarkan id
            'cp_program' => CapaianProgram::find($id)
        ];


        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('dosen.kurikulum.cp_program.edit',$data);
    }

    public function editAction($id, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $cp_program = CapaianProgram::find($id);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $cp_program->prodi_id = $request->input('prodi_id');
        $cp_program->id = $id ;
        $cp_program->capaian_program_spesifik = $request->input('capaian_program_spesifik');
        $cp_program->dimensi_capaian_umum = $request->input('dimensi_capaian_umum');
        $cp_program->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Capaian Program berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('dosen/kurikulum/cp_program');
    }

}