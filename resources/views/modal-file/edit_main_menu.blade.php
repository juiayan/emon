<button type="button" class="btn btn-primary waves-effect waves-light"
                                            data-bs-toggle="modal" data-animation="bounce"
                                            data-bs-target=".bs-example-modal-lg-{{$category->id}}"><i class="far fa-edit"></i></button>
                                        <!--  Modal content for the above example -->
<div class="modal fade bs-example-modal-lg-{{$category->id}}" tabindex="-1" role="dialog"
                                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title align-self-center"
                id="myLargeModalLabel">Main Menu-{{$category->category_name}}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"
            aria-label="Close"></button>
            </div>
        <div class="modal-body">
         <form role="form" action="{{ route('admin.categories.update', $category->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category Name</label>
                                    <input type="text" class="form-control" name="category_name" value="{{$category->category_name}}">
                                </div>

                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Position</label>
                                    <input type="text" class="form-control" name="position" value="{{$category->position}}">
                                </div>

                                 <div class="form-group">
                                    
                                    <label for="exampleInputEmail1">Category Image</label>
                                  <input type="file" name="category_image">
                                 </div>

                                  <div class="form-group">
                                    
                                    <label for="exampleInputEmail1">Sub Category Status</label>
                                   <select class="form-control" name="subcat_status" required>
                                        <option value="">Sub Category Status</option>
                                        <option value="1">No</option>
                                        <option value="2">Yes</option>
                                    </select>
                                 </div> 



                                <div class="form-group">
                                     <label for="exampleInputEmail1">Category Status</label>
                                    
                                     <select class="form-control" name="status">
                                        <option value="0">Active</option>  
                                        <option value="1">In Active</option> 
                                     </select>
                                </div>
                               
            
                 
                                <button type="submit" class="btn btn-info">Submit</button>
                            </form>
        </div>
    </div>
    <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
                                        <!-- /.modal -->