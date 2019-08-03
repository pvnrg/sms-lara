<?php

namespace App\Http\Controllers\Admin;

use App\Employeetypes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Hash;
use Session;
use Illuminate\Support\Facades\Lang;

class EmployeetypesController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:access.employeetypes');
        $this->middleware('permission:access.employeetypes.edit')->only(['edit', 'update']);
        $this->middleware('permission:access.employeetypes.create')->only(['create', 'store']);
        $this->middleware('permission:access.employeetypes.delete')->only('destroy');
    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        try {
            $perPage = 15;
            $employeetypes = Employeetypes::paginate($perPage);
        } catch( \Exceprion $ex) {
            dd('err');
        }
        
        return view('admin.employeetypes.index', compact('employeetypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        $employeetypes = Employeetypes::select()->pluck('name', 'id');
        return view('admin.employeetypes.create', compact('employeetypes'));
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
        $this->validate($request,
            [
            'name' => 'required|unique:employeetypes', //unique:users,email,NULL,id,deleted_at,NULL
            ]
        );

        $employeetypes = Employeetypes::create($request->all());
        Session::flash('flash_message', __('Employeetypes added!'));
        return redirect('admin/employeetypes/');
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
        $employeetypes = Employeetypes::where('id',$id)->first();
       
        if($employeetypes){
            return view('admin.employeetypes.show', compact('employeetypes'));
        } else {
            return redirect('admin/employeetypes');
        }
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $employeetypes = Employeetypes::where('id',$id)->first();
        if($employeetypes){
            return view('admin.employeetypes.edit', compact('employeetypes'));
        }else{
            return redirect('admin/employeetypes');
        }
    }

    /**
     * @param Request $request
     */
    public function update($id, Request $request)
    {
        $this->validate($request, ['name' => 'required']);

        $employeetypes = Employeetypes::findOrFail($id);
        $employeetypes->update($request->all());

        Session::flash('flash_message', __('Employeetypes updated!'));

        return redirect('admin/employeetypes');
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
        Employeetypes::destroy($id);

        Session::flash('flash_message', __('Employeetypes deleted!'));

        return redirect('admin/employeetypes');
    }

}
