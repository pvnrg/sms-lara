<?php

namespace App\Http\Controllers\Admin;

use App\ClientClasses;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Hash;
use Session;
use Illuminate\Support\Facades\Lang;

class ClientClassesController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:access.client_classes');
        $this->middleware('permission:access.client_classes.edit')->only(['edit', 'update']);
        $this->middleware('permission:access.client_classes.create')->only(['create', 'store']);
        $this->middleware('permission:access.client_classes.delete')->only('destroy');
    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 15;

        if (!empty($keyword)) {
            $client_classes = ClientClasses::where('name', 'LIKE', "%$keyword%")->orWhere('label', 'LIKE', "%$keyword%")
                ->lower()->paginate($perPage);
        } else {
            $client_classes = ClientClasses::paginate($perPage);
        }

        return view('admin.client_classes.index', compact('client_classes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        $client_classes = ClientClasses::select()->pluck('name', 'id');
        return view('admin.client_classes.create', compact('client_classes'));
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
            'name' => 'required|unique:client_classes', //unique:users,email,NULL,id,deleted_at,NULL
            ]
        );

        $client_classes = ClientClasses::create($request->all());
        Session::flash('flash_message', __('Client Class added!'));
        return redirect('admin/client_classes/');
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
        $client_classes = ClientClasses::where('id',$id)->first();
        if($client_classes){
            return view('admin.client_classes.show', compact('client_classes'));
        } else {
            return redirect('admin/client_classes');
        }
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $client_classes = ClientClasses::where('id',$id)->first();
        if($client_classes){
            return view('admin.client_classes.edit', compact('client_classes'));
        }else{
            return redirect('admin/client_classes');
        }
    }

    /**
     * @param Request $request
     */
    public function update($id, Request $request)
    {
        $this->validate($request, ['name' => 'required']);

        $client_classes = ClientClasses::findOrFail($id);
        $client_classes->update($request->all());

        Session::flash('flash_message', __('Client Class updated!'));

        return redirect('admin/client_classes');
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
        ClientClasses::destroy($id);

        Session::flash('flash_message', __('Client Class deleted!'));

        return redirect('admin/client_classes');
    }

}
