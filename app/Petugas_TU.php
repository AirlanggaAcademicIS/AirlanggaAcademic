<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas_TU extends Model
{
   protected $table = 'petugas_tu';    
   protected $primaryKey = 'nip_petugas';    
   protected $fillable = [
		'nama_petugas',
		'no_telp_petugas',
		'email_petugas',
   ];
}