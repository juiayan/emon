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
              <img src="{{asset('images/complain.png')}}">
             
            </div><!---left--->

            <div class="col-md-8">
              <h3 style="color: blue;">Naaf Marine Services has established a procedure for seaman complain which will be followed as below. </h3>

                 <form action="{{url('insert-complain')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('post')
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Complainants Name <small>*</small></label>
                           <input type="text" name="complaints_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Complainants Name">
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Rank <small>*</small></label>
                  <input type="text" name="rank" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Rank">
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
                            <input type="text" name="cde_number"  class="form-control" placeholder="Enter CDC Number" />
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                        
                       <input type="email" name="email_address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                      </div>
                     
                    </div>


                    <div class="form-group">
                      <input name="form_botcheck" class="form-control" type="hidden" value="" />
                      <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Submit Now</button>
                    </div>
                  </form>
            </div><!---right--->

          </div>

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