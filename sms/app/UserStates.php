<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserStates extends Model
{
    //

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_states';

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
    protected $fillable = ['user_id','state_id'];


    public function states(){
        return $this->belongsTo('App\States','state_id');
    }

    public function state_name(){
        return $this->hasOne('App\States','code','state_id');
    }
}
