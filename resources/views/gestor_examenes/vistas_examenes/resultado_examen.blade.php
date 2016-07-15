@extends('app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')
<div class="container">
	<div class="row">
     
		<div class="col-md-14 col-md-offset-0">
			<div class="panel panel-default">
				<div class="panel-heading">MI EXAMEN</div>

				<div class="panel-body">
					 <div class="container">
             <h1>Resultado de Examen:</h1>
             <p>Puntaje del examen: {{$puntaje_estudiante}}</p>
             <p>Numero de Respuestas Correctas: {{$numero_res_correctas}}</p>
             <p>Numero de Respuestas Incorrectas: {{$numero_res_fallidas}}</p>
             <a href="{{ url('/home') }}">-> Volver a menu principal</a>
  	    	</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection