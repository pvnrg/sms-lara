
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quote</title>
</head>
<body style="font:'Arial';padding:0px;">
        
	<div class="page-1" style="padding:20px 0;">
            
    <table style="width: 750px;text-align:center;margin:0;">
        <tr>
            <td>
                <img src="{{ asset('/pdf-test-image/header-1.png') }}" alt="header">
            </td>
        </tr>
    </table><!-- end of table -->
    
    <table style="width: 750px;margin:0;padding:0;">




        <tr style="width: 750px;margin:0 ;">
            <td style="width:375px;margin:0;padding:10px 10px;">
                <table>
                    <tr>
                        <td><p style="color: #8cc53f;margin:50px 0 25px 0;padding: 0 0 10px 0;border-bottom: 8px solid #6d6e71;font: bold 52px 'Arial';width: 180px;display:block;"> Quote. </p></td>
                    </tr>
                    <tr>
                        <td><p style="padding: 0 0 10px 0;margin:10px 0 10px 0;font: 400 14px 'Arial';width: 180px;display:block;"> Dear {{ $customer->first_name }} {{ $customer->last_name }}</p></td>
                    </tr>
                </table>
            </td>        
                
            </td>
            <td style="width:375px;margin:0;padding:0;position: relative;display: block;">
                <table>
                    <tr>
                        <td style="font-weight:700;font: bold 14px 'Arial';">Quote number</td>
                        <td style="font-weight:700;font: bold 14px 'Arial';">{{ $offer->id }}</td>
                    </tr>
                    <tr>
                            <td style="font-weight:700;font: bold 14px 'Arial';">Issue date</td>
                        <td>{{ $offer->created_at->format('d-m-Y') }}</td>
                    </tr>
                    <tr>
                        <td style="font-weight:700;font: bold 14px 'Arial';">Offer expiry</td>
                        <td>14 Days from Issue date of this offer</td>
                    </tr>
                    <tr>
                        <td style="font-weight:700;font: bold 14px 'Arial';">Enquiries</td>
                        <td>1300 73 93 55</td>
                    </tr>
                    <tr>
                        <td>{{ $customer->sales->email }}</td>
                    </tr>
                </table>
            </td>
        </tr>
        
        <tr>
            <td style="width:750px;margin:0;padding:0;font: 400 14px 'Arial';line-height:1.4;padding:0 10px;" colspan="2">
                Thank you for the opportunity to quote on your renewable energy solution. This is a long-term investment
                and a project that will help not only your household, but also the movement towards a sustainable energy
                future. Producing your own clean energy is a major step to having an energy-independent home, a future
                which draws closer each day.
            </td>
        </tr>
        <tr>
            <td style="width:750px;margin:0;padding:10px 0 0 0;font: 400 14px 'Arial';line-height:1.4;padding:0 10px;" colspan="2">
                In this document, you’ll find all the details of the systems we have discussed and recommended for you. If
                you have any further queries, would like to refine or proceed with this quote, please don’t hesitate to
                contact us on <span style="font-weight: 700;"><b>1300 73 93 55</b></span> or <span style="font-weight: 700;"><b>{{ $customer->sales->email }}</b></span>
            </td>
        </tr>
        <tr>
            <td style="width:450px;margin:0;padding:10px 10px;font: 400 14px 'Arial';line-height:1.4;vertical-align:top;">
				<table><tr><td><span style="display:block;padding:10px 0 5px 10px;margin:0 0 5px 0;">Your local office: <b>GreenSky</b> </span></td></tr></table>	
				<table><tr><td><span style="display:block;padding:0 10px 5px 10px;margin:0 0 5px 0;">Unit 7, 88 Dynon Road  </span></td></tr></table>	
				<table><tr><td><span style="display:block;padding:0 10px 5px 10px;margin:0 0 5px 0;">West Melbourne VIC 3003</span></td></tr></table>	
            </td>
            <td style="width:300px;margin:0;padding:10px 0 0 180px;font: 400 14px 'Arial';line-height:1.4;">
                {{-- <img src="{{ asset('/pdf-test-image/map-1.png') }}" alt="map"> --}}
            </td>
		</tr>    
	</table><!-- end of table -->

	<table style="width: 750px;margin:0 ;padding:0;">
        <tr style="width: 750px;margin:0 ;">
            <td style="width:750px;margin:0;padding:10px 10px;font: bold 24px 'Arial';line-height:1.4;font-weight: 900;vertical-align:middle;" colspan="4">
				<h2 style="padding:0 20px;"><b>What happens next.</b></h2>
			</td>	
		</tr>	

		<tr style="width: 750px;margin:0 ;vertical-align:top;">
            <td style="width:187.5px;margin:0;padding:10px 10px;font: 400 14px 'Arial';line-height:1.4;">
				<table>
					<tr>
                        <td><img src="{{ asset('/pdf-test-image/consult.png') }}" alt="consult"></td>
                    </tr>
                    <tr style="padding:2px;background:#6d6e71;">
                        <td>  </td>
                    </tr>
                    <tr>
                        <td style="width:187.5px;text-align:center;"> 
                            Any questions about
                            this quote, talk to your
                            experienced consultant who
                            can discuss your tailored
                            sustainable energy solution.
                        </td>        
                    </tr>
				</table>
            </td><!-- td-1 -->
            
            <td style="width:187.5px;margin:0;padding:10px 10px;font: 400 14px 'Arial';line-height:1.4;">
                <table>
                    <tr>
                        <td><img src="{{ asset('/pdf-test-image/select.png') }}" alt="SELECT"></td>
                    </tr>
                    <tr style="padding:2px;background:#6d6e71;">
                        <td>  </td>
                    </tr>
                    <tr>
                        <td style="width:187.5px;text-align:center;"> 
                            Discuss, refine and confirm
                            the solution that suits you.
                            Sign and return the
                            acceptance page enclosed.
                        </td>        
                    </tr>
                </table>
            </td><!-- td-1 -->

            <td style="width:187.5px;margin:0;padding:10px 10px;font: 400 14px 'Arial';line-height:1.4;">
                <table>
                    <tr>
                        <td><img src="{{ asset('/pdf-test-image/relax.png') }}" alt="relax"></td>
                    </tr>
                    <tr style="padding:2px;background:#6d6e71;">
                        <td>  </td>
                    </tr>
                    <tr>
                        <td style="width:187.5px;text-align:center;"> 
                            We need to get some details
                            off you and lodge some
                            applications on your behalf.
                            If an issue arises, we’ll let
                            you know.
                        </td>        
                    </tr>
                </table>
            </td><!-- td-1 -->

            <td style="width:187.5px;margin:0;padding:20px 10px;font: 400 14px 'Arial';line-height:1.4;">
                <table>
                    <tr>
                        <td><img src="{{ asset('/pdf-test-image/install.png') }}" alt="install"></td>
                    </tr>
                    <tr style="padding:2px;background:#6d6e71;">
                        <td>  </td>
                    </tr>
                    <tr>
                        <td style="width:187.5px;text-align:center;"> 
                            Time to start saving your
                            pocket and the planet.
                            Customers in some states
                            will need to wait up to 6
                            weeks for a new meter.
                        </td>        
                    </tr>
                </table>
            </td><!-- td-1 -->

		</tr>
	</table>
	
	</div>

	<table style="width: 750px;text-align:center;margin:0 ;">
        <tr>
            <td>
                <!--<hr>-->
            </td>
        </tr>
    </table><!-- end of table -->
    <p style="page-break-after: always;">&nbsp;</p>

    <div class="page-2" style="padding:20px 0;">
        <table style="width: 750px;margin:0 ;padding:0;">
            <tr style="width: 750px;margin:0 ;">
                <td style="width:375px;margin:0;padding:10px 10px;vertical-align:top;">
                    <img src="{{ asset('/pdf-test-image/logo.png') }}" alt="relax">
                </td>
                <td style="width:355px;margin:0;padding:0;position: relative;display: block;">
                    <table>
                        <tr>
                            <td style="font-weight:700;font: bold 14px 'Arial';">Quote number</td>
                            <td style="font-weight:700;font: bold 14px 'Arial';">{{ $offer->id }}</td>
                        </tr>
                        <tr>
                                <td style="font-weight:700;font: bold 14px 'Arial';">Issue date</td>
                            <td>{{ $offer->created_at->format('d-m-Y') }}</td>
                        </tr>
                        <tr>
                            <td style="font-weight:700;font: bold 14px 'Arial';">Offer expiry</td>
                            <td>14 Days from Issue date of this offer</td>
                        </tr>
                        <tr>
                            <td style="font-weight:700;font: bold 14px 'Arial';">Enquiries</td>
                            <td>1300 73 93 55</td>
                        </tr>
                        <tr>
                            <td>{{ $customer->sales->email }}</td>
                        </tr>
                    </table>
                </td>
			</tr>
			<tr style="width: 750px;margin:0px ;">
                <td colspan="2">
                    GreenSky specialises in high quality solar power, hot water and storage solutions. Perfect for the people making
                    a 5-10 year plus investment and people who aren’t satisfied until they have done their research. We’re one of
                    the few companies that have demonstrated longevity, in an industry synonymous with high company turnover.
                    We’re regularly chosen for residential and commercial projects, and many manufacturers depend on GreenSky
                    for their service requirements. We have the experience and reputation to make your project a success.
                </td>
			</tr>
        </table>    

        <table style="width: 750px;margin:10px ;padding:0;">
            <tr style="width: 750px;margin:0 ;">
                <td style="width:250px;margin:0;padding:10px 10px;vertical-align:top;border-right:2px solid #000;">
                    <table style="padding:0 0 10px 0;">
                        <tr>
                            <td style="font: 900 30px 'Arial'!important;padding: 0;line-height: 1.6;margin: 0;color: #8cc53f;"><b>Our Company.</u></b></td>
                        </tr>
                        <tr>
                            <td><!--<hr style="width:50%;float:left;padding:3px;background-color:#6d6e71;">--></td>
                        </tr>
                        <tr>
                            <td style="font: 400 14px 'Arial';line-height:1.6;color:#f88a3f;margin:0 0 10px 0;">Who we are</td>
                        </tr>
                        <tr>
                            <td style="font: 400 14px 'Arial';line-height:1.4;">GreenSky is a premium supplier of
                                renewable energy products. We are a
                                highly experienced team, with over
                                100 staff members nationally
                            </td>
                        </tr>
                    </table>
                    <table style="padding:0 0 5px 0;">
                        <tr>
                            <td style="font: 400 14px 'Arial';line-height:1.4;color:#f88a3f;margin:0 0 10px 0;">What we’ve achieved</td>
                        </tr>
                        <tr>
                            <td style="font: 400 14px 'Arial';line-height:1.4;">GreenSky has been around for over 12
                                    years and has been doing solar PV and
                                    hot water since the first systems were
                                    installed in Australia. We’ve installed
                                    over 55,000 solar power and hot water
                                    systems in this time and been one of
                                    the only companies that have been
                                    around for every rebate, every boom
                                    and every fall. We’re very proud of this,
                                    as it’s proof of our commitment,
                                    reward for our customers and
                                    something very few organisations have
                                    achieved.
                            </td>
                        </tr>
                    </table>
                    <table style="padding:0 0 5px 0;">
                        <tr>
                            <td style="font: 400 14px 'Arial';line-height:1.4;color:#f88a3f;margin:0 0 10px 0;">Our promise </td>
                        </tr>
                        <tr>
                            <td style="font: 400 14px 'Arial';line-height:1.4;">Renewable energy is a long-term
                                    investment, and we truly understand
                                    this. We promise to provide the
                                    highest quality components, advice
                                    from the most experienced
                                    consultants and the best ongoing
                                    support in the industry, including a 5
                                    year workmanship warranty.
                            </td>
                        </tr>
                    </table>
                </td>
                
                <td style="width:500px;margin:0;padding:5px 5px;vertical-align:top;"> 
                    <table style="padding:0 0 5px 0;">
                        <tr>
                            <td style="font: 900 30px 'Arial'!important;padding: 0;line-height: 1.6;margin: 0;color: #8cc53f;"><b>Our Difference.</u></b></td>
                        </tr>
                        <tr>
                            <td><!--<hr style="width:50%;float:left;padding:3px;background-color:#6d6e71;">--></td>
                        </tr>
                        <tr>
                            <td style="font: 400 14px 'Arial';line-height:1.6;color:#f88a3f;margin:0 0 10px 0;">A quality provider</td>
                        </tr>
                        <tr>
                            <td style="font: 400 14px 'Arial';line-height:1.4;">GreenSky is a Quality ISO 9001 certified organisation which
                                    exclusively uses CEC accredited installers and designers. Every
                                    supplier we choose, every process we implement and every
                                    system we design is scrutinised by our quality professionals.
                            </td>
                        </tr>
                    </table>
                    <table style="padding:0 0 5px 0;">
                        <tr>
                            <td style="font: 400 14px 'Arial';line-height:1.4;color:#f88a3f;margin:0 0 10px 0;">The most experienced team</td>
                        </tr>
                        <tr>
                            <td style="font: 400 14px 'Arial';line-height:1.4;">GreenSky has installed over 55,000 renewable energy systems
                                    across Australia and we have consistently been in the Sunwiz top
                                    5 installers in Australia for the past 5 years. No company has done
                                    more home consultations or installed more systems with their
                                    own installers. When you deal with GreenSky, this becomes clear
                            </td>
                        </tr>
                    </table>
                    <table style="padding:0 0 5px 0;">
                        <tr>
                            <td style="font: 400 14px 'Arial';line-height:1.4;color:#f88a3f;margin:0 0 5px 0;">The world’s best products </td>
                        </tr>
                        <tr>
                            <td style="font: 400 14px 'Arial';line-height:1.4;">At GreenSky, we only use the best products from the largest
                                    reputable suppliers with a proven track record of service and
                                    reliability. When installing a solar power system, we look at every
                                    component that goes into your home for quality and safety, from
                                    panels and inverters to cables, racking, isolators and breaker
                                    boxes. Our hot water systems are no exception: considered
                                    among the best and most durable in the market, our tanks and
                                    collectors are fitted with high-end brass fittings, tempering valves
                                    and thermostats. You can have peace of mind knowing that all
                                    components are created and selected in accordance with our
                                    Quality ISO 9001 certification.
                            </td>
                        </tr>
                    </table>
                    <table style="padding:0 0 5px 0;">
                        <tr>
                            <td style="font: 400 14px 'Arial';line-height:1.4;color:#f88a3f;margin:0 0 10px 0;">Independent reviews </td>
                        </tr>
                        <tr>
                            <td style="font: 400 14px 'Arial';line-height:1.4;">No company will share a bad review with you. If you want to
                                    know how happy a company’s customers are, you can only
                                    use independent sources. Trustpilot is one of the
                                    largest independent review sites, and GreenSky has achieved an
                                    overall score of 8.6 out of 10 (at December 2017).
                            </td>
                        </tr>
                    </table>
                </td>
	        </tr>
		</table>            
		
		<table style="width: 750px;margin:5px ;padding:0;">
            <tr style="width: 750px;margin:0 ;">
                <td style="width:187px;margin:0;padding:5px 5px;vertical-align:top;">
					<table>
						<tr><td style="font: 400 14px 'Arial';line-height:1.4;padding:0 0 5px 0;">Regards,</td></tr>
					</table>
					<table>
						<tr><td style="font: 400 14px 'Arial';line-height:1.4;"> Domenic Mercuri</td></tr>
					</table>
					<table>
						<tr><td style="font: 400 14px 'Arial';line-height:1.4;">Chief Executive Officer</td></tr>
					</table>
                </td>
                <td style="width:187px;margin:0;padding:5px 5px;vertical-align:top;">
                    <img src="{{ asset('/pdf-test-image/sgs.png') }}" alt="sgs">
				</td>
				<td style="width:187px;margin:0;padding:5px 5px;vertical-align:top;">
					<table>
						<tr><td style="font: 400 14px 'Arial';line-height:1.4;">GreenSky PV Pty Ltd</td></tr>
					</table>
					<table>
						<tr><td style="font: 400 14px 'Arial';line-height:1.4;">ABN: 90 132 725 501</td></tr>
					</table>
                </td>
                <td style="width:187px;margin:0;padding:5px 5px;vertical-align:top;">
                    <table>
                        <tr><td style="font: 400 14px 'Arial';line-height:1.4;">GreenSky Pty Ltd</td></tr>
                    </table>
                    <table>
                        <tr><td style="font: 400 14px 'Arial';line-height:1.4;">ABN: 26 136 092 405</td></tr>
                    </table>
                    <table>
                        <tr><td style="font: 400 14px 'Arial';line-height:1.4;">QBCC: 121 46 36</td></tr>
                    </table>
                </td>
			</tr>
		</table>

	</div>
	
	<table style="width: 750px;text-align:center;margin:0 ;">
        <tr>
            <td>
                <!--<hr>-->
            </td>
        </tr>
    </table><!-- end of table -->
   
    
    <div class="page-2" style="padding:20px 0;">
        <table style="width: 750px;margin:0 ;padding:0;">
            <tr style="width: 750px;margin:0 ;">
                <td style="width:375px;margin:0;padding:10px 10px;vertical-align:top;">
                    <img src="{{ asset('/pdf-test-image/logo.png') }}" alt="relax">
                </td>
                <td style="width:355px;margin:0;padding:0;position: relative;display: block;">
                    <table>
                        <tr>
                            <td style="font-weight:700;font: bold 14px 'Arial';">Quote number</td>
                            <td style="font-weight:700;font: bold 14px 'Arial';">{{ $offer->id }}</td>
                        </tr>
                        <tr>
                                <td style="font-weight:700;font: bold 14px 'Arial';">Issue date</td>
                            <td>{{ $offer->created_at->format('d-m-Y') }}</td>
                        </tr>
                        <tr>
                            <td style="font-weight:700;font: bold 14px 'Arial';">Offer expiry</td>
                            <td>14 Days from Issue date of this offer</td>
                        </tr>
                        <tr>
                            <td style="font-weight:700;font: bold 14px 'Arial';">Enquiries</td>
                            <td>1300 73 93 55</td>
                        </tr>
                        <tr>
                            <td>{{ $customer->sales->email }}</td>
                        </tr>
                    </table>
                </td>
			</tr>
        </table>  
        
        @foreach($offer->offer_detail as $indexKey => $offers )
        <?php $package_obj = json_decode($offers->package_obj); ?>
        <?php $product_obj = json_decode($offers->product_obj); ?> 
        
        <div style="width: 750px;margin:5px ;padding:0;outline:2px solid #8cc53f;">
            <table style="width: 750px;margin:5px ;padding:0;">
                <tr style="width: 750px;margin:0 ;background-color:#8cc53f;">
                    <td style="width:20px;margin:0;padding:5px 5px;vertical-align:top;background-color:#5c5c5c;">
                        <span style="font-weight:700;font: bold 16px 'Arial';color:#fff;">{{ $indexKey + 1}}</span>
                    </td>
                    <td style="width:630px;margin:0;padding:5px 5px;vertical-align:top;">
                        <span style="font-weight:700;font: bold 16px 'Arial';color:#fff;"> {{ $package_obj->title }}</span>
                    </td>
                    <td style="width:100px;margin:0;padding:5px 5px;vertical-align:top;">
                        <span style="font-weight:700;font: bold 16px 'Arial';color:#fff;">{{ $package_obj->kw / 1000 }} kWp </span>
                    </td>
                </tr>
            </table>
            
                
            <table style="width: 750px;margin:5px ;padding:0;">
                @foreach($product_obj as $product)
                <tr style="width: 750px;margin:0 ;background-color:#FFF;">
                       
                    <td style="width: 250px;margin:0 ;">
                        <table>
                            <tr><td style="font: bold 16px 'Arial';line-height:1.4;padding:0 0 5px 0;color: #8cc53f;">{{ $product->name }}</td></tr>
                        </table>
                        <table>
                            <tr><td style="font: bold 14px 'Arial';line-height:1.4;padding:0 0 5px 0;"></td></tr>
                        </table>
                        <table>
                            <tr>
                                <td style="width: 80px;margin:0 ;vertical-align:top;">
                                    <img src="{{ asset('/pdf-test-image/Panels.png') }}" alt="panel" >
                                </td>
                                <td style="width: 170px;margin:0 ;font: normal 14px 'Arial';line-height:1.4;">
                                    <table>
                                        <tr>
                                            <td style="font: normal 14px 'Arial';line-height:1.4;padding:0 0 5px 0;">{{ $product->shortdesc }}
                                            </td>
                                        </tr>
                                    </table>
                                    <table>
                                        <tr>
                                            <td style="font: bold 14px 'Arial';line-height:1.4;padding:0 0 5px 0;">
                                                Warranty
                                            </td>
                                        </tr>
                                    </table>
                                    <table>
                                        <tr>
                                            <td style="font: normal 14px 'Arial';line-height:1.4;padding:0 0 5px 0;">
                                                10yr Product + 25yr linear
                                                Performance
                                            </td>
                                        </tr>
                                    </table>

                                </td>
                            </tr>
                        </table>
                    </td>

                   @if($product->image)
                    
                   @if(File::exists('/product/'.$product->image))
                    <td style="width: 250px;margin:0 ;vertical-align:top;">
                        <img src="{{ asset('/product/'.$product->image) }}" alt="{{ $product->name }}"/>
                    </td>
                    @endif
                   @endif
                </tr>
                @endforeach
            </table>
            
        </div>
        @endforeach

        <p style="page-break-after: always;">&nbsp;</p>

        <!-- table-2 -->
            <div class="page-3" style="padding:20px 0;">
                <table style="width: 750px;margin:0 ;padding:0;">
                    <tr style="width: 750px;margin:0 ;">
                        <td style="width:375px;margin:0;padding:10px 10px;vertical-align:top;">
                            <img src="{{ asset('/pdf-test-image/logo.png') }}" alt="relax">
                        </td>
                        <td style="width:355px;margin:0;padding:0;position: relative;display: block;">
                            <table>
                                <tr>
                                    <td style="font-weight:700;font: bold 14px 'Arial';">Quote number</td>
                                    <td style="font-weight:700;font: bold 14px 'Arial';">{{ $offer->id }}</td>
                                </tr>
                                <tr>
                                        <td style="font-weight:700;font: bold 14px 'Arial';">Issue date</td>
                                    <td>{{ $offer->created_at->format('d-m-Y') }}</td>
                                </tr>
                                <tr>
                                    <td style="font-weight:700;font: bold 14px 'Arial';">Offer expiry</td>
                                    <td>14 Days from Issue date of this offer</td>
                                </tr>
                                <tr>
                                    <td style="font-weight:700;font: bold 14px 'Arial';">Enquiries</td>
                                    <td>1300 73 93 55</td>
                                </tr>
                                <tr>
                                    <td>{{ $customer->sales->email }}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>  

                <table style="width: 750px;margin:5px ;padding:0;">
                    <tr style="width: 750px;margin:0 ;background-color:#FFF;">
                        <td style="width: 250px;margin:0 ;vertical-align:top;">
                            <table>
                                <tr><td style="font: 400 14px 'Arial';line-height: 1.4;color: #f88a3f;margin: 0 0 10px 0;">Consultant Details</td></tr>
                            </table>
                            <table>
                                <tr><td style="font: bold 14px 'Arial';line-height:1.4;padding:0 0 5px 0;">{{ $customer->sales->name }}</td></tr>
                            </table>
                            <table>
                                <tr><td style="font: normal 14px 'Arial';line-height:1.4;padding:0 0 5px 0;">no mobile</td></tr>
                                <tr><td style="font: normal 14px 'Arial';line-height:1.4;padding:0 0 5px 0;">{{ $customer->sales->email }} </td></tr>
                            </table>
                        </td>

                        <td style="width: 250px;margin:0 ;vertical-align:top;">
                            <table>
                                <tr><td style="font: normal 14px 'Arial';line-height: 1.4;color: #f88a3f;margin: 0 0 10px 0;">Customer Details</td></tr>
                            </table>
                            <table>
                                <tr><td style="font: normal 14px 'Arial';line-height:1.4;padding:0 0 5px 0;">{{ $customer->first_name }} {{ $customer->last_name }}</td></tr>
                            </table>
                            <table>
                                <tr><td style="font: normal 14px 'Arial';line-height:1.4;padding:0 0 5px 0;"><b>Mobile</b> {{ $customer->phone_mobile }}</td></tr>
                            </table>
                            <table>
                                <tr><td style="font: normal 14px 'Arial';line-height:1.4;padding:0 0 5px 0;"><b>E-Mail</b></td></tr>
                            </table>
                            <table>
                                <tr><td style="font: normal 14px 'Arial';line-height:1.4;padding:0 0 5px 0;">{{ $customer->email }}</td></tr>
                                <tr><td style="font: normal 14px 'Arial';line-height:1.4;padding:0 0 5px 0;">{{ $customer->street_name }}</td></tr>
                                <tr><td style="font: normal 14px 'Arial';line-height:1.4;padding:0 0 5px 0;">{{ $customer->suburb }} {{ $customer->state }} {{ $customer->post_code }}</td></tr>
                            </table>
                        </td>

                        <td style="width: 250px;margin:0 ;vertical-align:top;">
                            <table>
                                <tr><td style="font: normal 14px 'Arial';line-height: 1.4;color: #f88a3f;margin: 0 0 10px 0;">Install Address</td></tr>
                            </table>
                            <table>
                                <tr><td style="font: normal 14px 'Arial';line-height:1.4;padding:0 0 5px 0;">{{ $customer->street_name }}</td></tr>
                                <tr><td style="font: normal 14px 'Arial';line-height:1.4;padding:0 0 5px 0;">{{ $customer->suburb }} {{ $customer->state }} {{ $customer->post_code }}</td></tr>
                            </table>

                            <table>
                                <tr><td style="font: bold 14px 'Arial';line-height:1.4;padding:0 0 5px 0;"><b>Roof Type</b></td></tr>
                                <tr><td style="font: bold 14px 'Arial';line-height:1.4;padding:0 0 5px 0;"><b>Power Phases</b></td></tr>
                            </table>
                            
                        </td>
                    </tr>
                </table>

                <table style="width: 750px;margin:5px ;padding:0;">
                    <tr style="width: 750px;margin:0 ;background-color:#FFF;">
                        <td style="font: 400 14px 'Arial';line-height: 1.4;color: #f88a3f;margin: 0 0 10px 0;">Special Comments</td>
                    </tr>
                </table>        
            
                <table style="width: 750px;margin:10px ;padding:0 0 0px 0px;border:2px solid #939598;padding:10px;">
                    <tr style="width: 750px;margin:0 ;background-color:#FFF;">
                        <td style="font: 400 14px 'Arial';line-height: 1.4;">Price and array arrangement subject to site inspection </td>
                    </tr>
                    <tr style="width: 750px;margin:0px ;background-color:#FFF;">
                        <td style="font: 400 14px 'Arial';line-height: 1.4;padding:10px 0 0 0;">Fronius Primo (5+5 year warranty, Wifi Monitoring , Made in Austria #1 inverter) </td>
                    </tr>
                    <tr style="width: 750px;margin:0px ;background-color:#FFF;">
                        <td style="font: 400 14px 'Arial';line-height: 1.4;">
                            All Fronius inverters installed prior to 30 June 2018 are eligible for a warranty extension for an additional 5 years
                            parts, not labour. See Fronius’ website for more details. Customer is responsible for registering their Fronius inverter
                            online and activating the extension with Fronius directly.
                        </td>
                    </tr>
                    <tr style="width: 750px;margin:0 ;background-color:#FFF;">
                        <td style="font: 400 14px 'Arial';line-height: 1.4;padding:10px 0 0 0;">Quality IMO DC Isolators / Clenergy Railings / CEC Accredited installation </td>
                    </tr>
                    <tr style="width: 750px;margin:0 ;background-color:#FFF;">
                        <td style="font: 400 14px 'Arial';line-height: 1.4;padding:00px 0 0 0;">Fully installed excluding meters </td>
                    </tr>
                    <tr style="width: 750px;margin:0 ;background-color:#FFF;">
                        <td style="font: 400 14px 'Arial';line-height: 1.4;padding:00px 0 0 0;">Balance paid in full on the day of installation. </td>
                    </tr>
                    <tr style="width: 750px;margin:0 ;background-color:#FFF;">
                        <td style="font: 400 14px 'Arial';line-height: 1.4;padding:00px 0 0 0;">Monitoring is Enabled on inverter, customer to connect to their own Wifi network. </td>
                    </tr>
                    <tr style="width: 750px;margin:0 ;background-color:#FFF;">
                        <td style="font: 400 14px 'Arial';line-height: 1.4;padding:10px 0 0 0;">Choosing good panels and a quality inverter is a great first step, but it’s far from a guarantee of a good solar system.
                                When you choose GreenSky you are choosing a solar company that is ISO 9001 quality certified for residential
                                installations. Read more here: 
                                http://greenskyaustralia.com.au
                        </td>
                    </tr>

                </table>        

                <table style="width: 750px;margin:5px ;padding:0;">
                    <tr style="width: 750px;margin:0 ;background-color:#FFF;">
                        <td style="width: 280px;font: 900 30px 'Arial'!important;padding: 0;line-height: 1.6;margin: 0;color: #8cc53f;">Package Selection</td>
                        <td style="width: 370px;font: 400 14px 'Arial';line-height: 1.4;color: #f88a3f;margin: 0 0 0px 0;"><span style="padding:5px 0px;">(please tick your selection)</span></td>
                    </tr>
                </table>   
            </div><!-- page-3 -->


            <div style="width: 750px;margin:5px ;padding:0;">
                    @foreach($offer->offer_detail as  $indexKey=>$offers )
                    <?php $package_obj = json_decode($offers->package_obj); ?>
                    <?php $product_obj = json_decode($offers->product_obj); ?> 
            <table style="width: 700px;margin:0px ;padding:0;">
                <tr>


                    <td style="width: 350px;margin:0;padding:0px;border:2px solid #8cc53f;">
                        <table style="width: 350px;margin:0px;padding:0;">
                            <tbody>
                                <tr style="width: 350px;margin:0;background-color:#8cc53f;">
                                    <td style="width:20px;margin:0;padding:5px 5px;vertical-align:top;background-color:#5c5c5c;">
                                        <span style="font-weight:700;font: bold 16px 'Arial';color:#fff;">{{ $indexKey + 1}}</span>
                                    </td>
                                    <td style="width:310px;margin:0;padding:5px 5px;vertical-align:top;">
                                        <span style="font-weight:700;font: bold 16px 'Arial';color:#fff;">{{ $package_obj->kw / 1000 }} kWp</span>
                                    </td>
                                    <td style="width:20px;margin:0 ;padding:5px 5px;text-align:center;">
                                        <span style="font-weight:700;font: bold 16px 'Arial';color:#fff;"><input type="checkbox"></span>
                                    </td>
                                </tr>
                        </tbody></table>
            
                        <table style="width: 350px;margin:0px;padding:0;">
                            <tbody><tr style="width: 350px;margin:0 ;background-color:#FFF;">
                                <td style="width: 350px;margin:0 ;vertical-align:top;">
                                        <table><tbody>
                                                @foreach($product_obj as $product)
                                            <tr><td style="font: normal 14px 'Arial';line-height:1.4;padding:0 0 5px 0;">
                                                {{ $product->name }}
                                            </td></tr>
                                            @endforeach
                                        </tbody></table>
                                </td>
                            </tr>
                            
                        </tbody></table>
            
                        <table style="width: 350px;margin:0px;padding:5px 0;background-color:#8cc53f;">
                            <tbody><tr style="width: 350px;margin:0 ;padding: 0;">
                                <td style="width: 350px;margin:0 ;padding: 0;">
                                    <table>
                                        <tbody><tr>
                                            <td style="width: 350px;margin:0 ;font: normal 14px 'Arial';line-height:1.4;">
                                                <table><tbody>
                                                    <tr>
                                                        <td style="width: 250px;font: bold 14px 'Arial';line-height:1.4;padding:0 0 5px 0;">
                                                            Full Purchase Price <small>(inc. GST)</small>
                                                        </td>
                                                        <td style="width: 100px;font: bold 14px 'Arial';line-height:1.4;padding:0 0 5px 0;">
                                                            $ {{ $package_obj->price }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 250px;font: bold 14px 'Arial';line-height:1.4;padding:0 0 5px 0;">
                                                            Less STCs <small>(GST N/A)</small>
                                                        </td>
                                                        <td style="width: 100px;font: bold 14px 'Arial';line-height:1.4;padding:0 0 5px 0;">
                                                            -${{ $offers->package_discount_value }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 250px;font: bold 14px 'Arial';line-height:1.4;padding:0 0 5px 0;">
                                                            Discounted Purchase Price <small>(inc. GST)</small>
                                                        </td>
                                                        <td style="width: 100px;font: bold 14px 'Arial';line-height:1.4;padding:0 0 5px 0;">
                                                            ${{ $offers->package_net_value }}
                                                        </td>
                                                    </tr>


                                                </tbody></table>
            
                                            </td>
                                        </tr>
                                    </tbody></table>
                                </td>
                            </tr>
                        </tbody></table>

                    </td>
                    
                    
                </tr>
            </table>
            @endforeach
            <!-- end of packiage -->

	</div>
    
</body>
</html> 	
