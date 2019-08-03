<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" name="viewport">
<title>UE-PR-0842-FM001-MEG-UE-Connection-Form-V1</title>
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
<div style="width:750px; margin: 10px; padding:10px; border:0px solid #222;">
<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0" bgcolor="#fff" >
<tr>
	<td valign="top">
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0" border="0">
		 <tr>
			<td style="height:10px;"></td>
		</tr>
		<tr>
				<td align="left" valign="bottom" style="width:77%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000000; font-size:14px; font-weight:bold; margin:0; padding:0;">United Energy Inverter-Based Micro Embedded Generator Connection Form</td>
				<td align="right" style="width:15%;" ><img src="{{ asset('pdf-test-image/ue-pr.png') }}" width="100px" alt="United Energy" style="text-align:right"></td>
				<td style="width:8%;">&nbsp;</td>
		</tr>
		</table>

		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0" >
		<tr>
			<td style="height:10px;"></td>
		</tr>
		</table>
	</td>
</tr>
<tr>
	<td valign="top">
		<table style=" width:100%; background-color:#8db2e1;" width="100%" cellpadding="0" cellspacing="0" style="margin:0; padding:0;" class="tbl-border " bgcolor="#8db2e1">
		<tr>
			<td align="left" style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; font-size:13px;margin:0; padding:5px;">
				<span style="color:#000;  font-family:  Arial, Helvetica, sans-serif ; font-size:12px; font-weight:bold">This application form is applicable for AS4777 compliant INVERTER generating & storage systems up to 10kW/phase/premises. Typically includes residential Solar and/or Battery Storage. For all other systems please consult </span>
				<span style="color:#0000ff;  font-family:  Arial, Helvetica, sans-serif ; font-size:13px;">www.unitedenergy.com.au</span>.
			</td>
		</tr>
		</table>
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td style="height:10px;"></td>
		</tr>
		</table>
	</td>
</tr>


<tr>
	<td valign="top">
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td style="height:10px;"></td>
		</tr>
		<tr>
			<td align="left" style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#984806; font-size:14px; font-weight:bold; margin:0; padding:0;">
				SECTION 1: INSTALLATION DETAILS <span style="font-style:italic;">(to be completed and signed by the installer)</span>
			</td>
		</tr>
		<tr>
			<td style="height:10px;"></td>
		</tr>		
		</table>
		
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0"  class="tbl-border ">
		<tr>
			<td style=" width:35%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px; ">
				Is the embedded generator new, an alteration or an abolishment? <span style="font-weight:normal">(tick one box)</span>
			</td>
			<td style=" width:15%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px;    border-right:1px solid #000;">
				<span class="chkbox">@if($job->connection_type == "New" ) <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span> New<br>
				<span class="chkbox">@if($job->connection_type == "Alteration" ) <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span> Alteration<br>
				<span class="chkbox">@if($job->connection_type == "Abolishment" ) <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span> Abolishment
			</td>
			<td style=" width:33%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px;   ">
				Are separate inverter(s) installed for the generator and energy storage system?<br><span style="font-weight:normal">(tick one box)</span>
			</td>
			<td style=" width:17%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px;  ">
				<span class="chkbox">@if($job->seperate_inverter == "Yes" ) <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span> Yes / Separate<br>
				<span class="chkbox"> <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> </span> No / Combined<br>
				<span class="chkbox">@if($job->battery_storage == "No" ) <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span> No Storage System
			</td>
		</tr>
		</table>
		
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td style="height:10px;"></td>
		</tr>	
		</table>
</tr>
<tr>
	<td valign="top">
				
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0"  class="tbl-border ">
		<tr>
			<td style=" width:44%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px;  border-right:1px solid #000; border-bottom:1px solid #000;">
				Installed Capacity<br><span style="font-weight:normal">(Including previously installed capacity if applicable)</span>
			</td>
			<td style=" width:11%;text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;font-weight:bold; margin:0; padding:5px;    border-right:1px solid #000; border-bottom:1px solid #000;">
				Solar PV
			</td>
			<td style=" width:11%;text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px;    border-right:1px solid #000; border-bottom:1px solid #000; ">
				Wind
			</td>
			<td style=" width:15%;text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;font-weight:bold; margin:0; padding:5px; border-right:1px solid #000; border-bottom:1px solid #000;">
				Other Type: <span style=" font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;font-weight:normal; margin:5px; padding:5px; border-bottom:1px solid #000;"  >Type other type</span>
			</td>
			<td style=" width:20%;text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;font-weight:bold; margin:0; padding:5px;  border-bottom:1px solid #000; ">
				Energy Storage System<br><span style="font-weight:normal; ">(ie batteries at 3hr discharge rate)</span>
			</td>			
		</tr>
		<tr>
			<td style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:5px; padding:5px;  border-right:1px solid #000; border-bottom:1px solid #000;">
				New capacity installed
			</td>
			<td style=" text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px;     border-right:1px solid #000; border-bottom:1px solid #000;">
				<span style=" font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;font-weight:normal; margin:0 0 5px 0; display:inline-block; padding:5px; border-bottom:1px solid #000;"  >{{ $job->solar_capacity_installed / 1000 }}</span> kW
			</td>
			<td style=" text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:5px; padding:5px;    border-right:1px solid #000; border-bottom:1px solid #000; ">
				<span style=" font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;font-weight:normal; margin:0; padding:5px; border-bottom:1px solid #000;"  >N/A</span> kW
			</td>
			<td style=" text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:5px; padding:5px; border-right:1px solid #000;  border-bottom:1px solid #000; ">
				<span style=" font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;font-weight:normal; margin:0; padding:5px; border-bottom:1px solid #000;"  >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> kW
			</td>
			<td style=" text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:5px; padding:5px;  border-bottom:1px solid #000; ">
				<span style=" font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;font-weight:normal; margin:0; padding:5px; border-bottom:1px solid #000;"  >N/A</span> kWh
			</td>			
		</tr>
		<tr>
			<td style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px;  border-right:1px solid #000; border-bottom:1px solid #000;">
				Previously installed capacity retained
			</td>
			<td style=" text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:5px; padding:5px;    border-right:1px solid #000; border-bottom:1px solid #000;">
				<span style=" font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;font-weight:normal; margin:0; padding:5px; border-bottom:1px solid #000;"  >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> kW
			</td>
			<td style=" text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:5px; padding:5px;    border-right:1px solid #000; border-bottom:1px solid #000; ">
				<span style=" font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;font-weight:normal; margin:0; padding:5px; border-bottom:1px solid #000;"  >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> kW
			</td>
			<td style=" text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px; border-right:1px solid #000;  border-bottom:1px solid #000; ">
				<span style=" font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;font-weight:normal; margin:0; padding:5px; border-bottom:1px solid #000;"  >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> kW
			</td>
			<td style=" text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:5px; padding:5px;  border-bottom:1px solid #000; ">
				<span style=" font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;font-weight:normal; margin:0; padding:5px; border-bottom:1px solid #000;"  >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> kWh
			</td>			
		</tr>
		<tr>
			<td style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:5px; padding:5px;  border-right:1px solid #000; border-bottom:1px solid #000;">
				Previously installed capacity removed
			</td>
			<td style=" text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px;    border-right:1px solid #000; border-bottom:1px solid #000;">
				<span style=" font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;font-weight:normal; margin:0; padding:5px; border-bottom:1px solid #000;"  >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> kW
			</td>
			<td style=" text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px;    border-right:1px solid #000; border-bottom:1px solid #000; ">
				<span style=" font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;font-weight:normal; margin:0; padding:5px; border-bottom:1px solid #000;"  >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> kW
			</td>
			<td style=" text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px; border-right:1px solid #000;  border-bottom:1px solid #000; ">
				<span style=" font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;font-weight:normal; margin:0; padding:5px; border-bottom:1px solid #000;"  >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> kW
			</td>
			<td style=" text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:5px; padding:5px;  border-bottom:1px solid #000; ">
				<span style=" font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;font-weight:normal; margin:0; padding:5px; border-bottom:1px solid #000;"  >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> kWh
			</td>			
		</tr>
		<tr>
			<td style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px;  border-right:1px solid #000; ">
				Total installed capacity after all works
			</td>
			<td style=" text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:5px; padding:5px;    border-right:1px solid #000; ">
				<span style=" font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;font-weight:normal; margin:0; padding:5px; border-bottom:1px solid #000;"  >{{ $job->solar_capacity_installed  / 1000 }}</span> kW
			</td>
			<td style=" text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:5px; padding:5px;    border-right:1px solid #000;  ">
				<span style=" font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;font-weight:normal; margin:0; padding:5px; border-bottom:1px solid #000;"  >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> kW
			</td>
			<td style=" text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:5px; padding:5px; border-right:1px solid #000;  ">
				<span style=" font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;font-weight:normal; margin:0; padding:5px; border-bottom:1px solid #000;"  >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> kW
			</td>
			<td style=" text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:5px; padding:5px;   ">
				<span style=" font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;font-weight:normal; margin:0; padding:5px; border-bottom:1px solid #000;"  >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> kWh
			</td>			
		</tr>
		</table>
		
</tr>
<tr>
	<td valign="top">		
		
		
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td style="height:10px;"></td>
		</tr>	
		</table>
		
		
		<table style=" width:92%;" width="100%" cellpadding="0" cellspacing="0"  class="tbl-border ">
		<tr>
			<td rowspan="3" style=" width:40%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px;  border-right:1px solid #000; ">
				Multi-phase systems only:<br><br>Enter the installed capacity per phase
			</td>
			<td style=" width:22%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;font-weight:bold; margin:0; padding:5px;    border-right:1px solid #000; border-bottom:1px solid #000;">
				Phase
			</td>
			<td style=" width:13%;text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px;    border-right:1px solid #000; border-bottom:1px solid #000; ">
				Red
			</td>
			<td style=" width:13%;text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;font-weight:bold; margin:0; padding:5px; border-right:1px solid #000;   border-bottom:1px solid #000;">
				White
			</td>
			<td style=" width:13%;text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;font-weight:bold; margin:0; padding:5px;  border-bottom:1px solid #000; ">
				Blue
			</td>			
		</tr>
		<tr>
			<td style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; font-weight:bold; margin:5px; padding:5px;  border-right:1px solid #000; border-bottom:1px solid #000;">
				Power rating
			</td>
			<td style=" text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px;    border-right:1px solid #000; border-bottom:1px solid #000; ">
				<span style=" font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;font-weight:normal; margin:0px 0 5px 0; display:inline-block; padding:5px; border-bottom:1px solid #000;"  >{{$job->solar_capacity_installed_phase_a / 1000 }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> kW
			</td>
			<td style=" text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px; border-right:1px solid #000;  border-bottom:1px solid #000; ">
				<span style=" font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;font-weight:normal; margin:0px 0 5px 0; padding:5px; border-bottom:1px solid #000;"  >{{$job->solar_capacity_installed_phase_b / 1000  }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> kW
			</td>
			<td style=" text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px;  border-bottom:1px solid #000; ">
				<span style=" font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;font-weight:normal; margin:0px 0 5px 0; padding:5px; border-bottom:1px solid #000;"  >{{$job->solar_capacity_installed_phase_c / 1000  }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> kW
			</td>			
		</tr>
		<tr>
			<td style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; font-weight:bold; margin:5px; padding:5px;  border-right:1px solid #000;">
				Energy storage capacity
			</td>
			<td style=" text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:5px; padding:5px;    border-right:1px solid #000;">
				<span style=" font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;font-weight:normal; margin:0px 0 5px 0;display:inline-block; padding:5px; border-bottom:1px solid #000;"  >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> kWh
			</td>
			<td style=" text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:5px; padding:5px; border-right:1px solid #000;   ">
				<span style=" font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;font-weight:normal; margin:0px 0 5px 0; padding:5px; border-bottom:1px solid #000;"  >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> kWh
			</td>
			<td style=" text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:5px; padding:5px;  ">
				<span style=" font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;font-weight:normal; margin:0px 0 5px 0; padding:5px; border-bottom:1px solid #000;"  >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> kWh
			</td>			
		</tr>
		</table>
</tr>
<tr>
	<td valign="top">
		
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td style="height:10px;"></td>
		</tr>	
		</table>
		@php $inverter_products = []; @endphp
		 @foreach($products as $product)
                    @php $inverter_count = 0 ; $inverter_quantity = 0;  $rated_power_output = 0; @endphp
                    @if($product->category->name == "Solar Inverter")
                        @php $inverter_count = $inverter_count + 1; 
                            $inverter_quantity =  $inverter_quantity + $product->quantity;
                            $rated_power_output =  $rated_power_output + $product->rated_power_output;
                            $inverter_products[] = $product;
                        @endphp 
                    @endif	
                @endforeach
		
		
		
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0"  class="tbl-border ">
		<tr>
			<td style=" width:35%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px;  border-right:1px solid #000; border-bottom:1px solid #000;">
				Inverter / Energy Storage Information:
			</td>
			<td style=" width:15%;text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;font-weight:bold; margin:0; padding:5px;    border-right:1px solid #000; border-bottom:1px solid #000;">
				 Inverter Model 1 
			</td>
			<td style=" width:15%;text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px;    border-right:1px solid #000; border-bottom:1px solid #000; ">
				Inverter Model 2
			</td>
			<td style=" width:15%;text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;font-weight:bold; margin:0; padding:5px; border-right:1px solid #000;   border-bottom:1px solid #000;">
				Inverter Model 3
			</td>
			<td style=" width:20%;text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;font-weight:bold; margin:0; padding:5px;  border-bottom:1px solid #000; ">
				Energy Storage System<br><span style="font-weight:normal; display:block; text-align:center;">(ie batteries)</span>
			</td>			
		</tr>
		<tr>
			<td style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px;  border-right:1px solid #000;  border-bottom:1px solid #000;">
				Manufacturer
			</td>
			<td style=" text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:5px; padding:5px;    border-right:1px solid #000; border-bottom:1px solid #000; ">
				@if($inverter_products[0]->category->name == "Solar Inverter"){{ $inverter_products[0]->brand->name }} @endif
			</td>
			<td style=" text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:5px; padding:5px;    border-right:1px solid #000;  border-bottom:1px solid #000; ">
                @if($inverter_products[1]->category->name == "Solar Inverter"){{ $inverter_products[1]->brand->name }}@endif
			</td>
			<td style=" text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:5px; padding:5px; border-right:1px solid #000; border-bottom:1px solid #000;  ">
                @if($inverter_products[2]->category->name == "Solar Inverter"){{ $inverter_products[2]->brand->name }}@endif 
			</td>
			<td style=" text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:5px; padding:5px;   border-bottom:1px solid #000; ">
				
			</td>	
		</tr>
		<tr>
			<td style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px;  border-right:1px solid #000;  border-bottom:1px solid #000;">
				Model Name
			</td>
			<td style=" text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:5px; padding:5px;    border-right:1px solid #000; border-bottom:1px solid #000; ">
				@if($inverter_products[0]->category->name == "Solar Inverter"){{ $inverter_products[0]->model }} @endif
			</td>
			<td style=" text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:5px; padding:5px;    border-right:1px solid #000; border-bottom:1px solid #000;  ">
				@if($inverter_products[1]->category->name == "Solar Inverter"){{ $inverter_products[1]->model }}@endif
			</td>
			<td style=" text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:5px; padding:5px; border-right:1px solid #000;  border-bottom:1px solid #000; ">
                @if($inverter_products[2]->category->name == "Solar Inverter") {{ $inverter_products[2]->model }} @endif
			</td>
			<td style=" text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:5px; padding:5px;  border-bottom:1px solid #000;  ">
				
			</td>			
		</tr>
		   
		<tr>
			<td style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px;  border-right:1px solid #000;  border-bottom:1px solid #000;">
				Rating of Each Inverter / Storage System
			</td>
			<td style=" text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:5px; padding:5px;    border-right:1px solid #000; border-bottom:1px solid #000; ">
				<span style=" font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;font-weight:normal; margin:0; padding:5px; border-bottom:1px solid #000;" >@if($inverter_count != 0 ){{ $rated_power_output / 1000 }} @else &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; @endif</span> kW
			</td>
			<td style=" text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:5px; padding:5px;    border-right:1px solid #000;   border-bottom:1px solid #000;">
				<span style=" font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;font-weight:normal; margin:0; padding:5px; border-bottom:1px solid #000;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> kW
			</td>
			<td style=" text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:5px; padding:5px; border-right:1px solid #000;  border-bottom:1px solid #000; ">
				<span style=" font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;font-weight:normal; margin:0; padding:5px; border-bottom:1px solid #000;"  >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> kW
			</td>
			<td style=" text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:5px; padding:5px;   border-bottom:1px solid #000; ">
				<span style=" font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;font-weight:normal; margin:0; padding:5px; border-bottom:1px solid #000;"  >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> kWh
			</td>			
		</tr>
		<tr>
			<td style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px;  border-right:1px solid #000;  border-bottom:1px solid #000;">
				Number of Inverters / Storage Systems
			</td>
			<td style=" text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:5px; padding:5px;    border-right:1px solid #000; border-bottom:1px solid #000; ">
                 @if($inverter_count != 0 ) {{ $inverter_quantity }} @endif
                <!--@if($inverter_count != 0 ) {{ $inverter_count }}  @endif-->
			</td>
			<td style=" text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:5px; padding:5px;    border-right:1px solid #000; border-bottom:1px solid #000;  ">
				
			</td>
			<td style=" text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:5px; padding:5px; border-right:1px solid #000;  border-bottom:1px solid #000; ">
				
			</td>
			<td style=" text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:5px; padding:5px;  border-bottom:1px solid #000;  ">
				
			</td>	
		</tr>
		<tr>
			<td style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px;  border-right:1px solid #000;  border-bottom:1px solid #000;">
			Is the Inverter AS4777 compliant (Yes/No)
			</td>
			<td style=" text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:5px; padding:5px;    border-right:1px solid #000; border-bottom:1px solid #000; ">
				Yes
			</td>
			<td style=" text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:5px; padding:5px;    border-right:1px solid #000; border-bottom:1px solid #000;  ">
				
			</td>
			<td style=" text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:5px; padding:5px; border-right:1px solid #000;  border-bottom:1px solid #000; ">
				
			</td>
			<td style=" text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:5px; padding:5px;  border-bottom:1px solid #000;  ">
				
			</td>	
		</tr>
		<tr>
			<td style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px;  border-right:1px solid #000;  border-bottom:1px solid #000;">
			Status <span style="font-weight:normal">(tick box)</span>
			</td>
			<td style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;font-weight:bold; margin:5px; padding:5px;    border-right:1px solid #000; border-bottom:1px solid #000; ">
				<span class="chkbox"><img src="{{ asset('assets/images/checkbox.png') }}"/></span> New<br>
				<span class="chkbox"><img src="{{ asset('assets/images/checkbox-blank.png') }}"/></span> Existing Retained<br>
				<span class="chkbox"><img src="{{ asset('assets/images/checkbox-blank.png') }}"/></span> Existing Removed
			</td>
			<td style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;font-weight:bold; margin:5px; padding:5px;    border-right:1px solid #000; border-bottom:1px solid #000;  ">
				<span class="chkbox"><img src="{{ asset('assets/images/checkbox-blank.png') }}"/></span> New<br>
				<span class="chkbox"><img src="{{ asset('assets/images/checkbox-blank.png') }}"/></span> Existing Retained<br>
				<span class="chkbox"><img src="{{ asset('assets/images/checkbox-blank.png') }}"/></span> Existing Removed
			</td>
			<td style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;font-weight:bold; margin:5px; padding:5px; border-right:1px solid #000;  border-bottom:1px solid #000; ">
				<span class="chkbox"><img src="{{ asset('assets/images/checkbox-blank.png') }}"/></span> New<br>
				<span class="chkbox"><img src="{{ asset('assets/images/checkbox-blank.png') }}"/></span> Existing Retained<br>
				<span class="chkbox"><img src="{{ asset('assets/images/checkbox-blank.png') }}"/></span> Existing Removed
			</td>
			<td style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;font-weight:bold; margin:5px; padding:5px;  border-bottom:1px solid #000;  ">
				<span class="chkbox"><img src="{{ asset('assets/images/checkbox-blank.png') }}"/></span> New<br>
				<span class="chkbox"><img src="{{ asset('assets/images/checkbox-blank.png') }}"/></span> Existing Retained<br>
				<span class="chkbox"><img src="{{ asset('assets/images/checkbox-blank.png') }}"/></span> Existing Removed
			</td>	
		</tr>
		<tr>
			<td style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px;  border-right:1px solid #000;">
			Certifying Authority Certificate Number <span style="font-weight:normal">(Available from Clean Energy Council website)</span>
			</td>
			<td style=" text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:5px; padding:5px;    border-right:1px solid #000; ">
                {{ $inverter_products[0]->certifying_authority_certificate_number }}
			</td>
			<td style=" text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:5px; padding:5px;    border-right:1px solid #000;  ">
                {{ $inverter_products[1]->certifying_authority_certificate_number }}
			</td>
			<td style=" text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:5px; padding:5px; border-right:1px solid #000;">
                {{ $inverter_products[2]->certifying_authority_certificate_number }}
			</td>
			<td style=" text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:5px; padding:5px;   ">
               
			</td>	
		</tr>
		</table>
</tr>
<tr>
	<td valign="top">		
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0" >
		<tr>
			<td  height="10px"></td>
		</tr>
		</table>
		
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0"  class="tbl-border ">		
		<tr>
			<td  style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:5px; padding:5px;  border-right:1px solid #000;">
			Operating Manual Provided to Customer  <span style="font-weight:normal">(tick box)</span>&nbsp;&nbsp;&nbsp;<span class="chkbox"><img src="{{ asset('assets/images/checkbox.png') }}"/></span> Yes
			</td>
			
			<td  style=" text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:5px; padding:5px; font-weight:bold;   ">
				Instructed Customer in Operating of System <span style="font-weight:normal">(tick box)</span>&nbsp;&nbsp;&nbsp;<span class="chkbox"><img src="{{ asset('assets/images/checkbox.png') }}"/></span> Yes
			</td>
		</tr>		
		</table>
		
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0" >
		<tr>
			<td  height="20px"></td>
		</tr>
		</table>
		
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0" >		
		<tr>
			<td  style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px; ">
			Other information <span style="font-weight:normal">(if required):</span>
			</td>
		</tr>
		<tr>
			<td  style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000;  font-size:12px; margin:20px 0;height:30px; padding:5px;border-bottom:1px solid #000; display:inline-block; width:100%;">
				&nbsp;
			</td>
		</tr>
		<tr>
			<td  style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000;  font-size:12px; margin:20px 0;height:30px; padding:5px;border-bottom:1px solid #000; display:inline-block; width:100%;">
				&nbsp;
			</td>
		</tr>
		<tr>
			<td  style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000;  font-size:12px; margin:20px 0;height:30px; padding:5px;border-bottom:1px solid #000; display:inline-block; width:100%;">
				&nbsp;
			</td>
		</tr>
		</table>
</tr>
<tr>
	<td valign="top">
				
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0" >
		<tr>
			<td  height="30px">&nbsp;</td>
		</tr>
		</table>
		
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0" >		
		<tr>
			<td  style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px; ">
			By signing this form, you acknowledge and represent that the information provided is true and correct.
			</td>
		</tr>
		</table>
		
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0" >		
		<tr>
			<td  style=" width:10%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px; ">
			Company:
			</td>
			<td  style=" width:40%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000;  font-size:12px; margin:0; padding:5px;  border-bottom:1px solid #000;">
				{{ $companyDetails->Company_Name }}
			</td>
			<td  style=" width:10%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px; ">
			Address:
			</td>
			<td colspan="3" style="width:40%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px;  border-bottom:1px solid #000;">
				{{ strip_tags($companyDetails->Address) }}
			</td>
		</tr>
		<tr>
			<td colspan="4" style="height:20px;"></td>
		</tr>
		<tr>
			<td  style=" width:10%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px; ">
			Telephone:
			</td>
			<td  style=" width:40%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000;  font-size:12px; margin:0; padding:5px; border-bottom:1px solid #000; ">
				{{ $companyDetails->Phone }}
			</td>
			<td  style=" width:10%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px; ">
			E-mail:
			</td>
			<td colspan="3"  style="width:40%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px; border-bottom:1px solid #000; ">
				{{ $installer->email }}
			</td>
		</tr>
		<tr>
			<td colspan="4" style="height:20px;"></td>
		</tr>
		<tr>
			<td  style=" width:10%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px; ">
			Name:
			</td>
			<td  style=" width:40%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000;  font-size:12px; margin:0; padding:5px; border-bottom:1px solid #000; ">
				Bradley Free
			</td>
			<td  style=" width:10%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px; ">
			Signature:
			</td>
			<td  style="width:15%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px; ">
                @if(isset($installer->image)) <img src="{{ asset('/user/'.$installer->image) }}" style="height:50px;width:100px" />@endif
			</td>
			<td  style=" width:5%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px; ">
			Date:
			</td>
			<td  style="width:20%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px;  border-bottom:1px solid #000;">
				{{ @ $job->installation_date }}
			</td>
		</tr>
		</table>
	</td>
</tr>
<tr>
	<td valign="top">
	
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td style="height:20px;"></td>
		</tr>
			<tr>
		    <td style="text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:10px; margin:0; padding:5px; ">This form continues over the page.</td>
		</tr>
		</table>
	</td>
</tr>

<tr>
	<td valign="top">
	    
	    
	    <table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0" border="0">
		 <tr>
			<td style="height:30px;">&nbsp;</td>
		</tr>
		<tr>
				<td align="left" valign="bottom" style="width:77%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000000; font-size:14px; font-weight:bold; margin:0; padding:0;">United Energy Inverter-Based Micro Embedded Generator Connection Form</td>
				<td align="right" style="width:15%;" ><img src="{{ asset('pdf-test-image/ue-pr.png') }}" width="100px" alt="United Energy" style="text-align:right"></td>
				<td style="width:8%;">&nbsp;</td>
		</tr>
		</table>

	
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td style="height:10px;">&nbsp;</td>
		</tr>
		<tr>
			<td align="left" style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#984806; font-size:14px; font-weight:bold; margin:0; padding:0;">
				SECTION 2: INSTALLATION COMPLIANCE <span style="font-style:italic;"> (to be completed and signed by the Registered Electrical Contractor)</span>
			</td>
		</tr>
		<tr>
			<td style="height:20px;"></td>
		</tr>		
		</table>
		
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">		
		<tr>
			<td colspan="2" align="left" style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; font-weight:bold; margin:0; padding:0;">
				By signing this form, you acknowledge and represent that the information provided is true and correct and that the minimum requirements set out for inverter-based embedded generator systems up to 10kW/phase/premises have been met. In particular:
			</td>
		</tr>
		<tr>
			<td valign="top" align="left" style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px;">
				<p style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px;"><li>the inverter-based embedded generator system complies with the Electricity Safety Act 1998 (Vic) and associated Safety Regulations, the Electricity; Distribution Code, the Victorian Service & Installation Rules, AS/NZS3000 (Wiring Rules) and AS4777 (Grid Connection of Energy Systems via Inverters), and any other relevant Acts, regulations, standards or guidelines;</li></p>
				<p style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px;"><li>the inverter-based embedded generator system is connected to a dedicated circuit complete with lockable isolating switch at the switchboard;</li></p>
				<p style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px;"><li>the main switchboard, isolating fuse/switch/circuit breaker are labelled correctly; alternative supply signage has been installed;</li></p>
			</td>
			<td valign="top" align="left" style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px;">
				<p style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px;"><li>commissioning tests as specified in the Service & Installation Rules have been completed and passed;</li></p>
				<p style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px;"><li>a Prescribed Certificate of Electrical Safety (CES) has been obtained; and copies of the Electrical Works Request and the Prescribed CES will be sent to the generator system owner’s Retailer; and</li></p>
				<p style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px;"><li>the generator system owner has been advised that the inverter-based embedded generator system should remain switched off until any metering upgrades are complete to avoid potential metering and billing issues.</li></p>
			</td>
		</tr>
			
		</table>
	</td>
</tr>



<tr>
	<td valign="top">
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0" >
		<tr>
			<td  height="10px"></td>
		</tr>
		</table>
		
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0" >		
		<tr>
			<td  style=" width:20%; text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px; ">
			REC Name:
			</td>
			<td  style=" width:20%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000;  font-size:12px; margin:0; padding:5px;  border-bottom:1px solid #000;">
				{{ $companyDetails->REC_Name }}
			</td>
			<td  style=" width:20%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px; ">
			REC Licence No.:
			</td>
			<td colspan="3" style="width:40%; text-align:left; font-family:  Arial, Helvetica, sans-serif; color:#000; font-size:12px; margin:0; padding:5px;  border-bottom:1px solid #000;">
				{{ $companyDetails->REC_Number}}
			</td>
		</tr>
		
		<tr>
			<td  style=" width:20%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px; ">
			REC Signature:
			</td>
			<td  style=" width:20%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000;  font-size:12px; margin:0; padding:5px; ">
			    <img src="{{asset('/img/'.$companyDetails->Signature)}}" width="100px" height="50px">
			</td>
			<td  style=" width:20%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px; ">
			Telephone:
			</td>
			<td style="width:20%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px; border-bottom:1px solid #000; ">
				{{ $companyDetails->Phone }}
			</td>
			<td  style=" width:5%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px; ">
			Date:
			</td>
			<td  style="width:15%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px;  border-bottom:1px solid #000;">
				{{ $job->installation_date }}
			</td>
		</tr>
		</table>
	</td>
</tr>


<tr>
	<td valign="top">
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td style="height:20px;"></td>
		</tr>
		<tr>
			<td align="left" style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#984806; font-size:14px; font-weight:bold; margin:0; padding:0;">
				SECTION 3: SYSTEM OWNER DETAILS  <span style="font-style:italic;"> (to be completed and signed by the generator owner)</span>
			</td>
		</tr>
		<tr>
			<td style="height:10px;"></td>
		</tr>		
		</table>
		
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0" class="tbl-border">
		<tr>
			<td align="left" style="width:20%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; font-weight:bold; margin:0; padding:5px; border-right:1px solid #000; border-bottom:1px solid #000;">
				Supply Address
			</td>
			<td colspan="3" align="left" style="width:80%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;  margin:0; padding:5px; border-bottom:1px solid #000;">
				{{ $customer->unit }} {{ $customer->street_number }} {{ $customer->suburb }}  {{ $customer->street_name }} {{ $customer->lot }}  {{ $customer->state }}  {{ $customer->post_code }}
			</td>
		</tr>
		<tr>
			<td align="left" style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; font-weight:bold; margin:0; padding:5px;  border-right:1px solid #000; border-bottom:1px solid #000;">
				Generator Owner Name
			</td>
			<td colspan="3" align="left" style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;  margin:0; padding:5px; border-bottom:1px solid #000;">
				{{ $customer->first_name }} {{ $customer->last_name }}
			</td>
		</tr>
		<tr>
			<td align="left" style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; font-weight:bold; margin:0; padding:5px;  border-right:1px solid #000; border-bottom:1px solid #000;">
				Customer NMI<br><span style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; font-weight:normal;">(Refer to your electricity bill)</span>
			</td>
			<td colspan="3" align="left" style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;  margin:0; padding:5px; border-bottom:1px solid #000;">
				{{ $customer->nmi }}
			</td>
		</tr>
		<tr>
			<td align="left" style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; font-weight:bold; margin:0; padding:5px;  border-right:1px solid #000; border-bottom:1px solid #000;">
				E-mail Address
			</td>
			<td colspan="3" align="left" style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;  margin:0; padding:5px; border-bottom:1px solid #000;">
				{{ $customer->email }}
			</td>
		</tr>
		
		<tr>	
			<td style=" width:23%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px;  border-right:1px solid #000; border-bottom:1px solid #000;">
			Telephone Number
			</td>
			<td colspan="3" style=" width:69%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:0; border-bottom:1px solid #000;">
			    
			    	<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0" >
			    	<tr>
			    	    <td style=" width:23%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px;  ">
			    	    Business Hours:
			    	    </td>
			    	    <td style=" width:23%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:normal; font-size:12px; margin:0; padding:5px; border-right:1px solid #000;">
			    	    {{ $customer->phone_mobile }} 
			    	    </td>
			    	    <td style=" width:23%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px;  ">
			    	    After Hours: 
			    	    </td>
			    	    <td style=" width:23%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:normal; font-size:12px; margin:0; padding:5px; ">
			    	    {{ $customer->phone_mobile }} 
			    	    </td>
			    	</tr>
			    	</table>
			    
			</td>
			
		</tr>
		
	
		<tr>
			<td align="left" style="width:20%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; font-weight:bold; margin:0; padding:5px;  border-right:1px solid #000; ">
				Mailing Address
			</td>
			<td colspan="3" align="left" style="width:80%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;  margin:0; padding:5px;">
				{{ $customer->unit }} {{ $customer->street_number }} {{ $customer->suburb }}  {{ $customer->street_name }} {{ $customer->lot }}  {{ $customer->state }}  {{ $customer->post_code }}
			</td>
		</tr>
		</table>
	</td>
</tr>


<tr>
	<td valign="top">
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td style="height:15px;"></td>
		</tr>
		<tr>
			<td align="left" style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:14px; text-transform:uppercase; font-weight:bold; margin:0; padding:5px 5px 5px 0;">
				CUSTOMER ACKNOWLEDGEMENT
			</td>
		</tr>
		<tr>
			<td align="left" style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px 5px 5px 0;">Acceptance of Model Standing Offer</td>
		</tr>		
		</table>
		
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0" class="tbl-border">
		<tr>
			<td colspan="7" align="left" style="width:100%; text-align:left; font-family:  Arial, Helvetica, sans-serif; color:#000; font-size:12px; font-weight:bold; margin:0; padding:5px;">
				By signing below, you acknowledge and represent that you have read, understand and agree to comply with the Basic Micro Embedded Generator Connection Model Standing Offer, and that you:
			</td>
		</tr>
		<tr>
			<td colspan="7" align="left" style="width:100%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px;">
				<p style="font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px;"><li>are the owner or have a contract with the owner of the inverter-based embedded generator system listed under the Supply Address in Section 1 above;</li></p>
				<p style="font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;  margin:0; padding:5px;"><li>have received an inverter-based embedded generator system operating manual from, and been instructed on the operation of the inverter-based embedded generator system by, the Installation Company detailed in Section 1;</li></p>
				<p style="font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;  margin:0; padding:5px;"><li>accept that approval will only be granted for the inverter-based embedded generator system detailed in this form, and that you must obtain further prior approval from United Energy to alter your inverter-based embedded generator system in any way;</li></p>
				<p style="font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;  margin:0; padding:5px;"><li>do not require a written offer.</li></p>
			</td>
		</tr>
		<tr>
			<td colspan="7" align="left" style="width:100%;">
			    <table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0" border="0">
			        <tr>
        			<td align="left" style="width:15%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:12px; font-weight:bold; margin:0; padding:5px;">
        				Customer Name:
        			</td>
        			<td align="left" style="width:20%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:12px;  margin:0; padding:5px;  border-bottom:1px solid #000;">
        				{{ $customer->first_name }} {{ $customer->last_name }}
        			</td>
        			<td align="left" style="width:20%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:12px; font-weight:bold;  margin:0; padding:5px;">
        		    Customer Signature
        			</td>
        			<td align="left" style="width:23%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:12px;  margin:0; padding:5px;">
        			@if($job->sign == 1) <img src="{{ $job->customer_sign }}" alt="" style="height:50px;" /> @endif
        			</td>
        			<td align="left" style="width:5%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:12px; font-weight:bold;  margin:0; padding:5px;">
        			Date
        			</td>
        			<td align="left" style="width:15%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:12px;  margin:0; padding:5px;  border-bottom:1px solid #000;">
        				{{ $job->installation_date }}
        			</td>
        			<td align="left" style="width:2%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;  margin:0; padding:5px;">
        				&nbsp;
        			</td>
        		</tr>
			        
			    </table>
			</td>
		</tr>
		
		<tr>
			<td colspan="7" style="height:10px;">&nbsp;</td>
		</tr>
		</table>
		
	</td>
</tr>


<tr>
	<td valign="top">
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td style="height:10px;"></td>
		</tr>
		<tr>
			<td align="left" style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:14px; text-transform:uppercase; font-weight:bold; margin:0; padding:5px 5px 5px 0;">
				OR
			</td>
		</tr>
		<tr>
			<td align="left" style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; font-weight:bold; padding:5px 5px 5px 0;">Require Written Offer</td>
		</tr>		
		</table>
		
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0" class="tbl-border">
		<tr>
			<td colspan="7" align="left" style="width:100%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px;">
				I would like United Energy to send me an offer for the Inverter-Based Micro Embedded Generator Connection.
			</td>
		</tr>
		
		<tr>
			<td colspan="7" align="left" style="width:100%;">
			    <table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0" border="0">
			        <tr>
        			<td align="left" style="width:15%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:12px; font-weight:bold; margin:0; padding:5px;">
        				Customer Name:
        			</td>
        			<td align="left" style="width:20%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:12px;  margin:0; padding:5px;  border-bottom:1px solid #000;">
        				{{ $customer->first_name }} {{ $customer->last_name }}
        			</td>
        			<td align="left" style="width:20%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:12px; font-weight:bold;  margin:0; padding:5px;">
        		    Customer Signature
        			</td>
        			<td align="left" style="width:23%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:12px;  margin:0; padding:5px;">
        		        @if($job->sign == 1) <img src="{{ $job->customer_sign }}" alt="" style="height:50px;width:100px;" /> @endif
        			</td>
        			<td align="left" style="width:5%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:12px; font-weight:bold;  margin:0; padding:5px;">
        			Date
        			</td>
        			<td align="left" style="width:15%;text-align:left; font-family: Arial, Helvetica, sans-serif; color:#000; font-size:12px;  margin:0; padding:5px;  border-bottom:1px solid #000;">
        			{{ $job->installation_date }}
        			</td>
        			<td align="left" style="width:2%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px;  margin:0; padding:5px;">
        				&nbsp;
        			</td>
        		</tr>
			        
			    </table>
			</td>
		</tr>
		<tr>
			<td colspan="7" style="height:10px;">&nbsp;</td>
		</tr>
		</table>
	</td>
</tr>

<tr>
	<td valign="top">
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td style="height:10px;"></td>
		</tr>
		<tr>
			<td align="left" style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; font-weight:bold; margin:0; padding:5px 5px 5px 0;">
				Please return to your Retailer if you have accepted of Model Standing Offer or return the completed and signed form (keeping a copy for your reference) to:
			</td>
		</tr>
		<tr>
			<td align="left" style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; font-weight:bold; padding:5px 5px 5px 0;">
				Mail: UE Connections, Locked Bag 238, South Melbourne, Vic 3205<br>
				E-mail: <span style="color:#0000ff;">ueconnections@ue.com.au</span>
			</td>
		</tr>		
		</table>
		
	</td>
</tr>


</table>
</div>
</body>
</html>