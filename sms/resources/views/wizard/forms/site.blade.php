@include('admin.for_master.site_input')

<?php
$btn = function ($field) use ($company) {
    if (!isset($company->{$field})) {
        return '';
    }
    return '
<button type="button" class="cp btn btn-default btn-xs pull-right" data-val="' . $company->{$field} . ' ">Copy from Company
</button>';
}
?>

<div class="form-group {{ $errors->has('company_id') ? 'has-error' : ''}}">
    {!! Form::label('company_id', trans('site.label.company'), ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <input type="hidden" name="company_id" value="{!! $company->id !!}">
        {!! Form::select('company_id',$companies, null, ['class' => 'form-control','required'=>'required','disabled'=>'disabled']) !!}
        {!! $errors->first('company_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', trans('site.label.name'), ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
    {!! Form::label('address', trans('site.label.address'), ['class' => 'col-md-4 control-label fill_address']) !!}
    <div class="col-md-6">
        {!! Form::text('address', null, ['class' => 'form-control']) !!}
        {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
        {!! $btn('address') !!}
    </div>
    {{--<button type="button" class="btn btn-primary copy_address">Copy Comapny Address</button>--}}
</div>

<div class="form-group {{ $errors->has('city') ? 'has-error' : ''}}">
    {!! Form::label('city', trans('site.label.city'), ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('city', null, ['class' => 'form-control']) !!}
        {!! $errors->first('city', '<p class="help-block">:message</p>') !!}
        {!! $btn('city') !!}

    </div>
</div>
<div class="form-group {{ $errors->has('postcode') ? 'has-error' : ''}}">
    {!! Form::label('postcode', trans('site.label.postcode'), ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('postcode', null, ['class' => 'form-control']) !!}
        {!! $errors->first('postcode', '<p class="help-block">:message</p>') !!}
        {!! $btn('postcode') !!}

    </div>
</div>
<div class="form-group {{ $errors->has('country') ? 'has-error' : ''}}">
    {!! Form::label('country', trans('site.label.country'), ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('country',$countries, null, ['class' => 'form-control']) !!}
        {!! $errors->first('country', '<p class="help-block">:message</p>') !!}
        {!! $btn('country') !!}

    </div>
</div>
<div class="form-group {{ $errors->has('phone_number_1') ? 'has-error' : ''}}">
    {!! Form::label('phone_number_1', trans('site.label.phone_number_1'), ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('phone_number_1', null, ['class' => 'form-control']) !!}
        {!! $errors->first('phone_number_1', '<p class="help-block">:message</p>') !!}
        {!! $btn('phone_number_1') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('phone_number_2') ? 'has-error' : ''}}">
    {!! Form::label('phone_number_2', trans('site.label.phone_number_2'), ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('phone_number_2', null, ['class' => 'form-control']) !!}
        {!! $errors->first('phone_number_2', '<p class="help-block">:message</p>') !!}
        {!! $btn('phone_number_2') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('phone_type_1') ? 'has-error' : ''}}">
    {!! Form::label('phone_type_1', trans('site.label.phone_type_1'), ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('phone_type_1',$phoneTypes, null, ['class' => 'form-control']) !!}
        {!! $errors->first('phone_type_1', '<p class="help-block">:message</p>') !!}
        {!! $btn('phone_type_1') !!}

    </div>
</div>
<div class="form-group {{ $errors->has('phone_type_2') ? 'has-error' : ''}}">
    {!! Form::label('phone_type_2', trans('site.label.phone_type_2'), ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('phone_type_2',$phoneTypes, null, ['class' => 'form-control']) !!}
        {!! $errors->first('phone_type_2', '<p class="help-block">:message</p>') !!}
        {!! $btn('phone_type_2') !!}

    </div>
</div>
<div class="form-group {{ $errors->has('site_type') ? 'has-error' : ''}}">
    {!! Form::label('site_type', trans('site.label.site_type'), ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('site_type',$siteTypes, null, ['class' => 'form-control']) !!}
        {!! $errors->first('site_type', '<p class="help-block">:message</p>') !!}
        {!! $btn('site_type') !!}
    </div>
</div>

@if(isset($site) && $site->logo != '')


    <div class="form-group {{ $errors->has('logo') ? 'has-error' : ''}}">
        {!! Form::label('logo', trans('site.label.change_logo'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">

            <img src="{!! asset('uploads/'.$site->logo) !!}" alt="" width="150">
            <br><br>
            {!! Form::file('logo', null, ['class' => 'form-control']) !!}
            {!! $errors->first('logo', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
@else
    <div class="form-group {{ $errors->has('logo') ? 'has-error' : ''}}">
        {!! Form::label('logo', trans('site.label.logo'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::file('logo', null, ['class' => 'form-control']) !!}
            {!! $errors->first('logo', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
@endif

<div class="form-group {{ $errors->has('access_conditions') ? 'has-error' : ''}}">
    {!! Form::label('access_conditions', trans('site.label.access_conditions'), ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('access_conditions', null, ['class' => 'form-control']) !!}
        {!! $errors->first('access_conditions', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('default_email') ? 'has-error' : ''}}">
    {!! Form::label('default_email', trans('site.label.default_email'), ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::email('default_email', null, ['class' => 'form-control']) !!}
        {!! $errors->first('default_email', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('guard_presence') ? 'has-error' : ''}}">
    {!! Form::label('guard_presence', trans('site.label.guard_presence'), ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('guard_presence', null, ['class' => 'form-control']) !!}
        {!! $errors->first('guard_presence', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('digicode') ? 'has-error' : ''}}">
    {!! Form::label('digicode', trans('site.label.digicode'), ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('digicode', null, ['class' => 'form-control']) !!}
        {!! $errors->first('digicode', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('keybox_presence') ? 'has-error' : ''}}">
    {!! Form::label('keybox_presence',  trans('site.label.keybox_presence'), ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('keybox_presence', null, ['class' => 'form-control']) !!}
        {!! $errors->first('keybox_presence', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('keybox_code') ? 'has-error' : ''}}">
    {!! Form::label('keybox_code',  trans('site.label.keybox_code'), ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('keybox_code', null, ['class' => 'form-control']) !!}
        {!! $errors->first('keybox_code', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('keybox_place') ? 'has-error' : ''}}">
    {!! Form::label('keybox_place',  trans('site.label.keybox_place'), ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('keybox_place', null, ['class' => 'form-control']) !!}
        {!! $errors->first('keybox_place', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('keybox_issue') ? 'has-error' : ''}}">
    {!! Form::label('keybox_issue',  trans('site.label.keybox_issue'), ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('keybox_issue', null, ['class' => 'form-control']) !!}
        {!! $errors->first('keybox_issue', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('known_issue') ? 'has-error' : ''}}">
    {!! Form::label('known_issue', trans('site.label.known_issue'), ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('known_issue', null, ['class' => 'form-control']) !!}
        {!! $errors->first('known_issue', '<p class="help-block">:message</p>') !!}
    </div>
</div>




@if(isset($site) && $site->instructions_tasks_file != '')

    <div class="form-group {{ $errors->has('instructions_tasks_file') ? 'has-error' : ''}}">
        {!! Form::label('instructions_tasks_file',trans('site.label.update_instructions_tasks_file'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">


            <a href="{!! url('/uploads/files/'.$site->instructions_tasks_file) !!}" target="_blank">
                <img src="{!! asset('img/pdf.png') !!}" alt="" width="25">
                <b>{{$site->instructions_tasks_file}} </b>
            </a>
            <br>
            <br>
            {!! Form::file('instructions_tasks_file', null, ['class' => 'form-control']) !!}
            {!! $errors->first('instructions_tasks_file', '<p class="help-block">:message</p>') !!}
            <br>
            <br>

        </div>
    </div>
@else
    <div class="form-group {{ $errors->has('instructions_tasks_file') ? 'has-error' : ''}}">
        {!! Form::label('instructions_tasks_file', trans('site.label.instructions_tasks_file'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::file('instructions_tasks_file', null, ['class' => 'form-control']) !!}
            {!! $errors->first('instructions_tasks_file', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
@endif



@if(isset($site) && $site->order_file != '')


    <div class="form-group {{ $errors->has('order_file') ? 'has-error' : ''}}">
        {!! Form::label('order_file', trans('site.label.update_order_file'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">

            <a href="{!! url('/uploads/files/'.$site->order_file) !!}" target="_blank">
                <img src="{!! asset('img/pdf.png') !!}" alt="" width="25">
                <b>                {{$site->order_file}}
                </b>
            </a>
            <br>
            <br>
            {!! Form::file('order_file', null, ['class' => 'form-control']) !!}
            {!! $errors->first('order_file', '<p class="help-block">:message</p>') !!}
            <br>
            <br>

        </div>
    </div>
@else
    <div class="form-group {{ $errors->has('order_file') ? 'has-error' : ''}}">
        {!! Form::label('order_file', trans('site.label.order_file'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::file('order_file', null, ['class' => 'form-control']) !!}
            {!! $errors->first('order_file', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
@endif





@if(isset($site) && $site->procedures_file != '')


    <div class="form-group {{ $errors->has('procedures_file') ? 'has-error' : ''}}">
        {!! Form::label('procedures_file', trans('site.label.update_procedures_file'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">

            <a href="{!! url('/uploads/files/'.$site->procedures_file) !!}" target="_blank">
                <img src="{!! asset('img/pdf.png') !!}" alt="" width="25">
                <b>                {{$site->procedures_file}}
                </b>
            </a>
            <br>
            <br>
            {!! Form::file('procedures_file', null, ['class' => 'form-control']) !!}
            {!! $errors->first('procedures_file', '<p class="help-block">:message</p>') !!}
            <br>
            <br>

        </div>
    </div>
@else
    <div class="form-group {{ $errors->has('procedures_file') ? 'has-error' : ''}}">
        {!! Form::label('procedures_file', trans('site.label.procedures_file'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::file('procedures_file', null, ['class' => 'form-control']) !!}
            {!! $errors->first('procedures_file', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
@endif



@if(isset($site) && $site->sitemaps_file != '')

    <div class="form-group {{ $errors->has('sitemaps_file') ? 'has-error' : ''}}">
        {!! Form::label('sitemaps_file', trans('site.label.update_sitemaps_file'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">

            <a href="{!! url('/uploads/files/'.$site->sitemaps_file) !!}" target="_blank">
                <img src="{!! asset('img/pdf.png') !!}" alt="" width="25">
                <b>                {{$site->sitemaps_file}}
                </b>
            </a>
            <br>
            <br>
            {!! Form::file('sitemaps_file', null, ['class' => 'form-control']) !!}
            {!! $errors->first('sitemaps_file', '<p class="help-block">:message</p>') !!}
            <br>
            <br>

        </div>
    </div>

@else

    <div class="form-group {{ $errors->has('sitemaps_file') ? 'has-error' : ''}}">
        {!! Form::label('sitemaps_file', trans('site.label.sitemaps_file'), ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::file('sitemaps_file', null, ['class' => 'form-control']) !!}
            {!! $errors->first('sitemaps_file', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

@endif



<div class="form-group {{ $errors->has('active') ? 'has-error' : ''}}">
    {!! Form::label('active', trans('site.label.active'), ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <div class="checkbox">
            <label>{!! Form::radio('active', '1',true) !!} Yes</label>
        </div>
        <div class="checkbox">
            <label>{!! Form::radio('active', '0') !!} No</label>
        </div>
        {!! $errors->first('active', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText :__('Create'), ['class' => 'btn btn-primary']) !!}
    </div>
</div>


@push('js')

<script>
    $(document).ready(function () {
        $('.cp').click(function () {
            var val = $(this).data('val');
            console.log(val);

            var ctrl = $(this).prev('.form-control')

            if (ctrl.is('input')) {
                ctrl.val(val);
            }

            if (ctrl.is('select')) {
                ctrl.val('').val(val).change();
//
//                $(this).prev('select > option[value="' + val + '"]').prop("selected", "true");
////                $(this).prev(".form-control > [value=" + val + "]").attr("selected", "true");
            }
        })
    });
</script>

@endpush