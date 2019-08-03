<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Party;
use App\UserStates;
use App\Package;
use App\CustomerOffer;
use App\Offer;
use App\PackageProduct;
use App\Product;
use App\Setting;
use App\User;
use App\Job;
use App\Folders;
use App\Providers;
use App\OfferImage;
use Storage;
use Mail;
use File;
use mPDF;
use DB;

class PartyController extends Controller
{   

    public function make_null($value){
        $value = $value->toArray();
        array_walk_recursive($value, function (&$item, $key) {
            $item =  $item === null ? "" : $item;
        });
        return $value;

    }

    public function save_pdf( $htmlview, $filename ){
        
        $mPdf = new mPDF('utf-8', 'A4', '0', '0', 0, 0, 0, 0, 0, 0);
        $mPdf->SetDisplayMode('fullpage');
        $mPdf->list_indent_first_level = 0;
        $mPdf->WriteHTML($htmlview);
        return $mPdf->Output($filename);

    }

    public function download_pdf( $htmlview, $filename ) {

        $pdf = PDF::loadHTML($htmlview);
        return $pdf->download($filename);
    }

    public function view_pdf( $htmlview, $filename ){

        $mPdf = new mPDF('utf-8', 'A4', '0', '0', 0, 0, 0, 0, 0, 0);
        $mPdf->SetDisplayMode('fullpage');
        $mPdf->list_indent_first_level = 0;
        $mPdf->WriteHTML($htmlview);
        return $mPdf->Output($filename, 'I');
    }


    public function AddPartyData(Request $request)
    {   
    
        if($request->party_uniqe == md5('greenskyContact123'))
		{
            $requestData = $request->all();

            $requestData['party_data'] = json_encode($requestData);
            
            $requestData['status'] = 2;
			
            $parties = Party::create($requestData);
            
            $parties->party_id = $parties->id;
            
            $parties->save();
            
            $sender_name = Setting::give_value_of('Sender_Name');
            $sender_email = Setting::give_value_of('Sender_Email');
            $sender_cc = Setting::give_value_of('Sender_CC');
            $cc_array = [];
            $cc_array = explode(',', $sender_cc);
            $sender_bcc = Setting::give_value_of('Sender_BCC');
            $bcc_array = [];
            $bcc_array = explode(',', $sender_bcc);

            if($parties->email && $sender_email && $sender_name){
                \Mail::send('email.order.contactus', compact('parties'), function ($message) use ($parties,$sender_email,$sender_name, $cc_array,$bcc_array) {
                    $message->from($sender_email, $sender_name)
                            ->to($parties->email)
                            ->cc($cc_array)
                            ->bcc($bcc_array)
                            ->subject('Contact Request!');
                                            
                });
            }
            if($parties->email){
                header('content-type: application/json; charset=utf-8');
                header("access-control-allow-origin:*");
                
                $apiKey = env('MAILCHIMP_API_KEY');
                $list_id = env('LIST_ID');
                
                $json = '{"email_address":'.$parties->email.',"status": "subscribed"}';
                
                $url = "https://us18.api.mailchimp.com/3.0/lists/".$list_id."/members/";
                
                $ch = curl_init($url);
                
                curl_setopt($ch, CURLOPT_USERPWD, 'ishan:' . $apiKey);
                curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_TIMEOUT, 10);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $json);                                                                                                                 
                $result = curl_exec($ch);
                $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                curl_close($ch);
            }

            $party = $parties ;

            // Make entry in Capsule CRM
    
            $partyArray['party'] = array(
                'type' => "person",
                'name' => $party->first_name.' '.$party->last_name,
                'firstName' => $party->first_name,
                'lastName' => $party->last_name,
                'emailAddresses' => array (
                    0 => array (                 
                        'address' => $party->email,
                    ),
                ),
                // 'phoneNumbers' =>  array (
                //     0 => array (  
                //         'type' => 'Mobile',               
                //         'number' => number_format($party->phone_mobile),
                //     ),
                //     1 => array (  
                //         'type' => 'Home',               
                //         'number' => number_format($party->phone_home),
                //     ),
                // ),
                'addresses' => array (
                    0 => array (                 
                        "country" => "Australia",
                        "street" => $party->unit.' '.$party->street_number.' '.$party->street_name,
                        "state" => $party->state,
                        "zip" => $party->post_code,
                    ),
                ),
            );
            
            $Url = "https://api.capsulecrm.com/api/v2/parties/".$party->capsule_id;
            
            $ch = curl_init();
            $headers = array(
                'Authorization: Bearer 0e7qbw0RS7kLwZb7uLjutkZZ5HpZn+M1tKuGu5sQCfRrRC2GEA3GC/Cm6Pvb3IVC',
                'Accept: application/json',
                'Content-Type: application/json',
            );
            curl_setopt($ch, CURLOPT_URL, $Url);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            // Timeout in seconds
            curl_setopt($ch, CURLOPT_TIMEOUT, 10);
            $result = curl_exec($ch);
            curl_close($ch);
            $finalArray = json_decode($result); 
            
            if($finalArray){
                if(isset($finalArray->party)){
                    // if($finalArray->party->id == $party->capsule_id){
                    //     $party_data = $this->curl_call("https://api.capsulecrm.com/api/v2/parties/".$party->capsule_id,$partyArray); 
                       
                    // }
                }else{
                    $party_data = $this->curl_call("https://api.capsulecrm.com/api/v2/parties",$partyArray);
                    if(isset($party_data->message) && $party_data->message != "" ){
                                   
                    }else{
                        $party->capsule_id =  $party_data->party->id;
                        $party->save();
                    }
                    
                }
            }

			
			return response()->json($parties, 201);
		}
		

    }

    public function curl_call($url,$postArray){
        $ch = curl_init();
        $url = $url;
        // Set URL to download
        curl_setopt($ch, CURLOPT_URL, $url);      
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST"); 
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postArray)); 
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization: Bearer 0e7qbw0RS7kLwZb7uLjutkZZ5HpZn+M1tKuGu5sQCfRrRC2GEA3GC/Cm6Pvb3IVC',
            'Content-Type: application/json',                                                                                
            'Content-Length: ' . strlen(json_encode($postArray)))                                                                       
        );
        
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Timeout in seconds
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        // Download the given URL, and return output
        $output = curl_exec($ch);
        curl_close($ch); 
        $result = json_decode($output);
        return $result;
        
    }


    public function updateCustomer(Request $request)
    {   
        $data = [];
        $message = "";
        $status = true;
        $code = 200;  

        $id = $request->customer_id;
        $requestData = $request->all();

        $rules = array(
            'customer_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'street_name' => 'required',
            'post_code' => 'required',
            'email' => 'required|email',
        );
        $messsages = array(
            'customer_id.required' => __('Provide customer_id to Update'),
            'first_name.required' => __('First Name is Required'),
            'last_name.required' => __('Last Name is Required'),
            'street_name.required' => __('Street Name is Required'),
            'post_code.required' => __('Please Enter Post Code'),
            'email.required' => __('Email is Required'),
            'email.email' => __('Please Enter the Valid Email'),
        );

        $validator = \Validator::make($request->all(), $rules, $messsages);
        

        if ($validator->fails()) {
            $validation = $validator;
            $status = false;
            $code = \Config::get('constants.responce_code.validation_failed');
            $msgArr = $validator->messages()->toArray();
            $message = reset($msgArr)[0];

        }else{

            $party = Party::find($id);
            if($request->has('meter_phase') && $request->meter_phase != null ){
                $requestData['meter_phase'] = json_encode($request->meter_phase);
            }
            $party->update($requestData);
            $message = "Customer Updated Successfully !!" ;
            $data = $this->make_null($party); 
        }
        
        return response()->json(['status'=>$status,'message'=>$message,'code'=> $code,'data'=>$data]);
    }

    public function customerList(Request $request)
    {   
        $data = [];
        $validation = [];
        $message = "";
        $status = true;
        $code = 200;  
        
        $rules = array(
			'user_id'=>'required',
        );
        $messsages = array(
            'user_id.required' => __('Please enter user id'),
        );

        $validator = \Validator::make($request->all(), $rules, $messsages);

        if ($validator->fails()) {
            $validation = $validator;
            $status = false;
            $code = \Config::get('constants.responce_code.validation_failed');
           
        } else {
            $user_id = $request->user_id;
            $user = User::find($user_id);
            $p = array();
			$perPage = 10;
            if($user){

                $party = Party::with('offer','folders','jobs','sales')->where('party_id','!=',0);

                if($user->roles[0]->name == "Sales" || $user->roles[0]->name == "Office Users" ){
                        $party->where('sales_id',$user->id);
                }
                
                if ($request->search != ''){
                        $search = $request->search;
                        $party->Where('parties.first_name', 'like', $search.'%');
                        $party->orWhere('parties.last_name', 'like', $search.'%');
                }
        
                if ($request->has('filter') && $request->get('filter') != '') {
                    if($request->get('filter') == 'all'){
                        $party = $party->where('customer_status','!=',3);    
                    }else{
                        $party->where('customer_status', $request->get('filter'));
                    }
                }

                $party = $party->paginate($perPage);
                //$party = $party->get();

                foreach($party as &$p){
                    unset($p->offer, $p->jobs, $p->folders);
                    $p->job_count = $p->jobs->count();
                    $p->offer_count = $p->offer->count();
                    $p->folder_count = $p->folders->count();

                }

                $data = $this->make_null($party);
                
            }else{
                $message = "User does not exist";
            }
        }
        
        return response()->json(['status'=>$status,'message'=>$message,'code'=> $code, 'customerList' => $data ,'validation' => $validation]);
    }

   

    public function getCustomer(Request $request){

        $data = [];
        $validation = [];
        $message = "";
        $status = true;
        $code = 200;  

        $rules = array(
			'customer_id'=>'required',
        );
        $messsages = array(
            'customer_id.required' => __('Please enter Customer id'),
        );

        $validator = \Validator::make($request->all(), $rules, $messsages);

        if ($validator->fails()) {
            $validation = $validator;
            $status = false;
            $code = \Config::get('constants.responce_code.validation_failed');
           
        } else{

            $customer = Party::find($request->customer_id);
       
            if($customer){
    
                $data = $this->make_null($customer);
                $message = "Customer Found !!" ;
    
            }else{
    
                $message = "Customer not Found !!" ;
            }

        }

        return response()->json(['status'=>$status,'message'=>$message,'code'=> $code, 'data' => $data, 'validation'=>$validation  ]); 

    }


    public function fetchPackageList(Request $request)
    {   
        $data = [];
        $validation = [];
        $message = "";
        $status = true;
        $code = 200;  

        $rules = array(
			'customer_id'=>'required',
        );
        $messsages = array(
            'customer_id.required' => __('Please enter Customer id'),
        );

        $validator = \Validator::make($request->all(), $rules, $messsages);

        if ($validator->fails()) {
            $validation = $validator;
            $status = false;
            $code = \Config::get('constants.responce_code.validation_failed');
           
        }else{
            $customer =  Party::find($request->customer_id);

            $min = $request->min;
            $max = $request->max;

                if(!$min)
                    $min = 100;
                if(!$max)
                    $max = 8000;

                if($customer){

                    $packages = Package::whereBetween('kw',[$min,$max])->where('number_of_phase',$customer->number_of_phase)->with('package_product')->get();

                    if(count($packages) > 0){
                        $data =  $this->make_null($packages);
                        $message = $packages->count()." Packages Found !!";
                    }else{
                        $message = "No Packages found in this Range";
                    }

                }else{
                    $message = "No Customer found with the given ID"; 
                }
        }
         
        return response()->json(['status'=>$status,'message'=>$message,'code'=> $code, 'data' => $data ,'validation' => $validation]);
    }    

    public function createoffer(Request $request)
    {   
        $data = [];
        $validation = [];
        $message = "";
        $status = true;
        $code = 200;  
        
        $postData = $request->all();
        $rules = array(
            'customer_id'=>'required',
            'package_JSON'=>'required',
        );
        $messsages = array(
            'customer_id.required' => __('Please enter customer id'),
            'package_JSON.required' => __('Please enter package JSON'),
        );

        $validator = \Validator::make($request->all(), $rules, $messsages);

        if ($validator->fails()) {
            $validation = $validator;
            $status = false;
            $code = \Config::get('constants.responce_code.validation_failed');
            $msgArr = $validator->messages()->toArray();
            $message = reset($msgArr)[0];

        } else {
            $id = $request->customer_id;
            $customer =  Party::find($request->customer_id);
            
            $offer = new Offer;
            $offer->customer_id = $id;
            $offer->save();

            $packages = json_decode($postData['package_JSON']);

            //Get all the files which are there in All the Packages Folders 
            // $pk_folder = Folders::whereIn('package_id',$packages)->pluck('path','id')->toArray();
            // $pk_folder = array_unique($pk_folder);
            // $pk_files = array() ;
            // foreach($pk_folder as $key => $value){
            //     $pk_files[] = Folders::find($key);
            // }
            

            foreach ($packages->data as $package){
                
                $package_obj = Package::find($package->package_id);

                $package_product = PackageProduct::where('package_id',$package_obj->id)->get();
                
                $product_obj = [];
                foreach ($package_product as $pk_pr){
                    $product_obj_a = Product::with('category','brand')->find($pk_pr->product_id);
                    $product_obj_a->quantity = $pk_pr->quantity ;
                    $product_obj[] = $product_obj_a;
                }

                $discount_value =  round($package_obj->price * ($package->discount / 100 ));
                $net_value = round($package_obj->price - $discount_value);

                $cust_offer = new CustomerOffer ;
                $cust_offer->customer_id = $id ;
                $cust_offer->offer_id =  $offer->id;
                $cust_offer->package_id = $package_obj->id ;
                $cust_offer->package_kw = $package_obj->kw ;
                $cust_offer->package_price = $package_obj->price;
                $cust_offer->extra_price = $request->extra_price ;
                $cust_offer->package_discount = $package->discount;
                $cust_offer->package_discount_value = $discount_value;
                $cust_offer->package_net_value = $net_value;
                $cust_offer->package_obj = $package_obj;
                $cust_offer->customer_obj = $customer;
                $cust_offer->product_obj = json_encode($product_obj);
                $cust_offer->description = $request->description;
                $cust_offer->save();

                //Make entry for images when offer is created
                if($request->hasFile('solar_panel_placement') && $request->solar_panel_placement != '' ){
                   
                    $image = $request->file('solar_panel_placement');         
                    $filename =  'Solar Panel Placement-'.$offer->id.'.'.$image->getClientOriginalExtension();
                    $image->move(public_path('offer/'.$offer->id), $filename);
                    
                    $offer_image = new OfferImage;
                    $offer_image->offer_id = $offer->id;
                    $offer_image->name = $filename;
                    $offer_image->path = $filename;
                    $offer_image->save();
                }
                if($request->hasFile('system_params') && $request->system_params != '' ){

                    $image = $request->file('system_params');           
                    $filename =  'System Parameters-'.$offer->id.'.'.$image->getClientOriginalExtension();
                    $image->move(public_path('offer/'.$offer->id), $filename);
                    
                    $offer_image = new OfferImage;
                    $offer_image->offer_id = $offer->id;
                    $offer_image->name = $filename;
                    $offer_image->path = $filename;
                    $offer_image->save();
                }
               
                if($request->hasFile('daily_average') && $request->daily_average != '' ){

                    $image = $request->file('daily_average');           
                    $filename =  'Average Daily Energy Output-'.$offer->id.'.'.$image->getClientOriginalExtension();
                    $image->move(public_path('offer/'.$offer->id), $filename);
                    
                    $offer_image = new OfferImage;
                    $offer_image->offer_id = $offer->id;
                    $offer_image->name = $filename;
                    $offer_image->path = $filename;
                    $offer_image->save();
                }
                

                //Send Proposal / Solar Quotation PDF
                
                $date = date('d-m-Y');
                $offer = Offer::with('offer_detail','job')->find($offer->id);
                $stc = 0;
                if($offer->job){
                    $stc = (int)$offer->job->no_of_stc ;
                }
        
                $customer = Party::with('sales','retailer')->find($offer->customer_id); 
        
                $filename = $customer->first_name."-offer-".$offer->id.".pdf";
        
                $company_details =  array();
                
                $setting  = Setting::get();
                foreach($setting as $key => $value) {
                    $company_details[$value['name']] = $value['value'];   
                }
                $company_details = (object) $company_details;
                if($company_details){
                    $company_details->STC_Price = (int)$company_details->STC_Price ;
                }
        
                //get offerImages
                $offer_img = OfferImage::where('offer_id',$offer->id)->get();
                $solar_panel_placement = '';
                $system_params = '';
                $daily_average = '';
                if(count($offer_img) > 0){
                    foreach ($offer_img as $images ){
                        if($images->name == "solar_panel_placement" && $images->path != ''){
                            $solar_panel_placement = $images->path ;
                        }
                        if($images->name == "system_params" && $images->path != ''){
                            $system_params = $images->path ;
                        }
                        if($images->name == "daily_average" && $images->path != ''){
                            $daily_average = $images->path ;
                        }
                    }
                } 

                $view = view('admin.customer.proposal',compact('offer','customer','company_details','date','stc','solar_panel_placement' , 'system_params','daily_average','offer_img' ))->render();

                $pdf = \PDF::loadHTML($view); 

                // Send mail with Attachment of QAF Form
                $sender_name = Setting::give_value_of('Sender_Name');
                $sender_email = Setting::give_value_of('Sender_Email');
                $sender_cc = Setting::give_value_of('Sender_CC');
                $cc_array = [];
                $cc_array = explode(',', $sender_cc);
                $sender_bcc = Setting::give_value_of('Sender_BCC');
                $bcc_array = [];
                $bcc_array = explode(',', $sender_bcc);
                
                if($customer->email && $sender_email && $sender_name){
                    \Mail::send('email.order.pdfMail', compact('customer'), function ($message) use ($customer , $pdf , $sender_email,$sender_name, $cc_array, $bcc_array ) { //$pk_files
                        $message->from($sender_email, $sender_name)
                            ->to($customer->email)
                            ->cc($cc_array)
                            ->bcc($bcc_array)
                            ->subject('Solar Quotation Form')
                            ->attachData($pdf->stream('Proposal.pdf'), "Proposal.pdf");   
                            // foreach($pk_files as $doc){
                            //     $message->attach(public_path()."/package/".$doc->package_id."/".$doc->path);
                            // }                          
                    });
                }

                $message = 'Customer Offer Added Successfully!';
                $data = $this->make_null($offer);
            }
        }
        return response()->json(['status'=>$status,'message'=>$message,'code'=> $code, 'data' => $data]);
    }

    public function offersList(Request $request)
    {
        
        $data = [];
        $validation = [];
        $message = "";
        $status = true;
        $code = 200;  

        $rules = array(
			'customer_id'=>'required',
        );
        $messsages = array(
            'customer_id.required' => __('Please enter Customer id'),
        );

        $validator = \Validator::make($request->all(), $rules, $messsages);

        if ($validator->fails()) {
            $validation = $validator;
            $status = false;
            $code = \Config::get('constants.responce_code.validation_failed');
           
        }else{
            $offers = Offer::with('job','offer_detail')->where('customer_id',$request->customer_id)->get();

            if(count($offers) > 0 ){

                $data = $this->make_null($offers);
                $message = $offers->count()." Offers Found !!" ;
            }else{
                $message = "No Offers found" ;
            }
        }
        
        

        return response()->json(['status'=>$status,'message'=>$message,'code'=> $code, 'data' => $data, 'validation' => $validation ]);
    }

    public function changeOfferStatus(Request $request)
    {


        $data = [];
        $validation = [];
        $message = "";
        $status = true;
        $code = 200;  

        $rules = array(
            'offer_id' => 'required',
            'status'=>'required',
        );

        $messsages = array(
            'offer_id.required' => __('Please enter Offer id'),
            'status.required' => __('Please Select the Status'),
        );

        if($request->status == "Accepted"){
            $rules = array(
                'package_id' => 'required',
            );
    
            $messsages = array(
                'package_id.required' => __('Please Select any Package'),
            );
        }

        $validator = \Validator::make($request->all(), $rules, $messsages);

        if ($validator->fails()) {
            $validation = $validator;
            $status = false;
            $code = \Config::get('constants.responce_code.validation_failed');
            $msgArr = $validator->messages()->toArray();
            $message = reset($msgArr)[0];

        } else{

        // Email details 
        $sender_name = Setting::give_value_of('Sender_Name');
        $sender_email = Setting::give_value_of('Sender_Email');
        $sender_cc = Setting::give_value_of('Sender_CC');
        $cc_array = [];
        $cc_array = explode(',', $sender_cc);
        $sender_bcc = Setting::give_value_of('Sender_BCC');
        $bcc_array = [];
        $bcc_array = explode(',', $sender_bcc);

        //Get Company details
        $companyDetails =  array();
        $setting  = Setting::get();
        foreach($setting as $key => $value) {
            if($value['name'] == 'ABN_(if_applicable)')
            {
                $companyDetails['ABN'] = $value['value'];
            }
            else
            {
                $companyDetails[$value['name']] = $value['value'];
            }        
        }
        $companyDetails = (object) $companyDetails;

            
        $offer = Offer::find($request->offer_id);

        if($offer){

            $customer = Party::find($offer->customer_id);

            if($customer){

                if($offer->status == "Awaiting for customer"){

                    if( $request->status == "Accepted" ){
                        
                        $offer->status = $request->status;
                        $offer->save();

                        $package = Package::find($request->package_id);

                        if($package){

                    
                            // Send mail to Customer when offer is accepted
                            if($customer->email && $sender_email && $sender_name){
                                \Mail::send('email.order.quoteAccept', compact('customer','package'), function ($message) use ($customer , $sender_email,$sender_name, $cc_array, $bcc_array) {
                                    $message->from($sender_email, $sender_name)
                                            ->to($customer->email)
                                            ->cc($cc_array)
                                            ->bcc($bcc_array)
                                            ->subject('Quote Accepted!');                               
                                });
                            }

                            // stc Calculation  Formula :- STC = ROUNDDOWN(1.1*14.01*[Wt]/1000,0)
                            $stc = 0;
                            $stc_value = Setting::give_value_of('STC_Index');
                            $kw = $package->kw ;
                            $stc = (int)floor( (1.1 * $stc_value * $kw)/1000  );
                            
                            $total_wt = $package->kw ;
                
                            $jobData['customer_id'] = $customer->id;
                            $jobData['offer_id'] = $offer->id;
                            $jobData['package_id'] = $package->id;
                            $jobData['meter_phase'] = $customer->meter_phase;
                            $jobData['no_of_phases'] = $customer->number_of_phase;
                            $jobData['inverter_phase'] = $customer->number_of_phase;
                            $jobData['no_of_stc'] = $stc;
                            $jobData['total_wt'] = $total_wt;
                            $jobData['solar_capacity_installed'] = $total_wt;
                            if($customer->number_of_phase == 1){
                                $jobData['solar_capacity_installed_phase_a'] = $total_wt;
                            }
                            if($customer->number_of_phase == 2){
                                $jobData['solar_capacity_installed_phase_a'] = $total_wt / $customer->number_of_phase;
                                $jobData['solar_capacity_installed_phase_b'] = $total_wt / $customer->number_of_phase;
                            }
                            if($customer->number_of_phase == 3){
                                $jobData['solar_capacity_installed_phase_a'] = $total_wt / $customer->number_of_phase;
                                $jobData['solar_capacity_installed_phase_b'] = $total_wt / $customer->number_of_phase;
                                $jobData['solar_capacity_installed_phase_c'] = $total_wt / $customer->number_of_phase;
                            }
                        
                
                            $job =  Job::create($jobData);

                            if($job){

                                // get Package & Product details 
                                $customer_offer = CustomerOffer::where('customer_id',$job->customer_id)
                                                                ->where('offer_id',$job->offer_id)
                                                                ->where('package_id',$job->package_id)->first();
                        
                        
                                $package = json_decode($customer_offer->package_obj);
                        
                                $products = json_decode($customer_offer->product_obj);
                                        
                                $installer = User::find($job->installer_id);

                                // Date field: Job completion date + 1 day  when- job is completed
                                $date = '';

                        
                                // Add Job's stc form in Customer folder
                                $view_stc = view('admin.customer.pdf-STC', compact('customer','companyDetails','stc','job','installer','package','products','date'))->render();
                        
                        
                                $stc_file_name = 'STC-'.$job->id.'.pdf';
                                $stc_path = public_path()."/documents/".$customer->id;
                                \File::makeDirectory($stc_path, $mode = 0777, true, true);
                                $stc_file= public_path()."/documents/".$customer->id."/".$stc_file_name;
                        
                                $this->save_pdf($view_stc , $stc_file);
                                        
                                $folder_stc = new Folders;
                                $folder_stc->customer_id = $customer->id;
                                $folder_stc->name = $stc_file_name;
                                $folder_stc->path = $stc_file_name;
                                $folder_stc->save();
                        
                                // Generate PDF of Customer's Electrical Distributor & send in Mail
                                $pdfType = $customer->electrical_distributer;
                        
                                if($pdfType != ''  && $pdfType != null) {
                        
                                    $form_no = $pdfType.'-'.$job->id ;
                                    $date = date('d-m-Y');
                        
                                    if($pdfType == 'Jemena') {
                                        $view = view('admin.customer.pdf-jemna', compact('customer','companyDetails','stc','job','installer','form_no','date','package','products'))->render();
                                    }
                                    else if($pdfType == 'SP Ausnet') {
                                        $view =  view('admin.customer.pdf-sp-ausnet', compact('customer','companyDetails','stc','job','installer','form_no','date','package','products'))->render();
                                    }
                                    else if($pdfType == 'Citipower Powercor') {
                                        $view =  view('admin.customer.pdf-citipower-powercor', compact('customer','companyDetails','stc','job','installer','form_no','date' ,'package','products'))->render();
                                    }
                                    else {
                                        //United Energy
                                        $view =  view('admin.customer.pdf-UE-PR', compact('customer','companyDetails','stc','job','installer','form_no','date' ,'package','products'))->render();        
                                    }
                        
                                    $file_name = $form_no.'.pdf';
                                    $path = public_path()."/documents/".$customer->id;
                                    \File::makeDirectory($path, $mode = 0777, true, true);
                                    $file = public_path()."/documents/".$customer->id."/".$file_name;
                                        
                                    $this->save_pdf($view , $file);
                        
                                    $folder = new Folders;
                                    $folder->customer_id = $customer->id;
                                    $folder->name = $file_name;
                                    $folder->path = $file_name;
                                    $folder->save();
                                
                                }

                                $message = "Offer is Accepted." ;
                        
                            } 
                        
                        }else{

                            $message = "Package not Found" ; 
                        }
                    
                    }else if($request->status == "Declined"){

                        $offer->status = $request->status;
                        $offer->save();

                        // Send Mail to Customer when offer is Declined
                        if($customer->email && $sender_email && $sender_name){
                            \Mail::send('email.order.quoteDeclined', compact('customer'), function ($message) use ($customer , $sender_email,$sender_name, $cc_array, $bcc_array) {
                                $message->from($sender_email, $sender_name)
                                    ->to($customer->email)
                                    ->cc($cc_array)
                                    ->bcc($bcc_array)
                                    ->subject('Quote Declined!');                               
                            });
                        }

                        $message = "Offer is Declined" ;

                    }else{

                        $message = " Offer Status Cannot be change. " ;

                    }

                }else{

                    $message = " Offer is already ". $offer->status ;
                }

            }else{
                $message = " Customer Not found !! " ;
            }

        }else{

            $message = " Offer Not found !! " ;
        }

        }
        return response()->json(['status'=>$status,'message'=>$message,'code'=> $code, 'data' => $data]);
    }


    public function changeMode(Request $request){

        $data = [];
        $validation = [];
        $message = "";
        $status = true;
        $code = 200; 
        
        $rules = array(
			'job_id'=>'required',
        );
        $messsages = array(
            'job_id.required' => __('Please enter Job id'),
        );

        $validator = \Validator::make($request->all(), $rules, $messsages);

        if ($validator->fails()) {
            $validation = $validator;
            $status = false;
            $code = \Config::get('constants.responce_code.validation_failed');
           
        }else{
            $job = Job::find($request->job_id);

            if($job){

                if($request->mode == "Deposit" || $request->mode == "Finance" || $request->mode == "Not Completed" ) {

                    $job->deposit_or_finance = $request->mode ;
                    $job->save();

                    $message = "The finance mode Changed Successfully !!" ;
                    
                }else{

                    $message = "The finance mode cannot be changed !!" ; 
                }

            }else{

                $message = "Job not Found !!" ;
            }
        }
        


        return response()->json(['status'=>$status,'message'=>$message,'code'=> $code, 'data' => $data , 'validation' => $validation  ]);
    }


    public function offerDetail(Request $request){

        $data = [];
        $validation = [];
        $message = "";
        $status = true;
        $code = 200;  

        $rules = array(
			'offer_id'=>'required',
        );
        $messsages = array(
            'offer_id.required' => __('Please enter Offer id'),
        );

        $validator = \Validator::make($request->all(), $rules, $messsages);

        if ($validator->fails()) {
            $validation = $validator;
            $status = false;
            $code = \Config::get('constants.responce_code.validation_failed');
           
        }else{
            $offer = Offer::with('offer_detail')->find($request->offer_id);

            if($offer){

                $packages = [];
                $packages = $offer->offer_detail ;
                $data = $this->make_null($packages) ;

            }else{

                $message = "Offer not Found !!" ;
            }
        }
        
        

        return response()->json(['status'=>$status,'message'=>$message,'code'=> $code, 'data' => $data , 'validation' => $validation]);

    }

    public function deleteOffer(Request $request){

        $data = [];
        $validation = [];
        $message = "";
        $status = true;
        $code = 200;  

        $rules = array(
			'offer_id'=>'required',
        );
        $messsages = array(
            'offer_id.required' => __('Please enter Offer id'),
        );

        $validator = \Validator::make($request->all(), $rules, $messsages);

        if ($validator->fails()) {
            $validation = $validator;
            $status = false;
            $code = \Config::get('constants.responce_code.validation_failed');
           
        }else{
            $offer = Offer::find($request->offer_id);
       
            if($offer){

                $offer->delete();
                $message = "Offer Deleted Successfully !!" ;

            }else{

                $message = "Offer not Found !!" ;
            }
        }
        
        

        return response()->json(['status'=>$status,'message'=>$message,'code'=> $code, 'data' => $data,'validation' => $validation]);

    }

    public function addfile(Request $request){
        
        $data = [];
        $validation = [];
        $message = "";
        $status = true;
        $code = 200;  

        
        $rules = array(
            'customer_id' => 'required',
            'document'=>'required',
        );

        $messsages = array(
            'customer_id.required' => __('Please Enter Customer id'),
            'document.required' => __('Please Select any Document'),
        );


        $validator = \Validator::make($request->all(), $rules, $messsages);

        if ($validator->fails()) {
            $validation = $validator;
            $status = false;
            $code = \Config::get('constants.responce_code.validation_failed');
            $msgArr = $validator->messages()->toArray();
            $message = reset($msgArr)[0];

        }else{

            $customer = Party::find($request->customer_id);

            if($customer){

                if ( $request->hasFile('document') ) {
                    
                    $documents = $request->file('document');

                    foreach ($documents as $document){
                    
                        $filename = uniqid(time()) . '.' . $document->getClientOriginalExtension();
                        $path = public_path()."/documents/".$customer->id;
                        \File::makeDirectory($path, $mode = 0777, true, true);
                        $document->move(public_path('documents/'.$customer->id), $filename);

                        $folder = new Folders;
                        $folder->customer_id = $customer->id;
                        if($request->has('name')){
                            $folder->name = $request->name.'.'.$document->getClientOriginalExtension();
                        }
                        else{
                            $folder->name = $filename;
                        }
                        $folder->path = $filename;
                        $folder->save();
                    } 
                    
                    $message = "Files Added Successfully !!" ; 
        
                }   

            }else{

                $message = "Customer Not Found !!" ;
            }

        }

        return response()->json(['status'=>$status,'message'=>$message,'code'=> $code, 'data' => $data]);
            
    }

    public function folderList(Request $request)
    {
        
        $data = [];
        $validation = [];
        $message = "";
        $status = true;
        $code = 200;  

        $rules = array(
			'customer_id'=>'required',
        );
        $messsages = array(
            'customer_id.required' => __('Please enter Customer id'),
        );

        $validator = \Validator::make($request->all(), $rules, $messsages);

        if ($validator->fails()) {
            $validation = $validator;
            $status = false;
            $code = \Config::get('constants.responce_code.validation_failed');
           
        }else{
            $customer = Party::find($request->customer_id);

            if($customer){

                $files = Folders::select('folders.*', DB::raw('(CASE WHEN folders.path != "" THEN CONCAT( "'.url('').'",CONCAT("/documents/'.$customer->id.'/"),folders.path) ELSE "'.url('/assets/images/avatar.jpg').'" END) AS file_path'))->where('customer_id',$customer->id)->get();

                if(count($files) > 0){

                    $data = $this->make_null($files) ;
                    $message =  $files->count(). " Files Found !!" ;

                }else{
                    $message = "No Files found" ; 
                }

            }else{
                $message = "No Customer found" ; 
            }
        }
        


        return response()->json(['status'=>$status,'message'=>$message,'code'=> $code, 'data' => $data, 'validation' => $validation ]);
    }

    public function getProviders(Request $request){

        $data = [];
        $validation = [];
        $message = "";
        $status = true;
        $code = 200;  

        $rules = array(
			//'job_id'=>'required',
        );
        $messsages = array(
            //'job_id.required' => __('Please enter Job id'),
        );

        $validator = \Validator::make($request->all(), $rules, $messsages);

        if ($validator->fails()) {
            $validation = $validator;
            $status = false;
            $code = \Config::get('constants.responce_code.validation_failed');
           
        }else{
            $providers = Providers::all();
       
            if($providers){

                $data = $this->make_null($providers);
                $message = "Providers Found !!" ;

            }else{

                $message = "Job not Found !!" ;
            }
        } 
        return response()->json(['status'=>$status,'message'=>$message,'code'=> $code, 'data' => $data, 'validation' => $validation ]); 

    }
    



}
