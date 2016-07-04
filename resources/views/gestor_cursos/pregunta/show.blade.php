@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Preguntum {{ $preguntum->id }}</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID.</th><td>{{ $preguntum->id }}</td>
                </tr>
                <tr><th> {{ trans('pregunta.nombre_pregunta') }} </th><td> {{ $preguntum->nombre_pregunta }} </td></tr><tr><th> {{ trans('pregunta.puntaje_pregunta') }} </th><td> {{ $preguntum->puntaje_pregunta }} </td></tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">
                        <a href="{{ url('gestor_cursos/pregunta/' . $preguntum->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Preguntum"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['gestor_cursos/pregunta', $preguntum->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Preguntum',
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