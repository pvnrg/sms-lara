<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\JobExperience;
use Session;
use Illuminate\Support\Facades\Lang;

class JobExperienceController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('permission:access.jobexperience');
        $this->middleware('permission:access.jobexperience.edit')->only(['edit', 'update']);
        $this->middleware('permission:access.jobexperience.create')->only(['create', 'store']);
        $this->middleware('permission:access.jobexperience.delete')->only('destroy');
    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        try {
            $perPage = 15;
            $jobexperience = JobExperience::paginate($perPage);
        } catch( \Exceprion $ex) {
            dd('err');
        }
        
        return view('admin.jobexperience.index', compact('jobexperience'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        $jobexperience = JobExperience::select()->pluck('name', 'id');
        return view('admin.jobexperience.create', compact('jobexperience'));
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

        $jobexperience = JobExperience::create($request->all());
        Session::flash('flash_message', __('JobExperience added!'));
        return redirect('admin/jobexperience/');
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
        $jobexperience = JobExperience::where('id',$id)->first();
       
        if($jobexperience){
            return view('admin.jobexperience.show', compact('JobExperience'));
        } else {
            return redirect('admin/jobexperience');
        }
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $jobexperience = JobExperience::where('id',$id)->first();
        if($jobexperience){
            return view('admin.jobexperience.edit', compact('jobexperience'));
        }else{
            return redirect('admin/jobexperience');
        }
    }

    /**
     * @param Request $request
     */
    public function update($id, Request $request)
    {
        $this->validate($request, ['name' => 'required']);

        $jobexperience = JobExperience::findOrFail($id);
        $jobexperience->update($request->all());

        Session::flash('flash_message', __('JobExperience updated!'));

        return redirect('admin/jobexperience');
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
        JobExperience::destroy($id);

        Session::flash('flash_message', __('JobExperience deleted!'));

        return redirect('admin/jobexperience');
    }
}
