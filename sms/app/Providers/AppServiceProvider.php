<?php

namespace App\Providers;

use App\WebSite;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Schema;

class AppServiceProvider extends ServiceProvider
{

    protected static $_websites = null;

    protected static $_websites_pluck = null;
 
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {   
        // URL::forceScheme('https');
        Schema::defaultStringLength(191);


        if (is_null(self::$_websites) && \Schema::hasTable('_websites')) {

            self::$_websites = WebSite::active()->get();
            self::$_websites_pluck = WebSite::select(
                \DB::raw("CONCAT(name,' | http://',domain) AS works"), 'domain', 'id')
                ->active()->pluck('domain', 'id')->prepend('Select..', '');
        }
        // Using view composer to set following variables globally
        view()->composer('*', function ($view) {
            $view->with('_websites', self::$_websites);
            $view->with('_websites_pluck', self::$_websites_pluck);

        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
