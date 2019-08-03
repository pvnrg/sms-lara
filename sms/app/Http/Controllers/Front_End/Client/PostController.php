<?php

namespace App\Http\Controllers\Front_End\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Job;
use Auth;
use App\JobCategory;
use App\JobExperience;
use App\Employeetypes;
use App\Skills;
use Session;

class PostController extends Controller
{
    //

    public function index(Request $request)
    {
        $employeetypes = Employeetypes::where('status',1)->get();
        $employeetypes = $employeetypes->pluck('name', 'id')->prepend('--Select employee type--','');

        $jobexperience = JobExperience::where('status',1)->get();
        $jobexperience = $jobexperience->pluck('name', 'id')->prepend('--Select job experience--','');

        $jobcategory = JobCategory::where('status',1)->get();
        $jobcategory = $jobcategory->pluck('name', 'id')->prepend('--Select job category--','');

        $skills=Skills::where('status',1)->get();
       

        return view('front-end.client.post_job',compact('employeetypes','jobexperience','jobcategory','skills'));

    }

    public function post_job(Request $request)
    {
      
        $this->validate($request,
        [
        'title' => 'required',
        'description' => 'required', //unique:users,email,NULL,id,deleted_at,NULL
        'perks&benifits' => 'required',
        'skills' => 'required',
        'job_category_id' => 'required',
        'employement_type_id' => 'required',
        'job_experience_id' => 'required',
        'location' => 'required',
        'upload_limit' => 'required',
        'salary' => 'required',
        ]
    );
        $data=$request->all();
        $data['user_id']=Auth::user()->id;
        
        $job = Job::create($data);
        $job->skills()->attach($request->skills);
        Session::flash('flash_message', __('Job added!'));
        return redirect('/employess');
    }

    public function manage_jobs(Request $request)
    {
        $jobs = Job::with('user','job_category','job_experience','employee_type')->where('status',0)->orderBy('id', 'DESC')->paginate(4);

        return view('front-end.client.manage_jobs',compact('jobs'));
    }
}
