  @extends('app')

@section('htmlheader_title')
   CURSOS
@endsection
@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-14 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">GESTOR CARRERAS</div>
                  <div class="panel-body">
<div class="container">
<div class="container">

    <h1>Carrera <a href="{{ url('/admin/categoria/create') }}" class="btn btn-primary btn-xs" title="Add New Categorium"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
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
