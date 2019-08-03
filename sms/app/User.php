<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\HasRoles;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Auth;
use Carbon\Carbon;


class User extends Authenticatable 
{
    use Notifiable,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'contact', 'profile_image','status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    

    public function next(){
    // get next user
        return User::where('id', '>', $this->id)->orderBy('id','asc')->first();
    }
    public  function previous(){
        // get previous  user
        return User::where('id', '<', $this->id)->orderBy('id','desc')->first();
    }

     
     public function updateUser($id = 0, $request)
     {
         $data = [];
         $message = "";
         $status = true;
         $validation = [];
         $code = 200;
 
         $rules = array(
            'name' => 'required',
            'email' => 'required|unique:users,email,' . $request->user_id,            
         );
 
 
         $validator = \Validator::make($request->all(), $rules, []);
 
         if ($validator->fails()) {
             $validation = $validator;
             $status = false;
             $code = \Config::get('constants.responce_code.validation_failed');
         } else {
 
            if ($request->has('api_token')) {
                $user = User::where("id", $id)->first();
            } else {
                $user = Auth::user();
            }

            $data = array();
            $data['name'] = $request->get('name');
        


            if ($request->has('email') && $request->get('email') != "") {
                $data['email'] = $request->get('email');
            }


            if ($request->has('password') && $request->get('password') != "") {
                $data['password'] = bcrypt($request->password);
            }
            

            if ($user) {
                $user->update($data);
                $data = $user;
                $message = __('Your profile updated successfully.');
            } else {
                $status = false;
                $message = __('Something went wrong ! Please try again later');
                $code = \Config::get('constants.responce_code.bad_request');
            }

         }
 
         return [
             'message' => $message,
             'data' => $data,
             'status' => $status,
             'validation' => $validation,
             'code' => $code
         ];
 
     }


     public function state(){
        //  return $this->hasMany('App\UserStates','user_id')->with('state_name');
     }
     public function roles()
     {
         return $this->belongsToMany(Role::class,'role_user','user_id','role_id');
     }
     public function company()
     {
         return $this->hasone('App\Company','user_id','id');
     }
}
