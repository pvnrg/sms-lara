<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{
    protected $table = 'opportunity';


    protected $fillable = [
        'id','opp_id', 'opp_name','owner_id','closed'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public function userData(){
		return $this->hasMany('App\User','capsule_id','owner_id');
    } 
    
    public function capsuleUser(){
		return $this->hasOne('App\CapsuleOwner','capsule_id','owner_id');
	} 
}
