<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
   protected $table = 'fakultas';    
   protected $primaryKey = 'id_fakultas';    
   protected $fillable = [
		'id_universitas',
		'kode_fakultas',
		'nama_fakultas',
		'created_at',
		'updated_at',	
   ];
}