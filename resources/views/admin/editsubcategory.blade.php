@extends('layouts.app')
@section('content')
<div class="wrapper">

            <div class="row">
                <div class="col-lg-7">
                    <section class="panel">
                        <header class="panel-heading">
                            Sub Category
                        </header>
                        <div class="panel-body">
                    <form role="form" action="{{ route('admin.subcategories.update', $subcategory->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                            <div class="form-group">
                                    <label for="exampleInputEmail1">Category Name</label>
                                <select class="form-control" name="category_id" required>
                                   
                                    @foreach($categories as $cat)
        <option value="{{$cat->id}}">{{$cat->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Sub Category Name</label>
                                    <input type="text" class="form-control" name="sub_category" value="{{$subcategory->sub_category}}">
                                </div>

                                <div class="form-group">
                                    <label>Short Description</label>
        <textarea class="form-control" name="short_description">{{$subcategory->short_description}}</textarea>
                                   
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

            </div>
    </div>        
@endsection