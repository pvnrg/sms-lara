<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * HomeController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home'); 
    }

    public function subDomain($account)
    {
        return $account;
    }

    public function redirect()
    {
     
        
        if(Auth::user()->roles[0]->name == "Sales"  || Auth::user()->roles[0]->name == "Office Users"){
            
            return redirect('/admin/customer');
        }
        if(Auth::user()->roles[0]->name == "Installers" ){
            
            return redirect('/admin/job');
        }
        if(Auth::user()->roles[0]->name == "EMP" ){
            
            return redirect('/employess');
        }
        if(Auth::user()->roles[0]->name == "AG" ){
            
            return redirect('/agent');
        }
        if(Auth::user()->roles[0]->name == "client" ){
            
            return redirect('/client');
        }
        return redirect('/admin/users');
    }
    
    public function sign_form($id){
        
        $offer = Offer::find($id); 
        
        return view('email.order.sign-form',compact('offer'));
    }
}
