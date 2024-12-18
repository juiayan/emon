@extends('layouts.frontend')
@section('content')
   <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="{{asset('uploads/category_image/'.$categories->category_image)}}">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white">{{$categories->category_name}}</h2>
                  @if(session()->has('status'))
                    <div class="alert alert-success">
                    {{ session()->get('status') }}
                    </div>
                  @endif
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Section: About -->
    <section class="">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-4">
              <img src="{{asset('images/cv_image.png')}}">
              @foreach($cvfiles as $cvfile)
              <a href="{{asset('uploads/cv_file/'.$cvfile->cv_file)}}" style="color: blue; font-size: 20px;"><button class="btn btn-block">Download Naaf Marine CV Format</button></a>
              @endforeach
            </div><!---left--->

            <div class="col-md-8">
              <h3 style="color: blue;">First Download CV Foramt .After Complete CV plz upload below</h3>

                <form action="{{url('insert-cv')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('post')
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Full Name <small>*</small></label>
                          <input name="full_name" type="text" placeholder="Enter Name" required="" class="form-control">
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Rank <small>*</small></label>
                  <input name="rank" type="text" placeholder="Rank" required="" class="form-control">
                        </div>
                      </div>
                     
                    </div>

                    <div class="row">               
                      <div class="col-sm-6">
                        <div class="form-group">
                         <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Phone Number">
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                        
                        <input type="text" name="whatsapp_phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Whatsapp Phone Number">
                        </div>
                      </div>
                     
                    </div>

                    <div class="row">               
                      <div class="col-sm-6">
                        <div class="form-group">
                           <input type="date" name="man_dob" id="txtDATE_OF_BIRTH" class="form-control" Onchange="return findage();"/>
                                <input type="hidden" id="age" name="age" class="form-control"/>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                        
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                      </div>
                     
                    </div>


                    <div class="row">               
                      <div class="col-sm-6">
                        <div class="form-group">
                        
                        <select name="experience" class="form-control">
                                     <option>Select Experience</option>
                                
                                     <option value="bulk">Bulk</option>
                                     <option value="container">Container</option>
                                     <option value="oil tanker">Oil Tanker</option>
                                     <option value="Chemical Tanker">Chemical Tanker</option>
                                     <option value="Oil-Chem. Tanker">Oil-Chem. Tanker</option>
                                     <option value="VLCC">VLCC</option>
                                     <option value="LPG">LPG</option>
                                     <option value="car">Car</option>
                                    </select> 
                        </div>
                      </div>

                       <div class="col-sm-6">
                        <div class="form-group">
                        
                        <input type="text" name="last_sign_of" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Last Sign Of">
                        </div>
                      </div>
                     
                    </div>


                    <div class="row">               
                      <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" name="salary_expectation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Salar Expectation">
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                        
                       <input type="file" name="cv_file" class="form-control">
                        </div>
                      </div>
                     
                    </div>

                    <div class="form-group">
                      <input name="form_botcheck" class="form-control" type="hidden" value="" />
                      <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Apply Now</button>
                    </div>
                  </form>
            </div><!---right--->

          </div>
         @foreach($postdata as $post)		
          <div class="row">
            <div class="col-md-12">
            <h2 class="text-uppercase font-weight-600 mt-0 font-28 line-bottom">{{$post->title}}</h2>
             
              <p align="justify">{!! $post->description !!}</p>
             
            </div>

          </div>
          @endforeach
        </div>
      </div>
    </section>
    <script>
    function findage() 
        {  
            var PresentDay = new Date();  
            var dateOfBirth = (new Date(document.getElementById("txtDATE_OF_BIRTH").value));  
            var months = (PresentDay.getMonth() - dateOfBirth.getMonth() +   
            (12 * (PresentDay.getFullYear() - dateOfBirth.getFullYear())));  
            document.getElementById("age").value = Math.round(months / 12);  
        } 
</script>
@endsection