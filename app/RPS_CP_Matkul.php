<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RPS_CP_Matkul extends Model
{
<<<<<<< HEAD
	use SoftDeletes;
  	protected $table = 'cp_mata_kuliah';    
    protected $primaryKey = 'id_cpmk';    
    protected $fillable = [
   		'matakuliah_id',
=======
   protected $table = 'cp_mata_kuliah';    
   protected $primaryKey = 'id_cpmk';    
   protected $fillable = [
 	  	'matakuliah_id',
>>>>>>> 090f09f1e2827b9381fce8cbf0cc327eaecfb4d1
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