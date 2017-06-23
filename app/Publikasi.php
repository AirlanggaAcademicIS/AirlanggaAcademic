<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publikasi extends Model
{

   protected $table = 'pengajuan_kegiatan';
   protected $primaryKey = 'id_kegiatan';    
   protected $fillable = [
		'nomer_kegiatan',
		'nama_kegiatan',
		'url_poster',
		'tempat',
		'tanggal',
      ];
}