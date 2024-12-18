@extends('layouts.app')
@section('title', 'Gallery Image List')
@section('content')
   <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                                        <h3 class="card-title">@yield('title')</h3>
                                        <div class="card-header-btn">
                                            @include('modal-file.add_gallery_image')
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
                            <th>Image Category</th>
                            <th>Image Title </th>
                            <th>Image</th>
                            <th>Action</th>
                           
                        </tr>
                        </thead>
                        <tbody>
                          @can('access gallery image list')
                          @foreach($images as $image)  
                        <tr>
                            <td>
                               {{$image->id}}
                            </td>
                            <td>
                                

                                <?php 

echo $imagecategory = DB::table('image_categories')->where('id', '=', $image->image_category_id)->value('image_category')
                                ?>
                            </td>

                            <td>
                                {{$image->image_title}}
                            </td>

                             <td>
                                <img src="{{asset('uploads/gallery_images/'.$image->image_name)}}" width="70" height="70">
                               
                            </td>

           
                            <td>
                               
                                        @can('access gallery image edit')
                                        @include('modal-file.edit_gallery_image')
                                        @endcan

                                        @can('access gallery imgae delete')
                                       
                                            <form action="{{route('imagedelete', $image->id)}}">
                                               @csrf
                                               @method('delete')
                                               <button type="submit" class="btn btn-danger"></button>
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