@extends('layouts.login')

@section('content')
<section class="login-section">
	<div class="login-div">
		<div class="container">
			<div class="row">
				<div class="login-center">
					<div class="col-lg-6 col-md-5 col-sm-12 float-left clearfix">
						<div class="left-half">
							<h3 class="login-title">Reset Password to <span class="red-text">Talentscope</span> </h3>
							<div class="login-form">
                            <form method="POST" action="{{ route('password.request') }}" aria-label="{{ __('Reset Password') }}">
                                   {{ csrf_field() }}
                                   <input type="hidden" name="token" value="{{ $token }}">
									<div class="form-group">
										<label>Email Address *</label>
										<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter a Email" required autofocus>
										@if ($errors->has('email'))
											<span class="help-block">
												<strong>{{ $errors->first('email') }}</strong>
											</span>
										@endif
									</div>
                                    <div class="form-group">
										<label>Password</label>
										<input id="password" type="password" class="form-control" name="password" placeholder="Enter a Password" required>
										@if ($errors->has('password'))
											<span class="help-block">
												<strong>{{ $errors->first('password') }}</strong>
											</span>
										@endif
									</div>
                                    <div class="form-group">
										<label>Password Confirmation</label>
										<input id="password-confirmation" type="password" class="form-control" name="password_confirmation" placeholder="Enter a Confirm Password" required>
										@if ($errors->has('password_confirmation'))
											<span class="help-block">
												<strong>{{ $errors->first('password_confirmation') }}</strong>
											</span>
										@endif
									</div>
									
									<div class="signbtn-div">
										<button class="btn btn-block btn-signin" type="submit">Submit</button>
									</div>

								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-7 col-sm-12 float-left clearfix">
						<div class="right-half">
							<div class="login-img">
								<img src="{!! asset('front-end/images/login-img1.png') !!}" class="img-fluid img-login">
							</div>
						</div>
					</div>
				</div>	
				<div class="col-lg-12 col-md-12 col-sm-12 float-left clearfix">
					<p class="copyright-p">2018 Talentscope.All right reserved</p>
				</div>
			</div>
		</div>
	</div>	
</section>
@endsection
