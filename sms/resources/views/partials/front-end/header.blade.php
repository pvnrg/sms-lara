<header class="top-header">
		<div class="header-div">
			<div class="container">
				<div class="row">
					
					<div class="col-lg-2 col-md-3 col-sm-6 clearfix">
						<div class="logo-thumb">
							<h1>SMS</h1>
						</div>
					</div>

					<div class="col-lg-10 col-md-9 col-sm-6 clearfix">
						<div class="top-nav-div float-right">
							
							<div class="top-nav2">
								<div class="user-dropdown">
									<div class="dropdown">
										<button class="btn btn-primaryuser dropdown-toggle" type="button" data-toggle="dropdown">
											<div class="user-img">
                                                @if(isset(Auth::user()->profile_image))
                   
                                                    <img src="{!! asset('/user/'.Auth::user()->profile_image) !!}" class="img-fluid userimg1" alt="user-img">
                                                @endif
                                            
                                            </div>
											<span class="username-span">{{Auth::user()->name}}</span>
                                       
                                            <img src="{!! asset('front-end/images/icons/arrow-down-2.svg') !!}" class="img-fluid img-downarrow">
										</button>
										<ul class="dropdown-menu">
											<li><a href="{{ url('/client/my_profile') }}">My Profile</a></li>
											<li><a href="{{ url('/client/change_password') }}">Change Password</a></li>
											<li>
                                                <a href="{{ url('/logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">Log out</a>
                                            </li>
                                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                            </form>
										</ul>
									</div>
								</div>

							</div>
							
							
							

						</div>
					</div>

				</div>
			</div>			
		</div>
	</header>
