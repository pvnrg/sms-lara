@extends('layouts.frontend')

@section('content')
    <div class="col-lg-3 col-md-12 col-sm-12 full12-div float-left clearfix">
        <div class="row">
            <div class="verticle-tabs">
                <ul class="tab-uilist">
                    <li class="active-tab"><a href="{{url('/employess/jobs')}}">Post a Job</a></li>
                    <li><a href="{{url('/employess/manage_jobs')}}">Manage Jobs </a></li>
                    <li><a href="#">Manage Candidates </a></li>
                </ul>
            </div>
        </div>
    </div>		

    <div class="col-lg-9 col-md-12 col-sm-12 full12-div float-left clearfix">
        <div class="row">
            <div class="width-100">
                <div class="listing-div2 my-jobs1">  
                    <div class="heading-div">
                        <h4>Post a Job</h4>
                    </div>
                    <div class="body-listing body-postjob">
                    <form method="POST" action="{{url('/employess/post_job')}}" >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-div1 clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 form-div12">
                                    <div class="form-group">
                                        <label>Job Title <span class="red-decoration">*</span></label>
                                        <input type="text" class="form-control" placeholder="Enter job title here" name="title">
                                        {!! $errors->first('title','<p class="help-block">:message</p>') !!}
                                    </div>
                                </div>	
                                <div class="col-lg-12 col-md-12 col-sm-12 form-div12">
                                    <div class="form-group">
                                        <label>Job Description <span class="red-decoration">*</span></label>
                                        <textarea name="description" class="form-control auto-height" rows="3" placeholder="Enter job description here"></textarea>
                                        {!! $errors->first('description','<p class="help-block">:message</p>') !!}
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-div12">
                                    <div class="form-group">
                                        <label>Perks and Benefits <span class="red-decoration">*</span></label>
                                        <input type="text" name="perks&benifits" class="form-control" placeholder="Enter job title here">
                                        {!! $errors->first('perks&benifits','<p class="help-block">:message</p>') !!}
                                    </div>
                                </div>	
                            
                            </div>
                            <div class="form-div2 clearfix">
                            
                                <h3 class="boldh3 clearfix">Job Requirements </h3>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-div6 float-left">
                                    <div class="form-group">
                                        <label>Job Category <span class="red-decoration">*</span></label>
                                        {!! Form::select('job_category_id',$jobcategory,isset($company) ? $company->specialization_id : '', ['class' => 'form-control select2', 'multiple' =>false ,'id'=> 'role' ]) !!}
                                        {!! $errors->first('job_category_id','<p class="help-block">:message</p>') !!}
                                    </div>
                                </div>	

                                <div class="col-lg-6 col-md-6 col-sm-12 form-div6 float-left">
                                    <div class="form-group">
                                        <label>Employment Type <span class="red-decoration">*</span></label>
                                        {!! Form::select('employement_type_id',$employeetypes,isset($company) ? $company->specialization_id : '', ['class' => 'form-control select2', 'multiple' =>false ,'id'=> 'role' ]) !!}
                                        {!! $errors->first('employement_type_id','<p class="help-block">:message</p>') !!}
                                    </div>
                                </div>	

                                <div class="col-lg-6 col-md-6 col-sm-12 form-div6 float-left">
                                    <div class="form-group">
                                        <label>Experience Required <span class="red-decoration">*</span></label>
                                        {!! Form::select('job_experience_id',$jobexperience,isset($company) ? $company->specialization_id : '', ['class' => 'form-control select2', 'multiple' =>false ,'id'=> 'role' ]) !!}
                                        {!! $errors->first('job_experience_id','<p class="help-block">:message</p>') !!}
                                    </div>
                                </div>	

                                <div class="col-lg-6 col-md-6 col-sm-12 form-div6 float-left">
                                    <div class="form-group">
                                        <label>Location <span class="red-decoration">*</span></label>
                                        <textarea name="location" class="form-control auto-height" rows="3" placeholder="Enter job location here"></textarea>
                                        {!! $errors->first('location','<p class="help-block">:message</p>') !!}
                                    </div>
                                </div>	

                                <div class="col-lg-6 col-md-6 col-sm-12 form-div6 float-left">
                                    <div class="form-group">
                                        <label>Salary <span class="red-decoration">*</span></label>
                                        <input type="text" name="salary" class="form-control" placeholder="$50,000 - $60,000">
                                        {!! $errors->first('salary','<p class="help-block">:message</p>') !!}
                                    </div>
                                </div>	

                                <div class="col-lg-6 col-md-6 col-sm-12 form-div6 float-left">
                                    <div class="form-group">
                                        <label>Enter upload limit <span class="red-decoration">*</span>
                                            <a data-toggle="tooltip" data-placement="right" data-html="true" title="<p class='toopltip-p'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisi purus, fringilla vitae facilisis Aenean nisi purus, fringilla vitae 	 </p>" class="tooltips-link"><i class="fas fa-info-circle i-info"></i></a></span> </label>
                                        <input type="text" name="upload_limit" class="form-control" placeholder="Enter upload limit">
                                        {!! $errors->first('upload_limit','<p class="help-block">:message</p>') !!}
                                    </div>
                                </div>	

                                <div class="col-lg-12 col-md-12 col-sm-12 form-div12">
                                    <div class="form-group">
                                        <label>Skills <span class="red-decoration">*</span></label>
                                        <select class="form-control select-form" name="skills[]" multiple="true">
                                            <option value="0">Select Placement Fee </option>
                                            @if(isset($skills))
                                                @foreach($skills as $value)
                                                    <option value="{{$value->id}}">{{$value->name}} </option>
                                                @endforeach
                                            @endif
                                        </select>
                                        {!! $errors->first('skills[]','<p class="help-block">:message</p>') !!}
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-div6 float-left" id="placement">
                                    <div class="form-group">
                                        <label class="fee-label">Placement Fee <span class="fee-blk">% <span class="red-decoration">*</span>
                                        <a data-toggle="tooltip" data-placement="right" data-html="true" title="<p class='toopltip-p'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisi purus, fringilla vitae facilisis Aenean nisi purus, fringilla vitae 	 </p>" class="tooltips-link"><i class="fas fa-info-circle i-info"></i></a></span> </label>
                                        <select class="form-control select-form" name="placement_fee" id="placement_fee">
                                            <option value="0">Select Placement Fee </option>
                                            <option value="10">10 </option>
                                            <option value="20">20</option>
                                            <option value="30">30</option>
                                            <option value="40">40</option>
                                        </select>
                                        {!! $errors->first('placement_fee','<p class="help-block">:message</p>') !!}
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-div6 float-left" id="or">
                                    <p class="p-or">or</p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-div6 float-left" id="fixed" >
                                    <div class="form-group">
                                        <label class="fee-label2">Fixed Fee 
                                        <a data-toggle="tooltip" data-placement="right" data-html="true" title="<p class='toopltip-p'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisi purus, fringilla vitae facilisis Aenean nisi purus, fringilla vitae 	 </p>" class="tooltips-link"><i class="fas fa-info-circle i-info"></i></a></label>
                                        <input type="text" class="form-control" placeholder="Select the skills needed for the job" name="fixed_fee" id="fixed_fee">
                                        {!! $errors->first('fixed_fee','<p class="help-block">:message</p>') !!}
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

@section('footerExtra')
<script>
    $(document).ready(function(e){
       
        $("#skills").select2();  

        //file type validation
        $("#placement_fee").change(function() {
           
            $("div#fixed").hide();
            $("div#or").hide();
        });
        $("#fixed_fee").keyup(function(){
            $("div#placement").hide();
            $("div#or").hide();
        });
});
</script>
@endsection