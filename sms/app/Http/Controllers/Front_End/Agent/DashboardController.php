<?php

namespace App\Http\Controllers\Front_End\Agent;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('front-end.agent.dashboard');
    }
}
