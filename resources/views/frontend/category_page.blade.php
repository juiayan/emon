@extends('layouts.frontend')
@section('content')

<div class="page-title-area"  data-jarallax='{"speed": 0.3}' style="background-image: url('{{asset('uploads/category_image/'.$categories->category_image)}}">
      <div class="container">
        <div class="page-title-content">
          <div class="row align-items-center">
            <div class="col-lg-6 col-sm-6">
              <h2>{{$categories->category_name}}</h2>
            </div>
            <div class="col-lg-6 col-sm-6">
              <ul>
                <li>
                  <a href="{{url('/')}}">
                    Home 
                  </a>
                </li>
                <li>{{$categories->category_name}}</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Title Area -->
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
           
              <h2>{{$post->title}}</h2>
              <p>{!! $post->description !!}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </section>
    <!-- End About Area -->

@endsection