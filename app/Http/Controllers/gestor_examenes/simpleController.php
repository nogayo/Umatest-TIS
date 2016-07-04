<?php

namespace App\Http\Controllers\gestor_examenes;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\simple;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class simpleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $simple = simple::paginate(15);

        return view('gestor_examenes.simple.index', compact('simple'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('gestor_examenes.simple.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, ['respuesta' => 'required', ]);

        simple::create($request->all());

        Session::flash('flash_message', 'simple added!');

        return redirect('gestor_examenes/simple');
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
        $simple = simple::findOrFail($id);

        return view('gestor_examenes.simple.show', compact('simple'));
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
        $simple = simple::findOrFail($id);

        return view('gestor_examenes.simple.edit', compact('simple'));
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

        $simple = simple::findOrFail($id);
        $simple->update($request->all());

        Session::flash('flash_message', 'simple updated!');

        return redirect('gestor_examenes/simple');
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
        simple::destroy($id);

        Session::flash('flash_message', 'simple deleted!');

        return redirect('gestor_examenes/simple');
    }
}
