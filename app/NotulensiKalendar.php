<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotulensiKalendar extends Model
{
   protected $table = 'notulen_rapat';    
   protected $primaryKey = 'id_notulen';    
   protected $fillable = [
  'nama_rapat',
  'waktu_pelaksanaan',
   ];
}