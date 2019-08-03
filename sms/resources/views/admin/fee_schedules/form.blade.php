@push('css')
{{--<style>
    .checkbox label {
        position: inherit !important;
    }
    .checkbox input[type="checkbox"] {
        opacity: 1 !important;
    }
</style>--}}
@endpush


<div class="box-body"> 

<div class="form-group{{ $errors->has('name') ? ' has-error' : ''}}">
    <label for="name" class="col-md-4 control-label">
        <span class="field_compulsory">*</span>
       Name
    </label>
    <div class="col-md-6">
        {!! Form::text('name', !empty($fee_schedules->name) ? $fee_schedules->name : '', ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group{{ $errors->has('name') ? ' has-error' : ''}}">
    <label for="name" class="col-md-4 control-label">
       Fees
    </label>
    <div class="col-md-6">
        {!! Form::text('fees', !empty($fee_schedules->fees) ? $fee_schedules->fees : '', ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('fees', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
        {{--  {{ Form::reset('Clear', ['class' => 'btn btn-primary']) }}  --}}
    </div>
</div>
</div>

@section('footerExtra')
@push('js')

    <script>
       $('.parent').change(function (e) {

            var $this = $(this),
                parent = $this.data('parent'),
                child = $('.child-' + parent);

            if ($this.is(':checked')) {
                child.prop('checked', true);
            } else {
                child.prop('checked', false);
            }
            e.preventDefault();
        });
        

    </script>
@endpush
@endsection