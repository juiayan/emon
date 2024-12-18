@extends('layouts.app')
@section('content')

                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <!-- Main-body start -->
                        <div class="main-body">
                            <div class="page-wrapper">
                                <!-- Page-header start -->
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                      <div class="card">
                                            <div class="card-header">
                                                  @can('User create')
                    <a href="{{route('admin.users.create')}}" class="btn btn-primary">New User</a>
                  @endcan
                                            </div>
                                      

                                              <div class="card-block">
                                                <div class="dt-responsive table-responsive">
                                                    <table id="base-style" class="table table-striped table-bordered nowrap">
                                                        <thead>
                                                            <tr class="table-primary">
                                                                <th>User ID</th>
                                                                <th>User Name</th>
                                                                <th>User Role</th>
                                                                <th>Action</th>
                                                             
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                         @can('User access')
                                                       @foreach($users as $user)
                                                            <tr>
                                                                <td>{{ $user->id }}</td>
                                                                <td>{{ $user->name }}</td>
                                                                 <td>
                                                                      @foreach($user->roles as $role)
                                                                        <span>{{ $role->name }}</span>
                                                                      @endforeach
                                                                  </td>
                                                                  <td>
                                                                    <div class="actions">
                                                                      <ul>
                                                                      <li> 
                          @can('User edit')
                          <a href="{{route('admin.users.edit',$user->id)}}"><i class="ti-pencil-alt"></i></a>
                          @endcan
                                                                      </li>

                                                                      <li>
                                                                    @can('User delete')
                                                                    <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="inline">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <i class="ti-trash"></i>
                                                                    </form>
                                                                    @endcan

                                                                  </li>
                                                                    </ul>
                                                                    </div>
                                                                    
                                                                  

                       
                           
                                                        

                                                                </td>
                                                           
                                                            </tr>
                                                          @endforeach
                                                            @endcan
                                                          
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th>User ID</th>
                                                                <th>User Name</th>
                                                                <th>User Role</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                        </div><!---card--->
                                    </div>
                           </div>
                        </div>
                    </div>
                </div> 
@endsection                                     