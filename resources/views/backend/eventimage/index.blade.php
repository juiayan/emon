@extends('layouts.app')
@section('content')
<div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <!-- Main-body start -->
                        <div class="main-body">
                            <div class="page-wrapper">
                              
                                <!-- Page body start -->
                                <div class="page-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <!-- Basic Form Inputs card start -->
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Event</h5>
                                                  
                                                    <div class="card-header-right">
                                                        <i class="icofont icofont-spinner-alt-5"></i>
                                                    </div>

                                                </div>
                     <div class="card-block">
                                                               
                         <div class="row">
                                <div class="col-sm-5">
                    <h4 class="sub-title">Event Name</h4>
                  <form method="POST" action="{{ route('admin.eventimage.store') }}" enctype="multipart/form-data">
                  @csrf
              <div class="form-group">
                    <label class="col-sm-12">Event Name</label>
                    <div class="col-sm-6">
                        <select name="event_id" class="form-control">
                              <option value="">Select Event</option>
                            @foreach($events as $eventi)
                            <option value="{{$eventi->id}}">{{$eventi->name}}</option>
                            @endforeach
                        </select>
                    </div>
                                                     
                </div>

            <div class="form-group">
                <label class="col-sm-12">Image</label>
                <div class="col-sm-12">
                <input type="file" class="form-control-file" name="photos[]" multiple="multiple" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                		<button type="submit" class="btn btn-success">Submit Now</button>
                </div>
            </div>
                    

            </form>

              

                        </div><!---left--->
                        <div class="col-sm-7 mobile-inputs">
                              <h4 class="sub-title">Event List</h4>
                         <table id="demo-foo-filtering" class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Event ID</th>
                                                            <th data-breakpoints="xs">Event Name</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($events as $event)
                                                        <tr>
                                                            <td>{{$event->id}}</td>
                                                            <td>{{$event->name}}</td>
                                                             <td>
                                                                <ul>
                     <li>
                @can('Event edit')
                    <a href="{{route('admin.event.edit',$event->id)}}"><i class="ti-pencil-alt"></i></a>
                    @endcan



                  </li>

                            <li>
                  @can('Event delete')
                    <form action="{{ route('admin.event.destroy', $event->id) }}" method="POST" class="inline">
                        @csrf
                        @method('delete')
                       <i class="ti-trash"></i>
                    </form>
                    @endcan

                        </li>
                                                                    </ul>
                                                            </td>
                                                        </tr>
                                                    @endforeach     
                                                    </tbody>
                                                </table>
                        </div><!---col right---->
                                                    </div>
                                            
                                                </div>
                                            </div>
                                            <!-- Basic Form Inputs card end -->
          
                                        </div>
                                        <!-- Input Grid card end -->

                                    </div>
                                </div>
                            </div>
                            <!-- Page body end -->
                        </div>
                    </div>
                    <!-- Main-body end -->
           
</div                 
@endsection 