<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Permission;
use App\Role;
use App\User;
use Session;

class AdminController extends Controller
{
    public function index()
    {
        // $users = User::all();
        // return view('admin.users.index',compact('users'));
        return redirect('/admin/users');
    }

    /**
     * Display given permissions to role.
     *
     * @return void
     */
    public function getGiveRolePermissions()
    {
        $roles = Role::with('permissions')->get();
//        return $roles;
        $permissions = Permission::with('child')->parent()->get();

        return view('admin.permissions.role-give-permissions', compact('roles', 'permissions'));
    }

    /**
     * Store given permissions to role.
     * 
     * @param  \Illuminate\Http\Request $request
     *
     * @return void
     */
    public function postGiveRolePermissions(Request $request)
    {
        $this->validate($request, ['role' => 'required', 'permissions' => 'required']);

        $role = Role::with('permissions')->whereName($request->role)->first();
        $role->permissions()->detach();

        foreach ($request->permissions as $permission_name) {
            $permission = Permission::whereName($permission_name)->first();
            $role->givePermissionTo($permission);
        }

        Session::flash('flash_message', _('Permission granted!'));

        return redirect('admin/roles');
    }
}
