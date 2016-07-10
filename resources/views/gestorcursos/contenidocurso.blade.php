  @extends('app')

@section('htmlheader_title')
   CURSOS
@endsection


@section('main-content')

<div class="container">

    <div class="row">
        <!--Comienza path de las Listas de todos los docentes.
    -->
    <div class="col-md-14 col-md-offset-0 borderpath" style="width: 31%;margin-left: 0%;">
                    <ol class="breadcrumb">
                    <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i>Gestor Materias</a></li>
                    <li><a href="{{ url('/admin/curso_dicta') }}"><i class="fa fa-dashboard"></i>Materias</a></li>
                    <li><a href="#"></i>Contenido del Curso</a></li>
                    </ol>
        </div>
    <!--Termina path de las Listas de todos los docentes.
    -->

        <div class="col-md-14 col-md-offset-0">
        
            <div class="panel panel-default">
                <div class="panel-heading">GESTOR DE MATERIAS</div>

                <div class="panel-body">
      <!-- Main content -->
  
      <div class="row">
        <div class="col-md-3">
         <!-- <a href="compose.html" class="btn btn-primary btn-block margin-bottom">Compose</a>
          -->
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Materias</h3>

             <div class="box-tools">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
             
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                   {{-- */$id_user=Auth::id();   
             /* --}}
             {{-- */$id_rol=DB::table('role_user')->where('user_id', $id_user)->first();
                   $id_rol=$id_rol->role_id;    
             /* --}}
             {{-- */$name_rol=DB::table('roles')->where('id', $id_rol)->first();
                    $name_rol=$name_rol->nombre_rol;
             /* --}}

                <li><a href="#"><i class="fa fa-file-text-o"></i> Descripcion de la Materia </a></li>
                <li><a href="#"><i class="fa fa-file-text-o"></i> Documentos y Enlaces </a></li>
               
               <li class="dropdown">
                 
                  @if($name_rol=='docente') 
                   <a href="#" class="fa fa-file-text-o dropdown-toggle " data-toggle="dropdown"> Examenes<span class="caret"></span></a>

                  <ul class="dropdown-menu" role="menu">
                    <li><a href="{{ url('gestor_examenes/'.$id_curso.'/examen') }}" >Mis Examenes</li>
                    <li><a href="{{ url('gestor_examenes/examen/'.$id_curso.'/create') }}" >Crear Examen</a></li>
                    <li><a href="{{ url('gestor_examenes/'.$id_curso.'/examen_envio') }} ">Enviar Examen</a></li>
                  </ul>

                  <li><a href="{{url('gestor_examenes/examen/'.$id_curso.'/listar_estudiantes')}}"><i class="fa fa-file-text-o"></i> Mis Estudiantes </a></li>

                  @elseif($name_rol=='estudiante')

                   <a href="#" class="fa fa-file-text-o dropdown-toggle " data-toggle="dropdown"> Examenes<span class="caret"></span></a>

                   <ul class="dropdown-menu" role="menu">
                    <li><a href="{{ url('gestor_examenes/'.$id_curso.'/examen_envio') }}" >Mis Examenes</li>
                  </ul>

                  @else
              
                     <a href="#" class="fa fa-file-text-o dropdown-toggle " data-toggle="dropdown"> Examenes Docente<span class="caret"></span></a>

                  <ul class="dropdown-menu" role="menu">
                    <li><a href="{{ url('gestor_examenes/'.$id_curso.'/examen') }}" >Mis Examenes</li>
                    <li><a href="{{ url('gestor_examenes/examen/'.$id_curso.'/create') }}" >Crear Examen</a></li>
                    <li><a href="{{ url('gestor_examenes/'.$id_curso.'/examen_envio') }} ">Enviar Examen</a></li>
                  </ul>

                  
                     <a href="#" class="fa fa-file-text-o dropdown-toggle " data-toggle="dropdown"> Examenes Estudiante<span class="caret"></span></a>

                   <ul class="dropdown-menu" role="menu">
                    <li><a href="{{ url('gestor_examenes/'.$id_curso.'/examen_envio') }}" >Mis Examenes</li>
                  </ul>

                  @endif
              </li>
   
                <li><a href="{{ url('gestor_examenes/'.$id_curso.'/examen/listar/tarea') }}"><i class="fa fa-filter"></i> Mis Tareas </a></li>
             
                @if($name_rol!='estudiante') 
                <li><a href="{{ url('gestor_examenes/'.$id_curso.'/examen/crear/tarea') }}"><i class="fa fa-filter"></i> Crear Tarea </a></li>
                @endif
                <li><a href="#"><i class="fa fa-envelope-o"></i> Foros </a></li>

              </ul>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
 
      </div>
               
    


       </div>
            </div>
        </div>
    </div>
</div>
@endsection