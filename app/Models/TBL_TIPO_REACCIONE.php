<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_TIPO_REACCIONE extends Model
{
    protected $table = 'TBL_TIPO_REACCIONES';
    protected $primaryKey = "CODIGO_TIPO_REACCION";
    public $timestamps = false;
}
