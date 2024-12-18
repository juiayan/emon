<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;

class SubCategoryController extends Controller
{
         function __construct()
    {
        $this->middleware('role_or_permission:SubCategory access|SubCategory create|SubCategory edit|SubCategory delete', ['only' => ['index','show']]);
        $this->middleware('role_or_permission:SubCategory create', ['only' => ['create','store']]);
        $this->middleware('role_or_permission:SubCategory edit', ['only' => ['edit','update']]);
        $this->middleware('role_or_permission:SubCategory delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $subcategories= SubCategory::all();

        return view('admin.subcategory', compact('subcategories', 'categories'));
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
        $subcategory = new SubCategory();
        if($request->hasFile('subcat_image'))
        {
            $file = $request->file('subcat_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move(public_path('uploads/subcat_images/'), $filename);
            $subcategory->subcat_image = $filename;
        }

        $subcategory->category_id      = $request->input('category_id');
        $subcategory->sub_category     = $request->input('sub_category');
        $subcategory->short_description = $request->input('short_description');
        $subcategory->status           = $request->input('status');
        $subcategory->save();


        return redirect('admin/subcategories')->with('status', 'Sub Category insert Success');
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
        $subcategory = SubCategory::find($id);
        $categories = Category::all(); 
       return view('admin.editsubcategory',['subcategory' => $subcategory, 'categories' => $categories]);
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
        $subcategory = SubCategory::find($id);
        if($request->hasFile('subcat_image'))
        {
            $file = $request->file('subcat_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move(public_path('uploads/subcat_images/'), $filename);
            $subcategory->subcat_image = $filename;
        }

        $subcategory->category_id      = $request->input('category_id');
        $subcategory->sub_category     = $request->input('sub_category');
        $subcategory->short_description = $request->input('short_description');
        $subcategory->status           = $request->input('status');
        $subcategory->update();
        
        return redirect('admin/subcategories')->with('status', 'Category Update Successfully');
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcategory = SubCategory::find($id);
        $subcategory->delete();
        return redirect()->back()->withSuccess('Post deleted !!!');
    }

        public function getsubcategory($cat_id)
    {

        $subcategories = SubCategory::where('category_id', '=', $cat_id )->get();
      
        echo json_encode($subcategories);
    }
}
