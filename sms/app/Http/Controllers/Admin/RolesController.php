<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Role;
use DebugBar\DebugBar;
use Illuminate\Http\Request;
use Session;
use App\Permission;

class RolesController extends Controller
{


    public function __construct()
    {
        $this->middleware('permission:access.roles');
        $this->middleware('permission:access.role.edit')->only(['edit', 'update']);
        $this->middleware('permission:access.role.create')->only(['create', 'store']);
        $this->middleware('permission:access.role.delete')->only('destroy');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 15;

        if (!empty($keyword)) {
            $roles = Role::where('name', 'LIKE', "%$keyword%")->orWhere('label', 'LIKE', "%$keyword%")
                ->lower()->paginate($perPage);
        } else {
            $roles = Role::paginate($perPage);
        }

        return view('admin.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        $permissions = Permission::with('child')->parent()->get();

        $isChecked = function ($name) {
            return '';
        };

        return view('admin.roles.create', compact('permissions', 'isChecked'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required', 'permissions' => 'required']);
        $role = Role::create($request->all());
        $role->permissions()->detach();
        foreach ($request->permissions as $permission_name) {
            $permission = Permission::whereName($permission_name)->first();
            $role->givePermissionTo($permission);
        }
        Session::flash('flash_message', __('Role added!'));

        return redirect('admin/roles/' . $role->id . '/edit');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return void
     */
    public function show($id)
    {
        $role = Role::with('main_permission.child')->where('id',$id)->first();//findOrFail($id);
        if($role) {  
            $permissions = Permission::with('child')->parent()->get();
            return view('admin.roles.show', compact('role', 'permissions'));
        } else {
            return redirect('admin/roles');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return void
     */
    public function edit($id)
    {
        $role = Role::with('permissions')->where('id',$id)->first();
        if($role){
            $permissions = Permission::with('child')->parent()->get();
            $isChecked = function ($name) use ($role) {
                if ($role->permissions->contains('name', $name)) {
                    return 'checked';
                }
                return '';
            };
            return view('admin.roles.edit', compact('role', 'permissions', 'isChecked'));
        }else{
            return redirect('admin/roles');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @param  \Illuminate\Http\Request $request
     *
     * @return void
     */
    public function update($id, Request $request)
    {
        $this->validate($request, ['name' => 'required', 'permissions' => 'required']);

        $role = Role::findOrFail($id);
        $role->update($request->all());

        $role->permissions()->detach();

        foreach ($request->permissions as $permission_name) {
            $permission = Permission::whereName($permission_name)->first();
            $role->givePermissionTo($permission);
        }


        Session::flash('flash_message', __('Role updated!'));

        return redirect('admin/roles/' . $id . '/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return void
     */
    public function destroy($id)
    {
        Role::whereId($id)->lower()->delete();

        Session::flash('flash_message', __('Role deleted!'));

        return redirect('admin/roles');
    }
}
