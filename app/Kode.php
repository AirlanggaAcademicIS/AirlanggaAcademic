<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kode extends Model
{
   protected $table = 'kode_cpmatkul';    
   protected $primaryKey = 'id';    
   protected $fillable = [
		'nama_cp',	
   ];
}