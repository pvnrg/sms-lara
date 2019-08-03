<?php

namespace App\Http\Controllers\Admin;

use App\Skills;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Hash;
use Session;
use Illuminate\Support\Facades\Lang;

class SkillsController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:access.skills');
        $this->middleware('permission:access.skills.edit')->only(['edit', 'update']);
        $this->middleware('permission:access.skills.create')->only(['create', 'store']);
        $this->middleware('permission:access.skills.delete')->only('destroy');
    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 15;

        if (!empty($keyword)) {
            $skills = Skills::where('name', 'LIKE', "%$keyword%")->orWhere('label', 'LIKE', "%$keyword%")
                ->lower()->paginate($perPage);
        } else {
            $skills = Skills::paginate($perPage);
        }

        return view('admin.skills.index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        $skills = Skills::select()->pluck('name', 'id');
        return view('admin.skills.create', compact('skills'));
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
            'name' => 'required|unique:skills', //unique:users,email,NULL,id,deleted_at,NULL
            ]
        );

        $skills = Skills::create($request->all());
        Session::flash('flash_message', __('Role added!'));
        return redirect('admin/skills/');
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
        $skills = Skills::where('id',$id)->first($id);
        if($skills){
            return view('admin.skills.show', compact('skills'));
        } else {
            return redirect('admin/skills');
        }
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $skills = Skills::where('id',$id)->first();
        if($skills){
            return view('admin.skills.edit', compact('skills'));
        }else{
            return redirect('admin/skills');
        }
    }

    /**
     * @param Request $request
     */
    public function update($id, Request $request)
    {
        $this->validate($request, ['name' => 'required']);

        $skills = Skills::findOrFail($id);
        $skills->update($request->all());

        Session::flash('flash_message', __('Skill updated!'));

        return redirect('admin/skills');
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
        Skills::destroy($id);

        Session::flash('flash_message', __('Skill deleted!'));

        return redirect('admin/skills');
    }

}
