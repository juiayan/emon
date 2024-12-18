@extends('layouts.app')
@section('content')
<div class="wrapper">

            <div class="row">
                <div class="col-lg-5">
                    <section class="panel">
                        <header class="panel-heading">
                           Sub Category
                        </header>
                        <div class="panel-body">
                    <form role="form" action="{{ route('admin.subcategories.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('post')

                            <div class="form-group">
                                    <label for="exampleInputEmail1">Category Name</label>
                                 <select class="form-control" name="category_id">
                                     <option value="">Select Category</option>
                                     @foreach($categories as $category)
                                     <option value="{{$category->id}}">{{$category->category_name}}</option>
                                     @endforeach
                                 </select>
                            </div>


                            <div class="form-group">
                                    <label for="exampleInputEmail1">Sub Category Name</label>
                                    <input type="text" class="form-control" name="sub_category" placeholder="Enter Sub Category Name">
                            </div>

                            <div class="form-group">
                                    <label for="exampleInputEmail1">Sub Category Status</label>
                                    <select class="form-control" name="status">
                                        <option value="0">Active</option>
                                        <option value="1">In Active</option>
                                    </select>
                            </div>

                            <div class="form-group">
                                    <label for="exampleInputEmail1">Sub Category Image</label>
                                  <input type="file" name="subcat_image">
                            </div>

                               
            
                 
                                <button type="submit" class="btn btn-info">Submit</button>
                            </form>

                        </div>
                    </section>
                </div>
                <div class="col-lg-7">
                    <section class="panel">
                        <header class="panel-heading">
                            Sub Category List
                        </header>
                        <div class="panel-body">
                            <div class="row">
                    <div class="col-sm-12">
                        <section class="panel">
                          
                        <table class="table convert-data-table data-table">
                        <thead>
                        <tr>
                            <th>
                                Sub Categoy ID
                            </th>
                            <th>
                               Sub Category Name
                            </th>
                             <th>
                                Category Name
                            </th>
                            <th>
                                Sub Category Status
                            </th>
                            <th>
                                Action
                            </th>
                           
                        </tr>
                        </thead>
                        <tbody>
                          @can('SubCategory access')
                          @foreach($subcategories as $subcategory)  
                        <tr>
                            <td>
                               {{$subcategory->id}}
                            </td>
                            <td>
                                {{$subcategory->sub_category}}
                            </td>
                             <td>
                               <?php echo $category = DB::table('category')->where('id', '=', $subcategory->category_id)->value('category_name');?>
                            </td>

                            <td>
                                @if($subcategory->status == 0)
                                <span>Active</span>
                                @endif
                           
                                @if($subcategory->status != 0)
                                <span>In Active</span>
                                @endif
                              
                            </td>

                            <td>
                                <div class="actionmenu">
                                    <ul>
                                        @can('SubCategory edit')
                                        <li><a href="{{route('admin.subcategories.edit', $subcategory->id)}}"><i class="fa fa-pencil-square-o"></i></a></li>
                                        @endcan

                                        @can('SubCategory delete')
                                        <li>
                                            <form action="{{route('admin.subcategories.destroy', $subcategory->id)}}">
                                               @csrf
                                               @method('delete')
                                               <button type="submit"> <i class="fa fa-trash-o m-r-5"></i></i></button>
                                               
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