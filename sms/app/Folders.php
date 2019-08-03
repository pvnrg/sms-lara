<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folders extends Model
{
    //

     protected $table = 'folders';

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
    protected $fillable = ['package_id','customer_id','name','path','status'];

    
}
