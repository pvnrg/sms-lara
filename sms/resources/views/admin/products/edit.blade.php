@extends('layouts.backend')

@section('title','Edit Product')
@section('pageTitle','Edit Product')


@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="box bordered-box blue-border">
                <div class="box-header blue-background">
                                                  <div class="title">
                                                      <i class="icon-circle-blank"></i>
                                                      Edit Product
                                                  </div>

                               </div>
                <div class="box-content ">
                    <a href="{{ URL::previous() }}" title="Back">
                        <button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                        </button>
                    </a>
                    <br/>
                    <br/>

                    @if ($errors->any())
                        <ul class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    {!! Form::model($product, [
                        'method' => 'PATCH',
                        'url' => ['/admin/products', $product->id],
                        'class' => 'form-horizontal',
                        'id'=>'formProduct',
                        'enctype'=>'multipart/form-data'
                    ]) !!}


                    @include ('admin.products.form', ['submitButtonText' => 'Update'])

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@endsection
