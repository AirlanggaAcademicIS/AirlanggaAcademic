<?php

namespace App\Models\KrsKhs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PersentasePenilaian extends Model
{
   use SoftDeletes;
   protected $table = 'persentase_penilaian';    
   protected $primaryKey = 'jenis_penilaian_id';   
   protected $dates = ['deleted_at']; 
   protected $fillable = [
   'jenis_penilaian_id',
   'mk_ditawarkan_id',
   'persentase',
   	];

   	public function jenisPenilaian()
   {
      return $this->belongsTo('App\Models\KrsKhs\JenisPenilaian','jenis_penilaian_id');
   }

   public function mkDitawarkan()
   {
      return $this->belongsTo('App\Models\KrsKhs\MKDitawarkan','mk_ditawarkan_id');
   }
   
}