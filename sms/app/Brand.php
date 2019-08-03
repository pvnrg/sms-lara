<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Brand extends Model
{
     //use SoftDeletes;
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
      protected $table = 'brand';
    protected $fillable = [
         'name','image' ,'deleted_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at'
    ];
}

