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
                    <form role="form" action="{{ route('admin.fleet.store')}}" method="POST">
                        @csrf
                        @method('post')
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Fleet Name</label>
                                    <input type="text" class="form-control" name="vessel_name" placeholder="Enter Vessel Name">
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Vessel Type</label>
                                  <input type="text" class="form-control" name="vessel_type" placeholder="Enter Vessel Type">
                                 </div>



                               <div class="form-group">
                                    <label for="exampleInputEmail1">Flag</label>
                                  <input type="text" class="form-control" name="flag" placeholder="Enter Flag Name">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Service</label>
                                  <input type="text" class="form-control" name="service" placeholder="Enter Service Name">
                                </div>

                             
                 
                                <button type="submit" class="btn btn-info">Submit</button>
                            </form>

                        </div>
                    </section>
                </div>
                <div class="col-lg-7">
                    <section class="panel">
                        <header class="panel-heading">
                            Fleet List
                        </header>
                        <div class="panel-body">
                            <div class="row">
                    <div class="col-sm-12">
                        <section class="panel">
                          
                        <table class="table convert-data-table data-table">
                        <thead>
                        <tr>
                            <th>
                                Categoy ID
                            </th>
                            <th>
                                Category Name
                            </th>

                            <th>
                                Category Image
                            </th>

                            <th>
                                Category Status
                            </th>

                            <th>
                                Action
                            </th>
                           
                        </tr>
                        </thead>
                        <tbody>
                          @can('Fleet access')
                          @foreach($fleets as $fleet)  
                        <tr>
                            <td>
                               {{$fleet->id}}
                            </td>
                            <td>
                                {{$fleet->vessel_name}}
                            </td>

                             <td>
                                {{$fleet->vessel_type}}
                            </td>

                            <td>
                                {{$fleet->flag}}
                            </td>

                           

                            <td>
                                <div class="actionmenu">
                                    <ul>
                                        @can('Fleet edit')
                                        <li><a href="{{route('admin.fleet.edit', $fleet->id)}}"><i class="fa fa-pencil-square-o"></i></a></li>
                                        @endcan

                                        @can('Fleet delete')
                                        <li>
                                            <form action="{{route('admin.fleet.destroy', $fleet->id)}}">
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