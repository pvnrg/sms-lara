<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Party extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
     
    use SoftDeletes;
    
    protected $table = 'parties';

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
    protected $fillable = ['party_id','first_name','last_name','bussiness_name','unit','street_number','street_name','lot','post_code','state','suburb','phone_home','phone_mobile','email','image','type','property_type','single_multi','number_of_premises','number_of_units','nmi','meter_number','electrical_retailer','electrical_distributer','inverter_service','electricity_supply','seperate_inverter','deleted_at','status','customer_status','meter_phase','ABN_number','number_of_phase','reminder','provider_id','party_data','capsule_id'];

    public function folders(){

        return $this->hasMany('App\Folders','customer_id','id')->latest();
    }

    public function offer(){

        return $this->hasMany('App\Offer','customer_id','id')->latest()->with('job'); 
    }

    public function sales(){
        return $this->hasOne('App\User','id','sales_id');
    }

    public function retailer(){
        return $this->hasOne('App\Providers','id','provider_id');
    }

    public function jobs(){

        return $this->hasMany('App\Job','customer_id','id');
    }

    public function getNameAttribute(){
        $name = $this->first_name." ".$this->last_name ; 
        return $name;
    }
    
    
     public function getPartyStatusAttribute(){

        if($this->customer_status == 0){
             return "Lead" ;
        } 
         if($this->customer_status == 1){
             return "Customer" ;
        } 
         if($this->customer_status == 2){
             return "Prospect" ;
        } 
         if($this->customer_status == 3){
             return "Lost" ;
        } 
    }
}
