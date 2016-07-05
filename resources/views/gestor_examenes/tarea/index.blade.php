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
      @if($tipo=='crear')
    <h1>Tarea <a href="{{ url('/gestor_examenes/'.$id_curso.'/tarea/'.$tipo.'/create') }}" class="btn btn-primary btn-xs" title="Add New Tarea"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
    @else

     <h1>Tarea <a href="#"></a></h1>
   @endif

    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> {{ trans('tarea.nombre_tarea') }} </th><th> {{ trans('tarea.descripcion') }} </th><th> {{ trans('tarea.archivo') }} </th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($tarea as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->nombre_tarea }}</td><td>{{ $item->descripcion }}</td><td>{{ $item->archivo }}</td>
                    <td>
                        <a href="{{ url('/gestor_examenes/tarea/' . $item->id) }}" class="btn btn-success btn-xs" title="View Tarea"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/gestor_examenes/tarea/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Tarea"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/gestor_examenes/tarea', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Tarea" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Tarea',
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

