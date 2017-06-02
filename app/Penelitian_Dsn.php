<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penelitian_Dsn extends Model
{
   protected $table = 'penelitian_milik_dosen';    
   protected $primaryKey = 'nip';    
   protected $fillable = [
		'penelitian_id',
   ];

   public function penelitian(){
   	return $this->belongsTo('App\PenelitianDosen', 'penelitian_id');
   }
}