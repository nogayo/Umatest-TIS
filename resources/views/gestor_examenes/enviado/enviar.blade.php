  @extends('app')

@section('htmlheader_title')
   CURSOS
@endsection


@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-14 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">GESTOR DE TAREAS</div>

                <div class="panel-body">
<div class="container">
<h2> Envio <a href="#"></a></h2>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> {{ trans('tarea.nombre_tarea') }} </th><th> {{ trans('tarea.descripcion') }} </th><th> {{ trans('tarea.archivo') }} </th><th>Fecha de creacion</th><th>Enviar Tarea</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($enviar_tarea as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->nombre_tarea }}</td><td>{{ $item->descripcion }}</td><td>{{ $item->archivo }}</td><td>{{ $item->fecha_creacion }}</td>
                    <td>
                    <li><a href="{{url('/gestor_examenes/enviar/'.$id_curso.'/'.$item->id.'/create')}}"><i class="fa fa-envelope-o"></i> Enviar Tarea</a></li>

                    </td>>
                    <td>
                        <a href="{{ url('/gestor_examenes/tarea/' . $item->id) }}" class="btn btn-success btn-xs" title="View Tarea"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/gestor_examenes/'.$id_curso.'/enviar/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Tarea"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>

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

