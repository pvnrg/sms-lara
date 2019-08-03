<?php

namespace App\Http\Controllers\Front_End\Employee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Company;
use Auth;
use Hash;
use App\Specializations;
use Session;

class EmployeeController extends Controller
{
    //
    public function my_profile(Request $request)
    {
        $user=Auth::user();
        $company=Company::where('user_id',$user->id)->first();

        $specialization = Specializations::select('id', 'name', 'status')->get();
        $specialization = $specialization->pluck('name', 'id')->prepend('--Select Specialization--','');

        return view('front-end.employee.profile',compact('company','specialization'));
    }

    public function update_profile(Request $request)
    {
        $this->validate($request,
            [
            'name' => 'required',
            'email_address' => 'required',
            ]
        );

        $company=Company::where('user_id',Auth::user()->id)->first();
        if($company == null)
        {
            $company = new Company();
            $company->user_id=Auth::user()->id;
           
        }
        $company->name=$request->name;
        
        if ($request->file('company_logo')) {
            $fimage = $request->file('company_logo');
            $filename = uniqid(time()) . '.' . $fimage->getClientOriginalExtension();            
            $fimage->move(public_path('/company/'), $filename);
            $company->logo = $filename;
        }
        $company->email_address=$request->email_address;
     
        if(isset($request->address))
        {
            $company->address=$request->address;
        } 
        
        if(isset($request->about))
        {
            $company->about=$request->about;
        }
        if(isset($request->website))
        {
            $company->website=$request->website;
        }
       
        if(isset($request->year_founded))
        {
            $company->year_founded=$request->year_founded;
        }
        
        if(isset($request->specialization_id))
        {
            $company->specialization_id=$request->specialization_id;
        }

        $company->save();

        Session::flash('flash_message','Profile Updated sucessfully!');
        return redirect()->back();

    }

    public function change_password(Request $request)
    {
        return view('front-end.employee.change_password');
    }

    public function update_password(Request $request)
    { 
        $messages = [
            'current_password.required' => __('Please enter current password'),
            'password_confirmation.same' => __('The confirm password and new password must match.'),
        ];

        $this->validate($request,
            [
                'current_password' => 'required',
                'password' => 'required|min:6|max:255',
                'password_confirmation' => 'required|same:password',
            ], $messages);


        $cur_password = $request->input('current_password');

        $user = Auth::user();

        if (Hash::check($cur_password, $user->password)) {

            $user->password = Hash::make($request->input('password'));
            $user->save();

            Session::flash('flash_message','Password Changed sucessfully!');

            return redirect()->back();

        } else {
            $error = array('current-password' => __('Please enter correct current password'));

            return redirect()->back()->withErrors($error);
        }

        flash('Something wrong. Please try again latter.', 'error');

        return redirect()->back();
    }

    public function upload_image(Request $request)
    {
      
       $user=User::find(Auth::user()->id);

       if ($request->file('file_upload')) {
            $fimage = $request->file('file_upload');
            $filename = uniqid(time()) . '.' . $fimage->getClientOriginalExtension();            
            $fimage->move(public_path('/user/'), $filename);
            $user->profile_image=$filename;
        }
        $user->save();

        return response()->json(['success' => true,'user' => $user]);


    }
}
