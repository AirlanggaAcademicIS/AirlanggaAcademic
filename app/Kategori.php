<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kategori extends Model
{
	use SoftDeletes;
   protected $table = 'kategori';
   protected $primaryKey = 'id_kategori'; 
   protected $fillable = [
		'kategori',
   ];
}