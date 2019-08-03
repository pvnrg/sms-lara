@extends('layouts.backend')

@section('title','Product Categories')
@section('pageTitle','Product Categories')

@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="box bordered-box blue-border">
                <div class="box-header blue-background">
                                                  <div class="title">
                                                      <i class="icon-circle-blank"></i>
                                                      Product Categories
                                                  </div>

                               </div>
                <div class="box-content ">


                    <div class="row">
                        <div class="col-md-6">
                                @if(Auth::user()->can('access.category.create'))
                                <a href="{{ url('/admin/category/create') }}" class="btn btn-success btn-sm"
                                   title="Add New Category">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Add new
                                </a>
                                @endif
                        </div>

                        <div class="col-md-6">
                            {!! Form::open(['method' => 'GET', 'url' => '/admin/category', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
                            <input type="search" class="form-control search" name="search" placeholder="{{Request::get('search')}}" value="{!! request()->get('search') !!}">
                            {!! Form::close() !!}
                            </div>
                        </div>
                    


                    <div class="table-responsive">
                        <table class="table table-borderless" id="categories-table">
                            <thead>
                            <tr>
                                <th data-priority="1">Id</th>                         
                                <th data-priority="3">Name</th>  
                                {{--  <th data-priority="7">Status</th>  --}}
                                <th data-priority="8">Actions</th>                        
                            </tr>
                            </thead>
                            @if(count($categories) == 0)
                            <tr><td colspan="3"> No Product categories Found </td></tr>
                            @endif
                            @foreach($categories as $item)
                            <tr>
                                <td> {{$item->id}}</td>
                                <td> {{$item->name}}</td>
                                {{--  <td> {{$item->status}}</td>  --}}
                                 <td>

                                        <a href="{{ url('/admin/category/' . $item->id) }}" title="View Category">
                                            <button class="btn btn-info btn-xs"><i class="fa fa-eye"
                                                                                   aria-hidden="true"></i> View
                                            </button>
                                        </a>

                                          @if(Auth::user()->can('access.category.edit'))  

                                            <a href="{{ url('/admin/category/' . $item->id . '/edit') }}"
                                               title="Edit User">
                                                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o"
                                                                                          aria-hidden="true"></i> Edit
                                                </button>
                                            </a>
                                          @endif  

                                        @if(Auth::user()->can('access.category.delete'))

                                            {!! Form::open([
                                                'method' => 'DELETE',
                                                'url' => ['/admin/category', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                    'type' => 'submit',
                                                    'class' => 'btn btn-danger btn-xs',
                                                    'title' => 'Delete category',
                                                    'onclick'=>'return confirm("Confirm delete?")'
                                            )) !!}
                                            {!! Form::close() !!}
                                        @endif

                                    </td>
                            </tr>   
                            @endforeach
                        </table>
                    </div>
                    <div class="pagination-wrapper"> {!! $categories->appends(['search' => Request::get('search')])->render() !!} </div>

                </div>
            </div>
        </div>
    </div>
@endsection
