<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konferensi extends Model
{
   protected $table = 'konferensi';    
   protected $primaryKey = 'id_konferensi';    
   protected $fillable = [
		'nama_konferensi', 
		'pemapar_konferensi',
		'tempat_konferensi',
		'tanggal_konferensi',
		'materi_konferensi',
		'status_konferensi',	
   ];
}