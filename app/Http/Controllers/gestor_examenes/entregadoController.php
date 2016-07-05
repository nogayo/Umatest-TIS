<?php

namespace App\Http\Controllers\gestor_examenes;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\entregado;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class entregadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $entregado = entregado::paginate(15);

        return view('gestor_examenes.entregado.index', compact('entregado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('gestor_examenes.entregado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, ['descripcion_tarea' => 'required', 'archivo' => 'required', 'fecha' => 'required', 'puntaje' => 'required', ]);

        entregado::create($request->all());

        Session::flash('flash_message', 'entregado added!');

        return redirect('gestor_examenes/entregado');
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
        $entregado = entregado::findOrFail($id);

        return view('gestor_examenes.entregado.show', compact('entregado'));
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
        $entregado = entregado::findOrFail($id);

        return view('gestor_examenes.entregado.edit', compact('entregado'));
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
        $this->validate($request, ['descripcion_tarea' => 'required', 'archivo' => 'required', 'fecha' => 'required', 'puntaje' => 'required', ]);

        $entregado = entregado::findOrFail($id);
        $entregado->update($request->all());

        Session::flash('flash_message', 'entregado updated!');

        return redirect('gestor_examenes/entregado');
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
        entregado::destroy($id);

        Session::flash('flash_message', 'entregado deleted!');

        return redirect('gestor_examenes/entregado');
    }
}
