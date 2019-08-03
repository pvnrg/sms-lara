@include('admin.for_master.site_input')


<?php
$btn = function ($field) use ($site) {
    if (!isset($site->{$field}) && $site->{$field} == '') {
        return '';
    }
    return '
<button type="button" class="cp btn btn-default btn-xs pull-right" data-val="' . $site->{$field} . ' ">Copy from Site
</button>';
}
?>


<div class="form-group {{ $errors->has('site_id') ? 'has-error' : ''}}">
    {!! Form::label('site_id', trans('building.label.site'), ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('site_id',$sites, null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('site_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', trans('building.label.name'), ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}

    </div>
</div>
<div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
    {!! Form::label('address', trans('building.label.address'), ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('address', null, ['class' => 'form-control']) !!}
        {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
        {!! $btn('address') !!}

    </div>
</div>

<div class="form-group {{ $errors->has('active') ? 'has-error' : ''}}">
    {!! Form::label('active', trans('building.label.active'), ['class' => 'col-md-4 control-label']) !!}
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
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
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
