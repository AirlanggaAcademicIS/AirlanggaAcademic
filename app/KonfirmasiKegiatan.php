<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class KonfirmasiKegiatan extends Model
{	
	protected $table = 'pengajuan_kegiatan';	
	protected $primaryKey ='id_kegiatan';
	protected $fillable = [
		'id_kegiatan',
		'konfirmasi_proposal',
		'konfirmasi_lpj',
		'revisi',
		'nama',
		'nama',
		'kategori',
		'konfirmasi',
		'history',
		'tujuan',
		'mekanisme',
		'tglpengajuan',
		'tglpelaksanaan',
		'rpengajuan',
		'rpelaksanaan',
		'url_poster',
		'sumber_id',
		'created_at',
		'updated_at',
		'deleted_at',
	];



}

