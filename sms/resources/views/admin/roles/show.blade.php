@extends('layouts.backend')


@section('title','Show Role')

@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Role # {{$role->name}}</div>
                <div class="panel-body">

                    <a href="{{ url('/admin/roles') }}" title="Back">
                        <button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                        </button>
                    </a>

                    @if($role->id != 0)
                        @if(Auth::user()->can('access.role.edit'))
                            <a href="{{ url('/admin/roles/' . $role->id . '/edit') }}" title="Edit Role">
                                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o"
                                                                          aria-hidden="true"></i>
                                   Edit
                                </button>
                            </a>
                        @endif


                       

                            @if(Auth::user()->can('access.role.delete'))
                                {!! Form::open([
                                'method' => 'DELETE',
                                'url' => ['/admin/roles', $role->id],
                                'style' => 'display:inline'
                            ]) !!}
                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                        'type' => 'submit',
                                        'class' => 'btn btn-danger btn-xs',
                                        'title' => 'Delete Role',
                                        'onclick'=>"return confirm('Cofirm Delete?')"
                                ))!!}
                                {!! Form::close() !!}
                            @endif
                        
                    @endif


                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <tbody>

                            <tr>
                                <td>Id</td>
                                <td>{{ $role->id }}</td>
                            </tr>
                            <tr>

                                <td>Name</td>
                                <td> {{ $role->name }} </td>
                            </tr>
                            <tr>

                                <td>Label</td>
                                <td> {{ $role->label }} </td>
                            </tr>
                            
                            <tr >

                             
                                <td>Permissions</td>
                                <td>
                                    @if($role->main_permission()->count() > 0)

                                        <ul>
                                            @foreach($role->main_permission as $p)
                                                <li>{{$p->label}}</li>
                                                <ul>
                                                    @foreach($p->child as $c)
                                                        <li>{{$c->label}}</li>
                                                    @endforeach
                                                </ul>

                                            @endforeach
                                        </ul>
                                    @else
                                        No permissions
                                    @endif

                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection