<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Session;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Mail\Message;
use App\Package;
use App\Opportunity;
use App\Setting;
use DB;
use Tymon\JWTAuth\JWTAuth;
use JWTAuthException;


class UsersController extends Controller
{   
    public function make_null($value){
        $value = $value->toArray();
        array_walk_recursive($value, function (&$item, $key) {
            $item =  $item === null ? "" : $item;
        });
        return $value;

    } 
    
    public function login(Request $request){
        echo "asas"; die;
        $data = array();
        $code = 200;
        $messages = 'Login Success';
        $status = 'true';
        $error = '';
        $email = $request->email;
        $password = $request->password;
        $device_token = $request->device_token;
        $device_type = $request->device_type;
        $user = User::where('email',$email)->where('deleted_at',null)->first();
        if($user){
            if(Hash::check($password, $user->password)){
                $user->api_token = md5(uniqid());
                if($device_token != null)
                {
                    $user->device_token = $device_token;
                }
                if($device_type != null)
                {
                    $user->device_type = $device_type;
                }                
                $user->update();

                //Get Setting Table Details
                $company_details =  array();
                            
                $setting  = Setting::get();
                foreach($setting as $key => $value) {
                    if($value['value'] == ''){
                        $value['value'] = "" ;
                    }
                    $company_details[$value['name']] = $value['value'];   
                }
                $company_details = (object) $company_details;            

                $data = ['user' => $this->make_null($user), 'settings' => $company_details];
            }else{
                $messages = 'Password is wrong';
                $code = 400;
                $status = 'false';
            }
        }else{
            $messages = 'Email/User not found';
            $code = 400;
            $status = 'false'; 
        }
        return response()->json(['data'=>$data,'code'=>$code,'message'=>$messages,'status'=>$status]);
        exit;
    }

    public function logout(Request $request)
    {
        $data = [];
        $message = "";
        $validation = [];
        $code = 200;
        $status = true;

        if ($request->has('api_token')) {
            $api_token = $request->get('api_token');
            User::where("api_token", $api_token)->update(["api_token" => ""]);
        }
        $message = "Logout success!";
        return $this->toJson($status, $data, $message, $validation, $code);
    }
    
    public function forgotPassword(Request $request){
        $data = array();
        $code = 200;
        $messages = 'Forgot password mail Success';
        $status = 'true';
        $error = '';
        $email = $request->email;
        
        $response = Password::sendResetLink($request->only('email'), function (Message $message) {
            $message->subject($this->getEmailSubject());

        });
        
        if ($response == "passwords.sent") {
            $messages = 'Password reset link has been sent to email';
        } else if ($response == "passwords.user") {
            $status = false;
            $messages = 'User not found';
            $code = 400;
        } else {
            $status = false;
            $messages = 'Something went wrong ! Please try again later';
            $code = 400;
        }
        return response()->json(['data' => $data, 'code' => $code, 'message' => $messages, 'status' => $status]);
        exit;
    }

    public function changePassword(Request $request){
        $data = [];
        $message = "";
        $status = true;
        $validation = [];
        $code = 200;

        $id = $request->user_id;
        $rules = array(
			'old_password'=>'required',
            'password' => 'required|min:6|max:255',
            'password_confirmation' => 'required|same:password',
        );


        $messsages = array(
            'old_password.required' => __('Please enter current password'),
            'password_confirmation.same' => __('The confirm password and new password must match.'),
        );

        $validator = \Validator::make($request->all(), $rules, $messsages);

        if ($validator->fails()) {
            $validation = $validator;
            $status = false;
            $code = \Config::get('constants.responce_code.validation_failed');
        } else {
            
            $user = User::where("id", $id)->first();
		    if ($user && Hash::check($request->input('old_password'), $user->password)) {
				if ($user) {
					$user->password = Hash::make($request->input('password'));
					$user->save();
					$message = 'Password changed successfully.';
				} else {
					$validator->errors()->add('current_password', 'Please enter correct current password');
					$validation = $validator;
					$code = \Config::get('constants.responce_code.validation_failed');
					$status = false;
				}
			}
			else{
				$message = 'Current password is Wrong';
				$status = false;
				$code=400;
			}

        }

		return response()->json(['status'=> $status,'data' => $data, 'message' => $message, 'validation' => $validation,'code'=>$code]);
        exit;
    }

}
