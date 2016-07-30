@extends('app')
@section('htmlheader_title')
   CURSOS
@endsection
@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-14 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">GESTOR PLANILLA</div>
                  <div class="panel-body">
<div class="container">

    <h3>Calificando Desasarrollo </h3>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> Respuesta </th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($respuestas as $item)
                {{-- */$x++;/* --}}



                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->nombre_pregunta }}</td>
                    <td>{{ $item->puntaje_pregunta }}</td>
                </tr>



                <tr>
                    <td> Resp. {{ $x }}</td>
                    <td>{{ $item->respuesta }}</td>
                    <td>
                        
                 hola

                    </td>

               </tr>




            </tbody>
        </table>
        <!--div class="pagination-wrapper"> {!! $respuesta_desarrollo->render() !!} </div-->
        <div class="pagination"> </div>
    </div>
     </div>

              </div>
                   
            </div>
        </div>
    </div>
</div>
@endsection

