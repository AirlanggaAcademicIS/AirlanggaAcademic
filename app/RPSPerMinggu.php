<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RPSPerMinggu extends Model
{
   protected $table = 'mk_minggu';    
   protected $primaryKey = 'mk_id';    
   protected $fillable = [
		'minggu_id', 
		'mk_id',
		'status',
   ];
}