<button type="button" class="btn btn-primary waves-effect waves-light"
                                            data-bs-toggle="modal" data-animation="bounce"
                                            data-bs-target=".bs-example-modal-lg">Add Our Team</button>
                                        <!--  Modal content for the above example -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
                                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title align-self-center"
                id="myLargeModalLabel">Our Team</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"
            aria-label="Close"></button>
            </div>
        <div class="modal-body">
         <form role="form" action="{{ route('admin.administrtive.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter  Name" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Designation</label>
                                    <input type="text" class="form-control" name="designation" placeholder="Enter Designation">
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Qualification</label>
                                    <input type="text" class="form-control" name="qualification" placeholder="Enter Qualification">
                                </div>


                             

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Image</label>
                                    <input type="file" class="form-control" name="admin_image" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Profile Image</label>
                                    <input type="file" class="form-control" name="profile_image" required>
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Position</label>
                                    <input type="text" class="form-control" name="position" placeholder="Enter Position" required>
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