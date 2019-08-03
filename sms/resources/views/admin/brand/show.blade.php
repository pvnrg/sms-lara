@extends('layouts.backend')

@section('title','View Product Brand')


@section('content')
    <div class="row">

            <div class="col-md-12">
                    <div class="box bordered-box blue-border">
                        <div class="box-header blue-background">
                                                          <div class="title">
                                                              <i class="icon-circle-blank"></i>
                                                              View Product Brand
                                                          </div>
        
                                       </div>
                        <div class="box-content ">

    

                    <a href="{{ url('/admin/brand') }}" title="Back">
                        <button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                        </button>
                    </a>
                    @if(Auth::user()->can('access.brand.edit'))
                    <a href="{{ url('/admin/brand/' . $brand->id . '/edit') }}" title="Edit Brand">
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
                                <td>{{ $brand->id }}</td>
                            </tr>


                            <tr>
                                <td>Name</td>
                                <td>{{ $brand->name }}</td>
                            </tr>
                            
                            <tr>
                                <td>Image</td>
                                <td><img  src="{{url('/brand/'.$brand->image)}}" width="125" height="100" />
                                    <a href="{{url('/brand/'.$brand->image)}}" target="_blank" class="btn">View</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection