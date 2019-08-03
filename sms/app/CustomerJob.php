<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerJob extends Model
{
    //

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
        protected $fillable = ['customer_id','job_id'];
}
