@extends('layouts.backend')

@section('title','Create Transaction Type')

@section('content')
<div class="row"> 
    <div class="col-md-12">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Create Transaction Type</h3>
                
                <a href="javascript:document.getElementById('module_form').submit();" title="Create" class="navbar-right btn btn-primary"> Create</a>
                <a href="{{ url('/admin/transaction_types') }}" title="Back"><button class="btn btn-warning pull-right"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
            </div>
            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            {!! Form::open(['url' => '/admin/transaction_types', 'class' => 'form-horizontal','id' => 'module_form','autocomplete'=>'off']) !!}

            @include ('admin.transaction_types.form')

            {!! Form::close() !!}
        </div>
        <!-- /.box -->
    </div>
</div>
<!-- /.row -->
@endsection