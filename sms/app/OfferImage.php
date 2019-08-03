<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfferImage extends Model
{
    //

    protected $table = 'offer_image';

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
    protected $fillable = ['offer_id','name','path'];
}
