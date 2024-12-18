@extends('layouts.app')
@section('content')
<div class="wrapper">
  <div class="row">
    <div class="col-sm-12">
          <section class="panel">
                <header class="panel-heading">
                   Edit Post
                </header>
                <div class="panel-body">
        <form method="POST" action="{{ route('admin.posts.update',$post->id)}}" class="form-horizontal tasi-form" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                          
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Post Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="title" value="{{$post->title}}">
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <label class="col-lg-2 col-sm-2 control-label">Description</label>
                            <div class="col-lg-10">
                                <textarea name="description" id="textarea">{{ $post->description}}</textarea>
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Category</label>
                            <div class="col-sm-10">
                                <select class="form-control input-lg m-b-10" name="category_id" required>
                                  @foreach($category as $cat)
                                  <option value="{{$cat->id}}" <?php if($post->category_id == $cat->id) echo 'selected'?>>{{$cat->category_name}}</option>
                                  @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Sub Category</label>
                            <div class="col-sm-10">
                                <select class="form-control input-lg m-b-10" name="subcategory_id">
                                    <option value="">Select Sub Category</option>
                                  @foreach($subcategory as $subcat)
                                  <option value="{{$subcat->id}}">{{$subcat->sub_category}}</option>
                                  @endforeach
                                </select>
                            </div>
                        </div>

                                    
                        <div class="form-group">
                            <label class="col-lg-2 col-sm-2 control-label">File Images</label>
                            <div class="col-lg-5">
                                <input class="form-control" type="file"  name="post_image">
                            </div>

                             <div class="col-lg-5">
                                 <select class="form-control" name="image_position">
                                    <option value="">Image Position</option>
                                    <option value="pull-left">Left Side</option>
                                    <option value="pull-right">Right Side</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 col-sm-2 control-label">Static control</label>
                            <div class="col-lg-10">
                                <select class="form-control input-lg m-b-10" name="publish">
                                   <option value="0">Draft</option>
                      <option value="1" @if($post->publish) selected @endif>Publish</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 col-sm-2 control-label"></label>
                            <div class="col-lg-2">
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </div>

                    </form>
                </div>
            </section>
      
      
    </div>
  </div>
</div>
@endsection
