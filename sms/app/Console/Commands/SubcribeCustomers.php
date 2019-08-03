<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SubcribeCustomers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'SubcribeCustomers:subscribe_customers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        //
        header('content-type: application/json; charset=utf-8');
        header("access-control-allow-origin: *");
        
        $apiKey = "fc09585e3cbea79382dde7d8b02fc423-us18"; //env('MAILCHIMP_API_KEY')
        $list_id = "f448b7a0ed" ; //env('LIST_ID')
        
        $json = '{"email_address": "harsh.shah@citrusbug.com","status": "subscribed"}';
        
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
        
        
        $jsonArray = json_decode($result, true);
        
        $status = '';
        $call_status = "FALSE";
        $message = "Error in getting data";
        if (array_key_exists('status',$jsonArray)) {
            $status = $jsonArray['status'];
            
            if ($status == "subscribed") {
                $call_status = "TRUE";
                $message = "Subscribed successfully";
                
            } else {
                $message = $jsonArray['title'];	
            }
            
        }
        
        $finalArray['STATUS'] = $call_status;
        $finalArray['MESSAGE'] = $message;
        echo json_encode($finalArray);
    }
}
