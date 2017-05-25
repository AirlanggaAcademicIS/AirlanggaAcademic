<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CapaianProgram extends Model
{
   protected $table = 'cp_program';    
   protected $primaryKey = 'id';    
   protected $fillable = [
		'prodi_id', 
		'capaian_program_spesifik',
		'dimensi_capaian_umum',
			
   ];

   public function prodi ()
   {
	   	return $this->belongsTo('App\Prodi', 'prodi_id');
 	  }
}