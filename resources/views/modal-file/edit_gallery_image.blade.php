<button type="button" class="btn btn-primary waves-effect waves-light"
                                            data-bs-toggle="modal" data-animation="bounce"
                                            data-bs-target=".bs-example-modal-lg_{{$image->id}}"><i class="far fa-edit"></i></button>
                                        <!--  Modal content for the above example -->
<div class="modal fade bs-example-modal-lg_{{$image->id}}" tabindex="-1" role="dialog"
                                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title align-self-center"
                id="myLargeModalLabel">Edit Gallery Image</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"
            aria-label="Close"></button>
            </div>
        <div class="modal-body">
         <form role="form" action="{{ route('admin.updateimage.update', $image->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Image Category</label>
                                   <select class="form-control" name="image_category_id">
                                    @foreach(\App\Models\ImageCategory::all() as $category)
                                       <option value="{{$category->id}}" {{$category->id == $image->image_category_id ? 'selected' : ''}}>{{$category->image_category}}</option>
                                    @endforeach   
                                   </select>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Image Title</label>
                                    <input type="text" class="form-control" name="image_title" value="{{$image->image_title}}">
                                </div>

                             

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Image</label>
                                    @if($image->image_name !=null)
                                    <img src="{{asset('uploads/gallery_images/'. $image->image_name)}}" width="100" height="100">
                                    @endif
                                    <input type="file" class="form-control" name="image_name">
                                </div>

                            
                               <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status" required>
                                        <option value="0">Active</option>
                                        <option value="1">In Active</option>
                                    </select>
                                </div>
            
                        <div class="submit-btn">
                            <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                                
                            </form>

        </div>
    </div>
    <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
                                        <!-- /.modal -->