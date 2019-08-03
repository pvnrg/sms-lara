@extends('layouts.backend')

@section('title','Edit Employee type')

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Employee type  # {{$employeetypes->name}}</h3>
                
                <a href="javascript:document.getElementById('module_form').submit();" title="Update" class="pull-right btn btn-primary"> Update</a>
                <a href="{{ url('/admin/employeetypes') }}" title="Back"><button class="btn btn-warning pull-right"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back </button></a>
            </div>
            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <!-- /.box-header -->
            <!-- form start -->
            {!! Form::model($employeetypes, [
                'method' => 'PATCH',
                'url' => ['/admin/employeetypes', $employeetypes->id],
                'class' => 'form-horizontal',
                'id' => 'module_form',
                'autocomplete'=>'off'
            ]) !!}

            @include ('admin.employeetypes.form', ['submitButtonText' => 'Update'])

            {!! Form::close() !!}
        </div>
        <!-- /.box -->
    </div>
</div>
<!-- /.row -->
        
@endsection