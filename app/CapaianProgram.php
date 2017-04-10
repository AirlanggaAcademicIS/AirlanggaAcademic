<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CapaianProgram extends Model
{
   protected $table = 'cp_program';    
   protected $primaryKey = 'id';    
   protected $fillable = [
		'id_prodi', 
		'capaian_program_spesifik',
		'dimensi_capaian_umum',
			
   ];
}