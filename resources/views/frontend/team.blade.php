@extends('layouts.frontend')
@section('content')

<!-- Section: inner-header -->
<section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="{{asset('uploads/category_image/'.$categories->category_image)}}">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-6">
              <h2 class="text-theme-colored2 font-36">{{$categories->category_name}}</h2>
            
            </div>
          </div>
        </div>
      </div>
</section>

    <!-- Section: Team -->
    <section id="team" class="bg-silver-deep">
      <div class="container pb-40">

        <div class="row mtli-row-clearfix">
          <div class="col-xs-12 col-sm-6 col-md-4">

          </div>
          @foreach($administrative as $row1)
          @if($row1->id == 1)
          <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
              <div class="team-thumb">
                <img class="img-fullwidth" alt="" src="{{asset('uploads/adminmember_images/'. $row1->admin_image)}}">
                <div class="team-overlay"></div>
                <ul class="styled-icons team-social icon-sm">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
              <div class="team-details">
                <h4 class="text-uppercase text-theme-colored font-weight-600 m-5"><a href="{{url('getprofile')}}/{{$row1->id}}">{{$row1->name}}</a> </h4>
                <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">{{$row1->designation}}</h6>
                 <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">{{$row1->qualification}}</h6>
              </div>
            </div>
          </div>
          @endif
          @endforeach
          <div class="col-xs-12 col-sm-6 col-md-4">

          </div>

        </div><!--end row one--->
       
   
        <div class="row mtli-row-clearfix">
           @foreach($administrative as $row2)
          @if($row2->position == 1)
       
          <div class="col-xs-12 col-sm-6 col-md-3">

            <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
              <div class="team-thumb">
                <img class="img-fullwidth" alt="" src="{{asset('uploads/adminmember_images/'. $row2->admin_image)}}">
                <div class="team-overlay"></div>
                <ul class="styled-icons team-social icon-sm">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
              <div class="team-details">
                <h4 class="text-uppercase text-theme-colored font-weight-600 m-5"><a href="{{url('getprofile')}}/{{$row2->id}}">{{$row1->name}}</a></h4>
                <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">{{$row2->designation}}</h6>
                 <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">{{$row2->qualification}}</h6>
              </div>
            </div>
          </div>
          @endif

          @if($row2->position == 2)
          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
              <div class="team-thumb">
                <img class="img-fullwidth" alt="" src="{{asset('uploads/adminmember_images/'. $row2->admin_image)}}">
                <div class="team-overlay"></div>
                <ul class="styled-icons team-social icon-sm">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
              <div class="team-details">
                <h4 class="text-uppercase text-theme-colored font-weight-600 m-5"><a href="{{url('getprofile')}}/{{$row1->id}}">{{$row2->name}}</a></h4>
                <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">{{$row2->designation}}</h6>
                 <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">{{$row2->qualification}}</h6>
              </div>
            </div>
          </div>
          @endif
          @if($row2->position == 3)
          <div class="col-xs-12 col-sm-6 col-md-3">
                       <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
              <div class="team-thumb">
                <img class="img-fullwidth" alt="" src="{{asset('uploads/adminmember_images/'. $row2->admin_image)}}">
                <div class="team-overlay"></div>
                <ul class="styled-icons team-social icon-sm">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
              <div class="team-details">
                <h4 class="text-uppercase text-theme-colored font-weight-600 m-5"><a href="{{url('getprofile')}}/{{$row1->id}}">{{$row2->name}}</a></h4>
                <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">{{$row2->designation}}</h6>
                 <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">{{$row2->qualification}}</h6>
              </div>
            </div>
          </div>
          @endif
          @if($row2->position == 4)
          <div class="col-xs-12 col-sm-6 col-md-3">
                  <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
              <div class="team-thumb">
                <img class="img-fullwidth" alt="" src="{{asset('uploads/adminmember_images/'. $row2->admin_image)}}">
                <div class="team-overlay"></div>
                <ul class="styled-icons team-social icon-sm">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
              <div class="team-details">
                <h4 class="text-uppercase text-theme-colored font-weight-600 m-5"><a href="{{url('getprofile')}}/{{$row1->id}}">{{$row2->name}}</a></h4>
                <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">{{$row2->designation}}</h6>
                 <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">{{$row2->qualification}}</h6>
              </div>
            </div>
          </div>
          @endif

          @if($row2->position == 5)
          <div class="col-xs-12 col-sm-6 col-md-3">
                      <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
              <div class="team-thumb">
                <img class="img-fullwidth" alt="" src="{{asset('uploads/adminmember_images/'. $row2->admin_image)}}">
                <div class="team-overlay"></div>
                <ul class="styled-icons team-social icon-sm">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
              <div class="team-details">
                <h4 class="text-uppercase text-theme-colored font-weight-600 m-5">{{$row2->name}}</h4>
                <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">{{$row2->designation}}</h6>
                 <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">{{$row2->qualification}}</h6>
              </div>
            </div>
          </div>
          @endif

          @if($row2->position == 6)
          <div class="col-xs-12 col-sm-6 col-md-3">
                       <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
              <div class="team-thumb">
                <img class="img-fullwidth" alt="" src="{{asset('uploads/adminmember_images/'. $row2->admin_image)}}">
                <div class="team-overlay"></div>
                <ul class="styled-icons team-social icon-sm">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
              <div class="team-details">
                <h4 class="text-uppercase text-theme-colored font-weight-600 m-5">{{$row2->name}}</h4>
                <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">{{$row2->designation}}</h6>
                 <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">{{$row2->qualification}}</h6>
              </div>
            </div>
          </div>
          @endif

          @if($row2->position == 7)
          <div class="col-xs-12 col-sm-6 col-md-3">
                      <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
              <div class="team-thumb">
                <img class="img-fullwidth" alt="" src="{{asset('uploads/adminmember_images/'. $row2->admin_image)}}">
                <div class="team-overlay"></div>
                <ul class="styled-icons team-social icon-sm">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
              <div class="team-details">
                <h4 class="text-uppercase text-theme-colored font-weight-600 m-5">{{$row2->name}}</h4>
                <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">{{$row2->designation}}</h6>
                 <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">{{$row2->qualification}}</h6>
              </div>
            </div>
          </div>
          @endif

          @if($row2->position == 8)
          <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
              <div class="team-thumb">
                <img class="img-fullwidth" alt="" src="{{asset('uploads/adminmember_images/'. $row2->admin_image)}}">
                <div class="team-overlay"></div>
                <ul class="styled-icons team-social icon-sm">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
              <div class="team-details">
                <h4 class="text-uppercase text-theme-colored font-weight-600 m-5">{{$row2->name}}</h4>
                <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">{{$row2->designation}}</h6>
                 <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">{{$row2->qualification}}</h6>
              </div>
            </div>
          </div>
          @endif

          @if($row2->position == 9)
          <div class="col-xs-12 col-sm-6 col-md-3">
                  <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
              <div class="team-thumb">
                <img class="img-fullwidth" alt="" src="{{asset('uploads/adminmember_images/'. $row2->admin_image)}}">
                <div class="team-overlay"></div>
                <ul class="styled-icons team-social icon-sm">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
              <div class="team-details">
                <h4 class="text-uppercase text-theme-colored font-weight-600 m-5">{{$row2->name}}</h4>
                <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">{{$row2->designation}}</h6>
                 <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">{{$row2->qualification}}</h6>
              </div>
            </div>
          </div>
          @endif

          @if($row2->position == 10)
          <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
              <div class="team-thumb">
                <img class="img-fullwidth" alt="" src="{{asset('uploads/adminmember_images/'. $row2->admin_image)}}">
                <div class="team-overlay"></div>
                <ul class="styled-icons team-social icon-sm">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
              <div class="team-details">
                <h4 class="text-uppercase text-theme-colored font-weight-600 m-5">{{$row2->name}}</h4>
                <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">{{$row2->designation}}</h6>
                 <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">{{$row2->qualification}}</h6>
              </div>
            </div>
          </div>
          @endif

          @if($row2->position == 11)
          <div class="col-xs-12 col-sm-6 col-md-3">
                      <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
              <div class="team-thumb">
                <img class="img-fullwidth" alt="" src="{{asset('uploads/adminmember_images/'. $row2->admin_image)}}">
                <div class="team-overlay"></div>
                <ul class="styled-icons team-social icon-sm">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
              <div class="team-details">
                <h4 class="text-uppercase text-theme-colored font-weight-600 m-5">{{$row2->name}}</h4>
                <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">{{$row2->designation}}</h6>
                 <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">{{$row2->qualification}}</h6>
              </div>
            </div>
          </div>
          @endif

          @if($row2->position == 12)
          <div class="col-xs-12 col-sm-6 col-md-3">
                  <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
              <div class="team-thumb">
                <img class="img-fullwidth" alt="" src="{{asset('uploads/adminmember_images/'. $row2->admin_image)}}">
                <div class="team-overlay"></div>
                <ul class="styled-icons team-social icon-sm">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
              <div class="team-details">
                <h4 class="text-uppercase text-theme-colored font-weight-600 m-5">{{$row2->name}}</h4>
                <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">{{$row2->designation}}</h6>
                 <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">{{$row2->qualification}}</h6>
              </div>
            </div>
          </div>
          @endif

          @if($row2->position == 13)
          <div class="col-xs-12 col-sm-6 col-md-3">
              <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
              <div class="team-thumb">
                <img class="img-fullwidth" alt="" src="{{asset('uploads/adminmember_images/'. $row2->admin_image)}}">
                <div class="team-overlay"></div>
                <ul class="styled-icons team-social icon-sm">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
              <div class="team-details">
                <h4 class="text-uppercase text-theme-colored font-weight-600 m-5">{{$row2->name}}</h4>
                <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">{{$row2->designation}}</h6>
                 <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">{{$row2->qualification}}</h6>
              </div>
            </div>
          </div>
          @endif

          @if($row2->position == 14)
          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
              <div class="team-thumb">
                <img class="img-fullwidth" alt="" src="{{asset('uploads/adminmember_images/'. $row2->admin_image)}}">
                <div class="team-overlay"></div>
                <ul class="styled-icons team-social icon-sm">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
              <div class="team-details">
                <h4 class="text-uppercase text-theme-colored font-weight-600 m-5">{{$row2->name}}</h4>
                <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">{{$row2->designation}}</h6>
                 <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">{{$row2->qualification}}</h6>
              </div>
            </div>
          </div>
          @endif

          @if($row2->position == 15)
          <div class="col-xs-12 col-sm-6 col-md-3">
             <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
              <div class="team-thumb">
                <img class="img-fullwidth" alt="" src="{{asset('uploads/adminmember_images/'. $row2->admin_image)}}">
                <div class="team-overlay"></div>
                <ul class="styled-icons team-social icon-sm">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
              <div class="team-details">
                <h4 class="text-uppercase text-theme-colored font-weight-600 m-5">{{$row2->name}}</h4>
                <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">{{$row2->designation}}</h6>
                 <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">{{$row2->qualification}}</h6>
              </div>
            </div>
          </div>
          @endif

          @if($row2->position == 16)
          <div class="col-xs-12 col-sm-6 col-md-3">
             <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
              <div class="team-thumb">
                <img class="img-fullwidth" alt="" src="{{asset('uploads/adminmember_images/'. $row2->admin_image)}}">
                <div class="team-overlay"></div>
                <ul class="styled-icons team-social icon-sm">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
              <div class="team-details">
                <h4 class="text-uppercase text-theme-colored font-weight-600 m-5">{{$row2->name}}</h4>
                <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">{{$row2->designation}}</h6>
                 <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">{{$row2->qualification}}</h6>
              </div>
            </div>
          </div>
          @endif

          @if($row2->position == 17)
          <div class="col-xs-12 col-sm-6 col-md-3">
               <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
              <div class="team-thumb">
                <img class="img-fullwidth" alt="" src="{{asset('uploads/adminmember_images/'. $row2->admin_image)}}">
                <div class="team-overlay"></div>
                <ul class="styled-icons team-social icon-sm">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
              <div class="team-details">
                <h4 class="text-uppercase text-theme-colored font-weight-600 m-5">{{$row2->name}}</h4>
                <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">{{$row2->designation}}</h6>
                 <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">{{$row2->qualification}}</h6>
              </div>
            </div>
          </div>
          @endif
          @endforeach
        </div><!--end row two--->
       
       
      </div>
    </section>

  
@endsection