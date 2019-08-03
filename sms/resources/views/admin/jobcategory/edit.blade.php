@extends('layouts.backend')

@section('title','Edit Job Category')

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Job Category   # {{$jobcategory->name}}</h3>
                
                <a href="javascript:document.getElementById('module_form').submit();" title="Update" class="pull-right btn btn-primary"> Update</a>
                <a href="{{ url('/admin/jobcategory') }}" title="Back"><button class="btn btn-warning pull-right"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back </button></a>
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
            {!! Form::model($jobcategory, [
                'method' => 'PATCH',
                'url' => ['/admin/jobcategory', $jobcategory->id],
                'class' => 'form-horizontal',
                'id' => 'module_form',
                'autocomplete'=>'off'
            ]) !!}

            @include ('admin.jobcategory.form', ['submitButtonText' => 'Update'])

            {!! Form::close() !!}
        </div>
        <!-- /.box -->
    </div>
</div>
<!-- /.row -->
        
@endsection