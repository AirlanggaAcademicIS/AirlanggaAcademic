<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NamaDosenMK extends Model
{
   protected $table = 'biodata_dosen';    
   protected $primaryKey = 'biodata_id';    
   protected $fillable = [
   		'nip',
   		'nama_dosen',
   		'alamat_dosen',
   		'status_dosen',
   		'tanggal_lahir_dosen',
   ];
  
  	public function dosen()
   {
    	return $this->belongsTo('App\Dosen', 'nip');
   }
}