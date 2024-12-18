@extends('layouts.app')
 @section('title', 'New Page Role')
@section('content')
    <div class="row">
       <div class="col-md-12">
                                <div class="card">
                                                   <div class="card-header" style="background: #20bf6b; height: 50px; width: 100%; color: #fff;">
                                        <h3 class="card-title">@yield('title')</h3>
                                        <div class="card-header-btn">
                                            
                                        </div>
                                    </div>
                                    <div class="card-body">
                                          <form method="POST" action="{{ route('admin.roles.store')}}">
                                                @csrf
                                                @method('post')
                                                        <div class="form-group row">

                                                            <label class="col-sm-2 col-form-label">Role Name</label>
                                                            <div class="col-sm-10">
                                                                <input
                    id="role_name"
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    placeholder="Enter role"
                    class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                  />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Permissions</label>
                                                            <div class="col-sm-10">
                                                                 @foreach($permissions as $permission)
                      <div class="flex flex-col justify-cente">
                          <div class="flex flex-col">
                              <label class="inline-flex items-center mt-3">
                                  <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" name="permissions[]" value="{{$permission->id}}"
                                  ><span class="ml-2 text-gray-700">{{ $permission->name }}</span>
                              </label>
                          </div>
                      </div>
                  @endforeach
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label"></label>
                                                            <div class="col-sm-10">
                                                                 <button type="submit" class="btn btn-success">Submit</button>
                                                            </div>
                                                        </div>
                                                       
                                                       
                                                            </form>
                                                             <div id="styleSelector">

                    </div>
                                    </div>
                                </div>
        </div>
    </div>                                    
   
@endsection