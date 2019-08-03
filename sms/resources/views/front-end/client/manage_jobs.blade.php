@extends('layouts.frontend')

@section('content')
    <div class="col-lg-3 col-md-12 col-sm-12 full12-div float-left clearfix">
        <div class="row">
            <div class="verticle-tabs">
                <ul class="tab-uilist">
                    <li ><a href="{{url('/employess/jobs')}}">Post a Job</a></li>
                    <li class="active-tab"><a href="{{url('/employess/manage_jobs')}}">Manage Jobs </a></li>
                    <li><a href="#">Manage Candidates </a></li>
                </ul>
            </div>
        </div>
    </div>		

    <div class="col-lg-9 col-md-12 col-sm-12 full12-div float-left clearfix">
						<div class="row">
							<div class="width-100">
								<div class="listing-div2 my-jobs1 my-jobs2">  
									<div class="heading-div">
										<h4>Manage Jobs</h4>
									</div>
									<div class="body-listing">
										
                                    @if(isset($jobs))
                                        @foreach($jobs as $job) 
                                            <div class="data-row-div">
                                                <h5>{{$job->title}} </h5><span class="id-span"> #TS4565</span>
                                                @if($job->fixed_fee != null)
                                                    <label class="label1">Fixed Fee: {{$job->fixed_fee}}!</label>
                                                @else
                                                    <label class="label1">Placement Fee: {{$job->placement_fee}}%!</label>
                                                @endif
                                                
                                                <p class="p-blk1">Experience: min. {{$job->job_experience[0]->name}} | {!! implode(",",$job->skills()->pluck('name')->toArray()); !!}</p>
                                                <p class="pr-10"><i class="far fa-clock timeri"></i>Posted on {{\Carbon\Carbon::parse($job->created_at)->format('dS F Y')}}</p> 
                                            </div>
                                        @endforeach
                                     @endif

									</div>
									<div class="view-all-div">
										<a href="#" class="view-alllink">Read More</a>
									</div>
								</div>
							</div>	
						</div>			
					</div>

@endsection
