<?php

namespace App\Http\Controllers\gestor_foros;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\comentario;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;
use Auth;

class comentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $comentario = comentario::paginate(15);

        return view('gestor_foro.comentario.index', compact('comentario'));
    }

     public function show_comentario($id_curso,$id_foro)
    {

           
  
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('gestor_foro.comentario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, ['mensaje' => 'required', 'fecha' => 'required', ]);

        comentario::create($request->all());

        Session::flash('flash_message', 'comentario added!');

        return redirect('admin/comentario');
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
        $comentario = comentario::findOrFail($id);

        return view('gestor_foro.comentario.show', compact('comentario'));
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
        $comentario = comentario::findOrFail($id);

        return view('gestor_foro.comentario.edit', compact('comentario'));
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
        $this->validate($request, ['mensaje' => 'required', 'fecha' => 'required', ]);

        $comentario = comentario::findOrFail($id);
        $comentario->update($request->all());

        Session::flash('flash_message', 'comentario updated!');

        return redirect('admin/comentario');
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
        comentario::destroy($id);

        Session::flash('flash_message', 'comentario deleted!');

        return redirect('admin/comentario');
    }
}
