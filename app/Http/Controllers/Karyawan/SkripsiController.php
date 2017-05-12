<?php

namespace App\Http\Controllers\Karyawan;

use Illuminate\Http\Request;
use App\Skripsi;

use Session;

use App\Http\Controllers\Controller;

class SkripsiController extends Controller
{
    //
public function view_manage_hasil_sidang_proposal()
   {
   	# code...
   	$data = array('page' => 'hasil-sidang-proposal');

   	return view('karyawan.monitoring-skripsi.hasil-sidang.proposal',$data);
   }

   public function view_tambah_hasil_sidang_proposal()
      {
      	# code...
      	$data = array(
      		'page'=>'tambah-hasil-proposal'
      		);
      	return view('karyawan.monitoring-skripsi.hasil-sidang.tambah-hasil-proposal',$data);
      }   
}
