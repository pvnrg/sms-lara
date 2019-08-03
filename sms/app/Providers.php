<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Providers extends Model
{
    //
    protected $table = 'providers';
    
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
    protected $fillable = ['name','email'];
}
