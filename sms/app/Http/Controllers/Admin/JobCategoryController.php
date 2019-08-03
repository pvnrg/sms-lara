<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\JobCategory;
use Session;
use Illuminate\Support\Facades\Lang;


class JobCategoryController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('permission:access.jobcategory');
        $this->middleware('permission:access.jobcategory.edit')->only(['edit', 'update']);
        $this->middleware('permission:access.jobcategory.create')->only(['create', 'store']);
        $this->middleware('permission:access.jobcategory.delete')->only('destroy');
    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        try {
            $perPage = 15;
            $jobcategory = JobCategory::paginate($perPage);
        } catch( \Exceprion $ex) {
            dd('err');
        }
        
        return view('admin.jobcategory.index', compact('jobcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        $jobcategory = JobCategory::select()->pluck('name', 'id');
        return view('admin.jobcategory.create', compact('jobcategory'));
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

        $jobcategory = JobCategory::create($request->all());
        Session::flash('flash_message', __('JobCategory added!'));
        return redirect('admin/jobcategory/');
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
        $jobcategory = JobCategory::where('id',$id)->first();
       
        if($jobcategory){
            return view('admin.jobcategory.show', compact('jobcategory'));
        } else {
            return redirect('admin/jobcategory');
        }
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $jobcategory = JobCategory::where('id',$id)->first();
        if($jobcategory){
            return view('admin.jobcategory.edit', compact('jobcategory'));
        }else{
            return redirect('admin/jobcategory');
        }
    }

    /**
     * @param Request $request
     */
    public function update($id, Request $request)
    {
        $this->validate($request, ['name' => 'required']);

        $jobcategory = JobCategory::findOrFail($id);
        $jobcategory->update($request->all());

        Session::flash('flash_message', __('JobCategory updated!'));

        return redirect('admin/jobcategory');
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
        JobCategory::destroy($id);

        Session::flash('flash_message', __('JobCategory deleted!'));

        return redirect('admin/jobcategory');
    }
}
