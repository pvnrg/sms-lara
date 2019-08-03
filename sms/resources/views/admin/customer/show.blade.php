@extends('layouts.backend')

@section('title','View Customer')


@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="box bordered-box blue-border">
                <div class="box-header blue-background">
                                                  <div class="title">
                                                      <i class="icon-circle-blank"></i>
                                                      Customer
                                                  </div>

                               </div>
                <div class="box-content ">

                    <a href="{{url('/admin/customer')}}" title="Back">
                        <button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                        </button>
                    </a>

                    <a href="{{ url('/admin/customer/createoffer/' . $party->id ) }}" title="Create Offer">
                        <button class="btn btn-warning btn-xs">
                            Create Offer
                        </button>
                    </a>

                    <a href="{{ url('/admin/customer/' . $party->id . '/edit') }}" title="Edit Party">
                        <button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            Edit Customer
                        </button>
                    </a>

                    <a href="{{ url('/admin/customer/addfolder/' . $party->id ) }}" title="Folder">
                        <button class="btn btn-warning btn-xs">
                            Folder
                        </button>
                    </a>

                    <a href="{{ url('/admin/job?customer_id='.$party->id ) }}" title="Jobs">
                        <button class="btn btn-warning btn-xs">
                            Jobs
                        </button>
                    </a>


                    {!! Form::open([
                        'method' => 'DELETE',
                        'url' => ['/admin/customer', $party->id],
                        'style' => 'display:inline'
                    ]) !!}
                    {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                            'type' => 'submit',
                            'class' => 'btn btn-danger btn-xs',
                            'title' => 'Delete Party',
                            'onclick'=>'return confirm("Are you sure you want to delete Customer? If you Delete the Customer its Folders, Offers and Jobs were also get deleted")'
                    ))!!}
                    {!! Form::close() !!}
                    <br/>
                    <br/>


                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                            <tr>
                                <td>Id</td>
                                <td>{{ $party->party_id }}</td>
                            </tr>
                            <tr>
                                <td>Image</td>
                                <td><img src="{{url($party->image) or null }}" width="100" height="100"/></td>
                            </tr>
                            <tr>
                                <td>First Name</td>
                                <td>{{ $party->first_name }}</td>
                            </tr>
                            <tr>
                                <td>Last Name</td>
                                <td>{{ $party->last_name }}</td>
                            </tr>
                            <tr>
                                <td>Business Name</td>
                                <td>{{ $party->bussiness_name }}</td>
                            </tr>
                            <tr>
                                <td>Unit/Floor/Shop</td>
                                <td>{{ $party->unit }}</td>
                            </tr>
                            <tr>
                                <td>Street Number</td>
                                <td>{{ $party->street_number }}</td>
                            </tr>
                            <tr>
                                <td>Street Name</td>
                                <td>{{ $party->street_name }}</td>
                            </tr>
                            <tr>
                                <td>LOT</td>
                                <td>{{ $party->lot }}</td>
                            </tr>
                            <tr>
                                <td>PostCode</td>
                                <td>{{ $party->post_code }}</td>
                            </tr>
                            <tr>
                                <td>State</td>
                                <td>{{ $party->state }}</td>
                            </tr>
                            <tr>
                                <td>Suburb</td>
                                <td>{{ $party->suburb }}</td>
                            </tr>
                            <tr>
                                <td>Phone Number Home</td>
                                <td>{{ $party->phone_home }}</td>
                            </tr>
                            <tr>
                                <td>Phone Number Mobile</td>
                                <td>{{ $party->phone_mobile }}</td>
                            </tr>
                            <tr>
                                <td>Email Address</td>
                                <td>{{ $party->email }}</td>
                            </tr>
                            <tr>
                                <td>Type</td>
                                <td>{{ $party->type }}</td>
                            </tr>
                            <tr>
                                <td>Property Type</td>
                                <td>{{ $party->property_type }}</td>
                            </tr>
                            <tr>
                                <td>Single/Multi Story</td>
                                <td>{{ $party->single_multi }}</td>
                            </tr>
                            <tr>
                                <td>Number of Premises </td>
                                <td>{{ $party->number_of_premises }}</td>
                            </tr>
                            <tr>
                                <td>Number of Units</td>
                                <td>{{ $party->number_of_units }}</td>
                            </tr>
                            <tr>
                                <td>NMI</td>
                                <td>{{ $party->nmi }}</td>
                            </tr>
                            <tr>
                                <td>Meter Number</td>
                                <td>{{ $party->meter_number }}</td>
                            </tr>
                            <tr>
                                <td>Meter Phase</td>
                                <td>{{ $party->meter_phase }}</td>
                            </tr>
                            <tr>
                                <td> Number of Phase</td>
                                <td>{{ $party->number_of_phase }}</td>
                            </tr>
                            <!--<tr>-->
                            <!--    <td>Electrical Retailer</td>-->
                            <!--    <td>{{ $party->electrical_retailer }}</td>-->
                            <!--</tr>-->
                            <tr>
                                <td>Electrical Distributer </td>
                                <td>{{ $party->electrical_distributer }}</td>
                            </tr>
                            <tr>
                                <td>Inverter Service </td>
                                <td>{{ $party->inverter_service }}</td>
                            </tr>
                            <tr>
                                <td>Electricity Supply</td>
                                <td>{{ $party->electricity_supply }}</td>
                            </tr>
                            <tr>
                                <td>Seperate Inverter </td>
                                <td>{{ $party->seperate_inverter }}</td>
                            </tr>
                            <tr>
                                <td>ABN Number </td>
                                <td>{{ $party->ABN_number }}</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>@if( $party->customer_status == 0 )
                                        Lead
                                    @elseif($party->customer_status == 1 )
                                        Customer 
                                    @elseif($party->customer_status == 2 )
                                        Prospect
                                    @elseif($party->customer_status == 3 )
                                        Lost 
                                    @endif
                                </td>
                            </tr>  
                            <tr>
                                <td>Source</td>
                                <td>@if( $party->status == 0 )
                                        CRM
                                    @elseif($party->status == 1 )
                                        API
                                    @elseif($party->status == 2 )
                                        Website
                                    @elseif($party->status == 3 )
                                        Device
                                    @endif
                                </td>
                            </tr>     
                             <tr>
                                <td>Comments</td>
                                @php $data = json_decode($party->party_data); @endphp
                                <td>@if($data)
                                @foreach($data as $key => $value)
                                    @if(!is_object($value))
                                       <b> {{ $key }} </b> : {{ $value }} ,
                                    @endif
                                @endforeach
                                @endif</td>
                            </tr>  
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection