<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AkunUser extends Model
{
   protected $table = 'users';    
   protected $primaryKey = 'id';   
   protected $fillable = [
   		'username',
		'name',
		'role',
		'email',
		'password',
		
   ];
}