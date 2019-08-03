<?php

namespace App\Http\Controllers\Front_End\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Job;
use Auth;

class DashboardController extends Controller
{
    //
    public function index(Request $request)
    {
        $jobs = Job::with('user')->where('status',0)->orderBy('id', 'DESC')->paginate(4);

        return view('front-end.client.dashboard',compact('jobs'));
    }
}
