
<div class="form-group{{ $errors->has('name') ? ' has-error' : ''}}">
    {!! Form::label('name', 'Name (*)', ['class' => 'col-md-2 control-label','required'=>'required']) !!}
    <div class="col-md-6">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group{{ $errors->has('image') ? ' has-error' : ''}}">
        {!! Form::label('image', 'Image (*)', ['class' => 'col-md-2 control-label']) !!}
        <div class="col-md-6">
            {!! Form::file('image', null, ['class' => 'form-control','required'=>'required']) !!}
            {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="col-md-2">
            @if(isset($brand) && isset($brand->image))
            
                <img  src="{{url('/brand/'.$brand->image)}}" width="125" height="100" />
            
            @endif 
        </div>
    </div>
<div class="form-group">
    <div class="col-md-offset-2 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>

