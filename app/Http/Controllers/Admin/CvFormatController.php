<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CvFormat;

class CvFormatController extends Controller
{
      function __construct()
    {
        $this->middleware('role_or_permission:CvFormat access|CvFormat create|CvFormat edit|CvFormat delete', ['only' => ['index','show']]);
        $this->middleware('role_or_permission:CvFormat create', ['only' => ['create','store']]);
        $this->middleware('role_or_permission:CvFormat edit', ['only' => ['edit','update']]);
        $this->middleware('role_or_permission:CvFormat delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cvformat = CvFormat::all();
        return view('admin.cv_format', compact('cvformat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::get();
        return view('setting.role.new',['permissions'=>$permissions]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cvformat = new CvFormat();
        if($request->hasFile('cv_file'))
        {
            $file = $request->file('cv_file');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move(public_path('uploads/cv_file/'), $filename);
            $cvformat->cv_file = $filename;
        }
        $cvformat->save();
      return redirect('admin/cvformat')->with('status', 'Cv Format insert Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cvformat = CvFormat::find($id);
       return view('admin.edit_cv_format',compact('cvformat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $cvformat = CvFormat::find($id);
      if($request->hasFile('cv_file'))
        {
            $file = $request->file('cv_file');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move(public_path('uploads/cv_file/'), $filename);
            $cvformat->cv_file = $filename;
        }
        $cvformat->update();
      return redirect('admin/cvformat')->with('status', 'Cv Format Update Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $cvformat = CvFormat::find($id);
        $cvformat->delete();
        return redirect('admin/cvformat')->with('status', 'Cv Format Delete Success');
    }
}
