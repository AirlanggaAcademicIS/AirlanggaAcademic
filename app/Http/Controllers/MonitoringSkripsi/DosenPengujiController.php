<?php

namespace App\Http\Controllers\MonitoringSkripsi;



use Illuminate\Http\Request;

use App\DosenPenguji;

use App\Http\Controllers\Controller;

use Session;

class DosenPengujiController extends Controller
{
    //

	public function index(Request $request)
	{
		# code...
		$dosen_penguji = DosenPenguji::orderBy('created_at', 'asc')->get();
		$data = [
		'page'=> 'dosen_penguji',
		'dosen_penguji' => $dosen_penguji
		];
		return view('monitoring-skripsi.dosen_penguji.dosen-penguji',$data);

	}

	public function store(Request $request)
	{
		# code...
		$dosen_penguji = new DosenPenguji;

		$dosen_penguji->id_skripsi = $request->judul_skripsi;
		//lanjutkan
		$dosen_penguji->nip = $request->nip_dosen;

		$dosen_penguji->status = $request->status_penguji;

		$dosen_penguji->save();

		return redirect('/monitoring-skripsi/index-dosen-penguji');
	}

	public function destroy(Request $request)
	{
		# code...
		DosenPenguji::where('id',$request->id)->delete();

		return redirect('/monitoring-skripsi/index-dosen-penguji');

	}
	public function edit_dosen_penguji(Request $request)
	{
		$page = 'edit penguji';
		$dosen_penguji = DosenPenguji::find($request->id);

		$data = [
		'page' => $page,
		'dosen_penguji'=> $dosen_penguji

		];

		return view('monitoring-skripsi.dosen_penguji.edit-dosen-penguji',$data);
	}

	public function manipulate(Request $request)
	{
		# code...
		$dosen_penguji = DosenPenguji::find($request->id);

		$dosen_penguji->id_skripsi = $request->judul_skripsi;
		$dosen_penguji->nip = $request->nip_dosen;
		$dosen_penguji->status = $request->status_penguji;

		$dosen_penguji->save();

		return redirect('/monitoring-skripsi/index-dosen-penguji');

	}
}
