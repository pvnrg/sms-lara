<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SolarCapsule extends Model
{
    protected $table = 'solar_capsule';
    protected $fillable = ['lead_id','party_id','opportunity_id','track_id'];
    protected $hidden = [
        'created_at', 'updated_at'
    ];
}
