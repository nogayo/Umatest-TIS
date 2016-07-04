@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Falsoverdadero {{ $falsoverdadero->id }}</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID.</th><td>{{ $falsoverdadero->id }}</td>
                </tr>
                <tr><th> {{ trans('falsoverdadero.respuesta') }} </th><td> {{ $falsoverdadero->respuesta }} </td></tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">
                        <a href="{{ url('gestor_examenes/falsoverdadero/' . $falsoverdadero->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Falsoverdadero"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['gestor_examenes/falsoverdadero', $falsoverdadero->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Falsoverdadero',
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