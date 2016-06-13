
@extends('app')

@section('htmlheader_title')
   Home
@endsection


@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-14 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">USUARIOS</div>

                <div class="panel-body">



<div class="container">

    <h1>Docente {{ $docente->id }}</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID.</th><td>{{ $docente->id }}</td>
                </tr>
                <tr><th> {{ trans('docente.name') }} </th><td> {{ $docente->name }} </td></tr><tr><th> {{ trans('docente.apellido') }} </th><td> {{ $docente->apellido }} </td></tr><tr><th> {{ trans('docente.direccion') }} </th><td> {{ $docente->direccion }} </td></tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">
                        <a href="{{ url('admin/docente/' . $docente->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Docente"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/docente', $docente->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Docente',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>

</div>



            </div>
            </div>
        </div>
    </div>
</div>
@endsection