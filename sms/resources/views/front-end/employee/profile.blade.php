@extends('layouts.frontend')

@section('content')
                    <div class="col-lg-3 col-md-12 col-sm-12 full12-div float-left clearfix">
						<div class="row">
							<div class="verticle-tabs">
								<ul class="tab-uilist">
                                    <li class="active-tab"><a href="{{ url('/employess/my_profile') }}">My Profile</a></li>
                                    <li ><a href="{{ url('/employess/change_password') }}">Change Password</a></li>
								</ul>
							</div>
						</div>
					</div>		

					<div class="col-lg-9 col-md-12 col-sm-12 full12-div float-left clearfix">
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
													<div class="upload-profile-div clearfix">
														<div class="userpic-thumb">
														@if(isset($company->logo))
															<img class="img-fluid com-profile" src="{!! asset('/company/'.Auth::user()->company->logo) !!}" alt="user-img">
														@else
															<img class="img-fluid com-profile" src="{!! asset('front-end/images/icons/question-mark-round.png') !!}" alt="user-img">
														@endif
														</div>
														<div class="uploadbtn-div">
															<div class="file-upload">
																<label for="upload" class="file-upload__label">Upload Photo</label>
																<input id="upload" class="file-upload__input" type="file" name="company_logo">
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-12 col-md-12 col-sm-12 form-div12">
													<div class="form-group">
														<label>Company Name <span class="red-decoration">*</span></label>
														<input type="text" class="form-control"  name="name" value="{{ isset($company->name) ? ($company->name != null) ? $company->name : '' :'' }}" placeholder="Enter Company name here">
													</div>
												</div>	
												<div class="col-lg-12 col-md-12 col-sm-12 form-div12">
													<div class="form-group">
														<label>Company Description <span class="red-decoration">*</span></label>
														<textarea class="form-control auto-height" name="about" rows="3" placeholder="Enter Company description here">
															{{ isset($company->about) ? ($company->about != null) ? $company->about : '' :'' }}
														</textarea>
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12 form-div6 float-left">
													<div class="form-group">
														<label>Company Website <span class="red-decoration">*</span></label>
														<input type="text" name="website" class="form-control" placeholder="Enter company website" value="{{ isset($company->website) ? ($company->website != null) ? $company->website : '' :'' }}">
													</div>
												</div>	
												<div class="col-lg-6 col-md-6 col-sm-12 form-div6 float-left">
													<div class="form-group">
														<label>Work Email <span class="red-decoration">*</span></label>
														<input type="email" name="email_address" class="form-control" placeholder="Enter company email" value="{{ isset($company->email_address) ? ($company->email_address != null) ? $company->email_address : '' :'' }}">
													</div>
												</div>	
												
												<div class="col-lg-6 col-md-6 col-sm-12 form-div6 float-left">
													<div class="form-group">
														<label>Industry </label>
														{!! Form::select('specialization_id',$specialization,isset($company) ? $company->specialization_id : '', ['class' => 'form-control select2', 'multiple' =>false ,'id'=> 'role' ]) !!}
														{!! $errors->first('specialization_id','<p class="help-block">:message</p>') !!}
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12 form-div6 float-left">
													<div class="form-group">
														<label>Year Founded <span class="red-decoration">*</span></label>
														<input type="text" class="form-control" placeholder="2015" name="year_founded">
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
