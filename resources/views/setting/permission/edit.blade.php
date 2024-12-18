
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
                            <form class="wizard-form" id="design-wizard" action="{{ route('admin.permissions.update',$permission->id)}}" method="POST">
                                  @csrf
                                @method('put')             
                                  <div class="form-group row">
                                      <div class="col-sm-3">
                                        <label for="datejoin" class="block">Permision Name</label>
                                      </div>
                                      <div class="col-sm-5">
                                        <input  name="name" type="text" class="form-control required" value="{{ old('name',$permission->name) }}">
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