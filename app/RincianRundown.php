<?php

namespace App;
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class RincianRundown extends Model
{	
	protected $table = 'rincian_rundown';	
	protected $primaryKey ='id_rdana';
	protected $fillable = [
		'id_rundown',
		'kegiatan_id',
		'waktu',
		'nama',
		'kategori_rundown',
		'created_at',
		'updated_at',
		'deleted_at',
	];

public function rincianRundown()
{
	# code...
	return $this->belongsTo('App\KonfirmasiKegiatan','kegiatan_id');
}

}
=======
>>>>>>> 3b902d6768f94e947d17cb31d0bc4b724c65a6c0

>>>>>>> 8ab999b6463730213402bf5657d64e0b812f08f2
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class RincianRundown extends Model
{	
	protected $table = 'rincian_rundown';	
	protected $primaryKey ='id_rdana';
	protected $fillable = [
		'id_rundown',
		'kegiatan_id',
		'waktu',
		'nama',
		'kategori_rundown',
		'created_at',
		'updated_at',
		'deleted_at',
	];

public function rincianRundown()
{
<<<<<<< HEAD
	# code...
	return $this->belongsTo('App\PengajuanKegiatan','kegiatan_id');
}

}
=======
   protected $table = 'rincian_rundown';
   protected $primaryKey = 'id_rundown';
   protected $fillable = [
   		'kegiatan_id',
   		'waktu',
		'nama', 
		'kategori_rundown'
   ];
}		
<<<<<<< HEAD

=======
>>>>>>> bc58d1387a2f89934472eed7b8d7bf9f74d6d90e
>>>>>>> 8ab999b6463730213402bf5657d64e0b812f08f2
>>>>>>> 3b902d6768f94e947d17cb31d0bc4b724c65a6c0
