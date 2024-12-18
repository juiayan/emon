<button type="button" class="btn btn-primary waves-effect waves-light"
                                            data-bs-toggle="modal" data-animation="bounce"
                                            data-bs-target=".bs-example-modal-lg">Add Image Category</button>
                                        <!--  Modal content for the above example -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
                                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title align-self-center"
                id="myLargeModalLabel">Image Category</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"
            aria-label="Close"></button>
            </div>
        <div class="modal-body">
        <form role="form" action="{{ route('admin.storeimagecategory')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('post')

                            

                                
                                <div class="form-group">
                                    <label>Image Category</label>
                                    <input type="text" class="form-control" name="image_category" placeholder="Enter Image Category">
                                </div>

                              

                               <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status">
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