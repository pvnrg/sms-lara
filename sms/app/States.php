<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class States extends Model
{
    //

     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'state';

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
    protected $fillable = ['country_id','name','status'];
}
