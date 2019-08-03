<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Job;
use App\User;
use App\Skills;
use Auth;
use App\JobCategory;
use App\JobExperience;
use App\Employeetypes;
use App\Role;
use Session;

class JobController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('permission:access.job');
        $this->middleware('permission:access.job.edit')->only(['edit', 'update']);
        $this->middleware('permission:access.job.create')->only(['create', 'store']);
        $this->middleware('permission:access.job.delete')->only('destroy');
    }


    
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;
        if (!empty($keyword)) {
            $jobs = job::with('user','job_category','job_experience','employee_type')->where('name', 'LIKE', "%$keyword%")
                    ->orWhere('email', 'LIKE', "%$keyword%")
                    ->orderBy('id', 'DESC')
                    ->paginate($perPage);
        } else {
            $jobs = Job::with('user','job_category','job_experience','employee_type')->orderBy('id', 'DESC')->paginate($perPage);
          
        }

        //$users = User::with('roles')->get();
        
        return view('admin.jobs.index',compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        $employeetypes = Employeetypes::where('status',1)->get();
        $employeetypes = $employeetypes->pluck('name', 'id')->prepend('--Select employee type--','');

        $jobexperience = JobExperience::where('status',1)->get();
        $jobexperience = $jobexperience->pluck('name', 'id')->prepend('--Select job experience--','');

        $jobcategory = JobCategory::where('status',1)->get();
        $jobcategory = $jobcategory->pluck('name', 'id')->prepend('--Select job category--','');

        $skills = Skills::where('status',1)->get();
        $skills = $skills->pluck('name', 'id')->prepend('--Select skills--','');

        $role=Role::where('name','EMP')->first();

        $user=User::
            leftjoin('role_user','role_user.user_id','users.id')
            ->leftjoin('roles','roles.id','role_user.role_id')
            ->where('roles.id','=',$role->id)
            ->orderby('users.created_at','desc')->select('users.id', 'users.name')->get();

        $user = $user->pluck('name', 'id')->prepend('--Select User--','');
       
        return view('admin.jobs.create', compact('employeetypes','jobexperience','jobcategory','skills','user'));
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
            'title' => 'required',
            'description' => 'required', //unique:users,email,NULL,id,deleted_at,NULL
            'perks&benifits' => 'required',
            'skills_id' => 'required',
            'job_category_id' => 'required',
            'employement_type_id' => 'required',
            'job_experience_id' => 'required',
            'user_id' => 'required',
            'location' => 'required',
            'upload_limit' => 'required',
            'salary' => 'required',
            ]
        );

        $jobs = Job::create($request->all());
        Session::flash('flash_message', __('Job added!'));
        return redirect('admin/job/');

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
        $jobs = Job::where('id',$id)->first();

     
        if($jobs){           
            // $opportunities = Opportunity::where('owner_id',$user->capsule_id)->get();
            return view('admin.jobs.show', compact('jobs'));
        }else{
            return redirect('admin/jobs');
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
        if($id == 1 && Auth::user()->id != 1){
           
            return redirect()->back();
        }
        $job=Job::find($id);
        $employeetypes = Employeetypes::where('status',1)->get();
        $employeetypes = $employeetypes->pluck('name', 'id')->prepend('--Select employee type--','');

        $jobexperience = JobExperience::where('status',1)->get();
        $jobexperience = $jobexperience->pluck('name', 'id')->prepend('--Select job experience--','');

        $jobcategory = JobCategory::where('status',1)->get();
        $jobcategory = $jobcategory->pluck('name', 'id')->prepend('--Select job category--','');

        $skills = Skills::where('status',1)->get();
        $skills = $skills->pluck('name', 'id')->prepend('--Select skills--','');

        $role=Role::where('name','EMP')->first();

        $user=User::
            leftjoin('role_user','role_user.user_id','users.id')
            ->leftjoin('roles','roles.id','role_user.role_id')
            ->where('roles.id','=',$role->id)
            ->orderby('users.created_at','desc')->select('users.id', 'users.name')->get();

        $user = $user->pluck('name', 'id')->prepend('--Select User--','');
       
        return view('admin.jobs.edit', compact('job','employeetypes','jobexperience','jobcategory','skills','user'));
        
        
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
        $this->validate($request,
        [
        'title' => 'required',
        'description' => 'required', //unique:users,email,NULL,id,deleted_at,NULL
        'perks&benifits' => 'required',
        'skills_id' => 'required',
        'job_category_id' => 'required',
        'employement_type_id' => 'required',
        'job_experience_id' => 'required',
        'user_id' => 'required',
        'location' => 'required',
        'upload_limit' => 'required',
        'salary' => 'required',
        ]
    );

   $jobs=Job::find($id);
   $jobs->update($request->all());
   
   Session::flash('flash_message', __('Job Updated!'));
    return redirect('admin/job/');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return void
     */
    public function destroy(Request $request ,$id)
    {
        $result = array();
        if(Auth::user()->id==$id  || $id==1 ){
            $result['message'] = "You don't have permission to delete this user";
            $result['code'] = 400;
        }else{
           try {
                $res = User::where("id",$id)->first();
                if ($res) {
                    Company::where('user_id',$id)->delete();
                    User::where("id",$id)->delete();

                    $result['message'] = "Record Deleted Successfully.";
                    $result['code'] = 200;
                } else {
                    $result['message'] = "Something went wrong , Please try again later.";
                    $result['code'] = 400;
                }
            } catch (\Exception $e) {
                $result['message'] = $e->getMessage();
                $result['code'] = 400;
            }
        }

        if($request->ajax()){
            return response()->json($result, $result['code']);
        }else{

            Session::flash('flash_message','User Deleted Successfully!');
            
            return redirect('admin/users');
        }
    }  
    public function update_status(Request $request)
    {
           $user=User::find($request->id);
        
           if($request->status == 1)
           {
               $user->status=0;
           }
           else{
               $user->status=1;
           }

           $user->save();

        return response()->json(['success' => true]);

    }
}
