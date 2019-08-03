@extends('layouts.backend')


@section('title','Dashboard')


@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{__('Dashboard')}}</div>

                <div class="panel-body">
                    {{__('You are logged in!')}}
                </div>
            </div>
        </div>
    </div>
@endsection
