<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konferensi_Dsn extends Model
{
   protected $table = 'konferensi_dosen';    
   protected $primaryKey = 'nip';    
   protected $fillable = [
   		'nip',
		'konferensi_id',
   ];

   public function konferensi(){
   	return $this->belongsTo('App\Konferensi', 'konferensi_id');
   }
}