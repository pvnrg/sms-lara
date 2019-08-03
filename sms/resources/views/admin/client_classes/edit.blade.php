@extends('layouts.backend')

@section('title','Edit Fee Schedules')


@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Client Class  # {{$client_classes->name}}</h3>
                
                <a href="javascript:document.getElementById('module_form').submit();" title="Update" class="navbar-right btn btn-primary"> Update</a>
                <a href="{{ url('/admin/client_classes') }}" title="Back"><button class="btn btn-warning pull-right"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back </button></a>
            </div>
            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            {!! Form::model($client_classes, [
                'method' => 'PATCH',
                'url' => ['/admin/client_classes', $client_classes->id],
                'class' => 'form-horizontal',
                'id' => 'module_form',
                'autocomplete'=>'off'
            ]) !!}

            @include ('admin.client_classes.form', ['submitButtonText' => 'Update'])

            {!! Form::close() !!}

        </div>
        <!-- /.box -->
    </div>
</div>
<!-- /.row -->
@endsection