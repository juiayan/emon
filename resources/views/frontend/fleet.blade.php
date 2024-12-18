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
             
            </div>
          </div>
        </div>
      </div>
    </section>

       <!-- Section: Doctor Details -->
    <section class="">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#orders" aria-controls="orders" role="tab" data-toggle="tab" class="font-15 text-uppercase">Fleet List<span class="badge"></span></a></li>
                  <li role="presentation"><a href="#free-orders" aria-controls="free-orders" role="tab" data-toggle="tab" class="font-15 text-uppercase">Our Principal List <span class="badge"></span></a></li>
                 
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="orders">
                    <div class="table-responsive">
                      <table class="table table-hover">
                         <thead>
                            <tr>
                                <td>SL</td>
                                <td>Vessel Name</td>
                                <td>Vessel Type</td>
                                <td>Flag</td>
                                <td>Service</td>
                            </tr>
                         </thead>
                         <tbody>
                            @foreach($fleet as $row)
                    <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row->vessel_name}}</td>
                        <td>{{$row->vessel_type}}</td>
                        <td>{{$row->flag}}</td>
                        <td>{{$row->service}}</td>
                    </tr>
                    @endforeach
                         </tbody>
                      </table>
                    </div>
                  </div>
                  <div role="tabpanel" class="tab-pane" id="free-orders">
                    <table class="table table-hover">
                       <thead>
                          <tr>
                             <th>ID</th>
                             <th>Principal Name</th>
                             <th>Type of Service</th>
                     
                             <th></th>
                          </tr>
                       </thead>
                       <tbody>
                               <?php 
                          $principal = DB::table('principalservice')->get();
                          ?>
                            @foreach($principal as $row1)
                    <tr>
                        <td>{{$row1->id}}</td>
                        <td>{{$row1->principal_name}}</td>
                        <td>{{$row1->typeof_service}}</td>
                  
                    </tr>
                    @endforeach
                       </tbody>
                    </table>
                  </div>
                  <div role="tabpanel" class="tab-pane" id="bookmarks">
                    <table class="table">
                       <tbody>
                          <tr>
                             <th scope="row"><img src="http://placehold.it/100x50" alt=""></th>
                             <td><h4>Web Development Course</h3></h4>
                             <td><h4>$127.50</h3></h4>
                             <td><h4><a href="#"><i class="fa fa-close"></i></a></h3></h4>
                          </tr>
                          <tr>
                             <th scope="row"><img src="http://placehold.it/100x50" alt=""></th>
                             <td><h4>Software Development Course</h3></h4>
                             <td><h4>$127.50</h3></h4>
                             <td><h4><a href="#"><i class="fa fa-close"></i></a></h3></h4>
                          </tr>
                          <tr>
                             <th scope="row"><img src="http://placehold.it/100x50" alt=""></th>
                             <td><h4>App Development Course</h3></h4>
                             <td><h4>$127.50</h3></h4>
                             <td><h4><a href="#"><i class="fa fa-close"></i></a></h3></h4>
                          </tr>
                          <tr>
                             <th scope="row"><img src="http://placehold.it/100x50" alt=""></th>
                             <td><h4>Photoshop Course</h3></h4>
                             <td><h4>$127.50</h3></h4>
                             <td><h4><a href="#"><i class="fa fa-close"></i></a></h3></h4>
                          </tr>
                       </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection