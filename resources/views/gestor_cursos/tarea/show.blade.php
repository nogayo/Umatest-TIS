@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Tarea {{ $tarea->id }}</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID.</th><td>{{ $tarea->id }}</td>
                </tr>
                <tr><th> {{ trans('tarea.nombre_tarea') }} </th><td> {{ $tarea->nombre_tarea }} </td></tr><tr><th> {{ trans('tarea.descripcion') }} </th><td> {{ $tarea->descripcion }} </td></tr><tr><th> {{ trans('tarea.archivo') }} </th><td> {{ $tarea->archivo }} </td></tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">
                        <a href="{{ url('gestor_cursos/tarea/' . $tarea->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Tarea"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['gestor_cursos/tarea', $tarea->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Tarea',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>

</div>
@endsection