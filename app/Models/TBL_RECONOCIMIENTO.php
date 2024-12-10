<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_RECONOCIMIENTO extends Model
{
    protected $table = 'TBL_RECONOCIMIENTOS';
    protected $primaryKey = "CODIGO_RECONOCIMIENTOS";
    public $timestamps = false;
}
