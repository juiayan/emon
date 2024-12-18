@extends('layouts.frontend')
@section('content')


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