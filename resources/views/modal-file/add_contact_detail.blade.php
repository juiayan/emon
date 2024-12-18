<button type="button" class="btn btn-primary waves-effect waves-light"
                                            data-bs-toggle="modal" data-animation="bounce"
                                            data-bs-target=".bs-example-modal-lg">Add Contact Details</button>
                                        <!--  Modal content for the above example -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
                                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title align-self-center"
                id="myLargeModalLabel">Gallery Image</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"
            aria-label="Close"></button>
            </div>
        <div class="modal-body">
       <form role="form" action="{{ route('admin.contactus.store')}}" method="POST">
                        @csrf
                        @method('post')
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Address</label>
                                  <textarea class="form-control" cols="10" rows="10" name="address"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Phone One</label>
                                    <input type="text" class="form-control" name="phone_one" placeholder="Enter Phone One">
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Phone Two</label>
                                    <input type="text" class="form-control" name="phone_two" placeholder="Enter Phone Two">
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Phone Three</label>
                                    <input type="text" class="form-control" name="phone_three" placeholder="Enter Phone Three">
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Phone Four</label>
                                    <input type="text" class="form-control" name="phone_three" placeholder="Enter Phone Four">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email One</label>
                                    <input type="email" class="form-control" name="email_one" placeholder="Enter Email One">
                                </div>

                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Email Two</label>
                                    <input type="email" class="form-control" name="email_two" placeholder="Enter Email Two">
                                </div>


                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Email Three</label>
                                    <input type="email" class="form-control" name="email_three" placeholder="Enter Email Three">
                                </div>

                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Email Four</label>
                                    <input type="email" class="form-control" name="email_four" placeholder="Enter Email Four">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description</label>
                                  <textarea class="form-control" cols="10" rows="10" name="description"></textarea>
                                </div>

                               <div class="form-group">
                                    <label for="exampleInputEmail1">Location</label>
                                    <select class="form-control" name="location_id">
                                        <option value="1">Main Canpus</option>
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