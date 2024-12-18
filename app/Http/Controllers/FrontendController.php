<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Post;
use App\Models\ContactUs;
use App\Models\Slider;
use App\Models\Administrative;
use App\Models\Fleet;
use App\Models\CvFormat;
use App\Models\PrincipalService;
use App\Models\GalleryImage;

class FrontendController extends Controller

{
    public function index()
    {
        $category = Category::orderBy('position', 'ASC')->get();
        $subcategories = SubCategory::all();
        $sliders = Slider::all();
        $postdata = Post::where('category_id', '=', 1)->get();
        $galleryimages = GalleryImage::all();
        return view('frontend.index', compact('category', 'subcategories', 'sliders', 'postdata','galleryimages'));
    }

    public function getpagedata($id)
    {
        $category = Category::orderBy('position', 'ASC')->get();
        $categories = Category::find($id);
        $subcategory = SubCategory::all();
        $subcat = SubCategory::find($id);
        $administrative = Administrative::all();
        $fleet = Fleet::all();
        if($id ==1)
        {
            $postdata = Post::where('category_id', '=', $id)->get();
             $sliders = Slider::all();
            $galleryimages = GalleryImage::all(); 
            return view('frontend.index', compact('category', 'subcategory', 'subcat', 'postdata', 'categories', 'sliders', 'galleryimages'));
        }
        elseif($id ==2)
        {
            $postdata = Post::where('category_id', '=', $id)->get();
            return view('frontend.category_page', compact('category', 'subcategory', 'subcat', 'postdata', 'categories', 'administrative'));
        }

        elseif($id ==3)
        {
            $postdata = Post::where('subcategory_id', '=', $id)->get();
            return view('frontend.mission_vision', compact('category', 'subcategory', 'subcat', 'postdata'));
        }

          elseif($id ==4)
        {
            $postdata = Post::where('subcategory_id', '=', $id)->get();
            return view('frontend.fleet', compact('category', 'subcategory', 'subcat', 'postdata', 'categories', 'fleet'));
        }

        elseif($id ==5)
        {
            $postdata = Post::where('subcategory_id', '=', $id)->get();
            return view('frontend.apply_online_admision', compact('category', 'subcategory', 'subcat', 'postdata'));
        }

        elseif($id ==6)
        {
            $postdata = Post::where('subcategory_id', '=', $id)->get();
            return view('frontend.team', compact('category', 'subcategory', 'subcat', 'postdata', 'categories', 'administrative'));
        }

        elseif($id ==7)
        {
            $cvfiles = CvFormat::all();
            $postdata = Post::where('subcategory_id', '=', $id)->get();
            return view('frontend.career', compact('category', 'subcategory', 'subcat', 'postdata', 'categories', 'cvfiles'));
        }

        elseif($id ==8)
        {
            $contactus = ContactUs::all();
            return view('frontend.contact', compact('contactus', 'category', 'subcategory', 'categories'));
        }

               elseif($id ==9)
        {
            
            return view('frontend.complain', compact('category', 'subcategory', 'categories'));
        }



        
    }

    public function categoryPage($id)
    {

        $category = Category::all();
        $categories = Category::find($id);
        $subcategories = SubCategory::all();
        $subcat = SubCategory::find($id);
        

        $postdata = Post::where('subcategory_id', '=', $id)->get();
            return view('frontend.sub_category_page', compact('category', 'subcategories', 'subcat', 'postdata', 'categories'));
          
        
    }

        public function getsubcategory($cat_id)
    {

        $subcategories = SubCategory::where('category_id', '=', $cat_id )->get();
        return response()->json([
            'subcategories' => $subcategories
        ]);
    }

        public function aboutPage()
    {
        $id = 2;
        $category = Category::orderBy('position', 'ASC')->get();
        $cate = Category::where('id', '=', 2)->get();
        $categories = Category::find($id);
        $subcategory = SubCategory::all();
        $postdata = Post::where('subcategory_id', '=', 2)->get();
        return view('frontend.category_page', compact('cate', 'postdata', 'subcategory', 'categories', 'category'));
    }


    public function careerPage()
    {
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('frontend.career', compact('category', 'subcategory'));
    }




    public function contactPage()
    {
        return view('frontend.contact');
    }

        public function getprofilepage($id)
    {
      $category = Category::all();
      $subcategory = SubCategory::all(); 
      $team = Administrative::where('id', '=', $id )->get();
       return view('frontend.profile_page', compact('category', 'subcategory', 'team'));
    }

}
