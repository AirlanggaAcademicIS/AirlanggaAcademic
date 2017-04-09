<?php

namespace App\Http\Controllers\MonitoringSkripsi;

use Illuminate\Http\Request;

use App\DosenPembimbing;

use App\Http\Controllers\Controller;

use Session;

class DosenPembimbingController extends Controller
{
    //

    

   

	public function index(Request $request)
	{
		# code...
		$dosbing = DosenPembimbing::orderBy('created_at','asc')->get();
		

		$data = [
		'page'=>'dosbing',
		'list'=>$dosbing,
		
		];

		return view('monitoring-skripsi.dosbing.dosbing',$data);
	}

	public function edit_dosbing(Request $request)
	{
		# code...
		$dosbing = DosenPembimbing::where('id',$request->id)->get();
		$skripsi = array(
			'Handwriting Recognition',
			'Particle Swarm Optimization',
			'Voice Recognition'
			);

		$nama_dosbing = array();

		
		$nama = ['Kenny','Robbi','Zafitra'];
		$nip_dosen = ['214','215','216'];
		$status_dosbing = ['Dosen Pertama','Dosen Kedua'];
		
		$data = [
		'page' => 'edit dosbing',
		'dosbing' =>$dosbing,
		'skripsi'=> $skripsi,
		'nama_dosbing'=>$nama,
		'nip_dosbing'=>$nip_dosen,
		'status_dosbing'=>$status_dosbing
		];
		return view('monitoring-skripsi.dosbing.edit-dosbing',$data);
	}

	public function store(Request $request)
	{
		# code...
		$status_insert = "";

		try{
       $dosbing = new DosenPembimbing;
       	$dosbing->id_skripsi = $request->judul_skripsi;
		$dosbing->nip = $request->nip_dosen;
		$dosbing->status = $request->status_pembimbing;

		$dosbing->save();
		$status_insert = "Berhasil menyimpan data";

		Session::flash('status_insert','1');
		
		
    }
    catch(Exception $e){
       // do task when error
    
       Session::flash('status_insert','0');
    	
    }

	return redirect('/monitoring-skripsi/index-dosbing');

		
	}

	public function destroy(Request $request)
	{
		# code...
		

		try{
			DosenPembimbing::where('id',$request->id)->delete();
			Session::flash('status_delete','1');
		}

		catch(Exception $e){
			Session::flash('status_delete','0');
		}

    	return redirect('/monitoring-skripsi/index-dosbing');
	}

	public function manipulate(Request $request)
	{
		# code...
		

		try{

			$dosbing = DosenPembimbing::find($request->id);

		$dosbing->id_skripsi = $request->judul_skripsi;
		$dosbing->nip = $request->nip_dosen;
		$dosbing->status = $request->status_pembimbing;

		$dosbing->save();

		Session::flash('status_edit','1');

		}

		catch(Exception $e){
			Session::flash('status_edit','0');
		}

		return redirect('/monitoring-skripsi/index-dosbing');
	}

}
