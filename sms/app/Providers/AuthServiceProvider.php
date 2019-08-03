<?php

namespace App\Providers;

use App\Permission;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate $gate
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        parent::registerPolicies($gate);


        try {
            $masterEmail = env('MASTER_ADMIN', null);

            if (\Schema::hasTable('permissions') || auth()->check()) {
                // Dynamically register permissions with Laravel's Gate.
                foreach ($this->getPermissions() as $permission) {
                    $gate->define($permission->name, function ($user) use ($permission, $masterEmail) {

                        if (!is_null($masterEmail) && auth()->user()->email == strtolower($masterEmail)) {
                            return true;
                        }

                        return $user->hasPermission($permission);
                    });
                }
            }
        } catch (\Illuminate\Database\QueryException $ex) {
            return;
        }
    }

    /**
     * Fetch the collection of site permissions.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    protected function getPermissions()
    {
        return Permission::with('roles')->get();
    }
}
