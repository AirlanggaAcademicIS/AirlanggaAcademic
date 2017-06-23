<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RPSPerMinggu extends Model
{
   protected $table = 'mk_minggu';    
   protected $primaryKey = 'mk_id';    
   protected $fillable = [
<<<<<<< HEAD
=======
   		'mk_id',
>>>>>>> 51d35c1ddb4c47bc69e19accb81cb22e04df7d5e
		'minggu_id', 
		'mk_id',
		'status',
   ];
}