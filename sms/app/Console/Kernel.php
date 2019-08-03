<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        'App\Console\Commands\LaraCache',
        'App\Console\Commands\LaraClear',
        'App\Console\Commands\CapsuleownerCommand',
        'App\Console\Commands\Getopportunity',
        'App\Console\Commands\Solar',
        'App\Console\Commands\GetParty',
        'App\Console\Commands\FollowUpMail',
        'App\Console\Commands\ReminderSales',
        'App\Console\Commands\CallCapsule',
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
        $schedule->command('Solar:solar')->cron('0 */2 * * *')->emailOutputTo('ashvini.citrusbug@gmail.com');
        $schedule->command('FollowUpMail:follow_up_mail')->daily();
        $schedule->command('ReminderSales:reminder_sales')->daily();
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
