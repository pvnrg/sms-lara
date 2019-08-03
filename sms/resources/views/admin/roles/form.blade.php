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
        @include('partials.form_field_tooltip',['tooltip' =>trans('tooltip.role.form_field.name')])
    </label>
    <div class="col-md-6">
        {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group{{ $errors->has('label') ? ' has-error' : ''}}">
    <label for="name" class="col-md-4 control-label">Label
        @include('partials.form_field_tooltip',['tooltip' =>trans('tooltip.role.form_field.label')])
    </label>

    <div class="col-md-6">
        {!! Form::text('label', null, ['class' => 'form-control']) !!}
        {!! $errors->first('label', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group{{ $errors->has('label') ? ' has-error' : ''}}">
    <label for="permissions" class="col-md-4 control-label">
        <span class="field_compulsory">*</span>
        Permissions
        @include('partials.form_field_tooltip',['tooltip' =>trans('tooltip.role.form_field.permission')])
    </label>
    <div class="col-md-6">

        <ul class="ul_list_style_n">

            @foreach($permissions as $permission)

                <li>
                    <div class="checkbox">
                        <input type="checkbox" name="permissions[]" class="parent" id="{{$permission->name}}"
                                               data-parent="{!! $permission->id !!}"
                                               value="{{ $permission->name }}" {!! isset($isChecked)?$isChecked($permission->name):"" !!} >

                        <label for="{{$permission->name}}"> [ {{$permission->name}} ] <span class="text-danger">{{ $permission->label }}</span></label>
                    </div>
                    <ul class="child">
                        @foreach($permission->child as $perm)
                            <li>
                                <div class="checkbox">
                                   <input type="checkbox" name="permissions[]" id="{{$perm->name}}"
                                                  class="child-{!! $perm->parent_id !!}"
                                                  {!! isset($isChecked)?$isChecked($perm->name):"" !!}
                                                  value="{{ $perm->name }}">
                                    <label for="{{$perm->name}}">
                                        <span class="text-info ">{{ $perm->label }}</span> [ {{$perm->name}} ]
                                    </label>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </li>

            @endforeach
        </ul>       
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