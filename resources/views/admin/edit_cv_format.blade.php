@extends('layouts.app')
@section('content')
<div class="wrapper">

            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Category
                        </header>
                        <div class="panel-body">
                    <form role="form" action="{{ route('admin.cvformat.update', $cvformat->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                               

                                 <div class="form-group">
                                    
                                    <label for="exampleInputEmail1">CV Format File</label>
                                  <input type="file" name="cv_file">
                                 </div>



                              
                               
            
                 
                                <button type="submit" class="btn btn-info">Submit</button>
                            </form>

                        </div>
                    </section>
                </div>

            </div>
    </div>        
@endsection