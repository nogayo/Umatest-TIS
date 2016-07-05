<?php

namespace App\Http\Controllers\gestor_examenes;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\falsoverdadero;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class falsoverdaderoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $falsoverdadero = falsoverdadero::paginate(15);

        return view('gestor_examenes.falsoverdadero.index', compact('falsoverdadero'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create($id_pregunta)
    {
        return view('gestor_examenes.falsoverdadero.create', compact('id_pregunta'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        //$this->validate($request, ['respuesta' => 'required', ]);

        //falsoverdadero::create($request->all());

        DB::table('falsoverdaderos')->insert(
            ['respuesta' => $request->input('respuesta'), 'pregunta_id' => $request->input('pregunta_id')]
            ); 

        Session::flash('flash_message', 'falsoverdadero added!');

        return redirect('gestor_examenes/pregunta');
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
        $falsoverdadero = falsoverdadero::findOrFail($id);

        return view('gestor_examenes.falsoverdadero.show', compact('falsoverdadero'));
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
        $falsoverdadero = falsoverdadero::findOrFail($id);

        return view('gestor_examenes.falsoverdadero.edit', compact('falsoverdadero'));
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
        $this->validate($request, ['respuesta' => 'required', ]);

        $falsoverdadero = falsoverdadero::findOrFail($id);
        $falsoverdadero->update($request->all());

        Session::flash('flash_message', 'falsoverdadero updated!');

        return redirect('gestor_examenes/pregunta');
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
        falsoverdadero::destroy($id);

        Session::flash('flash_message', 'falsoverdadero deleted!');

        return redirect('gestor_examenes/pregunta');
    }
}
