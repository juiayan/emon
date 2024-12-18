<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminCategory;

class AdminCategeoryController extends Controller
{
    function __construct()
    {
        $this->middleware('role_or_permission:AdminCategory access|AdminCategory create|AdminCategory edit|AdminCategory delete', ['only' => ['index','show']]);
        $this->middleware('role_or_permission:AdminCategory create', ['only' => ['create','store']]);
        $this->middleware('role_or_permission:AdminCategory edit', ['only' => ['edit','update']]);
        $this->middleware('role_or_permission:AdminCategory delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admincategory = AdminCategory::all();
        return view('admin.admincategory', compact('admincategory'));
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
      $data = $request->all();
      $admincategory = AdminCategory::create($data);
      return redirect('admin/adminicategories')->with('status', 'Admin Category insert Success');
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
        $admincategory = AdminCategory::find($id);
       return view('admin.editadmincategory',compact('admincategory'));
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
       $admincategory = AdminCategory::find($id);
       $admincategory->update($request->all());
      return redirect('admin/adminicategories')->with('status', 'Admin Category Update Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $admincategory = AdminCategory::find($id);
        $admincategory->delete();
        return redirect('admin/adminicategories')->with('status', 'Admin Category Delete Success');
    }
    
}
