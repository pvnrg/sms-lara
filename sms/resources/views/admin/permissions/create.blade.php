@extends('layouts.backend')

@section('title','Create Permission')


@section('content')
        <div class="row">

            <div class="col-md-12">
                <div class="box bordered-box blue-border">
                        <div class="box-header blue-background">
                            <div class="title">
                                <i class="icon-circle-blank"></i>
                                Create Permission
                            </div>
                            <div class="actions">
                                @include('partials.page_tooltip',['model' => 'permission','page'=>'form'])
                            </div>

                        </div>
                        <div class="box-content ">
                        <a href="{{ url('/admin/permissions') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back </button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/admin/permissions', 'class' => 'form-horizontal','autocomplete'=>'off']) !!}

                        @include ('admin.permissions.form')

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
@endsection