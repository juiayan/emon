@extends('layouts.app')
@section('content')
<div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <!-- Main-body start -->
                        <div class="main-body">
                            <div class="page-wrapper">
                              
                                <!-- Page body start -->
                                <div class="page-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <!-- Basic Form Inputs card start -->
                                            <div class="card">
                                            
                                            <div class="card-block inverse-breadcrumb">
                                                <div class="breadcrumb-header">
                                                    <h5>{{$title}}</h5>
                                                   
                                                </div>
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title">
                                        
                                                        <li class="breadcrumb-item"><a href="#!"></a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!"> </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            
                     <div class="card-block">
                                                               
                         <div class="row">
                                <div class="col-sm-5 p-20 z-depth-top-0 waves-effect">
                    <h4 class="sub-title">Class Name</h4>
                  <form method="POST" action="{{ route('admin.StudentClass.store') }}">
                  @csrf
                        <div class="form-group row">
                            <div class="col-sm-12">
                      <input type="text" name="name"  class="form-control form-control-lg" value="{{ old('name') }}">
                           </div>
                       </div>
                        
                        <div class="form-group row">
                                <div class="col-sm-10">
                       				<button type="submit">Submit Now</button>
                                </div>
                        </div>
                    </form>

              

                        </div><!---left--->
                        <div class="col-sm-7 p-20 z-depth-top-0 waves-effect">
                              <h4 class="sub-title">Class List</h4>
                         <table id="demo-foo-filtering" class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Class ID</th>
                                                            <th data-breakpoints="xs">Class Name</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($Classes as $class)
                                                        <tr>
                                                            <td>{{$class->id}}</td>
                                                            <td>{{$class->name}}</td>
                                                             <td>
                                                                <ul>
                     <li>
                @can('StudentClass edit')
                    <a href="{{route('admin.StudentClass.edit',$class->id)}}"><i class="ti-pencil-alt"></i></a>
                    @endcan



                  </li>

                            <li>
                  @can('StudentClass delete')
                    <form action="{{ route('admin.StudentClass.destroy', $class->id) }}" method="POST" class="inline">
                        @csrf
                        @method('delete')
                       <i class="ti-trash"></i>
                    </form>
                    @endcan

                        </li>
                                                                    </ul>
                                                            </td>
                                                        </tr>
                                                    @endforeach     
                                                    </tbody>
                                                </table>
                        </div><!---col right---->
                                                    </div>
                                            
                                                </div>
                                            </div>
                                            <!-- Basic Form Inputs card end -->
          
                                        </div>
                                        <!-- Input Grid card end -->

                                    </div>
                                </div>
                            </div>
                            <!-- Page body end -->
                        </div>
                    </div>
                    <!-- Main-body end -->
           
</div                 
@endsection 