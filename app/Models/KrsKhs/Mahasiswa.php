<?php

namespace App\Models\KrsKhs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mahasiswa extends Model
{
   use SoftDeletes;
   protected $table = 'mahasiswa';    
<<<<<<< HEAD
   protected $primaryKey = 'nim';
   public $incrementing = false;
   protected $dates = ['deleted_at']; 
   protected $fillable = [
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
=======
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



>>>>>>> d5cedd8cf454a5a105be42446006a04237629111
}