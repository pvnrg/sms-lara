<div class="box-body">

        <div class="form-group {{ $errors->has('account_no') ? 'has-error' : ''}}">
            <label for="account_no" class="col-md-4 control-label">
                <span class="field_compulsory">*</span>Account No.
            </label> 
            <div class="col-md-6">
                {!! Form::text('account_no', !empty($user->account_no) ? $user->account_no : '', ['class' => 'form-control']) !!} 
                {!! $errors->first('account_no','<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
            <label for="name" class="col-md-4 control-label">
                <span class="field_compulsory">*</span>Name
            </label> 
            <div class="col-md-6">
                {!! Form::text('name', !empty($user->name) ? $user->name : '', ['class' => 'form-control']) !!} 
                {!! $errors->first('name','<p class="help-block">:message</p>') !!}
            </div>
        </div>

        @if(Auth::user()->can('access.role.edit'))
            <div class="form-group{{ $errors->has('roles') ? ' has-error' : ''}}">
                <label for="role" class="col-md-4 control-label">
                    <span class="field_compulsory">*</span>Role
                </label>
                <div class="col-md-6">
                    {!! Form::select('roles', $roles, !empty($user_roles) ? $user_roles : '', ['class' => 'form-control select2', 'multiple' =>false ,'id'=> 'role' ]) !!}
                    {!! $errors->first('roles','<p class="help-block">:message</p>') !!}
                </div>
            </div>
        @endif

        <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
            <label for="email" class="col-md-4 control-label">
                <span class="field_compulsory">*</span>Email
            </label> 
            <div class="col-md-6">
            {!! Form::email('email', !empty($user->email) ? $user->email : '', ['class' => 'form-control']) !!}
            {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
      
        <div class="form-group {{ $errors->has('Phone') ? 'has-error' : ''}}">
            <label for="Phone" class="col-md-4 control-label">Phone #</label> 
            <div class="col-md-6">
            {!! Form::text('contact', !empty($user->contact) ? $user->contact : '' , ['class' => 'form-control']) !!}
            {!! $errors->first('Phone', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
            <label for="address" class="col-md-4 control-label">Address</label> 
            <div class="col-md-6">
                {!! Form::textarea('address',  !empty($user->address) ? $user->address : '', ['id' => 'address', 'rows' => 6, 'cols' => 54, 'style' => 'resize:none']) !!}
                {!! $errors->first('address','<p class="help-block">:message</p>') !!}
            </div>
        </div>
  
        <div class="form-group{{ $errors->has('passport') ? ' has-error' : ''}}">
            <label for="passport" class="col-md-4 control-label">Passport</label> 
            <div class="col-md-6">
            {!! Form::file('passport',null, ['class' => 'form-control']) !!} 
            </div>
        </div>
        <div class="form-group">
        <div class="col-md-4">
        </div>
        <div class="col-md-6">
        @if(!empty($user) && !empty($user->passport))
            @if( file_exists(public_path('/user/'.$user->passport) )  )
                <img  src="{{url('/user/'.$user->passport)}}" width="125" height="100" alt="{{ $user->passport }}"/>  
            @endif          
        @endif 
        </div>
            {!! $errors->first('passport', '<p class="help-block with-errors">:message</p>') !!}
        </div>

        <div class="form-group{{ $errors->has('proof_of_residency') ? ' has-error' : ''}}">
            <label for="proof_of_residency" class="col-md-4 control-label">Proof Of Residency</label> 
            <div class="col-md-6">
            {!! Form::file('proof_of_residency',null, ['class' => 'form-control']) !!} 
            </div>
        </div>
        <div class="form-group">
        <div class="col-md-4">
        </div>
        <div class="col-md-6">
        @if(!empty($user) && !empty($user->proof_of_residency))
            @if( file_exists(public_path('/user/'.$user->proof_of_residency) )  )
                <img  src="{{url('/user/'.$user->proof_of_residency)}}" width="125" height="100" alt="{{ $user->proof_of_residency }}"/>  
            @endif          
        @endif 
        </div>
            {!! $errors->first('proof_of_residency', '<p class="help-block with-errors">:message</p>') !!}
        </div>

        <div class="form-group {{ $errors->has('tax_from') ? 'has-error' : ''}}">
            <label for="tax_from" class="col-md-4 control-label">Tax Form</label> 
            <div class="col-md-6">
                {!! Form::text('tax_from', !empty($user->tax_from) ? $user->tax_from : '', ['class' => 'form-control']) !!} 
                {!! $errors->first('tax_from','<p class="help-block">:message</p>') !!}
            </div>
        </div>        

        <div class="form-group {{ $errors->has('is_corporate') ? 'has-error' : ''}}">
            <label for="is_corporate" class="col-md-4 control-label">is Corporate?</label>
            <div class="col-md-6">
                
                <input type="checkbox" name="is_corporate" id="is_corporate" <?php if (!empty($user->is_corporate)) { echo 'checked="checked"'; } ?> />
                {!! $errors->first('is_corporate', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group{{ $errors->has('certificate_of_incorpo') ? ' has-error' : ''}}">
        <label for="certificate_of_incorpo" class="col-md-4 control-label">Certificate Of Incorporation</label> 
            <div class="col-md-6">
            {!! Form::file('certificate_of_incorpo',null, ['class' => 'form-control']) !!} 
            </div>
        </div>
        <div class="form-group">
        <div class="col-md-4">
        </div>
        <div class="col-md-6">
        @if(!empty($user) && !empty($user->certificate_of_incorpo))
            @if( file_exists(public_path('/user/'.$user->certificate_of_incorpo) )  )
                <img  src="{{url('/user/'.$user->certificate_of_incorpo)}}" width="125" height="100" alt="{{ $user->certificate_of_incorpo }}"/>  
            @endif          
        @endif 
        </div>
            {!! $errors->first('certificate_of_incorpo', '<p class="help-block with-errors">:message</p>') !!}
        </div>

        <div class="form-group{{ $errors->has('articals_memorandoms') ? ' has-error' : ''}}">
        <label for="articals_memorandoms" class="col-md-4 control-label">Articals Memorandoms</label> 
            <div class="col-md-6">
            {!! Form::file('articals_memorandoms',null, ['class' => 'form-control']) !!} 
            </div>
        </div>
        <div class="form-group">
        <div class="col-md-4">
        </div>
        <div class="col-md-6">
        @if(!empty($user) && !empty($user->articals_memorandoms))
            @if( file_exists(public_path('/user/'.$user->articals_memorandoms) )  )
                <img  src="{{url('/user/'.$user->articals_memorandoms)}}" width="125" height="100" alt="{{ $user->articals_memorandoms }}"/>  
            @endif          
        @endif 
        </div>
            {!! $errors->first('articals_memorandoms', '<p class="help-block with-errors">:message</p>') !!}
        </div>

        <div class="form-group{{ $errors->has('cert_of_incumbency') ? ' has-error' : ''}}">
        <label for="cert_of_incumbency" class="col-md-4 control-label">Certificate of Incumbency</label> 
            <div class="col-md-6">
            {!! Form::file('cert_of_incumbency',null, ['class' => 'form-control']) !!} 
            </div>
        </div>
        <div class="form-group">
        <div class="col-md-4">
        </div>
        <div class="col-md-6">
        @if(!empty($user) && !empty($user->cert_of_incumbency))
            @if( file_exists(public_path('/user/'.$user->cert_of_incumbency) )  )
                <img  src="{{url('/user/'.$user->cert_of_incumbency)}}" width="125" height="100" alt="{{ $user->cert_of_incumbency }}"/>  
            @endif          
        @endif 
        </div>
            {!! $errors->first('cert_of_incumbency', '<p class="help-block with-errors">:message</p>') !!}
        </div>

        <div class="form-group{{ $errors->has('cert_of_good_standing') ? ' has-error' : ''}}">
        <label for="cert_of_good_standing" class="col-md-4 control-label">Certificate of Good Standing</label> 
            <div class="col-md-6">
            {!! Form::file('cert_of_good_standing',null, ['class' => 'form-control']) !!} 
            </div>
        </div>
        <div class="form-group">
        <div class="col-md-4">
        </div>
        <div class="col-md-6">
        @if(!empty($user) && !empty($user->cert_of_good_standing))
            @if( file_exists(public_path('/user/'.$user->cert_of_good_standing) )  )
                <img  src="{{url('/user/'.$user->cert_of_good_standing)}}" width="125" height="100" alt="{{ $user->cert_of_good_standing }}"/>  
            @endif          
        @endif 
        </div>
            {!! $errors->first('cert_of_good_standing', '<p class="help-block with-errors">:message</p>') !!}
        </div>

        @if(Auth::user()->can('access.fee_schedules.edit'))
           <!--  <div class="form-group{{ $errors->has('fee_schedules') ? ' has-error' : ''}}">
                <label for="fee_schedules" class="col-md-4 control-label">
                    Fee Schedules
                </label>
                <div class="col-md-6">
                    <select class='form-control select2' name="fee_schedules" id='fee_schedules'>
                        <option value="0">- Select Fee Schedule -</option>
                        <?php foreach($fee_schedules as $key=>$data) { ?>
                            <option value="<?php echo $key; ?>" <?php 
                                    if(!empty($user->fees_id) && $key == $user->fees_id) {
                                        echo 'selected="selected"'; 
                                    } ?> >
                                <?php echo $data; ?>
                            </option>
                        <?php } ?>
                    </select>
                    {!! $errors->first('fee_schedules','<p class="help-block">:message</p>') !!}
                </div>
            </div> -->
        @endif

        @if(Auth::user()->can('access.client_classes.edit'))
            <div class="form-group{{ $errors->has('client_classes') ? ' has-error' : ''}}">
                <label for="client_classes" class="col-md-4 control-label">
                    Client Classes
                </label>
                <div class="col-md-6">
                    <select class='form-control select2' name="client_classes" id='client_classes'>
                        <option value="0">- Select Client Class -</option>
                        <?php foreach($client_classes as $key=>$data) { ?>
                            <option value="<?php echo $key; ?>" <?php 
                                    if(!empty($user->client_class_id) && $key == $user->client_class_id) {
                                        echo 'selected="selected"'; 
                                    } ?> >
                                <?php echo $data; ?>
                            </option>
                        <?php } ?>
                    </select>
                    {!! $errors->first('client_classes','<p class="help-block">:message</p>') !!}
                </div>
            </div>
        @endif

        @if(Auth::user()->can('access.user.edit'))
            <div class="form-group{{ $errors->has('beneficial_owner') ? ' has-error' : ''}}">
                <label for="beneficial_owner" class="col-md-4 control-label">
                    Beneficial Owner
                </label>
                <div class="col-md-6">
                    <select class='form-control select2' name="beneficial_owner" id='beneficial_owner'>
                        <option value="0">- Select Beneficial Owner -</option>
                        <?php foreach($beneficial_owner as $key=>$data) { ?>
                            <option value="<?php echo $key; ?>" <?php 
                                    if(!empty($user->beneficial_owner_id) && $key == $user->beneficial_owner_id) {
                                        echo 'selected="selected"'; 
                                    } ?> >
                                <?php echo $data; ?>
                            </option>
                        <?php } ?>
                    </select>
                    {!! $errors->first('beneficial_owner','<p class="help-block">:message</p>') !!}
                </div>
            </div>
        @endif

        <div class="form-group">
            <div class="col-md-offset-4 col-md-4">
                {!! Form::submit(!empty($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
</div>

@section('footerExtra')
@push('js')
<script>
        $( document ).ready(function() {
            $("option[value='SU']").remove();
            $("#beneficial_owner option[value='1']").remove();
            var roles = $('#role').val();
            
            if(roles != '' || roles != null) {
                if(roles == "Installers"){
                    $(".installer_fields").show()  
                }else{
                    $(".installer_fields").hide()
                }
            }   
        });
        $("input[name='is_corporate']")
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
