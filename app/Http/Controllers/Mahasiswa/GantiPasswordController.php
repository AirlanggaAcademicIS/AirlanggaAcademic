<?php 

namespace App\Http\Controllers\Mahasiswa;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
use Illuminate\Support\Facades\Hash;
use Auth;
// Tambahkan model yang ingin dipakai
use App\AkunUser;



class GantiPasswordController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'akunmahasiswa',
            // Memanggil semua isi dari tabel biodata
            
        
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('mahasiswa.ganti-password.index',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        
        $mhs= Auth::user()->username;
        $user = AkunUser::where('username', $mhs)->first();;
        $oldpass = $user->password;
        // dd($oldpass);
        $oldpassform = $request->input('oldpassword');
        if (Hash::check("$oldpassform", "$oldpass")) {
         $this->validate($request, [
        'oldpassword'           => 'required',
        'password'              => 'confirmed|min:6'
        ]);
        

        $password = $request->input("password");
        $password=Hash::make($password);
        $user->password = $password;
        $user->save();


        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Password Berhasil Diganti');

        // Kembali ke halaman mahasiswa/akun
        return Redirect::back();
        
        // else{
        //     Session::put('alert-warning', 'Ulangi password baru tidak cocok ');
        //     return Redirect::back();
        // }
    }
        else{
            Session::put('alert-warning', 'Password lama tidak cocok');
            return Redirect::back();
        }
    }

}