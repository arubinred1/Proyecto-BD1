<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_TIPO_LUGARE extends Model
{
    protected $table = 'TBL_TIPO_LUGARES';
    protected $primaryKey = "CODIGO_TIPO_LUGAR";
    public $timestamps = false;
}
