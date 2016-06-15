@extends('app')

@section('htmlheader_title')
   Home
@endsection


@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-14 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">CATEGORIAS</div>

                <div class="panel-body">
                 
                 <!--TABLA DE BOTONES-->
                 <div class="box-body pad table-responsive">
      
         
              {{-- */

              $vector_categoria=array();
              $vector_ids=array();
                 $name_categoria=DB::table('categorias')->get();
                     for($i=0; $i < count($name_categoria); $i++){
                        $vector_categoria[$i]=$name_categoria[$i]->nombre;
                        $vector_ids[$i]=$name_categoria[$i]->id;
                     }
             /* --}}

              <table class="table table-bordered text-center">
                <tr>
                  <th>Categoria</th>
                  <th>Cantidad de Cursos</th>
                </tr>
            {{-- */$contador=0; /* --}}
                 @foreach($vector_categoria as $item)
                  <tr>
                  <td>
                   <a href="{{ url('admin/curso',$vector_ids[$contador])}}">{{$item}}</a>
                  </td>
               {{-- */$contador++; /* --}}
                </tr>
               
                @endforeach
                  
                
              </table>
             
            </div>



               </div>
            </div>
        </div>
    </div>
</div>
@endsection