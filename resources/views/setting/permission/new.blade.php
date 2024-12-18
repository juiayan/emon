@extends('layouts.app')
 @section('title', 'New Page Permission')
@section('content')
   <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                <div class="card-header">
                                        <h3 class="card-title">@yield('title')</h3>
                    <div class="card-header-btn">
                                 
                    </div>
                </div>
                                    <div class="card-body">
                                      <form method="POST" action="{{ route('admin.permissions.store')}}">
                  @csrf
                  @method('post')
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Permision</label>
                        <div class="col-sm-5">
                          <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                        </div>
                    </div>

                     <div class="form-group row">
                      <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
                                    </div>
                                </div>
                            </div>
    </div>                                  
@endsection