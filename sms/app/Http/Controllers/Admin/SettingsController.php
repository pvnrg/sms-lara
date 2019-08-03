<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Setting;
use Illuminate\Http\Request;
use Session;

class SettingsController extends Controller
{    

    public function __construct()
    {
        $this->middleware('permission:access.settings');
        $this->middleware('permission:access.setting.edit')->only(['edit', 'update']);
        $this->middleware('permission:access.setting.create')->only(['create', 'store']);
        $this->middleware('permission:access.setting.delete')->only('destroy');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $settings = Setting::where('name', 'LIKE', "%$keyword%")
                ->orwhere('value', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $settings = Setting::paginate($perPage);
        }

        
        return view('admin.settings.index', compact('settings'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Setting::destroy($id);

        Session::flash('flash_message', 'Setting deleted!');

        return redirect('admin/settings');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $settings = Setting::findOrFail($id);

        return view('admin.settings.edit', compact('settings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        $this->validate($request, [
           // 'name' => 'required',
            'value' => 'required'
		]);
        $requestData = $request->all();
        
        if ($request->file('value')) {

                $fimage = $request->file('value');           
                $filename = uniqid(time()) . '.' . $fimage->getClientOriginalExtension();
                $fimage->move(public_path('/img/'), $filename);
                $requestData['value'] =  $filename ;

            }
        
        $setting = Setting::findOrFail($id);
        $setting->update($requestData);

        Session::flash('flash_message', 'Setting updated!');

        return redirect('admin/settings');
    }
}
