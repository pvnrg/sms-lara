<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'settings';

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
    protected $fillable = ['name','value'];

    public static function give_value_of($name){
        
        $my_value = "";
        $setting  = Setting::get();
        
        foreach($setting as $key => $value) {
            if($value['name'] == $name)
            {
                $my_value = $value['value'];
            }
            
        }
        return $my_value;
       
    }

    
}
