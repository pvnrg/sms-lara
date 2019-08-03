@extends('layouts.backend')

@section('title','Edit Permission')


@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Permission</h3>                
                <a href="{{ url('/admin/permissions') }}" title="Back"><button class="btn btn-warning pull-right"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back </button></a>
            </div>
    
                @if ($errors->any())
                    <ul class="alert alert-danger"> 
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

                {!! Form::model($permission, [
                    'method' => 'PATCH',
                    'url' => ['/admin/permissions', $permission->id],
                    'class' => 'form-horizontal',
                    'autocomplete'=>'off'
                ]) !!}

                @include ('admin.permissions.form', ['submitButtonText' => 'Update'])

                {!! Form::close() !!}

            </div>
            <!-- /.box -->
        </div>
    </div>
<!-- /.row -->
@endsection