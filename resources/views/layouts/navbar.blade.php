
  <!-- Header -->
  <header id="header" class="header">
    <div class="header-top bg-theme-color-2 sm-text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="widget no-border m-0">
              <ul class="list-inline">
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-white"></i> <a class="text-white" href="#">123-456-789</a> </li>
                <li class="text-white m-0 pl-10 pr-10"> <i class="fa fa-clock-o text-white"></i> Mon-Fri 8:00 to 2:00 </li>
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-white"></i> <a class="text-white" href="#">contact@yourdomain.com</a> </li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="widget no-border m-0">
              <ul class="list-inline text-right sm-text-center">
                <li>
                  Login
                </li>
                <li class="text-white">|</li>
                <li>
                   @if(Route::has('admin.login'))
                <a href="{{ route('admin.login') }}" class="py-2 px-6 flex hover:text-blue-500" target="_blank">Admin</a>

                        @endif
                </li>
              
                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
        <div class="container">
          <nav id="menuzord-right" class="menuzord default">
            <a class="menuzord-brand pull-left flip" href="javascript:void(0)">
              <img src="{{asset('frontend/images/logo-wide.png')}}" alt="">
            </a>
            <ul class="menuzord-menu">
              <li class="active"><a href="#home">Home</a></li>
              <li><a href="#">Features</a></li>
              <li><a href="#">Gallery</a></li>
              <li><a href="#home">Courses</a></li>
              <li><a href="#home">Teachers</a></li>
              <li><a href="#">Blog</a></li>
            
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>