<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_NIVEL_FORMACIONE extends Model
{
    protected $table = 'TBL_NIVEL_FORMACIONES';
    protected $primaryKey = "CODIGO_NIVEL_FORMACION";
    public $timestamps = false;
}
