<?php 

namespace App\Http\Controllers\Dosen;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Reqsponse;
// Tambahkan model yang ingin dipakai
use App\Dosen;
use App\BiodataDosen;
use App\User;
use Auth;
class BiodataDosenController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'biodata-dosen',
            // Memanggil semua isi dari tabel biodata
            'dosen' => BiodataDosen::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.biodata-dosen.index',$data);
    }

   

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'biodata-dosen',
        ];

        // Memanggil tampilan form create
        return view('dosen.biodata-dosen.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        $dosen = $request->input();
        
         $this->validate($request, [
        'password'              => 'confirmed|min:6'
        ]);
        $password=bcrypt($request->input('password'));
        Dosen::create($dosen);
        BiodataDosen::create($dosen);
        User::create([
            'username' => $request->input('nip'),
            'name' => $request->input('nama_dosen'),
            'role' => 'dosen',
            'email' => $request->input('email'),
            'password'=> $password , 
        
            ]);      
        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Data Dosen Berhasil Ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('dosen/biodata-dosen');
    }

    public function delete($nip)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $dosen = BiodataDosen::where('nip',$nip);
        $dosen1 = Dosen::find($nip);
        $dosen2= User::where('username',$nip)->delete();
        // Menghapus biodata yang dicari tadi
        $dosen->delete();
        $dosen1->delete();
       
        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Data Dosen Berhasil Dihapus');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }

   public function edit($nip)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'biodata-dosen',
            // Mencari biodata berdasarkan id
            'dosen' => BiodataDosen::find($nip),
            'user' => User::where('username',$nip)->first(),

        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('dosen.biodata-dosen.edit',$data);
    }

    public function editAction($nip, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        
        $dosen1 = Dosen::find($nip);
        $dosen2 = User::where('username',$nip)->first();
        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $dosen1->nip = $request->input('nip');
        $dosen2->username = $request->input('nip');
        $dosen2->email = $request->input('email');
        $dosen2->name = $request->input('nama_dosen');
        $dosen = BiodataDosen::find($nip);
        $dosen->nip = $request->input('nip');
        $dosen->nama_dosen = $request->input('nama_dosen');
        $dosen->alamat_dosen = $request->input('alamat_dosen');
        $dosen->tanggal_lahir_dosen = $request->input('tanggal_lahir_dosen');
        $dosen2->save();
        $dosen1->save();        
        $dosen->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Data Dosen Berhasil Diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('dosen/biodata-dosen');
    }

}