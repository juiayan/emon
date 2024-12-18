@extends('layouts.frontend')
@section('content')
@foreach($cate as $category)
  <!-- Start Page Title Area -->
<div class="page-title-area"  data-jarallax='{"speed": 0.3}' style="background-image: url('{{asset('uploads/category_image/'.$category->category_image)}}" alt="{{$category->alt_message}}');">
      <div class="container">
        <div class="page-title-content">
          <div class="row align-items-center">
            <div class="col-lg-6 col-sm-6">
              <h2>{{$category->category_name}}</h2>
            </div>
            <div class="col-lg-6 col-sm-6">
              <ul>
                <li>
                  <a href="index.html">
                    Home 
                  </a>
                </li>
                <li>{{$category->category_name}}</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Title Area -->
@endforeach

      <!-- Start About Area -->
    <section class="about-area ptb-100">
      <div class="container">
        @foreach($postdata as $post)    
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="about-img">
              <img src="{{asset('uploads/post_images/'.$post->post_image)}}" alt="Image">
              <div class="about-quatre">
                <i class="bx bxs-quote-alt-left bx-tada"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="about-content ml-30">
              <span>About Us</span>
              <h2>{{$post->title}}</h2>
              <p class="mb-0"> {!! $post->description !!}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </section>
    <!-- End About Area -->

@endsection