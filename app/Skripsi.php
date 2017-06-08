<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Skripsi extends Model
{

    protected $table = 'skripsi';
    protected $primaryKey = 'id_skripsi';
    public $incrementing = false;   
    protected $dates = ['deleted_at'];
    protected $fillable = [
    'NIM_id',
    'kbk_id',
    'statusprop_id',
    'statusskrip_id',
    'Judul',
    'nip_petugas_id',
    'tgl_sidangpro',
    'waktu_sidangpro',
    'tempat_sidangpro',
    'nilai_sidangpro',
    'nilai_sidangskrip',
    'tgl_sidangskrip',
    'waktu_sidangskrip',
    'tempat_sidangskrip',
    'tanggal_pengumpulan_proposal',
    'tanggal_pengumpulan_skripsi',
    'is_verified',
    'upload_berkas_proposal',
    'upload_berkas_skripsi'
    ];
    
   public function mhs()
   {
    return $this->belongsTo('App\BiodataMahasiswa','NIM_id');
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

  

