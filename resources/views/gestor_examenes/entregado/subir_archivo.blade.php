  @extends('app')

@section('htmlheader_title')
   CURSOS
@endsection
@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-14 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">GESTOR DE TAREAS</div>
                  <div class="panel-body">
<div class="container">

    <h1>Entregando tarea</h1>

       {!! Form::open(['url' => '/gestor_examenes/{id_curso}/archivo/{id}/upload', 'class' => 'form-horizontal','method' => 'post', 'enctype'=>'multipart/form-data']) !!}

 
            <div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
                {!! Form::label('descripcion', trans('tarea.descripcion'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('descripcion', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

  

            <div class="form-group {{ $errors->has('id_curso') ? 'has-error' : ''}}">
                
                <div class="col-sm-6">
                    {!! Form::hidden('id_curso',$id_curso, ['class' => 'form-control' , 'required' => 'required']) !!}
                    {!! $errors->first('id_curso', '<p class="help-block">:message</p>') !!}
                </div>
                </div>


             <div class="form-group {{ $errors->has('id') ? 'has-error' : ''}}">
                
                <div class="col-sm-6">
                    {!! Form::hidden('id',$id, ['class' => 'form-control' , 'required' => 'required']) !!}
                    {!! $errors->first('id', '<p class="help-block">:message</p>') !!}
                </div>
                </div>

 <div class="form-group {{ $errors->has('subir_archivo') ? 'has-error' : ''}}">
                {!! Form::label('Subir Archivo','Subir archivo', ['class' => 'col-sm-3 control-label']) !!}
          <div class="col-sm-6">
          {!! Form::file('archivo') !!}

             <div class="form-group {{ $errors->has('id_curso') ? 'has-error' : ''}}">
                
                <div class="col-sm-6">
                  
                </div>
                </div>

          {!! Form::submit('Entregar') !!}

          {!! Form::close() !!}
                </div>
                </div>

  

</div>
    </div>
            </div>
        </div>
    </div>
</div>
@endsection