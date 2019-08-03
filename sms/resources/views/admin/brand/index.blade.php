@extends('layouts.backend')

@section('title','Product Brand')
@section('pageTitle','Product Brand')

@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="box bordered-box blue-border">
                <div class="box-header blue-background">
                                                  <div class="title">
                                                      <i class="icon-circle-blank"></i>
                                                      Product Brand
                                                  </div>

                               </div>
                <div class="box-content ">


                    <div class="row">
                        <div class="col-md-6">
                                @if(Auth::user()->can('access.brand.create'))
                                <a href="{{ url('/admin/brand/create') }}" class="btn btn-success btn-sm"
                                   title="Add New Brand">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Add new
                                </a>
                                @endif
                        </div>

                        <div class="col-md-6">
                            {!! Form::open(['method' => 'GET', 'url' => '/admin/brand', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
                            <input type="search" class="form-control search" name="search" placeholder="{{Request::get('search')}}" value="{!! request()->get('search') !!}">
                            {!! Form::close() !!}
                            </div>
                        </div>
                    


                    <div class="table-responsive">
                        <table class="table table-borderless" id="brand-table">
                            <thead>
                            <tr>
                                <th data-priority="1">Id</th>                         
                                <th data-priority="3">Name</th>  
                                <th data-priority="7">Image</th> 
                                <th data-priority="8">Actions</th>                        
                            </tr>
                            </thead>
                            @if(count($brand) == 0)
                            <tr><td colspan="3"> No Product Brand Found </td></tr>
                            @endif
                            @foreach($brand as $item)
                            <tr>
                                <td> {{$item->id}}</td>
                                <td> {{$item->name}}</td>
                                 <td> @if(isset($item) && isset($item->image))
                                        <img  src="{{url('/brand/'.$item->image)}}" width="125"  />
                                        {{-- <a href="{{url('/brand/'.$item->image)}}" target="_blank" class="btn">View</a> --}}
                                    @endif
                                </td> 
                                 <td>

                                        {{-- <a href="{{ url('/admin/brand/' . $item->id) }}" title="View Brand">
                                            <button class="btn btn-info btn-xs"><i class="fa fa-eye"
                                                                                   aria-hidden="true"></i> View
                                            </button>
                                        </a> --}}

                                          @if(Auth::user()->can('access.brand.edit'))  

                                            <a href="{{ url('/admin/brand/' . $item->id . '/edit') }}"
                                               title="Edit User">
                                                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o"
                                                                                          aria-hidden="true"></i> Edit
                                                </button>
                                            </a>
                                          @endif  

                                        @if(Auth::user()->can('access.brand.delete'))

                                            {!! Form::open([
                                                'method' => 'DELETE',
                                                'url' => ['/admin/brand', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                    'type' => 'submit',
                                                    'class' => 'btn btn-danger btn-xs',
                                                    'title' => 'Delete brand',
                                                    'onclick'=>'return confirm("Confirm delete?")'
                                            )) !!}
                                            {!! Form::close() !!}
                                        @endif

                                    </td>
                            </tr>   
                            @endforeach
                        </table>
                    </div>
                    <div class="pagination-wrapper"> {!! $brand->appends(['search' => Request::get('search')])->render() !!} </div>

                </div>
            </div>
        </div>
    </div>
@endsection
