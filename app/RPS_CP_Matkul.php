<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RPS_CP_Matkul extends Model
{	
   use SoftDeletes;
   protected $table = 'cp_mata_kuliah';    
   protected $primaryKey = 'id_cpmk';    
   protected $fillable = [
 	  'matakuliah_id',
		'kode_cpmk', 
		'deskripsi_cpmk',
   ];
   protected $dates = [
  	'created_at',
  	'deleted_at'
	];

	public function matkul()
   {
    	return $this->belongsTo('App\RPS_Matkul', 'matakuliah_id');
   }
}