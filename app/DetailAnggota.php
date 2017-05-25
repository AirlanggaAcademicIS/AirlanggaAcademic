<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailAnggota extends Model
{
   protected $table = 'detail_anggota';    
   protected $primaryKey = 'id_anggota';
   protected $foreignKey = 'kode_penelitian_id';     
   protected $fillable = [
   		'kode_penelitian_id',
		'anggota',
		
			
   ];
}