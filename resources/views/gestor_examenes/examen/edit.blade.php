  @extends('app')

@section('htmlheader_title')
   CURSOS
@endsection


@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-14 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">GESTOR DE EXAMENES</div>
                <div class="panel-body">
<div class="container">

    <h1>Edit Examan {{ $examan->id }}</h1>

    {!! Form::model($examan, [
        'method' => 'PATCH',
        'url' => ['/gestor_examenes/examen', $examan->id],
        'class' => 'form-horizontal'
    ]) !!}

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
            <div class="form-group {{ $errors->has('puntaje_total') ? 'has-error' : ''}}">
                {!! Form::label('puntaje_total', trans('examen.puntaje_total'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('puntaje_total', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('puntaje_total', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


             <div class="form-group {{ $errors->has('id_curso') ? 'has-error' : ''}}">
                
                <div class="col-sm-6">
                    {!! Form::hidden('id_curso',$id_curso, ['class' => 'form-control' , 'required' => 'required']) !!}
                    {!! $errors->first('id_curso', '<p class="help-block">:message</p>') !!}
                </div>
                </div>







    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
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