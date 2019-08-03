<?php

namespace App\Http\Controllers\Admin;

use App\Notifications\ActivationMail;
use App\Http\Controllers\Controller;
use App\Role;
use App\User;
use App\Country;
use App\States;
use App\City;
use App\Company;
use Illuminate\Http\Request;
use Session;
use Auth;
use App\CapsuleOwner;
use App\Opportunity;
use App\UserStates;
use App\FeeSchedules;
use App\ClientClasses;
use App\Specializations;
use DB;
use App\Notifications\Signup;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:access.users');
        $this->middleware('permission:access.user.edit')->only(['edit', 'update']);
        $this->middleware('permission:access.user.create')->only(['create', 'store']);
        $this->middleware('permission:access.user.delete')->only('destroy');
    }
    
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;
        if (!empty($keyword)) {
            $users = User::with('roles')->where('name', 'LIKE', "%$keyword%")
                    ->orWhere('email', 'LIKE', "%$keyword%")
                    ->orderBy('id', 'DESC')
                    ->paginate($perPage);
        } else {
            // $users = User::with('roles')->where('roles', '=', 1)->orderBy('id', 'DESC')->paginate($perPage);
            $users = DB::select('select u.*, r.label from users u inner join role_user ru on u.id = ru.user_id left join roles r on r.id = ru.role_id where r.id NOT IN (1) ORDER BY id DESC');
        }
        // dd($users);
        //$users = User::with('roles')->get();
        
        return view('admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        $user = User::select()->pluck('id');

        $roles = Role::select('id', 'name', 'label')->get();
        $roles = $roles->pluck('label', 'name')->prepend('--Select Role--','');

        $fee_schedules = FeeSchedules::select('id', 'name')->get();
        $fee_schedules = $fee_schedules->pluck('name', 'id');

        $client_classes = ClientClasses::select('id', 'name')->get();
        $client_classes = $client_classes->pluck('name', 'id');

        $beneficial_owner = User::select('id', 'name')->get();
        $beneficial_owner = $beneficial_owner->pluck('name', 'id');
       
        return view('admin.users.create', compact('user', 'roles', 'fee_schedules', 'client_classes', 'beneficial_owner'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request,
            [
            'name' => 'required',
            'email' => 'required|email|unique:users', //
            'roles' => 'required'
            ]
        );

        $role = Role::where('name',$request->roles)->first();

        $user = new User();

        $user->account_no=$request->account_no;
        $user->name=$request->name;
        $user->contact=$request->contact;
        $user->email=$request->email;
        $user->address=$request->address;
        $user->tax_from=$request->tax_from;
        $user->is_corporate=($request->is_corporate == 'on') ? 1 : 0;
        $user->fees_id=($request->fee_schedules) ? $request->fee_schedules : null;
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

        $user->save();
        $user->roles()->attach($role);

        // $token = app('auth.password.broker')->createToken($user);
        // $user->notify(new Signup($user, $token));
        
        Session::flash('flash_message', __('Client added Successfully!'));
        return redirect('admin/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return void
     */
    public function show($id)
    {
        $user = User::where('id',$id)->first();
     
        if($user) {
            return view('admin.users.show', compact('user'));
        }else{
            return redirect('admin/users');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return void
     */
    public function edit($id)
    {   
        if($id == 1 && Auth::user()->id != 1) {
            return redirect()->back();
        }

        $roles = Role::select('id', 'name', 'label')->get();
        $roles = $roles->pluck('label', 'name')->prepend('--Select Role--','');

        $fee_schedules = FeeSchedules::select('id', 'name')->get();
        $fee_schedules = $fee_schedules->pluck('name', 'id');

        $client_classes = ClientClasses::select('id', 'name')->get();
        $client_classes = $client_classes->pluck('name', 'id');

        $beneficial_owner = User::select('id', 'name')->get();
        $beneficial_owner = $beneficial_owner->pluck('name', 'id');

        $user = User::where('id',$id)->first();
   
        if($user){

            $user_roles = [];
            foreach ($user->roles as $role) {
                $user_roles[] = $role->name;
            }

            // $capsule = CapsuleOwner::pluck('name','capsule_id')->prepend('--Select--','');
            return view('admin.users.edit', compact('user', 'roles', 'user_roles', 'fee_schedules', 'client_classes', 'beneficial_owner'));
        } else {
            return redirect('admin/users');
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @param  \Illuminate\Http\Request $request
     *
     * @return void
     */
    public function update($id, Request $request)
    {  
        $this->validate($request,
            [
            'name' => 'required',
            'email' => 'required|email', //unique:users,email,NULL,id,deleted_at,NULL    
            'roles' => 'required',
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
        $user->fees_id=($request->fee_schedules) ? $request->fee_schedules : null;
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

        $user->save();
        // $company->user_id=$user->id;
        
        $role = Role::where('name',$request->roles)->first();

        if($request->has('roles') && ( $request->roles != null || $request->roles != '' )){
            $user->roles()->detach();
            $user->roles()->attach($role);
        } 

        Session::flash('flash_message', __('Client updated successfully!'));        
        return redirect('admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return void
     */
    public function destroy(Request $request ,$id)
    {
        $result = array();
        if(Auth::user()->id==$id  || $id==1 ){
            $result['message'] = "You don't have permission to delete this user";
            $result['code'] = 400;
        }else{
           try {
                $res = User::where("id",$id)->first();
                if ($res) {
                    
                    User::where("id",$id)->delete();

                    $result['message'] = "Record Deleted Successfully.";
                    $result['code'] = 200;
                } else {
                    $result['message'] = "Something went wrong , Please try again later.";
                    $result['code'] = 400;
                }
            } catch (\Exception $e) {
                $result['message'] = $e->getMessage();
                $result['code'] = 400;
            }
        }

        if($request->ajax()){
            return response()->json($result, $result['code']);
        }else{

            Session::flash('flash_message','User Deleted Successfully!');
            return redirect('admin/users');
        }
    }  
    public function update_status(Request $request)
    {
           $user=User::find($request->id);
        
           if($request->status == 1)
           {
               $user->status=0;
           }
           else{
            
                $user->status=1;
                $token = app('auth.password.broker')->createToken($user);
                $user->notify(new Signup($user, $token));
           }

           $user->save();

        return response()->json(['success' => true]);

    }
 
}
