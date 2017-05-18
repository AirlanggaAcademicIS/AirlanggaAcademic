<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Silabus_Koor_Matkul extends Model
{
   protected $table = 'koor_mk';    
   protected $primaryKey = 'id_koor_mk';    
   protected $fillable = [
	   	'nip_id',
   		'mk_id',
		'status_tt_id',
   ];

   public function status()
   {
   		return $this->belongsTo('App\Status_Team_Teaching', 'status_tt_id');
   }
}