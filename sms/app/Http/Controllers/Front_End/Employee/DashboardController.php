<?php

namespace App\Http\Controllers\Front_End\Employee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Job;
use Auth;

class DashboardController extends Controller
{
    //
    public function index(Request $request)
    {
        $jobs = Job::with('user','job_category','job_experience','employee_type')->where('status',0)->orderBy('id', 'DESC')->paginate(4);

        return view('front-end.employee.dashboard',compact('jobs'));
    }
}
