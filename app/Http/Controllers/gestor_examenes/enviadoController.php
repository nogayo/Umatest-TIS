<?php

namespace App\Http\Controllers\gestor_examenes;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\enviado;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;


class enviadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $enviado = enviado::paginate(15);

        return view('gestor_examenes.enviado.index', compact('enviado'));
    }
     public function listar($id_curso)
    {
          $enviar_tarea = DB::table('tareas')->where('id_cursos', $id_curso)->get();

        return view('gestor_examenes.enviado.enviar', compact('enviar_tarea','id_curso'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('gestor_examenes.enviado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, ['fecha_limite' => 'required', ]);

        enviado::create($request->all());

        Session::flash('flash_message', 'enviado added!');

        return redirect('admin/enviado');
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
        $enviado = enviado::findOrFail($id);

        return view('gestor_examenes.enviado.show', compact('enviado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function edit($id_curso,$id)
    {
        $enviado = enviado::findOrFail($id);

        return view('gestor_examenes.enviado.edit', compact('enviado'));
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
        $this->validate($request, ['fecha_limite' => 'required', ]);

        $enviado = enviado::findOrFail($id);
        $enviado->update($request->all());

        Session::flash('flash_message', 'enviado updated!');

        return redirect('admin/enviado');
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
        enviado::destroy($id);

        Session::flash('flash_message', 'enviado deleted!');

        return redirect('admin/enviado');
    }
}
