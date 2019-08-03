<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Party;
use App\Solarcall;
use Session;
use App\Setting;
use Mail;
use File;

class GetParty extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'GetParty:getparty';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get Party Data';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(){
       // error_reporting('ALL');
        
    //    \Artisan::call('cache:clear');

        $password = md5('Greensky01');
        $yesterday = date('Y-m-d',strtotime("-3 days"));
        $currentday = date('Y-m-d',strtotime("+1 days"));
        $xmlcontent = '<request>
        <login>PS8255</login>
        <password>'.$password.'</password>
        <startDate>'.$yesterday.'</startDate>
        <endDate>'.$currentday.'</endDate>
        </request>';

        $url = 'https://www.solarquotes.com.au/webservice/supplier/SupplierService.php';
        $ch = curl_init($url);
        $headers = array(
            'Accept: text/xml',
            'Content-Type: text/xml',

            );
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $xmlcontent);

        $result = curl_exec($ch);
        $data['xml'] = $result;
        Solarcall::create($data);
        $xml = simplexml_load_string($result);
       
        $fp = '';
        
        if($xml->errors){
            foreach($xml->errors as $error) {
                echo $error->error;
            }
        }else{

            if($xml->lead){
                $web_count = 0 ;
                $capsule_count = 0 ;
                
                foreach($xml->lead as $party_lead){
                    
                   
                    $comment_data = json_encode($party_lead);
                    $find_party = Party::where('party_id',$party_lead->id)->first();

                    if(!$find_party){
                       
                        $partyData['party_id'] = $party_lead->id;

                        $partyData['first_name'] = $party_lead->name;
                        $partyData['last_name'] = $party_lead->lastName;
                        $partyData['phone_mobile'] = $party_lead->phone;
                        $partyData['email'] = $party_lead->email;
                        $partyData['type'] = $party_lead->leadType;
                        $partyData['street_name'] = $party_lead->address;
                        $partyData['suburb'] = $party_lead->installationSuburb;
                        $partyData['state'] = $party_lead->installationState;
                        $partyData['post_code'] = $party_lead->installationPostcode;
                        $partyData['status'] = 1;
                        $partyData['party_data'] = $comment_data ;
                        $p =  Party::create($partyData);
                    
                        
                        $web_count = $web_count + 1 ;
                        
                        $my_party = Party::find($p->id);
                        
                        $parties = $my_party ;
                        


                        // Subscribe email to MailChimp
                        if($my_party->email){
                             
                            header('content-type: application/json; charset=utf-8');
                            header("access-control-allow-origin: *");
                            
                            $apiKey = env('MAILCHIMP_API_KEY');
                            $list_id = env('LIST_ID');
                            
                            $json = '{"email_address":'.$my_party->email.',"status": "subscribed"}';
                            
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
                        
                        $formated_number_mobile =  $this->phone_number_format($my_party->phone_mobile) ;
                
                        $formated_number_home =  $this->phone_number_format($my_party->phone_home) ;
      
                        // Make a array to do entry in Capsule crm 
                        $partyArray['party'] = array(
                            'type' => "person",
                            'name' => $my_party->first_name.' '.$my_party->last_name,
                            'firstName' => $my_party->first_name,
                            'lastName' => $my_party->last_name,
                            'emailAddresses' => array (
                                0 => array (                 
                                    'address' => $my_party->email,
                                ),
                            ),
                            'phoneNumbers' =>  array (
                                0 => array (  
                                    'type' => 'Mobile',               
                                    'number' => $formated_number_mobile,
                                ),
                                1 => array (  
                                    'type' => 'Home',               
                                    'number' => $formated_number_home,
                                ),
                            ),
                            'addresses' => array (
                                0 => array (                 
                                    "country" => "Australia",
                                    "street" => $my_party->unit.' '.$my_party->street_number.' '.$my_party->street_name,
                                    "state" => $my_party->state,
                                    "zip" => $my_party->post_code,
                                ),
                            ),
                        );
                        
                        

                        // Check if this array data is already there in capsule crm or not 
                        $Url = "https://api.capsulecrm.com/api/v2/parties/".$my_party->capsule_id;
                        
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
                        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
                        $result = curl_exec($ch);
                        curl_close($ch);
                        $finalArray = json_decode($result); 
                        
                        if($finalArray){
                            if(isset($finalArray->party)){
                                
                            }else{
                                
                                $res_party_data = $this->curl_call("https://api.capsulecrm.com/api/v2/parties",$partyArray);
                               
                                if(isset($res_party_data->message) && $res_party_data->message != "" ){
                                    
                                }else{
                                    $my_party->capsule_id =  $res_party_data->party->id;
                                    $my_party->save();
                                    $capsule_count = $capsule_count + 1 ; 
                                }
                            }
                        }
                        
                         //get Mail Details
                        $sender_name = Setting::give_value_of('Sender_Name');
                        $sender_email = Setting::give_value_of('Sender_Email');
                        $sender_cc = Setting::give_value_of('Sender_CC');
                        $cc_array = [];
                        $cc_array = explode(',', $sender_cc);
                        $sender_bcc = Setting::give_value_of('Sender_BCC');
                        $bcc_array = [];
                        $bcc_array = explode(',', $sender_bcc);

                        
                        if($my_party->email && $sender_email && $sender_name){
                            $to = trim($my_party->email);
                            
                            \Mail::send('email.order.contactus', compact('parties'), function ($message) use ($my_party,$sender_email,$sender_name, $cc_array, $bcc_array,$to) {
                                
                                $message->from($sender_email, $sender_name);
                                foreach($cc_array as $_ccemail) {
                                    $message->cc($_ccemail);
                                }
                                foreach($bcc_array as $_bccemail) {
                                    $message->bcc($_bccemail);
                                }
                                $message->to($to);
                                $message->subject('Contact Request!');                     
                            }); 
                            
                        }
                        
                    }else{

                        // if($find_party->customer_status == 0 && $find_party->status == 1 ){

                        //     $partyData['first_name'] = $party_lead->name;
                        //     $partyData['last_name'] = $party_lead->lastName;
                        //     $partyData['phone_mobile'] = $party_lead->phone;
                        //     $partyData['email'] = $party_lead->email;
                        //     $partyData['type'] = $party_lead->leadType;
                        //     $partyData['street_name'] = $party_lead->address;
                        //     $partyData['suburb'] = $party_lead->installationSuburb;
                        //     $partyData['state'] = $party_lead->installationState;
                        //     $partyData['post_code'] = $party_lead->installationPostcode;
                        //     $partyData['status'] = 1;
                        //     $partyData['party_data'] = $comment_data ;
                        //     $find_party->update($partyData);
                        // }
                        
                        //Subscribe email to MailChimp
                        //var_dump('dsfsdf');exit;
                        if($find_party->email){
                            
                           header('content-type: application/json; charset=utf-8');
                           header("access-control-allow-origin: *");
                           
                           $apiKey = env('MAILCHIMP_API_KEY');
                           $list_id = env('LIST_ID');
                           
                           $json = '{"email_address":'.$find_party->email.',"status": "subscribed"}';
                           
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

                    }
           
                }
                

                $fp = fopen('cron-log.html', 'a');
                fwrite($fp, '<br/>');
                fwrite($fp, '<br/>');
                fwrite($fp, 'Cron Started at :'. date("Y-m-d H:i:s"));
                fwrite($fp, '<br/>');
                fwrite($fp, 'Total Leads Created : '.$xml->lead->count().'<br/>');
                fwrite($fp, 'Total Leads Inserted in Our Website : '.$web_count.'<br/>');
                fwrite($fp, 'Total Leads Inserted in Capsule CRM : '.$capsule_count.'<br/>');
                fwrite($fp, 'Cron Ended at :'. date("Y-m-d H:i:s"));
                fclose($fp);

                echo "Parties Added Successfully </br>";
                echo "Data From : ". $yesterday . " To : ".$currentday."</br>" ;
                echo "Total Leads Found : ".$xml->lead->count()."</br>";
                echo "Total Leads Inserted in Website : ".$web_count."</br>";
                echo "Total Leads Inserted in Capsule CRM : ".$capsule_count."</br>";

            }else{

                echo "Data From : ". $yesterday . " To : ".$currentday."</br>" ;
                echo "No New Leads Found !!";

            }
            
        }   
       
    }
    
    public function phone_number_format($number) {
        
        // Allow only Digits, remove all other characters.
        $number = preg_replace("/[^\d]/","",$number);
     
        // get number length.
        $length = strlen($number);
     
        // if number = 10
        if($length == 10) {
            $number = preg_replace("/^1?(\d{3})(\d{3})(\d{4})$/", "$1-$2-$3", $number);
           
        }else{
            $number = "000-000-0000" ;
        }
      
        return $number;
 
    }

    public function curl_call($url,$postArray){
        $ch = curl_init();
        $url = $url;
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
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $output = curl_exec($ch);
        curl_close($ch); 
        $result = json_decode($output);
        return $result;
        
    }

}
