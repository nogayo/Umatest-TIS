<?php

namespace App\Http\Controllers\gestor_cursos;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\examan;
use App\curso;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class examenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $examen = examan::paginate(15);

        return view('gestor_cursos.examen.index', compact('examen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {


        $vector = DB::table('cursos')->lists('nombre', 'id');
        //echo $a[0]->nombre;
        //echo $a[4]->nombre;

    
        return view('gestor_cursos.examen.create', compact('vector'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nombre_examen' => 'required', 'estado_examen' => 'required', 'fecha_examen' => 'required', 'puntaje_totalm' => 'required', ]);

        examan::create($request->all());

        Session::flash('flash_message', 'examan added!');

        return redirect('gestor_cursos/examen');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function show($id)
    {
        $examan = examan::findOrFail($id);

        return view('gestor_cursos.examen.show', compact('examan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function edit($id)
    {
        $examan = examan::findOrFail($id);

        return view('gestor_cursos.examen.edit', compact('examan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function update($id, Request $request)
    {
        $this->validate($request, ['nombre_examen' => 'required', 'estado_examen' => 'required', 'fecha_examen' => 'required', 'puntaje_totalm' => 'required', ]);

        $examan = examan::findOrFail($id);
        $examan->update($request->all());

        Session::flash('flash_message', 'examan updated!');

        return redirect('gestor_cursos/examen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function destroy($id)
    {
        examan::destroy($id);

        Session::flash('flash_message', 'examan deleted!');

        return redirect('gestor_cursos/examen');
    }
}
