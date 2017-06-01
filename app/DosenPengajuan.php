<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DosenPengajuan extends Model
{
   protected $table = 'dosen';    
   protected $fillable = [
   		'nip',
   ];
    public function biodata()
{
	# code...
	return $this->belongsTo('App\DosenPanitia','nip');
}
}