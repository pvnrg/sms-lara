<?php
namespace App\Scope;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Scope;
use Session;

class GlobalWebSiteScope implements Scope
{

    protected $user = false;

    public function __construct($user = false)
    {
        $this->user = $user;
    }

    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder $builder
     * @param  \Illuminate\Database\Eloquent\Model $model
     * @return void
     */
    public function apply(Builder $builder, Model $model)
    {
       /* if (!\App::runningInConsole() && $this->user == false) {


            if (defined('_MASTER') && _MASTER == false) {
                $website_id = _WEBSITE_ID;

                $builder->where('_website_id', $website_id)->orWhere('_website_id', 0);
            }
//            $model->where('_website_id', $website_id);
//        $builder->whereHas('families', function ($query) use ($familyId) {
//            $query->where('families.id', $familyId);
//        });
//
//        if (Session::has('family_id')) {
//            $familyId = session('family_id');
//
//            $builder->whereHas('families', function ($query) use ($familyId) {
//                $query->where('families.id', $familyId);
//            });
//        }
        }*/
    }

}