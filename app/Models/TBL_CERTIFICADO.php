<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_CERTIFICADO extends Model
{
    protected $table = 'TBL_CERTIFICADOS';
    protected $primaryKey = "CODIGO_CERTIFICADO";
    public $timestamps = false;
}
