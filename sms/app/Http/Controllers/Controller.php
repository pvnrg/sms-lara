<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function toJson($status = false, $data = [], $errors = '',$validation =[], $code = 200)
    {
        $errors = __($errors);
        $errorOb = "";
        if($code!=200){
            if($code == \Config::get('constants.responce_code.validation_failed')) {
                $validation=$validation->messages()->getMessages();
                $err_arr =array_values($validation);
                if(isset($err_arr) && isset($err_arr[0])){
                    $errors =  $err_arr[0][0];
                }
            }

            $errorOb =  array("code"=>$code,"message"=>$errors,"validation"=>$validation);
        }

        return response()->json([
            'messages' => $errors,
            'data' => $data,
            'status' => ($status)? "true": "false",
            'error' => $errorOb
        ], 200);
    }
}
