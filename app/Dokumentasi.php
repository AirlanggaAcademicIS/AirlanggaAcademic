<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokumentasi extends Model
{

   protected $table = 'pengajuan_kegiatan';
   protected $primaryKey = 'id_kegiatan';    
   protected $fillable = [
		'kegiatan_id',
		'lesson_learned',
		'url_foto',
      ];
}