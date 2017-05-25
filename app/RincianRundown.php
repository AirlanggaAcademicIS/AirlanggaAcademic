<?php

namespace App;
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

use Illuminate\Database\Eloquent\Model;

class RincianRundown extends Model
{
   protected $table = 'rincian_rundown';
   protected $primaryKey = 'id_rundown';
   protected $fillable = [
   		'kegiatan_id',
   		'waktu',
		'nama', 
		'kategori_rundown'
   ];
}		
>>>>>>> bc58d1387a2f89934472eed7b8d7bf9f74d6d90e
