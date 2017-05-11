<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RPS_Koor_Matkul extends Model
{
   protected $table = 'koor_mk';    
   protected $primaryKey = 'id_koor_mk';    
   protected $fillable = [
   	'nip_id',
		'mk_id', 
		'nama_matkul',
		'status_tt_id',
   ];
}