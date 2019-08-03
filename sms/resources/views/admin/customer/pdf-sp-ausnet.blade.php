<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" name="viewport">
<title>SP Ausnet</title>
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
	
 .tbl-border { border:1px solid #244061;}
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
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0" border="0">
		 <tr>
		    <td colspan="2" style="height:20px;"></td>
		</tr>
		<tr>
			<td align="left" style="width:20%;" ><img src="{{ asset('pdf-test-image/sp-ausnet.png') }}" alt="SP-Ausnet" style="text-align:left; width:120px;"></td>
			<td align="left" style="width:80%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:14px; font-weight:bold; margin:10px 0 0 20px; padding:5px; vertical-align:bottom">AusNet Services Embedded Generator (EG) and Battery Storage Connection Agreement up to 30kW</td>
		</tr>
		<tr>
		    <td colspan="2" style="height:10px;"></td>
		</tr>
		</table>
	</td>
</tr>

<tr>
	<td valign="top">
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0" class="tbl-border ">
		<tr>
			<td style=" width:25%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#00b050; font-size:12px; font-weight:bold; margin:0; padding:5px; border-right:1px solid #244061; border-bottom:1px solid #244061;" valign="top">
				Embedded Generation Type <span style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#00b050; font-size:12px; font-weight:normal; margin:0; padding:0;">(choose multiple)</span>
			</td>
			<td colspan="3" style="width:75%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px;font-weight:bold; margin:0; padding:5px;  border-bottom:1px solid #244061;" valign="top">
				<span class="chkbox"><img src="{{ asset('assets/images/checkbox.png') }}"/></span> Battery Storage&nbsp;&nbsp;&nbsp;<span class="chkbox"><img src="{{ asset('assets/images/checkbox-blank.png') }}"/></span> Solar&nbsp;&nbsp;&nbsp;
				<span class="chkbox"><img src="{{ asset('assets/images/checkbox-blank.png') }}"/></span> Wind&nbsp;&nbsp;&nbsp;
				<span class="chkbox"><img src="{{ asset('assets/images/checkbox-blank.png') }}"/></span> Hydronbsp;&nbsp;&nbsp;
				<span class="chkbox"><img src="{{ asset('assets/images/checkbox-blank.png') }}"/></span> Other energy source...&nbsp;&nbsp;&nbsp;
			</td>
		</tr>
		<tr>
			<td style=" width:25%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#00b050; font-size:12px; font-weight:bold; margin:0; padding:5px; border-right:1px solid #244061; border-bottom:1px solid #244061;" >
				Customer supply number of Phases
			</td>
			<td style="width:15%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px;font-weight:bold; margin:0; padding:5px; border-right:1px solid #244061; border-bottom:1px solid #244061;">
				<span class="chkbox">@if($job->no_of_phases == 1) <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span> 1&nbsp;&nbsp;&nbsp;
				<span class="chkbox"> @if($job->no_of_phases == 2) <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span> 2&nbsp;&nbsp;&nbsp;
				<span class="chkbox"> @if($job->no_of_phases == 3) <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span> 3
			</td>
			<td style=" width:20%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#00b050;font-size:13px; font-weight:bold; margin:0; padding:5px; border-right:1px solid #244061; border-bottom:1px solid #244061;">
					Generator / Inverter Phases
			</td>
			<td style=" width:20%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px;font-weight:bold; margin:0; padding:5px;  border-bottom:1px solid #244061;" >
				<span class="chkbox">@if($job->inverter_phase == 1) <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span> 1&nbsp;&nbsp;&nbsp;
				<span class="chkbox">@if($job->inverter_phase == 2) <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span> 2&nbsp;&nbsp;&nbsp;
				<span class="chkbox">@if($job->inverter_phase == 3) <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span> 3
			</td>
		</tr>
		<tr>
			<td style=" width:25%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#00b050; font-size:12px; font-weight:bold; margin:0; padding:5px; border-right:1px solid #244061; border-bottom:1px solid #244061;" >
				Does the system include battery storage as well as a generation source?
			</td>
			<td style="width:15%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px;font-weight:bold; margin:0; padding:5px; border-right:1px solid #244061; border-bottom:1px solid #244061;">
				<span class="checked"></span> Yes AC coupled
			</td>
			<td style=" width:20%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px;font-weight:bold; margin:0; padding:5px; border-right:1px solid #244061; border-bottom:1px solid #244061;">
						<input class="checkbox-2" type="checkbox"> Yes DC coupled
			</td>
			<td style=" width:20%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px;font-weight:bold; margin:0; padding:5px;  border-bottom:1px solid #244061;" >
					<input class="checkbox-2" type="checkbox"> No
			</td>
		</tr>
		<tr>
			<td style=" width:25%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#00b050; font-size:12px; font-weight:bold; margin:0; padding:5px; border-right:1px solid #244061; border-bottom:1px solid #244061;" >
				Is an existing Embedded Generator installed at the premise
			</td>
			<td style="width:15%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px;font-weight:bold; margin:0; padding:5px; border-right:1px solid #244061; border-bottom:1px solid #244061;">
				<span class="chkbox">@if($job->emb_gen_installed == "Yes") <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/>@endif </span>Yes&nbsp;&nbsp;&nbsp;&nbsp;<span class="chkbox">@if($job->emb_gen_installed == "No") <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/>@endif</span> No
			</td>
			<td style=" width:20%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px;font-weight:bold; margin:0; padding:5px; border-right:1px solid #244061; border-bottom:1px solid #244061;">
						<span style=" width:35%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px;font-weight:bold; margin:0; padding:0; display:inline-block;">Existing rating:</span>
						<span style=" width:35%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px;font-weight:bold; margin:0; padding:0;  display:inline-block; border-bottom:1px solid #244061">{{ $job->existing_rating }}</span>
						<span style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px;font-weight:bold; margin:0; padding:0;display:inline-block; ">kW</span>
			</td>
			<td style=" width:20%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:11px; margin:0; padding:5px;  border-bottom:1px solid #244061;">
						<span style=" width:35%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px;font-weight:bold; margin:0; padding:0; display:inline-block;">Existing export limit:</span>
						<span style=" width:35%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px;font-weight:bold; margin:0; padding:0;  display:inline-block;border-bottom:1px solid #244061">{{ $job->export_limit_value }}</span>
						<span style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px;font-weight:bold; margin:0; padding:0;display:inline-block; ">kW</span>
			</td>
		</tr>
		<tr>
			<td style=" width:25%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#00b050; font-size:12px; font-weight:bold; margin:0; padding:5px; border-right:1px solid #244061; ">
				Pre-Approval Reference Number <span style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#00b050; font-size:12px; font-weight:normal; margin:0; padding:0;">(online assessment only)</span>
			</td>
			<td colspan="3" style="width:75%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px;font-weight:bold;  margin:0; padding:5px; ">
                    {{ $job->pre_approval_number }}
			</td>
		</tr>
		</table>
	</td>
</tr>
<tr>
	<td valign="top">
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td style="height:30px;"></td>
		</tr>
		<tr>
			<td align="left" style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#00b050; font-size:13px; font-weight:bold; margin:0; padding:0 0 0 10px;">
				SECTION 1: INSTALLATION DETAILS <span style="font-style:italic;">(to be completed and signed by the Installer)</span>
			</td>
		</tr>
		<tr>
			<td style="height:20px;"></td>
		</tr>		
		</table>
		
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0"  class="tbl-border ">
		<tr>
			<td style=" width:35%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; font-weight:bold; margin:0; padding:5px; border-right:1px solid #244061; border-bottom:1px solid #244061;" >
				Installer Company Name
			</td>
			<td colspan="3" style="width:65%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px;font-weight:bold; margin:0; padding:5px;  border-bottom:1px solid #244061;">
                    {{ $companyDetails->Company_Name }}
			</td>
		</tr>
		<tr>
			<td style=" width:35%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; font-weight:bold; margin:0; padding:5px; border-right:1px solid #244061; border-bottom:1px solid #244061;" >
				Installer Company Address
			</td>
			<td colspan="3" style="width:65%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px;font-weight:bold; margin:0; padding:5px; border-bottom:1px solid #244061;">
                    {{ strip_tags($companyDetails->Address) }}
			</td>
		</tr>
		<tr>
			<td style=" width:35%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; font-weight:bold; margin:0; padding:5px; border-right:1px solid #244061; border-bottom:1px solid #244061;" >
				Installer Phone Number
			</td>
			<td style="width:21.66666666666667%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px;font-weight:bold; margin:0; padding:5px; border-right:1px solid #244061; border-bottom:1px solid #244061;">
                    {{ $companyDetails->Phone }}
			</td>
			<td style=" width:35%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; font-weight:bold; margin:0; padding:5px; border-right:1px solid #244061; border-bottom:1px solid #244061;" >
				Installer Email
			</td>
			<td style="width:21.66666666666667%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px;font-weight:bold; margin:0; padding:5px; border-bottom:1px solid #244061;">
                    {{ $companyDetails->Email }}
			</td>
		</tr>
		<tr>
			<td style=" width:35%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; font-weight:bold; margin:0; padding:5px; border-right:1px solid #244061; border-bottom:1px solid #244061;" >
				Total Installed Capacity<br>
				<span style="  text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:11px; font-weight:normal;" >(Total rating of all existing and new generation, including sum of all inverters for generation and battery storage systems)</span>
			</td>
			<td colspan="3" style="width:65%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px;font-weight:bold; margin:0; padding:5px;  border-bottom:1px solid #244061;">
				<span style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px;font-weight:bold; margin:0; padding:0;  display:inline-block;border-bottom:1px solid #244061">{{ $job->solar_capacity_installed / 1000 }}</span>
						<span style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px;font-weight:bold; margin:0; padding:0;display:inline-block; ">kW</span>
			</td>
		</tr>
		<tr>
			<td style=" width:35%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; font-weight:bold; margin:0; padding:5px; border-right:1px solid #244061; border-bottom:1px solid #244061;" >
				Total Installed Capacity Per Phase<br>
				<span style="  text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:11px; font-weight:normal;" >(mark N/A for phases not available)</span>
			</td>
			<td style="width:21.66666666666667%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px;font-weight:bold; margin:0; padding:5px; border-right:1px solid #244061; border-bottom:1px solid #244061;">
				Phase A: <span style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px;font-weight:bold; margin:0; padding:0;  display:inline-block;border-bottom:1px solid #244061">{{ $job->solar_capacity_installed / 1000 }} kW</span> 
			</td>
			<td style="width:21.66666666666667%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px;font-weight:bold; margin:0; padding:5px; border-right:1px solid #244061; border-bottom:1px solid #244061;">
				Phase B: <span style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; font-weight:bold;margin:0; padding:0;  display:inline-block;border-bottom:1px solid #244061">N/A</span> kW
			</td>
			<td style="width:21.66666666666667%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px;font-weight:bold; margin:0; padding:5px; border-bottom:1px solid #244061;">
				Phase C: <span style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; font-weight:bold;margin:0; padding:0;  display:inline-block;border-bottom:1px solid #244061">N/A</span> kW
			</td>
		</tr>
		<tr>
			<td style=" width:35%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; font-weight:bold; margin:0; padding:5px; border-right:1px solid #244061; border-bottom:1px solid #244061;" >
				Export Limit <span style="  text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:11px; font-weight:normal;" > (if applicable) maximum amount to be exported into the electricity grid</span>
			</td>
			<td style="width:21.66666666666667%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; font-weight:bold; margin:0; padding:5px; border-right:1px solid #244061; border-bottom:1px solid #244061;">
				 <span style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px;font-weight:bold; margin:0; padding:0;  display:inline-block;border-bottom:1px solid #244061">{{ $products[0]->export_limit }}</span> kW
			</td>
			<td style="width:21.66666666666667%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-weight:bold; font-size:12px;font-weight:bold; margin:0; padding:5px; border-right:1px solid #244061; border-bottom:1px solid #244061;">
				Confirm compliance with procedure SOP 33-06
			<td style="width:21.66666666666667%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px;font-weight:bold; margin:0; padding:5px; border-bottom:1px solid #244061;">
				<span class="chkbox">@if($products[0]->sop3306_compliant == "Yes"  ) <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span> Yes &nbsp;&nbsp;&nbsp;
				<span class="chkbox">@if($products[0]->sop3306_compliant == "No"  ) <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif </span> No
			</td>
		</tr>
		<tr>
			<td style=" width:35%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:13px; font-weight:bold; margin:0; padding:5px; border-right:1px solid #244061; border-bottom:1px solid #244061;" >
				Generator/ Solar Inverter Manufacturer
			</td>
			<td style="width:21.66666666666667%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px;font-weight:bold; margin:0; padding:5px; border-right:1px solid #244061; border-bottom:1px solid #244061;">
				<span style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px;font-weight:bold; margin:0; padding:0;  display:inline-block;border-bottom:1px solid #244061">
                        @foreach($products as $product)
                            @if($product->category->name == "Solar Inverter")
                               <li> {{ $product->brand->name }} kW</li>  
                            @endif
                        @endforeach
                </span> 
			</td>
			<td style="width:21.66666666666667%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-weight:bold; font-size:12px; margin:0; padding:5px; border-right:1px solid #244061; border-bottom:1px solid #244061;">
				Generator/Solar Inverter Model
			<td style="width:21.66666666666667%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px;font-weight:bold; margin:0; padding:5px;  border-bottom:1px solid #244061;">
                @foreach($products as $product)
                    @if($product->category->name == "Solar Inverter")
                        <li>{{ $product->model  }}</li>
                    @endif
                @endforeach
			</td>
		</tr>
		<tr>
			<td style=" width:35%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; font-weight:bold; margin:0; padding:5px; border-right:1px solid #244061; border-bottom:1px solid #244061;" >
				Generator/Solar Inverter AC Power Rating
			</td>
			<td style="width:21.66666666666667%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px;font-weight:bold; margin:0; padding:5px; border-right:1px solid #244061; border-bottom:1px solid #244061;">
				<span style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px;font-weight:bold; margin:0; padding:0;  display:inline-block;border-bottom:1px solid #244061">
                    @foreach($products as $product)
                        @if($product->category->name == "Solar Inverter")
                       <li>{{  $product->ac_power_rating  }} KW</li>
                       @endif
                    @endforeach</span> 
			</td>
			<td style="width:21.66666666666667%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-weight:bold; font-size:12px; margin:0; padding:5px; border-right:1px solid #244061; border-bottom:1px solid #244061;">
				Solar DC Rating
			<td style="width:21.66666666666667%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px;font-weight:bold; margin:0; padding:5px;  border-bottom:1px solid #244061;">
				<span style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px;font-weight:bold; margin:0; padding:0;  display:inline-block;border-bottom:1px solid #244061">
                        @foreach($products as $product)
                        @if($product->category->name == "Solar Inverter")
                           <li>{{ $product->solar_dc_rating  }} KW</li>
                       @endif
                       @endforeach    
                </span> 
			</td>
		</tr>
		<tr>
			<td style=" width:35%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; font-weight:bold; margin:0; padding:5px; border-right:1px solid #244061; border-bottom:1px solid #244061;" >
				Battery Inverter Manufacturer<br>
				<span style="  text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:11px; font-weight:normal;" > (mark N/A if battery DC coupled)</span>
			</td>
			<td style="width:21.66666666666667%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px;font-weight:bold; margin:0; padding:5px; border-right:1px solid #244061; border-bottom:1px solid #244061;">
                    @foreach($products as $product)
                    @if($product->category->name == "Battery")
                        <li>{{ $product->name  }}</li>
                    @endif
                    @endforeach
			</td>
			<td style="width:21.66666666666667%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-weight:bold; font-size:12px; margin:0; padding:5px; border-right:1px solid #244061; border-bottom:1px solid #244061;">
				Battery Inverter Model<br>
				<span style="  text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:11px; font-weight:normal;" > (mark N/A if DC coupled)</span>
			<td style="width:21.66666666666667%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px;font-weight:bold; margin:0; padding:5px;border-bottom:1px solid #244061;">
				
			</td>
		</tr>
		<tr>
			<td style=" width:35%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; font-weight:bold; margin:0; padding:5px; border-right:1px solid #244061; border-bottom:1px solid #244061;" >
				Battery Inverter AC Power Rating<br>
				<span style="  text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:11px; font-weight:normal;" >(mark N/A if battery AC coupled)</span>
			</td>
			<td style="width:21.66666666666667%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px;font-weight:bold; margin:0; padding:5px; border-right:1px solid #244061; border-bottom:1px solid #244061;">
				<span style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px;font-weight:bold; margin:0; padding:0;  display:inline-block;border-bottom:1px solid #244061">
                        @foreach($products as $product)
                        @if($product->category->name == "Battery")
                            <li>{{ $product->ac_power_rating }} </li>
                        @endif
                        @endforeach
                    </span> kW
			</td>
			<td style="width:21.66666666666667%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-weight:bold; font-size:12px; margin:0; padding:5px; border-right:1px solid #244061; border-bottom:1px solid #244061;">
				Battery Rated Storage Capacity
			<td style="width:21.66666666666667%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px;font-weight:bold; margin:0; padding:5px;  border-bottom:1px solid #244061;">
				<span style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px;font-weight:bold; margin:0; padding:0;  display:inline-block;border-bottom:1px solid #244061"></span> kW
			</td>
		</tr>
		<tr>
			<td style=" width:35%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; font-weight:bold; margin:0; padding:5px; border-right:1px solid #244061; " >
				Battery Type:
			</td>
			<td colspan="3" style="width:65%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px;font-weight:bold; margin:0; padding:5px; ">
				<span class="chkbox">@if($job->battery_type == "Lead Acid") <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span> Lead-acid&nbsp;&nbsp;&nbsp;
				<span class="chkbox">@if($job->battery_type == "Lithium Ion") <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span> Lithium-ion&nbsp;&nbsp;&nbsp;
				<span class="chkbox">@if($job->battery_type == "Flow") <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span> Flow&nbsp;&nbsp;&nbsp;
				<span class="chkbox">@if($job->battery_type == "Salt Water") <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/>  @endif</span> Salt water&nbsp;&nbsp;&nbsp;
				<span class="chkbox"><img src="{{ asset('assets/images/checkbox-blank.png') }}"/></span> Other: &nbsp;<span style=" text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px;font-weight:bold; margin:0; padding:0;  display:inline-block;border-bottom:1px solid #244061"></span>
			</td>
		</tr>
		</table>
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">
		 <tr>
			<td style="height:20px"></td>
		</tr>
		<tr>
			<td align="left" style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061000; font-size:12px; font-weight:bold;margin:0; padding:5px;">By signing this agreement, you acknowledge and represent that the information provided is true and correct.</td>
		</tr>
		<tr>
			<td style="height:20px"></td>
		</tr>
		</table>
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-weight:bold; font-size:12px; margin:0; padding:5px;  ">
				Installer Name:
			</td>
			<td style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; margin:0; padding:5px;  border-bottom:1px solid #244061  ">
				<span style="display:inline-block; width:100%; display:block; ">{{ $installer->name }}</span>
			</td>
			<td style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-weight:bold; font-size:12px; margin:0; padding:5px;">
				Installer Accreditation No*.:
			</td>
			<td style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; margin:0; padding:5px;border-bottom:1px solid #244061  ">
				<span style="display:inline-block; width:100%; display:block; ">{{ $installer->accredition_number }}</span>
			</td>
		</tr>
		<tr>
			<td colspan="4" style="height:20px"></td>
		</tr>
		<tr>
			<td style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-weight:bold; font-size:12px; margin:0; padding:5px;  ">
				Installer Signature:
			</td>
			<td style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; margin:0; padding:5px; border-bottom:1px solid #244061   ">
				<span style="display:inline-block;  width:100%; display:block;">@if(isset($installer->image)) <img src="{{ asset('/user/'.$installer->image) }}" width="100px" height="50px" />@endif</span>
			</td>
			<td style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-weight:bold; font-size:12px; margin:0; padding:5px;">
				Date:
			</td>
			<td style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; margin:0; padding:5px; border-bottom:1px solid #244061 ">
				<span style="display:inline-block; width:100%; display:block;">{{ @ $job->installation_date }}</span>
			</td>
		</tr>
		</table>
		
	</td>
</tr>
<tr>
	<td valign="top">
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td style="height:30px;"></td>
		</tr>
		<tr>
			<td align="left" style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#00b050; font-size:13px; font-weight:bold; margin:0; padding:0 0 0 10px;">
				SECTION 2: INSTALLATION COMPLIANCE <span style="font-style:italic;">(to be completed and signed by the Registered Electrical Contractor)</span>
			</td>
		</tr>
		<tr>
			<td style="height:10px;"></td>
		</tr>		
		</table>
		
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0"  class="tbl-border ">
		<tr>
			<td colspan="3" style=" width:85%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-weight:bold; font-size:12px; margin:0; padding:5px; border-right:1px solid #244061;border-bottom:1px solid #244061 ">
				Are all inverters ‘Approved Inverters' 
				<span style="  text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:11px; font-weight:normal;" >From Clean Energy Council Approved Inverter List</span>
			</td>
			<td  style=" width:15%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px;font-weight:bold; margin:0; padding:5px;border-bottom:1px solid #244061  ">
				<span class="chkbox">@if($products[0]->approved_inverter == "Yes" ) <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span> Yes&nbsp;&nbsp;&nbsp;
				<span class="chkbox">@if($products[0]->approved_inverter == "No" ) <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif</span> No
			</td>
		</tr>
		<tr>
			<td style=" width:35%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-weight:bold; font-size:12px; margin:0; padding:5px; border-right:1px solid #244061;">
				Operating Manual Provided to Customer
			</td>
			<td style=" width:15%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px;font-weight:bold; margin:0; padding:5px; border-right:1px solid #244061; ">
				<span class="chkbox"><img src="{{ asset('assets/images/checkbox.png') }}"/></span> Yes&nbsp;&nbsp;&nbsp;
				<span class="chkbox"><img src="{{ asset('assets/images/checkbox-blank.png') }}"/></span> No
			</td>
			<td style=" width:35%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-weight:bold; font-size:12px; margin:0; padding:5px; border-right:1px solid #244061;  ">
				Instructed Customer in Operation of System
			</td>
			<td style=" width:15%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px;font-weight:bold; margin:0; padding:5px;  ">
				<span class="chkbox"><img src="{{ asset('assets/images/checkbox.png') }}"/></span> Yes&nbsp;&nbsp;&nbsp;
				<span class="chkbox"><img src="{{ asset('assets/images/checkbox-blank.png') }}"/></span> No
			</td>
		</tr>
		
		</table>
	</td>
</tr>

<tr>
	<td valign="top">
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td style="height:30px;"></td>
		</tr>
		<tr>
			<td align="left" style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#00b050; font-size:13px; font-weight:bold; margin:0; padding:0 0 0 10px;">
				INVERTER TEST RECORDS: <span style="font-style:italic;">(test must be conducted at a time of day when the prevailing weather conditions allow the PV system to be producing at least a minimum output. This must be greater than 20% of the rated output of the PV array or the inverter, whichever is less)</span>
			</td>
		</tr>
		<tr>
			<td style="height:10px;"></td>
		</tr>		
		</table>
		
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0"  class="tbl-border ">
		<tr>
			<td style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-weight:bold; font-size:12px; margin:0; padding:5px; border-right:1px solid #244061;border-bottom:1px solid #244061 ">
				Test 1: Time for inverter/s to disconnect. Must be < 2 seconds to pass
			</td>
			<td style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-weight:bold; font-size:12px; margin:0; padding:5px; border-right:1px solid #244061;border-bottom:1px solid #244061 ">
				<span style="text-decoration:underline">Measurement</span><br>
				<span style="font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-weight:normal; font-size:12px; margin:0; padding:5px;border-bottom:1px solid #244061;display:inline-block; ">{{ $job->inverter_time_disconnect }}</span> Seconds
			</td>
			<td style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-weight:bold; font-size:12px; margin:0; padding:5px; border-bottom:1px solid #244061 ">
				Result (please circle one) Pass/Fail
			</td>			
		</tr>
		<tr>
			<td style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-weight:bold; font-size:12px; margin:0; padding:5px; border-right:1px solid #244061; ">
				Test 2: Time for inverter to reconnect. Must be > 60 seconds to pass
			</td>
			<td style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-weight:bold; font-size:12px; margin:0; padding:5px; border-right:1px solid #244061;">
				<span style="text-decoration:underline">Measurement</span><br>
				<span style="font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-weight:normal; font-size:12px; margin:0; padding:5px;border-bottom:1px solid #244061;display:inline-block; ">{{ $job->inverter_time_reconnect }}</span> Seconds
			</td>
			<td style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-weight:bold; font-size:12px; margin:0; padding:5px;  ">
				Pass/Fail
			</td>			
		</tr>
		
		</table>
	</td>
</tr>

<tr>
	<td valign="top">
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td style="height:30px;"></td>
		</tr>
		<tr>
			<td align="left" style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#00b050; font-size:13px; font-weight:bold; margin:0; padding:0 0 0 10px;">
				LIMITED EXPORT TEST RECORDS: <span style="font-style:italic;"> (test must be conducted in accordance with AusNet Services Policy SOP 33-06. Please append test record sheet from SOP 33-06 to this Connection Agreement)</span>
			</td>
		</tr>
		<tr>
			<td style="height:10px;"></td>
		</tr>		
		</table>
		
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0"  class="tbl-border ">
		<tr>
			<td style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-weight:bold; font-size:12px; margin:0; padding:5px; border-right:1px solid #244061;">
				Limited Export Commissioning Test has been conducted in accordance with SOP 33-06
			</td>
			<td style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-weight:bold; font-size:12px; margin:0; padding:5px;  border-right:1px solid #244061;">
                <span style="text-decoration:underline">Measurement</span><br>
				<span style="font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-weight:normal; font-size:12px; margin:0; padding:5px;border-bottom:1px solid #244061;display:inline-block; "></span> Seconds
			</td>
			<td style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-weight:bold; font-size:12px; margin:0; padding:5px; border-right:1px solid #244061; ">
				Test Record sheet attached:
			</td>
			<td style=" width:25%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-weight:bold; font-size:12px; margin:0; padding:5px; ">
				<span class="chkbox"><img src="{{ asset('assets/images/checkbox.png') }}"/></span> Yes &nbsp;&nbsp;&nbsp;
				<span class="chkbox"><img src="{{ asset('assets/images/checkbox-blank.png') }}"/></span> No
			</td>			
		</tr>
		</table>
    </td>
</tr>

<tr>
	<td valign="top">
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td style="height:30px;">&nbsp;</td>
		</tr>			
		</table>
		
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td colspan="2" style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; font-weight:bold; margin:0; padding:0 0 5px 0;">By signing this agreement, you acknowledge and represent that the information provided is correct and that:</td>
		</tr>
		<tr>
			<td valign="top">
				<ul style="text-align:left; font-family:  Arial, Helvetica, sans-serif; margin:0 0 0 0px; padding:0; list-style:disc;">
					<li style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; margin:0; padding:0 0 5px 0; list-style:disc;">the minimum requirements set out for EG systems up to 3.5 kW/phase (SWER System) up to 5kW/phase (on a Single Phase) and 5kW/phase (on a Three Phase System) have been met;</li>					
					<li style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; margin:0; padding:0 0 5px 0; list-style:disc;">the EG complies with the Electricity Safety Act 1998 (Vic) and associated Safety Regulations, the Electricity Distribution Code, the Victorian Service & Installation Rules, AS/NZS3000 (Wiring Rules) and AS4777.2:2015 (Grid Connection of Energy</li>
					<li style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; margin:0; padding:0 0 5px 0; list-style:disc;">Systems via Inverters), and any other relevant Acts, regulations, standards or guidelines;</li>
					<li style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; margin:0; padding:0 0 5px 0; list-style:disc;">the EG is connected to a dedicated circuit complete with lockable isolating switch at the switchboard;</li>
					<li style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; margin:0; padding:0 0 5px 0; list-style:disc;">the main switchboard, isolating fuse/switch/circuit breaker are labelled correctly;</li>
					<li style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; margin:0; padding:0 0 5px 0; list-style:disc;">alternative supply signage has been installed;</li>
				</ul>
			</td>
			<td valign="top">
				<ul style="text-align:left; font-family:  Arial, Helvetica, sans-serif; margin:0 0 0 0px; padding:0; list-style:disc;">
					<li style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; margin:0; padding:0 0 5px 0; list-style:disc;">commissioning tests as specified in the Service & Installation Rules, by AusNet Services, and in section 2 of this agreement have been completed and passed;</li>
					<li style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; margin:0; padding:0 0 5px 0; list-style:disc;">a Prescribed Certificate of Electrical Safety (CES) has been obtained with copies of the Electrical Works Request and CES to be sent to the EG owner’s Retailer and a copy of <span style="text-decoration:underline;">this agreement</span> is to be sent directly to AusNet Services; and</li>
					<li style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; margin:0; padding:0 0 5px 0; list-style:disc;">the EG owner has been advised that the EG should remain switched off until any metering upgrades are complete to avoid potential metering and billing issues.</li>
				</ul>
			</td>
		</tr>
		</table>
		
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td style="height:40px;"></td>
		</tr>			
		</table>
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td align="left" style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#00b050; font-size:13px;  font-weight:bold; margin:0; padding:0 0 0 10px;">
				TESTS UNDERTAKEN BY:
			</td>
		</tr>		
		</table>
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td style="height:10px;"></td>
		</tr>			
		</table>
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td style=" width:40%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-weight:bold; font-size:12px; margin:0; padding:5px;  ">
				Licenced Electrical Installation Worker Name:
			</td>
			<td style=" width:60%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; margin:0; padding:5px;    border-bottom:1px solid #244061;">
				{{ $installer->name }}
			</td>
		</tr>			
		</table>
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td style="height:5px;"></td>
		</tr>			
		</table>
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td style=" width:15%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-weight:bold; font-size:12px; margin:0; padding:5px;  ">
				Licence No.
			</td>
			<td style=" width:20%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; margin:0; padding:5px;    border-bottom:1px solid #244061;">
				{{ $installer->accredition_number }}
			</td>
			<td style=" width:15%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-weight:bold; font-size:12px; margin:0; padding:5px;    ">
			Date:
			</td>
			<td style=" width:20%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; margin:0; padding:5px;  border-bottom:1px solid #244061;">
				{{ @ $job->installtion_date }}				
			</td>
			<td style=" width:15%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-weight:bold; font-size:12px; margin:0; padding:5px;  ">
			Signature:
			</td>
			<td style=" width:15%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; margin:0; padding:5px;  border-bottom:1px solid #244061;">
					<img src="{{asset('/img/'.$companyDetails->Signature)}}" width="100px" height="50px">	
			</td>
		</tr>
		</table>
		
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td style="height:30px;"></td>
		</tr>
		<tr>
			<td align="left" style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#00b050; font-size:13px; font-weight:bold; margin:0; padding:0 0 0 10px;">
				SECTION 4: EMBEDDED GENERATOR (EG) OWNER DETAILS <span style="font-weight:normal;">(to be completed and signed by the EG owner)</span>
			</td>
		</tr>
		<tr>
			<td style="height:10px;"></td>
		</tr>		
		</table>
		
	</td>
</tr>

<tr>
	<td valign="top">		
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0"  class="tbl-border ">
		<tr>
			<td style=" width:23%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-weight:bold; font-size:12px; margin:0; padding:5px;  border-right:1px solid #244061; border-bottom:1px solid #244061;">
				Customer Name*:
			</td>
			<td style=" width:23%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; margin:0; padding:5px;    border-right:1px solid #244061; border-bottom:1px solid #244061;">
                    {{ $customer->first_name }} {{ $customer->last_name }}
			</td>
			<td style=" width:23%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-weight:bold; font-size:12px; margin:0; padding:5px;    border-right:1px solid #244061; border-bottom:1px solid #244061;">
			Customer NMI*:<br>
			<span style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:10px; margin:0; padding:0;">(Refer to your electricity bill)</span>
			</td>
			<td style=" width:23%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; margin:0; padding:5px;  border-bottom:1px solid #244061;">
                    {{ $customer->nmi }}			
			</td>
		</tr>
		<tr>
			<td style=" width:23%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-weight:bold; font-size:12px; margin:0; padding:5px;  border-right:1px solid #244061; border-bottom:1px solid #244061;">
				Supply Address*:
			</td>
			<td style=" width:23%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; margin:0; padding:5px;    border-right:1px solid #244061; border-bottom:1px solid #244061;">
                    {{ $customer->unit }} {{ $customer->street_number }} {{ $customer->street_name }} {{ $customer->lot }}  {{ $customer->suburb }}  {{ $customer->state }}  {{ $customer->post_code }}
			</td>
			<td style=" width:23%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-weight:bold; font-size:12px; margin:0; padding:5px;    border-right:1px solid #244061; border-bottom:1px solid #244061;">
			Email*:
			</td>
			<td style=" width:23%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; margin:0; padding:5px;  border-bottom:1px solid #244061;">
                    {{ $customer->email }} 
			</td>
		</tr>
			<tr>	
			<td style=" width:23%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-weight:bold; font-size:12px; margin:0; padding:5px;  border-right:1px solid #244061; border-bottom:1px solid #244061;">
				Phone Number*:
			</td>
			<td colspan="3" style=" width:69%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; margin:0; padding:0; border-bottom:1px solid #244061;">
			    
			    	<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0" >
			    	<tr>
			    	    <td style=" width:23%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-weight:bold; font-size:12px; margin:0; padding:5px;  ">
			    	    Business Hours:
			    	    </td>
			    	    <td style=" width:23%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-weight:normal; font-size:12px; margin:0; padding:5px; border-right:1px solid #244061;">
			    	    {{ $customer->phone_mobile }} 
			    	    </td>
			    	    <td style=" width:23%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-weight:bold; font-size:12px; margin:0; padding:5px;  ">
			    	    After Hours: 
			    	    </td>
			    	    <td style=" width:23%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-weight:normal; font-size:12px; margin:0; padding:5px; ">
			    	    {{ $customer->phone_mobile }} 
			    	    </td>
			    	</tr>
			    	</table>
			    
			</td>
			
		</tr>
		<tr>
			<td style=" width:23%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-weight:bold; font-size:12px; margin:0; padding:5px;  border-right:1px solid #244061;">
				Existing Meter Number
			</td>
			<td colspan="3" style=" width:74%;text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; margin:0; padding:5px; ">
                    {{ $customer->meter_number }}    
			</td>
			
		</tr>
		</table>
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td align="left" style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061000; font-size:12px; margin:0; padding:5px;">By signing this agreement, you acknowledge and represent that the information provided is correct and that:</td>
		</tr>
		</table>
		
	</td>
</tr>
<tr>
	<td valign="top">
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td style="height:30px;"></td>
		</tr>
		<tr>
			<td align="left" style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; font-weight:bold; margin:0; padding:0;">
				CUSTOMER ACKNOWLEDGEMENT, INDEMNITY AND RELEASE</span>
			</td>
		</tr>
		<tr>
			<td style="height:10px;"></td>
		</tr>		
		</table>
		
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; font-weight:bold; margin:0; padding:0 0 5px 0;">By signing and returning this agreement, and in consideration of AusNet Services allowing you to connect your EG to the distribution network, you acknowledge and represent that you have read, understand and agree to comply with the following connection obligations, and specifically that you:</td>
		</tr>
		<tr>
			<td>
				<ul style="text-align:left; font-family:  Arial, Helvetica, sans-serif; margin:0 0 0 20px; padding:0; list-style:disc;">
					<li style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; margin:0; padding:0 0 5px 0; list-style:disc;">are the owner of the EG listed under the Supply Address in section 3 above;</li>
					<li style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; margin:0; padding:0 0 5px 0; list-style:disc;">confirm all installation details are correct as described in Section 1 above;</li>
					<li style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; margin:0; padding:0 0 5px 0; list-style:disc;">have received an EG operating manual from, and been instructed on the operation of the EG by, the Installation Company detailed in section 1;
					<li style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; margin:0; padding:0 0 5px 0; list-style:disc;">will regularly maintain the EG to confirm its correct performance in accordance with this
					agreement and keep records of the maintenance performed;
					<li style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; margin:0; padding:0 0 5px 0; list-style:disc;">will ensure that the EG and any equipment within it that is connected to the Victorian electricity grid complies with the Electricity Distribution Code, the Electricity Safety Act 1998 (Vic) and associated Safety Regulations, all relevant Australian Standards and is maintained in a safe condition;</li>
					<li style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; margin:0; padding:0 0 5px 0; list-style:disc;">accept that this agreement allows you to connect the EG detailed in this agreement to the Victorian electricity grid, and that you must obtain prior written approval from AusNet Services to alter your EG in any way;</li>
					<li style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; margin:0; padding:0 0 5px 0; list-style:disc;">release and indemnify and agree to keep indemnified AusNet Services, its officers, employees and agents against all actions, proceedings, claims and demands whatsoever which may be brought, including any indirect or consequential loss or any other form of pure economic loss, made or prosecuted against them or any of them by any person in respect of the installation of your EG, particularly in relation to works completed by the Installation Company detailed in section 1 or the compliance certification provided by the registered electrical contractor in section 2, or in respect of connection of your EG to the Victorian electricity grid; and</li>
					<li style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; margin:0; padding:0 0 5px 0; list-style:disc;">in accordance with the Electricity Distribution Code will disconnect, or will allow AusNet Services to disconnect, your EG from the Victorian electricity grid if the EG or any equipment within it breaches the requirements of the Electricity Safety Act 1998 (Vic), any associated Safety Regulations, is not in compliance with any relevant Australian Standards or breaches the agreed installed capacity, export limits or performance requirements set out in this agreement.</li>
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
			<td style="height:40px;"></td>
		</tr>	
		</table>
		
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td style="width:15%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; font-weight:bold; margin:0; padding:0 0 5px 0;">
				Customer Name:
			</td>
			<td style="width:20%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; margin:0; padding:0 0 5px 0; border-bottom:1px solid #244061;">
                    {{ $customer->first_name }} {{ $customer->last_name }}
			</td>
			<td style="width:23%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; font-weight:bold; margin:0; padding:0 0 5px 0;">
				Customer Signature:
			</td>
			<td style="width:20%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; margin:0; padding:0 0 5px 0; ">
					@if($job->sign == 1) <img src="{{ $job->customer_sign }}" alt="" style="height:50px;width:100px;" /> @endif
			</td>
			<td style="width:5%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; font-weight:bold; margin:0; padding:0 0 5px 0;">
				Date:
			</td>
			<td style="width:2%">&nbsp;</td>
			<td style="width:15%; text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:12px; margin:0; padding:0 0 5px 0;  border-bottom:1px solid #244061;">
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
			<td style="height:30px;"></td>
		</tr>	
		</table>
		
		<table style=" width:100%;" width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td style="text-align:left; font-family:  Arial, Helvetica, sans-serif ; color:#244061; font-size:10px;  margin:0; padding:0 0 5px 0;">
				PRIVACY STATEMENT: The personal information you provide in this agreement will be collected by AusNet Services for the purpose of connecting and maintaining the connection of your EG to the Victorian electricity grid. This information will be used and disclosed by AusNet Services in accordance with its privacy policy details of which can be found at the following website: www.ausnetservices.com.au.
			</td>
			
			
		</tr>
		</table>
	</td>
</tr>
</table>
</div>
</body>
</html>