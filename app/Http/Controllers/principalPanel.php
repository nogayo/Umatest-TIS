<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class principalPanel extends BaseController
{
     public function index()
    {
        return view('prueba');
    }
    public function administrador()
    {
        return view('panelprincipal.administrador');
    }
    public function docentes()
    {
        return view('panelprincipal.docentes');
    }
    public function estudiantes()
    {
        return view('panelprincipal.estudiantes');
    }
       public function ayuda()
    {
        return view('panelprincipal.ayuda');
    }




}
