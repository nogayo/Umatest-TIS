  @extends('app')

@section('htmlheader_title')
   CURSOS
@endsection


@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-14 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">GESTOR DE EXAMENES</div>

                <div class="panel-body">
<div class="container">

    <h1>Examen <a href="{{ url('/gestor_examenes/examen/'.$id_curso.'/create') }}" class="btn btn-primary btn-xs" title="Add New Examan"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> {{ trans('examen.nombre_examen') }} </th><th> {{ trans('examen.estado_examen') }} </th><th> {{ trans('examen.fecha_examen') }} <th>Llenar Preguntas</th></th><th>Actions</th>
                </tr>
                </tr>
            </thead>
            <tbody>


            {{-- */$x=0;/* --}}
            @foreach($examen as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->nombre_examen }}</td><td>{{ $item->estado_examen }}</td><td>{{ $item->fecha_examen }}</td>


                    <td> 

                    <li><a href="{{url('/gestor_examenes/pregunta/'.$item->id.'/index')}}"><i class="fa fa-file-text-o"></i> Llenar </a></li>
                    </td>
                    <td>
                        <a href="{{ url('/gestor_examenes/examen/'. $item->id .'/ver/'.$id_curso.'/materia') }}" class="btn btn-success btn-xs" title="View Examan"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>

                        <a href="{{ url('/gestor_examenes/examen/' . $item->id . '/update/'.$id_curso.'/edit') }}" class="btn btn-primary btn-xs" title="Edit Examan"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>

                         <a href="{{ url('/gestor_examenes/examen/' . $item->id . '/delete/'.$id_curso.'/destroy') }}" class="btn btn-danger btn-xs" title="Delete Multiple" onclick='return confirm("Confirm delete?")'><span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Multiple" /></a>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> </div>
    </div>

</div>
     </div>
            </div>
        </div>
    </div>
</div>
@endsection
