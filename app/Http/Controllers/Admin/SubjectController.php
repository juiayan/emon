<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;
use Auth;
class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('role_or_permission:Subject access|Subject create|Subject edit|Subject delete', ['only' => ['index','show']]);
        $this->middleware('role_or_permission:Subject create', ['only' => ['create','store']]);
        $this->middleware('role_or_permission:Subject edit', ['only' => ['edit','update']]);
        $this->middleware('role_or_permission:Subject delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Class Subject';
        $subject= Subject::paginate(4);
        return view('backend.subject.index',['subject'=>$subject], compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.subject.new');
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
        $subject = Subject::create($data);
        return redirect()->back()->withSuccess('Event Name created !!!');
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
    public function edit(Event $subject)
    {
       return view('backend.subject.edit',['subject' => $subject]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $subject)
    {
        $subject->update($request->all());
        return redirect()->back()->withSuccess('Subject updated !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $subject)
    {
        $subject->delete();
        return redirect()->back()->withSuccess('Event deleted !!!');
    }
}
