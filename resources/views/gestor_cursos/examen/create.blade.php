@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Create New Examan</h1>
    <hr/>

    {!! Form::open(['url' => '/gestor_cursos/examen', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('nombre_examen') ? 'has-error' : ''}}">
                {!! Form::label('nombre_examen', trans('examen.nombre_examen'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nombre_examen', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('nombre_examen', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('estado_examen') ? 'has-error' : ''}}">
                {!! Form::label('estado_examen', trans('examen.estado_examen'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                                <div class="checkbox">
                <label>{!! Form::radio('estado_examen', '1') !!} Yes</label>
            </div>
            <div class="checkbox">
                <label>{!! Form::radio('estado_examen', '0', true) !!} No</label>
            </div>
                    {!! $errors->first('estado_examen', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('fecha_examen') ? 'has-error' : ''}}">
                {!! Form::label('fecha_examen', trans('examen.fecha_examen'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('fecha_examen', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('fecha_examen', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('puntaje_totalm') ? 'has-error' : ''}}">
                {!! Form::label('puntaje_totalm', trans('examen.puntaje_totalm'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('puntaje_totalm', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('puntaje_totalm', '<p class="help-block">:message</p>') !!}
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