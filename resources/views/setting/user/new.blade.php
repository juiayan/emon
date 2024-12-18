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
                                                    <h5>Create New User</h5>
                                                  
                                                    <div class="card-header-right">
                                                        <i class="icofont icofont-spinner-alt-5"></i>
                                                    </div>

                                                </div>
                     <div class="card-block">
                                                               
                         <div class="row">
                                <div class="col-sm-5">
                    <h4 class="sub-title">User Create</h4>
     
                    <form method="POST" action="{{ route('admin.users.store')}}">
                  @csrf
                  @method('post')
                        <div class="form-group row">
                            <div class="col-sm-12">
                    <input id="name" type="text" name="name" value="{{ old('name') }}"
                      placeholder="Enter name" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    />
                           </div>
                       </div>

                       <div class="form-group row">
                            <div class="col-sm-12">
                      <input id="email" type="text" name="email" value="{{ old('email') }}"
                      placeholder="Enter email" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    />
                           </div>
                       </div>


                <div class="form-group row">
                            <div class="col-sm-12">
            <input id="password_confirmation" type="password" name="password_confirmation" placeholder="Re-enter password" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    />
                           </div>
                </div>

                       <div class="form-group row">
                            <div class="col-sm-12">
             @foreach($roles as $role)
                      <div class="flex flex-col justify-cente">
                          <div class="flex flex-col">
                              <label class="inline-flex items-center mt-3">
                                  <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" name="roles[]" value="{{$role->id}}"
                                  ><span class="ml-2 text-gray-700">{{ $role->name }}</span>
                              </label>
                          </div>
                      </div>
                  @endforeach
                           </div>
                </div>


                        
                        <div class="form-group row">
                                <div class="col-sm-10">
                              <button type="submit">Submit Now</button>
                                </div>
                        </div>
                    </form>

              

                        </div><!---left--->
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