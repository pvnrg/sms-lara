<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class LaraClear extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'all:clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cache all cache';

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

        \Artisan::call('view:clear');
        $this->info('..View cleared');

        \Artisan::call('config:clear');
        $this->info('..Config cleared');

        \Artisan::call('debug:clear');
        $this->info('..Debug cleared');

        \Artisan::call('cache:clear');
        $this->info('..Cache cleared');

        \Artisan::call('route:clear');
        $this->info('..Route cleared');

    }
}
