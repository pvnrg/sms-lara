<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" name="viewport">
<title>Citipower Powercor</title>
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
<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0" bgcolor="#fff">
<tr>
	<td valign="top">
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td style="height:10px;"></td>
		</tr>
		<tr>
			<td align="right" ><img src="{{ asset('pdf-test-image/citypower.png') }}" width="350px" alt="Citipower Powercor" style="text-align:right"></td>
		</tr>
		</table>
	</td>
</tr>
<tr>
	<td valign="top">
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td align="center" style="text-align:center; font-family:  Arial, Helvetica, sans-serif ; color:#000000; font-size:16px; font-weight:bold; margin:0; padding:0;">Photovoltaic (Solar) Generator Connection Form</td>
		</tr>
		</table>
	</td>
</tr>
<tr>
	<td valign="top">
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0" style="margin:0; padding:0;" class="tbl-border ">
		<tr>
			<td  style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#ff0000; font-size:12px;margin:0; padding:5px;  border-right:1px solid #000;">
				<span style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#ff0000; font-size:12px; font-weight:bold; margin:0; padding:0; ">Distribution Network</span><br>
				<span style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#ff0000; font-size:10px; font-weight:bold; margin:0; padding:0; font-style:italic; ">(Please tick applicable<br>Distributor)</span>
			</td>
			<td  style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#ff0000; font-size:12px; font-weight:bold; margin:0; padding:5px; border-right:1px solid #000;">
				CitiPower Pty <span class="chkbox">@if($customer->electrical_distributer == "Citipower")  <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span>
			</td>
			<td  style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#ff0000; font-size:12px; font-weight:bold;margin:0; padding:5px; ">
				Powercor Australia Ltd <span class="chkbox">@if($customer->electrical_distributer == "Powercor") <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span>
			</td>
			<td  style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#ff0000; font-size:12px; font-weight:bold;margin:0; padding:5px; ">&nbsp;</td>
		</tr>
		<tr>
            <td colspan="4" align="left" style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000000; font-size:11px; margin:0; padding:5px; border-top:1px solid #000;">Pre-approval is required for all inverter sizes. This form is to be used after pre-approval is obtained.</td>
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
			<td align="left" style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#ff0000; font-size:14px; font-weight:bold; margin:0; padding:0;">
				SECTION 1: INSTALLATION DETAILS <span style="font-style:italic;">(to be completed and signed by the installer)</span>
			</td>
		</tr>
		<tr>
			<td style="height:10px;"></td>
		</tr>		
		</table>
		
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0"  class="tbl-border ">
		<tr>
			<td style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px;  border-right:1px solid #000; border-bottom:1px solid #000;">
				Installer Company Name
			</td>
			<td style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px;    border-right:1px solid #000; border-bottom:1px solid #000;">
				{{ $companyDetails->Company_Name }}
			</td>
			<td style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px;    border-right:1px solid #000; border-bottom:1px solid #000;">
				Installer Phone Number
			</td>
			<td style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px;  border-bottom:1px solid #000;">
				{{ $companyDetails->Phone}}
			</td>
		</tr>
		<tr>
			<td style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px;  border-right:1px solid #000; border-bottom:1px solid #000;">
				Installer Company Address
			</td>
			<td colspan="3" style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px;   border-bottom:1px solid #000;">
				{{ strip_tags($companyDetails->Address) }}
			</td>
        </tr>
        @php $solar_inverter_rating = ''; $inverter_brand = ''; $inverter_model = ''; $battery_count = 0 ; $battery_type = ''; @endphp 
        @foreach($products as $product)
            @if($product->category->name == "Solar Inverter")
                @php	$solar_inverter_rating = $product->rated_power_output / 1000 ; 
                        $inverter_brand = $product->brand->name ;  
                        $inverter_model = $product->model ;
                @endphp
            @endif
            @if($product->category->name == "Battery")
                @php	$battery_count = $battery_count + 1;
                        $battery_type =  $product->battery_type ;
                @endphp
            @endif
        @endforeach
		<tr>
			<td style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px;  border-right:1px solid #000;border-bottom:1px solid #000;">
				<span style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; display:block;">Total Installed Capacity</span><br>
				<span style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:normal; font-size:10px;  ">(Total rating of all solar panels)</span>
			</td>
			<td style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px;    border-right:1px solid #000;border-bottom:1px solid #000;">
				<span style="display:inline-block;  ">{{ $job->solar_capacity_installed / 1000 }}</span>
				<span  style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:0;">kW</span>
			</td>
			<td style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px;    border-right:1px solid #000;border-bottom:1px solid #000;">
				<span style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; display:block;">Solar Inverter Power Rating</span><br>
				<span style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:normal; font-size:10px;  ">(1 hour or continuous rating)</span>
			</td>
			<td style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px;  border-bottom:1px solid #000;">
				<span style="display:inline-block;  ">{{ $solar_inverter_rating }}</span>
				<span  style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:0;">kW</span>
			</td>
		</tr>
		<tr>
			<td style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px;  border-right:1px solid #000; ">
				Solar Inverter Manufacturer
			</td>
			<td style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px;    border-right:1px solid #000; ">
				{{ $inverter_brand }}
			</td>
			<td style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px;    border-right:1px solid #000; ">
				Solar Inverter Model Name
			</td>
			<td style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px; ">
				{{ $inverter_model }}
			</td>
		</tr>
        </table>

        <table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0" >
		<tr>
			<td style=" width:39%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px;  border-right:1px solid #000; border-left:1px solid #000; border-bottom:1px solid #000;">
				Operating Manual Provided to Customer
			</td>
			<td style=" width:11%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px;    border-right:1px solid #000;border-bottom:1px solid #000; ">
				<span class="chkbox"><img src="{{ asset('assets/images/checkbox.png') }}"/></span> Yes
			</td>
			<td style=" width:40%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px;    border-right:1px solid #000;border-bottom:1px solid #000; ">
				Instructed Customer in Operation of System
			</td>
			<td style=" width:10%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px; border-right:1px solid #000;border-bottom:1px solid #000; ">
				<span class="chkbox"><img src="{{ asset('assets/images/checkbox.png') }}"/></span> Yes
			</td>
		</tr>
		</table>
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td align="left" style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000000; font-size:12px;font-weight:bold; margin:0; padding:5px;">By signing this form, you acknowledge and represent the information provided is true and correct.</td>
		</tr>
		</table>
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px;  ">
				Installer Name:
			</td>
			<td style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px;  border-bottom:1px solid #000  ">
				<span style="display:inline-block; width:100%; display:block; ">{{ $installer->name }}</span>
			</td>
			<td style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px;">
				Installer Accreditation No*.:
			</td>
			<td style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px;border-bottom:1px solid #000  ">
				<span style="display:inline-block; width:100%; display:block; ">{{ $installer->accredition_number }}</span>
			</td>
		</tr>
		<tr>
			<td style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px;  ">
				Installer Signature:
			</td>
			<td style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px; ">
				@if(isset($installer->image)) <img src="{{ asset('/user/'.$installer->image) }}" alt="" style="height:50px;width:100px;" />@endif</span>
			</td>
			<td style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px;">
				Date:
			</td>
			<td style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px; border-bottom:1px solid #000 ">
				<span style="display:inline-block; width:100%; display:block;">{{ $job->installation_date }}</span>
			</td>
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
			<td align="left" style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#ff0000; font-size:14px; font-weight:bold; margin:0; padding:0;">
				SECTION 2: INSTALLATION COMPLIANCE<span style="font-style:italic; font-size:13px"> (to be completed and signed by the Registered Electrical Contractor)</span>
			</td>
		</tr>
		<tr>
			<td style="height:10px;"></td>
		</tr>		
		</table>
		
		<table style=" width:90%;" width="100%" cellpadding="0" cellspacing="0" class="tbl-border">
		<tr>
			<td style=" width:10%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; font-weight:bold; margin:0; padding:5px;  border-right:1px solid #000;  border-bottom:1px solid #000;">
				Inverter
			</td>
			<td style=" width:90%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px;    border-bottom:1px solid #000;" valign="top">
				<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td colspan="4" style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:5px; ">Installed capacity per phase (mark N/A for phases not available):</td>
				</tr>
				<tr>
					<td style=" width:10%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:5px; ">
						Existing:
					</td>
					<td style=" width:33%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:5px; ">
						<span style=" width:35%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:0; display:inline-block;">Phase A:</span>
						<span style=" width:35%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:0;  display:inline-block; border-bottom:1px solid #000"></span>
						<span style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:0;display:inline-block; ">kW</span>
					</td>
					<td style=" width:33%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:5px; ">
						<span style=" width:35%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:0; display:inline-block;">Phase B:</span>
						<span style=" width:35%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:0;   display:inline-block; border-bottom:1px solid #000"></span>
						<span style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:0;display:inline-block; ">kW</span>
					</td>
					<td style=" width:33%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:5px; ">
						<span style=" width:35%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:0; display:inline-block;">Phase C:</span>
						<span style=" width:35%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:0; display:inline-block; border-bottom:1px solid #000"></span>
						<span style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:0;display:inline-block; ">kW</span>
					</td>
				</tr>
				<tr>
					<td style=" width:10%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:5px; ">
						New:
					</td>
					<td style=" width:33%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:5px; ">
						<span style=" width:35%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:0; display:inline-block;">Phase A:</span>
						<span style=" width:35%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:0;  display:inline-block; border-bottom:1px solid #000">{{ $solar_inverter_rating }}</span>
						<span style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:0;display:inline-block; ">kW</span>
					</td>
					<td style=" width:33%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:5px; ">
						<span style=" width:35%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:0; display:inline-block;">Phase B:</span>
						<span style=" width:35%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:0;   display:inline-block; border-bottom:1px solid #000">N/A</span>
						<span style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:0;display:inline-block; ">kW</span>
					</td>
					<td style=" width:33%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:5px; ">
						<span style=" width:35%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:0; display:inline-block;">Phase C:</span>
						<span style=" width:35%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:0; display:inline-block; border-bottom:1px solid #000">N/A</span>
						<span style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:0;display:inline-block; ">kW</span>
					</td>
				</tr>
				<tr>
					<td style=" width:10%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:5px; ">
						Total:
					</td>
					<td style=" width:33%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:5px; ">
						<span style=" width:35%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:0; display:inline-block;">Phase A:</span>
						<span style=" width:35%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:0;  display:inline-block; border-bottom:1px solid #000">{{ $solar_inverter_rating }}</span>
						<span style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:0;display:inline-block; ">kW</span>
					</td>
					<td style=" width:33%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:5px; ">
						<span style=" width:35%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:0; display:inline-block;">Phase B:</span>
						<span style=" width:35%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:0;   display:inline-block; border-bottom:1px solid #000"></span>
						<span style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:0;display:inline-block; ">kW</span>
					</td>
					<td style=" width:33%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:5px; ">
						<span style=" width:35%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:0; display:inline-block;">Phase C:</span>
						<span style=" width:35%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:0; display:inline-block; border-bottom:1px solid #000"></span>
						<span style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:0;display:inline-block; ">kW</span>
					</td>
				</tr>
				</table>
				<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:5px; ">
						Number of phases :
					</td>
					<td style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:5px; ">
						<span class="chkbox"> @if($job->no_of_phases == 1 )<img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span> Single phase 230V
					</td>
					<td style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:5px; ">
						<span class="chkbox"> @if($job->no_of_phases == 3 ) <img src="{{ asset('assets/images/checkbox.png') }}"/>  @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span> Three phase 400V
					</td>
				</tr>
				<tr>
					<td style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:5px; ">
						&nbsp;
					</td>
					<td style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:5px; ">
						<span class="chkbox">@if($job->no_of_phases == 2 ) <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif </span> Two phase 230/400V
					</td>
					<td style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:5px; ">
						<span class="chkbox">@if($job->no_of_phases == 2 ) <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif </span> Two phase 230V/460V
					</td>
				</tr>
				</table>
				
				<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td style="width:15%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:5px; ">
						Export Limited:
					</td>
					<td style="width:15%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:5px; ">
						<span class="chkbox"> @if($job->export_limit == "Yes") <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/>  @endif </span> Yes
					</td>
					<td style="width:15%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:5px; ">
						<span class="chkbox">@if($job->export_limit != "Yes") <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span> No
					</td>
					<td style=" width:15%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:5px; ">
						Export Limit: 
					</td>
					<td style=" width:30%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:5px; ">
						<span style=" width:50%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:0;display:inline-block;border-bottom:1px solid #000">{{ $job->export_limit_value }}</span>
						<span style=" width:40%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:0;display:inline-block; ">kW</span>
					</td>
				</tr>				
				</table>
			
			</td>
		</tr>
		
		<tr>
			<td style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; font-weight:bold; margin:0; padding:5px;  border-right:1px solid #000;   border-bottom:1px solid #000;">
				Load
			</td>
			<td style=" width:75%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px;   border-bottom:1px solid #000; " valign="top">
				<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td style=" width:45%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:5px 5px 0 5px; ">
						Number of phases of applicant's connection:
					</td>
					<td style=" width:30%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:5px 5px 0 5px; ">
						<span class="chkbox"> @if($job->no_of_phases == 1 )<img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span> Single phase 230V
					</td>
					<td style=" width:35%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:5px 5px 0 5px; ">
						<span class="chkbox"> @if($job->no_of_phases == 3 )<img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span> Three phase 400V
					</td>
				</tr>
				<tr>
					<td style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:0px 5px 5px 5px; ">
						&nbsp;
					</td>
					<td style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:0px 5px 5px 5px; ">
					 <span class="chkbox"> @if($job->no_of_phases == 2 )<img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span> Two phase 230/400V
					</td>
					<td style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:0px 5px 5px 5px; ">
					<span class="chkbox"> @if($job->no_of_phases == 2 )<img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span> Two phase 230V/460V
					</td>
				</tr>
				</table>
			</td>
	</tr>
	<tr>
			<td style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; font-weight:bold; margin:0; padding:5px;  border-right:1px solid #000;">
				Battery
			</td>
			<td style=" width:75%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:0;"  valign="top">
				<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td style=" width:33%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px;  border-right:1px solid #000;"  valign="top">
						<span style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:0; display:block;">Battery Installed:</span><br>
						<span style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; 	 margin:0; padding:0; display:block;">
							<span class="chkbox">@if($battery_count != 0)  <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif </span> Yes<br>
						</span>
						<span style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:0; display:block;">
							<span class="chkbox">	@if($battery_count == 0)  <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span> No
						</span>						
					</td>
					<td style=" width:33%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px;  border-right:1px solid #000;"  valign="top">
						<span style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:0; display:block;">Type:</span><br>
						<span style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; 	 margin:0; padding:0; display:block;">
							<span class="chkbox">@if($battery_type ==  "Lithium Ion") <img src="{{ asset('assets/images/checkbox.png') }}"/>  @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span> Lithium Ion <br>
						</span>
						<span style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:0; display:block;">
							<span class="chkbox">@if($battery_type == "Lead Acid" ) <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span> Lead Acid <br>
						</span>
						<span style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:0; display:block;">
							<span class="chkbox"> @if( ($battery_type != "Lead Acid"  || $battery_type !=  "Lithium Ion" ) && $battery_type != "") <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span> Other
						</span>						
					</td>
					<td style=" width:33%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px;  "  valign="top">
						<span style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:0; display:block;">Capacity:</span><br>
						<span style=" width:60%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; 	margin:0; padding:0; display:inline-block;border-bottom:1px solid #000;">
						
						</span>
						<span style="width:20%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:0; display:inline-block;">
							kWhrs
						</span>						
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
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td style="height:20px;"></td>
		</tr>			
		</table>
		
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td colspan="2" style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; font-weight:bold; margin:0; padding:0 0 5px 0;">By signing this form, you acknowledge and represent that:</td>
		</tr>
		<tr>
			<td>
				<ul style="text-align:left; font-family:  Arial, Helvetica, sans-serif; margin:0 0 0 20px; padding:0; list-style:disc;">
					<li style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:13px; margin:0; padding:0 0 5px 0; list-style:disc;">the PV (Solar) Generator complies with the Electricity Safety Act 1998 (Vic.) and associated Safety Regulations, the Electricity Distribution Code, the Victorian Service & Installation Rules, AS/NZS3000 (Wiring Rules) and AS4777 (Grid Connection of Energy Systems via Inverters), and any other relevant Acts, regulations, standards or guidelines;</li>
					<li style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:13px; margin:0; padding:0 0 5px 0; list-style:disc;">The output balance and voltage rise requirements are compliant with AS4777.1 and AS4777.2.</li>
					<li style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:13px; margin:0; padding:0 0 5px 0; list-style:disc;">the PV (Solar) Generator is connected to a dedicated circuit complete with lockable isolating switch at the switchboard;</li>
					<li style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:13px; margin:0; padding:0 0 5px 0; list-style:disc;">the main switchboard, isolating fuse/switch/circuit breaker are labelled correctly;</li>
				</ul>
			</td>
			<td>
				<ul style="text-align:left; font-family:  Arial, Helvetica, sans-serif; margin:0 0 0 20px; padding:0; list-style:disc;">
					<li style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:13px; margin:0; padding:0 0 5px 0; list-style:disc;">commissioning tests as specified in the Service & Installation Rules and anti-islanding operation tests have been completed and passed. It is recommended that the solar inverter is left in the off position;</li>
					<li style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:13px; margin:0; padding:0 0 5px 0; list-style:disc;">alternative supply signage has been installed; </li>
					<li style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:13px; margin:0; padding:0 0 5px 0; list-style:disc;">a Prescribed Certificate of Electrical Safety (CES) has been obtained; and copies of the Electrical Works Request and the CES will be sent to the generator owner’s Retailer; and</li>
					<li style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:13px; margin:0; padding:0 0 5px 0; list-style:disc;">the generator owner has been advised that the PV (Solar) Generator should remain switched off until any metering upgrades are complete to avoid potential metering and billing issues.</li>
				</ul>
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
		</table>
		
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td style="width:16.66666666666667%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; font-weight:bold; margin:0; padding:5px;">
				REC Name:
			</td>
			<td style="width:16.66666666666667%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px; border-bottom:1px solid #000;">
				{{ $companyDetails->REC_Name }}
			</td>
			<td style="width:16.66666666666667%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; font-weight:bold; margin:0; padding:5px;">
				REC Licence No*.:
			</td>
			<td style="width:16.66666666666667%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px;  border-bottom:1px solid #000;">
				{{ $companyDetails->REC_Number }}
			</td>
		</tr>
		<tr>
			<td style="width:16.66666666666667%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; font-weight:bold; margin:0; padding:5px;">
				REC Signature:
			</td>
			<td style="width:16.66666666666667%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px; ">
			<img src="{{asset('/img/'.$companyDetails->Signature)}}" width="100px" height="50px">
			</td>
			<td style="width:16.66666666666667%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; font-weight:bold; margin:0; padding:5px;">
				Date:
			</td>
			<td style="width:16.66666666666667%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px;  border-bottom:1px solid #000;">
				{{ @ $job->completed_on }}
			</td>
		</tr>
		</table>
	</td>
</tr>


<tr>
	<td valign="top">
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td style="height:40px;"></td>
		</tr>
		<tr>
			<td align="left" style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#ff0000; font-size:14px; font-weight:bold; margin:0; padding:0;">
				SECTION 3: GENERATOR OWNER DETAILS <span style="font-style:italic;">(to be completed and signed by the generator owner)</span>
			</td>
		</tr>
		<tr>
			<td style="height:20px;"></td>
		</tr>		
		</table>
		
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0"  class="tbl-border ">
		<tr>
			<td style=" width:23%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px;  border-right:1px solid #000; border-bottom:1px solid #000;">
				Customer Name*:
			</td>
			<td style=" width:23%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px;    border-right:1px solid #000; border-bottom:1px solid #000;">
				{{ $customer->first_name }} {{ $customer->last_name }} 
			</td>
			<td style=" width:23%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px;    border-right:1px solid #000; border-bottom:1px solid #000;">
			Customer NMI*:<br>
			<span style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:10px; margin:0; padding:0;">(Refer to your electricity bill)</span>
			</td>
			<td style=" width:23%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px;  border-bottom:1px solid #000;">
				{{ $customer->nmi }}				
			</td>
		</tr>
		<tr>
			<td style=" width:23%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px;  border-right:1px solid #000; border-bottom:1px solid #000;">
				Supply Address*:
			</td>
			<td style=" width:23%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px;    border-right:1px solid #000; border-bottom:1px solid #000;">
				{{ $customer->unit }} {{ $customer->street_number }} {{ $customer->street_name }} {{ $customer->suburb }}   {{ $customer->state }}  {{ $customer->post_code }}
			</td>
			<td style=" width:23%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px;    border-right:1px solid #000; border-bottom:1px solid #000;">
			Mailing Address*:
			</td>
			<td style=" width:23%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px;  border-bottom:1px solid #000;">
				{{ $customer->unit }} {{ $customer->street_number }} {{ $customer->street_name }} {{ $customer->suburb }}   {{ $customer->state }}  {{ $customer->post_code }}
			</td>
		</tr>
		<tr>	
			<td style=" width:23%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px;  border-right:1px solid #000; border-bottom:1px solid #000;">
				Phone Number*:
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
			<td style=" width:23%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-weight:bold; font-size:12px; margin:0; padding:5px;  border-right:1px solid #000;">
				Email Address*
			</td>
			<td colspan="3" style=" width:74%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:5px; ">
				{{ $customer->email }}
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
			<td align="left" style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:13px; font-weight:bold; margin:0; padding:0;">
				CUSTOMER ACKNOWLEDGEMENT, INDEMNITY AND RELEASE</span>
			</td>
		</tr>
		<tr>
			<td style="height:10px;"></td>
		</tr>		
		</table>
		
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; font-weight:bold; margin:0; padding:0 0 5px 0;">By signing this form, you acknowledge and represent that you have read, understand and agree to comply with the connection obligations, and that you:</td>
		</tr>
		<tr>
			<td>
				<ul style="text-align:left; font-family:  Arial, Helvetica, sans-serif; margin:0 0 0 20px; padding:0; list-style:disc;">
					<li style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:0 0 5px 0; list-style:disc;">are the owner of the PV (Solar) System listed under the Supply Address in section 3 above;</li>
					<li style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:0 0 5px 0; list-style:disc;">have received a Photovoltaic Embedded Generator operating manual from, and been instructed on the operation of the Photovoltaic Embedded Generator by, the Installation Company detailed in section 1;</li>
					<li style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:0 0 5px 0; list-style:disc;">accept that approval will only be granted for the Photovoltaic Embedded Generator detailed in this form, and that you must obtain further prior approval from your Distributor to alter your Photovoltaic Embedded Generator in any way;</li>
					<li style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px; margin:0; padding:0 0 5px 0; list-style:disc;">release and indemnify and agree to keep indemnified your Distributor, its officers, employees and agents against all actions, proceedings, claims and demands whatsoever which may be brought, including any indirect or consequential loss or any other form of pure economic loss, made or prosecuted against them or any of them by any person in respect of the installation of your Photovoltaic Embedded Generator, particularly in relation to works completed by the Installation Company detailed in section 1 or the compliance certification provided by the Registered Electrical Contractor in section 2, or in respect of connection of your Photovoltaic Embedded Generator to the Victorian electricity grid.</li>
				</ul>
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
		</table>
		
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td style="width:15%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; font-weight:bold; margin:0; padding:0 0 5px 0;">
				Customer Name:
			</td>
			<td style="width:15%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:0 0 5px 0; border-bottom:1px solid #000;">
				{{ $customer->first_name }} {{ $customer->last_name }}
            </td>
			<td style="width:2%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; font-weight:bold; margin:0; padding:0 0 5px 0;  ">
				&nbsp;
			</td>
			<td style="width:20%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; font-weight:bold; margin:0; padding:0 0 5px 0;">
				Customer Signature:
			</td>
			<td style="width:20%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:0 0 5px 5px;  ">
			@if($job->sign == 1)<img src="{{ $job->customer_sign }}" alt="" style="border:1px solid;height:50px;width:100px;" />@endif
			</td>
			<td style="width:2%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; font-weight:bold; margin:0; padding:0 0 5px 0;  ">
				&nbsp;	
			</td>
			<td style="width:5%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; font-weight:bold; margin:0; padding:0 0 5px 0; ">
				Date:
			</td>
			<td style="width:2%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; font-weight:bold; margin:0; padding:0 0 5px 0;  ">
				&nbsp;
			</td>
			<td style="width:15%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:12px; margin:0; padding:0 0 5px 0;  border-bottom:1px solid #000;">
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
		</table>
		
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#000; font-size:11px;  margin:0; padding:0 0 5px 0;">
				PRIVACY STATEMENT: The personal information you provide in this form will be collected by your Distributor for the purpose of connecting your Photovoltaic Embedded Generator to the Victorian electricity grid. This information will be used and disclosed by your Distributor in accordance with its privacy processes. You can find more information on your Distributor’s privacy processes on their website.
			</td>
			
			
		</tr>
		</table>
	</td>
</tr>

</table>
</div>
</body>
</html>