@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Create New Desarrollo</h1>
    <hr/>

    {!! Form::open(['url' => '/gestor_cursos/desarrollo', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('respuesta') ? 'has-error' : ''}}">
                {!! Form::label('respuesta', trans('desarrollo.respuesta'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('respuesta', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('respuesta', '<p class="help-block">:message</p>') !!}
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
@endsection