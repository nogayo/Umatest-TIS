@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Tipo_pregunta <a href="{{ url('/gestor_examenes/tipo_pregunta/create') }}" class="btn btn-primary btn-xs" title="Add New Tipo_preguntum"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> {{ trans('tipo_pregunta.tipo') }} </th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($tipo_pregunta as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->tipo }}</td>
                    <td>
                        <a href="{{ url('/gestor_examenes/tipo_pregunta/' . $item->id) }}" class="btn btn-success btn-xs" title="View Tipo_preguntum"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/gestor_examenes/tipo_pregunta/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Tipo_preguntum"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/gestor_examenes/tipo_pregunta', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Tipo_preguntum" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Tipo_preguntum',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $tipo_pregunta->render() !!} </div>
    </div>

</div>
@endsection
