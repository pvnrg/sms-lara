	 <table style="background:#d8d8d8;width:850px;margin:0 0 0 0;padding:10px 50px 0px 80px;">
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
				<table style="padding:0px;border-spacing:0px!important;margin:0px 0 0px 0; height:300px;">
					<tr>
                        @foreach($offer->offer_detail as  $indexKey=>$offers )
                            @php $package_obj = json_decode($offers->package_obj); 
                             $product_obj = json_decode($offers->product_obj); @endphp

						<td style="width:270px;margin:0;padding:0px 0px 0px 0px;vertical-align:top; height:120px;">
							<table style="border-spacing:0!important; background-color:#8cc540;">
								<tr>
									<td style="font-size:12px;padding:13px;line-height:20px;text-align:justify;font-family: Arial, Helvetica, sans-serif;background-color:#8cc540;border-right:1px solid #9b9b9b;">
                                        @if($product_obj[0])
											@if($product_obj[0]->brand)
												@if($product_obj[0]->brand->image != '' )
												
													@if(file_exists(public_path('brand/'.$product_obj[0]->brand->image) ))
													
														<img src="{{ asset('/brand/'.$product_obj[0]->brand->image) }}" style="width:234px;padding:5px 0px 20px 5px;font-family: Arial, Helvetica, sans-serif;height: 120px;" alt = "{{ $product_obj[0]->brand->name }}"/>
														
													@else
														<img src="{{ asset('assets/images/default.jpg') }}" style="width:234px;padding:5px 0px 20px 5px;font-family: Arial, Helvetica, sans-serif;height: 120px;"/>
			                                        @endif
										        @else
												    <img src="{{ asset('assets/images/default.jpg') }}" style="width:234px;padding:5px 0px 20px 5px;font-family: Arial, Helvetica, sans-serif;height: 120px;"/>
												@endif
											@else
												<img src="{{ asset('assets/images/default.jpg') }}" style="width:234px;padding:5px 0px 20px 5px;font-family: Arial, Helvetica, sans-serif;height: 120px;"/>
										    @endif
										@else
												<img src="{{ asset('assets/images/default.jpg') }}" style="width:234px;padding:5px 0px 20px 5px;font-family: Arial, Helvetica, sans-serif;height: 120px;"/>
										@endif
									</td>
								</tr>
								<tr>
									<td style="font-size:12px;padding:13px;line-height:20px;text-align:justify;font-family: Arial, Helvetica, sans-serif;background-color:#8cc540;border-right:1px solid #9b9b9b;height: 120px;">
                                        @if($product_obj[1])
										    @if($product_obj[1]->brand)
										        @if($product_obj[1]->brand->image != '' )
												    @if(file_exists(public_path('brand/'.$product_obj[1]->brand->image) ))
														<img src="{{ asset('/brand/'.$product_obj[1]->brand->image) }}" style="width:234px;padding:5px 0px 20px 5px;font-family: Arial, Helvetica, sans-serif;height: 120px;" alt = "{{ $product_obj[1]->brand->name }}"/>
													
											        @else
												        <img src="{{ asset('assets/images/default.jpg') }}" style="width:234px;padding:5px 0px 20px 5px;font-family: Arial, Helvetica, sans-serif; height: 120px;"/>
											      	@endif
										        @else
												    <img src="{{ asset('assets/images/default.jpg') }}" style="width:234px;padding:5px 0px 20px 5px;font-family: Arial, Helvetica, sans-serif;height: 120px;"/>
										        @endif
										    @else
												<img src="{{ asset('assets/images/default.jpg') }}" style="width:234px;padding:5px 0px 20px 5px;font-family: Arial, Helvetica, sans-serif;height: 120px;"/>
										    @endif
										@else
											<img src="{{ asset('assets/images/default.jpg') }}" style="width:234px;padding:5px 0px 20px 5px;font-family: Arial, Helvetica, sans-serif;height: 120px;"/>
										@endif

									</td>
								</tr>
							</table>
						</td> 
						@endforeach
					</tr>
				</table>

				<table style="padding:0px;border-spacing:0px!important;margin:0 0 0px 0;  height:800px;">
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
														<td colspan="2" style="text-align:left;font-size:13px;font-weight:400;padding:5px 0 0px 0;line-height:30px;font-family: Arial, Helvetica, sans-serif;"> @if($solar_arr->quantity > 1)  {{ $solar_arr->quantity }} x @endif {{ $solar_arr->name }}  </td>
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
												$price =  $package_obj->price + ($stc *  $company_details->STC_Price) ; 
												
												$price = number_format($price, 2, '.', ',');

												$stc_price = (float) $stc *  $company_details->STC_Price ;

												$stc_price = number_format($stc_price, 2, '.', ',');

												$discount_price = (float)$offers->package_discount_value ;

												$discount_price = number_format($discount_price, 2, '.', ',');

												$additional_price = number_format($offers->extra_price, 2, '.', ',');

												$all_u_pay = $package_obj->price  - $offers->package_discount_value   + $offers->extra_price ;

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
															<td style="width:130px;text-align:left;font-size:13px;font-weight:400;height: 20px;vertical-align:top;line-height:1.4;padding:0 0 10px 0;font-family: Arial, Helvetica, sans-serif;"> @if($offers->package_discount_value != 0.00) Discount from RRP @endif </td>
															<td style="width:70px;text-align:left;font-size:13px;font-weight:400;height: 20px;vertical-align:top;line-height:1.4;padding:0 0 10px 0;font-family: Arial, Helvetica, sans-serif;"> @if($offers->package_discount_value != 0.00) $ {{ $discount_price }} @endif </td>
														</tr>													
														<tr>
															<td style="width:130px;text-align:left;font-size:13px;font-weight:400;height: 20px;vertical-align:top;line-height:1.4;padding:0 0 10px 0;font-family: Arial, Helvetica, sans-serif;"> @if($offers->extra_price > 0) Additional Price @endif  </td>
															<td style="width:70px;text-align:left;font-size:13px;font-weight:400;height: 20px;vertical-align:top;line-height:1.4;padding:0 0 10px 0;font-family: Arial, Helvetica, sans-serif;">  @if($offers->extra_price > 0) $ {{ $additional_price }} @endif </td>
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

								$all_u_pay = $package_obj->price - $offers->package_discount_value + $offers->extra_price ;
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
				<table style="padding:0px;border-spacing:0px!important;margin:0 0 0px 0;">
					<tr>
						<td style="height:57px;">&nbsp;</td>
					</tr>
				</table>
				
		
			<td>
		</tr>
		
	</table><!-- End of page - 6 --> 


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
					<table style="padding:0px;border-spacing:0px!important;margin:0;">
						<tr>
							@foreach($offer->offer_detail as  $indexKey=>$offers )
								@php $package_obj = json_decode($offers->package_obj); 
								 $product_obj = json_decode($offers->product_obj); @endphp

							<td style="width:270px;margin:0;padding:0px 0px 0px 0px;vertical-align:top; ">
								<table style="border-spacing:0px!important;">
									<tr>
										<td style="font-size:12px;padding:13px;line-height:20px;text-align:justify;font-family: Arial, Helvetica, sans-serif;background-color:#8cc540;border-right:1px solid #9b9b9b;">
											@if($product_obj[0])
												@if($product_obj[0]->brand)
													@if($product_obj[0]->brand->image != '' )
													
														@if(file_exists(public_path('brand/'.$product_obj[0]->brand->image) ))
														
															<img src="{{ asset('/brand/'.$product_obj[0]->brand->image) }}" style="width:234px;padding:5px 0px 20px 5px;font-family: Arial, Helvetica, sans-serif;height: 120px;" alt = "{{ $product_obj[0]->brand->name }}"/>
														@else
															<img src="{{ asset('assets/images/default.jpg') }}" style="width:234px;padding:5px 0px 20px 5px;font-family: Arial, Helvetica, sans-serif;height: 120px;"/>
														@endif
													@else
														<img src="{{ asset('assets/images/default.jpg') }}" style="width:234px;padding:5px 0px 20px 5px;font-family: Arial, Helvetica, sans-serif;height: 120px;"/>
													@endif
												@else
													<img src="{{ asset('assets/images/default.jpg') }}" style="width:234px;padding:5px 0px 20px 5px;font-family: Arial, Helvetica, sans-serif;height: 120px;"/>
												@endif
											@else
													<img src="{{ asset('assets/images/default.jpg') }}" style="width:234px;padding:5px 0px 20px 5px;font-family: Arial, Helvetica, sans-serif;height: 120px;"/>
											@endif
										</td>
									</tr>
									<tr>
										<td style="font-size:12px;padding:13px;line-height:20px;text-align:justify;font-family: Arial, Helvetica, sans-serif;background-color:#8cc540;border-right:1px solid #9b9b9b;">
											@if($product_obj[1])
												@if($product_obj[1]->brand)
													@if($product_obj[1]->brand->image != '' )
														@if(file_exists(public_path('brand/'.$product_obj[1]->brand->image) ))
															<img src="{{ asset('/brand/'.$product_obj[1]->brand->image) }}" style="width:234px;padding:5px 0px 20px 5px;font-family: Arial, Helvetica, sans-serif;height: 120px;" alt = "{{ $product_obj[1]->brand->name }}"/>
														@else
															<img src="{{ asset('assets/images/default.jpg') }}" style="width:234px;padding:5px 0px 20px 5px;font-family: Arial, Helvetica, sans-serif; height: 120px;"/>
														  @endif
													@else
														<img src="{{ asset('assets/images/default.jpg') }}" style="width:234px;padding:5px 0px 20px 5px;font-family: Arial, Helvetica, sans-serif;height: 120px;"/>
													@endif
												@else
													<img src="{{ asset('assets/images/default.jpg') }}" style="width:234px;padding:5px 0px 20px 5px;font-family: Arial, Helvetica, sans-serif;height: 120px;"/>
												@endif
											@else
												<img src="{{ asset('assets/images/default.jpg') }}" style="width:234px;padding:5px 0px 20px 5px;font-family: Arial, Helvetica, sans-serif;height: 120px;"/>
											@endif
	
										</td>
									</tr>
								</table>
							</td> 
							@endforeach
						</tr>
					</table>
	
					<table style="padding:0px;border-spacing:0px!important;margin:0;">
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

							<td style="width:270px;margin:0;padding:0px 0px 0px 0px;vertical-align:top;border-right:1px solid #9b9b9b;background-color:#fff;">
								<table style="border-spacing:0px!important;">
									<tr>
										<td style="font-size:12px;padding:10px 0 0 0;line-height:20px;text-align:justify;font-family: Arial, Helvetica, sans-serif;">
											<table style="margin-left:10px;margin-right:10px;">
												<tr>
													<td colspan="2" style="color:#8cc540;text-align:center;font-size:16px;padding:15px 0 10px 0;vertical-align:top;font-family: Arial, Helvetica, sans-serif;"><b>{{ $package_obj->title }}  </b></td>
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
													<td colspan="2" style="text-align:left;font-size:13px;font-weight:400;padding:10px 0 0px 0;vertical-align:top;font-family: Arial, Helvetica, sans-serif;font-family: Arial, Helvetica, sans-serif;">Can produce up to <b>{{ ( $package_obj->kw * 3.6 ) /1000 }} kW/day</b></td>
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
																	<td colspan="2" style="text-align:left;font-size:13px;font-weight:400;padding:5px 0 0px 0;line-height:30px;font-family: Arial, Helvetica, sans-serif;"> @if($solar_arr->quantity > 1) x {{ $solar_arr->quantity }} @endif {{ $solar_arr->name }}  </td>
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
													<td style="height:230px;vertical-align:top;">
														<table style="vertical-align:top;height:200px;">
															<tr>
																<td style="width:130px;text-align:left;font-size:13px;font-weight:400;height: 20px;border-top:1px dotted #595959;vertical-align:top;line-height:1.4;padding:5px 0 10px 0;font-family: Arial, Helvetica, sans-serif;">Total contract </td>
																<td style="width:80px;text-align:left;font-size:13px;font-weight:400;height: 20px;border-top:1px dotted #595959;vertical-align:top;line-height:1.4;padding:5px 0 10px 0;font-family: Arial, Helvetica, sans-serif;">$ {{ $price }} </td>
															</tr>
															<tr>
																<td style="width:130px;text-align:left;font-size:13px;font-weight:400;height: 20px;vertical-align:top;line-height:1.4;padding:0 0 10px 0;font-family: Arial, Helvetica, sans-serif;">Less STC {{ $stc }} @ {{ $company_details->STC_Price }} </td>
																<td style="width:80px;text-align:left;font-size:13px;font-weight:400;height: 20px;vertical-align:top;line-height:1.4;padding:0 0 10px 0;font-family: Arial, Helvetica, sans-serif;"> $ {{ $stc_price }}
																</td>
															</tr>
														
															<tr>
																<td style="width:130px;text-align:left;font-size:13px;font-weight:400;height: 20px;vertical-align:top;line-height:1.4;padding:0 0 10px 0;font-family: Arial, Helvetica, sans-serif;"> @if($offers->package_discount_value != 0.00) Discount @endif </td>
																<td style="width:80px;text-align:left;font-size:13px;font-weight:400;height: 20px;vertical-align:top;line-height:1.4;padding:0 0 10px 0;font-family: Arial, Helvetica, sans-serif;">  @if($offers->package_discount_value != 0.00) $ {{ $discount_price }} @endif </td>
															</tr>
															<tr>
																<td style="width:130px;text-align:left;font-size:13px;font-weight:400;height: 20px;vertical-align:top;line-height:1.4;padding:0 0 10px 0;font-family: Arial, Helvetica, sans-serif;">@if($offers->extra_price > 0) Additional Price @endif  </td>
																<td style="width:80px;text-align:left;font-size:13px;font-weight:400;height: 20px;vertical-align:top;line-height:1.4;padding:0 0 10px 0;font-family: Arial, Helvetica, sans-serif;"> @if($offers->extra_price > 0) $ {{ $additional_price }} @endif </td>
															</tr>
															<tr>
																<td colspan="2" style="width:240px;text-align:left;font-size:13px;font-weight:400;vertical-align:top;line-height:2;padding:0 0 10px 0;font-family: Arial, Helvetica, sans-serif;">{{ str_limit($offers->description,30) }} </td>
															</tr>
														</table>
														<table style="vertical-align:top;height:50px;">
															<tr>
																<td style="width:130px;text-align:left;font-size:13px;font-weight:400;border-top:1px dotted #595959;vertical-align:top;line-height:1.4;padding:10px 0 5px 0;font-family: Arial, Helvetica, sans-serif;">All you pay (incl. GST)  </td>
																<td style="width:80px;text-align:left;font-size:13px;font-weight:400;border-top:1px dotted #595959;vertical-align:top;line-height:1.4;padding:10px 0 5px 0;font-family: Arial, Helvetica, sans-serif;">$ {{ $all_u_pay }}</td>
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
					
					<table style="padding:0px;border-spacing:0px!important;margin:0;">
						<tr>
							@foreach($offer->offer_detail as  $indexKey=>$offers )
								@php 
									$package_obj = json_decode($offers->package_obj); 
									$product_obj = json_decode($offers->product_obj); 
	
									$all_u_pay = $package_obj->price + $offers->extra_price ;
									$all_u_pay = number_format($all_u_pay, 2, '.', ',');
	
								@endphp
							<td style="width:270px;margin:0;padding:0px 0px 0px 0px;vertical-align:top;">
								<table style="border-spacing:0px!important;">
									<tr>
										<td style="font-size:12px;padding:0 7px 0 0;line-height:0px;text-align:justify;font-family: Arial, Helvetica, sans-serif;background-color:#595959;border-right:1px solid #9b9b9b;">
											<table style="margin-left:10px;margin-right:10px;">
												<tr>
													<td style="width:240px;color:#fff;text-align:center;font-size:26px;padding:15px 0px;line-height:30px;font-family: Arial, Helvetica, sans-serif;"><b> $ {{ $all_u_pay }}</b></td>
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
			<tr>
				<td style="height:31px;"></td>
			</tr>
			
			
			
		</table><!-- End of page - 6 --> --}}