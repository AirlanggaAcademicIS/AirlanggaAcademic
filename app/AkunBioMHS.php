<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AkunBioMHS extends Model
{
   protected $table = 'biodata_mhs';    
   protected $primaryKey = 'id_bio';  
   protected $fillable = [
   		'nim_id',
		'nama_mhs',
		'email_mhs',
		'foto_mhs',
		
   ];
}