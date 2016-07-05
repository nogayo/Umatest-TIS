<?php

namespace App\Http\Controllers\gestor_examenes;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\desarrollo;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class desarrolloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $desarrollo = desarrollo::paginate(15);

        return view('gestor_examenes.desarrollo.index', compact('desarrollo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('gestor_examenes.desarrollo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, ['respuesta' => 'required', ]);

        desarrollo::create($request->all());

        Session::flash('flash_message', 'desarrollo added!');

        return redirect('gestor_examenes/desarrollo');
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
        $desarrollo = desarrollo::findOrFail($id);

        return view('gestor_examenes.desarrollo.show', compact('desarrollo'));
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
        $desarrollo = desarrollo::findOrFail($id);

        return view('gestor_examenes.desarrollo.edit', compact('desarrollo'));
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

        $desarrollo = desarrollo::findOrFail($id);
        $desarrollo->update($request->all());

        Session::flash('flash_message', 'desarrollo updated!');

        return redirect('gestor_examenes/desarrollo');
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
        desarrollo::destroy($id);

        Session::flash('flash_message', 'desarrollo deleted!');

        return redirect('gestor_examenes/desarrollo');
    }
}
