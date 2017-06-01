<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
  	'deleted_at'
	];

	public function matkul()
   {
    	return $this->belongsTo('App\RPS_Matkul', 'matakuliah_id');
   }
}