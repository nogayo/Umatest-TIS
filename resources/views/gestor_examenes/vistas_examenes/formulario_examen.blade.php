@extends('app')

@section('htmlheader_title')
   Home
@endsection


@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-14 col-md-offset-0">
            <div class="panel panel-default">

                <div class="panel-body">
<div class="container">
   <h1 style="text-align: center;">{{$nombre_examen}}</h1>
    <h2 style="text-align: center;">{{$fecha_examen}}</h2>
    <h2 style="text-align: center;">{{$nombre_categoria}}</h2>

    {!! Form::open(['url' => 'darexamen/formulario_desarrollo', 'class' => 'form-horizontal']) !!}

      @for ($i = 0; $i < count($content_nom_preguntas); $i++)
      
         @if()

         @endif
            
      @endfor


                <div class="form-group {{ $errors->has('numero_pregunta') ? 'has-error' : ''}}">
                {!! Form::label('numero_pregunta','¿ NOMBRE DE LA PREGUNTA ?', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('numero_pregunta', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('numero_pregunta', '<p class="help-block">:message</p>') !!}
                </div>
                </div>
                <div class="form-group {{ $errors->has('respuesta') ? 'has-error' : ''}}">
                {!! Form::label('respuesta', '¿ El mundo gira ?', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                                <div class="checkbox">
                <label>{!! Form::radio('respuesta', '1') !!} VERDADERO</label>
            </div>
            <div class="checkbox">
                <label>{!! Form::radio('respuesta', '0', true) !!} FALSO</label>
            </div>
                    {!! $errors->first('respuesta', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <div class="form-group {{ $errors->has('opcionA') ? 'has-error' : ''}}">
                {!! Form::label('opcionA', '¿ El mundo gira ?', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                                <div class="checkbox">
                   <label>{!! Form::checkbox('opcionA', '1', true) !!} Vaa</label>
                </div>
                    {!! $errors->first('opcionA', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <div class="form-group {{ $errors->has('opcionB') ? 'has-error' : ''}}">
                {!! Form::label('opcionB', '¿ El mundo gira ?', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                                <div class="checkbox">
                   <label>{!! Form::checkbox('opcionB', '2', false) !!} Vaa</label>
                </div>
                    {!! $errors->first('opcionB', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Terminar_examen', ['class' => 'btn btn-primary form-control']) !!}
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