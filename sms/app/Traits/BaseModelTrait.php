<?php
namespace App\Traits;


use App\Scope\GlobalWebSiteScope;

use Auth;

trait BaseModelTrait
{

    public static function boot()
    {
        parent::boot();

        $u = false;

        if (property_exists(self::class, 'is_user')) {
            $u = true;
        }


        self::addGlobalScope(new GlobalWebSiteScope($u));

        static::creating(function ($model) {
            //change to Auth::user() if you are using the default auth provider

            if (Auth::check()) {
                $user = Auth::user();
                $model->created_by = $user->id;
                $model->updated_by = $user->id;
            } else {
                $model->created_by = 0;
                $model->updated_by = 0;
            }

            // if (!\App::runningInConsole()) {

            //     if (!request('_website_id')) {
            //         $model->_website_id = 0;

            //     }
            // }
        });

        static::updating(function ($model) {
            //change to Auth::user() if you are using the default auth provider
            if (Auth::check()) {
                $user = Auth::user();
                $model->updated_by = $user->id;
            } else {
                $model->updated_by = 0;
            }
        });
    }


    public function created_by()
    {
        return $this->belongsTo('App\User', 'created_by', 'id');
    }


    public function updated_by()
    {
        return $this->belongsTo('App\User', 'updated_by', 'id');
    }


    // public function _website()
    // {
    //     return $this->belongsTo('App\WebSite', '_website_id', 'id');
    // }

}