<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobExperience extends Model
{
    //
    use SoftDeletes;
    //
    protected $table = 'job_experience';
    protected $fillable = [
        'id', 'name','status'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at'
    ];
}
