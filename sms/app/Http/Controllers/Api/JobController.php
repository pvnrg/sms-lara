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
use Storage;
use Mail;
use File;
use mPDF;
use DB;

class JobController extends Controller
{
    //
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

    public function dropdownValues(Request $request){

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

            $party_type = \config('setting.party_type');
            $property_type = \config('setting.property_type');
            $capacity = \config('setting.capacity');
            $battery_type = \config('setting.battery_type');
            $type = \config('setting.type');
            $electrical_distributer = \config('setting.electrical_distributer');
            $connection_type = \config('setting.connection_type');
            $supply_required = \config('setting.supply_required');
            $inverter_service = \config('setting.inverter_service');
            $electricity_supply = \config('setting.electricity_supply');
            $customer_status = \config('setting.customer_status');
            $statuss = \config('setting.status');
            $seperate_inverter = \config('setting.seperate_inverter');

            $data = [
                'party_type' => $party_type,
                'property_type' => $property_type,
                'capacity' => $capacity,
                'battery_type' => $battery_type,
                'type' => $type,
                'electrical_distributer' => $electrical_distributer,
                'connection_type' => $connection_type,
                'supply_required' => $supply_required,
                'inverter_service' => $inverter_service,
                'electricity_supply' => $electricity_supply,
                'customer_status' => $customer_status,
                'statuss' => $statuss,
                'seperate_inverter' => $seperate_inverter,

            ];
           
            $message = "Dropdown data Found !!" ;

            
        } 
        return response()->json(['status'=>$status,'message'=>$message,'code'=> $code, 'data' => $data, 'validation' => $validation ]);  
    }


    public function jobList(Request $request)
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

            $job = Job::with('installer','customer');

            if($user->roles[0]->name == "Installers"){
                
                $job->where('installer_id',$user->id);
            }

            if ($request->has('filter') && $request->get('filter') != '') {

                if($request->get('filter') != 'All'){
                    $job->where('status', $request->get('filter'));
                }
            }

            $job = $job->get();

            $data = $this->make_null($job);
            $message = $job->count()." Jobs Found !!";
        }
        
        return response()->json(['status'=>$status,'message'=>$message,'code'=> $code, 'data' => $data ,'validation' => $validation]);
    }

    public function getJob(Request $request){

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

                $data = $this->make_null($job);
                $message = "Job Found !!" ;

            }else{

                $message = "Job not Found !!" ;
            }
        }
        
        //$request->attributes->add(['data' => 'data']);
        return response()->json(['status'=>$status,'message'=>$message,'code'=> $code, 'data' => $data, 'validation' => $validation ]); 

    }

    public function changeJobStatus(Request $request){

        $data = [];
        $validation = [];
        $message = "";
        $status = true;
        $code = 200;  

        $rules = array(
            'job_id' => 'required',
            'status'=>'required',
        );

        $messsages = array(
            'job_id.required' => __('Please enter Job id'),
            'status.required' => __('Please Select the Status'),
        );

        $validator = \Validator::make($request->all(), $rules, $messsages);

        if ($validator->fails()) {
            $validation = $validator;
            $status = false;
            $code = \Config::get('constants.responce_code.validation_failed');
            $msgArr = $validator->messages()->toArray();
            $message = reset($msgArr)[0];

        } else{

            
            $job = Job::find($request->job_id);

            if($job){

                $customer = Party::with('retailer')->find($job->customer_id);
            
                $installer = User::find($job->installer_id);

                if($request->status == "Completed" || $request->status == "Open" || $request->status == "Cancelled"  ){

                    $job->status = $request->status;
                    $job->save();
                    

                    if($job->status == "Completed"){

                        $job->completed_on = date('d-m-Y');
                        $job->save();

                        if($customer){

                        //  Warranty Files and every thign move on the customer folder. 
                            $folders = Folders::where('package_id',$job->package_id)->get();
                            
                            foreach($folders as $folder){
                                $old_file = public_path()."/package/".$folder->package_id."/".$folder->path ;
                                if(file_exists($old_file)){
                                    $new_file = public_path()."/documents/".$job->customer_id."/".$folder->path ;
                                    copy($old_file,$new_file);
                                    
                                    $cust_folder = new Folders;
                                    $cust_folder->customer_id = $job->customer_id;
                                    $cust_folder->name = $folder->name;
                                    $cust_folder->path = $folder->path;
                                    $cust_folder->save();
                                }
                                
                            }

                            //get company details
                            $company_details =  array();
                            
                            $setting  = Setting::get();
                            foreach($setting as $key => $value) {
                                $company_details[$value['name']] = $value['value'];   
                            }
                            $company_details = (object) $company_details;

                            $date = date('d-m-Y');

                            //Create EWR Form & store in Customer Folder

                            $view_ewr = view('admin.customer.pdf-EWR', compact('customer','job','installer','company_details','date'))->render();

                            $ewr_file_name = 'EWR-'.$job->id.'.pdf';
                            $ewr_path = public_path()."/documents/".$customer->id;
                            \File::makeDirectory($ewr_path, $mode = 0777, true, true);
                            $ewr_file= public_path()."/documents/".$customer->id."/".$ewr_file_name;

                            $this->save_pdf($view_ewr , $ewr_file);

                            $cust_folder_ewr = new Folders;
                            $cust_folder_ewr->customer_id = $customer->id;
                            $cust_folder_ewr->name = $ewr_file_name;
                            $cust_folder_ewr->path = $ewr_file_name;
                            $cust_folder_ewr->save();

                            //get all the documents from Customer Folder
                            $customer_folder_doc = Folders::where('customer_id',$job->customer_id)->get();
                            $docs = array(); 
                            foreach($customer_folder_doc as $document){
                                $file_path = public_path()."/documents/".$job->customer_id."/".$document->path;
                                if(File::exists($file_path)){
                                    $docs[] = Folders::find($document->id);
                                }
                            } 
                        
                        
                            //Send mail when job is completed
                            $sender_name = Setting::give_value_of('Sender_Name');
                            $sender_email = Setting::give_value_of('Sender_Email');
                            $sender_cc = Setting::give_value_of('Sender_CC');
                            $cc_array = [];
                            $cc_array = explode(',', $sender_cc);
                            $sender_bcc = Setting::give_value_of('Sender_BCC');
                            $bcc_array = [];
                            $bcc_array = explode(',', $sender_bcc);
                        
                            if($customer && $installer){
                                if($customer->email && $sender_email && $sender_name){

                                    \Mail::send('email.order.jobCompleted', compact('customer','installer','docs'), function ($message) use ($customer,$sender_email,$sender_name, $cc_array,$bcc_array, $docs) {
                                        
                                        $message->from($sender_email, $sender_name)
                                            ->to($customer->email)
                                            ->cc($cc_array)
                                            ->bcc($bcc_array)
                                            ->subject('Job Completed');
                                        foreach($docs as $doc){
                                            $message->attach(public_path()."/documents/".$customer->id."/".$doc->path);
                                        }
                                    
                                    
                                    });
                                }
                            }
                            
                            // Send mail to Provider & Retailer for Grid Form

                            $pdf = \PDF::loadHTML($view_ewr); 

                            $provider = Providers::find($customer->provider_id);
                            if($provider ){
                                if($provider->email && $sender_email && $sender_name){

                                    \Mail::send('email.order.gridform', compact('customer','provider'), function ($message) use ($customer,$provider,$sender_email,$sender_name, $cc_array,$bcc_array, $ewr_file_name, $pdf) {

                                        $subject = 'Grid Forms -'.$customer->street_number.' '.$customer->street_name.' '.$customer->suburb.' '.$customer->state.' '.$customer->post_code.' ,   '.$customer->phone_mobile; 

                                        $message->from($sender_email, $sender_name)
                                            ->to($provider->email)
                                            ->cc($cc_array)
                                            ->bcc($bcc_array)
                                            ->subject($subject)
                                            ->attachData($pdf->stream($ewr_file_name), $ewr_file_name);  
                                    
                                    });
                                }
                            }
                            
                            if($customer ){
                                if($customer->email && $sender_email && $sender_name){

                                    \Mail::send('email.order.gridform', compact('customer','provider'), function ($message) use ($customer,$provider,$sender_email,$sender_name, $cc_array,$bcc_array, $ewr_file_name, $pdf) {

                                        $subject = 'Grid Forms -'.$customer->street_number.' '.$customer->street_name.' '.$customer->suburb.' '.$customer->state.' '.$customer->post_code.' ,   '.$customer->phone_mobile; 

                                        $message->from($sender_email, $sender_name)
                                            ->to($customer->email)
                                            ->cc($cc_array)
                                            ->bcc($bcc_array)
                                            ->subject($subject)
                                            ->attachData($pdf->stream($ewr_file_name), $ewr_file_name);  
                                    
                                    });
                                }
                            }  
                        }
                    
                    }

                    $message = "Job's Status Changed Successfully !!";
                    $data = ['id'=> $job->id , 'status' => $job->status ] ;


                }else{
                    $message = " Job's status Cannot be changed !! " ;
                }

            }else{

                $message = " Job Not found !! " ;
            }

        }
        return response()->json(['status'=>$status,'message'=>$message,'code'=> $code, 'data' => $data]);

    }

    public function change_date(Request $request){
        
        $data = [];
        $validation = [];
        $message = "";
        $status = true;
        $code = 200;  
        
        $rules = array(
            'job_id'=>'required',
            'date' => 'required',
        );
        $messsages = array(
            'job_id.required' => __('Please Enter Job id'),
            'date.required' => __('Please Enter Installation Date'),
        );

        $validator = \Validator::make($request->all(), $rules, $messsages);

        if ($validator->fails()) {
            $validation = $validator;
            $status = false;
            $code = \Config::get('constants.responce_code.validation_failed');
            $msgArr = $validator->messages()->toArray();
            $message = reset($msgArr)[0];
           
        } else {
            
            $date = $request->date ;  
            $job = Job::find($request->job_id);
            

            if($job){
                $job->installation_date = $date;
                $job->save();
        
                $customer = Party::find($job->customer_id);
    
                if($customer->email){
    
                    $sender_name = Setting::give_value_of('Sender_Name');
                    $sender_email = Setting::give_value_of('Sender_Email');
                    $sender_cc = Setting::give_value_of('Sender_CC');
                    $cc_array = [];
                    $cc_array = explode(',', $sender_cc);
                    $sender_bcc = Setting::give_value_of('Sender_BCC');
                    $bcc_array = [];
                    $bcc_array = explode(',', $sender_bcc);
        
                    
                    if($customer->email && $sender_email && $sender_name){
                        \Mail::send('email.order.installationDateMail', compact('customer','date'), function ($message) use ($customer,$date,$sender_email,$sender_name, $cc_array,$bcc_array) {
                            $message->from($sender_email, $sender_name)
                                    ->to($customer->email)
                                    ->cc($cc_array)
                                    ->bcc($bcc_array)
                                    ->subject('Your Installation Date!');
                                                    
                        });
                    }
                    
                }
    
                $message = "Installation date Set Successfully";
                $data = ['job_id'=>$job->id,'installation_date' => $job->installation_date ];
            }else{
                $message = "No Job Found" ;
            }
          
        }
        return response()->json(['status'=>$status,'message'=>$message,'code'=> $code, 'data' => $data ]);   

    }

    public function updateJob(Request $request)
    {   
        $data = [];
        $message = "";
        $status = true;
        $code = 200;  

        $id = $request->job_id;
        $requestData = $request->all();

        $rules = array(
            'job_id' => 'required',
        );
        $messsages = array(
            'job_id.required' => __('Provide job_id to Update'),

        );

        $validator = \Validator::make($request->all(), $rules, $messsages);
        

        if ($validator->fails()) {
            $validation = $validator;
            $status = false;
            $code = \Config::get('constants.responce_code.validation_failed');
            $msgArr = $validator->messages()->toArray();
            $message = reset($msgArr)[0];

        }else{

            $job = Job::find($id);

            if($request->has('meter_phase') && $request->meter_phase != null ){ 
                $requestData['meter_phase'] = json_encode($request->meter_phase);
            }
            if($request->export_limit == 'No'){
                $request->export_limit_value = '' ;
            }

            $job->update($requestData);

             // get Package & Product details 
            $customer_offer = CustomerOffer::where('customer_id',$job->customer_id)
                                            ->where('offer_id',$job->offer_id)
                                            ->where('package_id',$job->package_id)->first();


            $package = json_decode($customer_offer->package_obj);

            $products = json_decode($customer_offer->product_obj);

            $customer = Party::find($job->customer_id);

            $installer = User::find($job->installer_id);

            $stc = $job->no_of_stc ; 

            $companyDetails =  array();

            $setting  = Setting::get();
            foreach($setting as $key => $value) {
            $companyDetails[$value['name']] = $value['value'];   
            }
            $companyDetails = (object) $companyDetails;

            $job_pdf = 'STC-'.$job->id.'.pdf' ;

            $find_job_pdf = Folders::where('customer_id',$job->customer_id)->where('path',$job_pdf)->first();

            if($find_job_pdf){
                if($find_job_pdf->path != null){
                    $old_file = public_path()."/documents/".$job->customer_id."/".$find_job_pdf->path;
                    if (File::exists($old_file)) {
                        unlink($old_file);
                    }
                }
                $find_job_pdf->delete();
            }

            // Electrical distributor pdf        
            $ed_pdf = $customer->electrical_distributer.'-'.$job->id.'.pdf' ;

            $find_ed_pdf = Folders::where('customer_id',$job->customer_id)->where('path',$ed_pdf)->first();

            if($find_ed_pdf){
                if($find_ed_pdf->path != null){
                    $old_file = public_path()."/documents/".$job->customer_id."/".$find_ed_pdf->path;
                    if (File::exists($old_file)) {
                        unlink($old_file);
                    }
                }
                $find_ed_pdf->delete();
            }

            $com_date = $job->completed_on ;  
            if($com_date){
                $date =  date('d-m-Y', strtotime($com_date.' +1 day') ) ;
            }else{
                $date = '';
            }

            $view = view('admin.customer.pdf-STC', compact('customer','companyDetails','stc','job','installer','package','products','date'))->render();

            $pdf = new \mPDF('utf-8', 'A4', '0', '0', 0, 0, 0, 0, 0, 0);
            $pdf->SetDisplayMode('fullpage');
            $pdf->list_indent_first_level = 0;
            $pdf->WriteHTML($view);

            $file_stc = 'STC-'.$job->id.'.pdf';
            $path = public_path()."/documents/".$customer->id;
            \File::makeDirectory($path, $mode = 0777, true, true);
            $file= public_path()."/documents/".$customer->id."/".$file_stc;
            $pdf->output($file);

            $folder = new Folders;
            $folder->customer_id = $job->customer_id;
            $folder->name = $file_stc;
            $folder->path = $file_stc;
            $folder->save();      

            // Generate PDF of Customer's Electrical Distributor 
            $pdfType = $customer->electrical_distributer;

            if($pdfType != ''  && $pdfType != null) {

                $form_no = $pdfType.'-'.$job->id ;
                $date = date('d-m-Y');

                if($pdfType == 'Jemena') {
                    $ed_view = view('admin.customer.pdf-jemna', compact('customer','companyDetails','stc','job','installer','form_no','date','package','products'))->render();
                }
                else if($pdfType == 'SP Ausnet') {
                    $ed_view =  view('admin.customer.pdf-sp-ausnet', compact('customer','companyDetails','stc','job','installer','form_no','date','package','products'))->render();
                }
                else if($pdfType == 'Citipower') {
                    $ed_view =  view('admin.customer.pdf-citipower-powercor', compact('customer','companyDetails','stc','job','installer','form_no','date' ,'package','products'))->render();

                }else if($pdfType == 'Powercor') {
                    $ed_view =  view('admin.customer.pdf-citipower-powercor', compact('customer','companyDetails','stc','job','installer','form_no','date' ,'package','products'))->render();
                }
                else {
                    //United Energy
                    $ed_view =  view('admin.customer.pdf-UE-PR', compact('customer','companyDetails','stc','job','installer','form_no','date' ,'package','products'))->render();                        
                }


                $ed_pdf = new \mPDF('utf-8', 'A4', '0', '0', 0, 0, 0, 0, 0, 0);
                $ed_pdf->SetDisplayMode('fullpage');
                $ed_pdf->list_indent_first_level = 0;
                $ed_pdf->WriteHTML($ed_view);

                $file_name = $form_no.'.pdf';
                $path = public_path()."/documents/".$job->customer_id;
                \File::makeDirectory($path, $mode = 0777, true, true);
                $ed_file = public_path()."/documents/".$job->customer_id."/".$file_name;
                $ed_pdf->output($ed_file);


                $folder = new Folders;
                $folder->customer_id = $job->customer_id;
                $folder->name = $file_name;
                $folder->path = $file_name;
                $folder->save();

            }

            $message = "Job Updated Successfully !!" ;

            $data = $this->make_null($job);
        }
        
        return response()->json(['status'=>$status,'message'=>$message,'code'=> $code, 'data' => $data]);
    }

    
}
