<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
      function __construct()
    {
        $this->middleware('role_or_permission:Contactus access|Contactus create|Contactus edit|Contactus delete', ['only' => ['index','show']]);
        $this->middleware('role_or_permission:Contactus create', ['only' => ['create','store']]);
        $this->middleware('role_or_permission:Contactus edit', ['only' => ['edit','update']]);
        $this->middleware('role_or_permission:Contactus delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactus = ContactUs::all();

        return view('admin.contact', compact('contactus'));
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
        $contact = ContactUs::create($data);
        return redirect('admin/contactus')->with('status', 'Contact Page Create Success');
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
        $contact = ContactUs::find($id);
       return view('admin.editcontact',['contact' => $contact]);
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
        $contact = ContactUs::find($id);
        $contact->update($request->all());
        return redirect('admin/contactus')->with('status', 'Contact Us Update Successfully');
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->back()->withSuccess('Post deleted !!!');
    }
}
