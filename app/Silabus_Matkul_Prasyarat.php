<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Silabus_Matkul_prasyarat extends Model
{
   protected $table = 'mk_prasyarat';    
   protected $primaryKey = 'id_mk_prasyarat';    
   protected $fillable = [
		'mk_id',
		'mk_syarat_id',		
   ];
   
   public function matkul()
   {
   	return $this->belongsTo('App\Silabus_Matkul','mk_syarat_id');
<<<<<<< HEAD
   	return $this->belongsTo('App\Silabus_Matkul','mk_id');
=======
>>>>>>> 090f09f1e2827b9381fce8cbf0cc327eaecfb4d1
   }
}