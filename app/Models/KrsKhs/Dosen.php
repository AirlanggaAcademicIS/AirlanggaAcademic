<?php

namespace App\Models\KrsKhs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dosen extends Model
{
   protected $table = 'dosen';    
   protected $primaryKey = 'nip';    
   protected $fillable = [
		'nip'
			
   ];
   public function biodataDosen()
   {
      return $this->belongsTo('App\Models\KrsKhs\BiodataDosen','nip');
   }
}