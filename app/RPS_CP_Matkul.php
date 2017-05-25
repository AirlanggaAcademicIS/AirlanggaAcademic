<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RPS_CP_Matkul extends Model
{
   protected $table = 'cp_mata_kuliah';    
   protected $primaryKey = 'id_cpmk';    
   protected $fillable = [
 	  	'matakuliah_id',
		'kode_cpmk', 
		'deskripsi_cpmk',
   ];

}