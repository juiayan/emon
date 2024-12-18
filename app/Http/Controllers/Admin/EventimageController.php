<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Gallery;
use Auth;
class EventimageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('role_or_permission:Eventimage access|Eventimage create|Eventimage edit|Eventimage delete', ['only' => ['index','show']]);
        $this->middleware('role_or_permission:Eventimage create', ['only' => ['create','store']]);
        $this->middleware('role_or_permission:Eventimage edit', ['only' => ['edit','update']]);
        $this->middleware('role_or_permission:Eventimage delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Event= Event::paginate(4);

        return view('backend.eventimage.index',['events'=>$Event]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.event.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event_id = $request->input('event_id');
        $this->validate($request, [
        'event_id' => 'required',
        'photos'=>'required',
        ]);


        if($request->has('photos')){

         $allowedfileExtension=['pdf','jpg','png','docx'];    
            foreach($request->photos as $image){

                 $filename = $image->getClientOriginalName();
                 $extension = $image->getClientOriginalExtension();
                 $image->move(public_path('event_images'),$filename);
                Gallery::create([
                   'event_id' =>$event_id,
                   'event_image' =>$filename
                ]);
            }
        }
        return redirect()->back()->withSuccess('Event Image created !!!');
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
       return view('backend.event.edit',['event' => $event]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $event->update($request->all());
        return redirect()->back()->withSuccess('Event updated !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->back()->withSuccess('Event deleted !!!');
    }
}
