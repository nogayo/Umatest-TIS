<?php

namespace App\Http\Controllers\gestor_examenes;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\multiple;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class multiplesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $multiples = multiple::paginate(15);

        return view('gestor_examenes.multiples.index', compact('multiples'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('gestor_examenes.multiples.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, ['respuesta' => 'required', 'correcta' => 'required', ]);

        multiple::create($request->all());

        Session::flash('flash_message', 'multiple added!');

        return redirect('gestor_examenes/multiples');
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
        $multiple = multiple::findOrFail($id);

        return view('gestor_examenes.multiples.show', compact('multiple'));
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
        $multiple = multiple::findOrFail($id);

        return view('gestor_examenes.multiples.edit', compact('multiple'));
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
        $this->validate($request, ['respuesta' => 'required', 'correcta' => 'required', ]);

        $multiple = multiple::findOrFail($id);
        $multiple->update($request->all());

        Session::flash('flash_message', 'multiple updated!');

        return redirect('gestor_examenes/multiples');
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
        multiple::destroy($id);

        Session::flash('flash_message', 'multiple deleted!');

        return redirect('gestor_examenes/multiples');
    }
}
