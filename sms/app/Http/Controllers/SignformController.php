<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Offer;
use App\Party;
use App\Job;
use DB;
use App\Setting;

class SignformController extends Controller
{

    public function sign_form(Request $request,$id){
        
        
        $offer = Offer::with('offer_detail','image','job')->where(DB::raw('md5(id)'), $id)->first();
     
    
        if($offer){
        $customer = Party::with('sales')->find($offer->customer_id);
        
        if($request->has('submit') && $request->submit != ''){
           
           $offer->package_id = $request->package ;
           $offer->customer_sign = $request->sign ;
           $offer->sign = 1 ;
           $offer->sign_date = date('d-m-Y');
           $offer->ip = $request->ip() ;
           $offer->latitude = $request->lat ;
           $offer->longitude = $request->long ;
           $offer->save();
           
           if($request->has('nmi') && $request->nmi != ''){
               $customer->nmi = $request->nmi ;
               $customer->save();
           }
           if($request->has('meter_number') && $request->meter_number != ''){
               $customer->meter_number = $request->meter_number ;
               $customer->save();
           }
           
           $to_email = Setting::give_value_of('Sender_Email');
           \Mail::send('email.order.notify-admin', compact('customer','offer'), function ($message) use ($customer,$to_email ) {
                $message->to($to_email)->subject("Offer Signed By Customer");
            });
           
          
           
        }
        
        return view('email.order.sign-form',compact('offer','customer'));
        
        }else{
            
        }
        
        
    }
    
    public function form_submit(){
        return view('email.order.form-submit');
    }
    
    public function complete_sign_form(Request $request, $id){
        
        $job = Job::where(DB::raw('md5(id)'), $id)->first();
        
        if($job){
            $customer = Party::with('sales')->find($job->customer_id);
            
             if($request->has('submit') && $request->submit != ''){
               
               
                $job->customer_sign = $request->sign ;
                $job->sign = 1 ;
                $job->sign_date = date('d-m-Y');
                $job->ip = $request->ip() ;
                $job->latitude = $request->lat ;
                $job->longitude = $request->long ;
                $job->save();
                
                if($request->has('nmi') && $request->nmi != ''){
                   $customer->nmi = $request->nmi ;
                   $customer->save();
               }
               if($request->has('meter_number') && $request->meter_number != ''){
                   $customer->meter_number = $request->meter_number ;
                   $customer->save();
               }
               
               return redirect('/form-submit');
            }
            
            if($job->sign == 1){
                return redirect('/form-submit');
            }
            
             return view('email.order.complete-sign-form',compact('job','customer'));
        }else{
           // return redirect()->back();
        }
        
    }
}
