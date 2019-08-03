<div class="form-group">

</div>


        <div class="pull-right hello-btn">
            {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
        </div>


@if($job->status == "Open" && $job->deposit_or_finance != "Not Completed")
<div class="form-group">
    {!! Form::label('installer', 'Installation Date', ['class' => 'col-md-2 col-sm-12 col-xs-12 control-label']) !!} 
    
    <div class="col-md-2">
            {!! Form::text('installation_date', null, ['id' => 'installation_date','class' => 'form-control']) !!}
            {{-- <input type="text" name="installation_date" value="" id="" /> --}}
           <input type="button" id="changedate" name="submit_date" value="Submit" class="btn btn-success"/>
    </div>
</div>
@endif


<div class="form-group{{ $errors->has('installer_id') ? ' has-error' : ''}}">
    {!! Form::label('installer', 'Select Installer', ['class' => 'col-md-2 col-sm-12 col-xs-12 control-label']) !!} 
    
    <div class="col-md-2">
        {!! Form::select('installer_id',$installers, isset($job->installer_id) ? $job->installer_id : '' ,['class' => 'form-control', 'id'=>'installer' ,  'required']) !!}
        
        {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class='row'>

        <div class='col-sm-3'>
                <div class='box bordered-box blue-border box-nomargin'>
                    <div class='box-header blue-background'>
                        <div class='title'>Designer</div>
                        <div class='actions'>
                            <a class="btn box-collapse btn-xs btn-link" href="#"><i></i></a>
                        </div>
                    </div>
                    <div class='box-content'>
                        <p><strong>Full Name</strong></p>
                        {!! Form::text('d[name]', isset($designer->name) ? $designer->name : '' , ['class' => 'form-control']) !!}
                        <p><strong>Phone</strong></p>
                        {!! Form::text('d[phone]',  isset($designer->phone) ? $designer->phone : '' , ['class' => 'form-control']) !!}
                        <p><strong>Address</strong></p>
                        {!! Form::text('d[address]',  isset($designer->address) ? $designer->address : '' , ['class' => 'form-control']) !!}
                        <p><strong>Suburb</strong></p>
                        {!! Form::text('d[suburb]',  isset($designer->suburb) ? $designer->suburb : '' , ['class' => 'form-control']) !!}
                        <p><strong>Postcode</strong></p>
                        {!! Form::text('d[post_code]',  isset($designer->post_code) ? $designer->post_code : '' , ['class' => 'form-control']) !!}
                        <p><strong>Accredition Number</strong></p>
                        {!! Form::text('d[accredition_number]',  isset($designer->accredition_number) ? $designer->accredition_number : '' , ['class' => 'form-control']) !!}
                        
                    </div>
                </div>
            </div>
            <div class='col-sm-3'>
                    <div class='box bordered-box blue-border box-nomargin'>
                        <div class='box-header blue-background'>
                            <div class='title'>Electrical</div>
                            <div class='actions'>
                                <a class="btn box-collapse btn-xs btn-link" href="#"><i></i></a>
                            </div>
                        </div>
                        <div class='box-content'>
                                <p><strong>Full Name</strong></p>
                                {!! Form::text('e[name]', isset($electrical->name) ? $electrical->name : '' , ['class' => 'form-control']) !!}
                                <p><strong>Phone</strong></p>
                                {!! Form::text('e[phone]', isset($electrical->phone) ? $electrical->phone : '', ['class' => 'form-control']) !!}
                                <p><strong>Address</strong></p>
                                {!! Form::text('e[address]', isset($electrical->address) ? $electrical->address : '', ['class' => 'form-control']) !!}
                                <p><strong>Suburb</strong></p>
                                {!! Form::text('e[suburb]', isset($electrical->suburb) ? $electrical->suburb : '', ['class' => 'form-control']) !!}
                                <p><strong>Postcode</strong></p>
                                {!! Form::text('e[post_code]', isset($electrical->post_code) ? $electrical->post_code : '' , ['class' => 'form-control']) !!}
                                <p><strong>Accredition Number</strong></p>
                                {!! Form::text('e[accredition_number]',  isset($electrical->accredition_number) ? $electrical->accredition_number : '', ['class' => 'form-control']) !!}
                                
                        </div>
                    </div>
                </div>

    <div class='col-sm-3'>
        <div class='row'>
            <div class='col-sm-12'>

                <div class='box bordered-box blue-border box-nomargin' style="min-height: 220px;">
                    <div class='box-header blue-background'>
                        <div class='title'>Number of STC</div>
                        <div class='actions'>
                            {{--  <a class="btn box-remove btn-xs btn-link" href="#"><i class='icon-remove'></i></a>  --}}
                            <a class="btn box-collapse btn-xs btn-link" href="#"><i></i></a>
                        </div>
                    </div>
                    <div class='box-content'>
                        <div class='row'>
                            <div class='col-sm-6'>
                                <p><strong>Number of STC</strong></p>
                                {!! Form::number('no_of_stc',null,['class' => 'form-control','readonly']) !!}
                            </div>
                            <div class='col-sm-6'>
                                <p><strong>PVD</strong></p>
                                {!! Form::text('pvd', null,['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                </div>

                <div class='box box-nomargin'>
                    <div class='box-header blue-background'>
                        <div class='title'>Connection Type</div>
                        <div class='actions'>
                            <a class="btn box-collapse btn-xs btn-link" href="#"><i></i></a>
                        </div>
                    </div>
                    <div class='box-content'>
                        <div class='row'>
                            <div class='col-sm-6'>
                                <p><strong>Connection Type</strong></p>
                                {!! Form::select('connection_type',\config('setting.connection_type'),null,['id'=>'connection_type' , 'class' => 'form-control']) !!}
                            </div>
                            <div class='col-sm-6'>
                                <p><strong>Alternative Supply</strong></p>
                                {!! Form::text('alternative_supply', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    

    {{-- <div class='col-sm-4'>
        <div class='box box-nomargin'>
            <div class='box-header blue-background'>
                <div class='title'>Connection Type</div>
                <div class='actions'>

                    <a class="btn box-collapse btn-xs btn-link" href="#"><i></i></a>
                </div>
            </div>
            <div class='box-content'>
                <div class='row'>
                    <div class='col-sm-6'>
                        <p><strong>Connection Type</strong></p>
                        {!! Form::select('connection_type',\config('setting.connection_type'),null,['id'=>'connection_type']) !!}
                    </div>
                    <div class='col-sm-6'>
                        <p><strong>Alternative Supply</strong></p>
                        {!! Form::text('alternative_supply', null) !!}
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class='col-sm-3'>
        <div class='box bordered-box blue-border box-nomargin'>
            <div class='box-header blue-background'>
                <div class='title'>Truck Appointment</div>
                <div class='actions'>
                    {{--  <a class="btn box-remove btn-xs btn-link" href="#"><i class='icon-remove'></i></a>  --}}
                    <a class="btn box-collapse btn-xs btn-link" href="#"><i></i></a>
                </div>
            </div>
            <div class='box-content'>
                <p>
                  <strong>Truck Appointment</strong>
                </p>
                <label>{!! Form::radio('truck_appointment', 'Yes', ['class' => 'form-control']) !!} Yes </label>
                <label>{!! Form::radio('truck_appointment', 'No', ['class' => 'form-control']) !!} No </label>
                <hr class='hr-normal'>
                <p>
                  <strong>LEI Name</strong>
                </p>
                {!! Form::text('lei_name', null, ['class' => 'form-control']) !!}
                <hr class='hr-normal'>
                <p><strong>Installation Comments/Description of Work</strong></p>
                {!! Form::textarea('installation_comments', null, ['class' => 'form-control']) !!}
                
            </div>
        </div>
    </div>

</div>

<div class='row'>
    <div class='col-sm-8'>
        <div class='box bordered-box blue-border box-nomargin'>
                <div class='box-header blue-background'>
                    <div class='title'>Supply Required</div>
                        <div class='actions'>
                            {{--  <a class="btn box-remove btn-xs btn-link" href="#"><i class='icon-remove'></i></a>  --}}
                            <a class="btn box-collapse btn-xs btn-link" href="#"><i></i></a>
                        </div>
                </div>
                <div class='box-content'>
                    <div class='row'>
                        <div class='col-sm-4'>
                            <p><strong>Supply Required</strong></p>  
                            {!! Form::select('supply_required',\config('setting.supply_required')) !!}
                            <hr class='hr-normal'>
        
                            <p><strong>Length of Overhead Cable</strong></p>  
                            {!! Form::number('length_of_overhead_cable', null, ['class' => 'form-control']) !!}
                            <hr class='hr-normal'>
                                    
                            <p><strong>Pit Installed</strong></p>  
                            <label>{!! Form::radio('pit_installed', 'Yes', ['class' => 'form-control']) !!} Yes</label>
                            <label>{!! Form::radio('pit_installed', 'No', ['class' => 'form-control']) !!} No </label>
                            <hr class='hr-normal'>
                                    
                            <p><strong>O/H to U/G Conversion</strong></p>  
                            <label>{!! Form::radio('oh_to_ug_conversion', 'Yes', ['class' => 'form-control']) !!} Yes </label>
                            <label>{!! Form::radio('oh_to_ug_conversion', 'No', ['class' => 'form-control']) !!} No </label>
                            <hr class='hr-normal'>

                            <p><strong>Inverter Phase</strong></p>  
                            <label>{!! Form::radio('inverter_phase', '1', ['class' => 'form-control']) !!} 1 </label>
                            <label>{!! Form::radio('inverter_phase', '2', ['class' => 'form-control']) !!} 2 </label>
                            <label>{!! Form::radio('inverter_phase', '3', ['class' => 'form-control']) !!} 3 </label>

                        </div>
                        <div class='col-sm-4'>
                             <?php
                            $meter_phase = array();
                            if(isset($job) && $job->meter_phase && $job->meter_phase != '' ) {
                                $meter_phase = json_decode($job->meter_phase);
                            }
                            
                            ?> 
                            <p><strong>Meter Phase</strong></p>
                             {{--  <label>{!! Form::checkbox('meter_phase[]','1', in_array(1,$meter_phase ) ) !!} 1 </label>
                            <label>{!! Form::checkbox('meter_phase[]','2', in_array(2,$meter_phase ) ) !!} 2 </label>
                            <label>{!! Form::checkbox('meter_phase[]','3', in_array(3,$meter_phase ))  !!} 3</label>   --}}
                            <label>{!! Form::checkbox('meter_phase[]','Hotwater', in_array('Hotwater',$meter_phase )) !!} Hotwater </label>
                            <label>{!! Form::checkbox('meter_phase[]','Floor Heating', in_array('Floor Heating',$meter_phase )) !!} Floor Heating </label>
                            
                            <hr class='hr-normal'>

                            <p><strong>Number of Phases</strong></p>  
                            <label>{!! Form::radio('no_of_phases', '1', ['class' => 'form-control']) !!} 1 </label>
                            <label>{!! Form::radio('no_of_phases', '2', ['class' => 'form-control']) !!} 2 </label>
                            <label>{!! Form::radio('no_of_phases', '3', ['class' => 'form-control']) !!} 3 </label>
                            <hr class='hr-normal'>

                            <p><strong>Phase Size</strong></p>  
                            {!! Form::number('phase_size', null, ['class' => 'form-control']) !!}
                            <hr class='hr-normal'>
                                            
                            <p><strong>Max Demand Installation</strong></p>  
                            <label>{!! Form::checkbox('max_demand_installation', 'New',(isset($job->max_demand_installation) && $job->max_demand_installation != '' && $job->max_demand_installation == 'New') ? true : false) !!} New </label>
                            <label>{!! Form::checkbox('max_demand_installation', 'Existing',(isset($job->max_demand_installation) && $job->max_demand_installation != '' && $job->max_demand_installation == 'Existing') ? true : false) !!} Existing </label>
                            <hr class='hr-normal'>


                            <p><strong>Seperate Inverter </strong></p> 
                            {!! Form::select('seperate_inverter', \config('setting.seperate_inverter')  ,(isset($job->seperate_inverter) && $job->seperate_inverter != '' ) ? $job->seperate_inverter : '' ,['class' => 'form-control']) !!}
                                    
                               
                        </div>
                        <div class="col-md-4">
                            <p> <strong>Max Amps per Phase</strong></p>  
                            {!! Form::number('max_amp_per_phase', null, ['class' => 'form-control']) !!}
                            <hr class='hr-normal'>
                                    
                            <p><strong>Demands per Phase</strong></p>  
                            {!! Form::number('demands_amp_per_phase', null, ['class' => 'form-control']) !!}
                            <hr class='hr-normal'>
                                    
                            <p><strong>Max Demand of Total Site</strong></p>  
                            {!! Form::text('max_demand_of_total_site', null, ['class' => 'form-control']) !!}
                            <hr class='hr-normal'>
                                     
                            <p><strong>SCCD Installed</strong></p>  
                            <label>{!! Form::radio('sccd_installed', 'yes', ['class' => 'form-control']) !!} Yes </label>
                            <label>{!! Form::radio('sccd_installed', 'no', ['class' => 'form-control']) !!} No </label>
                            <hr class='hr-normal'>
                                    
                            <p><strong>SCCD Amps</strong></p>  
                            {!! Form::number('sccd_amps', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>
        </div>
    </div>
        {{--
        <div class='col-sm-4'>
            <div class='box' style='margin-bottom: 0;'>
                <div class='row'>
                    <div class='col-sm-12'>
                        <div class='box bordered-box blue-border box-nomargin'>
                            <div class='box-header blue-background'>
                                <div class='title'>Number of STC</div>
                                <div class='actions'>
                                   
                                    <a class="btn box-collapse btn-xs btn-link" href="#"><i></i></a>
                                </div>
                            </div>
                            <div class='box-content'>
                                <p><strong>Number of STC</strong></p>
                                {!! Form::select('no_of_stc',['1 Year'=>'1 Year','5 Year'=>'5 Year','13 Year' => '13 Year'],(isset($job->no_of_stc) && $job->no_of_stc != '' ) ? $job->no_of_stc : '' ,['class' => 'form-control']) !!}
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        --}}

        <div class='col-sm-4'>
            <div class='box' style='margin-bottom: 0;'>
                <div class='row'>
                    <div class='col-sm-12'>
                        <div class='box bordered-box blue-border box-nomargin'>
                            <div class='box-header blue-background'>
                                <div class='title'>Access</div>
                                <div class='actions'>
                                    {{--  <a class="btn box-remove btn-xs btn-link" href="#"><i class='icon-remove'></i></a>  --}}
                                    <a class="btn box-collapse btn-xs btn-link" href="#"><i></i></a>
                                </div>
                            </div>
                            <div class='box-content'>

                                <p><strong>Access to Meter</strong></p>  
                                <label>{!! Form::radio('access_to_meter', 'Yes',true ) !!} Yes </label>
                                <label>{!! Form::radio('access_to_meter', 'No',null) !!} No </label>
                                <hr class='hr-normal'> 
                                <p><strong>Access to VPI Lock</strong></p>  
                                <label>{!! Form::radio('access_to_vpi_lock', 'Yes', null ) !!} Yes </label>
                                <label>{!! Form::radio('access_to_vpi_lock', 'No', true) !!} No </label>
                                <hr class='hr-normal'>
                                <p><strong>Access Notes</strong></p>  
                                {!! Form::textarea('access_notes', null, ['class' => 'form-control']) !!}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        
</div>


<div class='row'>
    <div class='col-sm-4'>
        <div class='box bordered-box blue-border box-nomargin'>
            <div class='box-header blue-background'>
                <div class='title'>Solar Capacity Installed</div>
                <div class='actions'>
                    {{--  <a class="btn box-remove btn-xs btn-link" href="#"><i class='icon-remove'></i></a>  --}}
                    <a class="btn box-collapse btn-xs btn-link" href="#"><i></i></a>
                 </div>
            </div>
            <div class='box-content'>
                <p>
                    <strong>Total Solar Capacity Installed</strong>
                </p>  
                {!! Form::number('solar_capacity_installed', null, ['class' => 'form-control solar_capacity_installed', 'step' => 'any' ]) !!}

                <hr class='hr-normal'>
                <p>
                    <strong>Total Solar Capacity Phase A Installed</strong>
                </p>     
                {!! Form::number('solar_capacity_installed_phase_a', null, ['class' => 'form-control']) !!}
                <hr class='hr-normal'>
                <p>
                        <strong>Total Solar Capacity Phase B Installed</strong>
                </p>
                {!! Form::number('solar_capacity_installed_phase_b', null, ['class' => 'form-control']) !!}
                <hr class='hr-normal'>
                <p>
                    <strong>Total Solar Capacity Phase C Installed</strong>
                </p>
                {!! Form::number('solar_capacity_installed_phase_c', null, ['class' => 'form-control']) !!}
                <hr class='hr-normal'>

            </div>
        </div>
    </div>

    <div class='col-sm-4' id="solar-existing-box">
        <div class='box bordered-box blue-border box-nomargin'>
            <div class='box-header blue-background'>
                <div class='title'>Solar Capacity Existing</div>
                    <div class='actions'>
                        {{--  <a class="btn box-remove btn-xs btn-link" href="#"><i class='icon-remove'></i></a>  --}}
                        <a class="btn box-collapse btn-xs btn-link" href="#"><i></i> </a>
                    </div>
            </div>
            <div class='box-content'>

                <p><strong>Total Solar Capacity Existing</strong></p>
                {!! Form::number('solar_capacity_existing', null, ['class' => 'form-control']) !!}
                <hr class='hr-normal'>
                      
                <p><strong>Total Solar Capacity Phase A Existing</strong></p>
                {!! Form::number('solar_capacity_existing_phase_a', null, ['class' => 'form-control']) !!}
                <hr class='hr-normal'>
                      
                <p> <strong>Total Solar Capacity Phase B Existing</strong></p>
                {!! Form::number('solar_capacity_existing_phase_b', null, ['class' => 'form-control']) !!}
                <hr class='hr-normal'>
                      
                <p><strong>Total Solar Capacity Phase C Existing</strong></p>
                {!! Form::number('solar_capacity_existing_phase_c', null, ['class' => 'form-control']) !!}
                <hr class='hr-normal'>
      
            </div>
        </div>
    </div>

    <div class='col-sm-4' id="solar-removed-box">
        <div class='box bordered-box blue-border box-nomargin'>
                <div class='box-header blue-background'>
                    <div class='title'>Solar Capacity Removed</div>
                        <div class='actions'>
                            {{--  <a class="btn box-remove btn-xs btn-link" href="#"><i class='icon-remove'></i></a>  --}}
                            <a class="btn box-collapse btn-xs btn-link" href="#"><i></i></a>
                        </div>
                </div>
                <div class='box-content'>
                    <p><strong>Total Solar Capacity Removed</strong></p>
                    {!! Form::number('solar_capacity_removed', null, ['class' => 'form-control']) !!}
                    <hr class='hr-normal'>
                          
                    <p><strong>Total Solar Capacity Phase A Removed</strong></p>
                    {!! Form::number('solar_capacity_removed_phase_a', null, ['class' => 'form-control']) !!}
                    <hr class='hr-normal'>
                          
                    <p><strong>Total Solar Capacity Phase B Removed</strong></p>
                    {!! Form::number('solar_capacity_removed_phase_b', null, ['class' => 'form-control']) !!}
                    <hr class='hr-normal'>
                          
                    <p><strong>Total Solar Capacity Phase C Removed</strong></p>
                    {!! Form::number('solar_capacity_removed_phase_c', null, ['class' => 'form-control']) !!}
                    <hr class='hr-normal'>
          
                </div>
        </div>
    </div>

</div>

<div class='row'>
    <div class='col-sm-4'>
        <div class='box bordered-box blue-border box-nomargin'>
            <div class='box-header blue-background'>
                <div class='title'>Battery Capacity Installed</div>
                <div class='actions'>
                    {{--  <a class="btn box-remove btn-xs btn-link" href="#"><i class='icon-remove'></i></a>  --}}
                    <a class="btn box-collapse btn-xs btn-link" href="#"><i></i></a>
                </div>
            </div>
            <div class='box-content'>
                <p>
                    <strong>Total Battery Capacity Installed</strong>
                </p>
                {!! Form::number('battery_capacity_installed', null, ['class' => 'form-control']) !!}
                <hr class='hr-normal'>

                <p>
                    <strong>Total Battery Capacity Phase A Installed</strong>
                </p>
                {!! Form::number('battery_capacity_installed_phase_a', null, ['class' => 'form-control']) !!}
                <hr class='hr-normal'>

                <p>
                   <strong>Total Battery Capacity Phase B Installed</strong>
                </p>
                {!! Form::number('battery_capacity_installed_phase_b', null, ['class' => 'form-control']) !!}
                <hr class='hr-normal'>

                <p>
                    <strong>Total Battery Capacity Phase C Installed</strong>
                </p>
                {!! Form::number('battery_capacity_installed_phase_c', null, ['class' => 'form-control']) !!}
                <hr class='hr-normal'>

            </div>
        </div>
    </div>

    <div class='col-sm-4' id="battery-existing-box">
        <div class='box bordered-box blue-border box-nomargin'>
            <div class='box-header blue-background'>
                <div class='title'>Battery Capacity Existing</div>
                    <div class='actions'>
                        {{--  <a class="btn box-remove btn-xs btn-link" href="#"><i class='icon-remove'></i> </a>  --}}
                        <a class="btn box-collapse btn-xs btn-link" href="#"><i></i></a>
                    </div>
            </div>
            <div class='box-content'>
                <p><strong>Total Battery Capacity Existing</strong></p>
                {!! Form::number('battery_capacity_existing', null, ['class' => 'form-control']) !!}
                <hr class='hr-normal'>
                     
                <p><strong>Total Battery Capacity Phase A Existing</strong></p>
                {!! Form::number('battery_capacity_existing_phase_a', null, ['class' => 'form-control']) !!}
                <hr class='hr-normal'>
                      
                <p><strong>Total Battery Capacity Phase B Existing</strong></p>
                {!! Form::number('battery_capacity_existing_phase_b', null, ['class' => 'form-control']) !!}
                <hr class='hr-normal'>
                      
                <p><strong>Total Battery Capacity Phase C Existing</strong></p>
                {!! Form::number('battery_capacity_existing_phase_c', null, ['class' => 'form-control']) !!}
                <hr class='hr-normal'>
      
            </div>
        </div>
    </div>

    <div class='col-sm-4' id="battery-removed-box">
        <div class='box bordered-box blue-border box-nomargin'>
            <div class='box-header blue-background'>
                <div class='title'>Battery Capacity Removed</div>
                    <div class='actions'>
                        {{--  <a class="btn box-remove btn-xs btn-link" href="#"><i class='icon-remove'></i></a>  --}}
                        <a class="btn box-collapse btn-xs btn-link" href="#"><i></i></a>
                    </div>
            </div>
            <div class='box-content'>
                <p><strong>Total Battery Capacity Removed</strong></p>
                {!! Form::number('battery_capacity_removed', null, ['class' => 'form-control']) !!}
                <hr class='hr-normal'>
                          
                <p><strong>Total Battery Capacity Phase A Removed</strong></p>
                {!! Form::number('battery_capacity_removed_phase_a', null, ['class' => 'form-control']) !!}
                <hr class='hr-normal'>
                          
                <p><strong>Total Battery Capacity Phase B Removed</strong></p>
                {!! Form::number('battery_capacity_removed_phase_b', null, ['class' => 'form-control']) !!}
                <hr class='hr-normal'>
                          
                <p><strong>Total Battery Capacity Phase C Removed</strong></p>
                {!! Form::number('battery_capacity_removed_phase_c', null, ['class' => 'form-control']) !!}
                <hr class='hr-normal'>
            </div>
        </div>
    </div>

</div>

<div class='row'>
    <div class='col-sm-4'>
        <div class='box bordered-box blue-border box-nomargin'>
            <div class='box-header blue-background'>
                <div class='title'>Battery / Solar</div>
                <div class='actions'>
                    {{--  <a class="btn box-remove btn-xs btn-link" href="#"><i class='icon-remove'></i></a>  --}}
                    <a class="btn box-collapse btn-xs btn-link" href="#"><i></i></a>
                </div>
            </div>
            <div class='box-content'>
                <div class='row'>
                    <div class='col-sm-6'>
                        <p><strong>Battery</strong></p>
                        <label>{!! Form::radio('battery_storage', 'Yes',null) !!} Yes </label>
                        <label>{!! Form::radio('battery_storage', 'No' ,true) !!} No </label>
                    </div>
                    <div class='col-sm-6'>
                        <p><strong>Solar</strong></p>
                        <label>{!! Form::radio('solar', 'Yes' ,true ) !!} Yes </label>
                        <label>{!! Form::radio('solar', 'No',null) !!} No </label>
                    </div>
                </div>
                <hr class='hr-normal'>
                <div class='row'>
                    <div class='col-sm-6'>
                        <p><strong>Number of Panels</strong></p>
                        <label>{!! Form::radio('no_of_panels', 'Yes') !!} Yes </label>
                        <label>{!! Form::radio('no_of_panels', 'No' ,  true) !!} No </label> 
                    </div>
                    <div class='col-sm-6'>
                        {!! Form::number('no_of_panels_value', null, ['class' => 'form-control','id'=>'no_of_panels_value']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class='col-sm-4'>
        <div class='box bordered-box blue-border box-nomargin'>
            <div class='box-header blue-background'>
                <div class='title'>Customer Instruction</div>
                <div class='actions'>
                    {{--  <a class="btn box-remove btn-xs btn-link" href="#"><i class='icon-remove'></i></a>  --}}
                    <a class="btn box-collapse btn-xs btn-link" href="#"><i></i></a>
                </div>
            </div>
            <div class='box-content'>
                <p><strong>Manual Provided to Customer</strong></p>
                <label>{!! Form::radio('manual_to_customer', 'Yes') !!} Yes </label>
                <label>{!! Form::radio('manual_to_customer', 'No' ,  true) !!} No </label>
                <hr class='hr-normal'>

                <p><strong>Instructed Customer</strong></p>
                <label>{!! Form::radio('instructed_customer', 'Yes') !!} Yes </label>
                <label>{!! Form::radio('instructed_customer', 'No', true) !!} No </label>
            </div>
        </div>
    </div>

    <div class='col-sm-4'>
        <div class='box' style='margin-bottom: 0;'>
            <div class='row'>
                <div class='col-sm-12'>
                    <div class='box bordered-box blue-border box-nomargin'>
                        <div class='box-header blue-background'>
                            <div class='title'>Export Limit</div>
                            <div class='actions'>
                                <a class="btn box-collapse btn-xs btn-link" href="#"><i></i></a>
                            </div>
                        </div>
                        <div class='box-content'>
                                <p><strong>Export Limit</strong></p>
                                <label>{!! Form::radio('export_limit', 'Yes', ['class' => 'export_limit form-control']) !!} Yes </label>
                                <label>{!! Form::radio('export_limit', 'No', ['class' => 'export_limit form-control']) !!} No </label>
                                <hr class='hr-normal'>
                                {!! Form::number('export_limit_value', null, ['class' => 'form-control','id'=>'export_limit_value']) !!}

                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>

    

    {{--  <div class='col-sm-6'>
        <div class='box bordered-box blue-border box-nomargin'>
            <div class='box-header blue-background'>
                <div class='title'>Installation comments</div>
                <div class='actions'>
                    <--!  <a class="btn box-remove btn-xs btn-link" href="#"><i class='icon-remove'></i></a>  -->
                    <a class="btn box-collapse btn-xs btn-link" href="#"><i></i></a>
                </div>
            </div>
            <div class='box-content'>
                <p><strong>Installation Comments/Description of Work</strong></p>
                {!! Form::textarea('installation_comments', null, ['class' => 'form-control']) !!}
                <hr class='hr-normal'>

                <p><strong>Number of Panels</strong></p>
                <label>{!! Form::radio('no_of_panels', 'Yes') !!} Yes </label>
                <label>{!! Form::radio('no_of_panels', 'No' ,  true) !!} No </label>
                <hr class='hr-normal'>
                {!! Form::number('no_of_panels_value', null, ['class' => 'form-control','id'=>'no_of_panels_value']) !!}

            </div>
        </div>
    </div>  --}}

</div>

<div class='row'>
    <div class='col-sm-4'>
        <div class='box bordered-box blue-border box-nomargin'>
            <div class='box-header blue-background'>
                <div class='title'>Battery Storage</div>
                <div class='actions'>
                    {{--  <a class="btn box-remove btn-xs btn-link" href="#"><i class='icon-remove'></i></a>  --}}
                    <a class="btn box-collapse btn-xs btn-link" href="#"><i></i></a>
                </div>
            </div>
            <div class='box-content'>
                <p><strong>Battery Storage Source</strong></p>
                <label>{!! Form::checkbox('battery_storage_source','AC', (isset($job->battery_storage_source) && $job->battery_storage_source != '' && $job->battery_storage_source == 'AC') ? true : false) !!} AC </label>
                <label>{!! Form::checkbox('battery_storage_source','DC',(isset($job->battery_storage_source) && $job->battery_storage_source != '' && $job->battery_storage_source == 'DC') ? true : false) !!} DC </label>
                <label>{!! Form::checkbox('battery_storage_source','No', (isset($job->battery_storage_source) && $job->battery_storage_source != '' && $job->battery_storage_source == 'No') ? true : false) !!} No </label>
                <hr class='hr-normal'>

                <p><strong>Embedded Generator Installed</strong></p>
                <label>{!! Form::radio('embd_gen_installed', 'Yes', ['class' => 'form-control']) !!} Yes </label>
                <label>{!! Form::radio('embd_gen_installed', 'No', ['class' => 'form-control']) !!} No </label>
                <hr class='hr-normal'>

                <p><strong>Existing Rating</strong></p>
                {!! Form::number('existing_rating', null, ['class' => 'form-control']) !!}
                <hr class='hr-normal'>

                <p><strong>Existing Export</strong></p>
                {!! Form::text('existing_export', null, ['class' => 'form-control']) !!}
                <hr class='hr-normal'>

                <p><strong>Pre Approval Reference Number</strong></p>
                {!! Form::text('pre_approval_ref_no', null, ['class' => 'form-control']) !!}

            </div>
        </div>
    </div>

    <div class='col-sm-4'>
        <div class='box bordered-box blue-border box-nomargin'>
            <div class='box-header blue-background'>
                <div class='title'>Connection Time</div>
                <div class='actions'>
                    {{--  <a class="btn box-remove btn-xs btn-link" href="#"><i class='icon-remove'></i></a>  --}}
                    <a class="btn box-collapse btn-xs btn-link" href="#"><i></i></a>
                </div>
            </div>
            <div class='box-content'>
                <p><strong>Time for Inverter to Disconnect</strong></p>
                {!! Form::text('inverter_time_disconnect',isset($job->inverter_time_disconnect) ? $job->inverter_time_disconnect : '2',['class' => 'form-control']) !!}
                <hr class='hr-normal'>

                <p><strong> Disconnect Test</strong></p>
                <label>{!! Form::radio('disconnect_test', 'Pass', true) !!} Pass </label>
                <label>{!! Form::radio('disconnect_test', 'Fail',null ) !!} Fail </label>
                <hr class='hr-normal'>
                
                <p><strong>Time for Inverter to Reconnect</strong></p>
                {!! Form::text('inverter_time_reconnect', isset($job->inverter_time_reconnect) ? $job->inverter_time_reconnect : '60', ['class' => 'form-control']) !!}
                <hr class='hr-normal'>

                <p><strong>Reconnect Test</strong></p>
                <label>{!! Form::radio('reconnect_test', 'Pass',true) !!} Pass </label>
                <label>{!! Form::radio('reconnect_test', 'Fail', null) !!} Fail </label>
                <hr class='hr-normal'>

                <p><strong>Export Test SOP 33-06</strong></p>
                <label>{!! Form::radio('export_test_sop_3306', 'Yes', null) !!} Yes </label>
                <label>{!! Form::radio('export_test_sop_3306', 'No', true) !!} No </label>
                <hr class='hr-normal'>

                <p><strong>Export Test Sheet Attached</strong></p>
                <label>{!! Form::radio('export_test_sheet_attached', 'Yes',null ) !!} Yes </label>
                <label>{!! Form::radio('export_test_sheet_attached', 'No',true) !!} No </label>

            </div>
        </div>
    </div>

    <div class='col-sm-4'>
        <div class='box bordered-box blue-border box-nomargin'>
            <div class='box-header blue-background'>
                <div class='title'>Multiple STC</div>
                <div class='actions'>
                    {{--  <a class="btn box-remove btn-xs btn-link" href="#"><i class='icon-remove'></i></a>  --}}
                    <a class="btn box-collapse btn-xs btn-link" href="#"><i></i></a>
                </div>
            </div>
            <div class='box-content'>
                <p><strong>Replacing</strong></p>
                <label>{!! Form::radio('replacing', 'Yes', ['class' => 'form-control']) !!} Yes </label>
                <label>{!! Form::radio('replacing', 'No', ['class' => 'form-control']) !!} No </label>
                <hr class='hr-normal'>

                <p><strong>Number of Replacing</strong></p>
                {!! Form::number('no_of_replacing', null, ['class' => 'form-control']) !!}
                <hr class='hr-normal'>

                <p><strong>Additional</strong></p>
                <label>{!! Form::radio('additional', 'Yes', ['class' => 'form-control']) !!} Yes </label>
                <label>{!! Form::radio('additional', 'No', ['class' => 'form-control']) !!} No </label>
                <hr class='hr-normal'>

                <p><strong>Number of Additional</strong></p>
                {!! Form::number('no_of_additional', null, ['class' => 'form-control']) !!}
                <hr class='hr-normal'>

                <p><strong>More than One System</strong></p>
                <label>{!! Form::radio('more_than_one_system', 'Yes', ['class' => 'form-control']) !!} Yes </label>
                <label>{!! Form::radio('more_than_one_system', 'No', ['class' => 'form-control']) !!} No </label>
                <hr class='hr-normal'>

                <p><strong>Location of Other System</strong></p>
                {!! Form::text('loc_of_other_system', null, ['class' => 'form-control']) !!}

            </div>
        </div>
    </div>

</div>

<div class="row">
    {{-- <div class='col-sm-4'>
        <div class='box' style='margin-bottom: 0;'>
            <div class='row'>
                <div class='col-sm-12'>
                    <div class='box bordered-box blue-border box-nomargin'>
                        <div class='box-header blue-background'>
                            <div class='title'>Capacity</div>
                            <div class='actions'>
                                <a class="btn box-collapse btn-xs btn-link" href="#"><i></i></a>
                            </div>
                        </div>
                        <div class='box-content'>
                                <p><strong>Capacity Phase A</strong></p>
                                {!! Form::number('capacity_phase_a', null, ['class' => 'form-control']) !!}
                                <hr class='hr-normal'>

                                <p><strong>Capacity Phase B</strong></p>
                                {!! Form::number('capacity_phase_b', null, ['class' => 'form-control']) !!}
                                <hr class='hr-normal'>

                                <p><strong>Capacity Phase C</strong></p>
                                {!! Form::number('capacity_phase_c', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div> --}}

    {{-- <div class='col-sm-4'>
        <div class='box' style='margin-bottom: 0;'>
            <div class='row'>
                <div class='col-sm-12'>
                    <div class='box bordered-box blue-border box-nomargin'>
                        <div class='box-header blue-background'>
                            <div class='title'>Export Limit</div>
                            <div class='actions'>
                                <a class="btn box-collapse btn-xs btn-link" href="#"><i></i></a>
                            </div>
                        </div>
                        <div class='box-content'>
                                <p><strong>Export Limit</strong></p>
                                <label>{!! Form::radio('export_limit', 'Yes', ['class' => 'export_limit form-control']) !!} Yes </label>
                                <label>{!! Form::radio('export_limit', 'No', ['class' => 'export_limit form-control']) !!} No </label>
                                <hr class='hr-normal'>
                                {!! Form::number('export_limit_value', null, ['class' => 'form-control','id'=>'export_limit_value']) !!}

                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div> --}}
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>

@push('js')
<script>
        $("input[name='max_demand_installation']:checkbox").click(function() {
            if ($(this).is(":checked")) {
                var group = "input:checkbox[name='" + $(this).attr("name") + "']";
                $(group).prop("checked", false);
                $(this).prop("checked", true);
            } else {
                $(this).prop("checked", false);
            }
        });
        $("input[name='battery_storage_source']:checkbox").click(function() {
            if ($(this).is(":checked")) {
                var group = "input:checkbox[name='" + $(this).attr("name") + "']";
                $(group).prop("checked", false);
                $(this).prop("checked", true);
            } else {
                $(this).prop("checked", false);
            }
        });
        

        $( document ).ready(function() {
            var export_limit = $('input[name=export_limit]:checked').val();
            if(export_limit == "No"){
                $("#export_limit_value").hide()
            }else{
                $("#export_limit_value").show() 
            } 
            
            var no_of_panels = $('input[name=no_of_panels]:checked').val();
            if(no_of_panels == "No"){
                $("#no_of_panels_value").hide()
            }else{
                $("#no_of_panels_value").show() 
            } 

            var connection_type = $('#connection_type').val();
            if(connection_type == "New"){
                $("#solar-removed-box").hide()
                $("#solar-existing-box").hide()
                $("#battery-removed-box").hide()
                $("#battery-existing-box").hide()
            }else{
                $("#solar-removed-box").show()
                $("#solar-existing-box").show()
                $("#battery-removed-box").show()
                $("#battery-existing-box").show()
            } 
            
        });
    
        $('input[name=no_of_panels]').on('change',function(){
            var no_of_panels = $(this).val();
            if(no_of_panels == "No"){
                   $("#no_of_panels_value").hide();
            }else{
                $("#no_of_panels_value").show();
            }
        });
        $('input[name=export_limit]').on('change',function(){
            var export_limit = $(this).val();
            switch(export_limit){
            case "Yes":
                $("#export_limit_value").show()
                break;
            case "No":
                $("#export_limit_value").hide()
                break;
            default:
                $("#export_limit_value").hide()
           }
       });

       $('#connection_type').on('change',function(){
        var connection_type = $(this).val();
        if(connection_type == "New"){
            $("#solar-removed-box").hide()
            $("#solar-existing-box").hide()
            $("#battery-removed-box").hide()
            $("#battery-existing-box").hide()
        }else{
            $("#solar-removed-box").show()
            $("#solar-existing-box").show()
            $("#battery-removed-box").show()
            $("#battery-existing-box").show()
        } 
    });

    $(function () {
        $('#installation_date').datetimepicker({
            format: 'DD/MM/YYYY',
            minDate: new Date(),
            
        });
    })

    $('#changedate').click(function(){
        var date = $('#installation_date').val();
        var id = {{$job->id}};
        url = "{{url('/admin/change_date')}}/" + id ;
        var r = confirm("Do you want to set the Installation Date ?");
        if (r == true) {
            $.ajax({
                type: "post",
                data: { date },
                url: url ,
                headers: {
                    "X-CSRF-TOKEN": "<?php echo csrf_token();?>"
                },
                success: function (data) {
                    toastr.success('Installation Date Set Successfully', data.message)
                },
                error: function (xhr, status, error) {
                    var erro = ajaxError(xhr, status, error);
                    toastr.error('Action Not Procced!',erro)
                }
            });
        }
   });
    
    
   

</script>
@endpush