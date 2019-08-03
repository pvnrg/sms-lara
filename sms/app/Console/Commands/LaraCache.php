<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class LaraCache extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'all:cache';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cache all cache able parts';

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

        \Artisan::call('view:clear');
        \Artisan::call('config:cache');
        $this->info('..Config cached');
        \Artisan::call('route:cache');
        $this->info('..Route cached');
        \Artisan::call('debug:clear');
        \Artisan::call('cache:clear');
    }
}
