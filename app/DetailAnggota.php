<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailAnggota extends Model
{
   protected $table = 'detail_anggota';    
   protected $primaryKey = 'id_anggota';    
   protected $fillable = [
   		'kode_penelitian_id',
		'anggota',
		
			
   ];
}