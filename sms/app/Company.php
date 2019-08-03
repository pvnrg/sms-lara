<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    //
    protected $table = 'company';
    protected $fillable = [
        'user_id', 'logo','name','address','country_id','state_id','city_id','specialization_id','pin_code','contact','email_address',
        'about','website','year_founded','verified'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at', 'created_by'
    ];
}
