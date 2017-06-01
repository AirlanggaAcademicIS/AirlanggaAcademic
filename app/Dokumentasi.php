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

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5a734d94f7e78fe35eeff1f606d98a6cdcf84e2d

public function dokumentasi()
{
	# code...
	return $this->belongsTo('App\KonfirmasiKegiatan','kegiatan_id');
}
	  
<<<<<<< HEAD
=======
=======
      public function namaKegiatan(){
      	return $this->belongsTo('App\PengajuanKegiatan','kegiatan_id');
      }

      public function rondown(){
         return $this->belongsTo('App\RincianRundown','kegiatan_id');
      }
>>>>>>> bc58d1387a2f89934472eed7b8d7bf9f74d6d90e
>>>>>>> 5a734d94f7e78fe35eeff1f606d98a6cdcf84e2d
}