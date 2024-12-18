@extends('layouts.frontend')
@section('content')
<!-- Section: inner-header -->
    <section>
      <div class="container">
        <div class="section-content">
          @foreach($team as $row)
          <div class="row">
            <div class="col-md-4">
              <div class="thumb">
                <img src="{{asset('uploads/profileimage/'. $row->profile_image)}}" alt="">
              </div>
            </div>
            <div class="col-md-8">
              <h4 class="name font-24 mt-0 mb-0">{{$row->name}}</h4>
              <h5 class="mt-5 text-theme-color-2">{{$row->designation}}</h5>
              <h5 class="mt-5 text-theme-color-3">{{$row->qualification}}</h5>
    
              <p>{!! $row->profile !!}</p>
             
              <ul class="styled-icons icon-dark icon-theme-colored icon-sm mt-15 mb-0">
               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#"><i class="fa fa-skype"></i></a></li>
               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
             </ul>
            </div>
          </div>
        @endforeach
        </div>
      </div>
    </section>



@endsection