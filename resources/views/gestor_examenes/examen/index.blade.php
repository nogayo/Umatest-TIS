@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Examen <a href="{{ url('/gestor_examenes/examen/create') }}" class="btn btn-primary btn-xs" title="Add New Examan"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> {{ trans('examen.nombre_examen') }} </th><th> {{ trans('examen.estado_examen') }} </th><th> {{ trans('examen.fecha_examen') }} </th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($examen as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->nombre_examen }}</td><td>{{ $item->estado_examen }}</td><td>{{ $item->fecha_examen }}</td>
                    <td>
                        <a href="{{ url('/gestor_examenes/examen/' . $item->id) }}" class="btn btn-success btn-xs" title="View Examan"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/gestor_examenes/examen/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Examan"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/gestor_examenes/examen', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Examan" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Examan',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $examen->render() !!} </div>
    </div>

</div>
@endsection
