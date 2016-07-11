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

     <h2>Mis tareas <a href="#"></a></h2>
  


    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                <th>S.No</th><th> Nombre de la tarea</th>
                <th> Descripcion </th>
                <th> Archivo </th>
                <th> Fecha limte entrega </th>
                <th>Descargar</th>
                <th>Subir tarea</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($tareas as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->nombre_tarea }}</td>
                    <td>{{ $item->descripcion }}</td>
                    <td>{{ $item->archivo }}</td>
                    <td>{{ $item->fecha_limite }}</td>
                    <td> 
                    <li><a href="#"><i class="fa fa-cloud-download" style="font-size:24px;color:orange"></i></a></li>
                    </td>
                     <td> 
                    <li><a href="#"><i class="fa fa-cloud-upload" style="font-size:24px;color:green"></i></a></li>
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

