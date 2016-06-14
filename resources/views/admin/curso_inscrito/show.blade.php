@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Curso_inscrito {{ $curso_inscrito->id }}</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID.</th><td>{{ $curso_inscrito->id }}</td>
                </tr>
                <tr><th> {{ trans('curso_inscrito.fecha') }} </th><td> {{ $curso_inscrito->fecha }} </td></tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">
                        <a href="{{ url('admin/curso_inscrito/' . $curso_inscrito->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Curso_inscrito"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/curso_inscrito', $curso_inscrito->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Curso_inscrito',
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