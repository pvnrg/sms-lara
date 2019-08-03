@extends('layouts.frontend')

@section('content')

    <div class="col-lg-3 col-md-12 col-sm-12 full12-div float-left clearfix">
        <div class="row">
            <div class="verticle-tabs">
                <ul class="tab-uilist">
                    <li><a href="{{ url('/employess/my_profile') }}">My Profile</a></li>
                    <li class="active-tab"><a href="{{ url('/employess/change_password') }}">Change Password</a></li>
                </ul>
            </div>
        </div>
    </div>		

    <div class="col-lg-9 col-md-12 col-sm-12 full12-div float-left clearfix">
        <div class="row">
            <div class="width-100">
                <div class="listing-div2 my-jobs1 change-pass-div">  
                    <div class="heading-div">
                        <h4>Change Password</h4>
                    </div>
                    <div class="body-listing body-change-pass">
                        <form method="POST" action="{{url('/employees/update_password')}}" >
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-div1 clearfix">
                                
                                <div class="col-lg-12 col-md-12 col-sm-12 form-div12">
                                    <div class="form-group">
                                        <label>Old Password <span class="red-decoration">*</span></label>
                                        <input type="password" class="form-control" placeholder="Enter old password" name="current_password">
                                        @if ($errors->has('current_password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('current_password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>	
                                <div class="col-lg-12 col-md-12 col-sm-12 form-div12">
                                    <div class="form-group">
                                        <label>New Password <span class="red-decoration">*</span></label>
                                        <input type="password" class="form-control" placeholder="Repeat New Password" name="password">
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>	
                                <div class="col-lg-12 col-md-12 col-sm-12 form-div12">
                                    <div class="form-group">
                                        <label>Repeat New Password <span class="red-decoration">*</span></label>
                                        <input type="password" class="form-control" placeholder="Enter repeat new password" name="password_confirmation">
                                        @if ($errors->has('password_confirmation'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>	
                                
                            </div>
                        
                            <div class="form-div3 clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 btn-div01">
                                    <button type="submit" class="btn btn-primary btn-red min-width100">SAVE CHANGES</button>
                                </div>	
                            </div>
                        </form>
                    </div>
                </div>
            </div>	
        </div>			
    </div>

@endsection