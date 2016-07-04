<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">


   

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" >
            <li class="header">MENU DE CONTROL</li>
            <!-- Optionally, you can add icons to the links -->
              {{-- */$id_user=Auth::id();   
             /* --}}
             {{-- */$id_rol=DB::table('role_user')->where('user_id', $id_user)->first();
                   $id_rol=$id_rol->role_id;    
             /* --}}
             {{-- */$name_rol=DB::table('roles')->where('id', $id_rol)->first();
                    $name_rol=$name_rol->nombre_rol;
             /* --}}
               @if($name_rol=='docente') 
                  <!--DOCENTE GESTOR-->

            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Gestor Materia</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('admin/curso/create') }}">Crear Materia</a></li>
                    <li><a href="{{ url('admin/curso_dicta') }}">Mis Materias</a></li>
                </ul>
            </li>
               @elseif($name_rol=='estudiante')  
                <!--ESTUDIANTE GESTOR-->
         

            <li class="treeview ">
                <a href="#"><i class='fa fa-link'></i> <span>Gestor Materias</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
<<<<<<< HEAD
                    <li><a href="{{ url('admin/curso/index_todo/todo')}}">Mis Cursos</a></li>
                     <li><a href="{{ url('/todosloscursos/conBoton/carrera') }}">Inscribirse a un Curso</a></li>
                    <li><a href="{{ url('admin/curso/desinscribirse/borrarmostrar')}}">Desinscribirse de un Curso</a></li>
                    <li><a href="{{ url('/todosloscursos/sinBoton/carrera') }}">Todos los Cursos</a></li>
=======
                    <li><a href="{{ url('admin/curso/index_todo/todo')}}">Mis Materias</a></li>
                    <li><a href="{{ url('admin/curso_inscrito/create') }}">Inscribirse a una Materia</a></li>
                    <li><a href="{{ url('admin/curso/desinscribirse/borrarmostrar')}}">Desinscribirse de una Materia</a></li>
                    <li><a href="{{ url('/todosloscursos') }}">Todos las Materia</a></li>
>>>>>>> 0e814893eb6794033c2bd475b645651dbf74bc19
                    
                </ul>
            </li>
               @else
                   <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Gestor Usuarios</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('admin/users') }}">Estudiantes</a></li>
                    <li><a href="{{ url('admin/docente') }}">Docentes</a></li>
                    <li><a href="{{ url('admin/administrador') }}">Administrador</a></li>
                </ul>
                   </li>

                    <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Gestor Materias Docente</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('admin/curso/create') }}">Crear Materia</a></li>
                    <li><a href="{{ url('admin/curso_dicta') }}">Mis Materias</a></li>
                </ul>
                    </li>

                  <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Gestor Materias Estudiante</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
<<<<<<< HEAD
                    <li><a href="{{ url('admin/curso/index_todo/todo')}}">Mis Cursos</a></li>
                    <li><a href="{{ url('/todosloscursos/conBoton/carrera') }}">Inscribirse a un Curso</a></li>
                    <li><a href="{{ url('admin/curso/desinscribirse/borrarmostrar')}}">Desinscribirse de un Curso</a></li>
                    <li><a href="{{ url('/todosloscursos/sinBoton/carrera') }}">Todos los Cursos</a></li>
=======
                    <li><a href="{{ url('admin/curso/index_todo/todo')}}">Mis Materias</a></li>
                    <li><a href="{{ url('/todosloscursos') }}">Inscribirse a una Materia</a></li>
                    <li><a href="{{ url('admin/curso/desinscribirse/borrarmostrar')}}">Desinscribirse de una Materia</a></li>
                    <li><a href="{{ url('/todosloscursos') }}">Todas las Materias</a></li>
>>>>>>> 0e814893eb6794033c2bd475b645651dbf74bc19
                    
                </ul>
                 </li>
               @endif 
            
           
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
