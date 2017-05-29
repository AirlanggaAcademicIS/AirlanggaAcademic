<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RPS_Matkul_Prasyarat extends Model
{
   protected $table = 'mk_prasyarat';    
   protected $primaryKey = 'id_mk_prasyarat';    
   protected $fillable = [
   	'mk_id',
		'mk_syarat_id', 
   ];

    public function matkul()
   {
   	return $this->belongsTo('App\RPS_Matkul','mk_syarat_id');
   }
}