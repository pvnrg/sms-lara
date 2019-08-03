@extends('layouts.backend')

@section('title','Edit User')

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Transaction</h3>
                <a href="javascript:document.getElementById('module_form').submit();" title="Update" class="navbar-right btn btn-primary"> Update</a>
                <a href="{{ url('/admin/transactions') }}" title="Back">
                    <button class="btn btn-warning pull-right"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                    </button>
                </a>
            </div>
                {!! Form::model([$transactions], [
                    'method' => 'PATCH',
                    'url' => ['/admin/transactions', $transactions->id],
                    'class' => 'form-horizontal',
                    'id' => 'module_form',
                    'files' => true,
                    'autocomplete'=>'off'
                ]) !!}

                @include ('admin.transactions.form', ['submitButtonText' => 'Update'])

                {!! Form::close() !!}               

            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection