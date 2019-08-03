@extends('layouts.backend')


@section('title','Change Password')

@section('content')

    <div class="row">

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Change Password</div>
                <div class="panel-body">

                    <a href="{{ route('profile.index') }}" title="Back">
                        <button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i>Back
                        </button>

                    </a>

                    @if ($errors->any())
                        <ul class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    {!! Form::open([
                        'method' => 'PATCH',
                        'class' => 'form-horizontal',
                        'autocomplete'=>'off'
                    ]) !!}


                    <div class="form-group{{ $errors->has('current_password') ? ' has-error' : ''}}">
                        {!! Form::label('current_password', 'Current Password', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::password('current_password', ['class' => 'form-control','required'=>'required']) !!}
                            {!! $errors->first('current_password', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : ''}}">
                        {!! Form::label('password', 'Password', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::password('password', ['class' => 'form-control','required'=>'required']) !!}
                            {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>


                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : ''}}">
                        {!! Form::label('password_confirmation','Confirm Password', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::password('password_confirmation', ['class' => 'form-control','required'=>'required']) !!}
                            {!! $errors->first('password_confirmation', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-offset-4 col-md-4">
                            {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Change Password', ['class' => 'btn btn-primary']) !!}
                            {{--  {{ Form::reset('Clear', ['class' => 'btn btn-primary']) }}  --}}
                        </div>
                    </div>


                    {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>
@endsection