@extends('app')

@section('htmlheader_title')
   Home
@endsection


@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-14 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">GESTOR CURSOS</div>

                <div class="panel-body">


<div class="container">

    <h1>MIS CURSOS</h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> {{ trans('curso.nombre') }} </th><th> {{ trans('curso.capacidad') }} </th><th> {{ trans('curso.codigo') }} </th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($curso as $item)
                {{-- */$x++;/* --}}
 
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('admin/curso_dicta/'.$item->id.'/vista_contenido_curso')}}">{{$item->nombre}}</a></td><td>{{ $item->capacidad }}</td><td>{{ $item->codigo }}</td>
                    <td>
                        <a href="{{ url('/admin/curso/' . $item->id) }}" class="btn btn-success btn-xs" title="View Curso"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/admin/curso/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Curso"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/admin/curso', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Curso" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Curso',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ));!!}
                        {!! Form::close() !!}
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
