<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPenelitian extends Model
{
   protected $table = 'detail_penelitian';    
   protected $primaryKey = 'id_penelitian';    
   protected $fillable = [
   		'kode_penelitian_id', 
		'abstract',
		'background',
		'objective',
		'methods',
		'results',	
   ];
}