@extends('layouts.backend')

@section('title','Edit Profile')

@section('content')

    <div class="row">

        <div class="col-md-12">
            <div class="box bordered-box blue-border">
                    <div class="box-header blue-background">
                        <div class="title">
                            <i class="icon-circle-blank"></i>
                           Edit Profile
                        </div>
                        <div class="actions">
                            @include('partials.page_tooltip',['model' => 'profile','page'=>'form'])
                        </div>

                    </div>
                <div class="box-content ">
                    <a href="{{ route('profile.index') }}" title="Back">
                        <button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                           Back
                        </button>
                    </a>

                    @if ($errors->any())
                        <ul class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    {!! Form::model($user,[
                        'method' => 'PATCH',
                        'class' => 'form-horizontal',
                        'files'=>true,
                        'autocomplete'=>'off'
                    ]) !!}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : ''}}">
                        <label for="name" class="col-md-4 control-label">
                            <span class="field_compulsory">*</span>Name
                        </label>
                        <div class="col-md-6">
                            {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                            {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : ''}}">
                        {!! Form::label('email','Email', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {{--<p style="border: 1px solid #d0d0d0; padding: 5px">{{$user->email}}</p>--}}
                            {!! Form::email('email', isset($user->email)?$user->email:old('email'), ['class' => 'form-control', 'required' => 'required','disabled'=>true]) !!}
                            {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>

                     <div class="form-group {{ $errors->has('contact') ? 'has-error' : ''}}">
                        {!! Form::label('conatct','Contact', ['class' => 'col-md-4 control-label']) !!} 
                        <div class="col-md-6">
                            {!! Form::text('contact', null , ['class' => 'form-control']) !!}
                            {!! $errors->first('contact', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>

                    
                    
                    <div class="form-group{{ $errors->has('profile_image') ? ' has-error' : ''}}">
                        {!! Form::label('profile_image', 'Add Profile Image', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::file('profile_image',null, ['class' => 'form-control']) !!} 
                            @if(isset($user) && isset($user->profile_image))
                                @if( file_exists(public_path('/user/'.$user->profile_image) )  )
                                <img  src="{{url('/user/'.$user->profile_image)}}" width="125" height="100" alt="{{ $user->profile_image }}"/>  
                                @endif          
                            @endif 
                            {!! $errors->first('profile_image', '<p class="help-block with-errors">:message</p>') !!}
                        </div>
                    </div>
                    

                    <div class="form-group {{ $errors->has('gender') ? 'has-error' : ''}}">
                            {!! Form::label('gender', 'Gender', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::radio('gender', 'male' , ['class' => 'form-control']) !!} Male
                                {!! Form::radio('gender', 'female' , ['class' => 'form-control']) !!} Female
                                {!! $errors->first('gender', '<p class="help-block">:message</p>') !!}
                            </div>
                    </div> 

                    <div class="form-group">
                        <div class="col-md-offset-4 col-md-4">
                            {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Update Profile', ['class' => 'btn btn-primary']) !!}
                            {{ Form::reset('Clear', ['class' => 'btn btn-primary']) }}
                        </div>
                    </div>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@endsection