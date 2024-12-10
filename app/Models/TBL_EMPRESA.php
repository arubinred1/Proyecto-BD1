<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_EMPRESA extends Model
{
    protected $table = 'TBL_EMPRESAS';
    protected $primaryKey = "CODIGO_EMPRESA";
    public $timestamps = false;
}
