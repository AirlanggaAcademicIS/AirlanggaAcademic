<?php

namespace App\Models\KrsKhs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MKDitawarkan extends Model
{
   use SoftDeletes;
   protected $table = 'mk_ditawarkan';    
   protected $primaryKey = 'id_mk_ditawarkan';   
   protected $dates = ['deleted_at']; 
   protected $fillable = [
   		'thn_akademik_id',
		'matakuliah_id',
   ];

   public function mk()
   {
      return $this->belongsTo('App\Models\KrsKhs\MK','matakuliah_id');

   }
}