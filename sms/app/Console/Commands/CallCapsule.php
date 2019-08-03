<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Party;

class CallCapsule extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'CallCapsule:callcapsule';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make Entry of All the Parties from our Website to Capsule CRM ';

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
    public function handle()
    {   

        $yesterday = date('Y-m-d',strtotime("-3 days"));
        $currentday = date('Y-m-d',strtotime("+1 days"));
           // get all the Parties from our website
            $parties = Party::whereBetween('created_at',[$yesterday , $currentday ])->get();
            
        $capsule_count = 0 ;
            foreach($parties as $party){
                
                $formated_number_mobile =  $this->phone_number_format($party->phone_mobile) ;
                
                 $formated_number_home =  $this->phone_number_format($party->phone_home) ;
               
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
                                "street" => $party->unit.' '.$party->street_number.' '.$party->street_name,
                                "state" => $party->state,
                                "zip" => $party->post_code,
                            ),
                        ),
                        
                        'comments' => array (
                            0 => array(
                                "Additional Data" => $party->party_data,
                                ) ,   
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
                            
                        }else{
                            $party_data = $this->curl_call("https://api.capsulecrm.com/api/v2/parties",$partyArray);
                            if(isset($party_data->message) && $party_data->message != "" ){
                                
                            }else{
                                $party->capsule_id =  $party_data->party->id;
                                $party->save();
                                $capsule_count = $capsule_count + 1;
                            }
                            
                        }
                    }
                        
            }   
            
            echo "Parties Added Successfully !!! </br>";
            echo "Data From : ". $yesterday . " To : ".$currentday."</br>" ;
            echo "Total Parties Found : ".$parties->count()."</br>";
            echo "Total Parties Inserted in Capsule CRM : ".$capsule_count."</br>";
        
        
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
}

/*  Array Format of Party Array 

// Type - Organisation
{
    "party": {
        "id": 100,
        "type": "organisation",
        "about": null,
        "name": "Acme",
        "createdAt": "2015-11-30T16:20:05Z",
        "updatedAt": "2015-11-30T16:20:05Z",
        "lastContactedAt": null,
        "pictureURL": "https://capsulecrm.com/theme/default/images/org_avatar_70.png",
        "addresses": [],
        "phoneNumbers": [],
        "websites": [],
        "emailAddresses": []
    }
}
Type - Person
 3 => {#1414 ▼
      +"id": 43643395
      +"owner": null
      +"type": "person"
      +"about": null
      +"title": null
      +"firstName": null
      +"lastName": "Ryan Ly"
      +"jobTitle": null
      +"createdAt": "2013-07-12T02:46:04Z"
      +"updatedAt": "2016-08-23T04:35:09Z"
      +"organisation": null
      +"lastContactedAt": "2016-08-23T04:35:09Z"
      +"pictureURL": "https://facehub.appspot.com/default/person?text=R&size=100"
      +"phoneNumbers": array:1 [▼
        0 => {#1415 ▼
          +"id": 83606612
          +"type": "Mobile"
          +"number": "0421753663"
        }
      ]
      +"addresses": array:1 [▼
        0 => {#1416 ▼
          +"id": 83606613
          +"type": "Postal"
          +"city": "DERRIMUT"
          +"country": "Australia"
          +"street": "4 Appleby Loop"
          +"state": "VIC"
          +"zip": "3030"
        }
      ]
      +"emailAddresses": array:1 [▼
        0 => {#1417 ▼
          +"id": 83606611
          +"type": null
          +"address": "ryanly1984@gmail.com"
        }
      ]
      +"websites": []
    }

*/
