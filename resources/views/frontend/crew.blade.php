@extends('layouts.frontend')
@section('content')

<!-- Section: inner-header -->
<section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="{{asset('uploads/subcat_images/'.$subcat->subcat_image)}}">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-6">
              <h2 class="text-theme-colored2 font-36">{{$subcat->subcat_image}}</h2>
            
            </div>
          </div>
        </div>
      </div>
</section>


    <!-- Section: About -->
    <section>
      <div class="container pb-70">
        <div class="section-content">
              @foreach($postdata as $post)    
          <div class="row">
   
            <div class="col-md-12">
              <h2 class="text-uppercasetext-theme-colored mt-0 mt-sm-30">{{$post->title}}</h2>
              <div class="double-line-bottom-theme-colored-2"></div>
                {!! $post->description !!}
            </div>

          </div>
             @endforeach
        </div>
      </div>
    </section>
    <!-- Section: About -->

@endsection