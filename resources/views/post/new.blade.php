@extends('layouts.app')
@section('content')
 <div class="wrapper">
        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                            <header class="panel-heading ">
                               New Post
                                <span class="tools pull-right">
                                    @can('Post create')
                                    <a href="{{route('admin.posts.create')}}"> <button type="button" class="btn btn-primary m-b-10">Post</button></a>
                                    @endcan
                                </span>
                            </header>
              <div class="row">
                <div class="col-md-12">
                    <section class="panel">
                     
                        <div class="panel-body">
                            <form method="POST" action="{{ route('admin.posts.store') }}" enctype="multipart/form-data">
                                @csrf
                                @method('post')
                                <div>
                                    <h3>Step 1</h3>
                                    <section>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="userName">Post Title</label>
                                            <div class="col-lg-10">
                  <input id="title" type="text" name="title" value="{{ old('title') }}"      placeholder="Enter title" class="form-control" />

                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="password"> Post Description</label>
                                            <div class="col-lg-10">
                                               <textarea name="description" id="textarea" placeholder="Enter description" class="form-control" rows="5">{{ old('description') }}</textarea>

                                            </div>
                                        </div>

                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="confirm">Post Category</label>
                                            <div class="col-lg-10">
                                             <select class="form-control" name="category_id" id="sub_category_name">
                                                <option value="">Select Category</option>
                                                @foreach($category as $cat)
                                                <option value="{{$cat->id}}">{{$cat->category_name}}</option>
                                                @endforeach
                                              </select>
                                            </div>
                                        </div>

                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="confirm">Sub Category</label>
                                            <div class="col-lg-10">
                                              <select class="form-control" name="subcategory_id" id="sub_category" required="">
                                                    <option value="">Select Sub Category</option>
                                                </select>
                                            </div>
                                        </div>
                                        

                        <div class="form-group clearfix">
                            <label class="col-lg-2 col-sm-2 control-label">File input</label>
                            <div class="col-lg-5">
                <input  class="form-control" type="file"  name="post_image">
                            </div>

                             <div class="col-lg-5">
                                <select class="form-control" name="image_position">
                                    <option value="">Image Position</option>
                                    <option value="pull-left">Left Side</option>
                                    <option value="pull-right">Right Side</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group clearfix">
                            <label class="col-lg-2 col-sm-2 control-label">Static control</label>
                            <div class="col-lg-10">
                                <select class="form-control input-lg m-b-10" name="publish">
                                   <option value="0">Draft</option>
                                    <option value="1">Publish</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 col-sm-2 control-label"></label>
                            <div class="col-lg-2">
                                <button type="submit" class="btn btn-success">Submit Now</button>
                            </div>
                        </div>

                        </section>
  
      
                                </div>
                            </form>
                        </div>
                    </section>

                </div>

            </div><!---form data--->          
                </section>    
      </div>
    </div>
  </div>

                       
@endsection
