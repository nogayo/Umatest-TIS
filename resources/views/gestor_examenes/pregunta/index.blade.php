@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Pregunta <a href="{{ url('/gestor_examenes/pregunta/create') }}" class="btn btn-primary btn-xs" title="Add New Preguntum"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> {{ trans('pregunta.nombre_pregunta') }} </th><th> {{ trans('pregunta.puntaje_pregunta') }} </th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($pregunta as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->nombre_pregunta }}</td><td>{{ $item->puntaje_pregunta }}</td>
                    <td>
                        <a href="{{ url('/gestor_examenes/pregunta/' . $item->id) }}" class="btn btn-success btn-xs" title="View Preguntum"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/gestor_examenes/pregunta/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Preguntum"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/gestor_examenes/pregunta', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Preguntum" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Preguntum',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $pregunta->render() !!} </div>
    </div>

</div>
@endsection
