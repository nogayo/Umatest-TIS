
@extends('app')

@section('htmlheader_title')
   Home
@endsection

@section('main-content')
<div class="container">
    <div class="row">
    <!--Comienza path de Reseña Histórica
    -->
    <div class="col-md-14 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Reseña histórica</a></li>
                    </ol>
                </div>
            </div>
        </div>
    <!--Termina path de Reseña Histórica
    -->
        <div class="col-md-14 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Reseña histórica </h4></div>
                <div class="panel-body">

        <div class="container">           
             <div class="content">
                      
                  <!--div style="height:200px; width:200px; float: left;">
                  <--!img src="{{asset('/img/img_panelPrincipal/bienvenida.png')}}" style="height:200px; width:200px;  "/>  
                  </div-->
                  <div style="margin-left: 50px;margin-right: 12%;">
                  <!--h1></h1-->
                  <br><p>La carrera de Licenciatura en Ingeniería de Sistemas entró en funcionamiento el año 
                  1997 a través de la Resolución Rectoral R.R. N° 634/97 del 13 de agosto de 1997 y de la 
                  Resolución de Consejo Universitario N° 27/99 del 13 de Mayo de 1999 con la perspectiva de 
                  formar profesionales calificados en el área de Ciencias de la Computación.</p>
                    </div>
      
            </div>

  		</div>
			</div>
		</div>
	</div>
</div>
@endsection