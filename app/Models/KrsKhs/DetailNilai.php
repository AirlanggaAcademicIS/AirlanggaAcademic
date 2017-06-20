<?php

namespace App\Models\KrsKhs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailNilai extends Model
{
   //use SoftDeletes;
   protected $table = 'detail_nilai';    
   protected $primaryKey = 'mk_ditawarkan_id';   
   protected $fillable = [
         'mk_ditawarkan_id',
         'mhs_id',
         'jenis_penilaian_id',
         'detail_nilai',
   ];
   public function mkDitawarkan()
   {
      return $this->belongsTo('App\Models\KrsKhs\MKDitawarkan','mk_ditawarkan_id');
   }

   public function jenis()
   {
      return $this->belongsTo('App\Models\KrsKhs\JenisPenilaian','jenis_penilaian_id');
   }   
}