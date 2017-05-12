<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokumentasi extends Model
{
   protected $table = 'dokumentasi';    
   protected $primaryKey = 'id';    
   protected $fillable = [
		'nama_dokumentasi', 
		'deskripsi',
		'gambar',	
   ];
}