<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Administrative;
use Illuminate\Support\Facades\File;
use App\Models\GalleryImage;
use App\Models\ImageCategory;


class AdministrativeController extends Controller
{
      function __construct()
    {
        $this->middleware('role_or_permission:Administrative access|Administrative create|Administrative edit|Administrative delete', ['only' => ['index','show']]);
        $this->middleware('role_or_permission:Administrative create', ['only' => ['create','store']]);
        $this->middleware('role_or_permission:Administrative edit', ['only' => ['edit','update']]);
        $this->middleware('role_or_permission:Administrative delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $administrative = Administrative::all();
        return view('admin.our_team', compact('administrative'));
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

        $adminmember = new Administrative();
        if($request->hasFile('admin_image'))
        {
            $file = $request->file('admin_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move(public_path('uploads/adminmember_images/'), $filename);
            $adminmember->admin_image = $filename;
        }

            if($request->hasFile('profile_image'))
        {
            $file = $request->file('profile_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move(public_path('uploads/profileimage/'), $filename);
            $adminmember->profile_image = $filename;
        }


        $adminmember->name                      = $request->input('name');
        $adminmember->designation               = $request->input('designation');
        $adminmember->qualification             = $request->input('qualification');
        $adminmember->position                  = $request->input('position');
        $adminmember->profile                   = $request->input('profile');    
        $adminmember->save();

        return redirect('admin/administrtive')->with('status', 'Administrative Member insert Success');
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
      $member = Administrative::find($id);
      return view('admin.editadmin',['member' => $member]);
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
        $adminmember = Administrative::find($id);
        if($request->hasFile('admin_image'))
        {
              $path = '/uploads/adminmember_images/'.$adminmember->admin_image;
              if(File::exists($path))
              {
                  File::delete($path);
              }
  
              $file = $request->file('admin_image');
              $ext = $file->getClientOriginalExtension();
              $filename = time().'.'.$ext;
              $file->move(public_path('uploads/adminmember_images/'), $filename);
              $adminmember->admin_image = $filename;
  
        }

        if($request->hasFile('profile_image'))
        {
              $path = '/uploads/profileimage/'.$adminmember->profile_image;
              if(File::exists($path))
              {
                  File::delete($path);
              }
  
              $file = $request->file('profile_image');
              $ext = $file->getClientOriginalExtension();
              $filename = time().'.'.$ext;
              $file->move(public_path('uploads/profileimage/'), $filename);
              $adminmember->profile_image = $filename;
        }
  
        $adminmember->name                      = $request->input('name');
        $adminmember->designation               = $request->input('designation');
        $adminmember->qualification             = $request->input('qualification');
        $adminmember->position                  = $request->input('position');
        $adminmember->profile                   = $request->input('profile');      
        $adminmember->update();
        return redirect('admin/administrtive')->with('status', 'Faculty Admin & Member Update Successfully');
     
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

    public function gallery_image()
    {
        $images = GalleryImage::all();
        return view('admin.gallery_image_list', compact('images'));
    }

    public function add_gallery_image(Request $request)
    {
        $image = new GalleryImage();
        if($request->hasFile('image_name'))
        {
            $file = $request->file('image_name');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move(public_path('uploads/gallery_images/'), $filename);
            $image->image_name = $filename;
        }
        $image->image_category_id = $request->image_category_id;
        $image->image_title = $request->image_title;
        $image->status = $request->status;
        $image->save();
        return redirect()->route('admin.galleryimage.index')->withSuccess('Galler Image Created Successfully');

    }

    public function updateimage(Request $request, $id)
    {
        $galleryimage = GalleryImage::find($id);
          if($request->hasFile('image_name'))
        {
              $path = '/uploads/gallery_images/'.$galleryimage->image_name;
              if(File::exists($path))
              {
                  File::delete($path);
              }
  
              $file = $request->file('image_name');
              $ext = $file->getClientOriginalExtension();
              $filename = time().'.'.$ext;
              $file->move(public_path('uploads/gallery_images/'), $filename);
              $galleryimage->image_name = $filename;
        }

        $galleryimage->image_category_id = $request->image_category_id;
        $galleryimage->image_title = $request->image_title;
        $galleryimage->status = $request->status;
        $galleryimage->update();
        return redirect()->route('admin.galleryimage.index')->withSuccess('Galler Image Updated Successfully');
    }

    public function imagedelete($id)
    {
        $galleryimage = GalleryImage::find($id);
         $path = '/uploads/gallery_images/'.$galleryimage->image_name;
              if(File::exists($path))
              {
                  File::delete($path);
              }

        $galleryimage->delete();
        return redirect()->route('admin.galleryimage.index')->withSuccess('Galler Image Deleted Successfully');
              

    }

        public function imagecategory()
    {
        $imagecategories = ImageCategory::all();
        return view('admin.image_category_list', compact('imagecategories'));
    }

    public function add_image_category(Request $request)
    {
        $imagecategory = new ImageCategory();
        $imagecategory->image_category = $request->image_category;
        $imagecategory->status = $request->status;
        $imagecategory->save();
        return redirect()->route('admin.imagecategory.index')->withSuccess('Galler Image Category Created Successfully');

    }

        public function update_image_category(Request $request, $id)
    {
        $imagecategory =  ImageCategory::find($id);
        $imagecategory->image_category = $request->image_category;
        $imagecategory->status = $request->status;
        $imagecategory->update();
        return redirect()->route('admin.imagecategory.index')->withSuccess('Galler Image Category Updated Successfully');

    }

    public function deleteimagecategory($id)
    {
        $imagecategory = ImageCategory::find($id);
        $imagecategory->delete();
        return redirect()->route('admin.imagecategory.index')->withSuccess('Galler Image Category Deleted Successfully');
              

    }
}
