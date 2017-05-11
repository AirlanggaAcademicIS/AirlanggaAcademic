<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPenelitian extends Model
{
   protected $table = 'detail_penelitian';    
   protected $primaryKey = 'id';    
   protected $fillable = [
		'abstract',
		'kode_penelitian', 
		'background',
		'objective',
		'methods',
		'results',	
   ];
}