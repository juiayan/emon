@extends('layouts.frontend')
@section('title')
    Naaf Marine Services
@endsection
@section('content')



    <!-- Start Sidebar Modal -->
    <div class="sidebar-modal">  
      <div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">
                  <i class="bx bx-x"></i>
                </span>
              </button>
              </button>
              <h2 class="modal-title" id="myModalLabel2">
                <a href="index.html">
                  <img src="assets/img/logo/logo-one.png" alt="Logo">
                </a>
              </h2>
            </div>
            <div class="modal-body">
              <div class="sidebar-modal-widget">
                <h3 class="title">About Us</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, asperiores doloribus eum laboriosam praesentium delectus unde magni aut perspiciatis cumque deserunt dolore voluptate, autem pariatur? Dicta pariatur.</p>
              </div>
              <div class="sidebar-modal-widget">
                <h3 class="title">Additional Links</h3>
                <ul>
                  <li>
                    <a href="log-in.html">Log In</a>
                  </li>
                  <li>
                    <a href="sign-up.html">Sign Up</a>
                  </li>
                  <li>
                    <a href="faq.html">FAQ</a>
                  </li>
                  <li>
                    <a href="#">Logout</a>
                  </li>
                </ul>
              </div>
              <div class="sidebar-modal-widget">
                <h3 class="title">Contact Info</h3>
                <ul class="contact-info">
                  <li>
                    <i class="bx bx-location-plus"></i>
                    Address
                    <span>New York - 1060, Str. First 78 Great Western Road</span>
                  </li>
                  <li>
                    <i class="bx bx-envelope"></i>
                    Email
                    <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#2048454c4c4f60505245564f5a0e434f4d"><span class="__cf_email__" data-cfemail="127a777e7e7d52626077647d683c717d7f">[email&#160;protected]</span></a>
                    <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#167f7870795666647360796c3875797b"><span class="__cf_email__" data-cfemail="472e2921280737352231283d6924282a">[email&#160;protected]</span></a>
                  </li>
                  <li>
                    <i class="bx bxs-phone-call"></i>
                    Phone
                    <a href="tel:+502-464-679">+502-464-679</a>
                    <a href="tel:+265-497-466">+265-497-466</a>
                  </li>
                </ul>
              </div>
              <div class="sidebar-modal-widget">
                <h3 class="title">Connect With Us</h3>
                <ul class="social-list">
                  <li>
                    <a href="#">
                      <i class='bx bxl-twitter'></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class='bx bxl-facebook'></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class='bx bxl-instagram'></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class='bx bxl-linkedin'></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class='bx bxl-youtube'></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Sidebar Modal -->



    <!-- Start Page Title Area -->
  <div class="page-title-area jarallax"  data-jarallax='{"speed": 0.3}' style=" background-image: url('{{asset('uploads/category_image/'.$categories->category_image)}}');">
      <div class="container">
        <div class="page-title-content">
          <div class="row align-items-center">
            <div class="col-lg-6 col-sm-6">
              <h2>Contact</h2>
            </div>
            <div class="col-lg-6 col-sm-6">
              <ul>
                <li>
                  <a href="index.html">
                    Home 
                  </a>
                </li>
                <li>Contact</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Address Area -->
    <section class="address-area pt-100 pb-70">
      <div class="container">
        <?php $contact = DB::table('contactus')->skip(0)->take(1)->get(); ?>
                @foreach($contact as $row)  
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="single-address">
              <i class='bx bx-location-plus'></i>
              <h3>Location</h3>
              <span>Find where we are</span>
              <p>{{$row->address}}</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="single-address">
              <i class='bx bx-phone-call'></i>
              <h3>Contact Phone</h3>
              <span>Talk to support</span>
              <p>{{$row->phone_one}}<br>{{$row->phone_two}}</p>
             
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="single-address">
              <i class='bx bx-phone-call'></i>
              <h3>Contact Email</h3>
              <span>Talk to support</span>
              <p>{{$row->email_one}}<br>{{$row->email_two}}<br></p>
             
            </div>
          </div>

          <div class="col-lg-2 col-md-4 offset-md-3 offset-lg-0">
            <div class="single-address">
              <i class='bx bx-time'></i>
              <h3>Meet Us</h3>
              <span>Available Hours to meet</span>
              <p>9:00 AM – 5:00 PM</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </section>
    <!-- End Address Area -->

    <!-- Start Map Area -->
    <div class="contact-map-area">
      <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.6574115257195!2d91.8125269!3d22.328792699999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd9007e589b3d%3A0xe07bcf8e395d4a62!2sEmon%20Enterprise!5e0!3m2!1sen!2sbd!4v1694175274109!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
    <!-- End Map Area -->

    <!-- Start Contact Area -->
    <section class="contact-area ptb-100">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="contact-wrap contact-pages mb-0">
              <div class="contact-form">
                <div class="section-title">
                  <span class="pumpkin-color">information</span>
                  <h2>Drop us a message for any query</h2>
                </div>
                <form id="contactForm">
                  <div class="row">
                    <div class="col-lg-6 col-sm-6">
                      <div class="form-group">
                        <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
      
                    <div class="col-lg-6 col-sm-6">
                      <div class="form-group">
                        <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
      
                    <div class="col-lg-6 col-sm-6">
                      <div class="form-group">
                        <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Your Phone">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
      
                    <div class="col-lg-6 col-sm-6">
                      <div class="form-group">
                        <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Your Subject">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
      
                    <div class="col-lg-12 col-md-12">
                      <div class="form-group">
                        <textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Write your message" placeholder="Your Message"></textarea>
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
      
                    <div class="col-lg-12 col-md-12">
                      <button type="submit" class="default-btn btn-two">
                        Send Message
                      </button>
                      <div id="msgSubmit" class="h3 text-center hidden"></div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Area -->




 @endsection