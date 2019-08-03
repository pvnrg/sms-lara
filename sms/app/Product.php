<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Product extends Model
{
     use SoftDeletes;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';

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
    protected $fillable = ['id', 'name', 'description','shortdesc','price','sale_price', 'image','category_id','status','deleted_at', 'type', 'brand','model','series','rated_power_output','ac_power_rating','solar_dc_rating','battery_rated_storage_capacity','battery_type','approved_inverter','export_limit','sop3306_compliant','as4777_compliant','capacity','certifying_authority_certificate_number','inverter_phase','capacity_phase_a','capacity_phase_b','capacity_phase_c','product_capacity','no_of_phases','brand_id'];
    
    public function category(){
		return $this->belongsTo('App\Category');
  } 
  
  public function brand(){
		return $this->belongsTo('App\Brand');
	} 
}
