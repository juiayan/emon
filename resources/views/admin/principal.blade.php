@extends('layouts.app')
@section('content')
<div class="wrapper">

            <div class="row">
                <div class="col-lg-5">
                    <section class="panel">
                        <header class="panel-heading">
                            Fleet
                        </header>
                        <div class="panel-body">
                    <form role="form" action="{{ route('admin.principal.store')}}" method="POST">
                        @csrf
                        @method('post')
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Principal Name</label>
                                    <input type="text" class="form-control" name="principal_name" placeholder="Enter Principal Name">
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Type of Service</label>
                                  <input type="text" class="form-control" name="typeof_service" placeholder="Enter Type of Service">
                                 </div>



                             
                 
                                <button type="submit" class="btn btn-info">Submit</button>
                            </form>

                        </div>
                    </section>
                </div>
                <div class="col-lg-7">
                    <section class="panel">
                        <header class="panel-heading">
                            Principal & Service List
                        </header>
                        <div class="panel-body">
                            <div class="row">
                    <div class="col-sm-12">
                        <section class="panel">
                          
                        <table class="table convert-data-table data-table">
                        <thead>
                        <tr>
                            <th>
                                 ID
                            </th>
                            <th>
                                Principal Name
                            </th>

                            <th>
                                Type of Service
                            </th>

                          
                            <th>
                                Action
                            </th>
                           
                        </tr>
                        </thead>
                        <tbody>
                          @can('Principal access')
                          @foreach($principal as $row)  
                        <tr>
                            <td>
                               {{$row->id}}
                            </td>
                            <td>
                                {{$row->principal_name}}
                            </td>

                             <td>
                                {{$row->typeof_service}}
                            </td>

                         

                            <td>
                                <div class="actionmenu">
                                    <ul>
                                        @can('Principal edit')
                                        <li><a href="{{route('admin.principal.edit', $row->id)}}"><i class="fa fa-pencil-square-o"></i></a></li>
                                        @endcan

                                        @can('Principal delete')
                                        <li>
                                            <form action="{{route('admin.principal.destroy', $row->id)}}">
                                               @csrf
                                               @method('delete')
                                              <button type="submit"><i class="fa fa-trash-o m-r-5"></i></i></button>
                                               
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