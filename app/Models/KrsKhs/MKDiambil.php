<?php

namespace App\Models\KrsKhs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MKDiambil extends Model
{
   //use SoftDeletes;
   protected $table = 'mk_diambil';    
   protected $primaryKey = '';   
   protected $dates = ['deleted_at'];
   protected $fillable = [
   'mk_ditawarkan_id',
		'mhs_id',
		'nilai',
		'is_approve',		
   ];

   public function mkDitawarkan()
   {
      return $this->belongsTo('App\Models\KrsKhs\MKDitawarkan','mk_ditawarkan_id');
   }

   public function mahasiswa()
   {
      return $this->belongsTo('App\Models\KrsKhs\Mahasiswa','mhs_id');
   }
}