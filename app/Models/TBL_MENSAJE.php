<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_MENSAJE extends Model
{
    protected $table = 'TBL_MENSAJES';
    protected $primaryKey = "CODIGO_MENSAJE";
    public $timestamps = false;
}
