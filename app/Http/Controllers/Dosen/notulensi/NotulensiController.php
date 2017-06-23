<?php 

namespace App\Http\Controllers\Dosen\notulensi;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\NotulensiDosen;
use Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Mail\Mailer;
use Illuminate\Mail\Message;


class NotulensiController extends Controller
{
protected $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;

    } 

    // Function untuk menampilkan tabel
    public function index()
    {
        $nip_id = Auth::user()->username;
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'notulensi',
            // Memanggil semua isi dari tabel biodata
            'notulensi' => DB::table('notulen_rapat')
            ->join('permohonan_ruang', 'permohonan_ruang.id_permohonan_ruang', '=', 'notulen_rapat.permohonan_ruang_id') 
            ->join('jadwal_permohonan', 'jadwal_permohonan.permohonan_ruang_id', '=', 'permohonan_ruang.id_permohonan_ruang') 
            ->join('ruang', 'ruang.id_ruang', '=', 'jadwal_permohonan.ruang_id')
            ->join('petugas_tu', 'petugas_tu.nip_petugas', '=', 'notulen_rapat.nip_petugas_id')
            ->join('biodata_dosen', 'biodata_dosen.nip', '=', 'notulen_rapat.nip_id')
            ->select('*')
            ->where('nip_id', '=', $nip_id)
            ->whereNotNull('hasil_pembahasan')
            ->get()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.notulensi.notulensi.konfirmasi.index',$data);
    }

     public function lihat($id_notulen)
    {
        
        $data = [
        'page'=> 'notulensi',
            // Memanggil semua isi dari tabel biodata 
            'notulensi' => DB::table('notulen_rapat') 
            ->join('permohonan_ruang', 'permohonan_ruang.id_permohonan_ruang', '=', 'notulen_rapat.permohonan_ruang_id') 
            ->join('jadwal_permohonan', 'jadwal_permohonan.permohonan_ruang_id', '=', 'permohonan_ruang.id_permohonan_ruang') 
            ->join('ruang', 'ruang.id_ruang', '=', 'jadwal_permohonan.ruang_id')
            ->join('petugas_tu', 'petugas_tu.nip_petugas', '=', 'notulen_rapat.nip_petugas_id')
            ->join('biodata_dosen', 'biodata_dosen.nip', '=', 'notulen_rapat.nip_id') 
            ->select('*')
            ->where('id_notulen', '=', $id_notulen)  
            ->get()          

        
        ];
        return view('dosen.notulensi.notulensi.konfirmasi.lihatHasil',$data);
}
    public function index2()
    {

        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'notulensi',
            // Memanggil semua isi dari tabel biodata
            'notulensi' => DB::table('notulen_rapat')
            ->join('permohonan_ruang', 'permohonan_ruang.id_permohonan_ruang', '=', 'notulen_rapat.permohonan_ruang_id') 
            ->join('jadwal_permohonan', 'jadwal_permohonan.permohonan_ruang_id', '=', 'permohonan_ruang.id_permohonan_ruang')
            ->join('ruang', 'ruang.id_ruang', '=', 'jadwal_permohonan.ruang_id')
            ->join('petugas_tu', 'petugas_tu.nip_petugas', '=', 'notulen_rapat.nip_petugas_id')
            ->join('biodata_dosen', 'biodata_dosen.nip', '=', 'notulen_rapat.nip_id')
            ->where('id_verifikasi', '=', '1')
            ->select('*')
            ->get()
        ];    
        
                return view('dosen.notulensi.notulensi.listHasil.index2',$data);
            }

        public function lihat2($id_notulen)
    {
        
        $data = [
        'page'=> 'notulensi',
            // Memanggil semua isi dari tabel biodata 
            'notulensi' => DB::table('notulen_rapat') 
            ->join('permohonan_ruang', 'permohonan_ruang.id_permohonan_ruang', '=', 'notulen_rapat.permohonan_ruang_id') 
            ->join('jadwal_permohonan', 'jadwal_permohonan.permohonan_ruang_id', '=', 'permohonan_ruang.id_permohonan_ruang') 
            ->join('ruang', 'ruang.id_ruang', '=', 'jadwal_permohonan.ruang_id')
            ->join('petugas_tu', 'petugas_tu.nip_petugas', '=', 'notulen_rapat.nip_petugas_id')
            ->join('biodata_dosen', 'biodata_dosen.nip', '=', 'notulen_rapat.nip_id') 
            ->select('*')
            ->where('id_notulen', '=', $id_notulen)  
            ->get()
        ];

        return view('dosen.notulensi.notulensi.listHasil.lihatHasil2',$data);
    }
    
        public function konfirmasi($id_notulen)
    {
            $data = [
        'page'=> 'notulensi',
            // Memanggil semua isi dari tabel biodata 
            'notulensi' => DB::table('notulen_rapat') 
            ->join('permohonan_ruang', 'permohonan_ruang.id_permohonan_ruang', '=', 'notulen_rapat.permohonan_ruang_id') 
            ->join('jadwal_permohonan', 'jadwal_permohonan.permohonan_ruang_id', '=', 'permohonan_ruang.id_permohonan_ruang') 
            ->join('ruang', 'ruang.id_ruang', '=', 'jadwal_permohonan.ruang_id')
            ->join('petugas_tu', 'petugas_tu.nip_petugas', '=', 'notulen_rapat.nip_petugas_id')
            ->join('biodata_dosen', 'biodata_dosen.nip', '=', 'notulen_rapat.nip_id') 
            ->select('*')
            ->where('id_notulen', '=', $id_notulen)  
            ->get()          

        ];

        // Memanggil tampilan form create
        return view('dosen.notulensi.notulensi.konfirmasi.konfirmasiHasil',$data);
    }

    public function konfirmasihasil($id_notulen, Request $request)
    {
        $notulensi = NotulensiDosen::find($id_notulen);
        $notulensi->id_verifikasi = $request->input('id_verifikasi');
        $notulensi->save();
        // Menginsertkan apa yang ada di form ke dalam tabel biodata

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Verifikasi Hasil Rapat berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('notulensi/konfirmasi');
    }
public function kirimHasil($id_notulen)
    {
       
        $kirim = DB::table('notulen_rapat')
        ->join('dosen_rapat', 'dosen_rapat.notulen_id', '=', 'notulen_rapat.id_notulen')
        ->join('users', 'users.username', '=', 'dosen_rapat.nip')
        ->select('*')
        ->where('notulen_rapat.id_notulen', '=', $id_notulen) 
        ->get()
        ->toArray();
        $message = sprintf('Berikut telah dikirimkan notulensi hasil rapat : '.'
        nama rapat              : '. $kirim[0]->nama_rapat.'
        waktu pelaksanaan   : '. $kirim[0]->waktu_pelaksanaan.'
        deskripsi rapat         : '. $kirim[0]->deskripsi_rapat .'
        hasil pembahasan    : '. $kirim[0]->hasil_pembahasan);
        foreach ($kirim as $email => $u) {
        $this->mailer->raw($message, function (Message $m) use ($u) {
            $m->from('airlanggaacademic@gmail.com', 'Admin Airlangga Academic')->to($u->email)->subject('Notulensi Rapat');
        });
        }
       
        
        Session::put('alert-success', 'Berhasil mengirim hasil rapat');
        return Redirect::to('notulensi/konfirmasi');
        
    }

}