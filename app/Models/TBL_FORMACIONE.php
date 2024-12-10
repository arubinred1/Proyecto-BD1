<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_FORMACIONE extends Model
{
    protected $table = 'TBL_FORMACIONES';
    protected $primaryKey = "CODIGO_FORMACIÓN";
    public $timestamps = false;
}
