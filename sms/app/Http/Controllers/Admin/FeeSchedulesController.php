<?php

namespace App\Http\Controllers\Admin;

use App\FeeSchedules;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Hash;
use Session;
use Illuminate\Support\Facades\Lang;

class FeeSchedulesController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:access.fee_schedules');
        $this->middleware('permission:access.fee_schedules.edit')->only(['edit', 'update']);
        $this->middleware('permission:access.fee_schedules.create')->only(['create', 'store']);
        $this->middleware('permission:access.fee_schedules.delete')->only('destroy');
    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 15;

        if (!empty($keyword)) {
            $fee_schedules = FeeSchedules::where('name', 'LIKE', "%$keyword%")->orWhere('label', 'LIKE', "%$keyword%")
                ->lower()->paginate($perPage);
        } else {
            $fee_schedules = FeeSchedules::paginate($perPage);
        }

        return view('admin.fee_schedules.index', compact('fee_schedules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        $fee_schedules = FeeSchedules::select()->pluck('description', 'name', 'id');
        return view('admin.fee_schedules.create', compact('fee_schedules'));
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
            'name' => 'required|unique:fee_schedules', //unique:users,email,NULL,id,deleted_at,NULL
            ]
        );

        $fee_schedules = FeeSchedules::create($request->all());
        Session::flash('flash_message', __('Fee Schedule added!'));
        return redirect('admin/fee_schedules/');
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
        $fee_schedules = FeeSchedules::where('id',$id)->first();
        if($fee_schedules){
            return view('admin.fee_schedules.show', compact('fee_schedules'));
        } else {
            return redirect('admin/fee_schedules');
        }
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $fee_schedules = FeeSchedules::where('id',$id)->first();
        if($fee_schedules){
            return view('admin.fee_schedules.edit', compact('fee_schedules'));
        }else{
            return redirect('admin/fee_schedules');
        }
    }

    /**
     * @param Request $request
     */
    public function update($id, Request $request)
    {
        $this->validate($request, ['name' => 'required']);

        $fee_schedules = FeeSchedules::findOrFail($id);
        $fee_schedules->update($request->all());
        
        Session::flash('flash_message', __('Fee Schedule updated!'));

        return redirect('admin/fee_schedules');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return void
     */
    public function destroy($id)
    {
        FeeSchedules::destroy($id);

        Session::flash('flash_message', __('Fee Schedule deleted!'));

        return redirect('admin/fee_schedules');
    }

}
