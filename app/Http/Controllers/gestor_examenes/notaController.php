<?php

namespace App\Http\Controllers\gestor_examenes;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\notum;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class notaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $nota = notum::paginate(15);

        return view('gestor_examenes.nota.index', compact('nota'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('gestor_examenes.nota.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, ['calificacion' => 'required', 'fecha' => 'required', ]);

        notum::create($request->all());

        Session::flash('flash_message', 'notum added!');

        return redirect('gestor_examenes/nota');
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
        $notum = notum::findOrFail($id);

        return view('gestor_examenes.nota.show', compact('notum'));
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
        $notum = notum::findOrFail($id);

        return view('gestor_examenes.nota.edit', compact('notum'));
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
        $this->validate($request, ['calificacion' => 'required', 'fecha' => 'required', ]);

        $notum = notum::findOrFail($id);
        $notum->update($request->all());

        Session::flash('flash_message', 'notum updated!');

        return redirect('gestor_examenes/nota');
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
        notum::destroy($id);

        Session::flash('flash_message', 'notum deleted!');

        return redirect('gestor_examenes/nota');
    }
}
