<?php

namespace App\Http\Controllers\gestor_examenes;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\tarea;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

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

        return view('gestor_examenes.tarea.index', compact('tarea'));
    }
  /**
     * si el parametro es listar entonces lista todad=s las tareas.
     * si el parametro es crear entonces lista todad=s las tareas mas la opcion de crear tareas.
     * @param  int  $id_curso ,esl el id del curso
     * @param  varchar $tipo, es la opcion de crear y listar o solo listar
     * @return void
     */
    public function listar($id_curso,$tipo)
    {
         $tarea = DB::table('tareas')->where('id_cursos', $id_curso)->get();

        //return view('gestor_examenes.examen.index',compact('examen','id_curso'));

        return view('gestor_examenes.tarea.index', compact('tarea','id_curso','tipo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create($id_curso,$tipo)
    {
        return view('gestor_examenes.tarea.create', compact('id_curso','tipo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nombre_tarea' => 'required', 'descripcion' => 'required', 'archivo' => 'required', 'estado_tarea' => 'required','puntaje_total' => 'required', ]);


       $id_curso=$request->input('id_curso');
       $tipo=$request->input('tipo');
         
         DB::table('tareas')->insert(['nombre_tarea' => $request->input('nombre_tarea'), 'descripcion' => $request->input('descripcion'),
          'archivo' => $request->input('archivo'),'estado_tarea' => $request->input('estado_tarea'),
          'puntaje_total' => $request->input('puntaje_total'),'id_cursos'=> $request->input('id_curso')]
         );

        //tarea::create($request->all());
        //$id_curso=$request->input('id_curso');

        Session::flash('flash_message', 'tarea added!');
        //gestor_examenes/{id_curso}/examen/{tipo}/tarea

        return redirect('gestor_examenes/'.$id_curso.'/examen/'.$tipo.'/tarea');
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

        return view('gestor_examenes.tarea.show', compact('tarea'));
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

        return view('gestor_examenes.tarea.edit', compact('tarea'));
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
        $this->validate($request, ['nombre_tarea' => 'required', 'descripcion' => 'required', 'archivo' => 'required', 'estado_tarea' => 'required','puntaje_total' => 'required', ]);

        $tarea = tarea::findOrFail($id);
        $tarea->update($request->all());

        Session::flash('flash_message', 'tarea updated!');

        return redirect('gestor_examenes/tarea');
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

        return redirect('gestor_examenes/tarea');
    }
}
