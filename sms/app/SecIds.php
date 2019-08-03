<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SecIds extends Model
{

    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','name','description'];


    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
    }

}
