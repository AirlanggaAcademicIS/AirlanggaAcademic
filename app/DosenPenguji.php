<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DosenPenguji extends Model
{
    //
    use SoftDeletes;

    protected $table = 'dosen_penguji';
    protected $dates = ['deleted_at'];

}
