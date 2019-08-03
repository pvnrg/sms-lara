<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //
    
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'city';

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
    protected $fillable = ['state_id','name','status'];
}
