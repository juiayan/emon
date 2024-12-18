<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PrincipalService;


class PrincipalServiceController extends Controller
{
     function __construct()
    {
        $this->middleware('role_or_permission:Principal access|Principal create|Principal edit|Principal delete', ['only' => ['index','show']]);
        $this->middleware('role_or_permission:Principal create', ['only' => ['create','store']]);
        $this->middleware('role_or_permission:Principal edit', ['only' => ['edit','update']]);
        $this->middleware('role_or_permission:Principal delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $principal = PrincipalService::all();
        return view('admin.principal', compact('principal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    public function store(Request $request)
    {
      $data = $request->all();
      $principal = PrincipalService::create($data);
    return redirect('admin/principal')->with('status', 'Principal & Service insert Success');
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
       $principal = PrincipalService::find($id);
       return view('admin.editprincipal',compact('principal'));
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
       $principal = PrincipalService::find($id);
       $principal->update($request->all());
      return redirect('admin/principal')->with('status', 'Principal & Service Update Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $principal = PrincipalService::find($id);
        $principal->delete();
        return redirect('admin/principal')->with('status', 'Principal & Service Delete Success');
    }
}
