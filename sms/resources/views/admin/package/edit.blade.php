@extends('layouts.backend')

@section('title','Edit Package')
@section('pageTitle','Edit Package')


@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"> Edit Package </div>
                <div class="panel-body">
                    <a href="{{ url('/admin/packages') }}" title="Back">
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

                    {!! Form::model($package, [
                        'method' => 'PATCH',
                        'url' => ['/admin/packages', $package->id],
                        'class' => 'form-horizontal',
                        'id'=>'formPackage',
                        'enctype'=>'multipart/form-data'
                    ]) !!}


                    @include ('admin.package.form', ['submitButtonText' => 'Update'])

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@endsection
