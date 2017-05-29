<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DosenPembimbing extends Model
{
   protected $table = 'dosen_pembimbing';    
   protected $primaryKey = 'nip_id';
   public $incrementing = false;
   protected $fillable = [
		'status',
		'skripsi_id',		
		'nip_id'
   ];

    public function biodata()
   {
   	   	return $this->belongsTo('App\BiodataDosen','nip');
   }

   public function bimbingan(){
    return $this->belongsTo('App\Skripsi', 'skripsi_id');
   }
}