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

    <h1>Registro Envio</h1>
    <hr/>

    {!! Form::open(['url' => '/gestor_examenes/nota', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('numero_preguntas') ? 'has-error' : ''}}">
                {!! Form::label('numero_preguntas', 'Numero de Preguntas', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('numero_preguntas', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('numero_preguntas', '<p class="help-block">:message</p>') !!}
                </div>
                </div>

                <div class="form-group {{ $errors->has('duracion_examen') ? 'has-error' : ''}}">
                {!! Form::label('duracion_examen', 'Duracion del Examen', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('duracion_examen', array(5=>'5 minutos', 10=>'10 minutos', 15=>'15 minutos', 20=>'20 minutos', 25=>'25 minutos', 30=>'30 minutos'), null, ['class' => 'form-control'])!!}
                    {!! $errors->first('duracion_examen', '<p class="help-block">:message</p>') !!}
                </div>
               </div>

            <div class="form-group {{ $errors->has('fecha') ? 'has-error' : ''}}">
                {!! Form::label('fecha', 'Fecha limite', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('fecha', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('fecha', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <div class="form-group {{ $errors->has('puntaje_total') ? 'has-error' : ''}}">
                {!! Form::label('puntaje_total', 'Puntaje total', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                {!! Form::label('Nota', '100', ['class' => 'col-sm-3 control-label']) !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Enviar', ['class' => 'btn btn-primary form-control']) !!}
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