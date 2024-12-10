<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_INSTITUCIONE extends Model
{
    protected $table = 'TBL_INSTITUCIONES';
    protected $primaryKey = "CODIGO_INSTITUCION";
    public $timestamps = false;
}
