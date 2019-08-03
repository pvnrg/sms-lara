@extends('layouts.backend')

@section('title','Add Customer Offer')

@section('pageTitle')
    <i class="icon-tint"></i>
    <span>Create Customer Offer</span>
@endsection


@section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="box bordered-box blue-border">
                    <div class="box-header blue-background">
						<div class="title">
							<i class="icon-circle-blank"></i>
							Create Customer Offer - {{$customer->first_name}}
						</div>
                    </div>
                    <div class="box-content ">
                        <a href="{{ url('/admin/customer') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back </button></a>
                        <br />
                        <br />
                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <form name="slider_form" id="slider_form" method="POST" action="{{url('/admin/customer/showpackage')}}">
                            {{csrf_field()}}

                        <input type="hidden" name="customer_id" value="{{$customer->id}}"  />
                        <label>Select Range (in Watt) : </label>
                        <div id="slider-range"></div><br>
                        
                        <div class="col-md-12 col-sm-12">
							<label> From : </label>
							<input type="text" id="min" name="min" readonly>
							<label> To : </label>
							<input type="text" id="max" name="max" readonly>
							<label> Watt </label>
							<button type="submit" class="btn btn-primary btn-submit" >Submit</button>
                        </div>
                        
                        </form>  

                     {{--  <form name="slider_form" id="slider_form" method="POST" action="{{url('/admin/customer/showpackage')}}">
                        {{csrf_field()}}
                        <div class="""slidecontainer">
                            <input type="range" min="1" max="100" value="50" class="slider" id="myRange" name= "slider_value">
                            <p>Value: <span id="demo"></span></p>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary" >Submit</button>
    
                    </form>      --}}
                    <br />
                    <br />

                    <div class="row">
                        @if (session()->has('packages'))
                            <?php $packages = session()->get('packages');?>
                           @if(session()->has('packages'))
                           <?php $message = session()->get('message');?>
                            <div class="text-center">{{$message}}</div>
                           @endif

                           
                            <div class="create_offer_form cleafix">
                           <form method="POST" action="{{url('/admin/customer/createoffer/'.$customer->id)}}" id="create_offer_form" enctype= "multipart/form-data">
                            {{csrf_field()}}
                                
                           @if(count($packages) == 0)

                            @else

                            <div class='col-md-8 col-sm-12'>
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
                                                    
                                                </div>
                                                <div class='col-sm-4'>
                                                    <p><strong>System Parameters</strong></p>
                                                    {!! Form::file('system_params',null,['class' => 'form-control']) !!}
                                               
                                                </div>
                                                {{-- <div class='col-sm-2'>
                                                    <p><strong>Estiamte Performance</strong></p>
                                                    {!! Form::file('performance',null,['class' => 'form-control']) !!}
                                                  
                                                </div> --}}
                                                <div class='col-sm-4'>
                                                    <p><strong>Average Daily Energy Output</strong></p>
                                                    {!! Form::file('daily_average',null,['class' => 'form-control']) !!}
                                                  
                                                </div>
                                                {{-- <div class='col-sm-2'>
                                                    <p><strong>Panel orientation</strong></p>
                                                    {!! Form::file('panel_orientation',null,['class' => 'form-control']) !!}
                                                   
                                                </div> --}}
                                                {{-- <div class='col-sm-2'>
                                                    <p><strong>Add Price</strong></p>
                                                    {!! Form::number('extra_price',null,['class' => 'form-control']) !!}
                                                   
                                                </div> --}}
                                               
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class='col-md-4 col-sm-12'>
                                    <div class='box bordered-box blue-border box-nomargin' style="min-height: 250px;">
                                        <div class='box-header blue-background'>
                                            <div class='title'>Add Price</div>
                                            <div class='actions'>
                                                <a class="btn box-collapse btn-xs btn-link" href="#"><i></i></a>
                                            </div>
                                        </div>
                                        <div class='box-content'>
                                            <div class='row'>

                                               
                                                <div class='col-sm-8'>
                                                    <p><strong>Description</strong></p>
                                                    {!! Form::textarea('description',null,['class' => 'form-control']) !!}
                                                   
                                                </div> 
                                                 <div class='col-sm-4'>
                                                    <p><strong>Add Price</strong></p>
                                                    {!! Form::number('extra_price',null,['class' => 'form-control']) !!}
                                                   
                                                </div> 
                                               
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>


							<div class="col-sm-12 create_offer_1">	
								<button type="submit" name="submit" value="submit" id="create_offer" class="btn btn-primary create_offer_left float-left">Create Offer</button>
                            </div>
                            @endif
                            

                            
                            @foreach($packages as $package  )
                                
                                <div class='col-md-4 col-sm-6'>
                                    <div class='box bordered-box blue-border box-nomargin'>
                                        <div class='box-header blue-background'>
                                            <div class='title' style="color:white;">#{{$package->id}} - {{$package->title}}</div>
                                            <div class='actions'>
                                                    <a class="btn box-collapse btn-xs btn-link" href="#"><i></i></a>
                                            </div>
                                        </div>
                                        <input type="hidden" name="package_id" value="{{$package->id}}"/>
                                        <div class='box-content' data-element="box-content">
                                            <p><strong>Products : </strong><span> {{join(' , ', $package->package_product->pluck('name')->toArray())}}</span></p>
                                            <p><strong>Watt : </strong><span>{{$package->kw}}</span></p>
                                            <p><strong>Price : </strong>
                                                <span><input type="number"  name="price[{{$package->id}}]" class="price" readonly value= "{{$package->price}}">
                                                </span>
                                            </p>
                                            <p><strong>Enter Discount : </strong><span>
                                           <input type="number" name="discount[{{$package->id}}]" min="0" max="{{ $discount }}" class="discount" value='0' data-price="{{$package->price}}" data-id="{{$package->id}}" step="any"/>
                                            </span></p>

                                            <p><strong>Discount Value : </strong><span>
                                           <input type="number" name="discount_value[{{$package->id}}]" class="discount_value"  value='0' data-price="{{$package->price}}" data-id="{{$package->id}}" step="any"/>
                                            </span></p>

                                            <p><strong>Net Value : </strong><span>
                                           <input type="number" name="net_value[{{$package->id}}]" class="net_value" readonly value="{{$package->price}}"/>
                                            </span></p>
                                            <div>
                                            <p><strong>Check here to add Offer: </strong><input type="checkbox" name="package[]" id="checkbox_id" classs="package_checkbox " value="{{$package->id}}"  style="zoom:1.5;"></p>
                                            </div> 
                                        
                                        </div>
                                    </div>
                                </div>
                                
                            @endforeach
                            
                            <!--<div class="row">
                                    <div class="col-md-6">
                            @if(count($packages) == 0)
                            @else
                            <button type="submit" name="submit" value="submit" id="create_offer" class="btn btn-primary">Create Offer</button>
                            @endif
                                    </div>
                            </div>-->
                            </form>
                        </div>
                        @endif
                    </div>


                    </div>
                </div>
            </div>
        </div>
@endsection

@push('js')
<script>

//var dis = {{\config('setting.discount_value')}};
var dis = parseInt({{$discount}});

$( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 40000,
      values: [ 3000, 8000 ],
      slide: function( event, ui ) {
        $( "#min" ).val(  ui.values[ 0 ]  );
        $( "#max" ).val(  ui.values[ 1 ] );
      }
    });
    $( "#min" ).val( $( "#slider-range" ).slider( "values", 0 ) ) ;
    $( "#max" ).val($( "#slider-range" ).slider( "values", 1 ) );

    $(".discount").focusout(function() {
        var package_id  = $(this).attr('data-id');
        var price = $(this).attr('data-price');
        var discount = $(this).val();
        var discount_value = 0 ;

        if(discount > dis ){
            alert('Discount must be less than '+dis+'%');
            return false;
        }else{
            
            var discount_value =  (price * (discount / 100 )).toFixed(2);
            var net_value = (price - discount_value).toFixed(2);
           
          
            $(this).closest('.box-content').find('.discount_value').val(discount_value);
            $(this).closest('.box-content').find('.net_value').val(net_value);

 
        }
           
    });

    $(".discount_value").focusout(function() {
        var package_id  = $(this).attr('data-id');
        var price = parseInt( $(this).attr('data-price') ) ;
        var discount_value = parseInt($(this).val()); 

        if(discount_value >= price){
            alert('Your Discount value  must be less than Original Price ');
            $(".discount_value").val(0);
            return false;  
        }
        var discount = 0 ;
        var discount = ( (discount_value/price) * 100 ).toFixed(1);
        var net_value = (price - discount_value).toFixed(2);
        $(this).closest('.box-content').find('.discount').val(discount);
        $(this).closest('.box-content').find('.net_value').val(net_value);
        if(discount > dis ){
            alert('Your Discount is greater than '+dis+'%');
            return true; 
        }       
    });

});

$( document ).ready(function() {
    $("input[type='checkbox']").change(function() {
        if(this.checked) {
            var discount = $('.discount').val();
           /*if(discount == 0){
               alert('Enter Discount');
               $(this).prop("checked",false)
               return false;
           }*/
        } 
      });
});


$( "#create_offer_form" ).submit(function( event ) {
    var package_checkbox = [];
    $.each($("input[name='package[]']:checked"), function(){
        package_checkbox.push( $(this).val() );
   });
    if(package_checkbox.length == 0){
        alert('Please Select Atleast One Package');
        return false;
    }else{
        return true;
    }

    
});



  </script>


@endpush

