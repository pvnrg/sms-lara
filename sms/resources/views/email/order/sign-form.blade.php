<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Green Sky</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		
		<link href="{!! asset('assets/stylesheets/signature-pad.css') !!}" media="all" rel="stylesheet" type="text/css"/>
	     <link href="{!! asset('assets/stylesheets/design.css') !!}" media="all" rel="stylesheet" type="text/css"/>
	      <link href="{!! asset('assets/stylesheets/style.css') !!}" media="all" rel="stylesheet" type="text/css"/>
	      
	      
	</head>
	<script src="{!! asset('assets/javascripts/jsignature/jquery.js') !!}" type="text/javascript"></script>
<!--	<script src="{!! asset('assets/javascripts/jsignature/jSignature.min.js') !!}" type="text/javascript"></script>-->

<!--<script src="{!! asset('assets/javascripts/jsignature/flashcanvas.js') !!}" type="text/javascript"></script>-->
<!--<script src="{!! asset('assets/javascripts/jsignature/flashcanvas.swf') !!}" type="text/javascript"></script>-->

<script src="{!! asset('assets/javascripts/jsignature/signature_pad.js') !!}" type="text/javascript"></script>

<!--<script src="{!! asset('assets/javascripts/jsignature/app.js') !!}" type="text/javascript"></script>-->
<script src="{!! asset('assets/javascripts/jsignature/modernizr.js') !!}" type="text/javascript"></script>


	<body style="margin:30px auto; width:850px;font-family: 'Montserrat', sans-serif;">
		<div style="background:#000; padding:20px; text-align:center;">
			<img class="brand_icon" src="{{asset('assets/images/green-logo.png')}}" alt="logo" style="width: 75px;" />
		</div>
		<div style="align:center; border:1px solid #ccc; padding-top:30px; padding-bottom:40px">
			<h2 style="margin-bottom: 35px;font-size: 25px;color:#000; font-size: 20px; text-align: center;"> Offer </h2>
			<table class="item_detail" style="border-collapse: collapse; width: 100%; text-align: center; margin:0px auto 20px auto;display: table;">
				<tr class="image-line" style="background: transparent;border: none !important;">
					<td colspan="3"  class="bottom-4" style="text-align: center;padding: 10px 20px;font-size: 15px;padding: 0;">
						<img src="{{asset('assets/images/top.jpg')}}" style="width: 100%;margin-bottom:-4px;">
					</td>
				</tr>
				<tr class="image-line" style="background: transparent;border: none !important;">
					<td colspan="6" class="item_tbl" style="text-align: center;padding: 25px 0px !important;background: #ededed;padding: 10px 20px;font-size: 15px;padding: 0;">
						<table class="tbl_order" style="background-color: #EDEDED;color: #000;border-bottom: 1px dashed #d3d3d3;">
							<div class="wrap_table" style="text-align: left;width: 80%;margin: 0 auto;">
								<h4 style="color: #333333; margin-left: 23px;margin: 10px 0px 20px;"><b>Hello {{$customer->first_name}} {{ $customer->last_name }} </b></h4>
								<p style="margin:0px; text-align:center; font-size:15px;line-height: 23px;text-align: left;">
								    @if($offer->sign ==  1)
								    Your Form is Submitted Successfully!!!
								    @else
								    Below are the Packages, Please Select One Package & Sign the given Quotation. 
								    @endif
								    </p></br>
						
						    @php $id = md5($offer->id); @endphp
						<form method="post" action="{{url('/sign-form/'.$id)}}">
						    	{{ csrf_field() }}
						    	
						    <div class="row">
						        <label><strong> Your NMI Number </strong></label>
							    <input type="text" name="nmi"  value="{{ @ $customer->nmi }}" class="form-control" id="nmi" @if($offer->sign ==  1) disabled="disabled" @endif />
							    <label><strong> Your Meter Number </strong></label>
							    <input type="text" name="meter_number"   value="{{ @ $customer->meter_number }}" class="form-control" id="meter_number"  @if($offer->sign ==  1) disabled="disabled" @endif /></br> 
						    </div>
						    <div class="row">
						       
						    </div>
						
							  
                            @foreach($offer->offer_detail as $package  )
                            
                                <?php  $package_obj = json_decode($package->package_obj);  ?> 
                                <?php  $product_obj = json_decode($package->product_obj);  ?> 
                        
	                        <div class="row">
                                <div class='col-sm-2'>
                                    <div class='box bordered-box blue-border box-nomargin' style="min-height: 300px;">
                                        <div class='box-header blue-background'>
                                            <div class='title' style="color:white;">#{{$package_obj->id}} - {{$package_obj->title}}</div>
                                            
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
                                            
                                             @if($offer->sign ==  1) 
                                                <input type="checkbox"  value="{{$package_obj->id}}" name="package" style=" width: 20px; height: 15px;"  @if($offer->sign ==  1) disabled="disabled" @endif @if($package_obj->id ==  $offer->package_id) checked @endif  />
                                             @else
                                                
                                            Click here to Select :
                                            <input type="checkbox" class="pk" value="{{$package_obj->id}}" name="package" style=" width: 20px; height: 15px;"  />
                                                   @endif 
                                            </span></p>
                                            
                                             <p><strong>Additional Price : </strong><span>@if($package->extra_price == "" ) 0.00 @else {{$package->extra_price}} @endif @if($package->description != "") ( {{ $package->description  }} ) @endif</span></p>
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>    
                            @endforeach
                            
                            @if($offer->sign == 1)
                        <img src="{{$offer->customer_sign}}" style="border:1px solid; width:678px;" /> @endif 
                    
                    
                    <!--<div id="signature">-->
                    <!--    <canvas id="getSign" class="jSignature" width="966" height="242" ></canvas>-->
                    <!--</div>-->
                    
                    @if($offer->sign != 1)
                    
                    <input type="hidden" id="sign" name="sign" value="">
                    
                    
                    
                     <div id="signature-pad" class="signature-pad">
    <div class="signature-pad--body">
      <canvas width="650" height="250">   </canvas>
    </div>
    
    
    
    <div class="signature-pad--footer">
      <div class="description">Sign above</div>

      <div class="signature-pad--actions">
        <div>
          <button type="button" class="button clear" data-action="clear">Clear</button>

        </div>
        
      </div>
    </div>
 
    
  </div>

  <input type="hidden" id="lat" name="lat" value="">
    <input type="hidden" id="long" name="long" value="">

                    <input type="checkbox" name="agree" class="agree" style=" width: 20px; height: 15px;"  value="agree" />  I Agree  <br>
                    
                    <button type="submit" name="submit" id="submit" class="btn btn-success" value="submit"> Submit </button>
                    
                    </form>
    @endif
                    
                    
								<p style="margin:0px; text-align:center; font-size:15px;line-height: 23px;text-align: left;" class="check">Thanks,</p>
								<p style="margin:0px; text-align:center; font-size:15px;line-height: 23px;text-align: left;"><b>Regards, Green Sky Australia</b></p>
							</div>
						</table>
					</td>
				</tr>
				<tr class="image-line" style="background: transparent;border: none !important;">
					<td colspan="6"  class="top-4" style="text-align: center;top: -5px; position: relative;padding: 10px 20px;font-size: 15px;padding: 0;">
						<img src="{{asset('assets/images/bottom.jpg')}}" style="width: 100%;margin-top:-4px;">
					</td>
				</tr>
			</table>
			
			<h4 style="margin-top: 35px;color: #333333; margin-left: 23px;"></h4>
			
		</div>
		<div class="footer" style="background:#333333; color:#ffffff; padding:10px;">
			<!-- <p>Copyright © 2017 All rights reserved</p> 
			<a href="https://www.be-help.com">www.be-help.com</a>-->
		</div>
	</body>
</html>


<script>
$(document).ready(function() {
    
   
    var wrapper = document.getElementById("signature-pad");
    var clearButton = wrapper.querySelector("[data-action=clear]");
    var canvas = wrapper.querySelector("canvas");
    var signaturePad = new SignaturePad(canvas, {
      backgroundColor: 'rgb(255, 255, 255)'
    });


    clearButton.addEventListener("click", function (event) {
      signaturePad.clear();
    });

 
       
   $( "#submit" ).click(function( event ) {
        
        var nmi = $("#nmi").val() ; 
        if( nmi == "" || nmi == null ){
            alert("Please Enter Your NMI Number");
            return false;
        }
        
        var meter_number = $("#meter_number").val() ; 
        if( meter_number == "" || meter_number == null ){
            alert("Please Enter Your Meter Number");
            return false;
        }
    
        if($('.pk:checked').length == 0){
            alert("Please Select atleast one Package");
            return false;
        }
        
            
        if($('.pk:checked').length >1 ){
            alert("Please Select only one Package");
            return false;
        }
        
        if($('.agree:checked').length == 0){
            alert("Please Agree Before submiting the form");
            return false;
        }
        
          var dataURL = signaturePad.toDataURL("image/jpeg");
          if (signaturePad.isEmpty()) {
            alert("Please provide a signature first.");
            return false;
          } else {
          $('#sign').val(dataURL);
        }
    });


        function success(position) {
            var latitude = position.coords.latitude ;
            var longitude = position.coords.longitude ;
            $('#lat').val(latitude);
            $('#long').val(longitude);
        }

        function error(err) {
            console.warn(`ERROR(${err.code}): ${err.message}`);
        }

        navigator.geolocation.getCurrentPosition(success, error);
})
</script>