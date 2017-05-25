<?php

namespace App\Models\KrsKhs;

use Illuminate\Database\Eloquent\Model;

class MKDitawarkan extends Model
{
   protected $table = 'mk_ditawarkan';    
   protected $primaryKey = 'id_mk_ditawarkan';   
   protected $fillable = [
   		'thn_akademik_id',
         'matakuliah_id',
   ];

   public function mk()
   {
      return $this->belongsTo('App\Models\KrsKhs\MataKuliah','matakuliah_id');


   }
}