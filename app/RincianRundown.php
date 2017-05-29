<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RincianRundown extends Model
{
   protected $table = 'rincian_rundown';
   protected $primaryKey = 'id_rundown';
   protected $fillable = [
   		'kegiatan_id',
   		'waktu',
		'nama', 
		'kategori_rundown'
   ];
}		

