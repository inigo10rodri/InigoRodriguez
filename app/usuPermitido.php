<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuPermitido extends Model
{
    protected $table="usu_permitidos";

    protected $fillable=['nombreUsu', 'permiso'];
}
