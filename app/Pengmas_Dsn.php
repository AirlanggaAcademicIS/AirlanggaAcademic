<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengmas_Dsn extends Model
{
   protected $table = 'pengmas_dosen';    
   protected $primaryKey = 'nip';    
   protected $fillable = [
   		'nip',
		'kegiatan_id',
   ];

   public function pengmas(){
   return $this->belongsTo('App\PengmasDosen', 'kegiatan_id');
   }
}