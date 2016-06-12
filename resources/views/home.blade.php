@extends('app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">

					 <div class="container">
           
           		  <div class="content">
                      

                    <div style="height:200px; width:200px; float: left;">
                    <img src="{{asset('/img/img_panelPrincipal/bienvenida.png')}}" style="height:200px; width:200px;  "/>  
                    </div>
                     <div style="margin-left: 250px;">
                     <h1>Bienvenidos a UmaTest </h1><br><p>UmaTest le ofrece una plataforma mas segura en eduación en linea para la interaccion entre  docentes y estudiantes de la Universidad Mayor de San Simon. La información que se presenta esta destinada a las Autoridades docentes, Estudiantes, y Usuarios en General de las distintas entidades Universitarias. El sistema incluye Cursos, Planillas de Notas,foros.</p>
                    </div>
      
           			 </div>

  		</div>


				</div>
			</div>
		</div>
	</div>
</div>
@endsection
