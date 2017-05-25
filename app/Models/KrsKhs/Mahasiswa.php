<?php

namespace App\Models\KrsKhs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mahasiswa extends Model
{
   use SoftDeletes;
   protected $table = 'mahasiswa';    
   protected $primaryKey = 'nim';   
   protected $dates = ['deleted_at']; 
   protected $fillable = [
   'nim',
   'nlp_id',
   	];

   public function biodataMHS()
   {
      return $this->belongsTo('App\Models\KrsKhs\MKDitawarkan','mk_ditawarkan_id');
   }



}