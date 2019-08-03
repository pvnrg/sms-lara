@extends('layouts.backend')

@section('title','Permissions')


@section('pageTitle','Permissions')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">All {{ ucfirst(Route::currentRouteName()) }} List</h3>
                    @if(Auth::user()->can('access.user.create'))
                        <a href="{{  url('/admin/permissions/create') }}" class="btn btn-success btn-sm pull-right" title="Add New Permission">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                    @endif
                </div>
<div class="box-body">
                    <table class="table table-bordered">

                        @foreach($permissions as $item)

                            <th colspan="3">{{$item->label}} [ <i class="text-success">{{$item->name}}</i> ]
                                <div class="roles" style="float: right;">
                                    @if($item->roles)
                                        @foreach($item->roles as $k=>$role)
                                            @if($role->name!="SU") <a href="{{url('admin/roles')}}/{{$role->id}}" title="{{$role->label}}">{{$role->name}}</a> @if($item->roles->count() !=$k+1)| @endif @endif
                                        @endforeach
                                    @endif
                                </div>
                            </th>

                            <tr>
                                <td>
                                    <a href="{{ url('/admin/permissions/' . $item->id) }}" title="View Permission"
                                       class=" btn btn-info btn-xs">
                                        <i class="fa fa-eye"
                                           aria-hidden="true"></i>

                                    </a>

                                    @if(Auth::user()->can('access.permission.edit'))
                                        <a href="{{ url('/admin/permissions/' . $item->id . '/edit') }}"
                                           class="btn btn-primary btn-xs"
                                           title="Edit Permission">
                                            <i class="fa fa-pencil-square-o"
                                               aria-hidden="true"></i>

                                        </a>
                                    @endif


                                    <p>
                                        {{$item->description or ''}}
                                    </p>
                                </td>

                                <td>

                                    <table class="table table-bordered">
                                        <th colspan="3">Child Permissions</th>

                                        @if($item->child)
                                            @foreach($item->child as $per)
                                                <tr>

                                                    <td class="col-md-5">
                                                        {{$per->label}} [ <i class="text-success">{{$per->name}}</i> ]
                                                    </td>

                                                    <td>

                                                        <a href="{{ url('/admin/permissions/' . $per->id) }}"
                                                           class="btn btn-info btn-xs"
                                                           title="View Permission">
                                                            <i class="fa fa-eye"
                                                               aria-hidden="true"></i>
                                                            

                                                        </a>
                                                        @if(Auth::user()->can('access.permission.edit'))

                                                            <a href="{{ url('/admin/permissions/' . $per->id . '/edit') }}"
                                                               class="btn btn-primary btn-xs"
                                                               title="Edit Permission">
                                                                <i
                                                                        class="fa fa-pencil-square-o"
                                                                        aria-hidden="true"></i> 
                                                            </a>
                                                        @endif

                                                        @if(Auth::user()->can('access.permission.delete'))
                                                            {!! Form::open([
                                                                                                      'method' => 'DELETE',
                                                                                                      'url' => ['/admin/permissions', $per->id],
                                                                                                      'style' => 'display:inline'
                                                                                                  ]) !!}
                                                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete ', array(
                                                                    'type' => 'submit',
                                                                    'class' => 'btn btn-danger btn-xs',
                                                                    'title' => 'Delete Permission',
                                                                    'onclick'=>"return confirm('Confirm Delete?')"
                                                            )) !!}
                                                            {!! Form::close() !!}
                                                        @endif

                                                    </td>
                                                </tr>

                                            @endforeach
                                        @endif
                                    </table>
                                </td>

                            </tr>

                        @endforeach
                    </table>
					</div>
            </div>   
        </div>
    </div>

@stop


@section('contentxx')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Permissions</div>
                <div class="panel-body">
                    <a href="{{ url('/admin/permissions/create') }}" class="btn btn-success btn-sm"
                       title="Add New Permission">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>

                    <div id="test" class="tree">
                        <ul>
                            <li class="parent_li"><span title="Verkleinern">Test 1</span>
                                <ul>
                                    <li class="parent_li"><span title="Verkleinern">Test 1</span>
                                        <ul>
                                            <li class="parent_li"><span title="Verkleinern">Test 1</span>
                                                <ul>
                                                    <li class="parent_li"><span title="Verkleinern">Test 1</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 2</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 3</span>
                                                        <ul></ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="parent_li"><span title="Verkleinern">Test 2</span>
                                                <ul>
                                                    <li class="parent_li"><span title="Verkleinern">Test 1</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 2</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 3</span>
                                                        <ul></ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="parent_li"><span title="Verkleinern">Test 3</span>
                                                <ul>
                                                    <li class="parent_li"><span title="Verkleinern">Test 1</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 2</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 3</span>
                                                        <ul></ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="parent_li"><span title="Verkleinern">Test 2</span>
                                        <ul>
                                            <li class="parent_li"><span title="Verkleinern">Test 1</span>
                                                <ul>
                                                    <li class="parent_li"><span title="Verkleinern">Test 1</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 2</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 3</span>
                                                        <ul></ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="parent_li"><span title="Verkleinern">Test 2</span>
                                                <ul>
                                                    <li class="parent_li"><span title="Verkleinern">Test 1</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 2</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 3</span>
                                                        <ul></ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="parent_li"><span title="Verkleinern">Test 3</span>
                                                <ul>
                                                    <li class="parent_li"><span title="Verkleinern">Test 1</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 2</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 3</span>
                                                        <ul></ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="parent_li"><span title="Verkleinern">Test 3</span>
                                        <ul>
                                            <li class="parent_li"><span title="Verkleinern">Test 1</span>
                                                <ul>
                                                    <li class="parent_li"><span title="Verkleinern">Test 1</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 2</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 3</span>
                                                        <ul></ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="parent_li"><span title="Verkleinern">Test 2</span>
                                                <ul>
                                                    <li class="parent_li"><span title="Verkleinern">Test 1</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 2</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 3</span>
                                                        <ul></ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="parent_li"><span title="Verkleinern">Test 3</span>
                                                <ul>
                                                    <li class="parent_li"><span title="Verkleinern">Test 1</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 2</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 3</span>
                                                        <ul></ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="parent_li"><span title="Verkleinern">Test 2</span>
                                <ul>
                                    <li class="parent_li"><span title="Verkleinern">Test 1</span>
                                        <ul>
                                            <li class="parent_li"><span title="Verkleinern">Test 1</span>
                                                <ul>
                                                    <li class="parent_li"><span title="Verkleinern">Test 1</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 2</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 3</span>
                                                        <ul></ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="parent_li"><span title="Verkleinern">Test 2</span>
                                                <ul>
                                                    <li class="parent_li"><span title="Verkleinern">Test 1</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 2</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 3</span>
                                                        <ul></ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="parent_li"><span title="Verkleinern">Test 3</span>
                                                <ul>
                                                    <li class="parent_li"><span title="Verkleinern">Test 1</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 2</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 3</span>
                                                        <ul></ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="parent_li"><span title="Verkleinern">Test 2</span>
                                        <ul>
                                            <li class="parent_li"><span title="Verkleinern">Test 1</span>
                                                <ul>
                                                    <li class="parent_li"><span title="Verkleinern">Test 1</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 2</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 3</span>
                                                        <ul></ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="parent_li"><span title="Verkleinern">Test 2</span>
                                                <ul>
                                                    <li class="parent_li"><span title="Verkleinern">Test 1</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 2</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 3</span>
                                                        <ul></ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="parent_li"><span title="Verkleinern">Test 3</span>
                                                <ul>
                                                    <li class="parent_li"><span title="Verkleinern">Test 1</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 2</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 3</span>
                                                        <ul></ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="parent_li"><span title="Verkleinern">Test 3</span>
                                        <ul>
                                            <li class="parent_li"><span title="Verkleinern">Test 1</span>
                                                <ul>
                                                    <li class="parent_li"><span title="Verkleinern">Test 1</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 2</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 3</span>
                                                        <ul></ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="parent_li"><span title="Verkleinern">Test 2</span>
                                                <ul>
                                                    <li class="parent_li"><span title="Verkleinern">Test 1</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 2</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 3</span>
                                                        <ul></ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="parent_li"><span title="Verkleinern">Test 3</span>
                                                <ul>
                                                    <li class="parent_li"><span title="Verkleinern">Test 1</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 2</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 3</span>
                                                        <ul></ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="parent_li"><span title="Verkleinern">Test 3</span>
                                <ul>
                                    <li class="parent_li"><span title="Verkleinern">Test 1</span>
                                        <ul>
                                            <li class="parent_li"><span title="Verkleinern">Test 1</span>
                                                <ul>
                                                    <li class="parent_li"><span title="Verkleinern">Test 1</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 2</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 3</span>
                                                        <ul></ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="parent_li"><span title="Verkleinern">Test 2</span>
                                                <ul>
                                                    <li class="parent_li"><span title="Verkleinern">Test 1</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 2</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 3</span>
                                                        <ul></ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="parent_li"><span title="Verkleinern">Test 3</span>
                                                <ul>
                                                    <li class="parent_li"><span title="Verkleinern">Test 1</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 2</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 3</span>
                                                        <ul></ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="parent_li"><span title="Verkleinern">Test 2</span>
                                        <ul>
                                            <li class="parent_li"><span title="Verkleinern">Test 1</span>
                                                <ul>
                                                    <li class="parent_li"><span title="Verkleinern">Test 1</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 2</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 3</span>
                                                        <ul></ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="parent_li"><span title="Verkleinern">Test 2</span>
                                                <ul>
                                                    <li class="parent_li"><span title="Verkleinern">Test 1</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 2</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 3</span>
                                                        <ul></ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="parent_li"><span title="Verkleinern">Test 3</span>
                                                <ul>
                                                    <li class="parent_li"><span title="Verkleinern">Test 1</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 2</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 3</span>
                                                        <ul></ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="parent_li"><span title="Verkleinern">Test 3</span>
                                        <ul>
                                            <li class="parent_li"><span title="Verkleinern">Test 1</span>
                                                <ul>
                                                    <li class="parent_li"><span title="Verkleinern">Test 1</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 2</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 3</span>
                                                        <ul></ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="parent_li"><span title="Verkleinern">Test 2</span>
                                                <ul>
                                                    <li class="parent_li"><span title="Verkleinern">Test 1</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 2</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 3</span>
                                                        <ul></ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="parent_li"><span title="Verkleinern">Test 3</span>
                                                <ul>
                                                    <li class="parent_li"><span title="Verkleinern">Test 1</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 2</span>
                                                        <ul></ul>
                                                    </li>
                                                    <li class="parent_li"><span title="Verkleinern">Test 3</span>
                                                        <ul></ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>


                    {!! Form::open(['method' => 'GET', 'url' => '/admin/permissions', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" placeholder="Search...">
                        <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                    </div>
                    {!! Form::close() !!}

                    <br/>
                    <br/>


                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Permission Name</th>
                                <th>Label</th>
                                <th>Child Permissions</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($permissions as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td class="col-md-2"><a
                                                href="{{ url('/admin/permissions', $item->id) }}">{{ $item->name }}</a>
                                    </td>
                                    <td>{{ $item->label }}</td>

                                    <td>
                                        <ul>
                                            @foreach($item->child as $i)

                                                <li>{{$i->name}} ({{$i->label}})</li>

                                            @endforeach
                                        </ul>

                                    </td>

                                    <td>
                                        <a href="{{ url('/admin/permissions/' . $item->id) }}" title="View Permission">
                                            <button class="btn btn-info btn-xs"><i class="fa fa-eye"
                                                                                   aria-hidden="true"></i> 
                                            </button>
                                        </a>
                                        <a href="{{ url('/admin/permissions/' . $item->id . '/edit') }}"
                                           title="Edit Permission">
                                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o"
                                                                                      aria-hidden="true"></i> 
                                            </button>
                                        </a>
                                        {!! Form::open([
                                            'method' => 'DELETE',
                                            'url' => ['/admin/permissions', $item->id],
                                            'style' => 'display:inline'
                                        ]) !!}
                                        {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                'type' => 'submit',
                                                'class' => 'btn btn-danger btn-xs',
                                                'title' => 'Delete Permission',
                                                'onclick'=>'return confirm("Confirm delete?")'
                                        )) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{--<div class="pagination"> {!! $permissions->appends(['search' => Request::get('search')])->render() !!} </div>--}}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
