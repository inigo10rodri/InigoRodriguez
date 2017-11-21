<?php

namespace App\Http\Controllers;

use App\usuPermitido;
use Illuminate\Http\Request;

class usuarioController extends Controller
{


    public function tienepermiso($permiso){

        if ($this->usuPermitido()->where('permiso', $permiso)->first()) {
            return true;
        }
        return false;

    }
}
