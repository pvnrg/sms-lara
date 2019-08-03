<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" name="viewport">
<title>EWR Form</title>
<style>
    
    html {
      width: 100%;
    }
	
    body {
      -webkit-text-size-adjust: none;
      -ms-text-size-adjust: none;
      margin: 0;
      padding: 0;
    }
	
    table {
      border-spacing: 0;
      table-layout: fixed;
      margin: 0;
    }
  
	
    img {
      display: block ! important;
      overflow: hidden ! important;
    }
  
    table td {
      border-collapse: collapse;
    }
 
 .tbl-border { border:1px solid #000;}
 .checkbox-1 {  background-color: #fff;}
 .checked { background:url(assets/images/checkbox.png) no-repeat no-repeat; width:13px; height:13px; display:inline-block; position:relative; top:2px; margin:0 0 0 5px;}
 .checkmark {background:url(assets/images/checkbox-blank.png) no-repeat no-repeat; width:13px; height:13px; display:inline-block; position:relative; top:2px; margin:0 0 0 5px;}
 .chkbox { display:inline-block;}

</style>
</head>
<body marginwidth="0" marginheight="0" width="100%"  style=" margin: 0; padding:0; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; background:#ffffff;" offset="0" topmargin="0" leftmargin="0">
<div style="width:900px; margin: 10px; padding:10px; border:0px solid #222;">
<table style=" width:900px;" width="900px" border="0" cellpadding="0" cellspacing="0" bgcolor="#fff">
<tr>
	<td valign="top">
		<table style=" width:100%;" width="100%" border="0" cellpadding="0" cellspacing="0">		
		<tr>
			<td align="left" valign="top" style=" width:30%;font-family: Arial, Helvetica, sans-serif; color:#000000; font-size:10px;margin:0; padding:0;">
				<table width="100%" cellpadding="0" cellspacing="0" style=" width:100%;font-family: Arial, Helvetica, sans-serif; color:#000000; margin:0; padding:5px; border:1px solid #000;">
				<tr>
					<td style="width:50%; text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000000; font-size:10px;margin:0; padding:5px;">Retailer:</td>
					<td style="width:50%; text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000000; font-size:10px; margin:0; padding:5px; border-bottom:1px solid #000;">{{  @ $customer->retailer->name }}</td>
				</tr>
				<tr>
					<td style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000000; font-size:10px;margin:0; padding:5px;">Service Order:#:</td>
					<td style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000000; font-size:10px; margin:0; padding:5px;  border-bottom:1px solid #000;"></td>
				</tr>
				<tr>
					<td style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000000; font-size:10px;margin:0; padding:5px;">NMI:</td>
					<td style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000000; font-size:10px; margin:0; padding:5px;  border-bottom:1px solid #000;">{{ $customer->nmi }}</td>
				</tr>
				<tr>
					<td >&nbsp;</td>
					<td style="text-align:right; font-family: Arial, Helvetica, sans-serif; color:#000000; font-size:10px; margin:0; padding:5px;">Retailer Use Only</td>
				</tr>
				</table>
			</td>
			<td align="right" style=" width:70%;font-family: Arial, Helvetica, sans-serif; color:#000000; font-size:10px;margin:0; padding:0;">
			    <img src="{{ asset('assets/images/ewr.png') }}" alt="EWR" style="text-align:right; width:500px;">
			</td>
		</tr>
		
		</table>
	</td>
</tr>
<tr>
	<td valign="top">
		<table style=" width:100%;" width="100%" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td style=" height:10px;"></td>
		</tr>		
		<tr>
			<td style=" text-align:center; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:14px; font-weight:bold;margin:0; padding:0;">Application for service – Electrical Works Request (EWR) for new and existing installations</td>
		</tr>
		<tr>
			<td style=" height:5px;"></td>
		</tr>
		</table>
		
		<table style=" width:100%;" width="100%" border="0" cellpadding="0" cellspacing="0">		
		<tr>
			<td style=" width:35%; text-align:left; font-family: Arial, Helvetica, sans-serif; color:#c00000; font-size:11px;margin:0; padding:5px;">
			Send completed form by email or mail to Retailer:
			</td>
			<td style=" width:35%; text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:11px;margin:0; padding:5px; border-bottom:1px solid #000;">
                {{ @ $customer->retailer->email }}
			</td>
			<td style=" width:15%; text-align:left; font-family: Arial, Helvetica, sans-serif; color:#c00000; font-size:11px;margin:0; padding:5px;">
			or Distributor
			</td>
			<td style=" width:15%; text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:11px;margin:0; padding:5px; border-bottom:1px solid #000;">
                {{  $customer->electrical_distributer }}
			</td>
		</tr>
		</table>
		
	</td>
</tr>

<tr>
	<td valign="top">		
		<table style=" width:100%;" width="100%" border="0" cellpadding="0" cellspacing="0">		
		<tr>
			<td style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px;margin:0; padding:5px;">I acknowledge the requirements of the relevant Distribution Company have been adhered to and certify the electrical work complies with the Victorian Service & Installation Rules and the Electricity Safety Act and Regulations. I also acknowledge the initial connection will not be connected without a Prescribed Certificate of Electrical Safety and that I am responsible for any associated Distribution Company charges unless the Retailer has accepted all charges.</td>
		</tr>
		</table>		
	</td>
</tr>

<tr>
	<td valign="top">
		<table style=" width:100%;" width="100%" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:13px; font-weight:bold;margin:0; padding:5px;">Work site address</td>
		</tr>
		</table>
		<table style=" width:100%;" width="100%" border="0" cellpadding="0" cellspacing="0">		
		<tr>
			<td style="width:20%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:11px;margin:0; padding:5px;">Customer or business name: </td>
			<td style="width:43%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:11px;margin:0; padding:5px; border-bottom:1px solid #000;">{{ $customer->first_name }} {{ $customer->last_name }}  {{ $customer->business_name }} </td>
			<td style=" width:2%;"></td>
			<td style="width:10%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:11px;margin:0; padding:5px;">Ph # / Mb #: </td>
			<td style="width:25%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:11px;margin:0; padding:5px; border-bottom:1px solid #000;">{{ $customer->phone_home or '-'}}  / {{ $customer->phone_mobile or '-' }} </td>
		</tr>
		</table>
		
		
		<table style=" width:100%;" width="100%" border="0" cellpadding="0" cellspacing="0">		
		<tr>
			<td style="width:10%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:11px;margin:0; padding:5px;">Site Type:</td>
			<td style="width:65%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:11px;margin:0; padding:5px;">
                    @foreach( array_slice(\config('setting.property_type'), 0, 9) as $key => $value)
                    <span class="chkbox">@if($value == $customer->property_type ) <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif </span> {{$key}}&nbsp;
                    @endforeach
				
				{{-- <span class="chkbox"><img src="{{ asset('assets/images/checkbox-blank.png') }}"/></span> Suite&nbsp;&nbsp;&nbsp;&nbsp;
				<span class="chkbox"><img src="{{ asset('assets/images/checkbox-blank.png') }}"/></span> Tenancy&nbsp;&nbsp;&nbsp;&nbsp;
				<span class="chkbox"><img src="{{ asset('assets/images/checkbox-blank.png') }}"/></span> Shop --}}
			</td>
			<!--<td style="width:8%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:11px;margin:0; padding:5px;">  </td>-->
			<!--<td style="width:17%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:11px;margin:0; padding:5px;"> </td> -->
		</tr>
		</table>
		
	  
		
		<table style=" width:100%;" width="100%" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td style="width:20%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:11px;margin:0; padding:5px 5px 0 5px;">Unit / Floor / Shop</td>
			<td style="width:2%"></td>
			<td style="width:20%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:11px;margin:0; padding:5px 5px 0 5px;">Street number</td>
			<td style="width:2%"></td>
			<td style="width:56%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:11px;margin:0; padding:5px 5px 0 5px;">Street Name</td>
		</tr>		
		<tr>
			<td style="width:20%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:11px;margin:0; padding:5px; border-bottom:1px solid #000">{{ $customer->unit }}</td>
			<td style="width:2%"></td>
			<td style="width:20%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:11px;margin:0; padding:5px; border-bottom:1px solid #000">{{ $customer->street_number }}</td>
			<td style="width:2%"></td>
			<td style="width:56%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:11px;margin:0; padding:5px; border-bottom:1px solid #000">{{ $customer->street_name }}</td>
		</tr>
		</table>
	
		
		<table style=" width:100%;" width="100%" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td style="width:20%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:11px;margin:0; padding:5px 5px 0 5px;">Lot</td>
			<td style="width:2%"></td>
			<td style="width:30%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:11px;margin:0; padding:5px 5px 0 5px;">Suburb</td>
			<td style="width:2%"></td>
			<td style="width:46%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:11px;margin:0; padding:5px 5px 0 5px;">Existing meter number</td>
		</tr>		
		<tr>
			<td style="width:20%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:11px;margin:0; padding:5px; border-bottom:1px solid #000">{{ $customer->lot }}</td>
			<td style="width:2%"></td>
			<td style="width:30%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:11px;margin:0; padding:5px; border-bottom:1px solid #000">{{ $customer->suburb }}</td>
			<td style="width:2%"></td>
			<td style="width:46%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:11px;margin:0; padding:5px; border-bottom:1px solid #000">{{ $customer->meter_number }}</td>
		</tr>
		</table>
		
		
		<table style=" width:100%;" width="100%" border="0" cellpadding="0" cellspacing="0">		
		<tr>
			<td style="width:35%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:11px;margin:0; padding:5px;">Has contact been made with Projects Group?</td>
			<td style="width:25%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:11px;margin:0; padding:5px;">
				<span class="chkbox"><img src="{{ asset('assets/images/checkbox.png') }}"/></span> Yes &nbsp;&nbsp;&nbsp;&nbsp; 
				<span class="chkbox"><img src="{{ asset('assets/images/checkbox-blank.png') }}"/>  </span> No
			</td>
			<td style="width:15%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:11px;margin:0; padding:5px;">Project number </td>
			<td style="width:25%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:11px;margin:0; padding:5px; border-bottom:1px solid #000;"> {{ $job->project_number }}</td>
		</tr>
		</table>
		
	
		
		<table style=" width:100%;" width="100%" border="0" cellpadding="0" cellspacing="0">		
		<tr>
			<td style="width:37%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:11px;margin:0; padding:5px;">Name of person at Distributors Projects Group to contact</td>
			<td style="width:63%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:11px;margin:0; padding:5px; border-bottom:1px solid #000;"> {{ $job->contact_project_group_name }} </td>
		</tr>
		</table>
		
		
		<table style=" width:100%;" width="100%" border="0" cellpadding="0" cellspacing="0">		
		<tr>
			<td style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:11px; font-weight:bold;margin:0; padding:5px;">
			Description of All Works <span>(including coincidental works taking place) (PLEASE PRINT)</span>
			</td>
		</tr>
		</table>
		<table style=" width:100%;" width="100%" border="0" cellpadding="0" cellspacing="0">		
		<tr>
			<td style="width:100%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:11px;margin:0; height:20px; padding:5px; border-bottom:1px solid #000;">
				{{ $job->installation_comments }}
			</td>
		</tr>
		</table>
		<table style=" width:100%;" width="100%" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td style="width:80%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:11px;margin: 0;padding:5px; border-bottom:1px solid #000;">
				
			</td>
			<td style="width:10%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:11px;font-weight:normal; height:35px;margin:0; padding:5px;">
				CES No
			</td>
			<td style=" width:10%; text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:11px;margin:0; padding:5px; border-bottom:1px solid #000;">
                    {{ $company_details->CES_Number }}
			</td>
		</tr>
		</table>
		
	</td>
</tr>

<tr>
	<td valign="top">
	   <table style=" width:100%;" width="100%" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td style=" height:10px;">
			
			</td>
		</tr>
		</table>
		<table style=" width:100%;" width="100%" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:11px; font-weight:bold;margin:0; padding:5px 5px 5px 0;">
			Work requirements
			</td>
		</tr>
		</table>
		
		<table style=" width:100%;" width="100%" border="0" cellpadding="0" cellspacing="0">		
		<tr>
			<td valign="top" style="width:20%;">
				<table style=" width:100%; border:1px solid #003f87; padding:5px;" width="100%" border="0" cellpadding="0" cellspacing="0">		
				<tr>
					<td style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:11px; font-weight:bold;margin:0; padding:5px;">
						Premise type
					</td>
				</tr>
				<tr>
					<td valign="top" >
						
						<table style=" width:100%; " width="100%" border="0" cellpadding="0" cellspacing="0" >	
							
						@foreach( array_slice(\config('setting.premise_type'), 0, 4) as $key => $value)
								<tr>
									<td style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px;">
											{{ $key }}
									</td>
									<td>
										<span class="chkbox"> @if($value == $job->premise_type ) <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif </span>
									</td>
								</tr>
								
						@endforeach	
						{{-- <tr>
							<td style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px;">
								Commercial / Industrial
							</td>
							<td>
								<span class="chkbox"><img src="{{ asset('assets/images/checkbox-blank.png') }}"/></span>
							</td>
						</tr>
						<tr>
							<td style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px;">
								Residential
							</td>
							<td>
								<span class="chkbox"><img src="{{ asset('assets/images/checkbox-blank.png') }}"/></span>
							</td>
						</tr>
						<tr>
							<td style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px;">
								Unmetered Supply
							</td>
							<td>
								<span class="chkbox"><img src="{{ asset('assets/images/checkbox-blank.png') }}"/></span>
							</td>
						</tr>
						<tr>
							<td style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px;">
								Builders Supply Pole (BSP)
							</td>
							<td>
								<span class="chkbox"><img src="{{ asset('assets/images/checkbox-blank.png') }}"/></span>
							</td>
						</tr>
						<tr>
							<td style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px;">
								Builders Supply in the<br>Permanent Position
							</td>
							<td>
								<span class="chkbox"><img src="{{ asset('assets/images/checkbox-blank.png') }}"/></span>
							</td>
						</tr> --}}
						<tr>
							<td colspan="2" style=" height:1px; border-bottom:1px solid #003f87; padding:0;"></td>
						</tr>
						</table>
						<table style=" width:100%;" width="100%" border="0" cellpadding="0" cellspacing="0" >		
						<tr>
							<td style="width:50%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px;">
								Private Cables on<br>Public Land
							</td>
							<td style="width:50%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px; font-weight:normal;margin:0; padding:5px;">
								Y <span class="chkbox">@if($job->public_land == "Yes")  <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif </span>&nbsp;&nbsp;&nbsp;
								N <span class="chkbox">@if($job->public_land == "No")<img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span>
							</td>
						</tr>
						<tr>
							<td style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px;">
								Is EPV required?
							</td>
								<td style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px; font-weight:normal;margin:0; padding:5px;">
								Y <span class="chkbox">@if($job->epv == "Yes")  <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif </span>&nbsp;&nbsp;&nbsp;
								N <span class="chkbox">@if($job->epv == "No")  <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span>
							</td>
						</tr>
						<tr>
							<td style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px;">
								Is Traffic Control req?
							</td>
								<td style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px; font-weight:normal;margin:0; padding:5px;">
								Y <span class="chkbox">@if($job->traffic_control == "Yes")  <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span>&nbsp;&nbsp;&nbsp;
								N <span class="chkbox">@if($job->traffic_control == "No")  <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span>
							</td>
						</tr>
						</table>
						
					</td>
				</tr>
				</table>
			</td>
			<td valign="top" style="width:2%;">&nbsp;</td>
			<td valign="top" style="width:20%;">
				<table style=" width:100%; border:1px solid #003f87; padding:5px;" width="100%" border="0" cellpadding="0" cellspacing="0">		
				<tr>
					<td style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:11px; font-weight:bold;margin:0; padding:5px;">
						Connection type
					</td>
				</tr>
				<tr>
					<td valign="top" >
						
						<table style=" width:100%; " width="100%" border="0" cellpadding="0" cellspacing="0" >	
                        @foreach( array_slice(\config('setting.connection_type'), 0, 4) as $key => $value)
                            <tr>
                                <td style="width:70%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px;">
                                        {{ $key }}
                                </td>
                                <td align="right" style="width:30%;">
                                    <span class="chkbox"> @if($value == $job->connection_type ) <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif </span>
                                </td>
                            </tr>
                            <tr>
                                <td style="height:5px" colspan="2"></td>
                            </tr>
                            
                        @endforeach	
						{{-- <tr>
							<td style="width:70%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px;">
								New
							</td>
							<td align="right" style="width:30%;">
								<span class="chkbox"><img src="{{ asset('assets/images/checkbox-blank.png') }}"/></span>
							</td>
						</tr>
						<tr>
                                <td style="height:5px" colspan="2"></td>
                            </tr>
						<tr>
							<td style="width:70%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px;">
								Alteration
							</td>
							<td align="right" style="width:30%;">
								<span class="chkbox"><img src="{{ asset('assets/images/checkbox.png') }}"/></span>
							</td>
						</tr>
						<tr>
                                <td style="height:5px" colspan="2"></td>
                            </tr>
					
						<tr>
							<td style="width:70%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px;">
								Private Overhead
							</td>
							<td align="right" style="width:30%;">
								<span class="chkbox"><img src="{{ asset('assets/images/checkbox-blank.png') }}"/></span>
							</td>
						</tr>
						<tr>
                                <td style="height:5px" colspan="2"></td>
                            </tr>
					
						<tr>
							<td style="width:70%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px;">
								Embedded Network
							</td>
							<td align="right" style="width:30%;">
								<span class="chkbox"><img src="{{ asset('assets/images/checkbox-blank.png') }}"/></span>
							</td>
						</tr> --}}
						<tr>
                                <td style="height:5px" colspan="2"></td>
                            </tr>
						<tr>
							<td style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px;">
								Solar Panel
							</td>
							<td style="width:30%;">
								<span style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px; font-weight:normal;margin:0; padding:5px; border-bottom:1px solid #000"> {{ $job->solar_panel_value }}&nbsp;&nbsp;&nbsp;&nbsp;</span>
								<span style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px; font-weight:normal;margin:0; padding:5px;">kw</span>
							</td>
						</tr>
					<tr>
                                <td style="height:5px" colspan="2"></td>
                            </tr>
						<tr>
							<td style=" width:70%;text-align:right; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px;">
								Inverter 
							</td>
							<td style="width:30%;">
								<span style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px; font-weight:normal; margin:0; padding:5px; border-bottom:1px solid #000"> {{ $job->inverter_value }}&nbsp;&nbsp;&nbsp;&nbsp;</span>
								<span style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px; font-weight:normal; margin:0; padding:5px;">kw</span>
							</td>
						</tr>
						<tr>
                                <td style="height:10px" colspan="2"></td>
                            </tr>
					
						<tr>
							<td colspan="2" style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px 5px 0 5px;">
								Alternative supply
							</td>
						</tr>
						<tr>
                                <td style="height:5px" colspan="2"></td>
                            </tr>
						<tr>
							<td colspan="2" style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px; font-weight:normal;margin:0; height:20px; padding:5px;border-bottom:1px solid #000;">
                                    {{ $job->alternative_supply }}
							</td>
						</tr>
						<tr>
						    <td style="height:12px;" colspan="2"></td>
						</tr>
						</table>
						
					</td>
				</tr>
				</table>
			</td>
			<td valign="top" style="width:2%;">&nbsp;</td>
			<td valign="top" style="width:56%;">
				<table style=" width:100%; border:1px solid #003f87; padding:5px; " width="100%" border="0" cellpadding="0" cellspacing="0">		
				<tr>
					<td style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:11px; font-weight:bold;margin:0; padding:5px;">
						Supply Required
					</td>
				</tr>
				<tr>
					<td valign="top" >
						
						<table style=" width:100%; " width="100%" border="0" cellpadding="0" cellspacing="0" >		
						<tr>
							<td style="width:20%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px;">
								Overhead
							</td>
							<td style="width:8%;" >
								<span class="chkbox"> @if($job->supply_required == 'Overhead')  <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span>
							</td>
							<td style="width:72%;">
								<table style=" width:100%; " width="100%" border="0" cellpadding="0" cellspacing="0" >		
								<tr>
									<td style="width:40%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px;">
										Length of Overhead Cable
									</td>
									<td style="width:25%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px; font-weight:normal;margin:0; padding:5px; border-bottom:1px solid #000;">
                                            {{ $job->length_of_overhead_cable }}
									</td>
									<td style="width:35%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px;">
										<span style="text-decoration:underline">Approximate</span> meters
									</td>
								</tr>
								</table>
							</td>							
						</tr>
						<tr>
						    <td style="height:5px;" colspan="3"></td>
						</tr>
					
						<tr>
							<td style="width:20%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px;">
								Underground
							</td>
							<td style="width:8%;" >
								<span class="chkbox">@if($job->supply_required == 'Underground')  <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span>
							</td>
							<td style="width:72%;">
							</td>							
						</tr>
						<tr>
						    <td style="height:5px;" colspan="3"></td>
						</tr>
						
						<tr>
							<td style="width:20%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px;">
								Pole to pit
							</td>
							<td style="width:8%;" >
								<span class="chkbox">@if($job->supply_required == 'Pole to Pit')  <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span>
							</td>
							<td style="width:72%;">
								<table style=" width:100%; " width="100%" border="0" cellpadding="0" cellspacing="0" >		
								<tr>
									<td style="width:35%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px;">
										Has pit been installed?
									</td>
									<td style="width:25%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px; font-weight:normal;margin:0; padding:5px; border-bottom:0px solid #000;">
										Y <span class="chkbox"> @if($job->pit_installed == 'Yes')  <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span>&nbsp;&nbsp;&nbsp;
										N <span class="chkbox">@if($job->pit_installed == 'No')  <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span>
									</td>
									<td style="width:35%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px;">
										O/H to U/G Conversion
									</td>
									<td style="width:5%;" valign="middle">
										<span class="chkbox">@if($job->oh_to_ug_conversion == 'Yes')  <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif </span>
									</td>
								</tr>
								</table>
							</td>							
						</tr>
						
						<tr>
						    <td style="height:5px;" colspan="3"></td>
						</tr>
					
						<tr>
							<td style="width:20%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px;">
								URD
							</td>
							<td style="width:8%;" >
								<span class="chkbox">@if($job->supply_required == 'URD')  <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span>
							</td>
							<td style="width:72%; text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px;">(if pit has not been installed please contact the Distribution Company) 
							</td>							
						</tr>					
						</table>
						
						
					    <table style=" width:100%; " width="100%" border="0" cellpadding="0" cellspacing="0" >
					  <tr>
						    <td style="height:5px;" colspan="3"></td>
						</tr>
						<tr>
							<td style="width:20%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px;">
								Substation
							</td>
							<td style="width:8%;" >
								<span class="chkbox"> @if($job->supply_required == 'Substation')  <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span>
							</td>
							<td style="width:72%;">
								<table style=" width:100%; " width="100%" border="0" cellpadding="0" cellspacing="0" >		
								<tr>
									<td style="width:40%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px;">
										NEW MAINS: NO. PHASES
									</td>
									<td style="width:35%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px; font-weight:normal;margin:0; padding:5px;">
                                            1 &nbsp; <span class="chkbox">@if($job->no_of_phases == 1 )  <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif  </span>&nbsp;
                                            2 &nbsp; <span class="chkbox">@if($job->no_of_phases == 2 )  <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif </span>&nbsp;
                                            3 &nbsp; <span class="chkbox">@if($job->no_of_phases == 3 )  <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif </span>&nbsp;
									</td>
									<td style="width:25%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px;">
										SIZE
										<span style="font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px; font-weight:normal;margin:0; padding:5px; border-bottom:1px solid #000;">{{ $job->phase_size }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
										<span style="font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;">mm</span> 
									</td>
									
								</tr>
								</table>
							</td>
						</tr>
						</table>
						
						<table style=" width:100%; " width="100%" border="0" cellpadding="0" cellspacing="0" >
						<tr>
						    <td style="height:5px;" colspan="3"></td>
						</tr>
						<tr>
							<td style=" width:30% text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px;">
								MAX DEMAND Installation
							</td>
							<td style=" width:40% text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px; font-weight:normal;margin:0; padding:5px;">
								Existing <span class="chkbox">@if($job->max_demand_installation == "Existing" )  <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif </span>&nbsp;&nbsp;&nbsp;
								New <span class="chkbox">@if($job->max_demand_installation == "New" )  <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span>
							</td>
							<td style=" width:20% text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px;">
								Amps per phase
							</td>
							<td style=" width:10% text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px; font-weight:normal;margin:0; padding:5px; border-bottom:1px solid #000;">
                                    {{ $job->max_amp_per_phase }}
							</td>
						</tr>
						</table>
						
						<table style=" width:100%; " width="100%" border="0" cellpadding="0" cellspacing="0" >
					<tr>
						    <td style="height:5px;" colspan="3"></td>
						</tr>
						<tr>
							<td style=" width:30% text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px;">
								MAX DEMAND of TOTAL SITE
							</td>
							<td style=" width:10% text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px; font-weight:normal;margin:0; padding:5px; border-bottom:1px solid #000;">
                                    {{ $job->max_demand_of_total_site }}
							</td>
							<td style=" width:60% text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px;">
								Amps per phase
							</td>
							
						</tr>
						</table>
						
						<table style=" width:100%; " width="100%" border="0" cellpadding="0" cellspacing="0" >
						<tr>
						    <td style="height:5px;" colspan="3"></td>
						</tr>
						<tr>
							<td style=" width:20% text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px;">
								Is SCCD Installed
							</td>
							<td style=" width:30% text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px; font-weight:normal;margin:0; padding:5px; ">
								Y <span class="chkbox"> @if($job->sccd_installed == "yes" )  <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif </span>&nbsp;&nbsp;&nbsp;
								N <span class="chkbox">@if($job->sccd_installed == "no" )  <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif </span>
							</td>
							<td style=" width:20% text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px;">
								Amps per phase
							</td>
							<td style=" width:30% text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px; font-weight:normal;margin:0; padding:5px; border-bottom:1px solid #000;">
                                    {{ $job->sccd_amps }}
							</td>
							
						</tr>
						</table>
						
						<table style=" width:100%; " width="100%" border="0" cellpadding="0" cellspacing="0" >
						<tr>
							<td style="height:5px;">
							
							</td>
							
							
						</tr>
						</table>
						
						
					
						
					</td>
				</tr>
				</table>
			</td>
		</tr>
		</table>
		
	</td>
</tr>


<tr>
	<td valign="top">
		<table style=" width:100%;" width="100%" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td style="height:10px;">
			
			</td>
		</tr>
		</table>
		
		<table style=" width:100%;" width="100%" border="0" cellpadding="0" cellspacing="0">		
		<tr>
			<td valign="top" style="width:24%;">
				<table style=" width:100%; border:1px solid #003f87; padding:5px;" width="100%" border="0" cellpadding="0" cellspacing="0">		
				<tr>
					<td style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:11px; font-weight:bold;margin:0; padding:5px;">
						Number of premises
					</td>
				</tr>
				<tr>
					<td valign="top" >
						
						<table style=" width:100%; " width="100%" border="0" cellpadding="0" cellspacing="0" >
						<tr>
							<td style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px;">
								Single premise
							</td>
							<td align="right">
								<span class="chkbox">@if($customer->number_of_premises == "single" )  <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span>
							</td>
						</tr>
					
						<tr>
							<td style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px;">
								Multiple premises
							</td>
							<td align="right">
								<span class="chkbox">@if($customer->number_of_premises == "multiple" )  <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span>
							</td>
						</tr>
					
						<tr>
							<td style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px;">
								Number of units
							</td>
							<td style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px; border-bottom:1px solid #000;">
								{{ $job->number_of_units }}
							</td>
						</tr>
						<tr>
							<td colspan="2" style=" height:5px">
								
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
				
				<table style=" width:100%; border:1px solid #003f87; padding:5px; margin:10px 0 0 0;" width="100%" border="0" cellpadding="0" cellspacing="0">		
				<tr>
					<td style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:11px; font-weight:bold;margin:0; padding:5px;">
						Termination:
					</td>
				</tr>
				<tr>
					<td valign="top" >
						
						<table style=" width:100%; " width="100%" border="0" cellpadding="0" cellspacing="0" >
						<tr>
							<td style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px;">
								Group Metering <span class="chkbox">@if($job->termination == "Group Metering" )  <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif </span>&nbsp;&nbsp;&nbsp;
								Pillar <span class="chkbox">@if($job->termination == "Pillar" )  <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span>
							</td>
						</tr>
						
						<tr>
							<td style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px;">
								Substation <span class="chkbox">@if($job->termination == "Substation" )  <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span>&nbsp;&nbsp;
								FOLCB <span class="chkbox">@if($job->termination == "FOLCB" )  <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span>&nbsp;&nbsp;
								Pit <span class="chkbox">@if($job->termination == "Pit" )  <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span>
							</td>
						</tr>
						<tr>
							<td style=" height:5px">
								
							</td>
						</tr>
						
						</table>
					</td>
				</tr>
				</table>
			</td>
			<td valign="top" style="width:2%;">				
			</td>
			<td valign="top" style="width:32%;">
				<table style=" width:100%; border:1px solid #003f87; padding:5px;" width="100%" border="0" cellpadding="0" cellspacing="0">		
				<tr>
					<td style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:11px; font-weight:bold;margin:0; padding:5px;">
						Metering requirements
					</td>
                </tr>
            
                @php 
                    $meter_phase = array();
                    if(isset($job) && $job->meter_phase && $job->meter_phase != '' ) {
                        $meter_phase = json_decode($job->meter_phase);
                    }                    
                @endphp

				<tr>
					<td valign="top" >
						
						<table style=" width:100%; " width="100%" border="0" cellpadding="0" cellspacing="0" >
						<tr>
							<td style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px;">
								Meter Phases:
							</td>
							<td style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px;">
                                    Hot water   {!! Form::checkbox('meter_phase[]','Hotwater', in_array('Hotwater',$meter_phase )) !!}  
                                    Floor Heating {!! Form::checkbox('meter_phase[]','Floor Heating', in_array('Floor Heating',$meter_phase )) !!}
								{{-- 1 <span class="chkbox"><img src="{{ asset('assets/images/checkbox-blank.png') }}"/></span>&nbsp;&nbsp;&nbsp;
								2 <span class="chkbox"><img src="{{ asset('assets/images/checkbox-blank.png') }}"/></span>&nbsp;&nbsp;&nbsp;
								3 <span class="chkbox"><img src="{{ asset('assets/images/checkbox-blank.png') }}"/></span> --}}
							</td>
						</tr>
						
						<tr>
							<td style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px;">
								CT Metering
							</td>
							<td style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px; font-weight:normal;margin:0; padding:5px; border-bottom:1px solid #000;">
								@if(in_array('CT Metering',$meter_phase ) ) Yes @endif 
							</td>
						</tr>
						<tr>
							<td style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px;">
								Other (specify)
							</td>
							<td style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px; font-weight:normal;margin:0; padding:5px; border-bottom:1px solid #000;">
								{{ $job->meter_phase_other or null }}
							</td>
						</tr>
						<tr>
							<td colspan="2" style=" height:5px">
								
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
				
				<table style=" width:100%; border:1px solid #003f87; padding:5px; margin:10px 0 0 0;" width="100%" border="0" cellpadding="0" cellspacing="0">		
				<tr>
					<td style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:11px; font-weight:bold;margin:0; padding:2px 5px;">
						Embedded Network
					</td>
				</tr>
				<tr>
					<td valign="top" >
						
						<table style=" width:100%; " width="100%" border="0" cellpadding="0" cellspacing="0" >
						<tr>
							<td style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:11px; font-weight:normal;margin:0; padding:2px 5px;">
								Parent <span class="chkbox">@if($job->embd_network == "Parent" )  <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span>&nbsp;&nbsp;&nbsp;
								Child <span class="chkbox">@if($job->embd_network == "Child" )  <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span>
							</td>
						</tr>
						<tr>
							<td style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:11px; font-weight:normal;margin:0; padding:2px 5px;">
								Additional Notes
							</td>
						</tr>
						<tr>
							<td style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:11px; font-weight:normal;margin:0; height:20px; padding:5px; border-bottom:1px solid #000;">
								{{ $job->access_notes }}
							</td>
						</tr>
						<tr>
						    <td style="height:5px;"></td>
						</tr>
						
						</table>
					</td>
				</tr>
				</table>
				
			</td>
			<td valign="top" style="width:2%;">				
			</td>
			<td valign="top" style="width:40%;">
				<table style=" width:100%; border:1px solid #003f87; padding:5px;" width="100%" border="0" cellpadding="0" cellspacing="0">		
				<tr>
					<td style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:11px; font-weight:bold;margin:0; padding:5px;">
						Truck appointment
					</td>
				</tr>
				<tr>
					<td valign="top" >
						
						<table style=" width:100%; " width="100%" border="0" cellpadding="0" cellspacing="0" >
						<tr>
							<td style=" width:55%; text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px;">
								Do you require a truck appointment:
							</td>
							<td style="width:45%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px; font-weight:normal;margin:0; padding:5px;">
								Y <span class="chkbox">@if($job->truck_appointment == "Yes" )  <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span>&nbsp;&nbsp;&nbsp;
								N <span class="chkbox">@if($job->truck_appointment == "No" )  <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span>
							</td>
						</tr>
						<tr>
						    <td style="height:5px" colspan="2"></td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px;">
								Appointments are not necessarily supplied for all requests, unless you are required to complete work in conjunction with the Distribution Company.
							</td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px;">
								<span style="font-style:italic">Note: CES needs to be supplied at time of appointment</span>
							</td>
						</tr>
						<tr>
						    <td style="height:5px" colspan="2"></td>
						</tr>
						<tr>
						    <td colspan="2" width="100%" style=" width:100%;">
						        <table style=" width:100%;" width="100%" border="0" cellpadding="0" cellspacing="0" >
						            <tr>
						                 <td style=" width:20%; text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal; margin:0; padding:5px;">
            								LEI Name
            							</td>
            							 <td style=" width:80%; text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal; margin:0; padding:5px; border-bottom:1px solid #000;">
											{{ $job->lei_name }}
            							</td>
						            </tr>
						        </table>
						    </td>
						</tr>
						<tr>
						    <td style="height:5px" colspan="2"></td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:10px; font-weight:normal;margin:0; padding:5px;">
								Acceptance of charges for the truck appt:
							</td>
						</tr>
						<tr>
						    <td style="height:5px" colspan="2"></td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px; font-weight:normal;margin:0; padding:5px;">
								Retailer <span class="chkbox">@if($job->acceptance_of_charge == "Retailer" )  <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span>&nbsp;&nbsp;&nbsp;
								Field Works <span class="chkbox">@if($job->acceptance_of_charge == "Field works order" )  <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span>&nbsp;&nbsp;&nbsp;
								Order REC <span class="chkbox">@if($job->acceptance_of_charge == "REC" )  <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span>
							</td>
						</tr>
						<tr>
							<td colspan="2" style=" height:5px">
								
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>
		</table>
	</td>
</tr>



<tr>
	<td valign="top">
		<table style=" width:100%;" width="100%" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td style="height:10px;">
			
			</td>
		</tr>
		</table>
		
		<table style=" width:100%; padding:5px 0;" width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl-border">		
		<tr>
			<td style=" width:45%; text-align:left; font-family: Arial, Helvetica, sans-serif; color:#003f87; font-size:11px;margin:0; padding:5px;">
				<span style=" font-weight:bold;">Access:</span> 
				<span style="font-size:11px;">
				To meter position & switchboard&nbsp;&nbsp;&nbsp;<span class="chkbox">@if($job->access_to_meter == "Yes" )  <img src="{{ asset('assets/images/checkbox.png') }}"/>  @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span>&nbsp;&nbsp;&nbsp;
				VPI Lock <span class="chkbox">@if($job->access_to_vpi_lock == "Yes" )  <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/>  @endif </span>&nbsp;&nbsp;&nbsp;
				Access Notes: 
				</span>
			</td>
			<td style=" width:55%; text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:11px;margin:0; padding:5px; border-bottom:1px solid #000;">
			     {{ $job->access_notes }}
			 </td>
		</tr>
		</table>
</tr>

<tr>
	<td valign="top">
	    <table style=" width:100%;" width="100%" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td style="height:10px;">
			
			</td>
		</tr>
		</table>
		
		
		<table style="width:100%; border:1px solid #000; padding:5px;" width="100%" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td valign="top" colspan="3">
			    <table style="width:100%;" width="100%" border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td style="width:30%; text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px;margin:0; padding:5px;">
						THE WORK WILL BE SAFE TO CONNECT ON: DATE:				
					</td>
					<td style="width:20%; text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px;margin:0; padding:5px; border-bottom:1px solid #000;">
                            {{ @ $job->installation_date }}
					</td>
					<td style="width:50%; text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px;margin:0; padding:5px;">
						OR at Completion of Truck Appointment&nbsp;&nbsp;&nbsp;<span class="chkbox"><img src="{{ asset('assets/images/checkbox.png') }}"/></span>
					</td>
				</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td valign="top" style="width:100%">
			    <table style="width:100%;" width="100%" border="0" cellpadding="0" cellspacing="0">
        		<tr>
        		    <td style="width:75%">
        		            <table style="width:100%;" width="100%" border="0" cellpadding="0" cellspacing="0">
            				<tr>
            					<td style="width:30%; text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px;margin:0; padding:5px;">
            						REGISTERED ELECTRICAL CONTRACTOR		
            					</td>
            					<td style="width:70%; text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px;margin:0; padding:5px; border-bottom:1px solid #000;">
                                        {{ $company_details->Company_Name }}
            					</td>
            				</tr>
            				</table>
        		    </td>
        		    <td style="width:2%; text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px;margin:0; padding:5px;">
						
					</td>
        		    <td style="width:10%; text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px;margin:0; padding:5px;">
						REC No:
					</td>
					<td style="width:13%; text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px;margin:0; padding:5px; border-bottom:1px solid #000;">
                            {{ $company_details->REC_Number }}
					</td>
        		</tr>
        		</table>
			</td>
		</tr>
		
		
		<tr>
			<td valign="top" style="width:100%">
			    <table style="width:100%;" width="100%" border="0" cellpadding="0" cellspacing="0">
        		<tr>
        		    <td style="width:75%">
        		            <table style="width:100%;" width="100%" border="0" cellpadding="0" cellspacing="0">
            				<tr>
            					<td style="width:20%; text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px;margin:0; padding:5px;">
            						REGISTERED ADDRESS
            					</td>
            					<td style="width:80%; text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px;margin:0; padding:5px; border-bottom:1px solid #000;">
                                       {{ strip_tags($company_details->Address) }}
            					</td>
            				</tr>
            				</table>
        		    </td>
        		    <td style="width:2%; text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px;margin:0; padding:5px;">
						
					</td>
        		    <td style="width:10%; text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px;margin:0; padding:5px;">
						PHONE No:
					</td>
					<td style="width:13%; text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px;margin:0; padding:5px; border-bottom:1px solid #000;">
                            {{ $company_details->Phone  }}
					</td>
        		</tr>
        		</table>
			</td>
		</tr>
		
		<tr>
			<td valign="top">
				
				
				
				
				<table style="width:100%;" width="100%" border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td style="width:74%; text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px;margin:0; padding:5px; border-bottom:1px solid #000;">
						&nbsp;&nbsp;&nbsp;
					</td>
					<td style="width:6%; text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px;margin:0; padding:5px;">
						MOBILE No:
					</td>
					<td style="width:15%; text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px;margin:0; padding:5px; border-bottom:1px solid #000;">
						&nbsp;&nbsp;&nbsp;
					</td>
				</tr>
				</table>
				
				
				<table style="width:100%;" width="100%" border="0" cellpadding="0" cellspacing="0">
				<tr>
				    <td style="width:25%; text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px;margin:0; padding:5px;">
    						RESPONSIBLE PERSON: (Please Print)
    				</td>
    				<td style="width:43%; text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px;margin:0; padding:5px; border-bottom:1px solid #000;">
                                {{ $company_details->REC_Name }}
    				</td>
    				<td style="width:2%; text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px;margin:0; padding:5px;">
    						&nbsp;
    				</td>
    				<td style="width:5%; text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px;margin:0; padding:5px;">
    						EMAIL
    				</td>
    				
    				<td style="width:25%; text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px;margin:0; padding:5px; border-bottom:1px solid #000;">
                                {{ $company_details->Email }}
    				</td>
				</tr>
				</table>
				
			
				
				<table style="width:100%;" width="100%" border="0" cellpadding="0" cellspacing="0" >
				<tr>
        			<td style="height:10px;">
        			</td>
	        	</tr>    
				<tr>
					<td style="width:30%; text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px;margin:0; padding:5px;">
						SIGNATURE:
					</td>
					<td style="width:45%; text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px;margin:0; padding:0;">
						<img src="{{asset('/img/'.$company_details->Signature)}}" width="100px" height="30px">
					</td>
					<td style="width:2%;">
						
					</td>
					<td style="width:10%; text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px;margin:0; padding:5px;">
						Date:
					</td>
					<td style="width:15%; text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px;margin:0; padding:5px; border-bottom:1px solid #000;">
                            {{ @ $job->completed_on }}
					</td>
				</tr>
				</table>
				
				
				<table style="width:100%;" width="100%" border="0" cellpadding="0" cellspacing="0" >
				<tr>
        			<td style="height:5px;"></td>
        		</tr>
        		<tr>
        			<td style="text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px;margin:0; padding:5px;">
        			    The Distribution Companies listed below comply with the Australian Privacy Principles applied under the Privacy Act 1988 and any other applicable laws that protect your privacy.
Please refer to the relevant Distribution Companies website for more information on their Privacy Policies.
        		    </td>
        		</tr>
        		<tr>
        			<td style="text-align:center; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:10px;margin:0; padding:5px;">
        			    AusNet Services – 1300 360 795 Citipower Pty – 1300 132 894 Jemena – 1300 131 871 Powercor Australia Ltd – 1300 360 410 United Energy – 1300 131 689
        		    </td>
        		</tr>
	        	</table>
				
				
				

				
			</td>
		</tr>
		
	
		
		
		</table>
		
		
		
</tr> 



</table>
</div>
</body>
</html>