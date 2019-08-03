<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class LogSuccessfulLogin
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Login $event
     * @return void
     */
    public function handle(Login $event)
    {
//        todo if = 0 & _MASTER = true > can not login
//        todo if = 0 & _MASTER

//
//        $site_id = $event->user->_website_id;
//
//        if ($site_id != _WEBSITE_ID) {
//
//            if (\Auth::check()) {
//
//                \Auth::logout();
//            }


//            return response()->redirectTo('/login');


//        }

    }
}
