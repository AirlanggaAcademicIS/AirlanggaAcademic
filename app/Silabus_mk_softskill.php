<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Silabus_mk_softskill extends Model
{
   protected $table = 'mk_softskill';    
   protected $primaryKey = 'softskill_id';    
   protected $fillable = [
   		'mk_id'   		
   ];

   public function matkul()
   {
   		return $this->belongsTo('App\Silabus_Matkul', 'mk_id');
   }

   public function softskill()
   {
   		return $this->belongsTo('App\Silabus_Atribut_Softskill', 'softskill_id');
   }
}