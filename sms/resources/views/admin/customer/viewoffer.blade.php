@extends('layouts.backend')

@section('title','View Customer Offer')

@section('pageTitle')
    <i class="icon-tint"></i>
    <span>View Customer Offer</span>
@endsection


@section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="box bordered-box blue-border">
                    <div class="box-header blue-background">
                                                      <div class="title">
                                                          <i class="icon-circle-blank"></i>
                                                          View Offer for {{ $customer->first_name }} {{ $customer->last_name }}
                                                      </div>
    
                                   </div>
                    <div class="box-content ">
                        <a href="{{ url('/admin/offers/'.$customer->id) }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back </button></a>

                        <a href="{{ url('/admin/nearmap/'.$offer->id) }}" title="view"><button class="btn btn-warning btn-xs"> View Nearmap Document </button></a>

                        <b>Status</b> : {{ $offer->status }}
                        
                        <a href="{{ url('/admin/resend-offer/'.$offer->id) }}" title="Resend Offer"><button class="btn btn-warning btn-xs"> Resend Offer </button></a>
                        
                        <br />
                        <br />

                    <div class="row">

                           
                            @foreach($offer->offer_detail as $package  )
                            
                                <?php  $package_obj = json_decode($package->package_obj);  ?> 
                                <?php  $product_obj = json_decode($package->product_obj);  ?> 
                        

                                <div class='col-sm-4'>
                                    <div class='box bordered-box blue-border box-nomargin' style="min-height: 300px;">
                                        <div class='box-header blue-background'>
                                            <div class='title'>#{{$package_obj->id}} - {{$package_obj->title}}</div>
                                            <div class='actions'>
                                                    <a class="btn box-collapse btn-xs btn-link" href="#"><i></i></a>
                                            </div>
                                        </div>
     
                                        <div class='box-content' data-element="box-content">
                                            
                                            <p><strong>Products : </strong>
                                                <span>
                                                    @foreach($product_obj as $product)
                                                        {{$product->name}},
                                                    @endforeach
                                                </span>
                                            </p>

                                            <p><strong>kw : </strong><span>{{$package->package_kw}}</span></p>

                                            <p><strong>Price : </strong><span>{{$package->package_price}}</span></p>

                                            <p><strong>Discount : </strong><span>{{$package->package_discount}} %</span></p>

                                            <p><strong>Discount Value : </strong><span>{{$package->package_discount_value}}</span></p>

                                            <p><strong>Net value : </strong><span>{{$package->package_net_value}}</span><span style="padding-left:280px;">
                                                @if($offer->job &&  ($offer->job->package_id != '' || $offer->job->package_id != 0 ) )
                                                    @if($offer->job->package_id == $package_obj->id )
                                                    <input type="checkbox" checked style=" width: 20px;
                                                    height: 15px;"  disabled/>
                                                    @endif
                                                @endif
                                            </span></p>

                                            
                                        </div>
                                    </div>
                                </div>
                                
                            @endforeach
                    </div>
                    <div class="row">  
                            <form method="post" action="{{ url('/admin/upload/nearmap/'.$offer->id) }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                            <div class='col-sm-8'>
                                    <div class='box bordered-box blue-border box-nomargin' style="min-height: 250px;">
                                        <div class='box-header blue-background'>
                                            <div class='title'>Upload Files</div>
                                            <div class='actions'>
                                                {{--  <a class="btn box-remove btn-xs btn-link" href="#"><i class='icon-remove'></i></a>  --}}
                                                <a class="btn box-collapse btn-xs btn-link" href="#"><i></i></a>
                                            </div>
                                        </div>
                                        <div class='box-content'>
                                            <div class='row'>
                                                <div class='col-sm-4'>
                                                    <p><strong>Solar Panel Placement</strong></p>
                                                    {!! Form::file('solar_panel_placement',null,['class' => 'form-control']) !!}
                                                    @foreach($offer->image as $images)
                                                        @if($images->name == 'solar_panel_placement')
                                                            @if( file_exists(public_path('/offer/'.$offer->id.'/'.$images->path) )  )
                                                            <img src="{{ asset('/offer/'.$offer->id.'/'.$images->path) }}" width="100" height="100" style="padding-top: 10px;"/>
                                                            @else
                                                            <img src="{{ asset('images/default.jpg') }}" width="100" height="100" style="padding-top: 10px;"/>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                </div>
                                                <div class='col-sm-4'>
                                                    <p><strong>System Parameters</strong></p>
                                                    {!! Form::file('system_params',null,['class' => 'form-control']) !!}
                                                    @foreach($offer->image as $images)
                                                        @if($images->name == 'system_params')
                                                            @if( file_exists(public_path('/offer/'.$offer->id.'/'.$images->path) )  )
                                                            <img src="{{ asset('/offer/'.$offer->id.'/'.$images->path) }}" width="100" height="100" style="padding-top: 10px;"/>
                                                            @else
                                                            <img src="{{ asset('images/default.jpg') }}" width="100" height="100" style="padding-top: 10px;"/>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                </div>
                                                {{-- <div class='col-sm-2'>
                                                    <p><strong>Estiamte Performance</strong></p>
                                                    {!! Form::file('performance',null,['class' => 'form-control']) !!}
                                                  
                                                </div> --}}
                                                <div class='col-sm-4'>
                                                    <p><strong>Average Daily Energy Output</strong></p>
                                                    {!! Form::file('daily_average',null,['class' => 'form-control']) !!}
                                                    @foreach($offer->image as $images)
                                                        @if($images->name == 'daily_average')
                                                            @if( file_exists(public_path('/offer/'.$offer->id.'/'.$images->path) )  )
                                                            <img src="{{ asset('/offer/'.$offer->id.'/'.$images->path) }}" width="100" height="100" style="padding-top: 10px;"/>
                                                            @else
                                                            <img src="{{ asset('images/default.jpg') }}" width="100" height="100" style="padding-top: 10px;"/>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                </div>
                                                {{-- <div class='col-sm-2'>
                                                    <p><strong>Panel orientation</strong></p>
                                                    {!! Form::file('panel_orientation',null,['class' => 'form-control']) !!}
                                                   
                                                </div> --}}
                                               
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class='col-sm-4'>
                                    <div class='box bordered-box blue-border box-nomargin' style="min-height: 250px;">
                                        <div class='box-header blue-background'>
                                            <div class='title'>Add Price</div>
                                            <div class='actions'>
                                                <a class="btn box-collapse btn-xs btn-link" href="#"><i></i></a>
                                            </div>
                                        </div>
                                        <div class='box-content'>
                                            <div class='row'>

                                                <div class='col-sm-4'>
                                                    <p><strong>Add Price</strong></p>
                                                    {!! Form::number('extra_price',isset( $offer->offer_detail[0] ) ? $offer->offer_detail[0]->extra_price : null ,['class' => 'form-control']) !!}
                                                   
                                                </div> 
                                                <div class='col-sm-8'>
                                                    <p><strong>Description</strong></p>
                                                    {!! Form::textarea('description',isset( $offer->offer_detail[0] ) ? $offer->offer_detail[0]->description : null,['class' => 'form-control']) !!}
                                                   
                                                </div> 
                                               
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>


							<div class="col-sm-12 create_offer_1">	
								<button type="submit" name="submit" value="submit"  class="btn btn-primary"  >Upload NearMap Images & Update</button>
                            </div>
                        </form>
                            
                    </div>
                    
                    <div class="row">
                         <div class='col-sm-8'>
                        <label>Customer's Signature : </label>
                        @if($offer->sign == 1)
                        <img src="{{$offer->customer_sign}}" style="border:1px solid;" /></br>
                        <p><strong>Latitude : </strong>{{ $offer->latitude }}</p>
                        <p><strong>Longitude : </strong>{{ $offer->longitude }}</p>
                        @else
                        <i>Pending</i>
                        @endif
                        </div>
                    </div>
                    


                    </div>
                </div>
            </div>
        </div>
@endsection



