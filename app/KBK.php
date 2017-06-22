<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KBK extends Model
{
   protected $table = 'kbk';    
   protected $primaryKey = 'id_kbk';    
   protected $fillable = [
   		'id_kbk',
		'jenis_kbk', 
   ];
}