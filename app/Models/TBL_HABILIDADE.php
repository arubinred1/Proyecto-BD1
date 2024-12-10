<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_HABILIDADE extends Model
{
    protected $table = 'TBL_HABILIDADES';
    protected $primaryKey = "CODIGO_HABILIDAD";
    public $timestamps = false;
}
