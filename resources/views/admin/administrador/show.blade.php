@extends('app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')
<div class="container">
    <div class="row">
    <!--Comienza path de Mostar cuenta de Administrador.
    -->
    <div class="col-md-14 col-md-offset-0 borderpath" style="width: 36%;margin-left: 0%;">
                    <ol class="breadcrumb">
                    <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i>Gestor Usuarios</a></li>
                    <li><a href="{{ url('admin/administrador') }}"></i>Administradores</a></li>
                    <li><a href="#"></i>Cuenta de Administrador</a></li>
                    </ol>
        </div>
    <!--Comienza path de Mostrar cuenta de Administrador.
    -->
        <div class="col-md-14 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">GESTOR DE USUARIOS</div>

                <div class="panel-body">






<div class="container">

    <h1>VER INFORMACION</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID.</th><td>{{ $administrador->id }}</td>
                </tr>
                <tr><th> Nombre </th><td> {{ $administrador->name }} </td></tr><tr><th> {{ trans('administrador.apellido') }} </th><td> {{ $administrador->apellido }} </td></tr><tr><th> {{ trans('administrador.direccion') }} </th><td> {{ $administrador->direccion }} </td></tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">
                        <a href="{{ url('admin/administrador/' . $administrador->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Administrador"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/administrador', $administrador->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Administrador',
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