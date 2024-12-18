<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    function __construct()
    {
        $this->middleware('role_or_permission:Mainslider access|Mainslider create|Mainslider edit|Mainslider delete', ['only' => ['index','show']]);
        $this->middleware('role_or_permission:Mainslider create', ['only' => ['create','store']]);
        $this->middleware('role_or_permission:Mainslider edit', ['only' => ['edit','update']]);
        $this->middleware('role_or_permission:Mainslider delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();

        return view('admin.slider', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.new');
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
        $sliders = Slider::create($data);
        return redirect('admin/sliders')->with('status', 'Slider insert Success');
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
       $slider = Slider::find($id);

       return view('admin.editslider',['slider' => $slider]);
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
        $slider = Slider::find($id);
        if($request->hasFile('slider_image'))
        {
             $file = $request->file('slider_image');
             $ext = $file->getClientOriginalExtension();
             $filename = time().'.'.$ext;
             $file->move(public_path('uploads/slider_images'), $filename);
             $slider->slider_image = $filename;
        }
        $slider->name = $request->input('name');
        $slider->title = $request->input('title');
        $slider->status = $request->input('status');
        $slider->update();
        return redirect('admin/sliders')->with('status', 'Slider Update Successfully');
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $id)
    {
        $slider = Slider::find($id);
        $slider->delete();
        return redirect('admin/sliders')->with('status', 'Slider Delete Successfully');
    }
}
