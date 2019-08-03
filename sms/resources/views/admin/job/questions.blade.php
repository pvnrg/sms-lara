@extends('layouts.backend')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="box bordered-box blue-border">
      <div class="box-header blue-background">
        <div class="title">
          <i class="icon-circle-blank"></i> Job Questionarie #{{ $job->id }}
        </div>

      </div>
      <div class="box-content ">
        <button class="btn btn-warning btn-sm question-no"></button></br></br>

        
        <form method="post" action="{{ url('admin/questions/'.$job->id.'/update') }}" id="questionForm">

          {{ csrf_field() }}

        <div class="col-md-12 col-sm-12 col-xs-12">

          <div id="Q-1" class="tab">
            
            <p><label>Has the Certificate of Electrical Safety been logged? * :  </label> {!! Form::select('electrical_safety',['Yes'
              => 'Yes','No' => 'No'],(isset($job->electrical_safety)
              && $job->electrical_safety != '' ) ? $job->electrical_safety : '',['oninput' => "this.className=''" ]) !!} </p>

            <p><label>CES Number  * :  </label> <input type="text" oninput="this.className=''" name="ces_number" value="{{ \App\Setting::give_value_of('CES_Number')  }}" disabled/></p>
            <p><label>CES Completion Date * :  </label> <input type="text" id="ces_completion_date" oninput="this.className=''" name="ces_completion_date" value="{{ $job->ces_completion_date or null }}" /></p>

          </div>

          <div id="Q-2" class="tab">

            <p><label>Site Type?  * : </label> {!! Form::select('property_type',\config('setting.property_type'),(isset($customer->property_type) && $customer->property_type != '' ) ? $customer->property_type : '',['oninput' => "this.className=''" ]) !!} </p>

            <p><label>Retailer * : </label> {!! Form::select('provider_id', $providers ,(isset($customer->provider_id) && $customer->provider_id != '' ) ? $customer->provider_id : '' ,['oninput' => "this.className=''" ,'required' ]) !!}</p>

            <p><label>Distributor * : </label> {!! Form::select('electrical_distributer', \config('setting.electrical_distributer'),(isset($customer->electrical_distributer)
              && $customer->electrical_distributer != '' ) ? $customer->electrical_distributer : '', [ 'oninput' => "this.className=''"
              ]) !!}</p>

            <p> <label>Customer or Business Name * : </label> {!! Form::text('bussiness_name', isset($customer->name) ? $customer->name : null , ['oninput' => "this.className=''"]) !!} </p>

            <p><label> Ph # / Mb  # : </label> {!! Form::text('phone_mobile', isset($customer->phone_mobile) ? $customer->phone_mobile : null , [ 'oninput' => "this.className=''" ,'required'])
              !!} </p>

            <p><label> Address : </label> 
              {!! Form::text('unit', isset($customer->unit) ? $customer->unit : null, [ 'oninput' => "this.className=''" ,'required','placeholder' => 'Unit']) !!}
              {!! Form::text('street_number', isset($customer->street_number) ? $customer->street_number : null, [ 'oninput' => "this.className=''" ,'required','placeholder' => 'Street Number' ]) !!}
              {!! Form::text('street_name', isset($customer->street_name) ? $customer->street_name : null, [ 'oninput' => "this.className=''" ,'required','placeholder' => 'Street Name' ]) !!}
              {!! Form::text('post_code', isset($customer->post_code) ? $customer->post_code : null, [ 'oninput' => "this.className=''" ,'required','placeholder' => 'Post Code']) !!}
              {!! Form::text('state', isset($customer->state) ? $customer->state : null, [ 'oninput' => "this.className=''" ,'required','placeholder' => 'State']) !!}
              {!! Form::text('suburb', isset($customer->suburb) ? $customer->suburb : null, [ 'oninput' => "this.className=''" ,'required','placeholder' => 'Suburb']) !!}
            </p>

            <p><label> Existing Meter Number : </label> {!! Form::text('meter_number', isset($customer->meter_number) ? $customer->meter_number : null , [ 'oninput' => "this.className=''"
              ]) !!} </p>

          </div>

          <div id="Q-3" class="tab">

            <p><label>Has contact been made with Projects Group? * : </label> {!! Form::select('contact_project_group',['Yes'
              => 'Yes','No' => 'No'],(isset($job->contact_project_group)
              && $job->contact_project_group != '' ) ? $job->contact_project_group : '',['oninput' => "this.className=''", 'id' => 'contact_project_group' ]) !!} </p>

            <p class="project_number_class" ><label>Project Number  * : </label> <input type="text" oninput="this.className=''" name="project_number" id="project_number" value="{{ $job->project_number or null }}" /></p>

            <p><label>Name of person at Distributors Project Group to Contact * : </label> <input type="text" oninput="this.className=''"
                name="contact_project_group_name" value="{{ $job->contact_project_group_name or null  }}" /></p>

          </div>

          <div id="Q-4" class="tab">

            <p><label>Description of all works * : </label> {!! Form::textarea('installation_comments', isset($job->installation_comments) && ($job->installation_comments != "") ? $job->installation_comments : "New Solar System Installed" ,['oninput' => "this.className=''"]) !!} </p>
          </div>

          <div id="Q-5" class="tab">

            <p><label>Premise Type * : </label> {!! Form::select('premise_type',\config('setting.premise_type'),(isset($job->premise_type)
              && $job->premise_type != '' ) ? $job->premise_type : '',['oninput' =>
              "this.className=''" ]) !!} </p>

           <p><label> Public Land : </label> <label>{!! Form::radio('public_land', 'Yes', isset($job->public_land) && $job->public_land ==  'Yes' ? true : null ,['oninput' => "this.className=''"]) !!} Yes </label>

            <label>{!! Form::radio('public_land', 'No', (isset($job->public_land) && $job->public_land == 'No') ||  $job->public_land == ""  ? true : null ,['oninput' => "this.className=''"]) !!} No </label></p>

          <p><label> Is EPV required  : </label> <label>{!! Form::radio('epv', 'Yes', isset($job->epv) && $job->epv ==  'Yes' ? true : null ,['oninput' => "this.className=''"]) !!} Yes </label>

              <label>{!! Form::radio('epv', 'No', (isset($job->epv) && $job->epv == 'No' ) ||  $job->epv == ""  ? true : null  , ['oninput' => "this.className=''"]) !!} No </label></p>

          <p><label> Is Traffic Control Required   : </label> <label>{!! Form::radio('traffic_control', 'Yes', isset($job->traffic_control) && $job->traffic_control ==  'Yes' ? true : null,['oninput' => "this.className=''"]) !!} Yes </label>

                <label>{!! Form::radio('traffic_control', 'No', (isset($job->traffic_control) && $job->traffic_control == 'No') ||  $job->traffic_control == ""  ? true : null ,['oninput' => "this.className=''"]) !!} No </label></p>

          </div>

          <div id="Q-6" class="tab">

            <p><label>Connection Type  * : </label>  {!! Form::select('connection_type',\config('setting.connection_type'),null,[ 'oninput' => "this.className=''" ]) !!} </p>

            <p><label>Solar Panel (Kw) * : </label> <input type="text" oninput="this.className=''" name="solar_panel_value" /></p>
            <p><label>Inverter (Kw) * : </label> <input type="text" oninput="this.className=''" name="inverter_value"
              /></p>

          </div>

          <div id="Q-7" class="tab">

            <p><label>Supply Required  * :  </label>  
              {!! Form::select('supply_required',\config('setting.supply_required'), (isset($job->supply_required)
              && $job->supply_required != '' ) ? $job->supply_required : '' , ['oninput' => "this.className=''", 'id' => 'supply_required'] ) !!}
              {{-- <label>{!! Form::radio('supply_required', 'Overhead', ['oninput' => "this.className=''"]) !!} Overhead </label> 
              <label>{!! Form::radio('supply_required', 'Underground', ['oninput' => "this.className=''"]) !!} Underground </label> 
              <label>{!! Form::radio('supply_required', 'Pole to Pit', ['oninput' => "this.className=''"]) !!} Pole to Pit </label> 
              <label>{!! Form::radio('supply_required', 'URD', ['oninput' => "this.className=''"]) !!} URD </label> 
              <label>{!! Form::radio('supply_required', 'Substation', ['oninput' => "this.className=''"]) !!} Substation </label>  --}}

            </p>
            <p class="overhead_class" ><label>Length of Overhead Cable : </label> <input type="number" oninput="this.className=''" name="length_of_overhead_cable" value="{{ $job->length_of_overhead_cable or null }}" /></p>

            <p class="pit_class" ><label>Pit Installed : </label> <label>{!! Form::radio('pit_installed', 'Yes',isset($job->pit_installed) && $job->pit_installed == 'Yes'  ? true : null , ['oninput' => "this.className=''"]) !!} Yes</label>
              <label>{!! Form::radio('pit_installed', 'No', isset($job->pit_installed) && $job->pit_installed == 'No'  ? true : null ,['oninput' => "this.className=''"]) !!} No </label>
              </p>

              <p><label>Number of Phases : </label>
              <label>{!! Form::radio('no_of_phases', '1', isset($job->no_of_phases) && $job->no_of_phases == 1  ? true : null ,['oninput' => "this.className=''"]) !!} 1 </label>
              <label>{!! Form::radio('no_of_phases', '2', isset($job->no_of_phases) && $job->no_of_phases == 2  ? true : null, ['oninput' => "this.className=''"]) !!} 2 </label>
              <label>{!! Form::radio('no_of_phases', '3', isset($job->no_of_phases) && $job->no_of_phases == 3  ? true : null ,['oninput' => "this.className=''"]) !!} 3 </label></p>
              
              <p><label>Size of mains (mm) : </label> <input type="number" oninput="this.className=''" name="phase_size" value="{{ $job->phase_size or null }}" /></p>

              <p><label>Max Demand Installation : </label>
              <label>{!! Form::checkbox('max_demand_installation', 'New',(isset($job->max_demand_installation) && $job->max_demand_installation != '' && $job->max_demand_installation == 'New') ? true : false, ['oninput' => "this.className=''"] ) !!} New </label>
              <label>{!! Form::checkbox('max_demand_installation', 'Existing',(isset($job->max_demand_installation) && $job->max_demand_installation != '' && $job->max_demand_installation == 'Existing') ? true : false, ['oninput' => "this.className=''"] ) !!} Existing </label></p>  

              <p> <label> Amps per Phase : </label>
              {!! Form::number('max_amp_per_phase', isset($job->max_amp_per_phase) ? $job->max_amp_per_phase : null, [ 'oninput' => "this.className=''" ]) !!}</p>  

              <p><label>Max Demand of Total Site : </label>
              {!! Form::text('max_demand_of_total_site', isset($job->max_demand_of_total_site) ? $job->max_demand_of_total_site : null, ['oninput' => "this.className=''"]) !!} </p>  

              <p><label>SCCD Installed : </label> 
                <label>{!! Form::radio('sccd_installed', 'yes', isset($job->sccd_installed) && $job->sccd_installed == 'yes'  ? true : null , ['oninput' => "this.className=''"]) !!} Yes </label>
                <label>{!! Form::radio('sccd_installed', 'no',isset($job->sccd_installed) && $job->sccd_installed == 'no'  ? true : null, ['oninput' => "this.className=''"]) !!} No </label></p>

              <p class="sccd_class" ><label>SCCD Amps : </label> 
                  {!! Form::number('sccd_amps', isset($job->sccd_amps) ? $job->sccd_amps : null, ['oninput' => "this.className=''"]) !!} </p> 

          </div>

          <div id="Q-8" class="tab">

            <p><label> Number of Premises * : </label> 
              <label>{!! Form::radio('number_of_premises', 'single', isset($customer->number_of_premises) && $customer->number_of_premises == "single" ? true : null ,['oninput' => "this.className=''"]) !!} Single </label>
              <label>{!! Form::radio('number_of_premises', 'multiple',isset($customer->number_of_premises) && $customer->number_of_premises == "multiple" ? true : null  ,['oninput' => "this.className=''"]) !!} Multiple</label>
            </p>
            <p><label>Number of Units * : </label> <input type="text" oninput="this.className=''" name="number_of_units" value="{{ $customer->number_of_units or null }}"/></p>

            @php
            $meter_phase = array();
            if(isset($job) && $job->meter_phase && $job->meter_phase != '' ) {
                $meter_phase = json_decode($job->meter_phase);
            }
            @endphp
            
            <p><label>Metering Requirements * : </label> 
             <label> {!! Form::checkbox('meter_phase[]','Hotwater', in_array('Hotwater',$meter_phase ) ,['oninput' => "this.className=''"] ) !!} Hotwater </label>
             <label> {!! Form::checkbox('meter_phase[]','Floor Heating', in_array('Floor Heating',$meter_phase )  ,['oninput' => "this.className=''"] ) !!} Floor Heating </label>
             <label> {!! Form::checkbox('meter_phase[]','CT Metering', in_array('CT Metering',$meter_phase ) ,['oninput' => "this.className=''"]  ) !!} CT Metering </label>
             <label> {!! Form::checkbox('meter_phase[]','Other', in_array('Other',$meter_phase ) ,['oninput' => "this.className=''"] ) !!} Other </label>
            </p>

            <p><label>Other : </label> 
              {!! Form::text('meter_phase_other', isset($job->meter_phase_other) && $job->meter_phase_other != "" ? $job->meter_phase_other : null  , ['oninput' => "this.className=''"]) !!} </p> 

          </div>

          <div id="Q-9" class="tab">

            <p>
              <label>Truck Appointment : </label>
              <label>{!! Form::radio('truck_appointment', 'Yes', isset($job->truck_appointment) && $job->truck_appointment == "Yes" ? true : null, ['oninput' => "this.className=''"]) !!} Yes </label>
              <label>{!! Form::radio('truck_appointment', 'No', isset($job->truck_appointment) && $job->truck_appointment == "No" ? true : null , ['oninput' => "this.className=''"]) !!} No </label>
            </p>
            <p><label>Licenced Electrical Inspector * : </label> <input type="text" oninput="this.className=''" name="lei_name" value="{{ $job->lei_name or null }}" /></p>

            <p><label> Acceptance of charge : </label> 
              <label>{!! Form::radio('acceptance_of_charge', 'Retailer', (isset($job->acceptance_of_charge) && $job->acceptance_of_charge == "Retailer" ) || $job->acceptance_of_charge == "" ? true : null  ,['oninput' => "this.className=''"]) !!} Retailer  </label>
              <label>{!! Form::radio('acceptance_of_charge', 'Field works order', isset($job->acceptance_of_charge) && $job->acceptance_of_charge == "Field works order"  ? true : null ,['oninput' => "this.className=''"]) !!} Field works order </label>
              <label>{!! Form::radio('acceptance_of_charge', 'REC', isset($job->acceptance_of_charge) && $job->acceptance_of_charge == "REC"  ? true : null ,['oninput' => "this.className=''"]) !!} REC </label>
            </p>

          </div>

          <div id="Q-10" class="tab">

            <p><label>Access to Meter position & Switchboard : </label> 
            <label>{!! Form::radio('access_to_meter', 'Yes',isset($job->access_to_meter) && $job->access_to_meter == "Yes"  ? true : null , ['oninput' => "this.className=''"] ) !!} Yes </label>
            <label>{!! Form::radio('access_to_meter', 'No',isset($job->access_to_meter) && $job->access_to_meter == "No"  ? true : null, ['oninput' => "this.className=''"]) !!} No </label></p> 
          
            <p><label>Access to VPI Lock :</label> 
            <label>{!! Form::radio('access_to_vpi_lock', 'Yes', isset($job->access_to_vpi_lock) && $job->access_to_vpi_lock == "Yes"  ? true : null, ['oninput' => "this.className=''"] ) !!} Yes </label>
            <label>{!! Form::radio('access_to_vpi_lock', 'No', isset($job->access_to_vpi_lock) && $job->access_to_vpi_lock == "No"  ? true : null, ['oninput' => "this.className=''"]) !!} No </label></p> 

            <p><strong>Access Notes : </strong>
            {!! Form::textarea('access_notes', isset($job->access_notes) ? $job->access_notes : null, ['oninput' => "this.className=''"]) !!}</p>  

            <p><label>Termination : </label> 
              <label>{!! Form::radio('termination', 'Group metering', isset($job->termination) && $job->termination == "Group metering"  ? true : null, ['oninput' => "this.className=''"] ) !!} Group metering  </label>

              <label>{!! Form::radio('termination', 'Pillar', isset($job->termination) && $job->termination == "Pillar"  ? true : null, ['oninput' => "this.className=''"]) !!} Pillar  </label>


              <label>{!! Form::radio('termination', 'Substation', isset($job->termination) && $job->termination == "Substation"  ? true : null, ['oninput' => "this.className=''"]) !!} Substation   </label>

              <label>{!! Form::radio('termination', 'FOLCB', isset($job->termination) && $job->termination == "FOLCB"  ? true : null, ['oninput' => "this.className=''"]) !!} FOLCB   </label>

              <label>{!! Form::radio('termination', 'Pit', isset($job->termination) && $job->termination == "Pit"  ? true : null, ['oninput' => "this.className=''"]) !!} Pit   </label></p>

            <p><label>Embedded Network : </label>
              <label>{!! Form::radio('embd_network', 'Parent', isset($job->embd_network) && $job->embd_network == "Parent"  ? true : null ,['oninput' => "this.className=''"]) !!} Parent </label>
              <label>{!! Form::radio('embd_network', 'Child', isset($job->embd_network) && $job->embd_network == "Child"  ? true : null , ['oninput' => "this.className=''"] ) !!} Child </label></p>
           

          </div>

          <div id="Q-11" class="tab">

            <p><label>The Work will be safe to connect on  :  </label> <input type="text" class="completion_date" oninput="this.className=''" disabled /></p>

            <p><label>Registered Electrical Contractor Name   :  </label> <input type="text"  oninput="this.className=''" disabled value="{{ \App\Setting::give_value_of('REC_Name') }}" /></p>

            <p><label>REC Number :  </label> <input type="text"  oninput="this.className=''" disabled value="{{ \App\Setting::give_value_of('REC_Number') }}" /></p>

            @PHP $address = \App\Setting::give_value_of('Address');
            $address =  str_replace("<br/>", "\n", $address); @ENDPHP

            <p><label>Registered address   :  </label> {!! Form::textarea('address', $address ,['oninput' => "this.className=''",'disabled']) !!} </p>
            

            <p><label>Phone number   :  </label> <input type="text"  oninput="this.className=''" disabled value="{{ \App\Setting::give_value_of('Phone') }}" /></p>

            <p><label>Responsible person   :  </label> <input type="text"  oninput="this.className=''" disabled value="{{ \App\Setting::give_value_of('REC_Name') }}" /></p>

            @php $image=""; $image = \App\Setting::give_value_of('Signature'); @endphp

            <p><label> Signature :  </label> <img src="{{asset('/img/'.$image)}}" width="100px" height="50px" alt="signature" /> </p>
           
            <p><label>Date :  </label> <input type="text" class="completion_date" oninput="this.className=''" disabled /></p>
          

          </div>

          <div style="overflow:auto;">
            <div style="float:right;">
              <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
              <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
          </div>

          <!-- Circles which indicates the steps of the form: -->
          <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
          </div>

        </div>

        </form>

        <br/>
        <br/>


      </div>
    </div>
  </div>
</div>
@endsection
 @push('js')

<script>

var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";

  $('.question-no').html( "Question - "+ (n+1) );

  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");

  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("questionForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");

  // validate the form through current tab
  
  y = x[currentTab].getElementsByTagName("input");
  
  // get the id of the current tab and validate the fields of this tab
  
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    // if (y[i].value == "") {
    //   // add an "invalid" class to the field:
    //   y[i].className += " invalid";
    //   // and set the current valid status to false
    //   valid = false;
    // }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}

/*============================================================================*/

//for default values

$( document ).ready(function() {

          var contact_project_group =  $('input[name=contact_project_group]:checked').val();
          if(contact_project_group == "No"){
            $(".project_number_class").hide()          
          }else{
            $(".project_number_class").show()
          } 

          var supply_required = $(this).val();
          if(supply_required == "Overhead"){
            $(".overhead_class").show()          
          }else{
            $(".overhead_class").hide() 
          } 
          if(supply_required == "Pole to Pit"){
            $(".pit_class").show()          
          }else{
            $(".pit_class").hide() 
          } 

          var sccd_installed = $('input[name=sccd_installed]:checked').val();
          if(sccd_installed == "no"){
            $(".sccd_class").hide()
          }else{
            $(".sccd_class").show() 
          }

  });
 
    $(function () {
        $('#ces_completion_date').datepicker({
            format: 'DD/MM/YYYY',
            minDate: new Date(),    
        }).on("change", function(e) {
            var completion_date = $(this).val(); 
            $('.completion_date').val(completion_date);
        });


        $(".pit_class").hide() 
        $(".overhead_class").show() 

        $('#contact_project_group').on('change',function(){
          var contact_project_group = $(this).val();
          if(contact_project_group == "No"){
            $(".project_number_class").hide()          
          }else{
            $(".project_number_class").show()
          } 
        });

         $('#supply_required').on('change',function(){
          var supply_required = $(this).val();
          if(supply_required == "Overhead"){
            $(".overhead_class").show()          
          }else{
            $(".overhead_class").hide() 
          } 
          if(supply_required == "Pole to Pit"){
            $(".pit_class").show()          
          }else{
            $(".pit_class").hide() 
          } 
        });

        $('input[name=sccd_installed]').on('change',function(){
            var sccd_installed = $(this).val();
            if(sccd_installed == "no"){
              $(".sccd_class").hide()
            }else{
              $(".sccd_class").show() 
            }
        });


    })



</script>

@endpush