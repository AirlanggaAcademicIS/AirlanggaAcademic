<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status_Team_Teaching extends Model
{
   protected $table = 'status_team_teaching';    
   protected $primaryKey = 'id_status_tt';    
   protected $fillable = [
   		'status_tt',
   ];
}