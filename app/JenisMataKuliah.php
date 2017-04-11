<?php

namespace App ;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JenisMataKuliah extends Model
{
   use SoftDeletes;
   protected $table = 'jenis_mk';    
   protected $primaryKey = 'id';   
   protected $dates = ['deleted_at']; 
   protected $fillable = [
   	'jenis_mk',
		'created_at',
		'updated_at',
   ];
   protected $guarded = [];   
   
}