<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurnal_Dsn extends Model
{
   protected $table = 'jurnal_dosen';    
   protected $primaryKey = 'nip';    
   protected $fillable = [
		'jurnal_id',
   ];

   public function jurnal(){
   	return $this->belongsTo('App\JurnalDosen', 'jurnal_id');
   }
}