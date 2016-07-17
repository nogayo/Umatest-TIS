@extends('app')

@section('htmlheader_title')
   Home
@endsection


@section('main-content')
<div class="containerexamen">
    <div class="row">
        <div class="col-md-14 col-md-offset-0">
            <div class="hoja">

   <h1 style="text-align: center; font-family:arial; color:darkred;font-weight: 700; ">{{$nombre_examen}}</h1>
    <h2 style="text-align: center; font-family:arial;color:darkred;font-weight: 700; line-height:4px;">{{$fecha_examen}}</h2>
    <h2 style="text-align: center; font-family:arial;color:darkred;font-weight: 700; ">{{$nombre_categoria}}</h2>
    {!! Form::open(['url' => 'darexamen/formulario_examen/calcular_nota', 'class' => 'form-horizontal formexa', 'style' => 'margin-left: 15%;margin-top: 40px;font-size: 22px; width:100%;']) !!}
     {{-- */$formulario_nombres=array(); /* --}}

      @for ($i = 0; $i < count($content_nom_preguntas); $i++)
            
         @if($ids_tipo_pregunta[$i]==1)
    
            <div class="form-group {{ $errors->has('numero_pregunta' . $i) ? 'has-error' : ''}}">
                {!! Form::label('numero_pregunta'. $i,($i+1).'.- '.$content_nom_preguntas[$i], ['style' => 'float:left;line-height:40px;']) !!}
                <div class="col-sm-2">
                    {!! Form::text('numero_pregunta' . $i, null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('numero_pregunta' . $i, '<p class="help-block">:message</p>') !!}
                </div>  
            </div>
         {{-- */  $formulario_nombres[$i]='numero_pregunta' . $i; /* --}}
        @endif


         @if($ids_tipo_pregunta[$i]==2 )
           
          <div class="form-group {{ $errors->has('numero_pregunta' . $i) ? 'has-error' : ''}}">
          <div style="line-height:40px;"><label for="'numero_pregunta' . $i" style="width:auto;">{{($i+1)}}.- {{$content_nom_preguntas[$i]}}</label></div>
          
                
                <div class="col-sm-6">
                    {!! Form::text('numero_pregunta' . $i, null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('numero_pregunta' . $i, '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        {{-- */  $formulario_nombres[$i]='numero_pregunta' . $i; /* --}}
             <br/> <br/>
         @endif


         @if($ids_tipo_pregunta[$i]==3)
                   {{-- */  $numero_de_respuestas=count($content_respuestas[$i]); 
                   $respuestas = $content_respuestas[$i];
          /* --}}
          
            <div class="form-group {{ $errors->has('numero_pregunta' . $i) ? 'has-error' : ''}}">
            <div style="line-height:40px;"><label for="'numero_pregunta' . $i" style="width:auto;">{{($i+1)}}.- {{$content_nom_preguntas[$i]}}</label></div>
                <div class="col-sm-6" style="margin-left:10%">
                    <div class="checkbox">
                    <br/> <br/>

          @for ($j = 0; $j < $numero_de_respuestas; $j++)
                        <label>{!! Form::checkbox('numero_pregunta' . $i, $respuestas[$j], false) !!} 
                        {{$respuestas[$j]}}&nbsp &nbsp &nbsp &nbsp &nbsp </label>
          @endfor
                   </div>
                        {!! $errors->first('numero_pregunta' . $i, '<p class="help-block">:message</p>') !!}
                </div>
            </div>
          
            {{-- */  $formulario_nombres[$i]='numero_pregunta' . $i; /* --}}
            <br/> <br/>
         @endif


         @if($ids_tipo_pregunta[$i]==4)
         <br/> <br/>
           <div class="form-group {{ $errors->has('numero_pregunta' . $i) ? 'has-error' : ''}}">
           <div style="line-height:40px;"><label for="'numero_pregunta' . $i" style="width:auto;">{{($i+1)}}.- {{$content_nom_preguntas[$i]}}</label></div>
            
                <div class="col-sm-6" style="margin-left:10%">
                   <div class="checkbox">
                   <br/> <br/>
                     <label>{!! Form::radio('numero_pregunta' . $i, '1') !!} VERDADERO</label>
                   </div>
                   <div class="checkbox">
                    <label>{!! Form::radio('numero_pregunta' . $i, '0', true) !!} FALSO</label>
                   </div>
                    {!! $errors->first('numero_pregunta' . $i, '<p class="help-block">:message</p>') !!}
                </div>
            </div>

              {{-- */  $formulario_nombres[$i]='numero_pregunta' . $i; /* --}}
              <br/> <br/> 
         @endif
            
      @endfor
          {{-- */ 
           $puntaje=implode(",",$content_puntaje_preguntas);
         
           $respuestas_formularios=implode(",",$formulario_nombres);

           $respuestas_correctas=$cadena_m;

           $res_multiple_correcta=implode(",",$res_mul_correcta);
          /* --}}

           <div class="form-group {{ $errors->has('con_puntaje') ? 'has-error' : ''}}">
                
                <div class="col-sm-6">
                    {!! Form::hidden('con_puntaje',$puntaje, ['class' => 'form-control' , 'required' => 'required']) !!}
                    {!! $errors->first('con_puntaje', '<p class="help-block">:message</p>') !!}
                </div>
           </div>

           <div class="form-group {{ $errors->has('con_res_formularios') ? 'has-error' : ''}}">
                
                <div class="col-sm-6">
                    {!! Form::hidden('con_res_formularios',$respuestas_formularios, ['class' => 'form-control' , 'required' => 'required']) !!}
                    {!! $errors->first('con_res_formularios', '<p class="help-block">:message</p>') !!}
                </div>
           </div>

            <div class="form-group {{ $errors->has('con_res_correctas') ? 'has-error' : ''}}">
                
                <div class="col-sm-6">
                    {!! Form::hidden('con_res_correctas',$respuestas_correctas, ['class' => 'form-control' , 'required' => 'required']) !!}
                    {!! $errors->first('con_res_correctas', '<p class="help-block">:message</p>') !!}
                </div>
           </div>

           <div class="form-group {{ $errors->has('con_res_multiple') ? 'has-error' : ''}}">
                
                <div class="col-sm-6">
                    {!! Form::hidden('con_res_multiple',$res_multiple_correcta, ['class' => 'form-control' , 'required' => 'required']) !!}
                    {!! $errors->first('con_res_multiple', '<p class="help-block">:message</p>') !!}
                </div>
           </div>
                 <div class="form-group {{ $errors->has('id_nota') ? 'has-error' : ''}}">
                
                <div class="col-sm-6">
                    {!! Form::hidden('id_nota',$id_nota, ['class' => 'form-control' , 'required' => 'required']) !!}
                    {!! $errors->first('id_nota', '<p class="help-block">:message</p>') !!}
                </div>
           </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Terminar_examen', ['class' => 'btn btn-primary form-control']) !!}
            <br/> <br/>
            <br/> <br/>
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
@endsection
