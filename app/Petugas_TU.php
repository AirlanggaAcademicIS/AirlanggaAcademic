<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas_TU extends Model
{
   protected $table = 'petugas_tu';    
   protected $primaryKey = 'id_tu';    
   protected $fillable = [
		'nip_petugas', 
		'nama_petugas',
		'no_telp_petugas',
		'email_petugas',
		'password',	
   ];
}