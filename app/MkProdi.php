<?php

namespace App ;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MkProdi extends Model
{
   	use SoftDeletes;
   	protected $table = 'mk_prodi';    
   	protected $primaryKey = ''; 
   	protected $fillable = [
   		'prodi_id',
  		'mk_id',
  		'created_at',
  		'updated_at'
   	];
	
	public function Prodi()
    {
        return $this->belongsTo('App\Prodi', 'prodi_id');
    }

  public function Matkul()
    {
        return $this->belongsTo('App\MataKuliah', 'mk_id');
    }

	protected $guarded = [];

}