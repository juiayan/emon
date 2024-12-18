@extends('layouts.frontend')
@section('content')
   <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="{{asset('uploads/subcat_images/'.$subcat->subcat_image)}}">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white">{{$subcat->sub_category}}</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="#">{{$subcat->sub_category}}</a></li>
               
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Section: About -->
    <section class="">
      <div class="container">
        <div class="section-content">
         @foreach($postdata as $post)		
          <div class="row">
            <div class="col-md-6">
              <img class="pull-left mr-15 thumbnail" src="{{asset('uploads/post_images')}}/{{$post->post_image}}" alt="">
            </div>
            <div class="col-md-6">
           
              <p align="justify">{!! $post->description !!}</p>
             
            </div>

          </div>
          @endforeach
        </div>
      </div>
    </section>
@endsection