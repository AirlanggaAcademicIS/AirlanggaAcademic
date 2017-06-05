<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
   protected $table = 'dokumen';    
   protected $primaryKey = 'id_dokumen';
   public $incrementing = false;   
   protected $fillable = [
   	'nip_petugas_id',
		'nama',
		'tgl_upload',
      'url_dokumen',
		
   ];

 public function petugas()
   {
        return $this->belongsTo('App\Petugas_TU','nip_petugas_id');
   }

 
}