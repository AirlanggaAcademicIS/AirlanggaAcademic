<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notulensi extends Model
{
   protected $table = 'notulensi';    
   protected $primaryKey = 'id_notulen';    
   protected $fillable = [
		'nama_rapat',
		'agenda_rapat',
		'waktu_pelaksanaan',
		'hasil_pembahasan',
		'deskripsi_rapat',	
   ];
}