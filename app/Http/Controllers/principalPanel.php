<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;
class principalPanel extends BaseController
{
     public function index()
    {
        
        return view('home');
    }
    /*public function todosloscursos()
    {
        return view('gestorcursos.todosloscursos');
    }
    */
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
