@extends('layouts.backend')

@section('content')
        <div class="row">
            <div class="col-md-12">
             <div class="box bordered-box blue-border">
                                          <div class="box-header blue-background">
                                                              <div class="title">
                                                                  <i class="icon-circle-blank"></i>
                                                               Job #{{ $job->customer->first_name }}
                                                              </div>

                                           </div>
                                           <div class="box-content ">

                        <a href="{{ URL::previous() }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        @if(Auth::user()->can('access.job.edit'))
                        <a href="{{ url('/admin/job/' . $job->id . '/edit') }}" title="Edit Job"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        @endif

                        @if(Auth::user()->can('access.job.delete'))
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/job', $job->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Job',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        @endif
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr><th>Job ID</th><td>{{ $job->id }}</td></tr>
                                    <tr><th>Customer Name</th><td>{{ $job->customer->first_name }} {{ $job->customer->last_name }}</td></tr>
                                    <tr>
                                      
                                        <th> PVD </th><td> {{ $job->pvd }}</td>
                                    </tr>

                                    <tr>
                                        <th> Connection Type </th><td> {{ $job->connection_type }}</td>
                                        <th> Alternative Supply </th><td> {{ $job->alternative_supply }}</td>
                                        <th> Supply Required</th><td> {{ $job->supply_required }}</td>
                                    </tr>
                                    <tr>
                                        <th> Length of Overhead Cable </th><td> {{ $job->length_of_overhead_cable }}</td>
                                        <th> Has Pit been Installed </th><td> {{ $job->pit_installed }}</td>
                                        <th> O/H to U/G conversion </th><td> {{ $job->oh_to_ug_conversion }}</td>
                                    </tr>
                                    <tr>
                                        <th> Meter Phase</th><td> {{ $job->meter_phase }}</td>
                                        <th> Number of Phases </th><td> {{ $job->no_of_phases }}</td>
                                        <th> Phase Size </th><td> {{ $job->phase_size }}</td>
                                    </tr>
                                    <tr>
                                        <th> Max Demand Installation </th><td> {{ $job->max_demand_installation }}</td>
                                        <th> Max Amps per Phase </th><td> {{ $job->max_amp_per_phase }}</td>
                                        <th> Max demand of Total Site </th><td> {{ $job->max_demand_of_total_site }}</td>
                                    </tr>
                                    <tr>
                                        <th> Demands Amps per Phase </th><td> {{ $job->demands_amp_per_phase }}</td>
                                        <th> Is SCCD Installed ? </th><td> {{ $job->sccd_installed }}</td>
                                        <th> SCCD Installed</th><td> {{ $job->sccd_amps }}</td>
                                    </tr>
                                    <tr>
                                        <th> Truck Appointment </th><td colspan=2> {{ $job->truck_appointment }}</td>
                                        <th> LEI Name </th><td colspan=2> {{ $job->lei_name }}</td>
                                    </tr>
                                    <tr><th> Access to Meter </th><td> {{ $job->access_to_meter }}</td>
                                        <th> Access to VPI Lock </th><td> {{ $job->access_to_vpi_lock }}</td>
                                        <th> Access Notes </th><td> {{ $job->access_notes }}</td>
                                    </tr>
                                    <tr>
                                        <th> Number Of STC </th><td> {{ $job->no_of_stc }}</td>
                                        <th> Battery Storage </th><td> {{ $job->battery_storage }}</td>
                                        <th> Solar </th><td> {{ $job->solar }}</td>
                                    </tr>
                                    <tr>
                                        <th> Battery Storage Source </th><td colspan=2> {{ $job->battery_storage_source }}</td>
                                        <th> Embedded Generator Installed </th><td colspan=2> {{ $job->embd_gen_installed }}</td>
                                    </tr>
                                    <tr>
                                        <th> Existing rating </th><td colspan=2> {{ $job->existing_rating }}</td>
                                        <th> Existing Export </th><td colspan=2> {{ $job->existing_export }}</td>
                                    </tr>
                                    <tr>
                                        <th> Pre-Approval Reference Number </th><td colspan=5> {{ $job->pre_approval_ref_no }}</td>
                                    </tr>
                                    <tr>
                                        <th> Manual Provide to Customer </th><td colspan=2> {{ $job->manual_to_customer }}</td>
                                        <th> Instructed Customer </th><td colspan=2> {{ $job->instructed_customer }}</td>
                                    </tr>
                                    <tr>
                                        <th> Time For Invert To Disconnect </th><td colspan=2> {{ $job->inverter_time_disconnect }}</td>
                                        <th> Disconnect Test </th><td colspan=2> {{ $job->disconnect_test }}</td>
                                    </tr>
                                    <tr>
                                        <th> Time for Inverter to Reconnect </th><td colspan=2> {{ $job->inverter_time_reconnect }}</td>
                                        <th> Reconnect Test </th><td colspan=2> {{ $job->reconnect_test }}</td>
                                    </tr>
                                    <tr>
                                        <th> Export Test SOP 33-06 </th><td colspan=2> {{ $job->export_test_sop_3306 }}</td>
                                        <th> Export Test Sheet Attached </th><td colspan=2> {{ $job->export_test_sheet_attached }}</td>
                                    </tr>
                                    <tr>
                                        <th> Installation Comments/Description of Work </th><td colspan=2> {{ $job->installation_comments }}</td>
                                        <th> Number f Panels </th><td colspan=2> {{ $job->no_of_panels }}</td>
                                    </tr>
                                    <tr>
                                        <th> Replacing </th><td colspan=2> {{ $job->replacing }}</td>
                                        <th> Number of Replacing </th><td colspan=2> {{ $job->no_of_replacing }}</td>
                                    </tr>
                                    <tr>
                                        <th> Additional </th><td colspan=2> {{ $job->additional }}</td>
                                        <th> Number of Additional </th><td colspan=2> {{ $job->no_of_additional }}</td>
                                    </tr>
                                    <tr>
                                        <th> More than one System </th><td colspan=2> {{ $job->more_than_one_system }}</td>
                                        <th> Location of the Other Syatem </th><td colspan=2> {{ $job->loc_of_other_system }}</td>
                                    </tr>
                                    <tr>
                                        <th> Solar capacity Installed </th><td>{{ $job->solar_capacity_installed }}</td>
                                        <th> Solar capacity Existing </th><td>{{ $job->solar_capacity_existing }}</td>
                                        <th> Solar capacity Removed </th><td>{{ $job->solar_capacity_removed }}</td>

                                    </tr>
                                    <tr>
                                        <th> Solar Capacity Phase A Installed </th><td>{{ $job->solar_capacity_installed_phase_a }}</td>
                                        <th> Solar Capacity Phase A Existing </th><td>{{ $job->solar_capacity_existing_phase_a }}</td>
                                        <th> Solar Capacity Phase A Removed </th><td>{{ $job->solar_capacity_removed_phase_a }}</td>

                                    </tr>
                                    <tr>
                                        <th> Solar Capacity Phase B Installed </th><td>{{ $job->solar_capacity_installed_phase_b }}</td>
                                        <th> Solar Capacity Phase B Existing </th><td>{{ $job->solar_capacity_existing_phase_b }}</td>
                                        <th> Solar Capacity Phase B Removed </th><td>{{ $job->solar_capacity_removed_phase_b }}</td>
    
                                    </tr>
                                    <tr>
                                        <th> Solar Capacity Phase C Installed </th><td>{{ $job->solar_capacity_installed_phase_c }}</td>
                                        <th> Solar Capacity Phase C Existing </th><td>{{ $job->solar_capacity_existing_phase_c }}</td>
                                        <th> Solar Capacity Phase C Removed </th><td>{{ $job->solar_capacity_removed_phase_c }}</td>
        
                                    </tr>
                                    <tr>
                                            <th> Battery capacity Installed </th><td>{{ $job->battery_capacity_installed }}</td>
                                            <th> Battery capacity Existing </th><td>{{ $job->battery_capacity_existing }}</td>
                                            <th> Battery capacity Removed </th><td>{{ $job->battery_capacity_removed }}</td>
    
                                        </tr>
                                        <tr>
                                            <th> Battery Capacity Phase A Installed </th><td>{{ $job->battery_capacity_installed_phase_a }}</td>
                                            <th> Battery Capacity Phase A Existing </th><td>{{ $job->battery_capacity_existing_phase_a }}</td>
                                            <th> Battery Capacity Phase A Removed </th><td>{{ $job->battery_capacity_removed_phase_a }}</td>
    
                                        </tr>
                                        <tr>
                                            <th> Battery Capacity Phase B Installed </th><td>{{ $job->battery_capacity_installed_phase_b }}</td>
                                            <th> Battery Capacity Phase B Existing </th><td>{{ $job->battery_capacity_existing_phase_b }}</td>
                                            <th> Battery Capacity Phase B Removed </th><td>{{ $job->battery_capacity_removed_phase_b }}</td>
        
                                        </tr>
                                        <tr>
                                            <th> Battery Capacity Phase C Installed </th><td>{{ $job->battery_capacity_installed_phase_c }}</td>
                                            <th> Battery Capacity Phase C Existing </th><td>{{ $job->battery_capacity_existing_phase_c }}</td>
                                            <th> Battery Capacity Phase C Removed </th><td>{{ $job->battery_capacity_removed_phase_c }}</td>
            
                                        </tr>
                                        <tr><th>Inverter Phase</th><td>{{ $job->inverter_phase }}</td></tr>
                                        <tr><th>Capacity Phase A</th><td>{{ $job->capacity_phase_a }}</td></tr>
                                        <tr><th>Capacity Phase B</th><td>{{ $job->capacity_phase_b }}</td></tr>
                                        <tr><th>Capacity Phase C</th><td>{{ $job->capacity_phase_c }}</td></tr>
                                        <tr><th>Export Limit </th><td>{{ $job->export_limit }}</td></tr>
                                        <tr><th>Export Limit Value</th><td>{{ $job->export_limit_value }}</td></tr>

                                    

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
