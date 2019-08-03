<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ED extends Model
{
    //

    protected $table = 'electrical_designer';

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
    protected $fillable = ['type','name','phone','address','suburb','post_code','accredition_number'];
}
