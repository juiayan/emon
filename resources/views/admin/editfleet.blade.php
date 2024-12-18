@extends('layouts.app')
@section('content')
<div class="wrapper">

            <div class="row">
                <div class="col-lg-7">
                    <section class="panel">
                        <header class="panel-heading">
                            Edit Fleet
                        </header>
                        <div class="panel-body">
                    <form role="form" action="{{ route('admin.fleet.update', $fleet->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                            <div class="form-group">
                                    <label for="exampleInputEmail1">Vessel Name</label>
                            <input type="text" class="form-control" name="vessel_name" value="{{$fleet->vessel_name}}">
                            </div>

                            <div class="form-group">
                                    <label for="exampleInputEmail1">Vessel Type</label>
                                <input type="text" class="form-control" name="vessel_type" value="{{$fleet->vessel_type}}">
                            </div>

                            <div class="form-group">
                                     <label for="exampleInputEmail1">Flag</label>
                                    
                            <input type="text" class="form-control" name="flag" value="{{$fleet->flag}}">
                            </div>



                            <div class="form-group">
                                    <label for="exampleInputEmail1">Service</label>
                                <input type="text" class="form-control" name="service" value="{{$fleet->service}}">
                            </div>

                           
                 
                                <button type="submit" class="btn btn-info">Submit</button>
                            </form>

                        </div>
                    </section>
                </div>

            </div>
    </div>        
@endsection