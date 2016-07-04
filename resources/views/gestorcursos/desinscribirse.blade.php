@extends('app')

@section('htmlheader_title')
   CURSOS
@endsection


@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-14 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">GESTOR DE CURSOS</div>

                <div class="panel-body">


<div class="container">

    <h1>DESINSCRIBIRSE DE UN CURSO</h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> {{ trans('curso.nombre') }} </th><th>Desinscribirse</th>
                </tr> 
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($curso as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->nombre }}</td>
                     <td>
                             <a href="{{ url('admin/curso/'.$item->id.'/borrar')}}"><span class="logo-lg"><img src="{{asset('/img/img_panelPrincipal/desinscribirse.png')}}"/> </span></a>
                      
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
