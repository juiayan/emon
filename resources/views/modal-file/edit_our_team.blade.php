<button type="button" class="btn btn-primary waves-effect waves-light"
                                            data-bs-toggle="modal" data-animation="bounce"
                                            data-bs-target=".bs-example-modal-lg-{{$member->id}}"><i class="far fa-edit"></i></button>
                                        <!--  Modal content for the above example -->
<div class="modal fade bs-example-modal-lg-{{$member->id}}" tabindex="-1" role="dialog"
                                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title align-self-center"
                id="myLargeModalLabel">Main Menu-{{$member->name}}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"
            aria-label="Close"></button>
            </div>
        <div class="modal-body">
        <form role="form" action="{{ route('admin.administrtive.update', $member->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                            <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" name="name" value="{{$member->name}}">
                            </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Designation</label>
                                <input type="text" class="form-control" name="designation" value="{{$member->designation}}">
                                </div>

                                <div class="form-group">
                                     <label for="exampleInputEmail1">Qualification</label>
                                    
                            <input type="text" class="form-control" name="qualification" value="{{$member->qualification}}">
                                </div>



                                <div class="form-group">
                                    <label for="exampleInputEmail1">Position</label>
                                <input type="text" class="form-control" name="position" value="{{$member->position}}">
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Image</label>
                                    @if($member->admin_image > 0)
                                    <img src="{{asset('uploads/adminmember_images/'.$member->admin_image)}}" width="100" height="100">
                                    @endif

                                    <input type="file" name="admin_image" class="form-control">
                                    
                                </div>

                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Profile Image</label>
                                     @if($member->profile_image > 0)
                                    <img src="{{asset('uploads/profileimage/'.$member->profile_image)}}" width="100" height="100">
                                    @endif
                                    <input type="file" name="profile_image" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Profile</label>
                                    <textarea  name="profile" id="textarea">{{$member->profile}}</textarea>
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