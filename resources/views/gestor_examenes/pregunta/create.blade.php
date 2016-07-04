@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Create New Preguntum</h1>
    <hr/>

    {!! Form::open(['url' => '/gestor_examenes/pregunta', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('nombre_pregunta') ? 'has-error' : ''}}">
                {!! Form::label('nombre_pregunta', trans('pregunta.nombre_pregunta'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nombre_pregunta', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('nombre_pregunta', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('puntaje_pregunta') ? 'has-error' : ''}}">
                {!! Form::label('puntaje_pregunta', trans('pregunta.puntaje_pregunta'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('puntaje_pregunta', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('puntaje_pregunta', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
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
@endsection