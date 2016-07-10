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

    <h1>DESARROLLO</h1>
    <hr/>

    {!! Form::open(['url' => 'darexamen/formulario_desarrollo', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('numero_pregunta') ? 'has-error' : ''}}">
                {!! Form::label('numero_pregunta','¿ NOMBRE DE LA PREGUNTA ?', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('numero_pregunta', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('numero_pregunta', '<p class="help-block">:message</p>') !!}
                </div>
                </div>

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Siguiente', ['class' => 'btn btn-primary form-control']) !!}
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