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

    {!! Form::open(['url' => 'darexamen/formulario_examen/calcular_nota', 'class' => 'form-horizontal']) !!}
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
          {{-- */ 
           $p=implode(",",$content_puntaje_preguntas);
         
           $cre=implode(",",$formulario_nombres);

          

           function convert_multi_array($vector) {
              
              $concatenado="";

              for($i=0; $i < count($vector); $i++){
                
                 if(is_bool($vector[$i])){

                  $converted_res = ($vector[$i]) ? 'true' : 'false';
                  $concatenado= $concatenado . $converted_res;

                 }else{
                 $tamano=count($vector[$i]);
                 }
                 

                 if($tamano > 1){
            
                    $otro_vector=$vector[$i];

                         $multiple_array=implode(",",$otro_vector);
                      
                      //$concatenado=$concatenado.'/';
                      $concatenado.=$multiple_array;
                      //$concatenado=$concatenado."/";
                 
                  
                   
                 }else{
                   $concatenado=$concatenado."".$vector[$i];
                   //$concatenado=$concatenado.",";
                   
                 }
              }
              return $concatenado;
           }

             $cr=convert_multi_array($content_respuestas);
          /* --}}

           <div class="form-group {{ $errors->has('con_puntaje') ? 'has-error' : ''}}">
                
                <div class="col-sm-6">
                    {!! Form::hidden('con_puntaje',$p, ['class' => 'form-control' , 'required' => 'required']) !!}
                    {!! $errors->first('con_puntaje', '<p class="help-block">:message</p>') !!}
                </div>
           </div>

           <div class="form-group {{ $errors->has('con_res_correctas') ? 'has-error' : ''}}">
                
                <div class="col-sm-6">
                    {!! Form::hidden('con_res_correctas',$cr, ['class' => 'form-control' , 'required' => 'required']) !!}
                    {!! $errors->first('con_res_correctas', '<p class="help-block">:message</p>') !!}
                </div>
           </div>

            <div class="form-group {{ $errors->has('con_res_reales') ? 'has-error' : ''}}">
                
                <div class="col-sm-6">
                    {!! Form::hidden('con_res_reales',$cre, ['class' => 'form-control' , 'required' => 'required']) !!}
                    {!! $errors->first('con_res_reales', '<p class="help-block">:message</p>') !!}
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