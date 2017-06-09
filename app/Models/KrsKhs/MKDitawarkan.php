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

=======
>>>>>>> cf7ed3b6320656f692b5b62fc0b0e4536eb21316
      return $this->belongsTo('App\Models\KrsKhs\MK','matakuliah_id');
   }
   public function tahun()
   {
      return $this->belongsTo('App\Models\KrsKhs\TahunAkademik','thn_akademik_id');
<<<<<<< HEAD

    }
 }
=======
   }
}
>>>>>>> cf7ed3b6320656f692b5b62fc0b0e4536eb21316
