@extends('layouts.backend')

@section('title','Fee Schedules')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">All {{ ucfirst(Route::currentRouteName()) }} List</h3>
                    @if(Auth::user()->can('access.fee_schedules.create'))
                        <a href="{{ url('/admin/fee_schedules/create') }}" class="btn btn-success btn-sm pull-right"
                            title="Add New Fee Schedule">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                    @endif
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th> 
                            <th>Fees</th>                               
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($fee_schedules as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td><a href="{{ url('/admin/fee_schedules', $item->id) }}">{{ $item->name }}</a></td>
                                    <td>{{ $item->fees }}</td>
                                    <td>
                                        <a href="{{ url('/admin/fee_schedules/' . $item->id) }}" title="View Role">
                                            <button class="btn btn-info btn-xs">
                                            <i class="fa fa-eye" aria-hidden="true"></i> View
                                            </button>
                                        </a>       
                                        
                                        @if(Auth::user()->can('access.fee_schedules.edit'))
                                            <a href="{{ url('/admin/fee_schedules/' . $item->id . '/edit') }}"
                                                title="Edit Fee Schedules">
                                                <button class="btn btn-primary btn-xs"><i
                                                            class="fa fa-pencil-square-o"
                                                            aria-hidden="true"></i> Edit
                                                </button>
                                            </a>
                                        @endif

                                        @if(Auth::user()->can('access.fee_schedules.delete'))
                                            {!! Form::open([
                                                'method' => 'DELETE',
                                                'url' => ['/admin/fee_schedules', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                    'type' => 'submit',
                                                    'class' => 'btn btn-danger btn-xs',
                                                    'title' => 'Delete Fee Schedules',
                                                    'onclick'=>'return confirm("Confirm delete?")'
                                            )) !!}
                                            {!! Form::close() !!}
                                        @endif                                               

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>   
        </div>
    </div>
@endsection


