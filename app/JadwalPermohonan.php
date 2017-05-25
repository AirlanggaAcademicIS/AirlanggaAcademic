<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalPermohonan extends Model
{
   protected $table = 'jadwal_permohonan';
   protected $fillable = [
     'permohonan_ruang_id',
     'ruang_id',
  'hari_id', 
  'jam_id'
   ];

    public function permohonan_ruang()
    {
        return $this->belongsTo('App\PermohonanRuang', 'permohonan_ruang_id');
    }
    public function ruang()
    {
        return $this->belongsTo('App\Ruang', 'ruang_id');
    }
    public function hari()
    {
        return $this->belongsTo('App\Hari', 'hari_id');
    }
    public function jam()
    {
        return $this->belongsTo('App\Jam', 'jam_id');
    }
}