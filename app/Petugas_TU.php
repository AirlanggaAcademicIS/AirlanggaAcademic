<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas_TU extends Model
{
   protected $table = 'petugas_tu';    
<<<<<<< HEAD
   protected $primaryKey = 'nip_petugas';    
   protected $fillable = [
=======
   protected $primaryKey = 'nip_petugas';
   public $incrementing = false;
   protected $fillable = [
   		'nip_petugas',
>>>>>>> 8948fb97d179ed7c19d09ae6d2dc17af0c02ca09
		'nama_petugas',
		'no_telp_petugas',
		'email_petugas',
   ];
}