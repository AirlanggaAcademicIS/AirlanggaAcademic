<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class JenisMataKuliah extends Model
{
   protected $table = 'jenis_mk';    
   protected $primaryKey = 'id';
   protected $fillable = [
		'jenis_mk'	
   ];
   protected $guarded = [];  
}