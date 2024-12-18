@extends('layouts.app')
@section('content')
<div class="wrapper">
      <div class="row">
                    <div class="col-sm-12">
                        <header class="panel-heading ">
                               Post
                                <span class="tools pull-right">
                                    @can('Post create')
                                    <a href="{{route('admin.posts.create')}}"> <button type="button" class="btn btn-primary m-b-10">Post</button></a>
                                    @endcan
                                </span>
                            </header>
                          <table class="table convert-data-table data-table">
                        <thead>
                        <tr>
                            <th>
                                Post ID
                            </th>
                            <th>
                                Post Title
                            </th>
                            <th>
                                Post Description
                            </th>
                            
                            <th>Category</th>
                            <th>Sub Category</th>
                            <th>Image Position</th>
                             <th>
                                Status
                            </th>
                            <th>
                                Action
                            </th>
                           
                        </tr>
                        </thead>
                        <tbody>
                         @can('Post access')
                        @foreach($posts as $post)
                        <?php 
                            $category = DB::table('category')->where('id', '=', $post->category_id)->value('category_name');
                             $subcategory = DB::table('subcategory')->where('id', '=', $post->subcategory_id)->value('sub_category');
                        ?>
                        <tr>
                        <td>{{ $post->id }}</td>                   
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->description }}</td>
                        <td>{{ $category }}</td>
                        <td>{{ $subcategory }}</td>
                        <td>{{ $post->image_position }}</td>
                        <td>
                      @if($post->publish)
                      <span class="text-white inline-flex items-center justify-center px-2 py-1 mr-2 text-xs font-bold leading-none text-white bg-green-500 rounded-full">Publish</span>
                      @else
                      <span class="inline-flex items-center justify-center px-2 py-1 mr-2 text-xs font-bold leading-none text-white bg-gray-500 rounded-full">Draft</span>
                      @endif
                                                                </td>
                    <td>
                    <div class="actionmenu">
                        <ul>
                          <li>
                                @can('Post edit')
                                <a href="{{route('admin.posts.edit',$post->id)}}"><i class="fa fa-pencil-square-o"></i></a>
                                @endcan
                          </li>

                            <li>
                              @can('Post delete')
                                <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('delete')
                    <button type="submit"> <i class="fa fa-trash-o m-r-5"></i></button>
                                  
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
                                                                 <th>
                                Post ID
                            </th>
                            <th>
                                Post Title
                            </th>
                            <th>
                                Post Description
                            </th>
                            
                            <th>Category</th>
                            <th>Sub Category</th>
                             <th>
                                Status
                            </th>
                            <th>
                                Action
                            </th>
                                                            </tr>
                                                        </tfoot>
            </table>

            </div>
        </div>                    
</div>    

@endsection 