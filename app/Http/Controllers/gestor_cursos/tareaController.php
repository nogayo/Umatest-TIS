<?php

namespace App\Http\Controllers\gestor_cursos;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\tarea;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class tareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $tarea = tarea::paginate(15);

        return view('gestor_cursos.tarea.index', compact('tarea'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('gestor_cursos.tarea.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nombre_tarea' => 'required', 'descripcion' => 'required', 'archivo' => 'required', 'estado_tarea' => 'required', 'fecha_limite' => 'required', 'puntaje_total' => 'required', ]);

        tarea::create($request->all());

        Session::flash('flash_message', 'tarea added!');

        return redirect('gestor_cursos/tarea');
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
        $tarea = tarea::findOrFail($id);

        return view('gestor_cursos.tarea.show', compact('tarea'));
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
        $tarea = tarea::findOrFail($id);

        return view('gestor_cursos.tarea.edit', compact('tarea'));
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
        $this->validate($request, ['nombre_tarea' => 'required', 'descripcion' => 'required', 'archivo' => 'required', 'estado_tarea' => 'required', 'fecha_limite' => 'required', 'puntaje_total' => 'required', ]);

        $tarea = tarea::findOrFail($id);
        $tarea->update($request->all());

        Session::flash('flash_message', 'tarea updated!');

        return redirect('gestor_cursos/tarea');
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
        tarea::destroy($id);

        Session::flash('flash_message', 'tarea deleted!');

        return redirect('gestor_cursos/tarea');
    }
}
