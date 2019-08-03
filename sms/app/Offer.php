<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Offer extends Model
{
    //
    use SoftDeletes;

     protected $table = 'offer';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['customer_id','status','follow_up','follow_up_date','mail_counter','created_by'];

    public function offer_detail(){
        return $this->hasMany('App\CustomerOffer')->latest();
    }

    public function customer(){
        return $this->hasOne('App\Party','id','customer_id');
    }

    public function job(){
        return $this->hasOne('App\Job','offer_id');
    }

    public function image(){
        return $this->hasMAny('App\OfferImage');
    }

}
