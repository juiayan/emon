@extends('layouts.app')
@section('title', 'Our Team List')
@section('content')
   <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                                        <h3 class="card-title">@yield('title')</h3>
                                        <div class="card-header-btn">
                                            @include('modal-file.add_our_team')
                                        </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                          <table id="datatable" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>
                                Member ID
                            </th>
                            <th>
                                Member Name
                            </th>

                            <th>
                               Designation
                            </th>

                             <th>
                               Position
                            </th>


                             <th>
                               Image
                            </th>

                            <th>
                                Action
                            </th>
                           
                        </tr>
                        </thead>
                        <tbody>
                          @can('Administrative access')
                          @foreach($administrative as $member)  
                        <tr>
                            <td>
                               {{$member->id}}
                            </td>
                            <td>
                                {{$member->name}}
                            </td>

                            <td>
                                {{$member->designation}}
                            </td>

                            <td>
                                {{$member->position}}
                            </td>

                             <td>
                                <img src="{{asset('uploads/adminmember_images/'.$member->admin_image)}}" width="70" height="70">
                               
                            </td>

           
                            <td>
                               
                                        @can('Administrative edit')
                                        @include('modal-file.edit_our_team')
                                        @endcan

                                        @can('Administrative delete')
                                       
                                            <form action="{{route('admin.administrtive.destroy', $member->id)}}">
                                               @csrf
                                               @method('delete')
                                                <i class="fa fa-trash-o m-r-5"></i></i>
                                            </form>
                                       
                                        @endcan
                                    </ul>
                                </div>
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
    </div>                                    

@endsection