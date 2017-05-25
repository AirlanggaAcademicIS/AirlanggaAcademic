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
<<<<<<< HEAD
		'kategori',
		'konfirmasi',
=======
>>>>>>> 79efc128db75ccf38d4214bfecf768286b3eab4d
		'history',
		'tujuan',
		'mekanisme',
		'tglpengajuan',
		'tglpelaksanaan',
		'url_poster',
<<<<<<< HEAD
=======
		'sumber_id',
>>>>>>> 79efc128db75ccf38d4214bfecf768286b3eab4d
		
	];	
}

