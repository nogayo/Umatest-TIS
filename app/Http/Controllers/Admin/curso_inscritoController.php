<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\curso_inscrito;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class curso_inscritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $curso_inscrito = curso_inscrito::paginate(15);

        return view('admin.curso_inscrito.index', compact('curso_inscrito'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('admin.curso_inscrito.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, ['fecha' => 'required', ]);

        curso_inscrito::create($request->all());

        Session::flash('flash_message', 'curso_inscrito added!');

        return redirect('admin/curso_inscrito');
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
        $curso_inscrito = curso_inscrito::findOrFail($id);

        return view('admin.curso_inscrito.show', compact('curso_inscrito'));
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
        $curso_inscrito = curso_inscrito::findOrFail($id);

        return view('admin.curso_inscrito.edit', compact('curso_inscrito'));
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
        $this->validate($request, ['fecha' => 'required', ]);

        $curso_inscrito = curso_inscrito::findOrFail($id);
        $curso_inscrito->update($request->all());

        Session::flash('flash_message', 'curso_inscrito updated!');

        return redirect('admin/curso_inscrito');
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
        curso_inscrito::destroy($id);

        Session::flash('flash_message', 'curso_inscrito deleted!');

        return redirect('admin/curso_inscrito');
    }
}
