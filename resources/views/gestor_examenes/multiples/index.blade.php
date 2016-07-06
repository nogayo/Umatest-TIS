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

    <h1>Multiples <a href="{{ url('/gestor_examenes/multiples/'.$id_pregunta.'/create') }}" class="btn btn-primary btn-xs" title="Add New Multiple"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> {{ trans('multiples.respuesta') }} </th><th> {{ trans('multiples.correcta') }} </th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($multiples as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->respuesta }}</td><td>{{ $item->correcta }}</td>
                    <td>
                        <a href="{{ url('/gestor_examenes/multiples/' . $item->id . '/'.$id_pregunta.'/show') }}" class="btn btn-success btn-xs" title="View Multiple"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/gestor_examenes/multiples/' . $item->id . '/'.$id_pregunta.'/edit') }}" class="btn btn-primary btn-xs" title="Edit Multiple"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        <a href="{{ url('/gestor_examenes/multiples/' . $item->id . '/'.$id_pregunta.'/delete') }}" class="btn btn-danger btn-xs" title="Delete Multiple" onclick="myfuncion()"><span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Multiple" /></a>
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
