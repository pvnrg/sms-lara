@extends('layouts.frontend')

@section('content')
    <div class="col-lg-12 col-md-12 col-sm-12 full-div clearfix">
        <div class="row">
            <div class="counting-box">
                <div class="count-box1">
                    <div class="icon-thumb">
                        <img src="{!! asset('front-end/images/icons/round1.png') !!}" class="img-fluid img-round1">
                    </div>
                    <div class="count-content">
                        <p>Active Engagements</p>
                        <h2 class="counter">21</h2>
                    </div>
                </div>
                <div class="count-box1">
                    <div class="icon-thumb">
                        <img src="{!! asset('front-end/images/icons/round2.png') !!}" class="img-fluid img-round1">
                    </div>
                    <div class="count-content">
                        <p>Talent Hired</p>                             
                        <h2>34</h2>
                    </div>
                </div>
                <div class="count-box1">
                    <div class="icon-thumb">
                        <img src="{!! asset('front-end/images/icons/round3.png') !!}" class="img-fluid img-round1">
                    </div>
                    <div class="count-content">
                        <p>Agencies Connected</p>
                        <h2>25</h2>
                    </div>
                </div>
                <div class="count-box1">
                    <div class="icon-thumb">
                        <img src="{!! asset('front-end/images/icons/round4.png') !!}" class="img-fluid img-round1">
                    </div>
                    <div class="count-content">
                        <p>Resumes Submitted</p>
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
                        <div class="float-right"><a href="#" class="btn btn-primary btn-red">POST A JOB</a></div>
                    </div>
                    <div class="body-listing">
                        <div class="data-row-div">
                            <h5>Wordpress developer </h5><span class="id-span"> #TS4565</span>
                            <a class="btn btn-transparent" href="" >Recruit Talent</a>
        
                            <p class="p-blk1">Experience: min. 2 years | PHP, MySQL, Wordpress</p>
                            <p class="pr-10"><i class="far fa-clock timeri"></i>Posted on 3rd August 2018</p>
                            <p class="pr-10"><i class="far fa-clock timeri"></i>Posted on 3rd August 2018</p>
                            
                            <div class="bottom-div">
                                <a href="#" class="btn btn-primary btn-red btn-red1"><span class="number-span">5</span>Resumes Submitted</a>
                                <a href="#" class="linka1"><img src="{!! asset('front-end/images/icons/edit.svg') !!}" class="img-fluid img-icon11"></a>
                                <a href="#" class="linka1"><img src="{!! asset('front-end/images/icons/delete-button.svg') !!}" class="img-fluid img-icon11"></a>
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
                                <a href="#" class="iconalink"> <img src="{!! asset('front-end/images/icons/eye.svg') !!}" class="img-fluid img-i01 w25"> </a>
                                
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
                        <h4>My Rating</h4>
                    </div>
                    <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="average-rating">
                    <div class="rating">
                        <h3>Average Rating</h3>
                        <h3><span>4.50</span>
                            <span class="rating-star">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>	
                            </span>
                        </h3>
                        <img src="{!! asset('front-end/images/rating-bar.png') !!}" class="img-fluid" />
                        <h4><div class="line-bar"></div>Average Rating</h4>
                    </div>
                    
                    </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="chart-bar">
                    <div class="rating">
                        <h3>Most popular rating <span>96.55%</span> <span class="title-mobile">5 <i class="fas fa-star filled"></i> <span>29</span> ratings<span></h3>
                    </div>
                    <div class="chart-box">
                        <div class="chart">
                            <div class="split div-0"><p>0%</p></div>
                            <div class="split div-15"><p>15%</p></div>
                            <div class="split div-50"><p>50%</p></div>
                            <div class="split div-75"><p>75%</p></div>
                            <div class="split div-100"><p>100%</p></div>
                        </div>
                        <div class="horizontal-bar">
                                <div class="h-bar h-bar-100"><span>5 <i class="fas fa-star filled"></i></span></div>
                                <div class="h-bar h-bar-75"><span>4 <i class="fas fa-star filled"></i></span></div>
                                <div class="h-bar h-bar-50"><span>3 <i class="fas fa-star filled"></i></span></div>
                                <div class="h-bar h-bar-25"><span>2 <i class="fas fa-star filled"></i></span></div>
                                <div class="h-bar h-bar-0"><span>1 <i class="fas fa-star filled"></i></span></div>
                        </div>
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
