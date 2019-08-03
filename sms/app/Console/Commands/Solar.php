<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Solarcall;
use App\SolarCapsule;

class Solar extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Solar:solar';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add data as per solar';

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
        $password = md5('Greensky01');
        $yesterday = date('Y-m-d',strtotime("-1 days"));
        $currentday = date('Y-m-d');
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
            //curl_setopt($ch, CURLOPT_MUTE, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        //curl_setopt($ch, CURLOPT_URL, "https://www.solarquotes.com.au/webservice/supplier/SupplierService.php");
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $xmlcontent);

        $result = curl_exec($ch);
        $data['xml'] = $result;
        Solarcall::create($data);
        $xml = simplexml_load_string($result);

       
        foreach($xml->lead as $lead){
            $solarLead  = SolarCapsule::where('lead_id',$lead->id)->first();
            if($solarLead){
                if(!$solarLead->party_id){
                    $firstname = $lead->name;

                    /*
                    ** Create Party 
                    */
                    
                    $partyArray['party'] = array(
                        'type' => 'person',
                        'firstName' => (string)$firstname,
                        'lastName' => (string)$lead->lastName,
                        'emailAddresses' => array (
                            0 => array (                 
                            'address' => (string)$lead->email,
                            ),
                        ),
                        'phoneNumbers' =>  array (
                            0 => array (                 
                            'number' => (string)$lead->phone,
                            ),
                        ),
                    );
                    
                    $party = $this->curl_call("https://api.capsulecrm.com/api/v2/parties",$partyArray);
                    $party_id = $party->party->id;
                    $partyData['party_id'] = $party->party->id;
                    $solarLead->update($partyData);
                }else{
                    $party_id = $solarLead->party_id;
                }

                if(!$solarLead->opportunity_id){                    
                    $user = array(
                        'id' => 137339,
                        'username' => 'BBuxton',
                        'name' => 'Bethany Buxton'
                    );
                    $opportunityArray = array (
                        'opportunity' => array (
                            'description' => (string)$lead->leadType.' # '.$lead->features,
                            'owner' => $user,
                            'name'=> (string)$lead->name.' '.$lead->lastName,
                            'party' => array (
                              'id' => $party_id,
                            ),
                            'milestone' =>array (
                              'id' => 180643,
                            ),
                               
                        ),
                    );

                    $opportunity = $this->curl_call("https://api.capsulecrm.com/api/v2/opportunities",$opportunityArray);
                    $opportunity_id = $opportunity->opportunity->id;
                    $opportunityData['opportunity_id'] = $opportunity->opportunity->id;
                    $solarLead->update($opportunityData);
                }else{
                    $opportunity_id = $solarLead->opportunity_id;
                }

                if(!$solarLead->track_id){
                    $Url = 'https://api.capsulecrm.com/api/v2/tracks'; 
                    $NewDate=Date('Y-m-d', strtotime("+10 days"));
                    $trackArray['track'] = array(
                        'description' => (string) $lead->leadType.'#'.$lead->features,
                        'definition' => 84447,
                        'trackDateOn' => $NewDate,
                        'opportunity' => (int)$opportunity_id,					
                    );
                    $track = $this->curl_call($Url,$trackArray);
                    $trackData['track_id'] = $track->track->id;
                    $solarLead->update($trackData);
                }
            }else{
                $data['lead_id'] = $lead->id;
                $solarLead = SolarCapsule::create($data);

                /*
                ** Create Party 
                */
                $firstname = $lead->name;
                $partyArray['party'] = array(
                    'type' => 'person',
                    'firstName' => (string)$firstname,
                    'lastName' => (string)$lead->lastName,
                    'emailAddresses' => array (
                        0 => array (                 
                        'address' => (string)$lead->email,
                        ),
                    ),
                    'phoneNumbers' =>  array (
                        0 => array (                 
                        'number' => (string)$lead->phone,
                        ),
                    ),
                );
                $party = $this->curl_call("https://api.capsulecrm.com/api/v2/parties",$partyArray);
                $party_id = $party->party->id;
                if($solarLead){
                    $solarLead->party_id = $party->party->id;
                    $solarLead->save();
                }

                /*
                ** Create Opportunity 
                */
                $user = array(
                    'id' => 137339,
                    'username' => 'BBuxton',
                    'name' => 'Bethany Buxton'
                );
                
                $opportunityArray = array (
                    'opportunity' => array (
                        'description' => (string)$lead->leadType.'#'.$lead->features,
                        'owner' => $user,
                        'name'=> (string)$lead->name.' '.$lead->lastName,
                        'party' => array (
                        'id' => $party_id,
                        ),
                        'milestone' =>array (
                        'id' => 180643,
                        ),
                        
                    ),
                );

                $opportunity = $this->curl_call("https://api.capsulecrm.com/api/v2/opportunities",$opportunityArray);
                $opportunity_id = $opportunity->opportunity->id;

                if($solarLead){
                    $solarLead->opportunity_id = $opportunity_id;
                    $solarLead->save();
                }

                /**************Create a Track*******/
			    $Url = 'https://api.capsulecrm.com/api/v2/tracks';  

			  
				$NewDate=Date('Y-m-d', strtotime("+10 days"));
                $trackArray['track'] = array(
                    'description' => (string) $lead->leadType.'#'.$lead->features,
                    'definition' => 84447,
                    'trackDateOn' => $NewDate,
                    'opportunity' => (int)$opportunity_id,					
                );
               // print_r($trackArray);exit;
                $track = $this->curl_call($Url,$trackArray);
                $track_id = $track->track->id;
                if($solarLead){
                    $solarLead->track_id = $track_id;
                    $solarLead->save();
                }             

            }
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
}
