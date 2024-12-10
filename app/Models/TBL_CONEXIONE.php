<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_CONEXIONE extends Model
{
    protected $table = 'TBL_CONEXIONES';
    protected $primaryKey = "CODIGO_CONEXION";
    public $timestamps = false;
}
