{{--
<div class="form-group{{ $errors->has('customer_id') ? ' has-error' : ''}}">
    {!! Form::label('customer_id', 'Customer ID', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        
        {!! Form::select('customer_id',$customers, null, ['class' => 'form-control']) !!}
		{!! $errors->first('customer_id', '<p class="help-block with-errors">:message</p>') !!}
    </div>
</div>
--}}
<div class="form-group{{ $errors->has('name') ? ' has-error' : ''}}">
    {!! Form::label('name', 'Name *', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('name', null, ['class' => 'form-control','required'=> 'required' , 'disabled']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
@php $name = $settings ; @endphp


@if(isset($name) && $name->name == "Signature")

@if(!empty ($name->value ) ) 

    <img src="{{url('/img/'.$name->value)}}" width= "100" height="100" class="pull-right" />
    
@endif

<div class="form-group{{ $errors->has('value') ? ' has-error' : ''}}">
    {!! Form::label('value', 'Signature Image *', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        
        {!! Form::file('value',null, ['class' => 'form-control','required'=>'required']) !!}
        {!! $errors->first('value', '<p class="help-block with-errors">:message</p>') !!}
    </div>
</div>
@else
<div class="form-group{{ $errors->has('value') ? ' has-error' : ''}}">
    {!! Form::label('value', 'Value *', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        
        {!! Form::text('value',null, ['class' => 'form-control','required'=>'required']) !!}
        {!! $errors->first('value', '<p class="help-block with-errors">:message</p>') !!}
    </div>
</div>
@endif


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>


