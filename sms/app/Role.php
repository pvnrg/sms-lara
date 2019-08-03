<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{

    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'label'];

    /**
     * A role may be given various permissions.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    public function main_permission()
    {
        return $this->belongsToMany(Permission::class)->where('parent_id', 0);
    }

    /**
     * Grant the given permission to a role.
     *
     * @param  Permission $permission
     *
     * @return mixed
     */
    public function givePermissionTo(Permission $permission)
    {
        return $this->permissions()->save($permission);
    }


    /**
     * Returns only lower roles from current
     *
     * @param $q
     * @param null $user
     * @return mixed
     */
    public function scopeLower($q, $user = null)
    {
        //done lower means higher
        if (is_null($user)) {

            if (\Auth::check()) {

                $user = \Auth::user();

                $min = $user->roles()->min('id');

            } else {

                $min = 0;

            }
        } else {
            $min = $user->roles()->min('id');
        }

        return $q->where('id', '>', $min);
    }
}
