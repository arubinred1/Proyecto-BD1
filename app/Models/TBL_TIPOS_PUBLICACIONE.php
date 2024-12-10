<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_TIPOS_PUBLICACIONE extends Model
{
    protected $table = 'TBL_TIPO_PUBLICACIONES';
    protected $primaryKey = "CODIGO_TIPO_PUBLICACION";
    public $timestamps = false;
}
