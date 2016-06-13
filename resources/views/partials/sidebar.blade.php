<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">


   

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">MENU DE CONTROL</li>
            <!-- Optionally, you can add icons to the links -->
             <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Gestor Usuarios</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('admin/users') }}">Estudiantes</a></li>
                    <li><a href="{{ url('admin/docente') }}">Docentes</a></li>
                    <li><a href="{{ url('admin/administrador') }}">Administrador</a></li>
                </ul>
            </li>
            <li><a href="#"><i class='fa fa-link'></i> <span>Gestor Cursos </span></a></li>
           
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
