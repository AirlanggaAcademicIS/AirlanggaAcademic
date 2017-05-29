<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokumentasi extends Model
{

   protected $table = 'dokumentasi';
   protected $primaryKey = 'id_dokumentasi';    
   protected $fillable = [
		'kegiatan_id',
		'lesson_learned',
		'url_foto',
      ];


public function dokumentasi()
{
	# code...
	return $this->belongsTo('App\KonfirmasiKegiatan','kegiatan_id');
}
	  
}