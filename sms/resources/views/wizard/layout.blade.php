@extends('layouts.backend')

@section('title','Create Site')

@section('headExtra')
    <link rel="stylesheet" href="{!! asset('/assets/stylesheets/plugins/fuelux/wizard.css') !!}">
@endsection


@section('footerExtra')
    <script src="{!! asset('assets/javascripts/plugins/fuelux/wizard.js') !!}"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">

            <div class="box">
                <div class="box-content box-padding">

                    <ul class="nav nav-tabs">
                        <li class="{!! $m->c_ac or '' !!}">
                            <a href="{!! url('admin/create') !!}">
                                <i class="icon-indent-left"></i>
                                Company
                            </a>
                        </li>
                        <li class="{!! $m->s_ac or '' !!}">
                            <a href="{!! url('admin/create/site') !!}">
                                <i class="icon-edit text-red"></i>
                                Site
                            </a>
                        </li>
                        <li class="{!! $m->b_ac or '' !!}">
                            <a href="{!! url('admin/create/building') !!}">
                                <i class="icon-ambulance text-blue"></i>
                                Building
                            </a>
                        </li>
                    </ul>

                    <div>
                        @yield('wizard_content')
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection


