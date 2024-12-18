<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentClass;
use Auth;
class StudentClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('role_or_permission:StudentClass access|StudentClass create|StudentClass edit|StudentClass delete', ['only' => ['index','show']]);
        $this->middleware('role_or_permission:StudentClass create', ['only' => ['create','store']]);
        $this->middleware('role_or_permission:StudentClass edit', ['only' => ['edit','update']]);
        $this->middleware('role_or_permission:StudentClass delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Student Class';
        $Classes = StudentClass::paginate(4);

        return view('backend.class.index',['Classes'=>$Classes], compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.class.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= $request->all();
        $Class = StudentClass::create($data);
        return redirect()->back()->withSuccess('New Class Name created !!!');
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
    public function edit(Event $event)
    {
       return view('backend.class.edit',['Class' => $Class]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $Class)
    {
        $Class->update($request->all());
        return redirect()->back()->withSuccess('Event updated !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $Class)
    {
        $Class->delete();
        return redirect()->back()->withSuccess('Event deleted !!!');
    }
}

