@extends('layouts.app')
@section('content')
<div class="wrapper">

            <div class="row">
                <div class="col-lg-5">
                    <section class="panel">
                        <header class="panel-heading">
                            Slider
                        </header>
                        <div class="panel-body">
                    <form role="form" action="{{ route('admin.sliders.update',$slider->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Slider Name</label>
                                    <input type="text" class="form-control" name="name" value="{{$slider->name}}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Slider Title</label>
                                    <input type="text" class="form-control" name="title" value="{{$slider->title}}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Slider Image</label>
                                    @if($slider->slider_images !=null)
                                    <img src="{{asset('uploads/slider_images/'.$slider->slider_image)}}" />
                                    @endif
                                    <input type="file" class="form-control" name="slider_image">

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
                    </section>
                </div>

                        </div>
                    </section>
                </div>
            </div>
    </div>        
@endsection