<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kode extends Model
{
   protected $table = 'kategori_capaian_pembelajaran';    
   protected $primaryKey = 'id_kategori_cpem';
   protected $fillable = [
		'nama_cpem',	
   ];
}