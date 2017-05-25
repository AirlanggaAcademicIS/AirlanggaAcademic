<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotulensiDosen extends Model
{
   protected $table = 'notulen_rapat';    
   protected $primaryKey = 'id_notulen';    
   protected $fillable = [
   'id_verifikasi',
   ];
}