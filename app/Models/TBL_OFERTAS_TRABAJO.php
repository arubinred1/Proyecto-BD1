<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_OFERTAS_TRABAJO extends Model
{
    protected $table = 'TBL_OFERTAS_TRABAJOS';
    protected $primaryKey = "CODIGO_OFERTA_TRABAJO";
    public $timestamps = false;
}
