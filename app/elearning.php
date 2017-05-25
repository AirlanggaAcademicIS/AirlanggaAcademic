<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class elearning extends Model
{
   protected $table = 'elearning';    
   protected $primaryKey = 'id_elearning';    
   protected $fillable = [
   		'mk_ditawarkan_id',
   		'nip_id',
   		'nama_file',
   		'direktori_file',
   		'judul',
   		'create_at',
   		'update_at',
   		'delete_at',
   ];

   
}