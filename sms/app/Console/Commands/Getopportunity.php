<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Opportunity;
use App\User;
class Getopportunity extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Getopportunity:getopportunity';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get opportunity';

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
        $Url = "https://api.capsulecrm.com/api/v2/opportunities";
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
        //echo '<pre>';print_r($finalArray->users);exit;
        foreach($finalArray->opportunities as $user){
            $data['opp_id'] = $user->id;
            $data['opp_name'] = $user->name;
            $data['owner_id'] = $user->owner->id;
            $data['closed'] = $user->closedOn;
            //$data['status'] = $user->status;
            $opportunity = Opportunity::create($data);
        }exit;
        echo "Oppurtunities Added Successfully";
    }
}
