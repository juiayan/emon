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
                    <form role="form" action="{{ route('admin.sliders.store')}}" method="POST" enctyoe="multipart/form-data">
                        @csrf
                        @method('post')
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Slider Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter Slider Name">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Slider Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Enter Slider Title">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Slider Image</label>
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
                <div class="col-lg-7">
                    <section class="panel">
                        <header class="panel-heading">
                            Slider List
                        </header>
                        <div class="panel-body">
                            <div class="row">
                    <div class="col-sm-12">
                        <section class="panel">
                          
                        <table class="table convert-data-table data-table">
                        <thead>
                        <tr>
                            <th>
                                Slider ID
                            </th>
                            <th>
                                Slider Image
                            </th>

                            <th>
                                Action
                            </th>
                           
                        </tr>
                        </thead>
                        <tbody>
                          @can('Mainslider access')
                          @foreach($sliders as $slider)  
                        <tr>
                            <td>
                               {{$slider->id}}
                            </td>
                            <td>
                                <img src="{{asset('uploads/slider_images/'.$slider->slider_image)}}" width="150" height="80">
                               
                            </td>

       
                            <td>
                                <div class="actionmenu">
                                    <ul>
                                        @can('Mainslider edit')
                                        <li><a href="{{route('admin.sliders.edit', $slider->id)}}"><i class="fa fa-pencil-square-o"></i></a></li>
                                        @endcan

                                        @can('Mainslider delete')
                                        <li>
                                            <form action="{{route('admin.sliders.destroy', $slider->id)}}">
                                               @csrf
                                               @method('delete')
                                                <i class="fa fa-trash-o m-r-5"></i></i>
                                            </form>
                                        </li>
                                        @endcan
                                    </ul>
                                </div>
                            </td>
                          
                     
                        </tr>
                        @endforeach
                        @endcan
                     
                        </tbody>
                        </table>
                        </section>
                    </div>

                </div>
                        </div>
                    </section>
                </div>
            </div>
    </div>        
@endsection