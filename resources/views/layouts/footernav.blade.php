  <!-- Footer -->
  <footer id="footer" class="footer divider layer-overlay overlay-dark-9" data-bg-img="{{asset('frontend/images/bg/bg2.jpg')}}">
    <div class="container">
      <div class="row">

        <div class="col-sm-6 col-md-4">
          <div class="widget dark">
            <h4 class="widget-title">Useful Links</h4>
            <ul class="list angle-double-right list-border">
             
             <li><a href="http://www.bteb.gov.bd/" target="_blank">BTEB</a></li>
             <li><a href="https://www.duet.ac.bd/" target="_blank">DUET</a></li>
             <li><a href="https://www.cuet.ac.bd/" target="_blank">CUET</a></li>
            
               
            </ul>
          </div>
        </div>

        <div class="col-sm-6 col-md-4">
          <div class="widget dark">
            <h4 class="widget-title line-bottom-theme-colored-2">Opening Hours</h4>
            <div class="opening-hours">
              <ul class="list-border">
                <li class="clearfix"> <span> Mon - Tues :  </span>
                  <div class="value pull-right"> 6.00 am - 10.00 pm </div>
                </li>
                <li class="clearfix"> <span> Wednes - Thurs :</span>
                  <div class="value pull-right"> 8.00 am - 6.00 pm </div>
                </li>
                <li class="clearfix"> <span> Fri : </span>
                  <div class="value pull-right"> 3.00 pm - 8.00 pm </div>
                </li>
                <li class="clearfix"> <span> Sun : </span>
                  <div class="value pull-right"> Closed </div>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4">
          <div class="widget dark">
            <img class="mt-5 mb-20" alt="" src="{{asset('images/banner2.png')}}">
              <?php $contactus = DB::table('contactus')->skip(0)->take(1)->get(); ?>
            @foreach($contactus as $contact)
            <p>{{$contact->address}}}</p>
            <ul class="list-inline mt-5">
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-color-2 mr-5"></i> <a class="text-gray" href="#">{{$contact->phone_one}}}</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-color-2 mr-5"></i> <a class="text-gray" href="#">{{$contact->email_one}}}</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-color-2 mr-5"></i> <a class="text-gray" href="#">www.msti.edu.bd</a> </li>
            </ul>
            @endforeach
            <ul class="styled-icons icon-bordered icon-sm">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
     
            </ul>
          </div>
        </div>

      </div>
    </div>
    <div class="footer-bottom bg-black-333">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-6">
            <p class="font-11 text-black-777 m-0">Copyright &copy;<?php echo date('Y-m-d');?> MSTI Science & Technology. All Rights Reserved</p>
          </div>
          <div class="col-md-6 text-right">
            <div class="widget no-border m-0">
              <ul class="list-inline sm-text-center mt-5 font-12">
                <li>
                  <a href="#">Design & Developed By:</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">JuiiT</a>
                </li>
               
               
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>