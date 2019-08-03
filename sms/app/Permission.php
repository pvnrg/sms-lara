<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model
{

    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'label', 'parent_id'];


    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);
    }


    /**
     * A permission can be applied to roles.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }


    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function child()
    {
        return $this->hasMany('App\Permission', 'parent_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo('App\Permission', 'parent_id', 'id');
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeParent($query)
    {
        return $query->where('parent_id', 0);
    }
}
