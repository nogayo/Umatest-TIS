@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Edit Curso_inscrito {{ $curso_inscrito->id }}</h1>

    {!! Form::model($curso_inscrito, [
        'method' => 'PATCH',
        'url' => ['/admin/curso_inscrito', $curso_inscrito->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('fecha') ? 'has-error' : ''}}">
                {!! Form::label('fecha', trans('curso_inscrito.fecha'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('fecha', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('fecha', '<p class="help-block">:message</p>') !!}
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
@endsection