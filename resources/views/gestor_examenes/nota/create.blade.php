@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Create New Notum</h1>
    <hr/>

    {!! Form::open(['url' => '/gestor_examenes/nota', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('calificacion') ? 'has-error' : ''}}">
                {!! Form::label('calificacion', trans('nota.calificacion'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('calificacion', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('calificacion', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('fecha') ? 'has-error' : ''}}">
                {!! Form::label('fecha', trans('nota.fecha'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('fecha', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('fecha', '<p class="help-block">:message</p>') !!}
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