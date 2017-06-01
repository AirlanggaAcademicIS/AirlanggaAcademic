<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JabatanPanitia extends Model
{
   protected $table = 'jabatan';    
   protected $primaryKey = 'id_jabatan';    
   protected $fillable = [
		'jabatan',
   ];
}