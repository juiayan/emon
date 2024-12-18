<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fleet;

class FleetController extends Controller
{
     function __construct()
    {
        $this->middleware('role_or_permission:Fleet access|Fleet create|Fleet edit|Fleet delete', ['only' => ['index','show']]);
        $this->middleware('role_or_permission:Fleet create', ['only' => ['create','store']]);
        $this->middleware('role_or_permission:Fleet edit', ['only' => ['edit','update']]);
        $this->middleware('role_or_permission:Fleet delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fleets = Fleet::all();
        return view('admin.fleet', compact('fleets'));
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
      $fleet = Fleet::create($data);
      return redirect('admin/fleet')->with('status', 'Fleet insert Success');
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
        $fleet = Fleet::find($id);
       return view('admin.editfleet',compact('fleet'));
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
       $fleet = Fleet::find($id);
       $fleet->update($request->all());
      return redirect('admin/fleet')->with('status', 'Fleet Update Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $fleet = Fleet::find($id);
        $fleet->delete();
        return redirect('admin/fleet')->with('status', 'Fleet Delete Success');
    }
}
