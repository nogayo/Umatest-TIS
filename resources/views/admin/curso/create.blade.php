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

    <h1>CREAR NUEVO CURSO</h1>
    <hr/>

    {!! Form::open(['url' => '/admin/curso', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
                {!! Form::label('nombre', trans('curso.nombre'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nombre', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('capacidad') ? 'has-error' : ''}}">
                {!! Form::label('capacidad', trans('curso.capacidad'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('capacidad', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('capacidad', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('codigo') ? 'has-error' : ''}}">
                {!! Form::label('codigo', trans('curso.codigo'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('codigo', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('codigo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            
             <div class="form-group {{ $errors->has('id_categoria') ? 'has-error' : ''}}">
                {!! Form::label('id_categoria', 'categoria', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('id_categoria', $vector, null, ['class' => 'form-control'])!!}
                    {!! $errors->first('id_categoria', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Crear', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

</div>


      </div>
            </div>
        </div>
    </div>
</div>
@endsection