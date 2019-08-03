
<div class="form-group">
    @if($user->people->photo)
        <div class="col-md-6 col-md-offset-4">
            <img src="{!! asset('uploads/'.$user->people->photo) !!}" alt="" width="150px">
        </div>
    @endif
</div>

<div class="form-group {{ $errors->has('photo') ? 'has-error' : ''}}">
    @if($user->people->photo)
        {!! Form::label('photo', trans('people.label.change_photo'), ['class' => 'col-md-4 control-label']) !!}
    @else
        {!! Form::label('photo', trans('people.label.photo'), ['class' => 'col-md-4 control-label']) !!}
    @endif
    <div class="col-md-6">
        {!! Form::file('photo',  ['class' => 'form-control']) !!}
        {!! $errors->first('photo', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('phone_number_1') ? 'has-error' : ''}}">
    <label for="name" class="col-md-4 control-label">
        <span class="field_compulsory">*</span>@lang('people.label.phone_number_1')
    </label>
    <div class="col-md-6">
        {!! Form::text('phone_number_1', $user->people->phone_number_1, ['class' => 'form-control']) !!}
        {!! $errors->first('phone_number_1', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('phone_type_1') ? 'has-error' : ''}}">
    <label for="phone_type_1" class="col-md-4 control-label">
        <span class="field_compulsory">*</span>@lang('people.label.phone_type_1')
    </label>
    <div class="col-md-6">
        {!! Form::select('phone_type_1',$phoneTypes, $user->people->phone_type_1, ['class' => 'form-control']) !!}
        {!! $errors->first('phone_type_1', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('phone_number_2') ? 'has-error' : ''}}">
    <label for="phone_number_2" class="col-md-4 control-label">
        <span class="field_compulsory">*</span>@lang('people.label.phone_number_2')
    </label>
    <div class="col-md-6">
        {!! Form::text('phone_number_2', $user->people->phone_number_2, ['class' => 'form-control']) !!}
        {!! $errors->first('phone_number_2', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('phone_type_2') ? 'has-error' : ''}}">
    <label for="phone_type_2" class="col-md-4 control-label">
        <span class="field_compulsory">*</span>@lang('people.label.phone_type_2')
    </label>
    <div class="col-md-6">
        {!! Form::select('phone_type_2',$phoneTypes, $user->people->phone_type_2, ['class' => 'form-control']) !!}
        {!! $errors->first('phone_type_2', '<p class="help-block">:message</p>') !!}
    </div>
</div>
