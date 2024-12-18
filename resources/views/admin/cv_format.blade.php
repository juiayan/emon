@extends('layouts.app')
@section('content')
<div class="wrapper">

            <div class="row">
                <div class="col-lg-5">
                    <section class="panel">
                        <header class="panel-heading">
                            Category
                        </header>
                        <div class="panel-body">
                    <form role="form" action="{{ route('admin.cvformat.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                          
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Cv File</label>
                                  <input type="file" name="cv_file">
                                 </div>


            
                 
                                <button type="submit" class="btn btn-info">Submit</button>
                            </form>

                        </div>
                    </section>
                </div>
                <div class="col-lg-7">
                    <section class="panel">
                        <header class="panel-heading">
                            Cv Format List
                        </header>
                        <div class="panel-body">
                            <div class="row">
                    <div class="col-sm-12">
                        <section class="panel">
                          
                        <table class="table convert-data-table data-table">
                        <thead>
                        <tr>
                            <th>
                                CV ID
                            </th>
                            <th>
                                Cv Format File
                            </th>

                          
                            <th>
                                Action
                            </th>
                           
                        </tr>
                        </thead>
                        <tbody>
                          @can('CvFormat access')
                          @foreach($cvformat as $cvfile)  
                        <tr>
                            <td>
                               {{$cvfile->id}}
                            </td>
                           

                            <td>
                                <a href="{{asset('uploads/cv_file/'.$cvfile->cv_file)}}">CV Format File</a>
                               
                            </td>

                          
                            <td>
                                <div class="actionmenu">
                                    <ul>
                                        @can('CvFormat edit')
                                        <li><a href="{{route('admin.cvformat.edit', $cvfile->id)}}"><i class="fa fa-pencil-square-o"></i></a></li>
                                        @endcan

                                        @can('CvFormat delete')
                                        <li>
                                            <form action="{{route('admin.cvformat.destroy', $cvfile->id)}}">
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