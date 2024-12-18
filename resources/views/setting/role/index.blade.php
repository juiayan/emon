 @extends('layouts.app')
 @section('title', 'Page Role')
 @section('content')
   <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header" style="background: #20bf6b; height: 50px; width: 100%; color: #fff;">
                                        <h3 class="card-title">@yield('title')</h3>
                                        <div class="card-header-btn">
                                            <a href="{{route('admin.roles.create')}}" class="btn btn-primary">Add New Role</a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                <div class="table-responsive">


             <table id="datatable" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>
                                ID
                            </th>
                            <th>
                                Role Name
                            </th>
                            <th>
                                Permissions
                            </th>
                            <th>
                                Action
                            </th>
             
                        </tr>
                        </thead>
                        <tbody>
                          @can('Role access')
                            @foreach($roles as $role)    
                        <tr>
                            <td>{{$role->id}}</td>
                            <td>{{$role->name}}</td>
                            <td>
                                   @foreach($role->permissions as $permission)
                                                                  <span class="cr">{{ $permission->name }}</span>
                                                                @endforeach
                            </td>
                           
                            <td>
                            @can('Role edit')
                            <a href="{{route('admin.roles.edit',$role->id)}}" class="text-warning" title="" id="definition_edit_6" onclick="definition_edit(6)" data-original-title="Edit"><i class="far fa-edit"></i></a>
                            @endcan
                            @can('Role delete')
                            <form action="{{ route('admin.roles.destroy', $role->id) }}" method="POST">
                            @csrf
                              @method('delete')

                              <button class="text-danger" style="border: none; background: none;"><i class="fas fa-trash"></i></button>  
                                                                    </form>
                                                                   
                                                                    @endcan
                            </td>
                        </tr>
                          @endforeach
                          @endcan
   
                        </tbody>
                        </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
</div>
<!-- end row -->
 <div class="wrapper">
                <!-- Page Content -->

   <div class="row">
                    <div class="col-sm-12">
                        <section class="panel">
                            <header class="panel-heading ">
                                Role
                                <span class="tools pull-right">
                                    @can('Role create')
                                    <a href="{{route('admin.roles.create')}}"> <button type="button" class="btn btn-primary m-b-10">Primary</button></a>
                                   
                                    @endcan
                                </span>
                            </header>
 
                        </section>
                    </div>

                </div>    
        
 
</div><!--wrapper--->


@endsection                                    