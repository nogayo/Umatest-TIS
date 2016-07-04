  @extends('app')

@section('htmlheader_title')
   CURSOS
@endsection


@section('main-content')
<div class="container">
    <div class="row">
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
                
                <li><a href="#"><i class="fa fa-file-text-o"></i> Descripcion de la Materia </a></li>
                <li><a href="#"><i class="fa fa-file-text-o"></i> Documentos y Enlaces </a></li>
                <li><a href="#"><i class="fa fa-file-text-o"></i> Examenes </a></li>
                <li><a href="{{ url('/gestor_cursos/examen/') }}"><i class="fa fa-file-text-o"></i>crear un nuevo Examen </a></li>
                <li><a href="#"><i class="fa fa-filter"></i> Tareas </a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> Foros </a></li>

              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- 
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Labels</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#"><i class="fa fa-circle-o text-red"></i> Important</a></li>
                <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> Promotions</a></li>
                <li><a href="#"><i class="fa fa-circle-o text-light-blue"></i> Social</a></li>
              </ul>
            </div>
            
          </div>

          -->
          <!-- /.box -->
        </div>
        <!-- /.col -->
        
        <!-- /.col -->
      </div>
      <!-- /.row -->
   
    <!-- /.content -->

       </div>
            </div>
        </div>
    </div>
</div>
@endsection