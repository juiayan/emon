@extends('layouts.app')
@section('title', 'Contact Details List')
@section('content')
  <div class="row">
    <div class="col-md-12">
        <div class="card">
                <div class="card-header">
                    <h3 class="card-title">@yield('title')</h3>
                    <div class="card-header-btn">
                        @include('modal-file.add_contact_detail')
                    </div>
                </div>

            <div class="card-body">
                <div class="table-responsive">
                     <table id="datatable" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>
                                 ID
                            </th>
                            <th>
                                Address
                            </th>

                            <th>
                                phone
                            </th>

                            <th>
                                Action
                            </th>
                           
                        </tr>
                        </thead>
                        <tbody>
                          @can('Contactus access')
                          @foreach($contactus as $contact)  
                        <tr>
                            <td>
                               {{$contact->id}}
                            </td>
                            <td>
                                {{$contact->address}}
                            </td>
                            <td>
                                {{$contact->phone_one}}
                            </td>


                           
                            <td>
                            
                                        @can('Contactus edit')
                                         @include('modal-file.edit_contact_detail')
                                        @endcan

                                        @can('Contactus delete')
                                       
                                            <form action="{{route('admin.contactus.destroy', $contact->id)}}">
                                               @csrf
                                               @method('delete')
                                               <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o m-r-5"></i></button>
                                               
                                            </form>
                                       
                                        @endcan
                                    </ul>
                                </div>
                            </td>
                          
                     
                        </tr>
                        @endforeach
                        @endcan
                     
                        </tbody>
                        </table>
                </div>    
            </div>
        </div>
    </div>
</div>    
                
<div class="wrapper">

            <div class="row">
                <div class="col-lg-5">
                    <section class="panel">
                        <header class="panel-heading">
                            Contact US
                        </header>
                        <div class="panel-body">
                   
                        </div>
                    </section>
                </div>
                <div class="col-lg-7">
                    <section class="panel">
                        <header class="panel-heading">
                            Contact Us List
                        </header>
                        <div class="panel-body">
                            <div class="row">
                    <div class="col-sm-12">
                        <section class="panel">
                          
                        
                        </section>
                    </div>

                </div>
                        </div>
                    </section>
                </div>
            </div>
    </div>        
@endsection