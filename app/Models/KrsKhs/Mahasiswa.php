<?php

namespace App\Models\KrsKhs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mahasiswa extends Model
{
   use SoftDeletes;
   protected $table = 'mahasiswa';    
   protected $primaryKey = 'nim';
   public $incrementing = false;
   protected $dates = ['deleted_at']; 
   protected $fillable = [
      'nim',
		'nip_id'		
   ];

   public function biodataDosen()
   {
      return $this->belongsTo('App\Models\KrsKhs\BiodataDosen','nip_id');
   }
   public function biodataMhs()
   {
      return $this->belongsTo('App\BiodataMahasiswa','nim');
   }
}