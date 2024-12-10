<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_ESTADO_CONEXIONE extends Model
{
    protected $table = 'TBL_ESTADO_CONEXIONES';
    protected $primaryKey = "CODIGO_ESTADO_CONEXION";
    public $timestamps = false;
}
