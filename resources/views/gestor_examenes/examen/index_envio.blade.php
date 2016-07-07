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

    <h1>Enviar Examen</h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> {{ trans('examen.nombre_examen') }} </th><th> {{ trans('examen.estado_examen') }} </th><th> {{ trans('examen.fecha_examen') }} <th>Enviar examen</th></th>
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

                    <li><a href="{{url('/gestor_examenes/pregunta/'.$item->id.'/index')}}"><i class="fa fa-envelope-o"></i> Enviar </a></li>
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