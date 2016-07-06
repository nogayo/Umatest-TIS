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

    <h1>Desarrollo {{ $desarrollo->id }}</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID.</th><td>{{ $desarrollo->id }}</td>
                </tr>
                <tr><th> {{ trans('desarrollo.respuesta') }} </th><td> {{ $desarrollo->respuesta }} </td></tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">
                       
                         <a href="{{ url('/gestor_examenes/desarrollo/' . $desarrollo->id . '/'.$id_examen.'/edit') }}" class="btn btn-primary btn-xs" title="Editar respuesta"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>

                         <a href="{{ url('/gestor_examenes/desarrollo/' . $desarrollo->id . '/'.$id_examen.'/delete') }}" class="btn btn-danger btn-xs" title="Delete Multiple" onclick="myfuncion()"><span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Multiple" /></a>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>

</div>
</div>
            </div>
        </div>
    </div>
</div>
@endsection