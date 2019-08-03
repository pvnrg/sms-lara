@extends('layouts.frontend')

@section('content')
    <div class="col-lg-12 col-md-12 col-sm-12 full-div clearfix">
        <div class="row">
            <div class="counting-box">
                <div class="count-box1">
                    <div class="icon-thumb">
                        <img src="{!! asset('front-end/images/icons/round1.png')!!}" class="img-fluid img-round1">
                    </div>
                    <div class="count-content">
                        <p>Active Jobs</p>
                        <h2 class="counter">21</h2>
                    </div>
                </div>
                <div class="count-box1">
                    <div class="icon-thumb">
                        <img src="{!! asset('front-end/images/icons/round2.png')!!}" class="img-fluid img-round1">
                    </div>
                    <div class="count-content">
                        <p>Talent Hired</p>                             
                        <h2>34</h2>
                    </div>
                </div>
                <div class="count-box1">
                    <div class="icon-thumb">
                        <img src="{!! asset('front-end/images/icons/round3.png')!!}" class="img-fluid img-round1">
                    </div>
                    <div class="count-content">
                        <p>Agencies Connected</p>
                        <h2>25</h2>
                    </div>
                </div>
                <div class="count-box1">
                    <div class="icon-thumb">
                        <img src="{!! asset('front-end/images/icons/round4.png')!!}" class="img-fluid img-round1">
                    </div>
                    <div class="count-content">
                        <p>Resumes Received</p>
                        <h2>125</h2>
                    </div>
                </div>
            </div>
        </div>	
    </div>

    <div class="col-lg-7 col-md-12 col-sm-12 seven-div float-left clearfix">
        <div class="row">
            <div class="padding-right10">
                <div class="listing-div">  
                    <div class="heading-div">
                        <h4>Job Listing</h4>
                        <div class="float-right"><a href="{{url('/employess/jobs')}}" class="btn btn-primary btn-red">POST A JOB</a></div>
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
                        <a href="{{url('/employess/manage_jobs')}}" class="view-alllink">View all</a>
                    </div>
                </div>	
            </div>
        </div>	
    </div>

    <div class="col-lg-5 col-md-12 col-sm-12 five-div float-left clearfix">
        <div class="row">
            <div class="padding-left10">
                <div class="listing-div2">  
                    <div class="heading-div">
                        <h4>Resumes Received</h4>
                    </div>
                    <div class="body-listing">
                        <div class="data-row-div2">
                            <h5>Steve Smith </h5>
                            <label class="label2">Pending</label>
                            <span class="id-span"> #TS4565</span>
                        
                            <div class="icon-div01">
                                <a href="#" class="iconalink"> <img src="{!! asset('front-end/images/icons/eye.svg')!!}" class="img-fluid img-i01 w-22"> </a>
                                <a href="#" class="iconalink"> <img src="{!! asset('front-end/images/icons/checked.svg')!!}" class="img-fluid img-i01"> </a>
                                <a href="#" class="iconalink"> <img src="{!! asset('front-end/images/icons/cancel-button.svg')!!}" class="img-fluid img-i01"> </a>
                            </div>

                            <p class="p-blk1">Experience: 3 Years | PHP, MySQL, Wordpress</p>
                            <p>Submitted by <a href="#" class="link-blue">Agency Name</a></p>
                            
                        </div>

                   
                        
                    </div>
                    <div class="view-all-div">
                        <a href="#" class="view-alllink">View all</a>
                    </div>
                </div>
            </div>	
        </div>			
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 five-div float-left clearfix">
        <div class="row">
            <div class="request-agency-div">
                <div class="listing-div3">  
                    <div class="heading-div">
                        <h4>Requests from Agencies</h4>
                    </div>
                    <div class="body-listing02">
                        
                        <div class="fullrow-div clearfix">
                            <div class="toprow-div clearfix">
                                <div class="col-div11">
                                    <div class="agency-thumb1"><img class="img-fluid agency-img1" src="{!! asset('front-end/images/userdefault.png')!!}" alt="user-img"></div>
                                    <div class="title-div"><h5>Webworld</h5><a href="#" class="link01">www.agenciesname.com</a></div>
                                </div>
                                <div class="col-div1 col-exep">
                                    <div class="title-div1"><h6>experience :</h6><p>Jul 2009 - Present - 9 yrs 5 months</p></div>
                                </div>
                                <div class="col-div1 col-div2">
                                    <div class="title-div1">
                                        <h6>RATING :</h6>
                                        <div class="star-div">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>	
                                            <label class="star-label">4</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-div1 col-div3">
                                    <div class="title-div1"><h6>LOCATION :</h6><p><i class="fas fa-map-marker-alt locationi"></i>USA</p></div>
                                </div>
                                <div class="col-div1 col-div4">
                                    <div class="title-div1"><h6>STATUS :</h6><label class="pending-label">PENDING</label></div>
                                </div>
                            </div>	
                            <div class="bottomhover-row">
                                <div class="width-75per">
                                    <a href="#" class="link-blk1">VIEW Agency PROFILE</a>
                                </div>
                                <div class="width-25per">
                                    <button class="btn btn-action btn-decline">DECLINE</button>
                                    <button class="btn btn-action btn-approve">Approve</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="view-all-div">
                        <a href="#" class="view-alllink">View all</a>
                    </div>
                </div>
            </div>	
        </div>			
    </div>

@endsection

