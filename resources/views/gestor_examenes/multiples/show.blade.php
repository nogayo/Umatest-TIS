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

    <h1>Multiple {{ $multiple->id }}</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID.</th><td>{{ $multiple->id }}</td>
                </tr>
                <tr><th> {{ trans('multiples.respuesta') }} </th><td> {{ $multiple->respuesta }} </td></tr><tr><th> {{ trans('multiples.correcta') }} </th><td> {{ $multiple->correcta }} </td></tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">
                           <a href="{{ url('/gestor_examenes/multiples/' . $multiple->id . '/'.$id_pregunta.'/edit') }}" class="btn btn-primary btn-xs" title="Edit Multiple"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                       <a href="{{ url('/gestor_examenes/multiples/' . $multiple->id . '/'.$id_pregunta.'/delete') }}" class="btn btn-danger btn-xs" title="Delete Multiple" onclick="myfuncion()"><span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Multiple" /></a>
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