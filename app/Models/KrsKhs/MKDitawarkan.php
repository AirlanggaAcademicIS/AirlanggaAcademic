<?php

namespace App\Models\KrsKhs;

use Illuminate\Database\Eloquent\Model;

class MKDitawarkan extends Model
{
   protected $table = 'mk_ditawarkan';    
   protected $primaryKey = 'id_mk_ditawarkan';   
   protected $fillable = [
   		'thn_akademik_id',
         'matakuliah_id',
   ];

   public function mk()
   {
<<<<<<< HEAD
      return $this->belongsTo('App\Models\KrsKhs\MK','matakuliah_id');
   }
   public function tahun()
   {
      return $this->belongsTo('App\Models\KrsKhs\TahunAkademik','thn_akademik_id');
=======
      return $this->belongsTo('App\Models\KrsKhs\MataKuliah','matakuliah_id');

      	public function MK()
   {
   	return $this->belongsTo('App\Models\KrsKhs\MK','matakuliah_id');

>>>>>>> d5cedd8cf454a5a105be42446006a04237629111
   }
}