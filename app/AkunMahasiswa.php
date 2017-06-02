<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AkunMahasiswa extends Model
{
   protected $table = 'mahasiswa';    
   protected $primaryKey = 'nim';
   public $incrementing = false;   
   protected $fillable = [
   	'nim',
		'nlp_id',
		'angkatan',
		'password',
		
   ];


}