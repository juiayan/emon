 @extends('layouts.app')
 @section('content')
<div class="row">
  <div class="col-md-12">
      <div class="card">
        <div class="card-body">
                                                        <form method="POST" action="{{ route('admin.roles.update',$role->id)}}">
                                                  @csrf
                                                  @method('put')   
                                     
                                                    <div class="card-block inline-editable">
                                                      <div class="form-group row">
                                                        <label for="role_name" class="col-md-2">Role Name</label>
                                                        <div class="col-md-5">
                    <input id="role_name"  type="text"  name="name" value="{{ old('name',$role->name) }}"
      class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200" />
                                                        </div>
                                                      </div>

                                                        <div class="form-group row">
                                                            <label class="col-md-2">Permissions</label>

                                                            <div class="col-md-4">
                                                               @foreach($permissions as $permission)
                      <div class="flex flex-col justify-cente">
                          <div class="flex flex-col">
                              <label class="inline-flex items-center mt-3">
                                  <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" name="permissions[]" value="{{$permission->id}}"  @if(count($role->permissions->where('id',$permission->id)))
                                      checked 
                                    @endif
                                  ><span class="ml-2 text-gray-700">{{ $permission->name }}</span>
                              </label>
                          </div>
                      </div>
                  @endforeach
                                                            </div>
                                                          
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-2"></label>
                                                            <div class="col-md-5">
                                                               <button type="submit" class="btn btn-info">Update</button>
                                                            </div>
                                                        </div>
              

                                                    </div>
                                                  </form>
        </div>
      </div>
  </div>
</div>            
   
@endsection                  