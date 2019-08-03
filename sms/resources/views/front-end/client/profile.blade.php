@extends('layouts.frontend')

@section('content')	

					<div class="col-lg-12 col-md-12 col-sm-12 full12-div float-left clearfix">
						<div class="row">
							<div class="width-100">
								<div class="listing-div2 my-jobs1 my-profile">  
									<div class="heading-div">
										<h4>My Profile</h4>
									</div>
									<div class="body-listing body-profile">
										<form method="POST" action="{{url('/employess/update_profile')}}" >
											<input type="hidden" name="_token" value="{{ csrf_token() }}">

											<div class="form-div1 clearfix">
												
												<div class="col-lg-12 col-md-12 col-sm-12 form-div12">
													<div class="form-group">
														<label>Name <span class="red-decoration">*</span></label>
														<input type="text" class="form-control"  name="name" value="{{ isset($user->name) ? ($user->name != null) ? $user->name : '' :'' }}" placeholder="Enter user name here">
													</div>
												</div>	
												<div class="col-lg-12 col-md-12 col-sm-12 form-div12">
													<div class="form-group">
														<label>Address <span class="red-decoration">*</span></label>
														<textarea class="form-control auto-height" name="about" rows="3" placeholder="Enter Address here">{{ isset($user->address) ? ($user->address != null) ? $user->address : '' :'' }}</textarea>
													</div>
												</div>
												<div class="col-lg-12 col-md-12 col-sm-12 form-div12">
													<div class="form-group">
														<label>Contact <span class="red-decoration">*</span></label>
														<textarea class="form-control auto-height" name="about" rows="3" placeholder="Enter Contact">{{ isset($user->contact) ? ($user->contact != null) ? $user->contact : '' :'' }}</textarea>
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12 form-div6 float-left">
													<div class="form-group">
														<label>Email <span class="red-decoration">*</span></label>
														<input type="email" name="email" class="form-control" placeholder="Enter user email" value="{{ isset($user->email) ? ($user->email != null) ? $user->email : '' :'' }}">
													</div>
												</div>
											</div>
										
											<div class="form-div3 clearfix">
												<div class="col-lg-12 col-md-12 col-sm-12 btn-div01">
												<button type="submit" class="btn btn-primary btn-red min-width100">SAVE</button>
												</div>	
											</div>

										</form>
									</div>
								</div>
							</div>	
						</div>			
					</div>


@endsection
