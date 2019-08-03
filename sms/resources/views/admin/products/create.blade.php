@extends('layouts.backend')


@section('title','Add Product')



@section('pageTitle')
    <i class="icon-tint"></i>

    <span>Add New Product</span>


    @endsection


@section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="box bordered-box blue-border">
                    <div class="box-header blue-background">
                                                      <div class="title">
                                                          <i class="icon-circle-blank"></i>
                                                          Add New Product
                                                      </div>
    
                                   </div>
                    <div class="box-content ">
                        <a href="{{ URL::previous() }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back </button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/admin/products', 'class' => 'form-horizontal','id'=>'formProduct','enctype'=>'multipart/form-data']) !!}

                        @include ('admin.products.form')

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
@endsection

