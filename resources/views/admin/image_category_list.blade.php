@extends('layouts.app')
@section('title', 'Gallery Image List')
@section('content')
   <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                                        <h3 class="card-title">@yield('title')</h3>
                                        <div class="card-header-btn">
                                            @include('modal-file.add_image_category')
                                        </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                          <table id="datatable" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image Category</th>
                            <th>Action</th>
                           
                        </tr>
                        </thead>
                        <tbody>
                          @can('access gallery image list')
                          @foreach($imagecategories as $category)  
                        <tr>
                            <td>
                               {{$category->id}}
                            </td>
                            <td>
                                {{$category->image_category}}
                            </td>

           
                            <td>
                               
                                        @can('access gallery image edit')
                                        @include('modal-file.edit_image_category')
                                        @endcan

                                        @can('access gallery imgae delete')
                                       
                                            <form action="{{route('deleteimagecategory', $category->id)}}">
                                               @csrf
                                               @method('delete')
                                               <button type="submit" class="btn btn-danger"></button>
                                                <i class="fa fa-trash-o m-r-5"></i>
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