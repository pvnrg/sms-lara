<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Package extends Model
{
    use SoftDeletes;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'packages';

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
    protected $fillable = ['id', 'title','kw', 'price','deleted_at','display_kw','number_of_phase','image','package_image'];

    public function package_product()
    {
        return $this->hasMany('App\PackageProduct','package_id','id')
        ->select('*')
        ->leftJoin('products','products.id','=','package_product.product_id');
    }
    
    public function folders(){

        return $this->hasMany('App\Folders','package_id','id')->latest();
    }
	
}
