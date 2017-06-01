<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DosenPanitia extends Model
{
   protected $table = 'biodata_dosen';    
   protected $primaryKey = 'nip';    
   protected $fillable = [
		'biodata_id',
		'nama_dosen',
		'alamat_dosen',
		'status_dosen',
		'tanggal_lahir_dosen',
   ];
}