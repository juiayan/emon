@extends('layouts.app')
 @section('title', 'Page Permissions')
@section('content')
     <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                                        <h3 class="card-title">@yield('title')</h3>
                    <div class="card-header-btn">
                                             @can('Permission create')
                                    <a href="{{route('admin.permissions.create')}}"> <button type="button" class="btn btn-primary m-b-10">Permission</button></a>
                                    @endcan
                    </div>
                </div>
                <div class="card-body">
                     <table id="datatable" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>
                                Permision ID
                            </th>
                            <th>
                                Permision Name
                            </th>
                            <th>
                                Action
                            </th>
                           
                        </tr>
                        </thead>
                        <tbody>
                         @can('Permission access')
                         @foreach($permissions as $permission)    
                        <tr>
                            <td>
                                {{ $permission->id }}
                            </td>
                            <td>
                                {{ $permission->name }}
                            </td>
                           
                            <td>
                              @can('Permission edit')
                          <a href="{{route('admin.permissions.edit',$permission->id)}}"><i class="far fa-edit"></i></a>
                          @endcan

                              
                                    @can('Permission delete')
                          <form action="{{ route('admin.permissions.destroy', $permission->id) }}" method="POST" class="inline">
                              @csrf
                              @method('delete')
                              <i class="fas fa-trash"></i></i>
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

@endsection                                     