<?php

namespace App\Http\Controllers\Admin;


use App\People;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Hash;
use Illuminate\Support\Facades\Lang;

class ProfileController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $user = Auth::user();

        return view('admin.profile.index', compact('user'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit()
    {
        $user = Auth::user();
        $id = $user->id;
        return view('admin.profile.edit', compact('user'));
    }

    /**
     * @param Request $request
     */
    public function update(Request $request)
    {
       
        $this->validate($request, [
            'name' => 'required',       
        ]);

        $user = Auth::user();
        $user->name = $request->name;
        $user->gender = $request->gender;
        $user->contact = $request->contact;
        if ($request->file('profile_image')) {
            $fimage = $request->file('profile_image');
            $filename = uniqid(time()) . '.' . $fimage->getClientOriginalExtension();            
            $fimage->move(public_path('/user/'), $filename);
            // $data['profile_image'] = $filename;
            $user->profile_image = $filename;
        }
     
        $user->save();

        flash('Your profile updated successfully.', 'success');

        return redirect('/admin/profile');
    }

    /**
     * @param Request $request
     * @return null|string
     */
    public function uploadPhoto(Request $request)
    {
        if ($request->hasFile('photo')) {

            $file = $request->file('photo');

            $timestamp = str_replace([' ', ':'], '-', \Carbon\Carbon::now()->toDateTimeString() . uniqid());

            $name = $timestamp . '-' . $file->getClientOriginalName();

            $file->move(public_path() . '/uploads/', $name);

            return $name;
        } else {

            return null;
        }

    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function changePassword()
    {
        return view('admin.profile.changePassword');
    }

    /**
     * @param Request $request
     */
    public function updatePassword(Request $request)
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

            flash('Password changed successfully.', 'success');

            return redirect()->route('profile.index');

        } else {
            $error = array('current-password' => __('Please enter correct current password'));

            return redirect()->back()->withErrors($error);
        }

        flash('Something wrong. Please try again latter.', 'error');

        return redirect()->back();


    }

}
