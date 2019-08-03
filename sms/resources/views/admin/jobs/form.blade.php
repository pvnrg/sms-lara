



<div class="box-body">

        <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
            <label for="title" class="col-md-4 control-label">
                <span class="field_compulsory">*</span>Title
            </label> 
            <div class="col-md-6">
                {!! Form::text('title', null, ['class' => 'form-control']) !!} 
                {!! $errors->first('title','<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
                <label for="description" class="col-md-4 control-label">Company Address</label> 
                <div class="col-md-6">
                {!! Form::textarea('description',  isset($job) ? $job->description : '', ['id' => 'company_address', 'rows' => 6, 'cols' => 54, 'style' => 'resize:none']) !!}
                {!! $errors->first('description','<p class="help-block">:message</p>') !!}
                </div>
        </div>
        <div class="form-group {{ $errors->has('perks&benifits') ? 'has-error' : ''}}">
            <label for="perks&benifits" class="col-md-4 control-label">
                <span class="field_compulsory">*</span>Title
            </label> 
            <div class="col-md-6">
                {!! Form::text('perks&benifits', null, ['class' => 'form-control']) !!} 
                {!! $errors->first('perks&benifits','<p class="help-block">:message</p>') !!}
            </div>
        </div>
       
        <div class="form-group{{ $errors->has('skills_id') ? ' has-error' : ''}}">
            <label for="skills_id" class="col-md-4 control-label">
                <span class="field_compulsory">*</span>skills
            </label>
            <div class="col-md-6">
                {!! Form::select('skills_id',$skills,isset($job) ? [1,2] : '', ['class' => 'form-control select2', 'multiple' =>true ,'id'=> 'role' ]) !!}
                {!! $errors->first('skills_id','<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group{{ $errors->has('job_category_id') ? ' has-error' : ''}}">
            <label for="job_category_id" class="col-md-4 control-label">
                <span class="field_compulsory">*</span>job_category
            </label>
            <div class="col-md-6">
                {!! Form::select('job_category_id',$jobcategory,isset($job) ? $job->job_category_id : '', ['class' => 'form-control select2', 'multiple' =>false ,'id'=> 'role' ]) !!}
                {!! $errors->first('job_category_id','<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group{{ $errors->has('employement_type_id') ? ' has-error' : ''}}">
            <label for="employement_type_id" class="col-md-4 control-label">
                <span class="field_compulsory">*</span>employement_type
            </label>
            <div class="col-md-6">
                {!! Form::select('employement_type_id',$employeetypes,isset($job) ? $job->employement_type_id : '', ['class' => 'form-control select2', 'multiple' =>false ,'id'=> 'role' ]) !!}
                {!! $errors->first('employement_type_id','<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group{{ $errors->has('job_experience_id') ? ' has-error' : ''}}">
            <label for="job_experience_id" class="col-md-4 control-label">
                <span class="field_compulsory">*</span>job_experience
            </label>
            <div class="col-md-6">
                {!! Form::select('job_experience_id',$jobexperience,isset($job) ?  $job->job_experience_id : '', ['class' => 'form-control select2', 'multiple' =>false ,'id'=> 'role' ]) !!}
                {!! $errors->first('job_experience_id','<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group{{ $errors->has('user_id') ? ' has-error' : ''}}">
            <label for="user_id" class="col-md-4 control-label">
                <span class="field_compulsory">*</span>Employer
            </label>
            <div class="col-md-6">
                {!! Form::select('user_id',$user,isset($job) ? $job->user_id : '', ['class' => 'form-control select2', 'multiple' =>false ,'id'=> 'role' ]) !!}
                {!! $errors->first('user_id','<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('location') ? 'has-error' : ''}}">
                <label for="location" class="col-md-4 control-label">Location</label> 
                <div class="col-md-6">
                {!! Form::textarea('location',  isset($job) ? $job->location : '', ['id' => 'company_address', 'rows' => 6, 'cols' => 54, 'style' => 'resize:none']) !!}
                {!! $errors->first('location','<p class="help-block">:message</p>') !!}
                </div>
        </div>
        <div class="form-group {{ $errors->has('upload_limit') ? 'has-error' : ''}}">
            <label for="upload_limit" class="col-md-4 control-label">
                <span class="field_compulsory">*</span>upload_limit
            </label> 
            <div class="col-md-6">
                {!! Form::text('upload_limit', null, ['class' => 'form-control']) !!} 
                {!! $errors->first('upload_limit','<p class="help-block">:message</p>') !!}
            </div>
        </div>
     
        <div class="form-group {{ $errors->has('salary') ? 'has-error' : ''}}">
            <label for="salary" class="col-md-4 control-label">
                <span class="field_compulsory">*</span>salary
            </label> 
            <div class="col-md-6">
                {!! Form::text('salary', null, ['class' => 'form-control']) !!} 
                {!! $errors->first('salary','<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-offset-4 col-md-4">
                {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
    
    
</div>

@section('footerExtra')
@push('js')
<script>
        $( document ).ready(function() {

            var roles = $('#role').val();
            
            if(roles != '' || roles != null){
  
                    if(roles == "Installers"){
                        $(".installer_fields").show()  
                    }else{
                        $(".installer_fields").hide()
                    }
            }   
        });
        $('#role').on('change',function(){
            var roles = $(this).val();
      
            if( roles != null){
                    if(roles == "Installers"){
                        $(".installer_fields").show()
                    }else{
                        $(".installer_fields").hide()
                    } 
            }else{
                $(".installer_fields").hide()
            }
   
       });
</script>
@endpush
@endsection
