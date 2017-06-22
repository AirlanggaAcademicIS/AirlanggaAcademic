<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokumentasi extends Model
{

   protected $table = 'dokumentasi';
   protected $primaryKey = 'kegiatan_id';    
   protected $fillable = [
      'kegiatan_id',
		'lesson_learned',
		'url_foto',
      ];


      public function dokumentasi()
      {
   	return $this->belongsTo('App\KonfirmasiKegiatan','kegiatan_id');
      }
	  
      public function namaKegiatan(){
      	return $this->belongsTo('App\PengajuanKegiatan','kegiatan_id');
      }

      public function rondown(){
         return $this->belongsTo('App\RincianRundown','kegiatan_id');
      }

}