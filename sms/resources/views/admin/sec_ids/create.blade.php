@extends('layouts.backend')

@section('title','Create Skill')

@section('content')
<div class="row"> 
    <div class="col-md-12">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Create Sec Id</h3>
                
                <a href="javascript:document.getElementById('module_form').submit();" title="Create" class="navbar-right btn btn-primary"> Create</a>
                <a href="{{ url('/admin/sec_ids') }}" title="Back"><button class="btn btn-warning pull-right"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
            </div>
            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            {!! Form::open(['url' => '/admin/sec_ids', 'class' => 'form-horizontal','id' => 'module_form','autocomplete'=>'off']) !!}

            @include ('admin.sec_ids.form')

            {!! Form::close() !!}
        </div>
        <!-- /.box -->
    </div>
</div>
<!-- /.row -->
@endsection