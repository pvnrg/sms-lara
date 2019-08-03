<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Category extends Model
{
     //use SoftDeletes;
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'category';
    protected $fillable = [
        'parent_id', 'name','deleted_at','description'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at', 'created_by'
    ];
}

