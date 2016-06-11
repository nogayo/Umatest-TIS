@extends('app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-14 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Home</div>

                <div class="panel-body">




<div class="container">

    <h1>User {{ $user->id }}</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID.</th><td>{{ $user->id }}</td>
                </tr>
                <tr><th> {{ trans('users.name') }} </th><td> {{ $user->name }} </td></tr><tr><th> {{ trans('users.apellido') }} </th><td> {{ $user->apellido }} </td></tr><tr><th> {{ trans('users.direccion') }} </th><td> {{ $user->direccion }} </td></tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">
                        <a href="{{ url('admin/users/' . $user->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit User"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/users', $user->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete User',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>

</div>


            </div>
            </div>
        </div>
    </div>
</div>
@endsection