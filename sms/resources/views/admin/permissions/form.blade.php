<div class="box-body">
<div class="form-group{{ $errors->has('parent_id') ? ' has-error' : ''}}">
    <label for="parent_id" class="col-md-4 control-label">Parent permission
        @include('partials.form_field_tooltip',['tooltip' =>trans('tooltip.permission.form_field.Parent_Permission')])
    </label>
    <div class="col-md-6">
        {!! Form::select('parent_id',$permissions, null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('parent_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group{{ $errors->has('name') ? ' has-error' : ''}}">
    <label for="name" class="col-md-4 control-label">
        <span class="field_compulsory">*</span>
        Name
        @include('partials.form_field_tooltip',['tooltip' =>trans('tooltip.permission.form_field.name')])
    </label>
    <div class="col-md-6">
        {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group{{ $errors->has('label') ? ' has-error' : ''}}">
    <label for="label" class="col-md-4 control-label">Label
        @include('partials.form_field_tooltip',['tooltip' =>trans('tooltip.permission.form_field.label')])
    </label>
    <div class="col-md-6">
        {!! Form::text('label', null, ['class' => 'form-control']) !!}
        {!! $errors->first('label', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
        {{--  {{ Form::reset('Clear', ['class' => 'btn btn-primary']) }}  --}}
    </div>
</div>
</div>