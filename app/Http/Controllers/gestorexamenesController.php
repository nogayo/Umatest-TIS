<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;

class gestorexamenesController extends Controller
{
    public function formulario_simple(){
      return view('gestor_examenes.vistas_examenes.simple');
    }

    public function formulario_desarrollo(){
      return view('gestor_examenes.vistas_examenes.desarrollo');
    }

    public function formulario_multiple(){

     return view('gestor_examenes.vistas_examenes.multiple');
    }

    public function formulario_falsoverdadero(){
     return view('gestor_examenes.vistas_examenes.falsoverdadero');
    }

}