<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Notifications\FollowUp;
use App\Offer;
use App\Party;
use App\User;
use Carbon\Carbon;

class FollowUpMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'FollowUpMail:follow_up_mail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Follow Up Email after 3 days';

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
        $date = date('Y-m-d');


        $offers = Offer::with('customer')->where('status','Awaiting for Customer')
                    ->where('mail_counter','<','3')
                    ->where('follow_up_date','=',$date)->get();
                    
                
        if(count($offers) > 0){
            foreach($offers as $offer){
                $user = User::find($offer->created_by);
                
                if($user && $offer->customer){
                    $user->notify(new FollowUp($offer));

                    $change_offer = Offer::find($offer->id);
                    $change_offer->follow_up_date = date('Y-m-d', strtotime($change_offer->follow_up_date. ' + 3 days'));
                    $change_offer->mail_counter = $change_offer->mail_counter + 1;
                    $change_offer->mail_date = date('Y-m-d');
                    $change_offer->save();

                }
            }
            echo "Follow Up Mails are Send Successfully !!!";
            exit;
        }
        else{
            echo "There are no offers in Awaiting Status or might be Follow up Mails are sent thrice... ";
            exit;
        }         
        

    }
}
