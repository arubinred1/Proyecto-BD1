<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_COMENTARIO extends Model
{
    protected $table = 'TBL_COMENTARIOS';
    protected $primaryKey = "CODIGO_COMENTARIO";
    public $timestamps = false;
}
