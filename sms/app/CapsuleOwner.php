<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CapsuleOwner extends Model
{
    protected $table = 'capsule_owner';


    protected $fillable = [
        'id','capsule_id', 'name','username','status'
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
