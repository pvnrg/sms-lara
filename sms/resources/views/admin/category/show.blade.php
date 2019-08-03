@extends('layouts.backend')

@section('title','View Product Category')


@section('content')
    <div class="row">

            <div class="col-md-12">
                    <div class="box bordered-box blue-border">
                        <div class="box-header blue-background">
                                                          <div class="title">
                                                              <i class="icon-circle-blank"></i>
                                                              View Product Category
                                                          </div>
        
                                       </div>
                        <div class="box-content ">

    

                    <a href="{{ url('/admin/category') }}" title="Back">
                        <button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                        </button>
                    </a>
                    @if(Auth::user()->can('access.category.edit'))
                    <a href="{{ url('/admin/category/' . $category->id . '/edit') }}" title="Edit Category">
                        <button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            Edit
                        </button>
                    </a>
                    @endif
                    
                    <br/>
                    <br/>


                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <tbody>

                            <tr>
                                <td>Id</td>
                                <td>{{ $category->id }}</td>
                            </tr>


                            <tr>
                                <td>Name</td>
                                <td>{{ $category->name }}</td>
                            </tr>
                            
                            <tr>
                                <td>Description</td>
                                <td>{{ $category->description }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection