<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
   protected $table = 'prodi';    
   protected $primaryKey = 'id_prodi';    
   protected $fillable = [
		'id_fakultas', 
		'nip',
		'kode_prodi',
		'nama_prodi',	
   ];
}