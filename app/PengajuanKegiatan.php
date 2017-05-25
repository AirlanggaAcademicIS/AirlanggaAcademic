<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class PengajuanKegiatan extends Model
{	
	protected $table = 'pengajuan_kegiatan';	
	protected $primaryKey ='id_kegiatan';
	protected $fillable = [
		'nama',
		'history',
		'tujuan',
		'mekanisme',
		'tglpengajuan',
		'tglpelaksanaan',
		'url_poster',
		'sumber_id',
		
	];	
}

