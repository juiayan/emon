        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                      

                        <li style="background-color: #20bf6b;">
                            <a href="javascript: void(0);" class="waves-effect">
                                <i class="mdi mdi-speedometer"></i>
    
                                <span>Dashboards</span>
                            </a>
                       
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="mdi mdi-email-variant"></i>
                                <span>Settings</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                                       <li>
                                  
                            @canany('Role access','Role add','Role edit','Role delete')
                                        <a href="{{ route('admin.roles.index') }}">
                                                   Role
                                      
                                                </a>
                            @endcanany
                        
                    </li>
                        <li>
                @canany('Permission access','Permission add','Permission edit','Permission delete')
                 <a href="{{ route('admin.permissions.index') }}">Permission</a>
       
                @endcanany
                            </li>
                            <li>

                            @canany('User access','User add','User edit','User delete')

                                <a href="{{ route('admin.users.index')}}">User</a>
                            @endcanany

        
                    
                                </li>

                            <li>

                            @canany('Post access','Post add','Post edit','Post delete')
                             <a href="{{ route('admin.posts.index')}}">
                                
                                Post
                            </a>
                            @endcanany

        
                    
                                </li> 
                            </ul>
                        </li>


                        <!-- UI Elements -->
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="mdi mdi-briefcase-check"></i>
                                <span>CMS Setup</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                               @can('Category access')
                            <li><a href="{{route('admin.categories.index')}}">Main Menu</a></li>
                            @endcan
                            @can('SubCategory access')
                            <li><a href="{{route('admin.subcategories.index')}}">Sub Menu</a></li>
                            @endcan

                            @can('Mainslider access')
                            <li><a href="{{route('admin.sliders.index')}}">Slider</a></li>
                            @endcan

                             @can('Administrative access')
                            <li><a href="{{route('admin.administrtive.index')}}">Our Team</a></li>
                            @endcan

                @can('access gallery image list')
                <li><a href="{{route('admin.imagecategory.index')}}">Image Category</a></li>
                @endcan


                             @can('access gallery image list')
                            <li><a href="{{route('admin.galleryimage.index')}}">Gallery Image</a></li>
                            @endcan

                             @can('Fleet access')
                            <li><a href="{{route('admin.fleet.index')}}">Fleet</a></li>
                            @endcan

                            @can('Principal access')
                            <li><a href="{{route('admin.principal.index')}}">Principal & Service</a></li>
                            @endcan

                            @can('CvFormat access')
                            <li><a href="{{route('admin.cvformat.index')}}">CV Format</a></li>
                            @endcan


                            @can('Contactus access')
                            <li><a href="{{route('admin.contactus.index')}}">Contact Us</a></li>
                            @endcan

                            </ul>
                        </li>






                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->

  