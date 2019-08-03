@extends('layouts.backend')

@section('title',trans('permission.label.Give_Permission_to_Role'))
@section('pageTitle',trans('permission.label.Give_Permission_to_Role'))


@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">@lang('permission.notification_msg.Please_select_role_to_give_permission')</div>
                <div class="panel-body">

                    @if ($errors->any())
                        <ul class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    {!! Form::open(['method' => 'POST', 'url' => ['/admin/give-role-permissions'], 'class' => 'form-horizontal']) !!}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : ''}}">
                        {!! Form::label('name', trans('role.label.roles'), ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            <select class="roles form-control" id="role" name="role">
                                @foreach($roles as $role)
                                    <option value="{{ $role->name }}">{{ $role->label }}</option>
                                @endforeach()
                            </select>
                            {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('label') ? ' has-error' : ''}}">
                        {!! Form::label('label', trans('permission.label.permissions'), ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">

                            <ul>

                                @foreach($permissions as $permission)

                                    <li>
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="permissions[]"
                                                          value="{{ $permission->name }}">{{ $permission->label }}
                                            </label>
                                        </div>
                                        <ul>
                                            @foreach($permission->child as $perm)
                                                <li>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" name="permissions[]"
                                                                      value="{{ $perm->name }}">{{ $perm->label }}
                                                        </label>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>

                                @endforeach
                            </ul>


                            {{--<select class="permissions form-control" id="permissions" name="permissions[]"--}}
                            {{--multiple="multiple">--}}
                            {{--@foreach($permissions as $permission)--}}
                            {{--<option value="{{ $permission->name }}">{{ $permission->label }}</option>--}}
                            {{--@endforeach()--}}
                            {{--</select>--}}
                            {!! $errors->first('label', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-offset-4 col-md-4">
                            {!! Form::submit('Grant', ['class' => 'btn btn-primary']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@endsection