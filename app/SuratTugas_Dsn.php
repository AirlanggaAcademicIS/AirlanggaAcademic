<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratTugas_Dsn extends Model
{
 	protected $table = 'surat_tugas_dosen';
    protected $primaryKey = 'nip';
    public $incrementing = false;
    protected $fillable = [
    'nip',
    'surat_id',
   ];

 	public function stugas(){
   	return $this->belongsTo('App\SuratTugasDosen','surat_id');
   }

}

  

