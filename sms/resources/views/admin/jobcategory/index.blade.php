@extends('layouts.backend')

@section('title','All {{ Route::currentRouteName() }} List')


@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">All {{ ucfirst(Route::currentRouteName()) }} List</h3>
                    @if(Auth::user()->can('access.jobcategory.create'))
                        <a href="{{ url('/admin/jobcategory/create') }}" class="btn btn-success btn-sm pull-right" title="Add New Employeetypes">
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
                            <th>Label</th>                                
                            <th>Action</th>
                        </tr> 
                        </thead>
                        <tbody>
                            @foreach($jobcategory as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td><a href="{{ url('/admin/jobcategory', $item->id) }}">{{ $item->name }}</a></td>
                                    <td>
                                        <a href="{{ url('/admin/jobcategory/' . $item->id) }}" title="View Role">
                                            <button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View </button>
                                        </a>
                                            @if(Auth::user()->can('access.jobcategory.edit'))
                                                <a href="{{ url('/admin/jobcategory/' . $item->id . '/edit') }}"
                                                    title="Edit Employee type">
                                                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit </button>
                                                </a>
                                            @endif

                                            @if(Auth::user()->can('access.jobcategory.delete'))
                                                {!! Form::open([
                                                    'method' => 'DELETE',
                                                    'url' => ['/admin/jobcategory', $item->id],
                                                    'style' => 'display:inline'
                                                ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Employee type',
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


