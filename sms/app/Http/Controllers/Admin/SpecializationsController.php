<?php

namespace App\Http\Controllers\Admin;

use App\Specializations;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Hash;
use Session;
use Illuminate\Support\Facades\Lang;

class SpecializationsController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:access.specializations');
        $this->middleware('permission:access.specializations.edit')->only(['edit', 'update']);
        $this->middleware('permission:access.specializations.create')->only(['create', 'store']);
        $this->middleware('permission:access.specializations.delete')->only('destroy');
    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 15;

        if (!empty($keyword)) {
            $specializations = Specializations::where('name', 'LIKE', "%$keyword%")->orWhere('label', 'LIKE', "%$keyword%")
                ->lower()->paginate($perPage);
        } else {
            $specializations = Specializations::paginate($perPage);
        }

        return view('admin.specializations.index', compact('specializations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        $specializations = Specializations::select()->pluck('name', 'id');
        return view('admin.specializations.create', compact('Specializations'));
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
            'name' => 'required|unique:specializations', //unique:users,email,NULL,id,deleted_at,NULL
            ]
        );

        $specializations = Specializations::create($request->all());
        Session::flash('flash_message', __('Specialization added!'));
        return redirect('admin/specializations/');
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
        $specialization = Specializations::where('id',$id)->first();
       
        if($specialization){
            return view('admin.specializations.show', compact('specialization'));
        } else {
            return redirect('admin/specializations');
        }
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $specialization = Specializations::where('id',$id)->first();
        if($specialization){
            return view('admin.specializations.edit', compact('specialization'));
        }else{
            return redirect('admin/specializations');
        }
    }

    /**
     * @param Request $request
     */
    public function update($id, Request $request)
    {
        $this->validate($request, ['name' => 'required']);

        $specializations = Specializations::findOrFail($id);
        $specializations->update($request->all());

        Session::flash('flash_message', __('Specialization updated!'));

        return redirect('admin/specializations');
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
        Specializations::destroy($id);

        Session::flash('flash_message', __('Specializations deleted!'));

        return redirect('admin/specializations');
    }

}
