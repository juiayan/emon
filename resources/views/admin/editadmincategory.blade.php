@extends('layouts.app')
@section('content')
<div class="wrapper">

            <div class="row">
                <div class="col-lg-7">
                    <section class="panel">
                        <header class="panel-heading">
                           Administrative Category
                        </header>
                        <div class="panel-body">
                    <form role="form" action="{{ route('admin.adminicategories.update', $admincategory->id)}}" method="POST">
                        @csrf
                        @method('put')
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Administrative Category</label>
                                    <input type="text" class="form-control" name="name" value="{{$admincategory->name}}">
                                </div>


                         
                                <button type="submit" class="btn btn-info">Submit</button>
                            </form>

                        </div>
                    </section>
                </div>

            </div>
    </div>        
@endsection