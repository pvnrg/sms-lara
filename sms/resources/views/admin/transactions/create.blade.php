@extends('layouts.backend')

@section('title','Create Transaction')

@section('pageTitle')
    <i class="icon-tint"></i>
    <span>Create Transaction</span>
@endsection
@section('content')
<div class="row"> 
    <div class="col-md-12">
        <!-- Horizontal Form --> 
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Create Transaction</h3>
                
                <a href="javascript:document.getElementById('module_form').submit();" title="Create" class="navbar-right btn btn-primary"> Create</a>
                <a href="{{ url('/admin/transactions') }}" title="Back"><button class="btn btn-warning pull-right"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
            </div>
               

                {!! Form::open(['url' => '/admin/transactions', 'class' => 'form-horizontal','id' => 'module_form','files' => true,'autocomplete'=>'off']) !!}

                @include ('admin.transactions.form')

                {!! Form::close() !!}
            </div>
            <!-- /.box -->
        </div>
    </div>
<!-- /.row -->
@endsection
