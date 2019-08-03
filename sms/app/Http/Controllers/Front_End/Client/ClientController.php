<?php

namespace App\Http\Controllers\Front_End\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Company;
use App\FeeSchedules;
use App\ClientClasses;
use Auth;
use Hash;
use App\Specializations;
use Session;

class ClientController extends Controller
{
    //
    public function my_profile(Request $request)
    {
        $user=Auth::user();

        $fee_schedules = FeeSchedules::select('id', 'name')->get();
        $fee_schedules = $fee_schedules->pluck('name', 'id');

        $client_classes = ClientClasses::select('id', 'name')->get();
        $client_classes = $client_classes->pluck('name', 'id');

        $beneficial_owner = User::select('id', 'name')->get();
        $beneficial_owner = $beneficial_owner->pluck('name', 'id');

        return view('front-end.client.profile',compact('user', 'fee_schedules', 'client_classes', 'beneficial_owner'));
    }

    public function update_profile(Request $request)
    {
        $this->validate($request,
            [
            'name' => 'required',
            'email_address' => 'required',
            ]
        );

        $user = User::findOrFail($id);
        
        $user->account_no=$request->account_no;
        $user->name=$request->name;
        $user->contact=$request->contact;
        $user->email=$request->email;
        $user->address=$request->address;
        $user->tax_from=$request->tax_from;
        $user->is_corporate=($request->is_corporate == 'on') ? 1 : 0;
        $user->fees_id=$request->fee_schedules;
        $user->client_class_id=$request->client_classes;
        $user->beneficial_owner_id=$request->beneficial_owner;

        if ($request->file('passport')) {
            $fimage = $request->file('passport');
            $filename = uniqid(time()) . '.' . $fimage->getClientOriginalExtension();            
            $fimage->move(public_path('/user/'), $filename);
            $data['passport'] = $filename;
            $user->passport=$data['passport'];
        }
        if ($request->file('proof_of_residency')) {
            $fimage = $request->file('proof_of_residency');
            $filename = uniqid(time()) . '.' . $fimage->getClientOriginalExtension();            
            $fimage->move(public_path('/user/'), $filename);
            $data['proof_of_residency'] = $filename;
            $user->proof_of_residency=$data['proof_of_residency'];
        }

        if ($request->file('certificate_of_incorpo')) {
            $fimage = $request->file('certificate_of_incorpo');
            $filename = uniqid(time()) . '.' . $fimage->getClientOriginalExtension();            
            $fimage->move(public_path('/user/'), $filename);
            $data['certificate_of_incorpo'] = $filename;
            $user->certificate_of_incorpo=$data['certificate_of_incorpo'];
        }

        if ($request->file('articals_memorandoms')) {
            $fimage = $request->file('articals_memorandoms');
            $filename = uniqid(time()) . '.' . $fimage->getClientOriginalExtension();            
            $fimage->move(public_path('/user/'), $filename);
            $data['articals_memorandoms'] = $filename;
            $user->articals_memorandoms=$data['articals_memorandoms'];
        }

        if ($request->file('cert_of_incumbency')) {
            $fimage = $request->file('cert_of_incumbency');
            $filename = uniqid(time()) . '.' . $fimage->getClientOriginalExtension();            
            $fimage->move(public_path('/user/'), $filename);
            $data['cert_of_incumbency'] = $filename;
            $user->cert_of_incumbency=$data['cert_of_incumbency'];
        }

        if ($request->file('cert_of_good_standing')) {
            $fimage = $request->file('cert_of_good_standing');
            $filename = uniqid(time()) . '.' . $fimage->getClientOriginalExtension();            
            $fimage->move(public_path('/user/'), $filename);
            $data['cert_of_good_standing'] = $filename;
            $user->cert_of_good_standing=$data['cert_of_good_standing'];
        }

        $company->save();

        Session::flash('flash_message','Profile Updated sucessfully!');
        return redirect()->back();

    }

    public function change_password(Request $request)
    {
        return view('front-end.client.change_password');
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
