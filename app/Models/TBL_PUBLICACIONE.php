<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_PUBLICACIONE extends Model
{
    protected $table = 'TBL_PUBLICACIONES';
    protected $primaryKey = "CODIGO_PUBLICACIONES";
    public $timestamps = false;
}
