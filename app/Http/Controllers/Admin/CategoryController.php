<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
     function __construct()
    {
        $this->middleware('role_or_permission:Category access|Category create|Category edit|Category delete', ['only' => ['index','show']]);
        $this->middleware('role_or_permission:Category create', ['only' => ['create','store']]);
        $this->middleware('role_or_permission:Category edit', ['only' => ['edit','update']]);
        $this->middleware('role_or_permission:Category delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories= Category::all();

        return view('admin.category', compact('categories'));
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

        $categories = new Category();
        if($request->hasFile('category_image'))
        {
            $file = $request->file('category_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move(public_path('uploads/category_image/'), $filename);
            $categories->category_image = $filename;
        }

        $categories->category_name    = $request->input('category_name');
        $categories->position         = $request->input('position');
        $categories->subcat_status      = $request->input('subcat_status');
        $categories->status           = $request->input('status');
        $categories->save();


        return redirect('admin/categories')->with('status', 'Category insert Success');
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
        $category = Category::find($id);
       return view('admin.editcategory',['category' => $category]);
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
        $categories = Category::find($id);
        if($request->hasFile('category_image'))
        {
            $file = $request->file('category_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move(public_path('uploads/category_image/'), $filename);
            $categories->category_image = $filename;
        }

        $categories->category_name    = $request->input('category_name');
        $categories->position         = $request->input('position');
        $categories->subcat_status    = $request->input('subcat_status');
        $categories->status           = $request->input('status');
        $categories->update();

        return redirect('admin/categories')->with('status', 'Category Update Successfully');
     
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
