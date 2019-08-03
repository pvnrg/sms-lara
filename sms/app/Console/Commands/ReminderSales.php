<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Setting;
use App\Party;
use App\User;
use DB;


class ReminderSales extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ReminderSales:reminder_sales';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reminder is sent to sales rep if not action within 24h';

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
        //mail details
        $sender_name = Setting::give_value_of('Sender_Name');
        $sender_email = Setting::give_value_of('Sender_Email');
        $sender_cc = Setting::give_value_of('Sender_CC');
        $cc_array = [];
        $cc_array = explode(',', $sender_cc);
        $sender_bcc = Setting::give_value_of('Sender_BCC');
        $bcc_array = [];
        $bcc_array = explode(',', $sender_bcc);

        //find sales 
        $ids = array();
        $customers  = Party::all();
        foreach($customers as $customer){
            $date = $customer->created_at->addDays(1);
            if( ( $customer->updated_at >= $date || $customer->updated_at == $customer->created_at ) && $customer->reminder == 0  ){
                $ids[] = $customer->id; 
                
            }
            
        }
        
        $customer_data = Party::with('sales')->whereIn('id',$ids)->get();

        if(count($customer_data) > 0){
            foreach($customer_data as $cust){
                $sales = User::find($cust->sales_id);
                if($sales){
                    if($sales->email && $sender_email && $sender_name){

                        $cust->reminder = 1 ;
                        $cust->save();

                        \Mail::send('email.order.reminderSales', compact('sales','cust'), function ($message) use ($sales, $sender_email,$sender_name, $cc_array,$bcc_array) {
                        $message->from($sender_email, $sender_name)
                            ->to($sales->email)
                            ->cc($cc_array)
                            ->bcc($bcc_array)
                            ->subject('Reminder');                          
                        });
   
                    }
                    
                }else{
                    echo "Assigned Sales Representative might be deleted for Customer - ".$cust->first_name." ".$cust->last_name;
                    
                }   
            }
            echo "Reminder Send to Sales Representative";
            exit;
            
        }else{
            echo "No New Sales Representative Found to Send the Reminder";
            exit;
        }

        
        
    }
}
