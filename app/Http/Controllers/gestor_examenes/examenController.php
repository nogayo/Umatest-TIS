<?php

namespace App\Http\Controllers\gestor_examenes;

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
    public function index($id_curso)
    {
        $examen = examan::paginate(15);

        return view('gestor_examenes.examen.index',compact('examen','id_curso'));
    }

   public function listar($id_curso)
    {
  
         $examen = DB::table('examens')->where('id_cursos', $id_curso)->get();

        return view('gestor_examenes.examen.index',compact('examen','id_curso'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {

        return view('gestor_examenes.examen.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nombre_examen' => 'required', 'estado_examen' => 'required', 'fecha_examen' => 'required',]);

         $id_curso=$request->input('id_curso');
         
         DB::table('examens')->insert(['nombre_examen' => $request->input('nombre_examen'), 'estado_examen' => $request->input('estado_examen'),
          'fecha_examen' => $request->input('fecha_examen'),'id_cursos'=> $request->input('id_curso')]
         );

        Session::flash('flash_message', 'examan added!');

        return redirect('gestor_examenes/'. $id_curso.'/examen');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function show($id,$id_curso)
    {
        $examan = examan::findOrFail($id);

        return view('gestor_examenes.examen.show', compact('examan','id_curso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function edit($id,$id_curso)
    {
        $examan = examan::findOrFail($id);

        return view('gestor_examenes.examen.edit', compact('examan','id_curso'));
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
        $this->validate($request, ['nombre_examen' => 'required', 'estado_examen' => 'required', 'fecha_examen' => 'required',]);
        $id_curso=$request->input('id_curso');

        $examan = examan::findOrFail($id);
        $examan->update($request->all());

        Session::flash('flash_message', 'examan updated!');

         return redirect('gestor_examenes/'. $id_curso.'/examen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function destroy($id,$id_curso)
    {
        examan::destroy($id);

        Session::flash('flash_message', 'examan deleted!');

        return redirect('gestor_examenes/'. $id_curso.'/examen');
    }

     /**
     * es para crear un nuevo examen.
     *
     * @return void
     */
    public function crear_examen($id_curso)
    {

      return view('gestor_examenes.examen.create', compact('id_curso'));

    }
}
