<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Gallery;
use Auth;
class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('role_or_permission:Event access|Event create|Event edit|Event delete', ['only' => ['index','show']]);
        $this->middleware('role_or_permission:Event create', ['only' => ['create','store']]);
        $this->middleware('role_or_permission:Event edit', ['only' => ['edit','update']]);
        $this->middleware('role_or_permission:Event delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $response = Http::withBasicAuth('http://rumytechnologies.com/rams/json_api', 'r7r9itcz4rozq8w11v1hcssfi5f87t3')->post(/* ... */);

        $datapayload = json_encode($response);

        foreach ($datapayload as $data) {
        print_r($data);
        }

        $Event= Event::paginate(4);

        return view('backend.event.index',['events'=>$Event], compact('data'));
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
        $data= $request->all();
        $Event = Event::create($data);
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
