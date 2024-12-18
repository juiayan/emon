@extends('layouts.app')
@section('content')
<div class="wrapper">

            <div class="row">
                <div class="col-lg-7">
                    <section class="panel">
                        <header class="panel-heading">
                            Edit Principal & Service
                        </header>
                        <div class="panel-body">
                    <form role="form" action="{{ route('admin.principal.update', $principal->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                            <div class="form-group">
                                    <label for="exampleInputEmail1">Princial  Name</label>
                            <input type="text" class="form-control" name="principal_name" value="{{$principal->principal_name}}">
                            </div>

                            <div class="form-group">
                                    <label for="exampleInputEmail1">Type of Service</label>
                                <input type="text" class="form-control" name="typeof_service" value="{{$principal->typeof_service}}">
                            </div>

                                      
                 
                                <button type="submit" class="btn btn-info">Submit</button>
                            </form>

                        </div>
                    </section>
                </div>

            </div>
    </div>        
@endsection