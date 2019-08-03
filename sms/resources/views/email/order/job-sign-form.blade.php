<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Green Sky</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	     <link href="{!! asset('assets/stylesheets/design.css') !!}" media="all" rel="stylesheet" type="text/css"/>
	      <link href="{!! asset('assets/stylesheets/style.css') !!}" media="all" rel="stylesheet" type="text/css"/>
	      
	</head>

	<body style="margin:30px auto; width:850px;font-family: 'Montserrat', sans-serif;">
		<div style="background:#000; padding:20px; text-align:center;">
			<img class="brand_icon" src="{{asset('assets/images/green-logo.png')}}" alt="logo" style="width: 75px;" />
		</div>
		<div style="align:center; border:1px solid #ccc; padding-top:30px; padding-bottom:40px">
			<h2 style="margin-bottom: 35px;font-size: 25px;color:#000; font-size: 20px; text-align: center;"> Job Completion Form </h2>
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
								
								<p style="margin:0px; text-align:center; font-size:15px;line-height: 23px;text-align: left;">We Hope that you are happy with our Work. We are Sending you a Confirmation Form for Job Completion.See below </p></br>
						        @php $id = md5($job->id); @endphp
					            <a href="{{url('/complete-sign-form/'.$id)}}" ><button class="btn btn-info btn-sm"> Confirmation Form </button></a>
                    
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
