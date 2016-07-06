@extends('app')

@section('htmlheader_title')
   Home
@endsection


@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-14 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">GESTOR MATERIA</div>

                <div class="panel-body">

<div class="container">

    <h1>Pregunta <a href="{{ url('/gestor_examenes/pregunta/'.$id_examen.'/create') }}" class="btn btn-primary btn-xs" title="Add New Preguntum"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> {{ trans('pregunta.nombre_pregunta') }} </th> 
                    <th> Respuesta </th><th> Tipo pregunta </th><th> {{ trans('pregunta.puntaje_pregunta') }} </th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($pregunta as $item)
                {{-- */$x++;/* --}}
                
                <tr>
                    @if( $item->tipo_pregunta_id == 1) 
                        <td>{{ $x }}</td>
                        <td>{{ $item->nombre_pregunta }}</td> <td>

                 {{-- */
                $id_simple = DB::table('simples')->where('pregunta_id', $item->id)->first();
                $tipo_pre=DB::table('tipo_preguntas')->where('id', $item->tipo_pregunta_id)->first();
                $tipo_pre = $tipo_pre->tipo;
                /* --}}
                        @if(!is_null($id_simple))

                        {{-- */ $id_simple = $id_simple->id; /* --}}

                     <!-- $id_simple ese es el id_ de la respuesta-->

                        <a href="{{ url('/gestor_examenes/simple/' . $id_simple . '/'.$id_examen.'/edit') }}" class="btn btn-primary btn-xs" title="Editar respuesta"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>

                        <a href="{{ url('/gestor_examenes/simple/'.$id_simple.'/'.$id_examen.'/show') }}" class="btn btn-success btn-xs" title="View Simple"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>

                        <a href="{{ url('/gestor_examenes/simple/' . $id_simple . '/'.$id_examen.'/delete') }}" class="btn btn-danger btn-xs" title="Delete Multiple" onclick="myfuncion()"><span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Multiple" /></a>
                    </td>
                        @else

                    <!-- $item-> id  ese es el id_ de la pregunta-->

                        <a href="{{ url('/gestor_examenes/simple/'.$item->id.'/'.$id_examen.'/create') }}" class="btn btn-primary btn-xs" title="Add New Preguntum"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>

                        @endif

                        </td> 
                        <td>{{$tipo_pre}}</td>
                        <td>{{ $item->puntaje_pregunta }}</td>
                       @endif

                    @if( $item->tipo_pregunta_id == 2) 
                        <td>{{ $x }}</td>
                        <td>{{ $item->nombre_pregunta }}</td> <td>
                  {{-- */
                $id_simple = DB::table('desarrollos')->where('pregunta_id', $item->id)->first();
                $tipo_pre=DB::table('tipo_preguntas')->where('id', $item->tipo_pregunta_id)->first();
                $tipo_pre = $tipo_pre->tipo;
                /* --}}
                        @if(!is_null($id_simple))
                        {{-- */ $id_simple = $id_simple->id; /* --}}

                       <!-- $id_simple ese es el id_ de la respuesta-->

                        <a href="{{ url('/gestor_examenes/desarrollo/' . $id_simple . '/'.$id_examen.'/edit') }}" class="btn btn-primary btn-xs" title="Editar respuesta"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>

                        <a href="{{ url('/gestor_examenes/desarrollo/'.$id_simple.'/'.$id_examen.'/show') }}" class="btn btn-success btn-xs" title="View Simple"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>

                        <a href="{{ url('/gestor_examenes/desarrollo/' . $id_simple . '/'.$id_examen.'/delete') }}" class="btn btn-danger btn-xs" title="Delete Multiple" onclick="myfuncion()"><span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Multiple" /></a>
                    </td>
                        @else

                    <!-- $item-> id  ese es el id_ de la pregunta-->

                        <a href="{{ url('/gestor_examenes/desarrollo/'.$item->id.'/'.$id_examen.'/create') }}" class="btn btn-primary btn-xs" title="Add New Preguntum"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                         @endif

                        </td>
                         <td>{{$tipo_pre}}</td> 
                        <td>{{ $item->puntaje_pregunta }}</td>
                       @endif

                    @if( $item->tipo_pregunta_id == 3) 
                        <td>{{ $x }}</td>
                        <td>{{ $item->nombre_pregunta }}</td> <td>
                           {{-- */
                $id_simple = DB::table('multiples')->where('pregunta_id', $item->id)->first();
                $tipo_pre=DB::table('tipo_preguntas')->where('id', $item->tipo_pregunta_id)->first();
                $tipo_pre = $tipo_pre->tipo;
                /* --}}
                       @if(!is_null($id_simple))
                       {{-- */ $id_simple = $id_simple->id; /* --}}

                        <a href="{{ url('/gestor_examenes/multiples/'.$item->id.'/index') }}" class="btn btn-success btn-xs" title="View Simple"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>

                        @else
                        <a href="{{ url('/gestor_examenes/multiples/'.$item->id.'/index') }}" class="btn btn-primary btn-xs" title="Add New Preguntum"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        @endif
                        </td> 
                         <td>{{$tipo_pre}}</td>
                        <td>{{ $item->puntaje_pregunta }}</td>
                       @endif

                    @if( $item->tipo_pregunta_id == 4)
                         <td>{{ $x }}</td>
                        <td>{{ $item->nombre_pregunta }}</td> <td>
                {{-- */
                $id_simple = DB::table('falsoverdaderos')->where('pregunta_id', $item->id)->first();
                $tipo_pre=DB::table('tipo_preguntas')->where('id', $item->tipo_pregunta_id)->first();
                $tipo_pre = $tipo_pre->tipo;
                /* --}}
                       @if(!is_null($id_simple))
                       {{-- */ $id_simple = $id_simple->id; /* --}}

                     
                     <!-- $id_simple ese es el id_ de la respuesta-->

                        <a href="{{ url('/gestor_examenes/falsoverdadero/' . $id_simple . '/'.$id_examen.'/edit') }}" class="btn btn-primary btn-xs" title="Editar respuesta"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>

                        <a href="{{ url('/gestor_examenes/falsoverdadero/'.$id_simple.'/'.$id_examen.'/show') }}" class="btn btn-success btn-xs" title="View Simple"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>

                        <a href="{{ url('/gestor_examenes/falsoverdadero/' . $id_simple . '/'.$id_examen.'/delete') }}" class="btn btn-danger btn-xs" title="Delete Multiple" onclick="myfuncion()"><span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Multiple" /></a>
                    </td>
                        @else

                    <!-- $item-> id  ese es el id_ de la pregunta-->

                        <a href="{{ url('/gestor_examenes/falsoverdadero/'.$item->id.'/'.$id_examen.'/create') }}" class="btn btn-primary btn-xs" title="Add New Preguntum"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                         @endif
                        </td> 
                         <td>{{$tipo_pre}}</td>
                        <td>{{ $item->puntaje_pregunta }}</td>
                       @endif

                    <td>
                        <a href="{{ url('/gestor_examenes/pregunta/'.$item->id.'/'.$id_examen.'/show') }}" class="btn btn-success btn-xs" title="View Preguntum"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>

                        <a href="{{ url('/gestor_examenes/pregunta/'.$item->id.'/'.$id_examen.'/edit') }}" class="btn btn-primary btn-xs" title="Edit Preguntum"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                     
                        <a href="{{ url('/gestor_examenes/pregunta/' . $item->id . '/'.$id_examen.'/delete') }}" class="btn btn-danger btn-xs" title="Delete Multiple" onclick="myfuncion()"><span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Multiple" /></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> </div>
    </div>

</div>
  </div>
            </div>
        </div>
    </div>
</div>
@endsection