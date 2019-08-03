<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proposal Page</title>
	<style>
	
	</style>
</head>
<body>
    <table style="background:#d9d9d9;width:810px;padding:0px 25px;font-family: Arial, Helvetica, sans-serif;">
        <tr>
           <td>
                <table style="padding:30px 0 30px 0;border-bottom:5px solid #0000cc;font-family: Arial, Helvetica, sans-serif;">
                    <tr>
                        <td style="width:250px;margin:0;vertical-align:middle;"><img class="logo" src=" {{ asset('assets/images/greensky_logo.png') }}" style="width:120px;"></td> 
                        <td style="width:250px;margin:0;padding:0 0 0 20px;vertical-align:top;">
                            <table>
                                <tr>
                                    <td style="font-size:12px;padding:0 0 25px 0;font-family: Arial, Helvetica, sans-serif;">Address</td>
								</tr>
								
                                <tr>
                                    <td style="font-size:10px;padding:0 0 5px 0;font-family: Arial, Helvetica, sans-serif;">{!! $company_details->Address !!}</td>
                                </tr>    
                                {{-- <tr>
                                    <td style="font-size:10px;padding:0 0 0px 0;font-family: Arial, Helvetica, sans-serif;">Carrum Downs, Vic, 3201</td>
                                </tr> --}}
                            </table>
                        </td> 
                        <td style="width:250px;margin:0;">
                            <table>
                                <tr>
                                    <td style="font-size:12px;padding:0 0 25px 0;vertical-align:top;font-family: Arial, Helvetica, sans-serif;">Contact</td>
                                </tr>
                                <tr>
                                    <td style="font-size:10px;padding:0 0 5px 0;width:80px;font-family: Arial, Helvetica, sans-serif;">Phone:</td>
                                    <td style="font-size:10px;padding:0 0 5px 0;width:150px;font-family: Arial, Helvetica, sans-serif;">{{ $company_details->Phone }}</td>
                                </tr>    
                                <tr>
                                    <td style="font-size:10px;padding:0 0 5px 0;width:80px;font-family: Arial, Helvetica, sans-serif;">E-Mail:</td>
                                    <td style="font-size:10px;padding:0 0 5px 0;width:150px;font-family: Arial, Helvetica, sans-serif;">{{ $company_details->Email }}</td>
                                </tr>
                                <tr>
                                    <td style="font-size:10px;padding:0 0 5px 0;width:80px;font-family: Arial, Helvetica, sans-serif;">Web:</td>
                                    <td style="font-size:10px;padding:0 0 5px 0;width:150px;font-family: Arial, Helvetica, sans-serif;">www.greenskyaustralia.com.au</td>
                                </tr>
                            </table>
                        </td> 
                    </tr>
                </table><!-- end top page - 1  -->
                
                <table style="padding:250px 0 320px 0;font-weight:900;">
                    <tr>
                        <td style="width:750px;margin:0;padding:0;vertical-align:middle;font-size:72px;color:#454547;text-align:left;font-weight:bold !important;">
                            <p style="font-weight:900;font-family: Arial, Helvetica, sans-serif;"><b>Proposal</b></p>
                        </td> 
                    </tr>
                    <tr>
                        <td style="width:750px;margin:0;padding:0 0 0 5px;vertical-align:middle;font-size:22px;color:#454547;text-align:left;font-weight:bold !important;">
                            <p style="font-weight:700;font-family: Arial, Helvetica, sans-serif;"><b>Make your dream come true</b></p>
                        </td> 
                    </tr>
                </table><!-- middle content - 2 -->

                <table style="padding:20px 0 40px 0;margin:60px 0 42px 0;background:#8cc540;">
                    <tr>
                        <td style="width:600px;margin:0;padding:0 0 0 20px;">
                            <table>
                                <tr>
                                    <td style="font-size:10px;padding:0 0 5px 0;font-family: Arial, Helvetica, sans-serif;">Prepared for:</td>
                                </tr>    
                                <tr>
                                    <td style="font-size:12px;padding:0 0 5px 0;font-family: Arial, Helvetica, sans-serif;">{{ $customer->first_name }} {{ $customer->last_name }}</td>
                                </tr>
                                <tr>
                                    <td style="font-size:10px;padding:0 0 5px 0;font-family: Arial, Helvetica, sans-serif;">Address: {{ $customer->unit }} {{ $customer->street_number }} {{ $customer->street_name }} {{ $customer->post_code }} {{ $customer->suburb }} {{ $customer->state }} </td>
                                </tr>    
                                <tr>
                                    <td style="font-size:10px;padding:0 0 5px 0;font-family: Arial, Helvetica, sans-serif;">Tel: {{ $customer->phone_mobile }}</td>
                                </tr>
                                <tr>
                                    <td style="font-size:10px;padding:0 0 5px 0;font-family: Arial, Helvetica, sans-serif;">Fax:</td>
                                </tr>
                                <tr>
                                    <td style="font-size:10px;padding:0 0 5px 0;font-family: Arial, Helvetica, sans-serif;">E-mail: {{ $customer->email }}</td>
                                </tr>
                                
                            </table>
                        </td> 
                        <td style="width:150px;margin:0;">
                            <table>
                                <tr>
                                    <td style="font-size:10px;padding:0 0 5px 0;font-family: Arial, Helvetica, sans-serif;">Proposal Issued:</td>
                                </tr>
                                <tr>
                                    <td style="font-size:10px;padding:0 0 5px 0;font-family: Arial, Helvetica, sans-serif;">{{ $date }}</td>
                                </tr>
                                <tr>
                                    <td style="font-size:10px;padding:0 0 5px 0;font-family: Arial, Helvetica, sans-serif;">Proposal Validation:</td>
                                </tr>
                                <tr>
                                    <td style="font-size:10px;padding:0 0 5px 0;"></td>
                                </tr>
                            </table>
                        </td> 
                    </tr>
                </table><!-- end top page - 1  -->
            <td>
        </tr>
    </table><!-- End of page - 1 -->
   
    <!--<p style="page-break-after: always;">&nbsp;</p>-->
   
    <table style="background:#fff;width:850px;padding:30px 20px;page-break-after: always;">
        <tr>
           <td>
                <table style="padding:100px 0 40px 0;">
                    <tr>
                        <td style="width:750px;margin:0;">
                            <table>
                                <tr>
                                    <td style="font-size:40px;padding:0 0 10px 30px;color:#0000cc;font-weight:700;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;"><b>STATEMENT <br> FROM OUR DIRECTOR</b></td>
                                </tr>
                            </table>
                        </td> 
                    </tr>
                </table><!-- end top page - 2  -->
                
                <table style="padding:0 0 20px 0;">
                    <tr>
                        <td style="width:280px;margin:0;padding:0 20px 0 20px;vertical-align:top;">
                            <table>
                                <tr>
                                    <td style="font-size:16px;padding:0 0 25px 10px;color:#8cc540;line-height:30px;text-align:left;font-family: Arial, Helvetica, sans-serif;">Thank you for your interest in our Solar Power systems. Creating your own electricity from a renewable source is not only good for our environment, it is also a great investment and like any investment it should be considered carefully before you commit your hard-earned dollars.</td>
                                </tr>
                                
                            </table>
                        </td> 
                        <td style="width:450px;margin:0;vertical-align:bottom;"><img class="logo" src="{{ asset('assets/images/img-2222.png') }}" style="width:450px;"></td> 
                        
                    </tr>
                </table><!-- end top page - 1  -->            

                <table style="padding:0 0 20px 0;font-family: Arial, Helvetica, sans-serif;">
                    <tr>
                        <td style="width:250px;margin:0;padding:0 0 0 20px;vertical-align:top;">
                            <table>
                                <tr>
                                    <td style="font-size:12px;padding:0 0 25px 10px;line-height:20px;text-align:justify;font-family: Arial, Helvetica, sans-serif;">Green Sky Australia is a well-established family owned and operated business. At Green Sky Australia we pride ourselves on the provision of quality systems and services to you, our valued customer. Our Installation teams are our respected employees, highly-qualified and committed to providing quality service.</td>
                                </tr>
                                <tr>
                                    <td style="font-size:12px;padding:0 0 25px 10px;line-height:20px;text-align:justify;font-family: Arial, Helvetica, sans-serif;">Green Sky Australia are a trusted trade partner of Q CELLS Australia, as we prefer to install only the best products. We are now seeing some of the cheaper products installed as little as 5 years ago, start to fail. We recommend choosing high-quality products to protect your solar investment.</td>
                                </tr>
                            </table>
                        </td> 
                        <td style="width:250px;margin:0;padding:0 0 0 20px;vertical-align:top;">
                            <table>
                                <tr>
                                    <td style="font-size:12px;padding:0 0 25px 10px;line-height:20px;text-align:justify;font-family: Arial, Helvetica, sans-serif;">Solar energy is clean, renewable and free. In Australia we live in the perfect climate for solar power, lots of sun and not much rain. The conversion from sunlight to power is direct and effective, resulting in much-reduced power bills.</td>
                                </tr>
                                <tr>
                                    <td style="font-size:12px;padding:0 0 25px 10px;line-height:20px;text-align:justify;font-family: Arial, Helvetica, sans-serif;">Renewable energy is a sustainable resource which means that we can avoid the depletion of natural resources for future generations. Not only this but the energy is clean as we do not produce carbon dioxide, there is no water consumption, thermal pollution, waste, noise or adverse land-use impacts.</td>
                                </tr>
                            </table>
                        </td> 
                        <td style="width:250px;margin:0;padding:0 0 0 20px;vertical-align:top;">
                            <table>
                                <tr>
                                    <td style="font-size:12px;padding:0 0 25px 10px;line-height:20px;text-align:justify;font-family: Arial, Helvetica, sans-serif;">Installing a 1kW grid-connected system is a great step toward helping our environment and is the equivalent of planting approximately 93 trees or reducing your greenhouse gas emissions by approximately 1.86 tonnes each year.</td>
                                </tr>
                                <tr>
                                    <td style="font-size:12px;padding:0 0 25px 10px;line-height:20px;text-align:justify;font-family: Arial, Helvetica, sans-serif;">The solar industry now has many case studies in place to prove it is an excellent investment and great for our environment. It’s no longer a matter of having to prove its value, but more a matter of choosing the right company for your needs. Take the stress out of buying Solar power and speak with a company that you can trust.
									<br><br>
									Kind Regards<br>
									Keith Buxton</td>
                                </tr>

                            </table>
                        </td> 
                    </tr>
                </table>
		    <td>
        </tr>
    </table><!-- End of page - 2 -->
	
	<table style="background:#fff;width:850px;padding:30px 20px;">
		<tr>
		   <td>
				<table style="padding:0px 0 0px 0;border-bottom:5px solid #000000;">
					<tr style="padding:10px 0 20px 0;">
						<td style="width:800px;padding:10px 0 10px 0;">
							<img class="logo" src=" {{ asset('assets/images/greensky_logo.png') }}" style="width:100px;">
						</td>
						<td style="width:40px;padding:10px 10px 10px 0px;">
						3
						</td>
					</tr>	
					
				</table><!-- end top page - 2  -->
				
				<table style="padding:0px 0 0px 0;">
					<tr style="padding:10px 0 20px 0;">
						<td style="width:800px;padding:30px 0 30px 0;">
							<table>
								<tr>
									<td style="font-size:40px;padding:0 0 10px 30px;color:#0000cc;font-weight:700;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;"><b>MEET <br> OUR TEAM</b></td>
								</tr>
							</table>
						</td> 
					</tr>
				</table>
				
				<table style="padding:0 0 50px 0;">
					<tr>
						<td style="width:250px;margin:0;padding:0 0 0 20px;vertical-align:top;">
							<table>
								<tr>
									<td style="font-size:22px;padding:0 0 25px 10px;line-height:30px;text-align:justify;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;">
										OUR HIGH<BR>
										QUALITY<br>
										PROFESSIONALS<br>
										ARE AVAILABLE<br>
										FOR YOUR NEEDS
									</td>
								</tr>
							</table>
						</td> 
						<td style="width:250px;margin:0;padding:0 0 0 20px;vertical-align:top;">
							<table>
								<tr>
									<td style="font-size:12px;padding:0 0 25px 10px;line-height:20px;text-align:justify;font-family: Arial, Helvetica, sans-serif;">The team at Green Sky bring together
									many years’ experience from the
									Solar Power, Air Conditioning and
									Electrical industries, to ensure that
									we deliver the results you need.
									Whether it’s a Solar System, Air
									Conditioning, or electrical work we’ve
									got proven experience. Unlike some
									competitors, our focus is not on
									getting the most money out of you, it
									is on delivering the result that you
									require. </td>
								</tr>
							</table>
						</td> 
						<td style="width:250px;margin:0;padding:0 0 0 20px;vertical-align:top;">
							<table>
								<tr>
									<td style="font-size:12px;padding:0 0 25px 10px;line-height:20px;text-align:justify;font-family: Arial, Helvetica, sans-serif;">
										These days we all spend a lot of our
										lives working, so we figure that
										you’ve got to enjoy what you do, and
										always have fun. Right?! The Green
										Sky team love to help people.<br>
										We enjoy getting out of the office
										and really assisting our clients with
										their needs. Don’t be afraid to send
										us an email or pick up the phone and
										speak with one of our friendly team
										members
									</td>
									
								</tr>
								
							</table>
						</td> 
					</tr>
				</table><!-- end page - 3  -->            
			<td>
		</tr>
		<tr>
		   <td>
				<table style="padding:30px 0 0px 0;">
					<tr>
						<td style="width:750px;padding:30px 0 30px 0;border-top:5px solid #0000cc;">
							<table>
								<tr>
									<td style="font-size:40px;padding:0 0 10px 30px;color:#0000cc;font-weight:700;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;"><b>YOUR <br> PERSONAL CONTACT</b></td>
								</tr>
							</table>
						</td> 
					</tr>
				</table><!-- end top page - 2  -->
				
			
				<table style="padding:0 0 20px 0;">
					<tr>
						<td style="width:250px;margin:0;padding:0 0 0 20px;vertical-align:top;">
							<table>
								<tr>
									<td style="font-size:22px;padding:10px 0 25px 10px;line-height:30px;text-align:justify;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;">
										<img src="{{ asset('assets/images/pimg-2.png') }}">
									</td>
								</tr>
							</table>
						</td> 
						<td style="width:250px;margin:0;padding:10px 0 0 20px;vertical-align:top;width:450px;">
							<table>
								<tr>
									<td style="font-size:12px;padding:0 0 25px 10px;line-height:20px;text-align:justify;font-family: Arial, Helvetica, sans-serif;width: 400px;">
										{{-- <b>{{ $customer->first_name }} {{ $customer->last_name }}</b> --}}
										<br>
										For any questionss regarding this offer, you can contact your personal sales reperesentative who knows every detail about your proposed sytem.
										<br><br>
										<b>Contact</b><br>
										<p>Name : <b>{{ $customer->sales->name }}</b> <br>
										<p>Phone : <b>{{ $customer->sales->phone }}</b> <br>
										E-Mail: <b>{{ $customer->sales->email }}</b></p>
										<br><br>
									</td>
								</tr>
							</table>
						</td> 
						
					</tr>
				</table>
			<td>
		</tr>
	</table><!-- End of page - 3 -->
	<p style="page-break-after: always;">&nbsp;</p>
	
	<table style="background:#d8d8d8;width:850px;padding:100px 50px 184px 50px;">
		<tr>
		   <td>
				
				<table style="padding:0px 0 0px 0;margin-left:0px;">
					<tr style="padding:10px 0 20px 0;">
						<td style="width:850px;padding:30px 0 30px 0;">
							<table>
								<tr>
									<td style="font-size:40px;padding:0 0 10px 0px;color:#58585b;font-weight:700;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;"><b>SOLAR PANEL BRANDS <br> WE OFFER</b></td>
								</tr>
							</table>
						</td> 
					</tr>
				</table>
				
				<table style="padding:0px;border:1px solid #000;border-spacing:0px!important;margin:0 0 20px 0;">
					<tr>
						<td style="width:250px;margin:0 50px 0 0;padding:0 0 0 0px;vertical-align:top;background-color:#8cc540;">
							<table>
								<tr>
									<td style="font-size:22px;padding:0px 0px;line-height:30px;text-align:justify;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;background-color:#8cc540;">
										<img src="{{ asset('assets/images/pimg-3.png') }}" style="width:200px;padding:40px 0px 45px 20px;">
									</td>
								</tr>
							</table>
						</td> 
						<td style="width:550px;margin:0;padding:10px 0px 10px 0px;vertical-align:top;">
							<table>
								<tr>
									<td style="font-size:12px;padding:10px;line-height:20px;text-align:justify;font-family: Arial, Helvetica, sans-serif;">
									Highest output under high temps and low light.  The Q.power-G4/Q-peak is a high performance module. It has consistently outperformed other manufacturers’ modules) at the Desert Knowledge Australia Solar Centre (DKASC) situated at Alice Springs.
									<br><br>
									<b>Q CELLS ranked 5th in the world in 2015 for modules shipped.</b> Q-cell delivers superior performance in varying real-life conditions including high heat and low light. Q CELLS products undergo the worlds’ most rigorous quality testing through the independent, German VDE testing authority: www.vde.com. Q CELLS have proven themselves under extreme Australian conditions. Follow this link to see for yourself just how well Q CELLS modules perform against the competition, in a harsh Australian Environment at the Desert Knowledge Solar Centre: www.dkasolarcentre.com.au
									</td>
								</tr>
							</table>
						</td> 
						
					</tr>
				</table><!-- end page - 3  -->   
		
			<td>
		</tr>
		
		<tr>
		   <td>
				<table style="padding:0px;border:1px solid #000;border-spacing:0px!important;margin:0 0 20px 0;">
					<tr>
						<td style="width:250px;margin:0 50px 0 0;padding:0 0 0 0px;vertical-align:top;background-color:#5a5a5a;">
							<table>
								<tr>
									<td style="font-size:22px;padding:0px 0px;line-height:30px;text-align:justify;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;background-color:#5a5a5a;">
										<img src="{{ asset('assets/images/pimg-4.png') }}" style="width:200px;padding:40px 0px 45px 20px;">
									</td>
								</tr>
							</table>
						</td> 
						<td style="width:550px;margin:0;padding:10px 0px 10px 0px;vertical-align:top;">
							<table>
								<tr>
									<td style="font-size:12px;padding:10px;line-height:20px;text-align:justify;font-family: Arial, Helvetica, sans-serif;">
										SunPower panels have a 25-year product warranty – more than double most other
										product warranties. This reduces risk for the customer and provides peace of mind.
										SunPower’s panels have record setting efficiencies from 20.4% for the E series
										residential panel, Customers can get the maximum energy from their roof space.
										SunPower panels have the lowest heat coefficient between 0.38 and 0.30% meaning
										the panels work better at higher temperate – giving the customer more energy.
										SunPower panels have low degradation. The industry average is between 1-1.5%
										per year, SunPower now warrants 0.25% PA for E & X series, with white papers and
										other testing showing actuals of 0.11 – 0.25%. Customers get a greater return on
										their investment and overtime the SunPower panels will produce around 20% more
										energy over 25 years. 
										<br><br>
										The points that make SunPower different are: the energy you can get from the same foot print.  We have a three high efficiency residential panels – E20-327 watt at 20.4% efficiency (black frame), SunPower is back contact – no grid or ribbons on the front of the cell – everything is moved to the back – less chance of things going wrong – cells cracking, ribbons breaking and we have virtually eliminated corrosion.  The back of cell is fully covered with copper, making the cell strong and 
									</td>
								</tr>
							</table>
						</td> 
						
					</tr>
				</table><!-- end page - 3  -->   
		
			<td>
		</tr>
		
		<tr>
		   <td>
				<table style="padding:0px 0 0 0;border:1px solid #000;border-spacing:0px!important;margin:0 0 0px 0;">
					<tr>
						<td style="width:250px;margin:0 50px 0 0;padding:0 0 0 0px;vertical-align:top;background-color:#8cc540;">
							<table>
								<tr>
									<td style="font-size:22px;padding:0px 0px;line-height:30px;text-align:justify;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;background-color:#8cc540;">
										<img src="{{ asset('assets/images/pimg-5.png') }}" style="width:200px;padding:50px 0px 50px 20px;">
									</td>
								</tr>
							</table>
						</td> 
						<td style="width:550px;margin:0;padding:10px 0px 10px 0px;vertical-align:top;">
							<table>
								<tr>
									<td style="font-size:12px;padding:10px;line-height:20px;text-align:justify;font-family: Arial, Helvetica, sans-serif;">
										The new LG NeON™ 2 has seen many improvements, from longer warranties and
										higher efficiency to stronger frames and better wind loading. This panel is ideal for
										homes seeking a visually pleasing solar panel and for roofs where space is tight or
										where future system expansions are considered e.g. to incorporate battery storage
										or electric car charging. The LG NeON™ modules with their bi-facial cells and CELLO
										technology absorb light from the front and the back of the module. This technology
										sets a new standard for innovation and was recognised with the 2015 Photovoltaic
										Innovation Award at the Intersolar Industry Event in Germany.
									</td>
								</tr>
							</table>
						</td> 
						
					</tr>
				</table><!-- end page - 3  -->   
			<td>
		</tr>
	</table><!-- End of page - 4 -->
	
	<table style="background:#fff;width:850px;padding:10px 50px 0px 50px;">
		<tr>
		   <td>
				<table style="padding:0px 0 0px 0;border-bottom:5px solid #000000;">
					<tr style="padding:10px 0 20px 0;">
						<td style="width:850px;padding:10px 0 10px 0;">
							<img class="logo" src=" {{ asset('assets/images/greensky_logo.png') }}" style="width:100px;">
						</td>
						<td style="width:40px;padding:10px 10px 10px 0px;">
						5
						</td>
					</tr>	
					
				</table><!-- end top page - 2  -->
				
				<table style="padding:0px 0 0px 0;">
					<tr style="padding:10px 0 20px 0;">
						<td style="width:800px;padding:30px 0 30px 0;">
							<table>
								<tr>
									<td style="font-size:40px;padding:0 0 10px 30px;color:#0000cc;font-weight:700;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;"><b>INVERTER OPTIONS <br>YOU CAN CHOOSE</b></td>
								</tr>
							</table>
						</td> 
					</tr>
				</table>
				
				
				<table style="padding:0 0 50px 50px;">
					<tr>
						<td style="width:250px;margin:0;padding:0 0 0 20px;vertical-align:top;">
							<table>
								<tr>
									<td style="font-size:12px;padding:0 0 25px 10px;line-height:20px;text-align:justify;font-family: Arial, Helvetica, sans-serif;">
										Your inverter is the ‘brains’ of your solar
										system. An inferior inverter will yield
										inferior results and likely result in
										unwanted performance/warranty
										issues. We have seen many cheap
										inverter manufacturers promise the
										world, then leave the market
										altogether, leaving customers stranded
										without warranty support. 
									</td>
								</tr>
							</table>
						</td> 
						
						<td style="width:250px;margin:0;padding:0 0 0 20px;vertical-align:top;">
							<table>
								<tr>
									<td style="font-size:12px;padding:0 0 25px 10px;line-height:20px;text-align:justify;font-family: Arial, Helvetica, sans-serif;">
									experience. As such, we only use
									inverters supplied by worlds`’ leading
									manufacturers. Companies like SMA
									(Sunnyboy), Enphase, Fronius,
									ZEVERsolar and ABB all supply us with
									inverters. Proven brands made for our
									harsh Australian conditions. All our
									recommended inverters are
									weatherproof (IP65 and higher) and
									transformerless.</td>
								</tr>
							</table>
						</td> 
						<td style="width:250px;margin:0;padding:0 0 0 20px;vertical-align:top;">
							<table>
								<tr>
									<td style="font-size:12px;padding:0 0 25px 10px;line-height:20px;text-align:justify;font-family: Arial, Helvetica, sans-serif;">
										<b>If you’d like your system to include a
										specific inverter (you can choose from
										any of the following great CEC
										approved brands), or just ask about
										other brands!</b>
									</td>
									
								</tr>
								
							</table>
						</td> 
					</tr>
					
				</table>
				<table style="padding:0 0 50px 0;">
					<tr>
						<td>
							<table style="padding:0px 0 0 0;border:1px solid #000;border-spacing:0px!important;margin:0 0 20px 0;">
								<tr>
									<td style="width:250px;margin:0 50px 0 0;padding:0 0 0 0px;vertical-align:top;background-color:#8cc540;">
										<table>
											<tr>
												<td style="font-size:22px;padding:0px 0px;line-height:30px;text-align:justify;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;background-color:#8cc540;">
													<img src="{{ asset('assets/images/pimg-6.png') }}" style="width:200px;padding:30px 0px 30px 20px;">
												</td>
											</tr>
										</table>
									</td> 
									<td style="width:550px;margin:0;padding:10px 0px 10px 0px;vertical-align:top;">
										<table>
											<tr>
												<td style="font-size:12px;padding:40px 10px 10px 10px;line-height:20px;text-align:justify;font-family: Arial, Helvetica, sans-serif;">
													Exceptional reliability coupled with maximum efficiency of 98.2% and Dual MPPTs make the
													Eversol TLC10K the natural choice for systems of 5 – 10 kW. These inverters are also an
													excellent choice for the larger 15 - 20kW Solar Power System. German SMA Group were so
													impressed with ZEVERsolar, they bought 72.5% of the company!
												</td>
											</tr>
										</table>
									</td> 
								</tr>
							</table><!-- end page - 3  -->   
						<td>
					</tr>
					<tr>
						<td>
							<table style="padding:0px 0 0 0;border:1px solid #000;border-spacing:0px!important;margin:0 0 20px 0;">
								<tr>
									<td style="width:250px;margin:0 50px 0 0;padding:0 0 0 0px;vertical-align:top;background-color:#595959;">
										<table>
											<tr>
												<td style="font-size:22px;padding:0px 0px;line-height:30px;text-align:justify;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;background-color:#595959;">
													<img src="{{ asset('assets/images/pimg-7.png') }}" style="width:200px;padding:50px 0px 30px 20px;">
												</td>
											</tr>
										</table>
									</td> 
									<td style="width:550px;margin:0;padding:10px 0px 10px 0px;vertical-align:top;">
										<table>
											<tr>
												<td style="font-size:12px;padding:20px 10px 20px 10px;line-height:20px;text-align:justify;font-family: Arial, Helvetica, sans-serif;">
													An Austrian company established in 1945, focussing on battery chargers and welding
													transformers. Cut to 1995 and they established an Energy & Environment Division, with a
													business unit for photovoltaics, coinciding with the launch of the "Sunrise" grid-connected
													solar inverter. Today Fronius is one of the leading string inverter manufacturers in the World.
													They are working closely with Tesla on the upcoming release of the Tesla Powerwall. Their
													inverters are high quality and come with a communication package included as standard, with
													WLAN, energy management, several interfaces and much more.
												</td>
											</tr>
										</table>
									</td> 
								</tr>
							</table><!-- end page - 3  -->   
						<td>
					</tr>
					<tr>
						<td>
							<table style="padding:0px 0 0 0;border:1px solid #000;border-spacing:0px!important;margin:0 0 20px 0;">
								<tr>
									<td style="width:250px;margin:0 50px 0 0;padding:0 0 0 0px;vertical-align:top;background-color:#8cc540;">
										<table>
											<tr>
												<td style="font-size:22px;padding:0px 0px;line-height:30px;text-align:justify;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;background-color:#8cc540;">
													<img src="{{ asset('assets/images/pimg-8.png') }}" style="width:200px;padding:50px 0px 30px 20px;">
												</td>
											</tr>
										</table>
									</td> 
									<td style="width:550px;margin:0;padding:10px 0px 10px 0px;vertical-align:top;">
										<table>
											<tr>
												<td style="font-size:12px;padding:10px 10px 10px 10px;line-height:20px;text-align:justify;font-family: Arial, Helvetica, sans-serif;">
													<b>Microinverters</b> are the ideal solution for homes subject to shading and anyone wanting
													<b>MAXIMUM PERFORMANCE</b> and Data from their solar system. Any shade or debris results in
													production losses in traditional string solar systems. Each panel has its own inverter attached
													for total independence. Unlike traditional systems, shade on one panel, will not affect any
													other panel. The Enphase Microinverter System improves energy harvest, increases reliability
													and dramatically simplifies design, installation and management. The Enphase System
													includes Microinverters, Envoy S ‘Metered’ Communications Gateway, and Enlighten
													monitoring/analyses software. With a 10 year manufacturer warranty, US Company Enphase
													is leading the way in microinverter technology.
													<b>And they’re Battery Ready!</b>
												</td>
											</tr>
										</table>
									</td> 
								</tr>
							</table><!-- end page - 3  -->   
						<td>
					</tr>
				</table><!-- end page - 5  -->   				
			<td>
		</tr>
		
	</table><!-- End of page - 5 -->
	<p style="page-break-after: always;">&nbsp;</p>

	@if( $offer->offer_detail->count() == 1 )
		@include('admin.customer.price-section-1')
	@endif
	@if( $offer->offer_detail->count() == 2 )
		@include('admin.customer.price-section-2')
	@endif
	@if( $offer->offer_detail->count() == 3 )
		@include('admin.customer.price-section-3')
	@endif

	
	{{-- <table style="background:#d8d8d8;width:850px;padding:10px 50px 0px 50px;">
			<tr>
			   <td>
					
					<table style="padding:0px 0 0px 0;margin-left:0px;">
						<tr style="padding:10px 0 20px 0;">
							<td style="width:850px;padding:30px 0 0px 0;">
								<table>
									<tr>
										<td style="font-size:35px;padding:22px 0 20px 0px;color:#58585b;font-weight:700;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;"><b>SOLAR SYSTEMS <br> QUOTATION</b></td>
									</tr>
								</table>
							</td> 
						</tr>
					</table>
				<td>
			</tr>
			
			<tr>
			   <td>
					<table style="padding:0px;border-spacing:0px!important;margin:0px 0 0px 0;">
						<tr>
							@foreach($offer->offer_detail as  $indexKey=>$offers )
								@php $package_obj = json_decode($offers->package_obj); 
								 $product_obj = json_decode($offers->product_obj); @endphp
	
							<td style="width:270px;margin:0;padding:0px 0px 0px 0px;vertical-align:top; height:100px;">
								<table style="border-spacing:0;">
									<tr>
										<td style="font-size:12px;padding:13px;line-height:20px;text-align:justify;font-family: Arial, Helvetica, sans-serif;background-color:#8cc540;border-right:1px solid #9b9b9b;">
											@if($product_obj[0])
												@if($product_obj[0]->brand)
													@if($product_obj[0]->brand->image != '' )
													
														@if(file_exists(public_path('brand/'.$product_obj[0]->brand->image) ))
														
															<img src="{{ asset('/brand/'.$product_obj[0]->brand->image) }}" style="width:234px;padding:5px 0px 20px 5px;font-family: Arial, Helvetica, sans-serif;height:95px;" alt = "{{ $product_obj[0]->brand->name }}"/>
														@else
															<img src="{{ asset('assets/images/default.jpg') }}" style="width:234px;padding:5px 0px 20px 5px;font-family: Arial, Helvetica, sans-serif;height:95px;"/>
														@endif
													@else
														<img src="{{ asset('assets/images/default.jpg') }}" style="width:234px;padding:5px 0px 20px 5px;font-family: Arial, Helvetica, sans-serif;height:95px;"/>
													@endif
												@else
													<img src="{{ asset('assets/images/default.jpg') }}" style="width:234px;padding:5px 0px 20px 5px;font-family: Arial, Helvetica, sans-serif;height:95px;"/>
												@endif
											@else
													<img src="{{ asset('assets/images/default.jpg') }}" style="width:234px;padding:5px 0px 20px 5px;font-family: Arial, Helvetica, sans-serif;height:95px;"/>
											@endif
										</td>
									</tr>
									<tr>
										<td style="font-size:12px;padding:13px;line-height:20px;text-align:justify;font-family: Arial, Helvetica, sans-serif;background-color:#8cc540;border-right:1px solid #9b9b9b;">
											@if($product_obj[1])
												@if($product_obj[1]->brand)
													@if($product_obj[1]->brand->image != '' )
														@if(file_exists(public_path('brand/'.$product_obj[1]->brand->image) ))
															<img src="{{ asset('/brand/'.$product_obj[1]->brand->image) }}" style="width:234px;padding:5px 0px 20px 5px;font-family: Arial, Helvetica, sans-serif;height:95px;" alt = "{{ $product_obj[1]->brand->name }}"/>
														@else
															<img src="{{ asset('assets/images/default.jpg') }}" style="width:234px;padding:5px 0px 20px 5px;font-family: Arial, Helvetica, sans-serif; height:95px;"/>
														  @endif
													@else
														<img src="{{ asset('assets/images/default.jpg') }}" style="width:234px;padding:5px 0px 20px 5px;font-family: Arial, Helvetica, sans-serif;height:95px;"/>
													@endif
												@else
													<img src="{{ asset('assets/images/default.jpg') }}" style="width:234px;padding:5px 0px 20px 5px;font-family: Arial, Helvetica, sans-serif;height:95px;"/>
												@endif
											@else
												<img src="{{ asset('assets/images/default.jpg') }}" style="width:234px;padding:5px 0px 20px 5px;font-family: Arial, Helvetica, sans-serif;height:95px;"/>
											@endif
	
										</td>
									</tr>
								</table>
							</td> 
							@endforeach
						</tr>
					</table>
	
					<table style="padding:0px;border-spacing:0px!important;margin:0 0 0px 0;">
						<tr>
	
							@foreach($offer->offer_detail as  $indexKey=>$offers )
							
								@php 
									$package_obj = json_decode($offers->package_obj); 
									$product_obj = json_decode($offers->product_obj); 
									$solar_panel = 0 ; 
									$inverter_panel = 0 ; 
									$solar_array = array();
									$inverter_array = array();
								@endphp
		
								@foreach($product_obj as $product)
									@if($product->category)
										@if($product->category->name == "Solar Panel")
											@php  $solar_panel = 1;
											$solar_array[] = $product ; 
											@endphp
										@else
											@php $inverter_panel = 1 ;
											$inverter_array[] = $product ; 
											@endphp
										@endif
									@endif
								@endforeach
								
								@php 
								   $stc = 0;
									$stc_value = \App\Setting::give_value_of('STC_Index');
								   $stc_value = (float) $stc_value;
								   $kw = $offers->package_kw ;
								   $stc = (int)floor( (1.1 * $stc_value * $kw)/1000  ); 
								@endphp
	
							<td style="width:270px;margin:0;padding:0px 0px 0px 0px;vertical-align:top;height:650px;border-right:1px solid #9b9b9b;background-color:#fff;">
								<table style="border-spacing:0;">
									<tr>
										<td style="font-size:12px;padding:10px 0 0 0;line-height:20px;text-align:justify;font-family: Arial, Helvetica, sans-serif;">
											<table style="margin-left:10px;margin-right:10px;">
												<tr>
													<td colspan="2" style="color:#8cc540;text-align:center;font-size:16px;padding:15px 0 10px 0;vertical-align:top;font-family: Arial, Helvetica, sans-serif;"><b>{{ $package_obj->title }} </b></td>
												</tr>
												<tr>
													<td colspan="2">
														@if($package_obj->image != '' )
															@if(file_exists(public_path('/package/'.$package_obj->id.'/'.$package_obj->image) ))
																<img src="{{ asset('/package/'.$package_obj->id.'/'.$package_obj->image) }}" style="width:230px;padding:5px 0 5px 5px;font-family: Arial, Helvetica, sans-serif;height:110px;" alt="{{ $package_obj->name }}"/>
															@else
																<img src="{{ asset('assets/images/default.jpg') }}" style="width:230px;padding:5px 0 5px 5px;font-family: Arial, Helvetica, sans-serif;height:110px;"/>
															@endif
														@else
															<img src="{{ asset('assets/images/default.jpg') }}" style="width:230px;padding:5px 0 5px 5px;font-family: Arial, Helvetica, sans-serif;height:110px;"/>
														@endif
													</td>
												</tr>
												<tr>
													<td colspan="2" style="text-align:left;font-size:13px;font-weight:400;padding:10px 0 0px 5px;vertical-align:top;font-family: Arial, Helvetica, sans-serif;font-family: Arial, Helvetica, sans-serif;">Can produce up to <b>{{ ( $package_obj->kw * 3.6 ) /1000 }} kW/day</td>
												</tr>
												<tr>
													<td colspan="2" style="height: 175px;vertical-align: top;">
														<table>
														@if($solar_panel == 1)
														<tr>
															<td colspan="2" style="color:#596373;text-align:left;font-size:13px;font-weight:400;padding:0px 0 5px 0; min-height: 30px;vertical-align:top;font-family: Arial, Helvetica, sans-serif;"><b>Solar Panels :</b></td>
														</tr>
														@foreach($solar_array as $solar_arr)
														<tr>
															<td colspan="2" style="text-align:left;font-size:13px;font-weight:400;padding:5px 0 0px 0;line-height:30px;font-family: Arial, Helvetica, sans-serif;"> @if($solar_arr->quantity > 1) {{ $solar_arr->quantity }} x @endif {{ $solar_arr->name }}  </td>
														</tr>
														@endforeach
														@endif
														</table>
													</td>
												</tr>
												<tr>
													<td colspan="2" style="height: 120px;vertical-align:top;">
														<table>
															@if($inverter_panel == 1)
															<tr>
																<td colspan="2" style="color:#596373;text-align:left;font-size:13px;font-weight:400;padding:0px 0 5px 0; min-height: 30px;vertical-align:top;font-family: Arial, Helvetica, sans-serif;"><b>Inverter :</b></td>
															</tr>
															@foreach($inverter_array as $invt_arr)
															<tr>
																<td colspan="2" style="text-align:left;font-size:13px;font-weight:400;padding:10px 0 5px 0;font-family: Arial, Helvetica, sans-serif;">
																	@if($invt_arr->quantity > 1)  {{ $invt_arr->quantity }} x @endif {{ $invt_arr->name }}
																</td>
															</tr>
															@endforeach
															@endif
															
														</table>	
													</td>
												</tr>
	
												@php  
													$price =  $package_obj->price + ($stc *  $company_details->STC_Price) + $offers->package_discount_value ; 
													
													$price = number_format($price, 2, '.', ',');
	
													$stc_price = (float) $stc *  $company_details->STC_Price ;
	
													$stc_price = number_format($stc_price, 2, '.', ',');
	
													$discount_price = (float)$offers->package_discount_value ;
	
													$discount_price = number_format($discount_price, 2, '.', ',');
	
													$additional_price = number_format($offers->extra_price, 2, '.', ',');
	
													$all_u_pay = $package_obj->price + $offers->extra_price ;
	
													$all_u_pay = number_format($all_u_pay, 2, '.', ',');
	
	
												@endphp
												
												<tr>
													<td style="height:250px;vertical-align:top;">
														<table style="vertical-align:top;height:200px;width:200px;">
															<tr>
																<td style="width:130px;text-align:left;font-size:13px;font-weight:400;height: 20px;border-top:1px dotted #595959;vertical-align:top;line-height:1.4;padding:5px 0 10px 0;font-family: Arial, Helvetica, sans-serif;">Total contract </td>
																<td style="width:70px;text-align:left;font-size:13px;font-weight:400;height: 20px;border-top:1px dotted #595959;vertical-align:top;line-height:1.4;padding:5px 0 10px 0;font-family: Arial, Helvetica, sans-serif;">$ {{ $price }} </td>
															</tr>
															<tr>
																<td style="width:130px;text-align:left;font-size:13px;font-weight:400;height: 20px;vertical-align:top;line-height:1.4;padding:0 0 10px 0;font-family: Arial, Helvetica, sans-serif;">Less STC {{ $stc }} @ {{ $company_details->STC_Price }} </td>
																<td style="width:70px;text-align:left;font-size:13px;font-weight:400;height: 20px;vertical-align:top;line-height:1.4;padding:0 0 10px 0;font-family: Arial, Helvetica, sans-serif;"> $ {{ $stc_price }}
																</td>
															</tr>
															<tr>
																<td style="width:130px;text-align:left;font-size:13px;font-weight:400;height: 20px;vertical-align:top;line-height:1.4;padding:0 0 10px 0;font-family: Arial, Helvetica, sans-serif;"> @if($offers->package_discount_value != 0.00) Discount @endif </td>
																<td style="width:70px;text-align:left;font-size:13px;font-weight:400;height: 20px;vertical-align:top;line-height:1.4;padding:0 0 10px 0;font-family: Arial, Helvetica, sans-serif;"> @if($offers->package_discount_value != 0.00) $ {{ $discount_price }} @endif </td>
															</tr>
														
															<tr>
																<td style="width:130px;text-align:left;font-size:13px;font-weight:400;height: 20px;vertical-align:top;line-height:1.4;padding:0 0 10px 0;font-family: Arial, Helvetica, sans-serif;"> @if($offers->extra_price > 0) Additional Price @endif  </td>
																<td style="width:70px;text-align:left;font-size:13px;font-weight:400;height: 20px;vertical-align:top;line-height:1.4;padding:0 0 10px 0;font-family: Arial, Helvetica, sans-serif;"> 																		 @if($offers->extra_price > 0) $ {{ $additional_price }} @endif </td>
															</tr>
															<tr>
																<td colspan="2" style="width:220px;text-align:left;font-size:13px;font-weight:400;vertical-align:top;line-height:2;padding:0 0 10px 0;font-family: Arial, Helvetica, sans-serif;">{{ str_limit($offers->description,30) }} </td>
															</tr>
														</table>
														<table style="vertical-align:bottom;height:50px;width:200px;">
															<tr>
																<td style="width:130px;text-align:left;font-size:13px;font-weight:400;border-top:1px dotted #595959;vertical-align:top;line-height:1.4;padding:10px 0 5px 0;font-family: Arial, Helvetica, sans-serif;">All you pay (incl. GST)  </td>
																<td style="width:70px;text-align:left;font-size:13px;font-weight:400;border-top:1px dotted #595959;vertical-align:top;line-height:1.4;padding:10px 0 5px 0;font-family: Arial, Helvetica, sans-serif;">$ {{ $all_u_pay }} </td>
															</tr>
														</table>		
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
							</td>
							
							@endforeach
							
						</tr>
					</table> 
					
					<table style="padding:0px;border-spacing:0px!important;margin:0 0 0px 0;">
						<tr>
							@foreach($offer->offer_detail as  $indexKey=>$offers )
								@php 
									$package_obj = json_decode($offers->package_obj); 
									$product_obj = json_decode($offers->product_obj); 
	
									$all_u_pay = $package_obj->price + $offers->extra_price ;
									$all_u_pay = number_format($all_u_pay, 2, '.', ',');
	
								@endphp
							<td style="width:270px;margin:0;padding:0px 0px 0px 0px;vertical-align:top;">
								<table style="border-spacing:0;">
									<tr>
										<td style="font-size:12px;padding:0 7px 0 0;line-height:0px;text-align:justify;font-family: Arial, Helvetica, sans-serif;background-color:#595959;border-right:1px solid #9b9b9b;">
											<table style="margin-left:10px;margin-right:10px;">
												<tr>
													<td style="width:240px;color:#fff;text-align:center;font-size:26px;padding:15px 0px;line-height:30px;font-family: Arial, Helvetica, sans-serif;"><b> $ {{ $all_u_pay }} </b></td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
							</td>
							@endforeach
							
						</tr>
					</table>
					
			
				<td>
			</tr>
			
		</table><!-- End of page - 6 --> --}}
	

	@if( file_exists(public_path('/offer/'.$offer->id.'/'.$solar_panel_placement) )  ||   file_exists(public_path('/offer/'.$offer->id.'/'.$system_params) )  || file_exists(public_path('/offer/'.$offer->id.'/'.$daily_average) ) )

	<!-- New starting Page -->
	
	<table style="background:#fff;width:850px;padding:30px 20px;page-break-after: always;">
        <tr>
           <td>
                <table style="padding:0 0 20px 0;">
                    <tr>
                        <td style="width:350px;margin:0;padding:0 20px 0 0px;vertical-align:top;">
                            <table>
                                <tr>
                                    <td style="font-size:40px;padding:0 0 10px 10px;color:#0000cc;font-weight:700;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;"><b>PROPOSED <br> SOLAR PANEL <br> PLACEMENT</b></td>
                                </tr>
                            </table>
							<table>
                                <tr>
                                    <td style="width:350px;font-size:13px;padding:50px 0 25px 10px;line-height:20px;text-align:justify;font-family: Arial, Helvetica, sans-serif;">
										1. System efficiency is estimated by the solar installer to account for losses that may include shading, inverter efficiency for DC to AC conversion battery efficiency, cable losses, dirt, manufacturer tolerances, grid-tie system outages, maintenance downtime, and other factors.
										
										<br><br>
									
										2. Energy Output is calculated based on historical solar irradiance and temperature data at this location, factoring in panel tilt, orientation, and all of the System Parameters including System Efficiency.ors.
										
										<br><br>
									
										3. Emission reduction assumes full output usage and 1.17 kg CO2 / kWh based on Victoria average (National Greenhouse and Energy Reporting (Measurement) Determination 2008).
										
										<br><br>
										
										4. Assumes full year-round utilisation of generated electricity and will change based on usage and feed-in tariffs.
									</td>
								</tr>
                                
                            </table>
                        </td> 
                        <td style="width:450px;margin:0;vertical-align:bottom;">
							<table>
							<tr>
								<td>
								@if($solar_panel_placement != '' &&  file_exists(public_path('/offer/'.$offer->id.'/'.$solar_panel_placement) )  )
									<img src="{{asset('/offer/'.$offer->id.'/'.$solar_panel_placement)}}" style="width:450px;"  width="450px">
								@else
								<img src="{{ asset('assets/images/default.jpg') }}" style="width:450px;" width="450px"/>
								@endif
								</td>
							</tr>
							<tr>
								<td>
									@if($daily_average != '' &&  file_exists(public_path('/offer/'.$offer->id.'/'.$daily_average) )  )
										<img src="{{asset('/offer/'.$offer->id.'/'.$daily_average)}}" style="width:450px;padding-top:20px;"  width="450px">
									@else
										<img src="{{ asset('assets/images/default.jpg') }}" style="width:450px;padding-top:20px;"  width="450px"/>
									@endif

										
								</td>
							</tr>
									
							</table>	
								
						</td> 
                    </tr>
					
						
                </table><!-- end top page - 1  -->            
				
				<table>
					<tr>
						<td style="width:900px;margin:0;padding:0 20px 0 20px;vertical-align:top;">
							<table>
								<tr>
									<td style="font-size:28px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;color:#595959;letter-spacing:1px;"> SYSTEM PARAMETERS </td>
								</tr>
								<tr>
									<td>
										@if($system_params != '' &&  file_exists(public_path('/offer/'.$offer->id.'/'.$system_params) )  )
											<img src="{{asset('/offer/'.$offer->id.'/'.$system_params)}}" style="width:850px;padding:20px 0 0 0px;margin:0;"  width="450px">
										@else
											<img src="{{ asset('assets/images/default.jpg') }}" style="width:850px;padding:20px 0 0 0px;margin:0;"  width="450px"/>
										@endif
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>

		    <td>
        </tr>
	</table><!-- End of page - 2 -->
	
	
	@endif
	<!-- End of New starting Page -->
	
	<table style="background:#fff;width:850px;padding:30px 20px;">
		<tr>
		   <td>
				<table style="padding:0px 0 0px 0;border-bottom:5px solid #000000;">
					<tr style="padding:10px 0 20px 0;">
						<td style="width:880px;padding:10px 0 10px 0;">
							<img class="logo" src=" {{ asset('assets/images/greensky_logo.png') }}" style="width:100px;">
						</td>
						<td style="width:40px;padding:10px 10px 10px 0px;">
						8
						</td>
					</tr>	
					
				</table><!-- end top page - 2  -->			
				
				<table style="padding:0px 0 0px 0;">
					<tr style="padding:10px 0 20px 0;">
						<td style="width:800px;padding:30px 0 30px 0;">
							<table>
								<tr>
									<td style="font-size:40px;padding:0 50px 10px 50px;color:#0000cc;font-weight:700;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;"><b>PROJECT NOTES</b></td>
								</tr>
							</table>
						</td> 
					</tr>
				</table>
				
				<table style="padding:0 0 50px 0;">
					<tr>
						<td style="width:800px;margin:0;padding:0px 50px 0 50px;vertical-align:top;">
							<table>
								<tr>
									<td style="font-size:13px;padding:0 0 0px 0px;line-height:20px;text-align:justify;font-family: Arial, Helvetica, sans-serif;">
										<b>While this quotation contains a variety of systems and prices, it is subject to a site inspection and/or discussion of site
										specific features. This will enable us to ensure we are delivering the most suitable system for your needs.</b>
									</td>
								</tr>
							</table>
						</td> 
					</tr>
				</table>
				
				<table style="padding:0 40px 0px 40px;background-color:#8cc540;border-spacing:0px;">
					<tr>
						<td style="width:850px;margin:0;padding:0 0 0 0px;vertical-align:top;background-color:#7f7f7f;border-spacing:0px;">
							<table>
								<tr>
									<td style="width:400px;padding:20px 0 0 0;">
										<table>
											<tr>
												<td style="width:50px;font-size:36px;padding:10px 0 25px 10px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;border-right:1px solid #8cc540;color:#fff;vertical-align:top;">1</td>
												<td style="width:320px;padding:0 0 25px 10px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;color:#8cc540;">
													<table><tr><td style="width:320px;font-size:20px;font-family: Arial, Helvetica, sans-serif;"><b>INVERTER LOCATION</b></td></tr></table>
													<table><tr><td style="width:320px;color:#fff;font-family: Arial, Helvetica, sans-serif;">Locate inverter near meter board or as determined by our installers and place signage as required under AS 3000.</td></tr></table>
												</td>
											</tr>
										</table>
									</td> 
									<td style="width:400px;padding:20px 0 0 0;">
										<table>
											<tr>
												<td style="width:50px;font-size:36px;padding:10px 0 25px 10px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;border-right:1px solid #8cc540;color:#fff;vertical-align:top;">5</td>
												<td style="width:320px;padding:0 0 25px 10px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;color:#8cc540;">
													<table><tr><td style="width:320px;font-size:20px;font-family: Arial, Helvetica, sans-serif;"><b>PANEL CONFIGURATION</b></td></tr></table>
													<table><tr><td style="width:320px;color:#fff;font-family: Arial, Helvetica, sans-serif;">Panel configuration as agreed on site
														(approx. 10sqm in area for each </td></tr></table>
												</td>
											</tr>
										
										</table>
									</td> 
								</tr>
								<tr>
									<td style="width:400px;padding:20px 0 0 0;">
										<table>
											<tr>
												<td style="width:50px;font-size:36px;padding:10px 0 25px 10px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;border-right:1px solid #8cc540;color:#fff;vertical-align:top;">2</td>
												<td style="width:320px;padding:0 0 25px 10px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;color:#8cc540;">
													<table><tr><td style="width:320px;font-size:20px;font-family: Arial, Helvetica, sans-serif;"><b>SITE SPECIFICS</b></td></tr></table>
													<table><tr><td style="width:320px;color:#fff;font-family: Arial, Helvetica, sans-serif;">Tin flat Roof. Single Story. Single-phase.</td></tr></table>
												</td>
											</tr>
										
										</table>
									</td> 
									<td style="width:400px;padding:20px 0 0 0;">
										<table>
											<tr>
												<td style="width:50px;font-size:36px;padding:10px 0 25px 10px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;border-right:1px solid #8cc540;color:#fff;vertical-align:top;">6</td>
												<td style="width:320px;padding:0 0 25px 10px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;color:#8cc540;">
													<table><tr><td style="width:320px;font-size:20px;font-family: Arial, Helvetica, sans-serif;"><b>SHADING</b></td></tr></table>
													<table><tr><td style="width:320px;color:#fff;font-family: Arial, Helvetica, sans-serif;">Shading will negatively affect the
													performance of any system.
													</td></tr></table>
												</td>
											</tr>
										
										</table>
									</td> 
								</tr>
								<tr>
									<td style="width:400px;padding:20px 0 0 0;">
										<table>
											<tr>
												<td style="width:50px;font-size:36px;padding:10px 0 25px 10px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;border-right:1px solid #8cc540;color:#fff;vertical-align:top;">3</td>
												<td style="width:320px;padding:0 0 25px 10px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;color:#8cc540;">
													<table><tr><td style="width:320px;font-size:20px;font-family: Arial, Helvetica, sans-serif;"><b>HARNESS & SAFETY</b></td></tr></table>
													<table><tr><td style="width:320px;color:#fff;font-family: Arial, Helvetica, sans-serif;">Tin flat Roof. Single Story. Single-phase.</td></tr></table>
												</td>
											</tr>
										
										</table>
									</td> 
									<td style="width:400px;padding:20px 0 0 0;">
										<table>
											<tr>
												<td style="width:50px;font-size:36px;padding:10px 0 25px 10px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;border-right:1px solid #8cc540;color:#fff;vertical-align:top;">7</td>
												<td style="width:320px;padding:0 0 25px 10px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;color:#8cc540;">
													<table><tr><td style="width:320px;font-size:20px;font-family: Arial, Helvetica, sans-serif;"><b>PANELS FACING</b></td></tr></table>
													<table><tr><td style="width:320px;color:#fff;font-family: Arial, Helvetica, sans-serif;">Panels facing direct East or West will
													be approximately 10-15% less efficient
													than direct North facing panels.
													</td></tr></table>
												</td>
											</tr>
										
										</table>
									</td> 
								</tr>
								<tr>
									<td style="width:400px;padding:20px 0 20px 0;">
										<table>
											<tr>
												<td style="width:50px;font-size:36px;padding:10px 0 25px 10px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;border-right:1px solid #8cc540;color:#fff;vertical-align:top;">4</td>
												<td style="width:320px;padding:0 0 25px 10px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;color:#8cc540;">
													<table><tr><td style="width:320px;font-size:20px;font-family: Arial, Helvetica, sans-serif;"><b>PANELS LOCATION</b></td></tr></table>
													<table><tr><td style="width:320px;color:#fff;font-family: Arial, Helvetica, sans-serif;">Panels to be located as shown or as agreed with the installers.</td></tr></table>
												</td>
											</tr>
										
										</table>
									</td> 
									<td style="width:400px;padding:20px 0 20px 0;">
										<table>
											<tr>
												<td style="width:50px;font-size:36px;padding:10px 0 25px 10px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;border-right:1px solid #8cc540;color:#fff;vertical-align:top;">8</td>
												<td style="width:320px;padding:0 0 25px 10px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;color:#8cc540;">
													<table><tr><td style="width:320px;font-size:20px;font-family: Arial, Helvetica, sans-serif;"><b>CLEAN ROOF</b></td></tr></table>
													<table><tr><td style="width:320px;color:#fff;font-family: Arial, Helvetica, sans-serif;">Roof should be cleared by customer of any old solar hot water/pool pipes etc. before installation date (if applicable).</td></tr></table>
												</td>
											</tr>
										
										</table>
									</td> 
								</tr>
							</table>
						</td>
					</tr>
		
				</table><!-- End of page - 5 -->
				
				<table style="padding:0px 0 0px 0;margin-left:0px;">
					<tr style="padding:10px 0 20px 0;">
						<td style="width:850px;padding:40px 50px;">
							<table>
								<tr>
									<td style="font-size:27px;padding:0 0 40px 0px;color:#58585b;font-weight:700;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;"><b>AUSTRALIAN AND INTERNATIONAL STANDARDS</b></td>
								</tr>
							</table>
							<table>
								<tr>
									<td style="font-size:14px;padding:0 0 10px 0px;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;">
										<ul>
											<li style="padding-left:20px;font-family: Arial, Helvetica, sans-serif;">
												<b>Our High Efficiency Modules are certified to IEC61215 & TUV standards.</b>
											</li>
											<li style="padding-left:20px;font-family: Arial, Helvetica, sans-serif;"><b>All electrical works will comply with AS/NZS 3000 – Electrical Installations.</b></li>
											<li style="padding-left:20px;font-family: Arial, Helvetica, sans-serif;"><b>The Inverter installed will comply with AS 4777 – Grid Connect Inverters.</b></li>
											<li style="padding-left:20px;font-family: Arial, Helvetica, sans-serif;"><b>The PV installation will be compliant with AS/NZS 1170 – Install of PV array.</b></li>
											<li style="padding-left:20px;font-family: Arial, Helvetica, sans-serif;"><b>We will comply with AS/NZS 1170 – Structural Design Standards.</b></li>
											<li style="padding-left:20px;font-family: Arial, Helvetica, sans-serif;"><b>We will install signage as required under AS 3000.</b></li>
										</ul>
									</td>
								</tr>
							</table>
						</td> 
					</tr>
				</table>
				
			</td>	
		</tr>
	</table>	
	
	<p style="page-break-after: always;">&nbsp;</p>	

	<table style="background:#fff;width:850px;padding:30px 20px;">
		<tr>
		   <td>
				<table style="padding:0px 0 0px 10px;margin:0 0 0 30px;border-bottom:5px solid #000000;">
					<tr style="padding:10px 0 20px 0;">
						<td style="width:860px;padding:10px 0 10px 0;">
							<img class="logo" src=" {{ asset('assets/images/greensky_logo.png') }}" style="width:100px;">
						</td>
						<td style="width:40px;padding:10px 10px 10px 0px;">
						9
						</td>
					</tr>	
					
				</table><!-- end top page - 2  -->

				<table style="padding:0px 0 0px 0;">
					<tr style="padding:10px 0 20px 0;">
						<td style="width:800px;padding:30px 0 30px 0;">
							<table>
								<tr>
									<td style="font-size:27px;padding:0 0 10px 30px;color:#0000cc;font-weight:700;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;"><b>WARRANTY INFORMATION</b></td>
								</tr>
							</table>
						</td> 
					</tr>
				</table>
				
				<table style="padding:0 0 50px 0;">
					<tr>
						<td style="width:850px;margin:0;padding:0 0 0 20px;vertical-align:top;">
							<table>
								<tr>
									<td style="font-size:14px;padding:0 0 15px 10px;line-height:20px;text-align:justify;font-family: Arial, Helvetica, sans-serif;">
										<b>Green Sky Australia offer the best warranty’s in the solar industry with a massive 10-year warranty on the
										installation of your PV System.</b>
									</td>
								</tr>
								<tr>
									<td style="font-size:14px;padding:0 0 15px 10px;line-height:20px;text-align:justify;font-family: Arial, Helvetica, sans-serif;">
										<b>Green Sky Australia will also take care of all warranty issues for you, meaning all you need to do is call our friendly
										staff and they will take care of it. Green Sky Australia will not charge you for any warranty related problem i.e. call
										out’s, postage etc.</b>
									</td>
								</tr>
							</table>
						</td> 
					</tr>
				</table>
				<table style="padding:0 0 50px 36px;">
					<tr>
						<td style="width:250px;margin:0;padding:10px;vertical-align:top;">
							<table style="border:1px solid #9fce60;">
								<tr>
									<td style="font-size:12px;padding:0 0 0px 40px;line-height:20px;text-align:justify;font-family: Arial, Helvetica, sans-serif;">
										<img src="{{ asset('assets/images/pimg-9.png') }}" style="width:150px;padding:40px 20px 20px 20px;">
									</td>
								</tr>
								<tr>
									<td style="width:250px;font-size:14px;padding:0 0 0px 20px;line-height:20px;text-align:justify;font-family: Arial, Helvetica, sans-serif;">
										
										<table>
											<tr>
												<td style="width:50px;font-size:36px;padding:10px 10px 25px 10px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;color:#58585b;vertical-align:top;"><b>1</b></td>
												<td style="width:200px;padding:0 0 25px 10px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;color:#8cc540;">
													<table><tr><td style="width:200px;color:#9fce60;font-family: Arial, Helvetica, sans-serif;font-size:16px;"><b>Hanwha Q CELLS</b></td></tr></table>
												</td>
											</tr>
										
										</table>
									</td>
								</tr>
								<tr>
									<td style="width:230px;font-size:14px;padding:0 0 20px 30px;line-height:20px;color:#000;text-align:left;font-family: Arial, Helvetica, sans-serif;">
										 https://www.q-cells.com/us/<br>index/service/warranty 
									</td>
								</tr>
								
							</table>
						</td> 
						
						<td style="width:250px;margin:0;padding:10px;vertical-align:top;">
							<table style="border:1px solid #9fce60;">
								<tr>
									<td style="font-size:12px;padding:0 0 0px 40px;line-height:20px;text-align:justify;font-family: Arial, Helvetica, sans-serif;">
										<img src="{{ asset('assets/images/pimg-9.png') }}" style="width:150px;padding:40px 20px 20px 20px;">
									</td>
								</tr>
								<tr>
									<td style="width:250px;font-size:14px;padding:0 0 0px 20px;line-height:20px;text-align:justify;font-family: Arial, Helvetica, sans-serif;">
										
										<table>
											<tr>
												<td style="width:50px;font-size:36px;padding:10px 10px 25px 10px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;color:#58585b;vertical-align:top;"><b>2</b></td>
												<td style="width:200px;padding:0 0 25px 10px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;color:#8cc540;">
													<table><tr><td style="width:200px;color:#9fce60;font-family: Arial, Helvetica, sans-serif;font-size:16px;"><b>LG</b></td></tr></table>
												</td>
											</tr>
										
										</table>
									</td>
								</tr>
								<tr>
									<td style="width:230px;font-size:14px;padding:0 0 20px 30px;line-height:20px;color:#000;text-align:left;font-family: Arial, Helvetica, sans-serif;">
										 https://www.lgenergy.com.au/<br>service-warranty/warranty
									</td>
								</tr>
								
							</table>
						</td> 
						
						<td style="width:250px;margin:0;padding:10px;vertical-align:top;">
							<table style="border:1px solid #9fce60;">
								<tr>
									<td style="font-size:12px;padding:0 0 0px 40px;line-height:20px;text-align:justify;font-family: Arial, Helvetica, sans-serif;">
										<img src="{{ asset('assets/images/pimg-9.png') }}" style="width:150px;padding:40px 20px 20px 20px;">
									</td>
								</tr>
								<tr>
									<td style="width:250px;font-size:14px;padding:0 0 0px 20px;line-height:20px;text-align:justify;font-family: Arial, Helvetica, sans-serif;">
										
										<table>
											<tr>
												<td style="width:50px;font-size:36px;padding:10px 10px 25px 10px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;color:#58585b;vertical-align:top;"><b>3</b></td>
												<td style="width:200px;padding:0 0 25px 10px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;color:#8cc540;">
													<table><tr><td style="width:200px;color:#9fce60;font-family: Arial, Helvetica, sans-serif;font-size:16px;"><b>SUNPOWER</b></td></tr></table>
												</td>
											</tr>
										
										</table>
									</td>
								</tr>
								<tr>
									<td style="width:230px;font-size:14px;padding:0 0 0px 30px;line-height:20px;color:#000;text-align:left;font-family: Arial, Helvetica, sans-serif;">
										 https://www.sunpower.com.au/sites/<br>international/files/media-library/<br>data-sheets/ds-sp-res-warranty.pdf
									</td>
								</tr>
							</table>
						</td> 
					</tr>
					
					<!-- === === -->
					
					<tr>
						<td style="width:250px;margin:0;padding:10px;vertical-align:top;">
							<table style="border:1px solid #9fce60;">
								<tr>
									<td style="font-size:12px;padding:0 0 0px 40px;line-height:20px;text-align:justify;font-family: Arial, Helvetica, sans-serif;">
										<img src="{{ asset('assets/images/pimg-10.png') }}" style="width:150px;padding:40px 20px 20px 20px;">
									</td>
								</tr>
								<tr>
									<td style="width:250px;font-size:14px;padding:0 0 0px 20px;line-height:20px;text-align:justify;font-family: Arial, Helvetica, sans-serif;">
										
										<table>
											<tr>
												<td style="width:50px;font-size:36px;padding:10px 10px 25px 10px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;color:#58585b;vertical-align:top;"><b>4</b></td>
												<td style="width:200px;padding:0 0 25px 10px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;color:#8cc540;">
													<table><tr><td style="width:200px;color:#9fce60;font-family: Arial, Helvetica, sans-serif;font-size:16px;"><b>ZeverSolar</b></td></tr></table>
												</td>
											</tr>
										
										</table>
									</td>
								</tr>
								<tr>
									<td style="width:230px;font-size:14px;padding:0 0 180px 30px;line-height:20px;color:#000;text-align:left;font-family: Arial, Helvetica, sans-serif;">
										 will be free from defects in <br>materials and workmanship for<br> a period of 5 years from <br>date of purchase<br><br>
										 https://www.zeversolar.com/fileadmin/<br>user_upload/pdf/warranty_en/<br>zeversolar_australia_factory_<br>warranty_extended_warranty.pdf
									</td>
								</tr>
								
							</table>
						</td> 
						
						<td style="width:250px;margin:0;padding:10px;vertical-align:top;">
							<table style="border:1px solid #9fce60;">
								<tr>
									<td style="font-size:12px;padding:0 0 0px 40px;line-height:20px;text-align:justify;font-family: Arial, Helvetica, sans-serif;">
										<img src="{{ asset('assets/images/pimg-10.png') }}" style="width:150px;padding:40px 20px 20px 20px;">
									</td>
								</tr>
								<tr>
									<td style="width:250px;font-size:14px;padding:0 0 0px 20px;line-height:20px;text-align:justify;font-family: Arial, Helvetica, sans-serif;">
										
										<table>
											<tr>
												<td style="width:50px;font-size:36px;padding:10px 10px 25px 10px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;color:#58585b;vertical-align:top;"><b>5</b></td>
												<td style="width:200px;padding:0 0 25px 10px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;color:#8cc540;">
													<table><tr><td style="width:200px;color:#9fce60;font-family: Arial, Helvetica, sans-serif;font-size:16px;"><b>Fronius</b></td></tr></table>
												</td>
											</tr>
										
										</table>
									</td>
								</tr>
								<tr>
									<td style="width:230px;font-size:14px;padding:0 0 20px 30px;line-height:20px;color:#000;text-align:left;font-family: Arial, Helvetica, sans-serif;">
										String inverters are supplied<br> with a 5-year Fronius Warranty<br> Plus. Under the 10 year <br>warranty promotion the standard<br> 5 year Fronius<br> Warranty Plus can be extended<br> with an additional 5 year Fronius <br>Warranty. Green Sky Australia <br>registers the inverter<br> (serial number) the Plus 5<br> years is offered until <br>the 31th December 2016.<br><br>
										http://www.fronius.com/en/ </br> photovoltaics/products/all-products/ </br>solutions/fronius-service-solutions/<br>fronius-warranties/fronius-warranties
									</td>
								</tr>
								
							</table>
						</td> 
						
						<td style="width:250px;margin:0;padding:10px;vertical-align:top;">
							<table style="border:1px solid #9fce60;">
								<tr>
									<td style="font-size:12px;padding:0 0 0px 40px;line-height:20px;text-align:justify;font-family: Arial, Helvetica, sans-serif;">
										<img src="{{ asset('assets/images/pimg-10.png') }}" style="width:150px;padding:40px 20px 20px 20px;">
									</td>
								</tr>
								<tr>
									<td style="width:250px;font-size:14px;padding:0 0 0px 20px;line-height:20px;text-align:justify;font-family: Arial, Helvetica, sans-serif;">
										
										<table>
											<tr>
												<td style="width:50px;font-size:36px;padding:10px 10px 25px 10px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;color:#58585b;vertical-align:top;"><b>6</b></td>
												<td style="width:200px;padding:0 0 25px 10px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;color:#8cc540;">
													<table><tr><td style="width:200px;color:#9fce60;font-family: Arial, Helvetica, sans-serif;font-size:16px;"><b>Enphase</b></td></tr></table>
												</td>
											</tr>
										
										</table>
									</td>
								</tr>
								<tr>
									<td style="width:230px;font-size:14px;padding:0 0 120px 30px;line-height:20px;color:#000;text-align:left;font-family: Arial, Helvetica, sans-serif;">
										The, S230/270 Microinverters:<br> 10 years commencing on the<br> earlier of (i) 4 months from <br>the date the product is shipped<br> from Enphase and <br>(ii) the installation of the<br> product at the original<br> end user location <br>(“Original Location”).<br><br>
										https://enphase.com/en-au/<br>warranty
									</td>
								</tr>
							</table>
						</td> 
					</tr>
				</table>
			<td>
		</tr>
	</table>
	
	<!-- ==================================================== -->
				

	
	<table style="background:#fff;width:850px;padding:30px 20px;">
		<tr>
		   <td>
				<table style="padding:0px 0 0px 0;border-bottom:5px solid #000000;">
					<tr style="padding:10px 0 20px 0;">
						<td style="width:750px;padding:10px 0 10px 0;">
							<img class="logo" src=" {{ asset('assets/images/greensky_logo.png') }}" style="width:100px;">
						</td>
						<td style="width:150px;padding:10px 10px 10px 0px;text-align:right;">
						10
						</td>
					</tr>	
					
				</table><!-- end top page - 2  -->
				
				<table style="padding:0px 0 0px 0;">
					<tr style="padding:0px 0 0px 0;">
						<td style="width:900px;padding:20px 0 00px 50px;">
							<table>
								<tr>
									<td style="font-size:27px;padding:0 0 00px 0px;color:#8cc541;font-weight:700;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;"><b>TERMS & <br> CONDITIONS</b></td>
								</tr>
							</table>
						</td> 
					</tr>
				</table>
				
				<table style="padding:0 0 0px 50px;">
					<tr>
						<td style="width:250px;margin:0;padding:0 0 0 0px;vertical-align:top;">
							<table>
								<tr>
									<td style="font-size:9px;padding:0 0 0px 0px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;">
										1. Work will not commence unless a
										deposit has been paid. Clients must meet installer
										on site to agree on the position of all equipment.
										Extra charges will apply to relocate any
										equipment already installed.
									</td>
								</tr>
								<tr>
									<td style="font-size:9px;padding:0 0 0px 0px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;">
										2. Ownership of all equipment on site remains the property of Green Sky Australia until paid for in full. Warranty will only be available after this time.
									</td>
								</tr>
								<tr>
									<td style="font-size:9px;padding:0 0 0px 0px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;">
										3. Warranty calls will only be carried out during normal working hours and only by our representatives and not via client’s choice of repairer.  We will not accept back charges for any work not carried out by our representatives.
									</td>
								</tr>
								<tr>
									<td style="font-size:12px;padding:0 0 0px 0px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;">
										4. Warranty is not service. Any calls placed to wash panels, check operation, renew blown fuses etc. will be chargeable to the client.
									</td>
								</tr>
								<tr>
									<td style="font-size:12px;padding:0 0 0px 0px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;">
										5. Any submissions to the local authorities will be the responsibility of the owner, unless stated otherwise in the proposal.
									</td>
								</tr>
								<tr>
									<td style="font-size:12px;padding:0 0 0px 0px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;">
										6. Green Sky Australia offer 10 years Warranty for workmanship as stated in our proposal. 
									</td>
								</tr>
								<tr>
									<td style="font-size:12px;padding:0 0 0px 0px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;">
										7. All other warranties are offered by the manufacturer of the equipment supplied, with Green Sky Australia acting as warranty agents. 
									</td>
								</tr>
								<tr>
									<td style="font-size:12px;padding:0 0 0px 0px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;">
										8. The final locations of the panels & inverter are to be determined on site by the owner in consultation with the installation manager or team leader.  An extra cost would apply if the panels are not to be placed at the roof angle. Clients must meet with installer on site. The inverter should be mounted internally in the garage or carport and kept out of the weather unless the inverter is rated as weatherproof. 
									</td>
								</tr>
								<tr>
									<td style="font-size:12px;padding:0 0 0px 0px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;">
										9.If any equipment has to be re-located
										due to any requirements such as complaints from
										neighbours or local authorities, then these costs
										would be incurred by the client and not Green Sky
										Australia.
									</td>
								</tr>
								<tr>
									<td style="font-size:12px;padding:0 0 0px 0px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;">
										10.Panels are to be mounted on a fixed
										frame at the roof angle unless otherwise specified
									</td>
								</tr>
								<tr>
									<td style="font-size:12px;padding:0 0 0px 0px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;">
										11.Any penetrations or building work are
										excluded, unless otherwise mentioned in the
										proposal.
									</td>
								</tr>
								
								
							</table>
						</td> 
						
						<!-- 2 -->
						
						<td style="width:250px;margin:0;padding:0 10px 0 10px;vertical-align:top;font-family: Arial, Helvetica, sans-serif;">
							<table>
								<tr>
									<td style="font-size:9px;padding:0 0 0px 0px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;">
										12.	Any covering or painting is excluded, unless otherwise mentioned in the proposal.
									</td>
								</tr>
								<tr>
									<td style="font-size:9px;padding:0 0 0px 0px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;">
										13.	Earthing of light fittings, or any extra work ordered by electrical authorities not relating to solar will be costs incurred by the client. Green Sky Australia is not responsible for the correction, modification or repair of any pre-existing non-compliant electrical works.
									</td>
								</tr>
								<tr>
									<td style="font-size:9px;padding:0 0 0px 0px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;">
										14.	Any equipment partly or completely installed on your site becomes the owner’s responsibility against Theft of Damage.
									</td>
								</tr>
								<tr>
									<td style="font-size:9px;padding:0 0 0px 0px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;">
										15.	No responsibility will be taken for installation not being completed on the nominated day due to unforeseen circumstances such as rain, high winds, hail, sickness, acts of God, etc.
									</td>
								</tr>
								<tr>
									<td style="font-size:9px;padding:0 0 0px 0px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;">
										16.	In the event that a roofing tile requires replacement because it has cracked, or it is brittle it is the responsibility of the owner. Green Sky Australia will take all care but, in some circumstances, through no fault of our own, tiles may be broken. Green Sky Australia will replace the tile where possible, but it cannot guarantee the colour or exact tile being matched. Old homes are particularly prone to tile breakage.
									</td>
								</tr>
								<tr>
									<td style="font-size:9px;padding:0 0 0px 0px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;">
										17.	If during the installation of underground electrical mains, it is found necessary to dig up the ground or driveway, this would be the responsibility of the client.
									</td>
								</tr>
								<tr>
									<td style="font-size:9px;padding:0 0 0px 0px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;">
										18.	Green Sky Australia takes full responsibility for the repair of the components installed by Green Sky Australia. We however do not take responsibility for any consequential damages to property after the installation is complete and the system has been commissioned. System maintenance is the responsibility of the owner and all components should be cleaned and kept in a good state of repair. 
									</td>
								</tr>
								<tr>
									<td style="font-size:9px;padding:0 0 0px 0px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;">
										19.	Green Sky Australia will have no responsibility or liability for any economic loss or for any loss resulting from any cause whatsoever arising out of or related to the goods, including but not limited to, any defects in the goods, or from the use or installation of the goods.
									</td>
								</tr>
								
							</table>
						</td> 
						
						<!-- 3 -->
						
						<td style="width:250px;margin:0;padding:0 0 0 0px;vertical-align:top;">
							<table>
								<tr>
									<td style="font-size:9px;padding:0 0 0px 0px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;">
										20.	If at the time of installation, the specified goods are not available, Green Sky Australia may offer an option to use alternative products to meet your requirements. 
									</td>
								</tr>
								<tr>
									<td style="font-size:9px;padding:0 0 0px 0px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;">
										21.	Our price quoted is valid for a period of 14 days from the date of this quote unless otherwise indicated.
									</td>
								</tr>
								<tr>
									<td style="font-size:9px;padding:0 0 0px 0px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;">
										22.	In accordance with Dept. of Fair Trading regulations, clients are entitled to a cooling off period of 5 working days, they are also entitled to a full refund of their deposit if council approval is not granted.
									</td>
								</tr>
								<tr>
									<td style="font-size:9px;padding:0 0 0px 0px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;">
										23.	Cancellations after this period will attract a $500 administration fee.
									</td>
								</tr>
								<tr>
									<td style="font-size:9px;padding:0 0 0px 0px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;">
										24.	Green Sky Australia may cancel any contract at any time at its absolute discretion.
									</td>
								</tr>
								<tr>
									<td style="font-size:9px;padding:0 0 0px 0px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;">
										25.	All prices are subject to changes in Government legislation.
									</td>
								</tr>
								<tr>
									<td style="font-size:9px;padding:0 0 0px 0px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;">
										26.	All pricing is based on location being eligible for the Solar credits (REC’s) scheme. This is available to installations where no SHCP or PVRP rebate has been previously claimed.
									</td>
								</tr>
								<tr>
									<td style="font-size:9px;padding:0 0 0px 0px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;">
										27.	Once payment of a deposit is made, this constitutes an agreement between you and Green Sky Australia. Payment of a deposit is evidence of your acceptance of all terms and conditions as outlined in this agreement. 
									</td>
								</tr>
								<tr>
									<td style="font-size:9px;padding:0 0 0px 0px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;">
										28.	Green Sky Australia is not liable for any consequential or financial losses due to loss of production or operational or installation faults of the system.
									</td>
								</tr>
								<tr>
									<td style="font-size:9px;padding:0 0 0px 0px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;">
										29.	Any reference in this quotation or other documentation in regard to Green Sky Australia, Green Sky Australia refers to KB Quality Airconditioning Pty Ltd t/as Green Sky Australia.
									</td>
								</tr>
								<tr>
									<td style="font-size:9px;padding:20px 0 0px 0px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;">
										Please Note: - The equipment will not be left operational until full payment is received.
									</td>
								</tr>
								<tr>
									<td style="font-size:9px;padding:10px 0 0px 0px;line-height:20px;text-align:left;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;">
										Visa and MasterCard credit cards are accepted but will incur a 1.5% admin fee (this fee is not applicable to deposit amounts).
									</td>
								</tr>
								
								
							</table>
						</td> 
						
					</tr>
				</table><!-- end page - 3  -->            
			<td>
		</tr>
		
		<tr>
		   <td>
				<table style="padding:0px 0 0px 0;border-bottom:5px solid #000000;">
					<tr style="padding:10px 0 20px 0;">
						<td style="width:850px;padding:10px 0 10px 0;">
							<img class="logo" src=" {{ asset('assets/images/greensky_logo.png') }}" style="width:100px;">
						</td>
						<td style="width:40px;padding:10px 10px 10px 0px;">
						11
						</td>
					</tr>	
				</table><!-- end top page - 2  -->
				<table style="padding:30px 0 0px 50px;">
					<tr>
						<td style="width:750px;padding:30px 0 30px 0px;border-bottom:5px solid #0000cc;">
							<table>
								<tr>
									<td style="font-size:27px;padding:0 0 10px 10px;line-height:40px;color:#0000cc;font-weight:700;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;"><b>ACCEPTANCE <br> OF QUOTE</b></td>
								</tr>
							</table>
						</td> 
					</tr>
				</table><!-- end top page - 2  -->
				<table style="padding:10px 0 0px 50px;">
					<tr>
						<td style="width:750px;padding:10px 0 10px 0;">
							<table>
								<tr>
									<td style="font-size:12px;padding:0 0 10px 10px;font-weight:700;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;">
									(Please complete and return this page with your deposit)</td>
								</tr>
								<tr>
									<td style="font-size:12px;padding:0 0 10px 10px;font-weight:700;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;">
									<b>Standard Payment Terms </b></td>
								</tr>
								<tr>
									<td style="font-size:12px;padding:0 0 10px 30px;font-weight:700;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;">
										<ul>
											<li style="padding:0 10px 0 0;"> The deposit amount specified is required with order.  </li>
											<li style="padding:0 10px 0 0;"> The STC’s are to be assigned to Green Sky Australia on completion of the installation at $36 value as part payment of the
												system (not at power connection). </li>
											<li style="padding:0 10px 0 0;"> Full payment of any balance is required on installation of the panels. </li>	
											<li style="padding:0 10px 0 0;"> Title of the equipment does not pass until the final payment has been received by Green Sky Australia </li>
										</ul>
									</td>
								</tr>
								<tr>
									<td style="font-size:12px;padding:0 0 10px 10px;font-weight:700;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;">
									An electrical inspector will inspect the installation prior to connection to the grid. This may take 1-2 weeks post installation completion. 
								</tr>
								<tr>
									<td style="font-size:12px;padding:0 0 10px 10px;font-weight:700;font-family: Arial, Helvetica, sans-serif;letter-spacing:1px;">
																		As the owner or owner’s representative of this property, I am satisfied that the roof is suitable to accommodate the array over its
									intended life. I accept this Quotation and the Standard Payment Terms outlined above.
								</tr>
								
							</table>
						</td> 
					</tr>
				</table><!-- end top page - 2  -->
				<table style="padding:10px 0 0px 50px;">
					<tr>
						<td style="width:750px;padding:10px 0 10px 0;">
							<table>
								<tr>
									<td style="width:300px;padding:0 80px 0 0;">
										<table>
											<tr>
												<td style="font-family: Arial, Helvetica, sans-serif;">Date:</td>
											</tr>
											<tr>
												<td><input type="text" value="{{ $date }}" style="width:250px;background:#fff;padding:10px 0 20px 0;border-color:#fff;border-bottom:1px solid #000;" /></td>
											</tr>
										</table>
									</td>
									<td style="width:300px;padding:0 0px 0 80px;">
										<table>
											<tr>
												<td style="font-family: Arial, Helvetica, sans-serif;">System selcted:</td>
											</tr>
											<tr>
												<td><input type="text" style="width:250px;background:#fff;padding:10px 0 20px 0;border-color:#fff;border-bottom:1px solid #000;"></td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td style="width:300px;padding:10px 80px 0 0;">
										<table>
											<tr>
												<td style="font-family: Arial, Helvetica, sans-serif;">Name (please print):</td>
											</tr>
											<tr>
												<td><input type="text" value="{{ $customer->first_name }} {{ $customer->last_name }}" style="width:250px;background:#fff;padding:10px 0 20px 0;border-color:#fff;border-bottom:1px solid #000;"/></td>
											</tr>
										</table>
									</td>
									<td style="width:300px;padding:10px 0px 0 80px;">
										<table>
											<tr>
												<td style="font-family: Arial, Helvetica, sans-serif;">Acceptance (please sign here):</td>
											</tr>
											<tr>
												<td>
												    <!--<input type="text" style="width:250px;background:#fff;padding:10px 0 20px 0;border-color:#fff;border-bottom:1px solid #000;">-->
												    @if($offer->sign == 1)
                                                        <img src="{{$offer->customer_sign}}" style="border:1px solid;" width="250px" height="150px"/>
                                                    @endif
												    </td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>	
				
				<table style="padding:0px 0 0 0px;border:1px solid #8cc541;margin-left:50px;">
					<tr>
						<td style="width:750px;padding:10px 0 10px 0px;">
							<table>
								<tr>
									<td style="width:300px;padding:0 20px 0 0;">
										<table>
											<tr>
												<td style="font-family: Arial, Helvetica, sans-serif;">Please provide the following information from your Electricity Bill</td>
											</tr>
										</table>
									</td>
									<td style="width:500px;padding:0 0px 0 0px;">
										<table>
											<tr>
												<td style="width:200px;padding:0px 0px 10px 0px;font-family: Arial, Helvetica, sans-serif;">NMI: </td>
											<td style="width:300px;padding:0 0px 10px 0px;"><input type="text" style="width:250px;background:#fff;padding:10px 0 20px 0;border-color:#fff;border-bottom:1px solid #000;" value="{{$customer->nmi }}" /></td>
											</tr>
											<tr>
												<td style="width:200px;padding:0 0px 10px 0px;font-family: Arial, Helvetica, sans-serif;">Meter Number: </td>
											<td style="width:300px;padding:0 0px 10px 0px;"><input type="text" style="width:250px;background:#fff;padding:10px 0 20px 0;border-color:#fff;border-bottom:1px solid #000;" value="{{$customer->meter_number}}"/></td>
											</tr>
											<tr>
												<td style="width:200px;padding:0 0px 10px 0px;font-family: Arial, Helvetica, sans-serif;">Electrical Retailer:  </td>
												<td style="width:300px;padding:0 0px 10px 0px;"><input type="text" style="width:250px;background:#fff;padding:10px 0 20px 0;border-color:#fff;border-bottom:1px solid #000;" value="{{ $customer->retailer->name}}" /></td>
											</tr>
											<tr>
												<td style="width:200px;padding:0 0px 10px 0px;font-family: Arial, Helvetica, sans-serif;">Electrical Distributor: </td>
											<td style="width:300px;padding:0 0px 10px 0px;"><input type="text" style="width:250px;background:#fff;padding:10px 0 20px 0;border-color:#fff;border-bottom:1px solid #000;" value="{{$customer->electrical_distributer}}"/></td>
											</tr>
										</table>
									</td>
									
								</tr>
							</table>
						</td>
					</tr>
				</table>	
				<table style="padding:0px 0 0 0px;border:1px solid #8cc541;margin-left:50px;">
					<tr>
						<td style="width:750px;padding:10px 0 10px 0px;">
							<table>
								<tr>
									<td style="width:300px;padding:0 20px 0 0;">
										<table>
											<tr>
												<td style="font-family: Arial, Helvetica, sans-serif;">Additional Information of Customer</td>
											</tr>
										</table>
									</td>
									<td style="width:500px;padding:0 0px 0 0px;">
										<table>
											<tr>
												<td style="width:200px;padding:0px 0px 10px 0px;font-family: Arial, Helvetica, sans-serif;">Date: </td>
											<td style="width:300px;padding:0 0px 10px 0px;"><input type="text" style="width:250px;background:#fff;padding:10px 0 20px 0;border-color:#fff;border-bottom:1px solid #000;" value="{{$offer->sign_date }}" /></td>
											</tr>
											<tr>
												<td style="width:200px;padding:0 0px 10px 0px;font-family: Arial, Helvetica, sans-serif;">IP: </td>
											<td style="width:300px;padding:0 0px 10px 0px;"><input type="text" style="width:250px;background:#fff;padding:10px 0 20px 0;border-color:#fff;border-bottom:1px solid #000;" value="{{$offer->ip}}"/></td>
											</tr>
											<tr>
												<td style="width:200px;padding:0 0px 10px 0px;font-family: Arial, Helvetica, sans-serif;">Latitude:  </td>
												<td style="width:300px;padding:0 0px 10px 0px;"><input type="text" style="width:250px;background:#fff;padding:10px 0 20px 0;border-color:#fff;border-bottom:1px solid #000;" value="{{ $offer->latitude}}" /></td>
											</tr>
											<tr>
												<td style="width:200px;padding:0 0px 10px 0px;font-family: Arial, Helvetica, sans-serif;">Longitude: </td>
											<td style="width:300px;padding:0 0px 10px 0px;"><input type="text" style="width:250px;background:#fff;padding:10px 0 20px 0;border-color:#fff;border-bottom:1px solid #000;" value="{{$offer->longitude}}"/></td>
											</tr>
										</table>
									</td>
									
								</tr>
							</table>
						</td>
					</tr>
				</table>	
				
				<table style="padding:00px 0 0 50px;">
					<tr>
						<td style="width:750px;padding:10px 0 10px 0;">
							<table>
								<tr>
									<td style="width:750px;padding:0 20px 0 0;font-family: Arial, Helvetica, sans-serif;">
										For your convenience payments can be made to Green Sky Australia by direct deposit. Our bank account details are as follows;
									</td>
								</tr>
								<tr>
									<td style="width:350px;padding:10px 20px 0 0;">
										<table>
											<tr><td style="width:350px;font-family: Arial, Helvetica, sans-serif;" colspan="2"><b>Bank Account Details </b></td></tr>
											<tr>
												<td style="width:150px;font-family: Arial, Helvetica, sans-serif;">Bank:</td>
												<td style="width:150px;font-family: Arial, Helvetica, sans-serif;">{{ $company_details->Bank_Name }}</td>
											</tr>
											<tr>
												<td style="width:150px;font-family: Arial, Helvetica, sans-serif;">Account Name:</td>
												<td style="width:150px;font-family: Arial, Helvetica, sans-serif;">{{ $company_details->Bank_Account_Name }}</td>
											</tr>
											<tr>
												<td style="width:150px;font-family: Arial, Helvetica, sans-serif;">BSB No:</td>
												<td style="width:150px;font-family: Arial, Helvetica, sans-serif;">{{ $company_details->BSB_Number }}</td>
											</tr>
											<tr>
												<td style="width:150px;font-family: Arial, Helvetica, sans-serif;">Account No:</td>
												<td style="width:150px;font-family: Arial, Helvetica, sans-serif;"> {{ $company_details->Account_Number }}</td>
											</tr>
											
										</table>
									</td>
								</tr>
								<tr>
									<td style="width:850px;padding:20px 20px 0 0;font-family: Arial, Helvetica, sans-serif;">
										Please use your surname as the ‘Payment Reference’ and fax or email the transfer receipt to our office. Please make all cheques
										payable to Green Sky Australia.
									</td>
								</tr>
								<tr>
									<td style="width:850px;padding:20px 20px 0 0;font-family: Arial, Helvetica, sans-serif;">
										Finance is available on Recommended Retail Pricing only (i.e. no cash discounts apply). Visa and MasterCard payments are
										accepted.
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>		
			<td>
		</tr>
	</table><!-- End of page - 3 -->
	
	 <table style="background:#d9d9d9;width:850px;padding:0px 25px 255px 25px;font-family: Arial, Helvetica, sans-serif;">
        <tr>
           <td>
                
                <table style="padding:50px 0 50px 0;font-weight:900;">
                    <tr>
                        <td style="width:750px;margin:0;padding:300px 0 100px 0;vertical-align:middle;font-size:56px;border-top:5px solid #8cc540;color:#8cc540;text-align:left;font-weight:bold !important;">
                            <p style="font-weight:900;font-family: Arial, Helvetica, sans-serif;line-height:50px;padding:50px 0 00 0;margin:100px 0 0 0;"><b>Thank you<br>
							for Your attention</b></p>
                        </td> 
                    </tr>
                    
                </table><!-- middle content - 2 -->

                <table style="padding:20px 0 40px 0;margin:80px 0 50px 0;">
                    <tr>
                        <td style="width:600px;margin:0;padding:0 0 0 20px;">
                            <table>
                                <tr>
                                    <td style="font-size:12px;padding:0 0 5px 0;font-family: Arial, Helvetica, sans-serif;"><b>Address:</b> {!! $company_details->Address !!} </td>
                                </tr>    
                                <tr>
                                    <td style="font-size:12px;padding:0 0 5px 0;font-family: Arial, Helvetica, sans-serif;"><b>Phone:</b> {{ $company_details->Phone }} </td>
                                </tr>
                                <tr>
                                    <td style="font-size:12px;padding:0 0 5px 0;font-family: Arial, Helvetica, sans-serif;"><b>E-Mail:</b> {{ $company_details->Email }}</td>
                                </tr>
								<tr>
                                    <td style="font-size:12px;padding:30px 0 5px 0;color:#8cc540;font-family: Arial, Helvetica, sans-serif;"><b>http://www.greenskyaustralia.com.au/</b></td>
                                </tr>
								
                            </table>
                        </td> 
                    </tr>
                </table><!-- end top page - 1  -->
            <td>
        </tr>
    </table><!-- End of page - 1 -->

</body>
</html>

