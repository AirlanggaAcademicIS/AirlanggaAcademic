<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Skripsi extends Model
{

    protected $table = 'skripsi';
    protected $primaryKey = 'id_skripsi';
    protected $dates = ['deleted_at'];
    protected $fillable = [
    'upload_berkas_proposal',
    'upload_berkas_skripsi'
    ];
    public $incrementing = false;
    protected $fillable = [
    'NIM_id',
    'nip_petugas_id',
    'kbk_id',
    'Judul'
   ];

   public function mhs()
   {
    return $this->belongsTo('App\AkunMahasiswa','NIM_id');
   }

   public function kbk()
   {
        return $this->belongsTo('App\KBK','kbk_id');
   }

    public function dosen()
   {
        return $this->hasMany('App\DosenPembimbing','skripsi_id');
   }
}

  

