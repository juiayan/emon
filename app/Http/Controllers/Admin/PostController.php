<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Post;
use App\Models\Category;
use App\Models\SubCategory;
use Auth;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('role_or_permission:Post access|Post create|Post edit|Post delete', ['only' => ['index','show']]);
        $this->middleware('role_or_permission:Post create', ['only' => ['create','store']]);
        $this->middleware('role_or_permission:Post edit', ['only' => ['edit','update']]);
        $this->middleware('role_or_permission:Post delete', ['only' => ['destroy']]);
     
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('post.new', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
   
        $post = new Post();
        if($request->hasFile('post_image'))
        {
            $file = $request->file('post_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move(public_path('uploads/post_images/'), $filename);
            $post->post_image = $filename;
        }

        $post->title                = $request->input('title');
        $post->description          = $request->input('description');
        $post->category_id          = $request->input('category_id');
        $post->subcategory_id       = $request->input('subcategory_id');
        $post->category_id          = $request->input('category_id');
        $post->user_id              = Auth::user()->id;
        $post->image_position       = $request->input('image_position');
        $post->publish              = $request->input('publish');
        $post->save();


        return redirect()->back()->withSuccess('Post created !!!');
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
       $post = Post::find($id);
       $category = Category::all();
       $subcategory = SubCategory::all(); 
       return view('post.edit',['post' => $post, 'category' => $category, 'subcategory' => $subcategory]);
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
        $post = Post::find($id);
        if($request->hasFile('post_image'))
        {   
            $path = '/uploads/post_images/'.$post->post_image;
            if(File::exists($path))
            {
                File::delete($path);
            }

            $file = $request->file('post_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move(public_path('/uploads/post_images/'), $filename);
            $post->post_image = $filename;
        }


        $post->title                = $request->input('title');
        $post->description          = $request->input('description');
        $post->category_id          = $request->input('category_id');
        $post->subcategory_id       = $request->input('subcategory_id');
        $post->user_id              = Auth::user()->id;
        $post->image_position       = $request->input('image_position');
        $post->publish              = $request->input('publish');
        $post->update();
        return redirect('admin/posts')->with('status', 'Post Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->back()->withSuccess('Post deleted !!!');
    }

            public function getsubcat($cat_id)
    {

        $subcategories = SubCategory::where('category_id', '=', $cat_id )->get();
      
        echo json_encode($subcategories);
    }


}
