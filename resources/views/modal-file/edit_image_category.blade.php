<button type="button" class="btn btn-primary waves-effect waves-light"
                                            data-bs-toggle="modal" data-animation="bounce"
                                            data-bs-target=".bs-example-modal-lg_{{$category->id}}"><i class="far fa-edit"></i></button>
                                        <!--  Modal content for the above example -->
<div class="modal fade bs-example-modal-lg_{{$category->id}}" tabindex="-1" role="dialog"
                                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title align-self-center"
                id="myLargeModalLabel">Edit Image Category->{{$category->image_category}}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"
            aria-label="Close"></button>
            </div>
        <div class="modal-body">
         <form role="form" action="{{ route('admin.updateimagecategory.update', $category->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Image Category</label>
                                    <input type="text" class="form-control" name="image_category" value="{{$category->image_category}}">
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