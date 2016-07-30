  @extends('app')

@section('htmlheader_title')
   CURSOS
@endsection
@section('main-content')
<div class="container">
    <div class="row">
    <!--Comienza path de ver Carreras.
                -->
                <div class="col-md-14 col-md-offset-0 borderpath" style="width: 19%;margin-left: 0%;">
                    <ol class="breadcrumb">
                    <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i>home</a></li>
                    <li><a href="#"></i>Carreras</a></li>
                    </ol>
                 </div>
             <!--Termina path ver Carreras.
             -->
        <div class="col-md-14 col-md-offset-0" style="padding-top:50px;">
            <div class="panel panel-default">
                <div class="panel-heading">GESTOR CARRERAS</div>
                  <div class="panel-body">
<div class="container">
<div class="container">

    <h1>Carrera <a href="{{ url('/admin/categoria/create') }}" class="btn btn-primary btn-xs" title="Añadir Nuevo Categorium"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> Nombre de la Carrera </th><th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($categoria as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->nombre }}</td>
                    <td>
                        <a href="{{ url('/admin/categoria/' . $item->id) }}" class="btn btn-success btn-xs" title="Ver Carrera"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/admin/categoria/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Editar Carrera"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/admin/categoria', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Eliminar Carrera" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Eliminar Carrera',
                                    'onclick'=>'return confirm("Esta seguro que quiere eliminar?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $categoria->render() !!} </div>
    </div>

</div>
             </div>
            </div>
        </div>
    </div>
</div>
@endsection
