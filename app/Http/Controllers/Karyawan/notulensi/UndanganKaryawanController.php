<?php 

namespace App\Http\Controllers\Karyawan\notulensi;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\UndanganKaryawan;
use App\FormUndangan;
use App\BiodataDosen;
use App\DosenRapat;
use Illuminate\Mail\Mailer;
use Illuminate\Mail\Message;

class UndanganKaryawanController extends Controller
{
    protected $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }  

    // Function untuk menampilkan tabel
    public function indexUndangan()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'undangan',
            // Memanggil semua isi dari tabel biodata
            'undangan' => DB::table('notulen_rapat')
            ->join('permohonan_ruang', 'permohonan_ruang.id_permohonan_ruang', '=', 'notulen_rapat.permohonan_ruang_id')
            ->join('jadwal_permohonan', 'jadwal_permohonan.permohonan_ruang_id', '=', 'permohonan_ruang.id_permohonan_ruang')
            ->join('ruang', 'ruang.id_ruang', '=', 'jadwal_permohonan.ruang_id')
            ->select('*')
            ->get()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('karyawan.notulensi.undangan.index2',$data);
    }

    public function undang($id_notulen)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'undangan',
            // Memanggil semua isi dari tabel biodata
            'ruang' => DB::table('notulen_rapat')
            ->join('permohonan_ruang', 'permohonan_ruang.id_permohonan_ruang', '=', 'notulen_rapat.permohonan_ruang_id')
            ->join('jadwal_permohonan', 'jadwal_permohonan.permohonan_ruang_id', '=', 'permohonan_ruang.id_permohonan_ruang')
            ->join('ruang', 'ruang.id_ruang', '=', 'jadwal_permohonan.ruang_id')
            ->select('*')
            ->where('id_notulen','=',$id_notulen)
            ->first(),
            'dosen' => DB::table('dosen')
            ->join('biodata_dosen', 'dosen.nip', '=', 'biodata_dosen.nip')
            ->join('users', 'biodata_dosen.nip', '=', 'users.username')
            ->select('*')
            ->get(),
            'form' => FormUndangan::where('id_notulen',$id_notulen)->first()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('karyawan.notulensi.undangan.formUndangan',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'undangan',
            'ruang' => DB::table('notulen_rapat')
            ->join('permohonan_ruang', 'permohonan_ruang.id_permohonan_ruang', '=', 'notulen_rapat.permohonan_ruang_id')
            ->join('jadwal_permohonan', 'jadwal_permohonan.permohonan_ruang_id', '=', 'permohonan_ruang.id_permohonan_ruang')
            ->join('ruang', 'ruang.id_ruang', '=', 'jadwal_permohonan.ruang_id')
            ->select('*')
            ->get()
        ];

        // Memanggil tampilan form create
    	return view('karyawan.notulensi.undangan.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        FormUndangan::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Rapat berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('undangankaryawan');
    }

    public function delete($id_notulen)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $dosenrapat = FormUndangan::find($id_notulen);

        // Menghapus biodata yang dicari tadi
        $dosenrapat->delete();

        // Menampilkan notifikasi pesan sukses
    	Session::put('alert-success', 'Rapat berhasil dihapus');

        // Kembali ke halaman sebelumnya
      	return Redirect::back();	 
    }

   public function edit($id_notulen)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'UndanganDosen',
            // Mencari biodata berdasarkan id
            'undangan' => FormUndangan::find($id_notulen)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('dosen.notulensi.undangan.edit',$data);
    }

    public function editAction($id_notulen, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $dosenrapat = FormUndangan::find($id_notulen);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $dosenrapat->nip = $request->input('nip');
        $dosenrapat->notulen_id = $request->input('notulen_id');
        $dosenrapat->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Rapat berhasil diedit');

        // Kembali ke halaman notulensi/dosenrapat
        return Redirect::to('dosen/notulensi/undangan');
    }

    public function kirimUndangan($id_notulen, Request $request)
    {
        $user = $request->input('dosen');
       
        $message = sprintf('Untuk informasi lebih detail silahkan lihat pada sistem');

        foreach ($user as $u) {
        $this->mailer->raw($message, function (Message $m) use ($u) {
            $m->from('airlanggaacademic@gmail.com', 'Admin Airlangga Academic')->to($u)->subject('Undangan Rapat');
        });
        }
        foreach ($user as $p) {
            $nip = DB::table('users')->select('username')->where('email','=',$p)->first();
            DB::table('dosen_rapat')->insert( [
                'nip' => $nip->username ,
             'notulen_id' => $id_notulen,
             'status' => 0
             ] );
        }
        Session::put('alert-success', 'Berhasil mengundang dosen');
        return Redirect::to('undangankaryawan');
        
    }

}