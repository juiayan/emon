

@extends('layouts.app')
@section('content')
  <div class="pcoded-content">
      <div class="pcoded-inner-content">
                        <!-- Main-body start -->
        <div class="main-body">
              <div class="page-wrapper">
                              <!-- Page-header start -->
               

                 <div class="card">
                    <div class="card-header">
                         <h5>Edit Permision</h5>
                    </div>
            <div class="card-block">
                <div class="row">
                    <div class="col-md-12">
                        <div id="wizard3">
                            <form class="wizard-form" id="design-wizard" action="{{ route('admin.SubjectClass.update',$class->id)}}" method="POST">
                                  @csrf
                                @method('put')             
                                

                                <div class="form-group row">
                                      <div class="col-sm-3">
                                        <label for="datejoin" class="block">Class Name</label>
                                      </div>
                                      <div class="col-sm-5">
                                       <input id="name" type="text" name="name" value="{{ old('name',$event->name) }}"
                      placeholder="Enter name" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    />
                                      </div>
                                  </div>


                                   <div class="form-group row">
                                      <div class="col-sm-3">
                                        <label for="datejoin" class="block"></label>
                                      </div>
                                      <div class="col-sm-5">
                                       <button type="submit" class="btn btn-success">Update</button>
                                      </div>
                                  </div>
                                                                      
                                                                     
                            </form>  
                          </div>
                      </div>
                    </div>
                </div>
            </div>
          <!-- Design Wizard card end -->
            </div>
        </div>
    </div>
  </div>                  
@endsection