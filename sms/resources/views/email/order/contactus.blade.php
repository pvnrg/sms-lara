<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Green Sky</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	
	</head>
	<body style="margin:30px auto; width:850px;font-family: 'Montserrat', sans-serif;">
		<div style="background:#000; padding:20px; text-align:center;">
			<img class="brand_icon" src="{{asset('assets/images/green-logo.png')}}" alt="logo" style="width: 75px;" />
		</div>
		<div style="align:center; border:1px solid #ccc; padding-top:30px; padding-bottom:40px">
			<h2 style="margin-bottom: 35px;font-size: 25px;color:#000; font-size: 20px; text-align: center;">Contact Request</h2>
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
								<h4 style="color: #333333; margin-left: 23px;margin: 10px 0px 20px;"><b>Hello {{$parties->first_name}} {{$parties->last_name}}</b></h4h4>
								<p style="margin:0px; text-align:center; font-size:15px;line-height: 23px;text-align: left;">Thank you for your Solar System enquiry.</p>
								</br><br>
								<p style="margin:0px; text-align:center; font-size:15px;line-height: 23px;text-align: left;">We thank you for your interest in solar and look forward to chatting with you.  We are writing to set-up a time to discuss your solar requirements.  It's important to us that we help you make an informed decision on the right system for your usage.</p>
								</br><br>
								<p style="margin:0px; text-align:center; font-size:15px;line-height: 23px;text-align: left;">If you would like to schedule a preferable time for Keith Buxton (owner of Green Sky Australia) to call and discuss further please follow this link  <a target="_blank" href="https://calendly.com/keith-4/15min">https://calendly.com/keith-4/15min</a>. Alternatively please call our office anytime on 03 9770 8780.</p>
								</br><br>
								<p style="margin:0px; text-align:center; font-size:15px;line-height: 23px;text-align: left;">We are a family run business with nearly 10 years in the industry.  We use our own installers and use only quality products.  Some of these are; Q-CELL Panels, FRONIUS Inverters and ENPHASE.  We also have other products available which we can talk you through when we discuss your needs further.</p>
								</br><br>
								<p style="margin:0px; text-align:center; font-size:15px;line-height: 23px;text-align: left;   ">
								We pride ourselves on great customer service before and after your installation.  We do all the paperwork and connections up until the point of everything being sent through to your Electricity Retailer to convert your Grid to Solar for you. We are also there beyond installation, should any issues arise.  We manage all warranties ourselves so will be with you every step of the way on your solar journey.
								</p>
								</br><br>
								<p style="margin:0px; text-align:center; font-size:15px;line-height: 23px;text-align: left;">We look forward to hearing from you.</p>
								</br><br>
								<p style="margin:0px; text-align:center; font-size:15px;line-height: 23px;text-align: left;">Warm regards , </p>
								<p style="margin:0px; text-align:center; font-size:15px;line-height: 23px;text-align: left;"><b>The Team at Green Sky Australia</b></p>
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
