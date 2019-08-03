@extends('layouts.backend')

@section('title','Edit Job')

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Job # {{$job->name}}</h3>
                <a href="javascript:document.getElementById('module_form').submit();" title="Update" class="navbar-right btn btn-primary"> Update</a>
                <a href="{{ url('/admin/job') }}" title="Back">
                    <button class="btn btn-warning pull-right"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                    </button>
                </a>
            </div>

               

                {!! Form::model([$job], [
                    'method' => 'PATCH',
                    'url' => ['/admin/job', $job->id],
                    'class' => 'form-horizontal',
                    'id' => 'module_form',
                    'files' => true,
                    'autocomplete'=>'off'
                ]) !!}

                @include ('admin.jobs.form', ['submitButtonText' => 'Update'])

                {!! Form::close() !!}               

            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection