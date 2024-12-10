<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_LUGARE extends Model
{
    protected $table = 'TBL_LUGARES';
    protected $primaryKey = "CODIGO_LUGAR";
    public $timestamps = false;
}
