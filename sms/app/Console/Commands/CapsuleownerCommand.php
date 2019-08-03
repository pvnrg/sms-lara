<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\CapsuleOwner;

class CapsuleownerCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'CapsuleownerCommand:capsuleownerCommand';

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
        $Url = "https://api.capsulecrm.com/api/v2/users";
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
        foreach($finalArray->users as $user){
            $data['capsule_id'] = $user->id;
            $data['name'] = $user->name;
            $data['username'] = $user->username;
            $data['status'] = $user->status;
            $user = CapsuleOwner::create($data);
        }exit;
        echo "Capsule Owners Added Successfully";
    }
}
