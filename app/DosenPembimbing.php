<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DosenPembimbing extends Model
{
   protected $table = 'dosen_pembimbing';    
   protected $primaryKey = 'nip_id';    
   protected $fillable = [
		'status',
		'skripsi_id',		
		'nip_id'
   ];
}