@extends('layouts.backend')


@section('title','Add Package')


@section('pageTitle')
    <i class="icon-tint"></i>

    <span>Add New Package</span>


    @endsection


@section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Add New Package</div>
                    <div class="panel-body">
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

                        {!! Form::open(['url' => '/admin/packages', 'class' => 'form-horizontal','id'=>'formPackage','enctype'=>'multipart/form-data']) !!}

                        @include ('admin.package.form')

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
@endsection

