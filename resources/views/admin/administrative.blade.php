@extends('layouts.app')
@section('content')
<div class="wrapper">
    <div class="row">
                <div class="col-lg-5">
                    <section class="panel">
                        <header class="panel-heading">
                            Admin Member
                        </header>
                        <div class="panel-body">
                 
                        </div>
                    </section>
                </div>
                <div class="col-lg-7">
                    <section class="panel">
                        <header class="panel-heading">
                            Admin Member List
                        </header>
                        <div class="panel-body">
                            <div class="row">
                    <div class="col-sm-12">
                        <section class="panel">
                          
                        <table class="table convert-data-table data-table">
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
                                <div class="actionmenu">
                                    <ul>
                                        @can('Administrative edit')
                                        <li><a href="{{route('admin.administrtive.edit', $member->id)}}"><i class="fa fa-pencil-square-o"></i></a></li>
                                        @endcan

                                        @can('Administrative delete')
                                        <li>
                                            <form action="{{route('admin.administrtive.destroy', $member->id)}}">
                                               @csrf
                                               @method('delete')
                                                <i class="fa fa-trash-o m-r-5"></i></i>
                                            </form>
                                        </li>
                                        @endcan
                                    </ul>
                                </div>
                            </td>
                          
                     
                        </tr>
                        @endforeach
                        @endcan
                     
                        </tbody>
                        </table>
                        </section>
                    </div>

                </div>
                        </div>
                    </section>
                </div>
            </div>
    </div>        
@endsection