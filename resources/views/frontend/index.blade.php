@extends('layouts.frontend')
@section('content')
@include('layouts.slider')
    <!-- Section: About -->
    <section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-sm-6 col-md-4 maxwidth500 mb-sm-40 wow fadeInUp" data-margin-top="-140px" data-wow-duration="1s" data-wow-delay="0.1s">
              <img class="img-fullwidth" src="{{asset('frontend/images/pet-flakes.jpg')}}" alt="">
              <div class="bg-lighter border-1px p-20 pt-0 mb-sm-180">
                <h4 class="font-weight-700 mt-20">Pet Flakes</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero omnis unde nesciunt?</p>
                <a href="#" class="btn btn-sm btn-theme-colored">Read more</a>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 maxwidth500 mb-sm-40 wow fadeInUp" data-margin-top="-140px" data-wow-duration="1s" data-wow-delay="0.1s">
              <img class="img-fullwidth" src="{{asset('frontend/images/chemical.png')}}" alt="">
              <div class="bg-lighter border-1px p-20 pt-0 mb-sm-180">
                <h4 class="font-weight-700 mt-20">Industrial Chemical</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero omnis unde nesciunt?</p>
                <a href="#" class="btn btn-sm btn-theme-colored">Read more</a>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 maxwidth500 mb-sm-0 wow fadeInUp" data-margin-top="-140px" data-wow-duration="1s" data-wow-delay="0.1s">
              <img class="img-fullwidth" src="{{asset('frontend/images/importexport.png')}}" alt="">
              <div class="bg-lighter border-1px p-20 pt-0">
                <h4 class="font-weight-700 mt-20">Exprot Import</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero omnis unde nesciunt?</p>
                <a href="#" class="btn btn-sm btn-theme-colored">Read more</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
<div class="container-fluid" style="background:#ecf0f1">
  <div class="container">
    <div class="row">
                                       <div class="contain">
  <p class="is-visible">Welcome To Emon Enterprise</p>
  <p>PET Flakes and PET Strap Industry is one of the largest PET strap manufacturering company in Bangladesh at Chattogram</p>
  <p>PET Flakes and PET Strap Industry is one of the largest PET strap manufacturering company in Bangladesh at Chattogram</p>
  <p>PET Flakes and PET Strap Industry is one of the largest PET strap manufacturering company in Bangladesh at Chattogram</p>
</div>
      
    </div>
  </div>
</div>
<!-- Start Why Choose Us Area -->
    <section>
      <div class="container">
        <div class="section-title">
          
          
        </div>
         @foreach($postdata as $post)    
        <div class="row">
          <div class="col-lg-7">
         
              <h2>{{$post->title}}</h2>
              <p style="text-align: justify;"> {!! $post->description !!}</p>
             
            
           
          </div>
          <div class="col-lg-5">
              <img src="{{asset('uploads/post_images/'.$post->post_image)}}">
           
          </div>
        </div>
        @endforeach
      </div>
    </section>
    <!-- End Why Choose Us Area -->

    <!-- Gallery Grid 3 -->
    <section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <!-- Portfolio Filter -->
              <div class="portfolio-filter">
                <a href="#" class="active" data-filter="*">All</a>
                 <a href="#design" class="" data-filter=".design">Pet Fakes</a>
                 <a href="#branding" class="" data-filter=".branding">Industrial Chemical</a>
                
              </div>
              <!-- End Portfolio Filter -->

              <!-- Portfolio Gallery Grid -->
              <div class="gallery-isotope grid-3 gutter-small clearfix" data-lightbox="gallery">
                <!-- Portfolio Item Start -->
                @foreach($galleryimages as $image)
                @if($image->image_category_id ==1)
                <div class="gallery-item design">
                  <div class="thumb">
                    <img class="img-fullwidth" src="{{asset('uploads/gallery_images/'.$image->image_name)}}" alt="project" width="200" height="300">
                    <div class="overlay-shade"></div>
                    <div class="text-holder">
                      <div class="title text-center"></div>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="{{asset('uploads/gallery_images/'.$image->image_name)}}" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                @endif
                 @if($image->image_category_id ==2)
                <!-- Portfolio Item Start -->
                <div class="gallery-item branding photography">
                  <div class="thumb">
                    <img class="img-fullwidth" src="{{asset('uploads/gallery_images/'.$image->image_name)}}" alt="project" width="200" height="300">
                    <div class="overlay-shade"></div>
                    <div class="text-holder">
                      <div class="title text-center"></div>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="{{asset('uploads/gallery_images/'.$image->image_name)}}" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                @endif
                @endforeach
              


              </div>
              <!-- End Portfolio Gallery Grid -->

            </div>
          </div>
        </div>
      </div>
    </section>
 
@endsection
