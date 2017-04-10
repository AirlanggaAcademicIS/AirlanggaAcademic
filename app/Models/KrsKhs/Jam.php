<?php

namespace App\Models\KrsKhs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jam extends Model
{
   use SoftDeletes;
   protected $table = 'jam';    
   protected $primaryKey = 'id_jam';   
   protected $dates = ['deleted_at']; 
   protected $fillable = [
   		'waktu',
   ];
}