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
<<<<<<< HEAD:app/KonfirmasiKegiatan.php
		'id_kegiatan',
		'konfirmasi_proposal',
		'konfirmasi_lpj',
		'revisi',
		'nama',
=======
		'nama',
<<<<<<< HEAD
		'kategori',
		'konfirmasi',
=======
>>>>>>> 79efc128db75ccf38d4214bfecf768286b3eab4d
>>>>>>> bc58d1387a2f89934472eed7b8d7bf9f74d6d90e:app/PengajuanKegiatan.php
		'history',
		'tujuan',
		'mekanisme',
		'tglpengajuan',
		'tglpelaksanaan',
<<<<<<< HEAD:app/KonfirmasiKegiatan.php
		'rpengajuan',
		'rpelaksanaan',
		'url_poster',
		'sumber_id',
		'created_at',
		'updated_at',
		'deleted_at',
	];



}
=======
		'url_poster',
<<<<<<< HEAD
=======
		'sumber_id',
>>>>>>> 79efc128db75ccf38d4214bfecf768286b3eab4d
		
	];	
}

>>>>>>> bc58d1387a2f89934472eed7b8d7bf9f74d6d90e:app/PengajuanKegiatan.php
