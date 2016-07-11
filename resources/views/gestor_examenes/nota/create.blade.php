@extends('app')

@section('htmlheader_title')
   Home
@endsection


@section('main-content')
<div class="container">
    <div class="row">
    <!--Comienza path de contenido del curso desde docente.
            -->
              <div class="col-md-14 col-md-offset-0 borderpath" style="width: 34%;margin-left: 0%;">
                    <ol class="breadcrumb">
                    <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i>Gestor Materias</a></li>
                    <li><a href="{{ url('/admin/curso_dicta') }}"><i class="fa fa-dashboard"></i>Materias</a></li>
                    <li><a href="#"></i>Contenido del Curso</a></li>
                    </ol>
              </div>
              <!--Termina path de las Listas de contenido del curso desde docente.
           -->
        <div class="col-md-14 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">GESTOR MATERIA</div>

                <div class="panel-body">
<div class="container">
<!--Comienza path de Enviar exámenes.
    -->
    <div class="col-md-14 col-md-offset-0 borderpath" style="width: 33%;margin-left: 0%;">
                    <ol class="breadcrumb">
                    <li><a href="{{ url('admin/curso_dicta/'.$id_curso.'/vista_contenido_curso') }}"><i class="fa fa-dashboard"></i>Principal</a></li>
                    <li><a href="{{ url('gestor_examenes/'.$id_curso.'/examen_envio') }}"><i class="fa fa-dashboard"></i>Exámenes a Enviar</a></li>
                    <li><a href="#"></i>Enviar Examen</a></li>
                    </ol>
        </div>
    <!--Termina path de de Enviar exámenes.
    -->
    <h1>Enviar Examen</h1>
    <hr/>

    {!! Form::open(['url' => '/gestor_examenes/nota', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('numero_preguntas') ? 'has-error' : ''}}">
                {!! Form::label('numero_preguntas', trans('nota.numero_preguntas'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('numero_preguntas', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('numero_preguntas', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('duracion') ? 'has-error' : ''}}">
                {!! Form::label('duracion', 'Duracion del examen', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('duracion', array(5=>'5 minutos', 10=>'10 minutos', 15=>'15 minutos', 20=>'20 minutos', 25=>'25 minutos', 30=>'30 minutos'), null, ['class' => 'form-control'])!!}
                    {!! $errors->first('duracion', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <div class="form-group {{ $errors->has('fecha_inicio') ? 'has-error' : ''}}">
                {!! Form::label('fecha_inicio', 'Fecha y hora Inicio', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::input('datetime-local', 'fecha_inicio', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('fecha_inicio', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('fecha_fin') ? 'has-error' : ''}}">
                {!! Form::label('fecha_fin', 'Fecha y hora Fin', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::input('datetime-local', 'fecha_fin', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('fecha_fin', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
             <div class="form-group {{ $errors->has('puntaje_total') ? 'has-error' : ''}}">
                {!! Form::label('puntaje_total', 'Puntaje total', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                {!! Form::label('Nota', '100', ['class' => 'col-sm-3 control-label']) !!}
                </div>
            </div>

             <div class="form-group {{ $errors->has('examen_id') ? 'has-error' : ''}}">
                
                <div class="col-sm-6">
                    {!! Form::hidden('examen_id',$id_examen, ['class' => 'form-control' , 'required' => 'required']) !!}
                    {!! $errors->first('examen_id', '<p class="help-block">:message</p>') !!}
                </div>
                </div>

                   <div class="form-group {{ $errors->has('curso_id') ? 'has-error' : ''}}">
                
                <div class="col-sm-6">
                    {!! Form::hidden('curso_id',$id_curso, ['class' => 'form-control' , 'required' => 'required']) !!}
                    {!! $errors->first('curso_id', '<p class="help-block">:message</p>') !!}
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
      </div>
            </div>
        </div>
    </div>
</div>
@endsection