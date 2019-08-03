@extends('layouts.backend')


@section('title','Add Customer')



@section('pageTitle')
    <i class="icon-tint"></i>

    <span>Add New Customer</span>


    @endsection


@section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="box bordered-box blue-border">
                    <div class="box-header blue-background">
						<div class="title">
							<i class="icon-circle-blank"></i>
							Add New Customer
						</div>
					</div>
                    <div class="box-content ">
                        <a href="{{ url('/admin/customer') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back </button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/admin/customer', 'class' => 'form-horizontal','id'=>'formParty','enctype'=>'multipart/form-data']) !!}

                        @include ('admin.customer.form')

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
@endsection

