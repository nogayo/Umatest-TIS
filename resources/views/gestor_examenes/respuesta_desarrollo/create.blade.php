@extends('app')

@section('htmlheader_title')
   Home
@endsection


@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-14 col-md-offset-0" style="padding-top:50px;">
            <div class="panel panel-default">
                <div class="panel-heading">GESTOR MATERIA</div>

                <div class="panel-body">
<div class="container">

      {{-- */$materia=DB::table('cursos')->where('id', $id_curso)->first();
                    $name_materia=$materia->nombre;
                   
             /* --}}
   
    <h3> Planilla <a href="#"></a></h2>
    <h4> Materia: {{ $name_materia }} <a href="#"></a></h4>
  
   
    {!! Form::open(['url' => '/gestor_examenes/respuesta_desarrollo', 'class' => 'form-horizontal']) !!}

   
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
               @if($mensaje_texto!="")
                <ul class="alert alert-danger"><li>{{ $mensaje_texto }}</li></ul>
                @endif
                <tr bgcolor="#81BEF7">
                    <th>S.No</th><th> Preguntas/Respuestas </th><th>Calificacion</th>
                </tr>
            </thead>
            <tbody>

    
            {{-- */
                   $x=0;  $i=0; $formulario_ids=array(); $formulario_calificaciones=array();
                   $formulario_puntaje=array();
            /* --}}
            @foreach($respuesta_desarrollos as $item)
                {{-- */$x++; /* --}}
            
            <tr bgcolor= "#81F7F3">
                    <td bgcolor= "#81F7F3">{{ $x }}</td>
                    <td bgcolor= "#81F7F3">{{ $item->nombre_pregunta }}</td>
                    <td bgcolor= "#81F7F3"> Puntaje de la pregunta: {{ $item->puntaje_pregunta }}</td>
                </tr>

                <tr bgcolor= "#CEECF5">
                    <td> Resp. {{ $x }}</td>
                    <td>{{ $item->respuesta }}</td>
                    <td>                     
              

               <div class="form-group {{ $errors->has('calificacion'. $item->id_resp) ? 'has-error' : ''}}">

               <div class="col-sm-6">
                    {!! Form::number('calificacion' .$item->id_resp, null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('calificacion' .$item->id_resp, '<p class="help-block">:message</p>') !!}
                </div>

            </div>

          {{-- */  $formulario_calificaciones[$i]='calificacion' . $item->id_resp; /* --}}
           {{-- */  $formulario_ids[$i]=$item->id_resp; 
                    $formulario_puntaje[$i]=$item->puntaje_pregunta;
           /* --}}
           
                  </td>

               </tr>

                {{-- */$i++;/* --}}
                @endforeach
                 {{-- */ 
                  $calificaciones_resp=implode(",",$formulario_calificaciones);
                  $calificaciones_ids=implode(",",$formulario_ids);
                  $puntaje_pre=implode(",",$formulario_puntaje);
                /* --}}

                 <div class="form-group {{ $errors->has('calificaciones_ins') ? 'has-error' : ''}}">
                
                <div class="col-sm-6">
                    {!! Form::hidden('calificaciones_ins',$calificaciones_resp, ['class' => 'form-control' , 'required' => 'required']) !!}
                    {!! $errors->first('calificaciones_ins', '<p class="help-block">:message</p>') !!}
                </div>
           </div>

            <div class="form-group {{ $errors->has('calificaciones_ids') ? 'has-error' : ''}}">
                
                <div class="col-sm-6">
                    {!! Form::hidden('calificaciones_ids',$calificaciones_ids, ['class' => 'form-control' , 'required' => 'required']) !!}
                    {!! $errors->first('calificaciones_ids', '<p class="help-block">:message</p>') !!}
                </div>
           </div>

             <div class="form-group {{ $errors->has('id_curso') ? 'has-error' : ''}}">
                
                <div class="col-sm-6">
                    {!! Form::hidden('id_curso',$id_curso, ['class' => 'form-control' , 'required' => 'required']) !!}
                    {!! $errors->first('id_curso', '<p class="help-block">:message</p>') !!}
                </div>
                </div>

               <div class="form-group {{ $errors->has('id_user') ? 'has-error' : ''}}">
                
                <div class="col-sm-6">
                    {!! Form::hidden('id_user',$id_user, ['class' => 'form-control' , 'required' => 'required']) !!}
                    {!! $errors->first('id_user', '<p class="help-block">:message</p>') !!}
                </div>
                </div>

                 <div class="form-group {{ $errors->has('id_examen') ? 'has-error' : ''}}">
                
                <div class="col-sm-6">
                    {!! Form::hidden('id_examen',$id_examen, ['class' => 'form-control' , 'required' => 'required']) !!}
                    {!! $errors->first('id_examen', '<p class="help-block">:message</p>') !!}
                </div>
                </div>

               <div class="form-group {{ $errors->has('ptj_pre') ? 'has-error' : ''}}">
                
                <div class="col-sm-6">
                    {!! Form::hidden('ptj_pre',$puntaje_pre, ['class' => 'form-control' , 'required' => 'required']) !!}
                    {!! $errors->first('ptj_pre', '<p class="help-block">:message</p>') !!}
                </div>
                </div>

        </tbody>

        </table>
       
        <div class="pagination">  </div>
    </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Actualizar Nota', ['class' => 'btn btn-primary form-control']) !!}
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
</div>
@endsection