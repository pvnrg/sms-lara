<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solarcall extends Model
{
    protected $table = 'solarcall';
    protected $fillable = ['xml'];
    protected $hidden = [
        'created_at', 'updated_at'
    ];
}
