<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>greensky-STC-Assignment-Form</title>
<style>
	
.table-2{
    position: relative;
    width: 100%;
}
.table-3 {
    border: 2px solid #3bb779;
    position: absolute;
    width: 95%;
    margin: 10px 15px;
}

.f-12{font-size: 13px;}
.f-14{font-size: 14px;}
.f-16{font-size: 16px;}
.f-18{font-size: 18px;}

.h2-02{font-size: 18px;}
.h2-3{ font-size: 18px;   padding: 10px 10px;color: #fff;text-transform: capitalize;background-color: #91c74d;}
.h2-4{font-size: 16px;font-weight: 700;text-transform: uppercase;margin: 0;padding: 0px;}
.h2-5{font-size: 14px;font-weight: 400;text-transform: capitalize;margin: 0;padding: 0px;}
.h2-6{font-size: 16px;font-weight: 700;text-transform: capitalize;margin:00px;padding: 0px;}
.h2-7{font-size: 13px;font-weight: 400;margin: 0;padding: 0px;line-height: 1.4;}
.h2-8 {font-size: 18px;font-weight: 700;margin: 0;padding: 0px;line-height: 1.4;}
.h2-9 {font-size: 13px;font-weight: 700;margin: 0;padding: 0px 0 0px 0;line-height: 1.4;}

.border-1{border:1px solid #8b8f8f;}
.border-2{border-bottom:2px solid #3bb779;}
.border-3{border:2px solid #91c74d!important;}
.border-4{border:2px solid #565656;}
.border-5{border:2px solid #828282;}
.border-6{border:2px solid #828282;}
.border-7{border:2px solid #959595;}
.border-8{border-bottom:2px solid #828282;}

.ta-1{height: 100px;width: 100%;background-color: #f1f3fe;resize: none;    margin: 5px 0 6px 0;}

.bg-1{background-color: #8b8f8f;}
.bg-2{background-color: #91c74d;}
.bg-3{background-color: #3bb779;}
.bg-4{background-color: #d3d2d5;}
.bg-5{background-color: #eb3469;}
.bg-6{background-color: #95bc57;}

.row-1 {
    padding: 10px 0;
    height: 40px;
    background-color: #d3d2d8;
}
.row-1 {
    padding: 10px 0;
    height: 60px;
    background-color: #d3d2d8;
}

.color-1{color:#fff;}
.color-2{color:#8b8f8f;}
.color-3{color:#000;}
.color-4{color:#171212;}
.color-5{color:#af9a98;}
.color-6{color:#ec3038;}
.color-7{color:#828282;}

input[type="text"] {
    background-color: #f1f3fe;
    border: none;
    outline: none;
    border: 1px solid #91c74d;
    width: 100%;
}
textarea {
    background-color: #f1f3fe;
    border: none;
    outline: none;
    border: 1px solid #91c74d;
    width: 100%;
}

.btn-1{background-color: #878b8b;
    border: none;
    color: #fff;
    padding: 3px;
}
.btn-1 {
    background-color: #878b8b;
    border: none;
    color: #fff;
    padding: 5px 0 4px 0;
    font-size: 13px;
}

.head-1{text-align: center;padding: 0;margin:0;}
.h2-1{font-size: 14px;margin: 0;padding: 0;letter-spacing: 0.5px ;}

.h-5{height: 5px;}
.h-10{height: 10px;}
.h-20{height: 20px;}
.h-30{height: 30px;}
.h-40{height: 40px;}
.h-50{height: 50px;}
.h-60{height: 60px;}
.h-70{height: 70px;}
.h-80{height: 80px;}
.h-90{height: 80px;}
.h-190{height: 190px!important;max-height: 0;}
.h-190 {
    height: 250px!important;
    max-height: 0;
}
.h-210{height: 210px!important;}
.h-250{min-height: 250px!important;}
.h-60{height: 70px!important;}


.w-15{width: 15%;float: left;}
.w-20{width: 20%;float: left;}
.w-25{width: 25%;float: left;}
.w-30{width: 30%;float: left;}
.w-40{width: 40%;float: left;}
.w-50{width: 50%;float: left;}
.w-60{width: 60%;float: left;}
.w-70{width: 70%;float: left;}
.w-80{width: 80%;float: left;}
.w-100{width: 100%;float: left;}

.f-700{font-weight: 700 !important;}
.f-400{font-weight: 400 !important;}
.f-300{font-weight: 300 !important;}

.nopadding{padding: 0!important;}
.nomargin{margin:0!important;}
.m-0{margin:0!important;}

.margin-5{margin:10px 0 0 0;}

.m-1{margin:1px;}
.m-2{margin:2px;}
.m-3{margin:3px;}
.m-4{margin:4px;}
.m-5{margin:5px;}
.m-10{margin:10px 0;}

.mt-1{margin-top:1px;}
.mt-2{margin-top:2px;}
.mt-3{margin-top:3px;}
.mt-4{margin-top:4px;}
.mt-5{margin-top:5px;}
.mt-10{margin-top:10px;}
.mt-40{margin-top:40px;}
.mt-50{margin-top:50px;}

.mb-1{margin-bottom:1px;}
.mb-2{margin-bottom:2px;}
.mb-3{margin-bottom:3px;}
.mb-4{margin-bottom:4px;}
.mb-5{margin-bottom:5px;}
.mb-10{margin-bottom:10px;}
.mb-40{margin-bottom:40px;}
.mb-50{margin-bottom:50px;}

.margin-01{    margin: 40px 0px 0 0px;}
.margin-01 {
    margin: 11px 0px 0 0px;
}

.p-100{padding: 100px;}
.p-80{padding: 80px;}
.p-60{padding: 60px;}
.p-40{padding: 40px;}
.p-20{padding: 20px;}
.p-10{padding: 10px;}
.p-17{padding: 17px;}
.p-8{padding: 8px;}
.p-7{padding: 7px;}
.p-6{padding: 6px;}
.p-5{padding: 5px;}
.p-4{padding: 4px;}
.p-3{padding: 3px;}
.p-2{padding: 2px;}
.p-1{padding: 1px;}

.pb-100{padding-bottom: 100px;}
.pb-80{padding-bottom: 80px;}
.pb-60{padding-bottom: 60px;}
.pb-40{padding-bottom: 40px;}
.pb-20{padding-bottom: 20px;}
.pb-10{padding-bottom: 10px;}
.pb-5{padding-bottom: 5px;}

.pt-100{padding-top: 100px;}
.pt-80{padding-top: 80px;}
.pt-60{padding-top: 60px;}
.pt-40{padding-top: 40px;}
.pt-20{padding-top: 20px;}
.pt-10{padding-top: 10px;}
.pt-5{padding-top: 5px;}

.plr-10{padding-left: 10px;padding-right: 10px;}
.plr-20{padding-left: 20px;padding-right: 20px;}
.plr-30{padding-left: 30px;padding-right: 30px;}
.plr-40{padding-left: 40px;padding-right: 40px;}

.pr-zero{padding-right: 0px !important;}

.col-md-37 {width: 37.5%;float: left;position: relative;min-height: 1px;padding-right: 15px;padding-left: 15px;  display: block;}
.col-md-37 {
    width: 36.5%;
    float: left;
    position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
    display: block;
    margin: 2px;
}

.col-md-6.col-49{width:49%;margin:10px 8px 0 0px;}
.col-md-6.col-49 {
    width: 49%;
    margin:10px 0px;
}
.col-md-6.col-49-2{width:49%;margin:10px 0px 0 9px;}
.col-md-6.col-49-2{width:49%;margin:10px 0px 0 9px;}

.container {
    width: 850px;
}
</style>
</head>



<body style="font-family:Arial, Helvetica, sans-serif;">
    <section class="main-container">
        <table style="width: 810px;text-align:center;margin:0 0;">
            <tr>
				<td style="width:200px;margin:0;padding:10px 10px;">
                <img src="{{asset('/pdf-test-image/logo.png')}}" style="width:200px;" alt="logo">
				</td>	
				<td style="width:340px;margin:0;padding:10px 10px;">
					<p class="h2-02 text-center">STC Assignment Form - PV Solar </h1>
                </td>
                <td style="width:270px;margin:0;">
					<table style="border:2px solid #8b8f8f;border-spacing: 0px;">
                        <tr class="bg-1">
                            <td colspan="2"><p class="head-1 color-1 f-700 p-2">OFFICE USE ONLY</p></td>
                        </tr>
                        <tr>
                            <td><span class="color-2 f-700" style="width:50px;padding:0 10px;">REF </span></td>
                        <td><input type="text" class="input-1" style="width:200px;border:1px solid #8b8f8f;" value="{{$job->rff}}" /></td>
                        </tr>
                        <tr>
                            <td><span class="color-2 f-700" style="width:50px;padding:0 10px;">PVD </span></td>
                            <td><input type="text" class="input-1" style="width:200px;border:1px solid #8b8f8f;" value="{{$job->pvd}}" /></td>
                        </tr>
                    </table>
                </td>	
			</tr>	
        </table>

        <table style="width: 810px;margin:0 0;">
            <tr>
                <td style="width:300px;margin:0;border:2px solid #91c74d;">
                    <table style="width:300px;">
                        <tr>
                            <td style="width:100px;"><span class="color-3 f-700" style="font-size: 13px;">Installation Date:</span></td>    
                            <td style="width:190px;"><input type="text" style="width:190px;" value="{{ $job->installation_date }}" /></td>
                        </tr>
                    </table>
                    <table style="width:300px;">
                        <tr style="background-color: #91c74d;">
                            <td colspan="2"><h2 style="background-color: #91c74d;color: #171212;font-size: 14px;padding: 0px 0;margin:5px 0;text-align:center;"><b>Owner Details </b></h2></td>
                        </tr>
                    </table>        
                    <table>
                        <tr>
                            <td style="width:100px;"><span class="color-3 f-400" style="font-size: 13px;">First Name:</span></td>    
                            <td style="width:190px;"><input type="text" style="width:190px;" value="{{ $customer->first_name }}"/></td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td style="width:100px;"><span class="color-3 f-400" style="font-size: 13px;">Last Name:</span></td>    
                            <td style="width:190px;"><input type="text" style="width:190px;" value="{{ $customer->last_name }}"/></td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td style="width:100px;"><span class="color-3 f-400" style="font-size: 13px;">Postal Address:</span></td>    
                            <td style="width:190px;"><input type="text" style="width:190px;" value="{{ $customer->unit }} {{ $customer->street_number }} {{ $customer->street_name }}"/></td>
                        </tr>
                    </table>    
                    <table>
                        <tr>
                            <td style="width:100px;"><span class="color-3 f-400" style="font-size: 13px;">Suburb:</span></td>    
                            <td style="width:190px;"><input type="text" style="width:190px;" value="{{ $customer->suburb }}"/></td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td style="width:100px;"><span class="color-3 f-400" style="font-size: 13px;">State:</span></td>    
                            <td style="width:190px;"><input type="text" style="width:190px;" placeholder="VIC" value="{{ $customer->state }}"/></td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td style="width:100px;"><span class="color-3 f-400" style="font-size: 13px;">Postcode:</span></td>    
                            <td style="width:190px;"><input type="text" style="width:190px;" value="{{ $customer->post_code }}"/></td>
                        </tr>
                    </table>
                    <table>
                        <tr >
                            <td style="width:100px;"><span class="color-3 f-400" style="font-size: 13px;">Home:</span></td>    
                            <td style="width:190px;"><input type="text" style="width:190px;" value="{{ $customer->phone_home }}"/></td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td style="width:100px;"><span class="color-3 f-400" style="font-size: 13px;">Mobile:</span></td>    
                            <td style="width:190px;"><input type="text" style="width:190px;" value="{{ $customer->phone_mobile }}"/></td>
                        </tr>
                    </table>    
                    <table>
                        <tr>
                            <td style="width:100px;"><span class="color-3 f-400" style="font-size: 13px;">Email:</span></td>    
                            <td style="width:190px;"><input type="text" style="width:190px;" value="{{ $customer->email }}"/></td>
                        </tr>
                    </table>
                </td>
                <td style="width:300px;margin:0;border:2px solid #91c74d;">
                    <table style="width:300px;">
                        <tr>
                            <td style="width:100px;"><span class="color-3 f-700" style="font-size: 13px;">STC Deeming Period:</span></td>    
                            <td style="width:200px;">
                                <table>
                                    <tr>
                                        <td> <img src="{{ asset('assets/images/checkbox-blank.png') }}"/></td><td><span style="font-size:12px;"> 1 Yr</span></td>
                                        <td> <img src="{{ asset('assets/images/checkbox-blank.png') }}"/></td><td><span style="font-size:12px;"> 5 Yr</span></td>
                                        <td> <img src="{{ asset('assets/images/checkbox.png') }}"/></td><td><span style="font-size:12px;"> 13 Yr</span></td>
                                    </tr>
                                </table>
                                
                                
                            </td>
                        </tr>
                    </table>
                    
                    <table style="width:300px;">
                        <tr style="background-color: #91c74d;">
                            <td colspan="2"><h2 style="background-color: #91c74d;color: #171212;font-size: 14px;padding: 0px 0;margin:5px 0;text-align:center;"><b>Installation Details</b></h2></td>
                        </tr>
                    </table>        
                    <table>
                        <tr>
                            <td colspan="2">
                                {{-- <input type="checkbox"> --}}
                                <img src="{{ asset('assets/images/checkbox.png') }}"/>
                                <span style="font-size: 13px;">  Same as Owner Details </span></td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td style="width:100px;"><span class="color-3 f-400" style="font-size: 13px;">First Name:</span></td>    
                            <td style="width:190px;"><input type="text" style="width:190px;" value=""/></td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td style="width:100px;"><span class="color-3 f-400" style="font-size: 13px;">Last Name:</span></td>    
                            <td style="width:190px;"><input type="text" style="width:190px;" value=""/></td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td style="width:100px;"><span class="color-3 f-400" style="font-size: 13px;">Install Address:</span></td>    
                            <td style="width:190px;"><input type="text" style="width:190px;" value=" "/></td>
                        </tr>
                    </table>    
                    <table>
                        <tr>
                            <td style="width:100px;"><span class="color-3 f-400" style="font-size: 13px;">Suburb:</span></td>    
                            <td style="width:190px;"><input type="text" style="width:190px;" value=""/></td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td style="width:100px;"><span class="color-3 f-400" style="font-size: 13px;">State:</span></td>    
                            <td style="width:190px;"><input type="text" style="width:190px;" placeholder="" value=""/></td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td style="width:100px;"><span class="color-3 f-400" style="font-size: 13px;">Postcode:</span></td>    
                            <td style="width:190px;"><input type="text" style="width:190px;" value=""/></td>
                        </tr>
                    </table>
                    <table>
                        <tr >
                            <td style="width:100px;"><span class="color-3 f-400" style="font-size: 13px;">Home:</span></td>    
                            <td style="width:190px;"><input type="text" style="width:190px;" value=""/></td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td style="width:100px;"><span class="color-3 f-400" style="font-size: 13px;">Mobile:</span></td>    
                            <td style="width:190px;"><input type="text" style="width:190px;" value=""/></td>
                        </tr>
                    </table>    
                </td>
                <td style="width:190px;margin:0;border:2px solid #3bb779;vertical-align: top;">
                    <table>
                        <tr>
                            <td colspan="2" style="width:180px;text-align:center;"><h2 class="h2-1 color-1 bg-3 f-700 text-center p-8" style="width:180px;text-align:center;padding:10px;">Solar Panel System </h2></td>
                        </tr>
                        
                        <tr>
                            <td style="width:180px;text-align:right;"><span class="color-5 f-400 text-right">Panel Brand</span></td>
                        </tr>

                        <tr>
                        <td style="width:180px;"><input type="text" class="input-2" style="padding:5px 0 5px 5px;width:180px;" placeholder="LG NEON2 330W" @foreach($products as $product) @if($product->category->name == "Solar Panel") @if($product->brand) value="{{ $product->brand->name }}" @endif  @endif @endforeach /></td>
                        </tr>

                        <tr>
                            <td style="width:180px;text-align:right;"><span class="color-5 f-400 text-right">Panel Model</span></td>
                        </tr>

                        <tr>
                            <td style="width:180px;"><input type="text" class="input-2" style="padding:5px 0 5px 5px;width:180px;" placeholder="LG330N1C(W)-G4" @foreach($products as $product) @if($product->category->name == "Solar Panel") value="{{ $product->model }}" @endif @endforeach /></td>
                        </tr>

                        <tr>
                            <td style="width:180px;text-align:right;"><span class="color-5 f-400 text-right">Inverter Brand </span></td>
                        </tr>

                        <tr>
                            <td style="width:180px;"><input type="text" class="input-2" style="padding:5px 0 5px 5px;width:180px;" placeholder="Enphase Energy"  @foreach($products as $product) @if($product->category->name != "Solar Panle") @if($product->brand) value="{{ $product->brand->name }}" @endif @endif @endforeach />  </td>
                        </tr>

                        <tr>
                            <td style="width:180px;text-align:right;"><span class="color-5 f-400 text-right">Inverter Model</span></td>
                        </tr>

                        <tr>
                            <td style="width:180px;"><input type="text" class="input-2" style="padding:5px 0 5px 5px;width:180px;" placeholder="Micro Inverters" @foreach($products as $product) @if($product->category->name != "Solar Panel") value="{{ $product->model }}" @endif @endforeach /></td>
                        </tr>

                        <tr>
                            <td style="width:180px;text-align:right;"><span class="color-5 f-400 text-right">Inverter Series</span></td>
                        </tr>
                        <tr>
                            <td style="width:180px;"><input type="text" class="input-2" style="padding:5px 0 5px 5px;width:180px;" placeholder="S270-72-LN-2AU" @foreach($products as $product) @if($product->category->name != "Solar Panel") value="{{ $product->series }}" @endif @endforeach /></td>
                        </tr>
                    </table>
                </td>
            </tr>  
        </table>    
        
        <table style="width: 810px;text-align:center;margin:0 0;">
            <tr>
                <td style="width:800px;margin:0;">
                    <table>
                        <tr>
                            <td style="width:170px;height:200px;border: 2px solid #565656;vertical-align:top;font-size:14px;">
                                <table style="padding:0px;"><tr><td>Are you replacing panels to a system as a result of damage or faults?</td></tr></table>
                                <table style="text-align:center;margin:10px 0;">
                                    <tr>
                                        <td>
                                            @if($job->replacing == "Yes") <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif
                                        </td>
                                        <td>
                                            <span class="p-5"> Yes</span>
                                        </td>
                                        <td>
                                                @if($job->replacing == "No") <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif
                                        </td>
                                        <td>
                                            <span class="p-5"> No</span>
                                        </td>
                                    </tr>
                                </table>
                                <table style="padding:0px;margin:10px 0;"><tr><td style="text-align: center;padding: 0 15px;"># of replacement panels?</td></tr></table>
                            <table style="padding:0px;margin:10px 0;"><tr><td><input type="text" style="width:140px;border: 2px solid #828282;" value="{{ $job->no_of_replacing }}" /></td></tr></table>
                            </td>
                            <td style="width:170px;height:200px;border: 2px solid #565656;vertical-align:top;font-size:14px;">
                                <table style="padding:0px;"><tr><td>Are you installing additional panels to an existing system?</td></tr></table>
                                <table style="text-align:center;margin:10px 0;">
                                    <tr>
                                        <td>
                                                @if($job->additional == "Yes") <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/>  @endif
                                        </td>
                                        <td>
                                            <span class="p-5"> Yes</span>
                                        </td>
                                        <td>
                                                @if($job->additional == "No") <img src="{{ asset('assets/images/checkbox.png') }}"/> @else 
                                                <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif
                                        </td>
                                        <td>
                                            <span class="p-5"> No</span>
                                        </td>
                                    </tr>
                                </table>
                                <table style="padding:0px;margin:10px 0;"><tr><td style="text-align: center;padding: 0 15px;"># of additional panels?</td></tr></table>
                            <table style="padding:0px;margin:10px 0;"><tr><td><input type="text" style="width:140px;border: 2px solid #828282;" value="{{ $job->no_of_additional }}" /></td></tr></table>
                            </td>
                            <td style="width:170px;height:200px;border: 2px solid #565656;vertical-align:top;font-size:14px;">
                                <table style="padding:0px;"><tr><td>Are you replacing panels to a system as a result of damage or faults?</td></tr></table>
                                <table style="text-align:center;margin:10px 0;">
                                    <tr>
                                        <td>
                                             @if($job->replacing == "Yes") <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif 
                                        </td>
                                        <td>
                                            <span class="p-5"> Yes</span>
                                        </td>
                                        <td>
                                            @if($job->replacing == "No") <img src="{{ asset('assets/images/checkbox.png') }}"/>  @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif 
                                        </td>
                                        <td>
                                            <span class="p-5"> No</span>
                                        </td>
                                    </tr>
                                </table>
                                <table style="padding:0px;margin:10px 0;"><tr><td style="text-align: center;padding: 0 15px;">Is there currently more than one system installed at this address?</td></tr></table>
                            <table style="padding:0px;margin:10px 0;"><tr><td><input type="text" style="width:140px;border: 2px solid #828282;" value="{{ $job->more_than_one_system }}" /></td></tr></table>
                            </td>
                            <td style="width:170px;height:200px;border: 2px solid #565656;vertical-align:top;font-size:14px;">
                                <table style="padding:0px;"><tr><td>Are there any additional comments relating to this installation? </td></tr></table>
                                <table style="text-align:center;margin:10px 0;">
                                    <tr>
                                        <td>
                                        <input type="text" style="width:140px;border: 2px solid #828282;padding:20px 10px;" value="{{$job->installation_comments}} "/>
                                            <!--<textarea rows="4" style="background-color: #f1f3fe;outline: none;width:140px;border: 2px solid #828282;resize:none;padding:5px;"></textarea>-->
										</td>
                                    </tr>
                                </table>
                            </td>
                            <td style="width:170px;height:200px;border: 2px solid #565656;vertical-align:top;font-size:14px;background-color:#d3d2d5;">
                                <table style="padding:10px 0;text-align:center;width:150px;"><tr><td>Number of Panels </td></tr></table>
                                <table style="padding:0px;margin:10px 0;"><tr><td><input type="text" style="width:140px;border: 2px solid #828282;" value="{{ $package->number_of_phase }}" ></td></tr></table>
                                <table style="padding:10px 0;text-align:center;width:150px;"><tr><td>Rated Power Output (kW)</td></tr></table>
                                <table style="padding:0px;margin:10px 0;"><tr><td><input type="text" style="width:140px;border: 2px solid #828282;" value={{ $job->total_wt/1000 }} /></td></tr></table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
		
        <table style="width: 810px;text-align:center;margin:0 0;">
            <tr style="background:#d3d2d8;">
                <td style="width:800px;margin:0;font-size:12px;">
                    <table>
                        <tr>
                            <td style="width:120px;margin:0;color: #ec3038;">
                                <b>Property Type:</b>
                            </td>
                            <td style="width:20px;margin:0;">
                                 @if($customer->property_type == "Residential") <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif 
                            </td>
                            <td style="width:100px;margin:0;">
                                Residential
                            </td>
                            <td style="width:20px;margin:0;">
                                  @if($customer->property_type == "School") <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif 
                            </td>
                            <td style="width:100px;margin:0;">
                                School
                            </td>
                            <td style="width:20px;margin:0;">
                                @if($customer->property_type == "Commercial") <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif 
                            </td>
                            <td style="width:100px;margin:0;">
                                Commercial
                            </td>
                            <td style="width:20px;margin:0;">
                               @if($customer->property_type != "Residential" && $customer->property_type != "School" && $customer->property_type != "Commercial" ) <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif 
                            </td>
                            <td style="width:100px;margin:0;">
                                Other
                            </td>
                            <td style="width:100px;margin:0;">
                            <input type="text" style="width:90px;border: 2px solid #828282;" @if($customer->property_type != "Residential" && $customer->property_type != "School" && $customer->property_type != "Commercial" ) value="{{ $customer->property_type }}" @endif  />
                            </td>    
                        </tr>
                    </table>    
                    <table>
                        <tr>
                            <td style="width:119px;margin:0;color: #ec3038;">
                                <b>Single/Multi Story:</b>
                            </td>
                            <td style="width:19px;margin:0;">
                                 @if($customer->single_multi == "single") <img src="{{ asset('assets/images/checkbox.png') }}"/>  @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif 
                            </td>
                            <td style="width:100px;margin:0;">
                                Single
                            </td>
                            <td style="width:19px;margin:0;">
                                 @if($customer->single_multi == "multi") <img src="{{ asset('assets/images/checkbox.png') }}"/> @else <img src="{{ asset('assets/images/checkbox-blank.png') }}"/> @endif 
                            </td>
                            <td style="width:100px;margin:0;">
                                Multi
                            </td>
                            <td style="width:19px;margin:0;">
                                <input type="checkbox">
                            </td>
                            <td style="width:200px;margin:0;">
                                Number of small-scale tech certs (STCs)
                            </td>
                            <td style="width:200px;margin:0;">
                                <table>
                                    <tr>
                                        <td style="background-color:#878b8b;border-spacing: 0px!important;color:#fff;">Number of STCs</td>
                                    <td><input type="text" style="width:90px;border: 2px solid #828282;border-spacing: 0px!important;" value="{{$stc}}"></td>
                                    </tr>
                                </table>
                            </td>    
                        </tr>
                        
                    </table>    

                </td>
            </tr>
        </table>        
        
        
        <table style="width: 810px;text-align:left;margin:10px 0;">
            <tr style="background:#91c74d;">
                <td style="width:800px;margin:0;font-size:14px;padding:10px 10px;">
                    <b>Accreditation Information</b> 
                </td>
            </tr>
        </table>        
		
        <table style="width: 800px;margin:0 0;">
            <tr style="background:#fff;">
                <td style="width:800px;margin:0;font-size:12px;">
                    <table>
                        <tr>
                            <td colspan="6" style="width:800px;text-align:left;margin:0;color: #000;">
                                <b>INSTALLER DETAILS</b>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:149px;margin:0;color: #000;">
                                <input type="text" style="width:149px;border:2px solid #828282;" value="{{ @$installer->name }} " />
                            </td>
                            <td style="width:149px;margin:0;color: #000;">
                                <input type="text" style="width:149px;border:2px solid #828282;" value="{{ $companyDetails->Phone }}" />
                            </td>
                            <td colspan="3" style="width:349px;margin:0;color: #000;">
                                <input type="text" style="width:339px;border:2px solid #828282;" value="{{ @$installer->address }}  {{ @$installer->suburb }}  {{ @$installer->post_code }}" />
                            </td>
                            <td style="width:149px;margin:0;color: #000;">
                                <input type="text" style="width:149px;border:2px solid #828282;" value="{{ @$installer->accredition_number }}" />
                            </td>
                        </tr>
                        <tr>
                            <td style="width:149px;margin:0;color: #828282;">
                                <small>FULL NAME</small>
                            </td>
                            <td style="width:149px;margin:0;color: #828282;">
                                <small>PHONE</small>
                            </td>
                            <td style="width:120px;margin:0;color: #828282;text-align:left;">
                                <small>ADDRESS</small>
                            </td>
                            <td style="width:115px;margin:0;color: #828282;text-align:center;">
                                <small>SUBURB</small>
                            </td>
                            <td style="width:120px;margin:0;text-align:right;color: #828282;">
                                <small>POSTCODE</small>
                            </td>
                            <td style="width:149px;margin:0;color: #828282;">
                                <small>ACCREDITATION NUMBER</small>
                            </td>
                        </tr>
                    </table>    
                </td>
            </tr>
        </table>       
        
        <table style="width: 800px;margin:0 0;">
            <tr style="background:#fff;">
                <td style="width:800px;margin:0;font-size:12px;">
                    <table>
                        <tr>
                            <td colspan="6" style="width:800px;text-align:left;margin:0;color: #000;">
                                <table>
                                    <tr>
                                        <td style="width:400px;text-align:left;margin:0;color: #000;"><b>ELECTRICIAN DETAILS</b></td>
                                        <td style="width:409px;text-align:right;margin:0;color: #000;"><small>• State 'As Above' If Details Are The Same</small></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:149px;margin:0;color: #000;">
                                <input type="text" style="width:149px;border:2px solid #828282;" value="{{ @ $job->electrical->name }}" />
                            </td>
                            <td style="width:149px;margin:0;color: #000;">
                                <input type="text" style="width:149px;border:2px solid #828282;" value="{{ $companyDetails->Phone }}" />
                            </td>
                            <td colspan="3" style="width:349px;margin:0;color: #000;">
                                <input type="text" style="width:339px;border:2px solid #828282;" value="{{ @$job->electrical->address }}  {{ @$job->electrical->suburb }}  {{ @$job->electrical->post_code }}" />
                            </td>
                            <td style="width:149px;margin:0;color: #000;">
                                <input type="text" style="width:149px;border:2px solid #828282;" value="{{ @$job->electrical->accredition_number }}" />
                            </td>
                        </tr>
                        <tr>
                            <td style="width:149px;margin:0;color: #828282;">
                                <small>FULL NAME</small>
                            </td>
                            <td style="width:149px;margin:0;color: #828282;">
                                <small>PHONE</small>
                            </td>
                            <td style="width:120px;margin:0;color: #828282;text-align:left;">
                                <small>ADDRESS</small>
                            </td>
                            <td style="width:115px;margin:0;color: #828282;text-align:center;">
                                <small>SUBURB</small>
                            </td>
                            <td style="width:120px;margin:0;text-align:right;color: #828282;">
                                <small>POSTCODE</small>
                            </td>
                            <td style="width:149px;margin:0;color: #828282;">
                                <small>ACCREDITATION NUMBER</small>
                            </td>
                        </tr>
                    </table>    
                </td>
            </tr>
        </table>     
        
        <table style="width: 800px;margin:0 0;">
            <tr style="background:#fff;">
                <td style="width:800px;margin:0;font-size:12px;">
                    <table>
                        <tr>
                            <td colspan="6" style="width:800px;text-align:left;margin:0;color: #000;">
                                <table>
                                    <tr>
                                        <td style="width:400px;text-align:left;margin:0;color: #000;"><b>DESIGNER DETAILS</b></td>
                                        <td style="width:409px;text-align:right;margin:0;color: #000;"><small>• State 'As Above' If Details Are The Same</small></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:149px;margin:0;color: #000;">
                                <input type="text" style="width:149px;border:2px solid #828282;" value="{{ @ $job->designer->name }}" />
                            </td>
                            <td style="width:149px;margin:0;color: #000;" >
                                <input type="text" style="width:149px;border:2px solid #828282;" value="{{ $companyDetails->Phone }}" />
                            </td>
                            <td colspan="3" style="width:349px;margin:0;color: #000;">
                                <input type="text" style="width:339px;border:2px solid #828282;" value="{{ @$job->designer->address }}  {{ @$job->designer->suburb }}  {{ @$job->designer->post_code }}" />
                            </td>
                            <td style="width:149px;margin:0;color: #000;">
                                <input type="text" style="width:149px;border:2px solid #828282;" value="{{ @$job->designer->accredition_number }}" />
                            </td>
                        </tr>
                        <tr>
                            <td style="width:149px;margin:0;color: #828282;">
                                <small>FULL NAME</small>
                            </td>
                            <td style="width:149px;margin:0;color: #828282;">
                                <small>PHONE</small>
                            </td>
                            <td style="width:120px;margin:0;color: #828282;text-align:left;">
                                <small>ADDRESS</small>
                            </td>
                            <td style="width:115px;margin:0;color: #828282;text-align:center;">
                                <small>SUBURB</small>
                            </td>
                            <td style="width:120px;margin:0;text-align:right;color: #828282;">
                                <small>POSTCODE</small>
                            </td>
                            <td style="width:149px;margin:0;color: #828282;">
                                <small>ACCREDITATION NUMBER</small>
                            </td>
                        </tr>
                    </table>    
                </td>
            </tr>
        </table>     

	    <table style="width:810px;padding:0px 0;background-color: #fff;margin:100px 0 0px 0;">
            <tr>
                <td style="width:810px;vertical-align:top;font-size:14px;padding:3px;background-color: #95bc57;">
                    
                </td>
            </tr>
        </table>

        <table style="width:810px;padding:0px 0;background-color: #fff;margin:0 0;">
            <tr>
                <td style="width:810px;vertical-align:top;font-size:14px;padding:0px;">
                    <p><b><small> Mandatory written statement by the cec Installer and designer: </small></b></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="color-3 f-700 f-12">
                    <span>I</span> 
                    {{-- <input type="text" style="width:100px;border: 2px solid #828282;" value="{{ $installer->name }}" />  --}}
                    {{ $installer->name }}
                    <span> (name of Installer) was the accredited CEC Installer that completed the SGU installation at</span>
                        {{-- <input type="text" style="width:100px;border: 2px solid #828282;" value="{{ $customer->unit }} {{ $customer->street_number }} {{ $customer->street_name }} {{ $customer->state }}" /> --}}

                        {{ $customer->unit }} {{ $customer->street_number }} {{ $customer->street_name }} {{ $customer->state }}
                        
                         and verify that I have Installed the system, It meets
                        the CEC accreditation guidelines, CEC Accreditation Code of Practice and I am bound by their Code of Conduct, have used panels and inverters approved by the CEC, followed all of the Clean Energy Regulator's Guidelines, have $5m in Public
                        Liability Insurance and the system meets the following Australian Standards, where applicable:-
                    </p>
                </td>
            </tr>
        </table>


        <table style="width:810px;padding:0px 0;background-color: #fff;margin:0 0;">
            <tr>
                <td style="width:270px;vertical-align:top;font-size:14px;padding:0px;">
                    <table style="width:270px;vertical-align:top;font-size:14px;padding:0px;border:1px solid #000;">
                        <tr>
                            <td>
                                <tr>
                                    <td><p style="margin:0;"><b>PV & Inverter Standards</b></p></td>
                                </tr>
                                <tr>
                                    <td><p style="margin:0;">AS/NZS 5033:2005, Installation of photovoltaic (PV) arrays</p></td>
                                </tr>
                                <tr>
                                    <td><p style="margin:0;">AS/NCS 1170:2002, Structural Design actions, Part 2: Wind Action (PV Array) </p></td>
                                </tr>
                                <tr>
                                    <td><p style="margin:0;">AS/NZS 5033, PV modules are compliant and the product is listed at standard AS 4086:2:1997, Secondary batteries for use with standalone www.cleanenergycouncil.org.au </p></td>
                                </tr>
                                <tr>
                                    <td><p style="margin:0;">The grid connected inverter used has bean tasted to Standard AS 47TT and the product is listed at cleananargycouncil.org.au </p></td>
                                </tr>
                            </td>
                        </tr>
                    </table>
                </td>     
                <td style="width:270px;vertical-align:top;font-size:14px;padding:0px;">
                    <table style="width:270px;font-size:14px;padding:0px 0 100px 0;border:1px solid #000;">
                        <tr>
                            <td>
                                <tr>
                                    <td><p style="margin:0;"><b>Grid Connected System</b></p></td>
                                </tr>
                                <tr>
                                    <td><p style="margin:0;">AS/NZS 3000:2007, Wiring Rules</p></td>
                                </tr>
                                <tr>
                                    <td><p style="margin:0;">AS 4777, this installation complies to this standard</p></td>
                                </tr>
                                <tr>
                                    <td><p style="margin:0;">AS/NZS 51768:2007, Lightning Protection</p></td>
                                </tr>
                                <tr>
                                    <td><p style="margin:0;">AS 4777:2005, Grid connection of energy system via Inverters </p></td>
                                </tr>
                            </td>
                        </tr>
                    </table>
                </td>     
                <td style="width:270px;vertical-align:top;font-size:14px;padding:0px;">
                    <table style="width:270px;font-size:14px;padding:0px 0 105px 0;border:1px solid #000;">
                        <tr>
                            <td>
                                <tr>
                                    <td><p style="margin:0;"><b>Standalone System</b></p></td>
                                </tr>
                                <tr>
                                    <td><p style="margin:0;">AS/NZS 4509:2009, Standalone Power systems part 1: Safety & Installation</p></td>
                                </tr>
                                <tr>
                                    <td><p style="margin:0;">AS 4086:2:1997, Secondary batteries for use with standalone power system, Part 2: Installation & maintenance, wind system</p></td>
                                </tr>
                                <tr>
                                    <td><p style="margin:0;">AS/NZS 3000:2007, Wiring Rules</p></td>
                                </tr>
                            </td>
                        </tr>
                    </table>
                </td>         
            </tr>
        </table>

        <table style="width:810px;padding:0px 0;background-color: #fff;margin:0 0;">
            <tr>
                <td style="font-size:14px;">
                    <span style="font-weight:700;"><b>I verify that all local, State or Territory government requirements have been met for. (i) The siting of the unit (ii) The attachment of the unit to the building or structure. (iii) The grid connection of the system
					for the SGU installation</b></span><span>I verify that the SGU is </span>
					<input type="checkbox"> <span style="padding:5px;"> Grid connected </span>
					<input type="checkbox"> <span style="padding:5px;">  an Off grid installation and an electrical worker holding an unrestricted licence for electrical work issued by the State or Territory authority for the place where the unit was installed undertook all wiring of the unit that involves alternating current of 50 or more volts or direct current of 120. I confirm that the details in the above statement is correct. </span>
                </td>
            </tr>
        </table>
		
		<table style="width:810px;padding:0px 0;background-color: #fff;margin:0 0;">
            <tr>
                <td style="width:300px;">
					<table style="text-align:center;">
						<tr>
							<td>
                                {{-- <input type="input" style="border: 2px solid #828282;background-color: #f1f3fe;width:280px;"> --}}
                                @if(isset($installer->image))
                                    @if( file_exists(public_path('/user/'.$installer->image)) )
                                        <img src="{{asset('/user/'.$installer->image)}}" width="140px" height="50px" />
                                    @endif
                                @endif
							</td>
						</tr>
						<tr style="text-align:left;">
							<td>
								<small style="color: #828282;">Signature of the SGUs CEC Installer</small>
							</td>
						</tr>
					</table>
				</td>
				<td style="width:100px;">
					<table style="text-align:center;">
						<tr>
							<td>
								<input type="input" style="border: 2px solid #828282;background-color: #f1f3fe;width:100px;" value="{{$installer->accredition_number}}" />
							</td>
						</tr>
						<tr style="text-align:left;">
							<td>
								<small style="color: #828282;">CEC Number</small>
							</td>
						</tr>
					</table>
				</td>
				
				<td style="width:300px;">
					<table style="text-align:center;">
						<tr>
							<td>
                                {{-- <input type="input" style="border: 2px solid #828282;background-color: #f1f3fe;width:280px;"  value="{{ @ $job->designer->name }}"  /> --}}
                                @if(isset($installer->image))
                                    @if( file_exists(public_path('/user/'.$installer->image)) )
                                        <img src="{{asset('/user/'.$installer->image)}}" width="140px" height="50px" />
                                    @endif
                                @endif
							</td>
						</tr>
						<tr style="text-align:left;">
							<td>
								<small style="color: #828282;">Signature of the SGUs CEC Designer</small>
							</td>
						</tr>
					</table>
				</td>
				<td style="width:100px;">
					<table style="text-align:center;">
						<tr>
							<td>
                            <input type="input" style="border: 2px solid #828282;background-color: #f1f3fe;width:100px;" value="{{$installer->accredition_number}}" />
							</td>
						</tr>
						<tr style="text-align:left;">
							<td>
								<small style="color: #828282;">CEC Number</small>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>	
		
		<table style="width:810px;padding:0px 0;background-color: #fff;margin:0 0;">
            <tr>
                <td style="width:300px;">
					<table style="text-align:center;">
						<tr>
							<td>
								<input type="input" style="border: 2px solid #828282;background-color: #f1f3fe;width:280px;" value="{{$customer->first_name}} {{$customer->last_name}}" />
							</td>
						</tr>
						<tr style="text-align:left;">
							<td>
								<small style="color: #828282;">Print Name</small>
							</td>
						</tr>
					</table>
				</td>
				<td style="width:100px;">
					<table style="text-align:center;">
						<tr>
							<td>
                            <input type="input" style="border: 2px solid #828282;background-color: #f1f3fe;width:100px;" value="{{ $date }}" />
							</td>
						</tr>
						<tr style="text-align:left;">
							<td>
								<small style="color: #828282;">Date</small>
							</td>
						</tr>
					</table>
				</td>
				
				<td style="width:300px;">
					<table style="text-align:center;">
						<tr>
							<td>
								<input type="input" style="border: 2px solid #828282;background-color: #f1f3fe;width:280px;" value="{{$customer->first_name}} {{$customer->last_name}}"  />
							</td>
						</tr>
						<tr style="text-align:left;">
							<td>
								<small style="color: #828282;">Print Name</small>
							</td>
						</tr>
					</table>
				</td>
				<td style="width:100px;">
					<table style="text-align:center;">
						<tr>
							<td>
                            <input type="input" style="border: 2px solid #828282;background-color: #f1f3fe;width:100px;" value="{{ $date }}" />
							</td>
						</tr>
						<tr style="text-align:left;">
							<td>
								<small style="color: #828282;">Date</small>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>	
		
		<table style="width:810px;padding:0px 0;background-color: #fff;margin:0 0;">
            <tr>
                <td style="width:400px;">
					<table style="width:398px;border:1px solid #000;"> 
						<tr>
							<td><b>Mandatory Declaration</b></td>
						</tr>
						<tr>
							<td style="font-size:12px;text-align:left;font-weight:600;">I am the legal owner of the above small generation unit (SGU) and assign the right to create STCs to KB Quality Airconditioning Pty Ltd t/as Green Sky Australia for the period stated above, commencing at the date of installation. I have not preiously assigned or created any STCs for this system within this period To claim 14 years deeming for SGU. STCs must be registered within 12 months or installation I understand I am under no obligation to assign STCs to Green Sky Australia. I agree to repay the STC to Green Sky Australia should my assignment be invalid.I understand that an agent of the Clean Energy Regulator or Green Sky Australia may wish to inspect the SGU within the five years of certificate redemption. I must retain receipts and proof of the installation date for the life of the STCs. I am aware that penalties can be applied for providing misleading information in the form under the Renewable energy (Electricity) Act 2000
I further declare that the accredited CEC Installer named on this form physically attended the installation of the unit</td>
						</tr>		
					</table>
				</td>
				<td style="width:400px;">
					<table style="width:400px;"> 
						<tr>
							<td style="font-size:12px;text-align:left;font-weight:600;">
								<span>I understand that this system is eligible for </span> <input type="text" style="border: 2px solid #828282;background-color: #f1f3fe;width:100px;" value="{{ $stc }}" />
								<span> STCs and in exchange for assigning my
										right to create these STCs, I will receive a point of sale discount from the installers/suppliers. 
								</span>
							</td>
						</tr>
						<tr>
							<td>
								<!--start-->
								<table style="width:400px;padding:0px 0;background-color: #fff;margin:20px 0;">
									<tr>
										<td style="width:150px;">
											<table style="text-align:center;">
												<tr>
													<td>
														<input type="input" style="border: 2px solid #828282;background-color: #f1f3fe;width:140px;">
													</td>
												</tr>
												<tr style="text-align:left;">
													<td>
														<small style="color: #828282;">Owner Signature</small>
													</td>
												</tr>
											</table>
										</td>
										<td style="width:50px;">
											<table style="text-align:center;">
												<tr>
													<td>
														<input type="input" style="border: 2px solid #828282;background-color: #f1f3fe;width:50px;" value="{{ $date }}">
													</td>
												</tr>
												<tr style="text-align:left;">
													<td>
														<small style="color: #828282;">Date</small>
													</td>
												</tr>
											</table>
										</td>
										
										<td style="width:150px;">
											<table style="text-align:center;">
												<tr>
													<td>
                                                            
                                                        {{-- <input type="input" style="border: 2px solid #828282;background-color: #f1f3fe;width:140px;"> --}}
                                                        @if(isset($installer->image))
                                                        @if( file_exists(public_path('/user/'.$installer->image)) )
                                                        <img src="{{asset('/user/'.$installer->image)}}" width="140px" height="75px" />
                                                        @endif
                                                        @endif
													</td>
                                                </tr>
												<tr style="text-align:left;">
													<td>
														<small style="color: #828282;">Agent/Installer Signature</small>
													</td>
												</tr>
											</table>
										</td>
										<td style="width:50px;">
											<table style="text-align:center;">
												<tr>
													<td>
														<input type="input" style="border: 2px solid #828282;background-color: #f1f3fe;width:50px;" value="{{ $date }}">
													</td>
												</tr>
												<tr style="text-align:left;">
													<td>
														<small style="color: #828282;">Date</small>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table>	
								
                                <!--end-->
                                
							</td>
						</tr>
						<tr>
							<td style="font-size:12px;"><b>PRIVACY DECLARATION:</b> Green Sky Australia will only use this personal information as intended and will not sell or divulge this to any third parties other than the Clean Energy Regulators.</td>
						</tr>		
					</table>
				</td>
				
			</tr>
		</table>	
		
    </section><!-- end of main-content section -->

</body>
</html>