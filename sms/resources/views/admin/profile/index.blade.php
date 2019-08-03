@extends('layouts.backend')


@section('title','My Profile')

@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="box bordered-box blue-border">
                <div class="box-header blue-background">
                    <div class="title">
                        <i class="icon-circle-blank"></i>
                       My Profile
                    </div>
                    {{--  <div class="actions">
                        @include('partials.page_tooltip',['model' => 'profile','page'=>'index'])
                    </div>  --}}
                </div>
                <div class="box-content panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ route('profile.edit') }}" class="btn btn-success btn-sm" title="Edit Profile">
                                <i class="fa fa-edit" aria-hidden="true"></i> Edit Profile
                            </a>
                            <a href="{{ route('profile.password') }}" class="btn btn-success btn-sm" title="Change Password">
                                <i class="fa fa-lock" aria-hidden="true"></i> Change Password
                            </a>
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>
                    <hr>

                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <tr>
                                <td class="col-md-2">Name</td>
                                <td>{{$user->name}}</td>
                            </tr>

                            <tr>
                                <td>Email</td>
                                <td>{{$user->email}}</td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>{{$user->gender}}</td>
                            </tr>
                            <tr>
                                <td>Contact</td>
                                <td>{{$user->contact or 'N/A'}}</td>
                            </tr>
                            <tr>
                                <td>Profile Image</td>
                                <td>  <img  src="{{url('/user/'.$user->profile_image)}}" width="125" height="100" alt="{{ $user->profile_image }}"/>  </td>
                            </tr>
                        </table>
                    </div>


                    @if($user->people)
                        <h2>@lang('people.label.person_details')</h2>
                        <div class="table-responsive">
                            <table class="table table-borderless">

                                <tr>
                                    <td class="col-md-2">@lang('people.label.first_name')</td>
                                    <td>{{$user->people->first_name}}</td>
                                </tr>
                                <tr>
                                    <td class="col-md-2">@lang('people.label.last_name')</td>
                                    <td>{{$user->people->last_name}}</td>
                                </tr>

                                <tr>
                                    <td>@lang('people.label.phone_number_1')</td>
                                    <td>{{$user->people->phone_number_1}}</td>
                                </tr>

                                <tr>
                                    <td>@lang('people.label.phone_type_1')</td>
                                    <td>{{$user->people->phone_type_1}}</td>
                                </tr>


                                <tr>
                                    <td>@lang('people.label.phone_number_2')</td>
                                    <td>{{$user->people->phone_number_2 or null}}</td>
                                </tr>

                                <tr>
                                    <td>@lang('people.label.phone_type_2')</td>
                                    <td>{{$user->people->phone_type_2 or null}}</td>
                                </tr>


                                <tr>
                                    <td>@lang('people.label.photo')</td>
                                    <td>
                                        @if($user->photo)
                                            <img src="{!! asset('uploads/'.$user->photo) !!}" alt="" width="150">
                                        @endif
                                    </td>
                                </tr>


                            </table>
                        </div>

                    @endif

                    {{--<pre>--}}
                    {{--{!! json_encode(Auth::user(),JSON_PRETTY_PRINT) !!}--}}
                    {{--</pre>--}}

                </div>
            </div>
        </div>
    </div>
@endsection