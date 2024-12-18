@extends('layouts.frontend')
@section('content')
<style type="text/css">
  .image_left{
  float: left;
  width: 400px;
  position: relative;
}
.image_right{
  float: right;
}
</style>
<!-- Section: inner-header -->

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg-1 jarallax"  data-jarallax='{"speed": 0.3}'>
      <div class="container">
        <div class="page-title-content">
          <div class="row align-items-center">
            <div class="col-lg-6 col-sm-6">
              <h2>Service Details</h2>
            </div>
            <div class="col-lg-6 col-sm-6">
              <ul>
                <li>
                  <a href="index.html">
                    Home 
                  </a>
                </li>
                <li>Service Details</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Title Area -->
  <!-- End Service Details Area -->
    <section class="service-details-area ptb-100">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="service-sidebar-area">
              <div class="service-list service-card">
                <h3 class="service-details-title">Facility</h3>
                <ul>
                  <li>
                    Drive a new  car 
                    <i class='bx bx-check'></i>
                  </li>
                  <li>
                    Pre sale preparation
                    <i class='bx bx-check'></i>
                  </li>
                  <li>
                    Trade in Services
                    <i class='bx bx-check'></i>
                  </li>
                  <li>
                    Financing 
                    <i class='bx bx-check'></i>
                  </li>
                </ul>
              </div>
              <div class="service-faq service-card">
                <h3 class="service-details-title">FAQ</h3>
                <div class="faq-area">
                  <div class="questions-bg-area">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="faq-accordion">
                          <ul class="accordion">
                            <li class="accordion-item">
                              <a class="accordion-title active" href="javascript:void(0)">
                                <span>1</span>
                                Email and user setting?
                              </a>
                              <p class="accordion-content show">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis deleniti nisi necessitatibus, dolores voluptates quam blanditiis fugiat doloremque? Excepturi, minus rem error aut necessitatibus quasi voluptates assumenda ipsum provident tenetur? Lorem.</p>
                            </li>
                            <li class="accordion-item">
                              <a class="accordion-title" href="javascript:void(0)">
                                <span>2</span>
                                Import new billing system data?
                              </a>
                              <p class="accordion-content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis deleniti nisi necessitatibus, dolores voluptates quam blanditiis fugiat doloremque? Excepturi, minus rem error aut necessitatibus quasi voluptates assumenda ipsum provident tenetur? Lorem.</p>
                            </li>
                            <li class="accordion-item">
                              <a class="accordion-title" href="javascript:void(0)">
                                <span>3</span>
                                Working with integrated apps?
                              </a>
                              <p class="accordion-content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis deleniti nisi necessitatibus, dolores voluptates quam blanditiis fugiat doloremque? Excepturi, minus rem error aut necessitatibus quasi voluptates assumenda ipsum provident tenetur? Lorem.</p>
                            </li>
                            <li class="accordion-item">
                              <a class="accordion-title" href="javascript:void(0)">
                                <span>4</span>
                                Two factor authentication?
                              </a>
                              <p class="accordion-content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis deleniti nisi necessitatibus, dolores voluptates quam blanditiis fugiat doloremque? Excepturi, minus rem error aut necessitatibus quasi voluptates assumenda ipsum provident tenetur? Lorem.</p>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> 
              </div>
              <div class="service-list service-card">
                <h3 class="service-details-title">Contact Info</h3>
                <ul>
                  <li>
                    <a href="tel:+8006036035">
                      +800 603 6035
                      <i class='bx bx-phone-call bx-rotate-270'></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#523a373e3e3d12222037243d287c313d3f">
                      <span class="__cf_email__" data-cfemail="b9d1dcd5d5d6f9c9cbdccfd6c397dad6d4">[email&#160;protected]</span>
                      <i class='bx bx-envelope'></i>
                    </a>
                  </li>
                  <li>
                    3261 Anmoore Road, NY 11230
                    <i class='bx bx-location-plus'></i>
                  </li>
                  <li>
                    9:00 AM – 8:00 PM
                    <i class='bx bx-time'></i>
                  </li>
                </ul>
              </div>
              <div class="service-list service-card">
                <h3 class="service-details-title">Download Brochures</h3>
                <ul>
                  <li>
                    <a href="#">
                      PDF File (1)
                      <i class='bx bxs-cloud-download'></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      PDF File (2)
                      <i class='bx bxs-cloud-download'></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      PDF File (3)
                      <i class='bx bxs-cloud-download'></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      PDF File (4)
                      <i class='bx bxs-cloud-download'></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
              @foreach($postdata as $post)  
            <div class="service-details-wrap">
              <div class="service-img">
                <img src="{{asset('uploads/post_images/'.$post->post_image)}}" alt="Emon Enterprise Pet Flakes Supplier">
              </div>
              <h3>{{$post->title}}</h3>
              <p>{!! $post->description !!}</p>

           
              
           
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
    <!-- End Service Details Area -->    
<section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="{{asset('uploads/subcat_images/'.$subcat->subcat_image)}}">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-6">
              <h2 class="text-theme-colored2 font-36">{{$subcat->sub_category}}</h2>
            
            </div>
          </div>
        </div>
      </div>
</section>



@endsection