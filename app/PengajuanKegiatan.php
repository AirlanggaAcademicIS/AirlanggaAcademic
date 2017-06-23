<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class PengajuanKegiatan extends Model

{ 
  protected $table = 'pengajuan_kegiatan';  
  protected $primaryKey ='id_kegiatan';
  protected $fillable = [

  'id_kegiatan',
    'nama',
    'konfirmasi_lpj',
    'konfirmasi_proposal',
    'konfirmasi_lpj',
    'history',
    'tujuan',
    'mekanisme',
    'tglpengajuan',
    'tglpelaksanaan',
    'rpengajuan',
    'rpelaksanaan',
    'url_poster',
    'created_at',
    'updated_at',
    'deleted_at',
  ];

public function coba()
{
  # code...
  return $this->belongsTo('App\Dokumentasi','id_kegiatan');
}

}
