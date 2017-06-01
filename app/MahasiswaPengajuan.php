<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MahasiswaPengajuan extends Model
{
   protected $table = 'mahasiswa';    
   protected $fillable = [
   		'nim',
		'nIp_id',
   ];
    public function biodata()
{
	# code...
	return $this->belongsTo('App\MahasiswaPanitia','nim');
}
}