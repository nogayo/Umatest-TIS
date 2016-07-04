@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Notum {{ $notum->id }}</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID.</th><td>{{ $notum->id }}</td>
                </tr>
                <tr><th> {{ trans('nota.calificacion') }} </th><td> {{ $notum->calificacion }} </td></tr><tr><th> {{ trans('nota.fecha') }} </th><td> {{ $notum->fecha }} </td></tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">
                        <a href="{{ url('gestor_cursos/nota/' . $notum->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Notum"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['gestor_cursos/nota', $notum->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Notum',
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