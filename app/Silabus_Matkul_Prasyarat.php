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
<<<<<<< HEAD
   	return $this->belongsTo('App\Silabus_Matkul','mk_syarat_id');
=======
   	return $this->belongsTo('App\Silabus_Matkul','mk_id');
>>>>>>> cb89a76fe2b762f6a2c5f46b83efdd524bb32608
   }
}