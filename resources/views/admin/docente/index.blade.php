@extends('app')

@section('htmlheader_title')
   Home
@endsection


@section('main-content')
<div class="container">
    <div class="row">
    <div class="col-md-14 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <ol class="breadcrumb">
                    <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i>Gestor Usuarios</a></li>
                    <li><a href="#"></i>Docentes</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="col-md-14 col-md-offset-20">
            <div class="panel panel-default">
                <div class="panel-heading">GESTOR DE USUARIOS</div>

                <div class="panel-body">







<div class="container">

    <h1>Docente <a href="{{ url('/admin/docente/create') }}" class="btn btn-primary btn-xs" title="Add New Docente"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
    <div class="table" style="width: 97%">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> Nombre </th><th> {{ trans('users.apellido') }} </th><th> {{ trans('users.direccion') }} </th><th> {{ trans('users.telefono') }} </th><th> {{ trans('users.genero') }} </th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($docente as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                      <td>{{ $item->name }}</td><td>{{ $item->apellido }}</td><td>{{ $item->direccion }}</td><td>{{ $item->telefono }}</td><td>{{ $item->genero }}</td>
                    <td>
                        <a href="{{ url('/admin/docente/' . $item->id) }}" class="btn btn-success btn-xs" title="View Docente"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/admin/docente/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Docente"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/admin/docente', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Docente" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Docente',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination">  </div>
    </div>

</div>



            </div>
            </div>
        </div>
    </div>
</div>
@endsection
