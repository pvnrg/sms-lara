<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageProduct extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'package_product';

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
    protected $fillable = ['product_id', 'package_id','quantity','kw'];

    public function product(){
        return $this->hasOne('App\Product','id','product_id')->with('category');
    }
}
