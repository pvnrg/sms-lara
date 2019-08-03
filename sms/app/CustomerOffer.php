<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerOffer extends Model
{

    protected $table = 'customer_offer';

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
    protected $fillable = ['customer_id','offer_id','package_id','package_kw', 'package_price' , 'package_discount' , 'package_discount_value' , 'package_net_value' , 'package_obj' , 'customer_obj' , 'status' , 'approved_by', 'approval_date','extra_price','description'];

    public function product(){
        return $this->hasMany('App\PackageProduct','package_id');
    }
}
