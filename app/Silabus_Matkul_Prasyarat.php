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
}