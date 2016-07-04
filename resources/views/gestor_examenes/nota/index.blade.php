@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Nota <a href="{{ url('/gestor_examenes/nota/create') }}" class="btn btn-primary btn-xs" title="Add New Notum"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> {{ trans('nota.calificacion') }} </th><th> {{ trans('nota.fecha') }} </th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($nota as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->calificacion }}</td><td>{{ $item->fecha }}</td>
                    <td>
                        <a href="{{ url('/gestor_examenes/nota/' . $item->id) }}" class="btn btn-success btn-xs" title="View Notum"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/gestor_examenes/nota/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Notum"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/gestor_examenes/nota', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Notum" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Notum',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $nota->render() !!} </div>
    </div>

</div>
@endsection
