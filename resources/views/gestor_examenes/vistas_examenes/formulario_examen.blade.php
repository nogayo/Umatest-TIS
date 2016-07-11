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
     {{-- */   
      $formulario_nombres=array();
     /* --}}

      @for ($i = 0; $i < count($content_nom_preguntas); $i++)

         @if($ids_tipo_pregunta[$i]==1)

            <div class="form-group {{ $errors->has('numero_pregunta' . $i) ? 'has-error' : ''}}">
                {!! Form::label('numero_pregunta' . $i,$content_nom_preguntas[$i], ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('numero_pregunta' . $i, null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('numero_pregunta' . $i, '<p class="help-block">:message</p>') !!}
                </div>
            </div>
     {{-- */  $formulario_nombres[$i]='numero_pregunta' . $i; /* --}}
            
        @endif


         @if($ids_tipo_pregunta[$i]==2 )
           
          <div class="form-group {{ $errors->has('numero_pregunta' . $i) ? 'has-error' : ''}}">
                {!! Form::label('numero_pregunta' . $i,$content_nom_preguntas[$i], ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('numero_pregunta' . $i, null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('numero_pregunta' . $i, '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        {{-- */  $formulario_nombres[$i]='numero_pregunta' . $i; /* --}}
             
         @endif


         @if($ids_tipo_pregunta[$i]==3)

          {{-- */  $numero_de_respuestas=count($content_respuestas[$i]); 
                   $respuestas = $content_respuestas[$i];
          /* --}}
          @for ($j = 0; $j < $numero_de_respuestas; $j++)
            <div class="form-group {{ $errors->has('numero_pregunta' . $i) ? 'has-error' : ''}}">
                {!! Form::label('numero_pregunta' . $i,$content_nom_preguntas[$i] , ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    <div class="checkbox">
                        <label>{!! Form::checkbox('numero_pregunta' . $i, '0', false) !!} 
                        {{$respuestas[$j]}}</label>
                   </div>
                        {!! $errors->first('numero_pregunta' . $i, '<p class="help-block">:message</p>') !!}
                </div>
            </div>
          @endfor
            {{-- */  $formulario_nombres[$i]='numero_pregunta' . $i; /* --}}
         @endif


         @if($ids_tipo_pregunta[$i]==4)

           <div class="form-group {{ $errors->has('numero_pregunta' . $i) ? 'has-error' : ''}}">
                {!! Form::label('numero_pregunta' . $i, $content_nom_preguntas[$i], ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                   <div class="checkbox">
                     <label>{!! Form::radio('numero_pregunta' . $i, '1') !!} VERDADERO</label>
                   </div>
                   <div class="checkbox">
                    <label>{!! Form::radio('numero_pregunta' . $i, '0', true) !!} FALSO</label>
                   </div>
                    {!! $errors->first('numero_pregunta' . $i, '<p class="help-block">:message</p>') !!}
                </div>
            </div>

              {{-- */  $formulario_nombres[$i]='numero_pregunta' . $i; /* --}}
         @endif
            
      @endfor


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