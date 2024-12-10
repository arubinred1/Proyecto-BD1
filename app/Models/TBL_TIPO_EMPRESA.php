<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_TIPO_EMPRESA extends Model
{
    protected $table = 'TBL_TIPO_EMPRESAS';
    protected $primaryKey = "CODIGO_TIPO_EMPRESA";
    public $timestamps = false;
}
