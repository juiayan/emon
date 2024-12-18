@extends('layouts.app')
 @section('title', 'Page Main Menu')
@section('content')
   <div class="row">
        <div class="col-md-12">
            <div class="card">
                                      <div class="card-header">
                                        <h3 class="card-title">@yield('title')</h3>
                                        <div class="card-header-btn">
                                           @include('modal-file.add_main_menu')
                                        </div>
                                    </div>
                <div class="card-body">
                       <div class="table-responsive">
                         <table id="datatable" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>
                                Categoy ID
                            </th>
                            <th>
                                Category Name
                            </th>

                            <th>
                                Position
                            </th>

                            <th>
                                Category Image
                            </th>

                            <th>
                                Sub Category Status
                            </th>

                            <th>
                                Status
                            </th>

                            <th>
                                Action
                            </th>
                           
                        </tr>
                        </thead>
                        <tbody>
                          @can('Category access')
                          @foreach($categories as $category)  
                        <tr>
                            <td>
                               {{$category->id}}
                            </td>
                            <td>
                                {{$category->category_name}}
                            </td>

                            <td>
                                {{$category->position}}
                            </td>

                            <td>
                                <img src="{{asset('uploads/category_image/'.$category->category_image)}}" width="70" height="70">
                            </td>

                            <td>
                                <?php
                                    if($category->subcat_status == 1)
                                    {
                                        echo "No";
                                    }else{
                                        echo "Yes";
                                    }
                                 ?>
                            </td>

                            <td>
                                <?php
                                    if($category->status == 0)
                                    {
                                        echo "Active";
                                    }else{
                                        echo "In Active";
                                    }
                                 ?>
                            </td>
                            <td>
                               
                                        @can('Category edit')
                                        @include('modal-file.edit_main_menu')
                                       
                                        @endcan

                                        @can('Category delete')
                                       
                                            <form action="{{route('admin.categories.destroy', $category->id)}}" class="btn btn-danger">
                                               @csrf
                                               @method('delete')
                                              <i class="fas fa-trash"></i>
                                            </form>
                                       
                                        @endcan
                                   
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