<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Silabus_Atribut_Softskill extends Model
{
   protected $table = 'atribut_softskill';    
   protected $primaryKey = 'id_softskill';    
   protected $fillable = [
   'softskill',
   ];
}