<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_TITULO extends Model
{
    protected $table = 'TBL_TITULOS';
    protected $primaryKey = "CODIGO_TITULO";
    public $timestamps = false;
}
