@extends('app')

@section('htmlheader_title')
   Home
@endsection


@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-14 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">GESTOR MATERIA</div>

                <div class="panel-body">
<div class="container">

    <h1>MIS EXAMENES</h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Nombre Examen</th><th> Duracion</th>
                    <th>Fecha y Hora Inicio</th><th>Fecha y Hora Limite</th>
                    <th>Dar Examen</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($notas as $item)
                {{-- */

                  $x++;
                       
                    $objeto_examen= DB::table('examens')->where('id', $item->examen_id)->first();

                    $nombre_examen=$objeto_examen->nombre_examen;

                    $id_examen=$objeto_examen->id;
                     
                    $f_inicio= $item->fecha_inicio;

                    $fecha_actual = date("Y-m-d H:i:s");      

                /* --}}
                <tr>
                    <td>{{ $x }}</td><td>{{$nombre_examen}}</td>
                    <td>{{ $item->duracion . "min"}}</td><td>{{$item->fecha_inicio}}</td><td>{{$item->fecha_fin}}</td>
                   
                   @if($fecha_actual >= $f_inicio)
                    <td>
                    <li><a href="{{url('darexamen/'.$item->id.'/'.$id_examen.'/formulario_examen')}}"><i class="fa fa-book Try it"></i> Empezar </a></li>
                    </td>
                   @else
                    <td>
                    <li><a href="#"><i class="fa fa-book Try it"></i> Empezar </a></li>
                    </td>
                   @endif

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
